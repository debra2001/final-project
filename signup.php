<?php
include "conn.php";

?> 


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/signup.css">
    

</head>
<body>

             
   <div class="gif">
   <span class="imgc">
        <img src="img/9wJN.gif" alt="" class="img" width="100%">
   </span>
   </div>

    <div class="mom">
         <div class="container">
            <div class="child">


    <form action=""  method="post"  name="firm">
    <label for="firstname">firstname</label>
        <input type="text" id="first" placeholder="firstname" name="firstname" autocomplete="firstname"><br><br>
       
        <label for="lastname">lastname</label>
        <input type="text" id="last" placeholder="lastname" name="lastname" autocomplete="lastname"><br><br>
        
        <label for="email"><b>email</b></label>
        <input  type="email" id="email" placeholder="Enter email" name="email" autocomplete="email"><br><br>
       
        <label for="password" ><b> password</b></label>
        <input  type="password" id="password" placeholder=" Password" name="password"><br><br>
        
       
        
       <center><button type="submit" class="button" name="submit">submit</button></center>
       <span>
      <p>have an account?<a href="login.php">login</a></p>
      <?php if(isset($_GET['errors'])): ?>
         <p style="color: red; margin-top:.5rem;"><?php echo $errors['size']; ?></p>
      <?php endif; ?>
    </span>
    </form>
    
</div>
  </div>
     </div>
 <?php
if(isset($_POST['submit'])){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

     
      
    
        $sql = "INSERT INTO credentials(firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')";
        $result = mysqli_query($conn, $sql);
    
        if ($result) {
            header("Location:login.php");
            exit;
        } else {
            echo "Something went wrong";
        }
    

    }    
  
?>
</body>
</html>

            
            

