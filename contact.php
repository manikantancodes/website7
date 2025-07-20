<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Email settings
    $to = "contact@navigotechsolutions.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "Name: $name\nEmail: $email\nMessage:\n$message\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success"; // Message sent successfully
    } else {
        echo "error"; // Message sending failed
    }
}
?>




