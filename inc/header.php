<?php require "functions.php"; ?>

<!DOCTYPE html>
<html>
    <head>
        <title>my store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet"  href = "css/all.min.css">
        <link rel="stylesheet"  href = "css/style.css">
        <link rel="stylesheet"  href = "css/signle-page.css">
    </head>
    <body>
    <div class="container">
        <div class="nav-one">
            <div class="row">
                <div class="col-md-7">
                    <div class="right-header float-left">
                        <h2 class="site-title"><a href="index.php"><i class="fas fa-store-alt"></i> <span>my</span> <span> StOre</span> </a></h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="left-header">
                        <nav class="navbar navbar-expand-lg float-right">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                            acount
                                        </a>
                                        <?php
                                            
                                            if(isset($_SESSION['logged'])  && $_SESSION['logged'] = true){
                                        ?> 
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item"> <img src="media/user.jpg" alt="" style="width:35px; height: 35px;  border-radius:50%">
                                                    <span><?php echo $_SESSION['user_name']?></span>
                                                </a>
                                                <a class="dropdown-item text-center" href="#"><i class="fas fa-sign-out-alt mr-2"></i>log out</a>
                                            </div>
                                        <?php 
                                        } 
                                        else 
                                        {
                                        ?>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="register.php"><i class="fas fa-user mr-2"></i>inscription</a>
                                                <a class="dropdown-item" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>log in</a>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-shopping-cart mr-1"></i> cart
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="cart.php">
                                                <?php 
                                                if( ! empty($_SESSION['count']) && $_SESSION['count'] > 0 ) 
                                                {
                                                echo  $_SESSION['count'] ." product(s)";
                                                }
                                    
                                                else{
                                                    echo "0 product(s)";
                                                    //die();
                                                }
                                                ?>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    <div class="container">
        <div class="nav-two">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"> Acceuil </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                                $query = " SELECT * FROM categories ";
                                $result = query($query); // query is a function cames from functions.php                       
                                while($categories = fetch_array($result)):
                            ?> 
                            <a class="dropdown-item" href="category.php?id=<?php echo $categories['cat_id']; ?>"><?php echo $categories['cat_title']; ?></a><hr>
                            <?php endwhile; ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="search.php" method="post"  >
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" autocomplete="on" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"  >Search</button>
                    </form>
                    <?php
                    ?>
                </div>
            </nav>
        </div>
    </div>
    <?php

$url = $_SERVER["REQUEST_URI"]; 
$pos = strrpos($url, "hello.php"); 

if($pos != false) {
    echo "found it at " . $pos; 
}

?> 
