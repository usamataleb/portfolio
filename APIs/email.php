<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    $to = "mamenmasau@gmail.com";
    $headers = "From: $email";
    $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    if (mail($to, "Contact Form Submission", $messageBody, $headers)) {
        echo json_encode(["success" => "Message sent successfully!"]);
    } else {
        echo json_encode(["error" => "Message sending failed. Please try again later."]);
    }
} else {
    echo json_encode(["error" => "Invalid request method."]);
}
?>
