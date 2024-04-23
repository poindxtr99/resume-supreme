<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email address where you want to receive the messages
    $to = "oluwole.olubadewo81@gmail.com";

    // Subject of the email
    $subject = "Contact message from $name";

    // Compose the email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send your message. Please try again later.";
    }
}
?>