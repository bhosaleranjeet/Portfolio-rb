<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Function to insert form submissions into the database
function insertFormSubmission($db, $first_name, $last_name, $email, $phone_number, $budget, $timeline, $project_description)
{
    $sql = "INSERT INTO submissions (first_name, last_name, email, phone_number, budget, timeline, project_description, submission_date) VALUES (:first_name, :last_name, :email, :phone_number, :budget, :timeline, :project_description, NOW())";
    $stmt = $db->prepare($sql);
    $stmt->execute(
        array(
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':phone_number' => $phone_number,
            ':budget' => $budget,
            ':timeline' => $timeline,
            ':project_description' => $project_description
        )
    );
}

if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $budget = $_POST['budget'];
    $timeline = $_POST['timeline'];
    $project_description = $_POST['project_description'];

    // Create a database connection (use your own database credentials)
    $db = new PDO("mysql:host=localhost;dbname=portfolio", "root", "");

    try {
        // Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'bhosaleranjeet101@gmail.com'; // SMTP username
        $mail->Password = 'igdcgchfnpkfhndm'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port = 465; // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('rajbhosale625@gmail.com', 'Contact Form');
        $mail->addAddress('bhosaleranjeet101@gmail.com', 'Ranjeet'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Inquiry';

        $mail->Body = '
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #ffffff;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                border-radius: 5px;
            }
            h1 {
                color: #333;
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                font-size: 16px;
                line-height: 1.6;
                color: #666;
            }
            .highlight {
                font-weight: bold;
                color: #007bff;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Inquiry</h1>
            <p><span class="highlight">Sender Name:</span> ' . htmlspecialchars($first_name . ' ' . $last_name) . '</p>
            <p><span class="highlight">Sender Email:</span> ' . htmlspecialchars($email) . '</p>
            <p><span class="highlight">Phone Number:</span> ' . htmlspecialchars($phone_number) . '</p>
            <p><span class="highlight">Budget:</span> ' . htmlspecialchars($budget) . '</p>
            <p><span class="highlight">Timeline:</span> ' . htmlspecialchars($timeline) . '</p>
            <p><span class="highlight">Description:</span><br>' . nl2br(htmlspecialchars($project_description)) . '</p>
        </div>
    </body>
    </html>
';

        $mail->send();

        // Insert form submission into the database
        insertFormSubmission($db, $first_name, $last_name, $email, $phone_number, $budget, $timeline, $project_description);

        echo '<script>alert("Submitted! You will hear back from me within 24 hours 👍");</script>';
        echo '<script>window.location.href = "index.php";</script>';
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>