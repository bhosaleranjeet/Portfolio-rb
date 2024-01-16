<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Your database connection code here
require 'config.php';

// Function to retrieve all form submissions
function getAllSubmissions($conn)
{
    $sql = "SELECT * FROM submissions";
    $result = mysqli_query($conn, $sql);
    $submissions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $submissions;
}

// Function to retrieve form submissions for a specific year and month
function getSubmissionsByMonth($conn, $year, $month)
{
    $sql = "SELECT * FROM submissions WHERE YEAR(submission_date) = ? AND MONTH(submission_date) = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $year, $month);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $submissions = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $submissions;
}

// Check if sorting options are provided in the URL
$year = isset($_GET['year']) ? $_GET['year'] : null;
$month = isset($_GET['month']) ? $_GET['month'] : null;

if ($year && $month) {
    $submissions = getSubmissionsByMonth($conn, $year, $month);
} else {
    $submissions = getAllSubmissions($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <!-- <link rel="stylesheet" href="input.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
</head>

<body class="font-[Poppins] bg-gray-200">
    <!-- Display the data here, and provide sorting options -->
    <div id="report">
        <h1 class="text-center py-10 text-2xl bg-green-500 text-white font-semibold">Form Submissions Report</h1>
        <!-- Add sorting options (year and month dropdowns, and a submit button) -->
        <!-- <form action="report.php" method="get" class="flex flex-wrap md:flex-row flex-col justify-between md:px-36 px-10 items-center bg-gray-200 py-10">
            <div class="flex flex-wrap md:flex-row flex-col items-center">
                <label for="year" class="font-semibold tracking-wide md:py-0 py-5">Select Year:</label>
                <select name="year" id="year" class="md:ml-2 px-5 py-1 rounded-md shadow-md border border-white text-gray-500">
                    <?php
                    // Query to retrieve distinct years from your submissions
                    $yearQuery = "SELECT DISTINCT YEAR(submission_date) as year FROM submissions";
                    $yearResult = mysqli_query($conn, $yearQuery);

                    // Loop through the results and populate the year dropdown
                    while ($row = mysqli_fetch_assoc($yearResult)) {
                        echo '<option value="' . $row['year'] . '">' . $row['year'] . '</option>';
                    }
                    ?>
                </select>
                <label for "month" class="md:ml-5 font-semibold tracking-wide md:py-0 py-5">Select Month:</label>
                <select name="month" id="month" class="md:ml-2 px-5 py-1 rounded-md shadow-md border border-white text-gray-500" >
                    <?php
                    // Query to retrieve distinct months from your submissions
                    $monthQuery = "SELECT DISTINCT MONTHNAME(submission_date) as month FROM submissions";
                    $monthResult = mysqli_query($conn, $monthQuery);

                    // Loop through the results and populate the month dropdown
                    while ($row = mysqli_fetch_assoc($monthResult)) {
                        echo '<option value="' . $row['month'] . '">' . $row['month'] . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div>
            <button type="submit" class="bg-white px-5 py-1 border-2 border-black rounded-md hover:bg-red-500 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out md:mt-0 mt-5">Filter</button>
            </div>
        </form> -->

        <!-- Display the data in a table -->
        <div class="flex md:justify-center py-10 mx-2 md:mx-36 overflow-x-auto">
        <table class="bg-white border shadow-md">
            <thead>
                <tr class="text-center">
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Submission ID</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">First Name</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Last Name</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Email</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Phone Number</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Budget</th>
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Timeline</th>
                    <!-- <th class="px-5 py-2 border-2 bg-gray-200 border-gray-300">Project Description</th> -->
                    <th class="px-5 py-2 border-2 bg-gray-100 border-gray-300">Submission Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through $submissions and display the data in table rows
                foreach ($submissions as $submission) {
                    echo '<tr class="text-center">';
                    echo '<td class="px-5 py-2 border-2">' . $submission['submission_id'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['first_name'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['last_name'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['email'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['phone_number'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['budget'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['timeline'] . '</td>';
                    // echo '<td class="px-5 py-2 border-2">' . $submission['project_description'] . '</td>';
                    echo '<td class="px-5 py-2 border-2">' . $submission['submission_date'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        </div>
        <!-- <div class="w-full flex justify-center">
            <button type="download" class="bg-white px-5 py-1 border-2 border-black rounded-md hover:bg-green-500 hover:text-white hover:border-2 hover:border-white transition duration-300 ease-in-out md:mt-0 mt-5">download</button>
        </div> -->

    </div>
</body>

</html>