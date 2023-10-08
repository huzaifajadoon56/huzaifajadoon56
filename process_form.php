<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your Gmail address where you want to receive the form data
    $to = "kashifsaeedjadoon5@gmail.com";

    // Subject for the email
    $subject = "Contact Form Submission from $name";

    // Headers to set the sender's email and content type
    $headers = "From: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Message body
    $messageBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    $mailSent = mail($to, $subject, $messageBody, $headers);

    if ($mailSent) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the request method is not POST, handle it accordingly
    echo "Invalid request method.";
}
?>
