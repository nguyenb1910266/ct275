<?php 
    include('../config.php');
    if(isset($_POST['search_film'])){
        $name = $_POST['username'];
        $query = mysqli_query($connect, "SELECT * FROM films where name like '%$name%'");
    }
?>

<div class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <div class="container text-light">
            <a class="navbar-brand d-flex h-100" href="index.php" style="wight: 150px;">
                <img src="img/LOGOv2.png" alt="" width="15%">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex" id="navbarTogglerDemo02" style="wight: 700px;">
            
            <form class="d-flex" method="POST" action="index.php">
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"  name="username">
                        <button class="btn btn-success" name="search_film" type="submit"><i class="fa fa-search" aria-hidden="true" style="padding: 0px; !important"></i></button>
                </form>
                <ul class="navbar-nav me-auto mb-lg-0">
                    <?php if(!isset($_SESSION['user'])){
                        echo "<li class='nav-item'><a class='nav-link' href='login.php'> <button id='btnLogin' class='btn btn-primary'><i class='fa fa-sign-in' aria-hidden='true'></i>  Login</button></a></li>";
                    }else{
                        echo "<li class='nav-item'><a class='nav-link' href='manage.php'> <button class='btn btn-primary'><i class='fa fa-book' aria-hidden='true'></i> Manage</button></a></li>";
                        echo "<li class='nav-item'><a class='nav-link' href='logout.php'> <button class='btn btn-primary'><i class='fa fa-sign-out' aria-hidden='true'></i> </button></a></li>";
                        
                    } ?>
                </ul>
            </div>
        </div>
        </nav>
    </div>
</div>