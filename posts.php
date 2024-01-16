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
$sql = "SELECT * FROM posts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$feedData = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feed</title>
    <!-- Include Tailwind CSS styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-200 font-[Poppins] ">

    <?php include 'navbar.php'; ?>

    <div class="md:mx-36 mx-10 py-20 text-center text-2xl font-extrabold tracking-wide space-y-5">
        <p>
            "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what
            you believe is great work. And the only way to do great work is to love what you do."
        </p>
        <p class="text-green-500 font-normal tracking-normal text-2xl">- Steve Jobs</p>
    </div>

    <!-- Instagram Feed Section -->
    <div id="feed-container"
        class="md:mx-36 py-5 mb-10 flex justify-center rounded-md bg-white/80 border-2 md:border-green-500 shadow-lg">
        <!--   -->
        <!-- PHP code to display the feed -->

        <div class="container md:px-80 pb-10 flex justify-center">
            <div class="flex items-start flex-wrap pb-5" id="product-list">
                <?php foreach ($feedData as $item): ?>
                    <div class="border-b border-black py-5">
                        <div class="py-3 md:px-0 px-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <img src="./images/Ranjeet.jpg" alt="profile-pic"
                                        class="md:h-10 h-7 border rounded-full">
                                    <a href="about.php">
                                        <h1 class="md:ml-3 ml-2 md:text-lg text-sm font-medium">
                                            ranjeet_bhosale
                                        </h1>
                                    </a>
                                </div>
                                <div>
                                    <p class="text-gray-500 md:text-sm text-xs">
                                        <?php echo date('Y-m-d', strtotime($item['created_at'])); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center overflow-hidden">
                            <img src="<?php echo $item['post_url']; ?>" alt="Image"
                                class="object-cover object-center w-full h-full block border border-black">
                        </div>
                        <p class="text-gray-600 md:py-5 py-3 md:px-0 px-5">
                            <?php echo $item['description']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Include JavaScript -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>