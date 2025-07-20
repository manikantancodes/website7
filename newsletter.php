<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Add email to your database or send to an API
        echo "<script>alert('Thank you for subscribing!');</script>";
    } else {
        echo "<script>alert('Please enter a valid email address.');</script>";
    }
}
?>
