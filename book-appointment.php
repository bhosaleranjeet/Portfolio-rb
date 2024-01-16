<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book | Appointment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-200">

    <!-- navbar -->

    <div class="bg-green-500 h-[40vh]">
        <?php include 'navbar.php'; ?>
    </div>

    <!-- landing card -->

    <div class="relative bg-white md:mx-36 mx-10 h-[30vh] shadow-lg rounded-md"
        style="position: relative; z-index: 1; margin-top: -15vh;">
        <div class="flex felx-col justify-center items-center h-full mx-10">
            <p class="text-center md:text-4xl text-xl font-extrabold text-gray-400">
                This form takes 1 minute to complete. These details save 20 minutes on our intro call.
                <span class="text-green-500">
                    Enjoy your extra 19 minutes!
                </span>
            </p>
        </div>
    </div>

    <form action="contact-form.php" method="post">
        <div class="relative bg-gray-200 m-10 md:mx-36 mx-10">
            <div class="pt-10 space-y-5">
                <p class="text-xl font-semibold text-gray-500">
                    Help me get to know you.
                </p>
                <div class="flex space-x-5 justify-between">
                    <input type="text" class="w-1/2 h-14 rounded-md px-5" placeholder="First name" name="first_name" required>
                    <input type="text" class="w-1/2 h-14 rounded-md px-5" placeholder="Last name" name="last_name" required>
                </div>
                <input type="email" class="w-full h-14 rounded-md px-5" placeholder="Email" name="email" required>
                <input type="text" class="w-full h-14 rounded-md px-5" placeholder="Phone number (optional)"
                    name="phone_number">
            </div>
        </div>

        <div class="relative bg-gray-200 m-10 md:mx-36 mx-10">
            <div class=" space-y-5">
                <p class="text-xl font-semibold text-gray-500">
                    What budget range are you in?
                </p>
                <div class="flex flex-col md:flex-row md:space-x-5 justify-between">
                    <div
                        class="flex items-center md:my-0 my-3 md:w-1/2 w-full h-14 rounded-md px-5 bg-white text-center">
                        <input type="radio" name="budget" id="budget-20k" class="mr-2 flex items-center self-center"
                            value="40k">
                        <span class="text-gray-400">20k - 40k</span>
                    </div>
                    <div
                        class="flex items-center md:my-0 my-3 md:w-1/2 w-full h-14 rounded-md px-5 bg-white text-center">
                        <input type="radio" name="budget" id="budget-40k" class="mr-2 flex items-center self-center"
                            value="60k">
                        <span class="text-gray-400">40k - 60k</span>
                    </div>
                    <div
                        class="flex items-center md:my-0 my-3 md:w-1/2 w-full h-14 rounded-md px-5 bg-white text-center">
                        <input type="radio" name="budget" id="budget-60k" class="mr-2 flex items-center self-center"
                            value="100k">
                        <span class="text-gray-400">60k - 100k</span>
                    </div>
                    <div
                        class="flex items-center md:my-0 my-3 md:w-1/2 w-full h-14 rounded-md px-5 bg-white text-center">
                        <input type="radio" name="budget" id="budget-100k" class="mr-2 flex items-center self-center"
                            value="100k+">
                        <span class="text-gray-400">100k+</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative bg-gray-200 m-10 md:mx-36 mx-10">
            <div class=" space-y-5">
                <p class="text-xl font-semibold text-gray-500">
                    Tell me more about the project/Job.
                </p>
                <div>
                    <select name="timeline" class="w-full h-14 rounded-md px-5 text-gray-400">
                        <option value="Timeline">Timeline</option>
                        <option value="ASAP">ASAP</option>
                        <option value="1month">1 Month</option>
                        <option value="3month">3 Month's</option>
                        <option value="6month">6 Month's</option>
                        <option value="1year">1 Year+</option>
                    </select>
                </div>
                <input type="textbox" class="w-full h-14 rounded-md px-5"
                    placeholder="Eg. Hello, I'm looking for a Web desiginer to help me out with..."
                    name="project_description" required>
            </div>
        </div>

        <div class="relative bg-gray-200 m-10 md:mx-36 mx-10">
            <div class="space-y-5">
                <div class="flex justify-center w-full">
                    <input type="submit" value="submit"
                        class="bg-green-500 text-white rounded-md px-5 py-2 md:w-1/5 hover:bg-green-600 transition duration-300 ease-in-out border-2 border-white cursor-pointer" name="submit">
                </div>
                <div class="flex justify-center w-full">
                    <p class="text-sm font-light text-gray-500 text-center">
                        I promise to never sell your personal information or give it to anyone, for any reason.
                    </p>
                </div>
            </div>
        </div>
    </form>

    <!-- this is footer  -->

    <?php include 'footer.php'; ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>