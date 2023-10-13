error_reporting(E_ALL);
ini_set('display_errors', 1);

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $mobile_number = $_POST["mobile_number"];
    $subject = $_POST["email_subject"];
    $message = $_POST["message"];

    $to = "kd.keydi22@gmail.com"; // Replace this with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $email_body = "Full Name: $full_name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Mobile Number: $mobile_number\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message: $message\n";

    // Send email
    mail($to, $subject, $email_body, $headers);
    
    // Redirect to a thank you page after sending the email
    header("Location: thank_you.html");
    exit();
}
?>
