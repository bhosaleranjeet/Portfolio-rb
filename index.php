<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranjeet's | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link href="./images/icon.png" rel="icon">
</head>

<body class="font-[Poppins]">

    <!-- Landing Page of the website -->

    <div class="landing-page bg-gray-100 md:bg-[url('./images/bg6.jpg')] bg-cover bg-center h-[100vh]">

        <!-- navbar of the website -->
        <?php include 'navbar.php'; ?>

        <!-- hero section  -->

        <div class="hero flex justify-between flex-col-reverse md:flex-row  items-center mx-10 md:mx-36 md:py-20">
            <div class="left space-y-6 py-10 md:w-1/2 subpixel-antialiased">
                <div class="flex flex-col space-y-4 drop-shadow-md">
                    <h1 class="text-lg md:text-2xl font-black w-full tracking-wide">
                        Hello Internet,
                    </h1>
                    <div class="md:space-y-5">
                        <h1 class="text-2xl md:text-5xl font-black w-full tracking-wide">
                            I'm Ranjeet and I'm a
                        </h1>
                        <h1 id="typing-text"
                            class="text-2xl md:text-5xl font-black w-full tracking-wide text-green-500 inline-block">
                            Web
                            Developer</h1>
                    </div>
                </div>
                <div>
                    <p class="w-full">
                        A professional who designs and builds websites, ensuring their functionality and appearance on
                        the internet.
                    </p>
                </div>
                <div class="flex md:flex-row flex-col items-center">
                    <button id="downloadResume"
                        class="bg-green-500 text-white shadow-md border-2 border-white w-full md:w-1/3 md:mr-3 md:my-0 my-2 p-2 rounded-md hover:bg-green-600 ease-in-out duration-300">Download
                        Resume</button>
                    <a href="book-appointment.php"
                        class="bg-white/90 shadow-md border-2 border-green-500 w-full md:w-1/3 md:mr-3 md:my-0 my-2 p-2 rounded-md hover:text-green-500 text-center ease-in-out duration-300">
                        Hire Me
                    </a>
                </div>
            </div>
            <div
                class="right">
                <img src="./images/profile-pic.png" alt="profile-pic" srcset="" class="w-full bg-white/90 md:h-96 h-64 border-2 border-white/30 shadow-md rounded-md cursor-pointer">
            </div>
        </div>

        <!-- Social media links on desktop -->

        <div class="md:mx-36 mx-10 mb-10 bg-white/60 p-4 rounded-md shadow-md border border-white hidden md:block">
            <div class="flex justify-center items-center space-x-5 text-center">
                <h1 class="text-green-500">Follow me on social media:</h1>
                <div class="flex space-x-4">
                    <a href="https://www.linkedin.com/in/bhosaleranjeet/" class="hover:scale-110 ease-in-out duration-100">
                        <img src="./images/linkdin.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                    </a>
                    <a href="https://github.com/bhosaleranjeet" class="hover:scale-110 ease-in-out duration-100">
                        <img src="./images/github.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                    </a>
                    <a href="https://www.instagram.com/bhosale_ranjeet_101/" class="hover:scale-110 ease-in-out duration-100">
                        <img src="./images/insta.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                    </a>
                    <a href="https://www.youtube.com/channel/UCSXCmjzBO148XelnIIKnNuQ" class="hover:scale-110 ease-in-out duration-100">
                        <img src="./images/youtube.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- The about section starts here  -->

    <div id="about-section" class="about-section">
        <div
            class="top flex flex-col justify-center items-center bg-white bg-center bg-no-repeat bg-cover text-white py-10">
            <h1 class="font-bold text-2xl md:text-5xl py-10 text-green-500">
                Delighted to meet you
            </h1>
            <p
                class="flex justify-center items-center text-center text-gray-500 py-1 text-sm mx-10 md:text-lg md:mx-36">
                Hello 👋!
                I'm
                Ranjeet, a final year BCA student at MIT ACSC with a passion for web development. Currently, I'm honing
                my
                skills as a software developer intern at Cojag Pvt. Ltd. 💻 I specialize in creating responsive and
                user-friendly webpages, transforming ideas into interactive
                digital experiences. My goal is to blend creativity with functionality to deliver seamless online
                solutions.📚 As I approach the end of my academic journey, I'm excited to embark on a career where I can
                continue
                to learn, grow, and contribute to the ever-evolving world of technology.
                Let's build the future together, one line of code at a time! 🚀
            </p>
            <div class="mx-10 md:mx-36">
                <div class="white my-20 bg-gray-100 border-2 w-full rounded-md shadow-lg pb-20">
                    <h1
                        class="flex justify-start px-10 md:px-36 py-20 sm:text-3xl text-2xl font-medium title-font  text-gray-900">
                        Qualifications</h1>
                    <section class="text-gray-600 body-font">
                        <div class="container px-10 md:px-36 pb-5 mx-auto drop-shadow-sm">
                            <div class="flex flex-wrap -mx-4 -my-8 ">
                                <div class="py-8 px-4 lg:w-1/3 ">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Mar</span>
                                            <span
                                                class="font-medium text-lg text-gray-800 title-font leading-none">2019</span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                                SSC (10th)</h2>
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">SSPEM,
                                                Khanapur
                                            </h1>
                                            <p class="leading-relaxed mb-5">Secured SSC exam with first class
                                                distinction.</p>
                                            <a class="inline-flex items-center">
                                                <span class="flex-grow flex flex-col">
                                                    <span class="title-font font-medium text-gray-900">80.40%</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-8 px-4 lg:w-1/3 ">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Apr</span>
                                            <span
                                                class="font-medium text-lg text-gray-800 title-font leading-none">2021</span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                                HSC (12th)</h2>
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">NWC,
                                                Pune
                                            </h1>
                                            <p class="leading-relaxed mb-5">Passed HSC With Physics, Chemistry and
                                                Maths.</p>
                                            <a class="inline-flex items-center">
                                                <span class="flex-grow flex flex-col">
                                                    <span class="title-font font-medium text-gray-900">77.76%</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-8 px-4 lg:w-1/3 ">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Apr</span>
                                            <span
                                                class="font-medium text-lg text-gray-800 title-font leading-none">2024</span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-green-500 mb-1">
                                                UG (BCA)</h2>
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">MIT ACSC, Pune
                                            </h1>
                                            <p class="leading-relaxed mb-5">Persuing Bechlors in Computer Applications.
                                            </p>
                                            <a class="inline-flex items-center">
                                                <span class="flex-grow flex flex-col">
                                                    <span class="title-font font-medium text-gray-900">Till now
                                                        72%</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="text-gray-600 body-font">
                        <div class="container px-10 md:px-36 py-5 mx-auto">
                            <div class="flex flex-col justify-start w-full py-10">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Skills</h1>
                            </div>
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full  hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/HTML" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/html5.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">HTML 5</h2>
                                                <p class="text-gray-500">Frontend</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/CSS" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/css.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">CSS</h2>
                                                <p class="text-gray-500">Fully Responsive</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/JavaScript" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/js.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">JavaScript</h2>
                                                <p class="text-gray-500">Functionalities</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/TailwindCSS" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/tailwind.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">TailwindCSS</h2>
                                                <p class="text-gray-500">CSS Framework</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/Figma" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/figma.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">Figma</h2>
                                                <p class="text-gray-500">UI/UX design</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/PHP" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/php.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">PHP</h2>
                                                <p class="text-gray-500">Backend</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/MYSQL" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/mysql.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">MYSQL</h2>
                                                <p class="text-gray-500">DataBase</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/Java" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/java.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">Java</h2>
                                                <p class="text-gray-500">OOP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 lg:w-1/3 md:w-1/2 w-full hover:scale-95 ease-in-out duration-100">
                                    <a href="https://en.wikipedia.org/wiki/C++" target="blank">
                                        <div
                                            class="h-full flex items-center border-gray-200 border p-4 rounded-lg bg-white">
                                            <img alt="team"
                                                class="w-16 h-16 object-cover object-center flex-shrink-0 mr-4"
                                                src="./images/cpp.png">
                                            <div class="flex-grow">
                                                <h2 class="text-gray-900 title-font font-medium">C++</h2>
                                                <p class="text-gray-500">OOP</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>

    <!-- Social media links on mobile's -->

    <div class="md:mx-36 mx-10 mb-20 bg-white p-4 rounded-md shadow-md border border-black block md:hidden">
        <div class="flex justify-center items-center space-x-5 ">
            <h1 class="text-green-500">Follow me on social media:</h1>
            <div class="flex space-x-4">
                <a href="https://www.linkedin.com/in/bhosaleranjeet/">
                    <img src="./images/linkdin.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                </a>
                <a href="https://github.com/bhosaleranjeet">
                    <img src="./images/github.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                </a>
                <a href="https://www.instagram.com/bhosale_ranjeet_101/">
                    <img src="./images/insta.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                </a>
                <a href="https://www.youtube.com/channel/UCSXCmjzBO148XelnIIKnNuQ">
                    <img src="./images/youtube.png" alt="insta-logo" class="aspect-square object-scale-down h-6">
                </a>
            </div>
        </div>
    </div>

    <!-- This is the footer  -->

    <?php include 'footer.php'; ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>

</html>