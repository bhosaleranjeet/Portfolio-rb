<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-100">
    <?php include 'navbar.php'; ?>
    <section class="text-gray-600 body-font">
        <div class="container px-10 md:px-36 py-5 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <!-- <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="content" class="object-cover object-center h-full w-full"
                            src="https://dummyimage.com/1200x500">
                    </div> -->
                <div class="flex flex-col sm:flex-row mt-5">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                            <img src="./images/Ranjeet.jpg" alt="Profile-image" class="rounded-full">
                        </div>
                        <div class="flex flex-col items-center text-center justify-center">
                            <h2 class="font-medium title-font text-gray-900 text-lg">Ranjeet Bhosale</h2>
                            <div class="w-12 h-1 bg-green-500 rounded mt-2 mb-4"></div>
                            <p class="text-base">Technical Intern at Cojag | Student at MIT ACSC, Pune [BCA (3rd year)]
                            </p>
                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <p class="leading-relaxed text-lg mb-4">"I'm a tech enthusiast and a third-year student with a
                            fiery passion for all things technology. My toolkit? HTML, Tailwind CSS, and JS for frontend
                            magic, while PHP and MySQL fuel the backend brilliance. Beyond web wizardry, I dabble in the
                            realm of object-oriented programming in C++ and Java. I believe in providing more value to everything I do."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container md:px-36 px-10 pt-20 pb-48 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Certifications</h1>
                <p class="w-full mx-auto leading-relaxed text-base">Certifications? Oh, they're like a safety net for my ego. I believe in proving my skills through action, but hey, if the world insists, I've got those certificates tucked away as a last resort. 👇</p>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/BD.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/big-data.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Big Data</h2>
                            <p class="text-gray-500">Basics</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/ML.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/ml.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">R Programming</h2>
                            <p class="text-gray-500">Machine learning</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/html.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/html5.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">HTML</h2>
                            <p class="text-gray-500">Frontend</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/RWD.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/r.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">R Programming</h2>
                            <p class="text-gray-500">DataBase</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/LT.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/linux.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Linux Trainning</h2>
                            <p class="text-gray-500">OS</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                    <a href="./pdf/R.pdf" class="" target="blank">
                        <div class="h-full flex items-center border-gray-200 border-2 p-4 rounded-lg bg-gradient-to-r from-green-100 to-lime-100">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="./images/ds.png">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">R Programming</h2>
                            <p class="text-gray-500">Data Science</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- this is footer  -->

    <?php include 'footer.php'; ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>

</body>

</html>