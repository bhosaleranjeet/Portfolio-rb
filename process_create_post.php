<?php
include('config.php'); // Make sure this includes your database configuration

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $description = $_POST["description"];

    // Check if a file was uploaded
    if (isset($_FILES["photo_file"])) {
        $file = $_FILES["photo_file"];

        // Check for errors during file upload
        if ($file["error"] === 0) {
            // Get the temporary location of the uploaded file
            $tempFile = $file["tmp_name"];

            // Define the upload directory and generate a unique filename
            $uploadDir = "uploads/"; // Create this directory if it doesn't exist
            $fileName = uniqid() . '_' . $file["name"];
            $uploadFile = $uploadDir . $fileName;

            // Move the uploaded file to the desired location
            if (move_uploaded_file($tempFile, $uploadFile)) {
                // File uploaded successfully
                // Now you can store the file path ($uploadFile) and description in your database

                // Validate and sanitize the description
                $description = mysqli_real_escape_string($conn, $description); // Sanitize for SQL

                // Insert the post data into the posts table (use prepared statements for security)
                $insertQuery = "INSERT INTO posts (post_url, description) VALUES (?, ?)";
                $stmt = mysqli_prepare($conn, $insertQuery);

                // Bind the parameters
                mysqli_stmt_bind_param($stmt, "ss", $photo_url, $description);

                // Set the values
                $photo_url = $uploadFile;

                // Execute the statement
                if (mysqli_stmt_execute($stmt)) {
                    // Successful insertion
                    echo '<script>alert("Post uploaded successfully!");</script>';
                    // Redirect to the admin panel or another appropriate page after creating the post
                    echo '<script>window.location.href = "admin-panel.php";</script>';
                    exit();
                } else {
                    // Error in insertion
                    echo "Error creating post: " . mysqli_error($conn);
                }

                // Close the statement
                mysqli_stmt_close($stmt);
            } else {
                echo "Error uploading the file.";
            }
        } else {
            echo "Error during file upload. Error code: " . $file["error"];
        }
    } else {
        echo "No file uploaded.";
    }
}

// Close the database connection when done
mysqli_close($conn);
?>
