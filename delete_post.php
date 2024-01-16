<?php
include('config.php'); // Include your database connection file

// Check if post_id is provided in the URL
if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    // Prepare and execute the DELETE query
    $deleteQuery = "DELETE FROM posts WHERE post_id = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $post_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Deletion successful
        mysqli_close($conn);
        echo '<script>alert("Post deleted successfully from our database 👍");</script>';
        echo '<script>window.location.href = "admin-panel.php";</script>';
        exit();
    } else {
        // Error in deletion
        echo "Error deleting post: " . mysqli_error($conn);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request.";
}
?>
