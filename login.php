<?php

session_start();

include("config.php");

// login form 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to check if the user exists in the database and retrieve their role
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row["name"];

        $_SESSION["email"] = $email;
        $_SESSION["name"] = $name;

        if ($email === "admin@gmail.com") {
            // Redirect admin (you) to admin.php
            header('Location: admin-panel.php');
            exit();
        } else {
            // Redirect other users to index.php
            header('Location: index.php');
            exit();
        }
    } else {
        echo '<script>alert("Login failed 😐! Please check your email and password.");</script>';
    }
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body
    class="bg-gray-100 md:bg-[url('./images/bg6.jpg')] bg-cover bg-center h-[100vh] flex items-center justify-center font-[Poppins]">
    <div class="bg-white w-full md:w-1/2 lg:w-1/2 xl:w-1/3 py-10 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4 flex justify-center items-center">Welcome back! Login here 👇</h1>
        <form action="#" method="POST">
            <div class="px-10 py-3">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    required>
            </div>
            <div class="mb-6 px-10 py-3">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                    required>
            </div>
            <div class="mb-6 px-10 py-5 flex justify-center">
                <button type="submit"
                    class="bg-green-500 text-white rounded-lg px-4 py-2 w-full hover:bg-green-600 transition duration-300 ease-in-out border-2">Login</button>
            </div>
        </form>
        <div class="text-center">
            <p class="text-gray-600">Don't have an account? <a href="reg.php"
                    class="text-green-500 hover:underline">Sign
                    up</a></p>
        </div>
    </div>
</body>

</html>