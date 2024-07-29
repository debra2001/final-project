<?php
session_start(); // Start the session
include_once __DIR__.'/sidebar.php';
include_once __DIR__.'/partials/nav.php';

include_once __DIR__."/conn.php";


// Assume you have a variable or session that stores the username
$username = $_SESSION['firstname']; // Replace with your actual username variable or session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/red.css"> -->
    <!-- <link rel="stylesheet" href="file/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="font/css/all.css"> -->
</head>
<body>
<!-- <?php define("APP_URL", "http://localhost/finalyear"); ?> -->
<!-- Sidebar -->
    <aside class="sidebar ">
        <div class="container py-3 d-flex flex-column justify-content-center align-items-center gap-4">
            <!-- <p class="">Dashboard</p> -->
            <div class="user_profile d-flex flex-column gap-1 justify-content-center align-items-center">
                <img src="./img/2.PNG.PNG" class=" rounded-circle" width="80" height="80" alt="profile-picture">
                <span class="text-center fs-5"><?php # echo $_SESSION['firstname'].' '. $_SESSION['lastname']; ?></span>
                <span class="badge text-bg-light rounded-pill fs-sm"><?php # echo $_SESSION['user_type']; ?></span>
            </div>
            <div class="sidebar_items my-3">
                <ul class="list-group text-white">
                    <!-- <a href="<?php echo APP_URL?>/support.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/support.php' ? 'fw-bold': '' ?>"><span class="fa fa-chart-line me-3"></span>support request</a> -->
                    <a href="<?php echo APP_URL?>/profile.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/profile.php' ? 'fw-bold': '' ?>"><span class="fa fa-book me-3"></span>profile</a>
                    <!-- <a href="<?php echo APP_URL?>/faq.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/faq.php' ? 'fw-bold': '' ?>"><span class="fa fa-square-plus me-3"></span>FAQ's</a> -->
                    <!-- <a href="<?php echo APP_URL?>/feed.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/feedback.php' ? 'fw-bold': '' ?>"><span class="fa fa-list me-3"></span>feedback</a> -->
                    <a href="<?php echo APP_URL?>/admin.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/admin.php' ? 'fw-bold': '' ?>"><span class="fa fa-users-line me-3"></span>admin</a>

                </ul>
            </div>
        </div>
    </aside>



    <!-- Main bar -->
    


<div class="container main-bar p-3">
    <h2 class="text-center">Welcome, <?php echo $username;?>!</h2>
</div>  







 
   
       
 <table class="table table-striped ">
  <thead class=>
    <tr >
      <th scope="col">S/n</th>
      <th scope="col">subject</th>
      <th scope="col">message</th>
      <th scope="col">status</th>
      <th scope="col">created</th>
      <th scope="col">updated</th>            
    </tr>
  </thead>

<?php 
$sql="SELECT * FROM support";
$ret=mysqli_query($conn,$sql);
if(mysqli_num_rows($ret)>0){
  $i = 1;
    while($row=mysqli_fetch_assoc($ret)){
        ?>
        <tr>
            <!-- <td><?php #echo $row["id"];?></td> -->
            <td><?php echo $i++;?></td>
            <!-- <td><img width="200" height="300" src="<?php echo 'Pics/'.$row["images"];?>" alt=""></td> -->
            <td><?php echo $row["subject"];?></td>
            <td><?php echo $row["message"];?></td>
            <td><?php echo $row["created"];?></td>
            <td>
            <?php echo $row["updated"];?>

  <a href="editprofile.php?id=<?php echo $row["id"]; ?>" class="text-primary">
    <i class="fa fa-pencil" style="font-size: 1em;"></i>
    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="text-primary">
    <i class="fa fa-trash" style="font-size: 1em;"></i>
  </a>
</td>
        </tr> 
        <?php
    } 
}else{
echo "no results";
}

?>      
</table>
</div>
</div>

<?php if(isset($_GET['msg'])): ?>

  <div class="container alert alert-success">Record Deleted Succesfully</div>

  <?php endif; ?>

















    
    

   


  <style>
    .table{
        margin-left: 30px;
    }
 </style>
</html>