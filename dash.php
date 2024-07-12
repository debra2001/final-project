<?php
session_start(); // Start the session

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
</head>
<body>

<?php


include_once __DIR__.'/sidebar.php';
include_once __DIR__.'/partials/nav.php';
?>  

    <!-- Main bar -->
    


<div class="container main-bar p-3">
    <h2 class="text-center">Welcome, <?php echo $username;?>!</h2>
</div>  
    
    
<div class="container main-bar p-3">
    <h2 class="text-center">Dashboard..</h2>
    <div class="container mb-5">
                <div class="row p-2">
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-book fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title">0</h2>
                                <h4 class="card-text fs-5"></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-recycle fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title">0</h2>
                                <h4 class="card-text fs-5">Issued Books</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow py-2 bg-transparent border-0">
                        <i class="card-img-top fa fa-user-friends fa-3x text-center d-card-color"></i>
                            <div class="card-body text-center d-card-color">
                                <h2 class="card-title">0</h2>
                                <h4 class="card-text fs-5">Admins</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-2">
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-user fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title">0</h2>
                                    <h4 class="card-text fs-5">Students</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-list fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title">0</h2>
                                    <h4 class="card-text fs-5">Categories</h4>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                            <div class="card shadow py-2 bg-transparent border-0">
                            <i class="card-img-top fa fa-plus-circle fa-3x text-center d-card-color"></i>
                                <div class="card-body text-center d-card-color">
                                    <h2 class="card-title">0</h2>
                                    <h4 class="card-text fs-5">Pending Requests</h4>
                                </div>
                            </div>
                    </div>
                </div>
    </div>

    <!-- Latest Books Added -->
    <div class="container pb-1 mt-5 d-flex justify-content-between align-items-center">
        <p class="fa fa-book d-card-color fa-lg"></p>
        <h2 class="text-center">Latest Books</h2>
        <a href="<?php echo APP_URL?>/allbooks.php" class="btn btn-sm btn-outline-dark">View All</a>
    </div>
    <table class ="table table-light table-striped table-hover">
        <thead class="table-dark text-white">
            <tr>
                <th>s/n</th>
                <th>Book Image</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>isbn</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="#" class="btn btn-outline-dark mx-2">Change Status</a>
                <a href="#" class="btn btn-outline-danger">Delete</a></td>
            </tr>
        </tbody>
    </table>

</div> 

    <!-- Footer -->
<?php #include_once __DIR__.'/partials/footer.php'; ?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>