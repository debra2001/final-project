<?php

require_once 'conn.php';
session_start();

// Get the submitted form data
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['pasword'];

    // Prepare a SQL statement to insert the new user
    $sql = "SELECT * FROM credentials WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result) == 0){
        header('Location: login.php?error=1');
    }else{
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['loggedin'] = true;
        // Redirect to the login page
        header('Location: dash.php');
    }
}

$target_path="e:/";
$target_path=$target_path.basename($_FILES['upload']['name']);
if(move_uploaded_file($_FILES['upload']['tmp_name'],$target_path)){
    echo"file uploaded successfully";
}else{
    echo"sorry,file not uploaded,please try again";
}
?>
<!-- retrieve -->
 
