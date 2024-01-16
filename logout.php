<?php
session_start(); // Start the session

// Destroy the session to log the user out
session_destroy();

// Redirect to the login page (or any other desired page)
echo '<script>alert("Hope to see you again! 👋");</script>';
echo '<script>window.location.href = "index.php";</script>';
exit();
?>