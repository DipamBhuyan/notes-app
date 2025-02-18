<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $subject = $_GET["subject"];
    $message = $_GET["message"];

    // Set your email address where you want to receive messages
    $to = "bhuyandipam@gmail.com";

    // Create email headers
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank you page or show a success message
    header("Location: thank-you.html");
}
?>
