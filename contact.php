<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Build email message
    $to = "your_email@example.com"; // Your email address
    $subject = "New message from your website";
    $body = "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html");
    exit;
}
?>