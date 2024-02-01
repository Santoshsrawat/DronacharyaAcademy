<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "yuvrajkohli8090ylt@gmail.com";  // Replace with the recipient's email address
    $subject = "New Contact Form Submission";

    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $subjectForm = $_POST["subject"];
    $comment = $_POST["comment"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Handle invalid email address
        die('Invalid email address');
    }

    // You can add more validation for other fields if needed

    // Email content
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = "<p><strong>Name:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Phone:</strong> $tel</p>";
    $body .= "<p><strong>Subject:</strong> $subjectForm</p>";
    $body .= "<p><strong>Comment:</strong></p><p>$comment</p>";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

    if ($success) {
        // Redirect back to the form page with success message
        header("Location: index.html?status=success");
        exit();
    } else {
        // Redirect back to the form page with error message
        header("Location: index.html?status=error");
        exit();
    }
}
?>