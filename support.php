<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>




<form id="supportRequestForm" action="send_support_email.php" method="POST">
    <h2>Submit a Support Request</h2>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="subject">Subject:</label>
    <input type="text" id="subject" name="subject" required>
    
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    
    <button type="submit">Submit Request</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "support@example.com"; // Your support email address
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    $email_subject = "Support Request: " . $subject;
    $email_body = "<h2>Support Request</h2>";
    $email_body .= "<p><strong>Name:</strong> {$name}</p>";
    $email_body .= "<p><strong>Email:</strong> {$email}</p>";
    $email_body .= "<p><strong>Subject:</strong> {$subject}</p>";
    $email_body .= "<p><strong>Message:</strong><br>{$message}</p>";
    
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Support request submitted successfully.";
    } else {
        echo "There was an error submitting your request. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "support@example.com"; // Your support email address
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/html\r\n";
    
    $email_subject = "Support Request: " . $subject;
    $email_body = "<h2>Support Request</h2>";
    $email_body .= "<p><strong>Name:</strong> {$name}</p>";
    $email_body .= "<p><strong>Email:</strong> {$email}</p>";
    $email_body .= "<p><strong>Subject:</strong> {$subject}</p>";
    $email_body .= "<p><strong>Message:</strong><br>{$message}</p>";
    
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Support request submitted successfully.";
    } else {
        echo "There was an error submitting your request. Please try again.";
    }
} else {
    echo "Invalid request.";
}
?>
<?php
$auto_reply_subject = "Your Support Request Has Been Received";
$auto_reply_message = "<p>Dear {$name},</p>";
$auto_reply_message .= "<p>Thank you for contacting support. We have received your request and will get back to you as soon as possible.</p>";
$auto_reply_message .= "<p>Best regards,<br>Support Team</p>";

mail($email, $auto_reply_subject, $auto_reply_message, $headers);
?>

