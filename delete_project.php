<?php
include('config.php'); // Include your database connection file

// Check if project_id is provided in the URL
if (isset($_GET['project_id'])) {
    $project_id = $_GET['project_id'];

    // Prepare and execute the DELETE query
    $deleteQuery = "DELETE FROM projects WHERE project_id = ?";
    $stmt = mysqli_prepare($conn, $deleteQuery);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "i", $project_id);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Deletion successful
        mysqli_close($conn);
        echo '<script>alert("Project deleted successfully from our database 👍");</script>';
        echo '<script>window.location.href = "admin-panel.php";</script>';
        exit();
    } else {
        // Error in deletion
        // Log the error or display a user-friendly message
        echo "Error deleting project.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Invalid request.";
}
?>
