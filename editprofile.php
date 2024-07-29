<?php
include_once __DIR__."/conn.php";
?> 

 </div>
 <?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['pasword'];
        $sql="INSERT INTO support(subject,message,created,updated) VALUES('$subject','$message','$updated','$deleted')";
       mysqli_query($conn,$sql);

    //    header("Location:redirect.php");
} 

?>
 

</body>
</html>

            
            

