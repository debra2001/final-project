<?php 
session_start();

if(isset($_SESSION['loggedin'])){
   header('Location: dash.php');
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main-container">
        <div class="navmenu">
            <div class="content">
                <nav >
                    <ul class="ul">
                        
                        <?php if(isset($_SESSION['email'])): ?>
                            <li><a href="logout.php">logout</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    

                
    <div class="gif">
        <img src="img/9wJN.gif" alt="" class="img" width="100%">
    </div>

        <div class="mom">
            <div class="container">
                <div class="child">
                        <!-- Form section -->
                    <form action="auth.php" class="form-container"  method="post">
                        <div class="">
                            <div class="form-group">
                                <label for="email"><b>Email</b></label>
                                <input type="email" id="email" placeholder="Enter email" name="email" autocomplete="email"><br><br>
                            </div>
                            
                        <div class="form-group">
                            <label for="password"><b> Password</b></label>
                            <input type="password" id="password" placeholder=" Password" name="pasword"><br><br>
                        </div>
                            
                            <center><input type="submit" class="button" value="Submit" id="submit"></center>
                            <br><br>
                            <span>
                                <p> Don't have an account?<a href="signup.php">register</a></p>
                                <?php if(isset($_GET["error"])): ?> 
                                    <p style="color:red;">Wrong Email or Password..</p> 
                                <?php endif; ?>
                            </span>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="js/index.js"></script>
</body>
</html>

