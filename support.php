<?php
include "conn.php";

?> 


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


<form method="post" action="support.php">

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
    
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO support (userid, subject, message, status, created, updated) 
            VALUES ('$email', '$subject', '$message', 'pending', NOW(), NOW())";

    if (mysqli_query($conn, $sql)) {
        header("Location:pay.php");
            exit;
    } else {
        echo "Error: ". $sql. "<br>". mysqli_error($conn);
    }
}
?>


