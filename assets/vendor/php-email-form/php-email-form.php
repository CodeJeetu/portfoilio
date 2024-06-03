<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = 'your_email@example.com'; // Replace with your email address
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Email sending failed.";
    }
}
?>
