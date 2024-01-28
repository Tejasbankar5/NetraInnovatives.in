<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $question = $_POST["question"];
    $message = $_POST["message"];

    // Compose email message
    $to = "tejasbankar58@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email\r\n";
    $messageBody = "Name: $name\n";
    $messageBody .= "Email: $email\n";
    $messageBody .= "Question: $question\n";
    $messageBody .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
        // Optionally, you can redirect the user to a thank-you page
        header("Location: thank-you.html");
        exit();
    } else {
        // Failed to send email
        echo "Error: Unable to send email. Please try again later.";
    }
}
?>
