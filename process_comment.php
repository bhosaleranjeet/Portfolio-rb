<?php
// Include your database connection code here (e.g., mysqli_connect).
session_start();
include('config.php');

// Retrieve form data
$post_id = $_POST['post_id'];
$user_name = $_POST['user_name'];
$comment_text = $_POST['comment'];

// Insert data into the database
$sql = "INSERT INTO comments (post_id, user_name, comment_text) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "iss", $post_id, $user_name, $comment_text);

if (mysqli_stmt_execute($stmt)) {
    // Data inserted successfully
    echo "";
    echo '<script>alert("Thankyou for commenting ❤");</script>';
    echo '<script>window.location.href = "posts.php";</script>';
    exit();
} else {
    // Error handling
    echo "Error: " . mysqli_error($connection);
}

// Close the database connection
mysqli_close($conn);
?>

