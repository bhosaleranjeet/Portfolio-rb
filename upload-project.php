<?php

include('config.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form input data
    $title = $_POST["title"];
    $description = $_POST["description"];
    $photo_file = $_FILES["photo_file"];
    $project_link = $_POST["project_link"]; // New field for project link

    // Check if a photo was uploaded
    if ($photo_file["error"] === UPLOAD_ERR_OK) {
        // Read the contents of the uploaded file
        $photo_data = file_get_contents($photo_file["tmp_name"]);

        // Prepare an SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO Projects (title, photo, details, project_link, upload_date) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $title, $photo_data, $description, $project_link);

        // Execute the statement
        if ($stmt->execute()) {
            echo '<script>alert("Project uploaded successfully!");</script>';
            echo '<script>window.location.href = "admin-panel.php";</script>';
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error uploading the photo.";
    }

    // Close the database connection
    $conn->close();
} else {
    // If the form was not submitted, you can redirect or display an error message here.
    echo "Form not submitted.";
}
?>