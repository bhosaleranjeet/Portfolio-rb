<div class="header py-5 ">
    <nav
        class="navbar flex justify-between px-5 py-5 md:mx-36 mx-10 rounded-md bg-white border-2 border-white shadow-md">
        <div class="flex items-center">
            <a href="index.php">
                <h1 class="text-lg text-green-500 font-bold">Ranjeet Bhosale</h1>
            </a>
        </div>
        <div
            class="nav-links md:static md:min-h-fit absolute md:bg-transparent bg-white rounded-md min-h-[30vh] left-9 md:w-auto w-80 top-[11%] md:opacity-100 opacity-0 flex justify-center transition-opacity ease-linear z-10">
            <ul class="flex md:flex-row flex-col justify-center items-center md:items-center md:gap-8 gap-8">
                <li><a href="about.php" class="hover:text-green-500">About me</a></li>
                <li><a href="projects.php" class="hover:text-green-500 ">Project's</a></li>
                <li><a href="posts.php" class="hover:text-green-500">Posts</a></li>
                <li>
                    <?php

                            if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
                                // User is logged in, display the "Logout" button
                                echo '<a href="logout.php" class="hover:bg-red-500 bg-white text-black hover:text-white rounded-md px-5 py-2 w-full transition duration-300 ease-in-out border-2 border-black hover:border-white">Logout</a>';
                            } else {
                                // User is not logged in, display the "Login" button
                                echo '<a href="login.php" class="bg-white text-black hover:text-white rounded-md px-5 py-2 w-full hover:bg-green-500 transition duration-300 ease-in-out border-2 border-black hover:border-white">Admin Login</a>';
                            }
                            ?>

                    <!-- <a href="login.php">
                        <button type="button"
                                class="bg-white px-5 py-2 border-2 border-black rounded-md hover:bg-green-500 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out ">
                                Login | SignUp
                            </button>
                        </a> -->
                </li>
            </ul>
        </div>
        <div class="menu text-3xl flex items-center md:hidden">
            <ion-icon name="grid-outline" onclick="onToggleMenu(this)"></ion-icon>
        </div>
    </nav>
</div>