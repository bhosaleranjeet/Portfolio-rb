<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project's</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-200">

    <?php include 'navbar.php' ?>

    <div
        class="flex flex-col justify-center items-center md:mx-80 mx-10 text-center text-4xl font-extrabold tracking-wide space-y-5 h-[50vh]">
        <p>
            Welcome to my Project Gallery Where <span class="text-green-500 tracking-normal">Imagination </span>Meets Reality.
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6 animate-bounce">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
    </div>

    <div class="mb-20">
        <div class="flex flex-col md:mx-36 space-y-10 py-10 bg-white rounded-md border border-white shadow-md">
            <?php

            session_start();
            // Database connection
            include('config.php');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            // Fetch data from the database
            $sql = "SELECT * FROM projects";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

            foreach ($projects as $project) {
                ?>
                <div class="flex flex-col space-y-5">
                    <h1 class="text-4xl font-bold md:px-10 px-3">
                        <?php echo $project['title']; ?>
                    </h1>
                    <?php
                    // Retrieve the BLOB data
                    $imageData = $project['photo'];

                    // Convert the BLOB data to base64 encoding
                    $imageDataEncoded = base64_encode($imageData);

                    // Generate a data URI for the image
                    $imageSrc = 'data:image/jpeg;base64,' . $imageDataEncoded;
                    ?>
                    <img src="<?php echo $imageSrc; ?>" alt="<?php echo $project['title']; ?>"
                        class="border border-black md:mx-10">
                    <p class="md:px-10 px-3 text-gray-500">
                        <?php echo $project['details']; ?>
                    </p>
                    <p class="md:px-10 px-3">
                        View project -
                        <a href="<?php echo $project['project_link']; ?>"
                            class="text-green-500 hover:text-green-700 px-3 animate-pulse" target="_blank">
                            click here
                        </a>
                    </p>
                </div>
                <?php
            }

            ?>
        </div>
    </div>



    <?php include 'footer.php' ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>