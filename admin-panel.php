<?php

session_start();

if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
    if (!isset($_SESSION["welcome_message_displayed"]) || $_SESSION["welcome_message_displayed"] !== true) {
        $name = $_SESSION["name"]; // Get the username from the session
        $welcomeMessage = 'Welcome ' . $name . '! You are logged in 🙌';
        echo '<script>alert("' . $welcomeMessage . '");</script>';
        $_SESSION["welcome_message_displayed"] = true; // Set the flag to indicate the message has been displayed
    }
    // echo '<a href="logout.php">Logout</a>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Panel</title>
    <!-- <link rel="stylesheet" href="input.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins]">
    <div class="landing-page bg-gray-100 md:bg-[url('./images/bg6.jpg')] bg-cover bg-center md:h-[100vh]">

        <div class="pb-5">
            <!-- navbar of the website -->
            <div class="header py-5 ">
                <nav
                    class="navbar flex justify-between px-5 py-5 md:mx-36 mx-10 rounded-md bg-white/60 border-2 border-white/10 shadow-md">
                    <div class="flex items-center">
                        <h1 class="text-lg text-green-500 font-bold">ADMIN PANEL</h1>
                    </div>
                    <a href="logout.php">
                        <button type="button"
                            class="bg-white px-5 py-2 border-2 border-black rounded-md hover:bg-red-500 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                            Logout
                        </button>
                    </a>
                </nav>
            </div>

            <!-- admin options -->
            <div
                class="flex justify-between px-5 py-1 md:mx-36 mx-10 mb-5 rounded-md bg-white/60 border-2 border-white/10 shadow-md">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-20 mx-auto">
                        <div class="flex flex-col text-center w-full mb-20">
                            <h2
                                class="md:text-sm text-xs text-green-500 tracking-widest font-medium title-font md:mb-1 mb-5">
                                Welcome to
                                the
                                admin panel</h2>
                            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">All admin tool's are
                                ready
                                to use!</h1>
                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="flex rounded-lg h-full bg-white shadow-md border border-blue-400 p-8 flex-col hover:scale-105 duration-200">
                                    <div class="flex items-center mb-3">
                                        <div
                                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-blue-400 text-white flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                viewBox="0 0 24 24">
                                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-gray-900 text-lg title-font font-medium">Upload | Delete Blog's
                                        </h2>
                                    </div>
                                    <div class="flex-grow">
                                        <p class="leading-relaxed text-base">Efficiently manage your blog content.
                                            Create or
                                            delete posts with ease, keeping your website's content fresh and engaging.
                                        </p>
                                        <a href="#blog">
                                            <button type="button"
                                                class="bg-blue-400 px-5 py-1 mt-3 border-2 border-gray-200 text-white rounded-md hover:bg-blue-500 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                                                Manage Blog's
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="flex rounded-lg h-full bg-white shadow-md border border-yellow-500 p-8 flex-col hover:scale-105 duration-200">
                                    <div class="flex items-center mb-3">
                                        <div
                                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                viewBox="0 0 24 24">
                                                <circle cx="6" cy="6" r="3"></circle>
                                                <circle cx="6" cy="18" r="3"></circle>
                                                <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                                            </svg>
                                        </div>
                                        <h2 class="text-gray-900 text-lg title-font font-medium">Manage Projects</h2>
                                    </div>
                                    <div class="flex-grow">
                                        <p class="leading-relaxed text-base">Impress your audience by uploading and
                                            showcasing your latest projects. Build a stunning portfolio to highlight
                                            your
                                            work.</p>
                                        <a href="#project">
                                            <button type="button" id="manageProjectsButton"
                                                class="bg-yellow-500 px-5 py-1 mt-3 border-2 border-gray-200 text-white rounded-md hover:bg-yellow-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out">
                                                Manage project's
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div
                                    class="flex rounded-lg h-full bg-white shadow-md border border-red-500 p-8 flex-col hover:scale-105 duration-200">
                                    <div class="flex items-center mb-3">
                                        <div
                                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-red-500 text-white flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                            </svg>
                                        </div>
                                        <h2 class="text-gray-900 text-lg title-font font-medium">view Report</h2>
                                    </div>
                                    <div class="flex-grow">
                                        <p class="leading-relaxed text-base">You can download all the form submissions
                                            for here to keep track of people visited month wise or all time.</p>
                                        <a href="report.php">
                                            <button type="button" id="downloadReportButton"
                                                class="bg-red-500 px-5 py-1 mt-3 border-2 border-gray-200 text-white rounded-md hover:bg-red-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out">
                                                view now
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- blog manage section  -->

            <div class="flex flex-col px-5 md:mx-36 mx-10 md:mt-32 mt-10 rounded-md md:bg-gray-200 bg-white border-2 border-black/10 shadow-md"
                id="blog">
                <div
                    class="top flex flex-wrap md:justify-between justify-center text-center items-center w-full text-white py-5">
                    <div>
                        <h1 class="font-bold text-2xl md:text-4xl py-5 text-blue-500">
                            Manage your post's here!
                        </h1>
                    </div>
                    <div>
                        <button type="button" onclick="createpost()"
                            class="md:w-fit w-full bg-green-500 px-6 py-2 border-2 border-gray-200 text-white rounded-md hover:bg-green-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                            Create
                        </button>
                        <button type="button" onclick="deletepost()"
                            class="md:w-fit w-full bg-red-500 px-6 py-2 border-2 border-gray-200 text-white rounded-md hover:bg-red-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                            Delete
                        </button>
                    </div>
                </div>
                <div class="w-full">
                    <form id="createPostForm" style="display: none;" action="process_create_post.php" method="post"
                        enctype="multipart/form-data" class="w-full bg-white rounded p-4 mb-10 shadow-md">
                        <div class="mb-4">
                            <label for="photo_file" class="block text-gray-700 text-sm font-bold mb-2">Upload
                                Photo:</label>
                            <input type="file" id="photo_file" name="photo_file" accept="image/*" required
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700">

                        </div>

                        <div class="mb-4">
                            <label for="description"
                                class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                            <textarea id="description" name="description" rows="4" required
                                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700"></textarea>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="upload"
                                class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-green active:bg-green-700 transition duration-300 ease-in-out hover:scale-95 hover:cursor-pointer">
                        </div>
                    </form>
                </div>
                <div id="table" class="flex items-center justify-center text-center mb-10" style="display: none;">
                    <?php

                    // session_start();
                    // Assuming you have a database connection established
                    include('config.php');

                    // Query to retrieve posts
                    $query = "SELECT * FROM posts";
                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        echo '<div class="overflow-x-auto rounded-sm">';
                        echo '<table class="min-w-full table-auto border-collapse bg-white">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th class="border-2 border-black px-4 py-2">ID</th>';
                        // echo '<th class="border-2 border-black px-4 py-2">Photo</th>';
                        echo '<th class="border-2 border-black px-4 py-2">Description</th>';
                        echo '<th class="border-2 border-black px-4 py-2">Actions</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td class="border-2 border-black px-4 py-2">' . $row['post_id'] . '</td>';
                            // echo '<td class="border-2 border-black px-4 py-2"><img src="' . $row['post_url'] . '" alt="Post Image" class="max-w-xs"></td>';
                            echo '<td class="border-2 border-black px-4 py-2">' . $row['description'] . '</td>';
                            echo '<td class="border-2 border-black px-4 py-2"><a href="delete_post.php?post_id=' . $row['post_id'] . '" class="text-red-500 hover:text-red-700">Delete</a></td>';
                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';
                        echo '</div>';
                    } else {
                        echo 'No posts found.';
                    }

                    // Close the database connection when done
                    mysqli_close($conn);
                    ?>
                </div>
            </div>

            <!-- project manage section  -->

            <div class="flex flex-col px-5 md:mx-36 mx-10 my-5 rounded-md md:bg-gray-200 bg-white border-2 border-black/10 shadow-md"
                id="project">
                <div class="top flex flex-wrap md:justify-between justify-center items-center w-full text-white py-5">
                    <div>
                        <h1 class="font-bold text-2xl md:text-4xl py-5 text-yellow-500">
                            Manage your project's here!
                        </h1>
                    </div>
                    <div>
                        <button type="button" onclick="uploadproject()"
                            class="md:w-fit w-full bg-green-500 px-6 py-2 border-2 border-gray-200 text-white rounded-md hover:bg-green-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                            Upload
                        </button>
                        <button type="button" onclick="deleteproject()"
                            class="md:w-fit w-full bg-red-500 px-6 py-2 border-2 border-gray-200 text-white rounded-md hover:bg-red-600 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                            Delete
                        </button>
                    </div>
                    <div class="w-full">
                        <form id="project-upload" style="display: none;" action="upload-project.php" method="post"
                            enctype="multipart/form-data" class="w-full bg-white rounded p-4 mb-10 shadow-md">
                            <div class="mb-4">
                                <label for="description"
                                    class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                                <textarea id="description" name="title" rows="1" required
                                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700"></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="photo_file" class="block text-gray-700 text-sm font-bold mb-2">Upload
                                    Photo:</label>
                                <input type="file" id="photo_file" name="photo_file" accept="image/*" required
                                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700">
                            </div>

                            <div class="mb-4">
                                <label for="description"
                                    class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                                <textarea id="description" name="description" rows="4" required
                                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="project_link" class="block text-gray-700 text-sm font-bold mb-2">Project
                                    Link:</label>
                                <input type="url" id="project_link" name="project_link" required
                                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:border-green-500 text-gray-700">
                            </div>
                            <div class="text-center">
                                <input type="submit" value="upload"
                                    class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded-md focus:outline-none focus:shadow-outline-green active:bg-green-700 transition duration-300 ease-in-out hover:scale-95 hover:cursor-pointer">
                            </div>
                        </form>
                    </div>
                    <div id="table2" class="flex items-center justify-center w-full text-center mb-10"
                        style="display: none;">
                        <?php

                        // session_start();
                        // Assuming you have a database connection established
                        include('config.php');

                        // Query to retrieve posts
                        $query = "SELECT * FROM projects";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            echo '<div class="overflow-x-auto text-black rounded-sm mt-5">';
                            echo '<table class="min-w-full table-auto border-collapse bg-white">';
                            echo '<thead>';
                            echo '<tr>';
                            echo '<th class="border-2 border-black px-4 py-2">ID</th>';
                            echo '<th class="border-2 border-black px-4 py-2">Title</th>';
                            // echo '<th class="border-2 border-black px-4 py-2">Link</th>';
                            echo '<th class="border-2 border-black px-4 py-2">Actions</th>';
                            echo '</tr>';
                            echo '</thead>';
                            echo '<tbody>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<tr>';
                                echo '<td class="border-2 border-black px-4 py-2">' . $row['project_id'] . '</td>';
                                // echo '<td class="border-2 border-black px-4 py-2"><img src="' . $row['post_url'] . '" alt="Post Image" class="max-w-xs"></td>';
                                echo '<td class="border-2 border-black px-4 py-2">' . $row['title'] . '</td>';
                                // echo '<td class="border-2 border-black px-4 py-2">' . $row['project_link'] . '</td>';
                                echo '<td class="border-2 border-black px-4 py-2"><a href="delete_project.php?project_id=' . $row['project_id'] . '" class="text-red-500 hover:text-red-700">Delete</a></td>';
                                echo '</tr>';
                            }
                            echo '</tbody>';
                            echo '</table>';
                            echo '</div>';
                        } else {
                            echo 'No projects found.';
                        }

                        // Close the database connection when done
                        mysqli_close($conn);
                        ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>