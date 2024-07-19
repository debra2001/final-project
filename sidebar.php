<?php define("APP_URL", "http://localhost/finalyear"); ?>
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
                    <a href="<?php echo APP_URL?>/support.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/support.php' ? 'fw-bold': '' ?>"><span class="fa fa-chart-line me-3"></span>support request</a>
                    <a href="<?php echo APP_URL?>/center.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/center.php' ? 'fw-bold': '' ?>"><span class="fa fa-users-line me-3"></span>communication center</a>
                    <a href="<?php echo APP_URL?>/profile.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/profile.php' ? 'fw-bold': '' ?>"><span class="fa fa-book me-3"></span>profile</a>
                    <a href="<?php echo APP_URL?>/faq.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/faq.php' ? 'fw-bold': '' ?>"><span class="fa fa-square-plus me-3"></span>FAQ's</a>
                    <a href="<?php echo APP_URL?>/feed.php" class="list-group-item bg-transparent border-0 text-white fs-6 sidebar_item <?php echo $_SERVER['REQUEST_URI'] == '/finalyear/feedback.php' ? 'fw-bold': '' ?>"><span class="fa fa-list me-3"></span>feedback</a>
                   
                </ul>
            </div>
        </div>
    </aside>