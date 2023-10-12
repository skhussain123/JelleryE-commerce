<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Beauty Bling</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href="img/logo3.png" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid header ">
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex  bg-warning">
        <img src="img/sitelogo2.png" width="70px" alt="">
            <div class="col-lg-4">
                <a href="index.php" class="text-decoration-none">
                    <span class="h3 text-uppercase text-primary bg-dark px-2">Beauty</span>
                    <span class="h3 text-uppercase text-dark bg-primary px-2 ml-n1">Bling</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="" class="">
                    <div class="input-group">
                        <input type="text" class="form-control" id="search"placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0"><?php
                if(isset($_SESSION['user_email'])){
                  
                    echo $_SESSION['user_email'];
                }
                ?></h5>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About US</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Jewellery<i
                                        class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="rings.php" class="dropdown-item">Rings</a>
                                    <a href="neck.php" class="dropdown-item">Necklace</a>
                                    <a href="earrings.php" class="dropdown-item">Eings</a>
                                    <a href="bracelets.php" class="dropdown-item">Bracelets</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Cosmetics<i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="nails.php" class="dropdown-item">Nails</a>
                                    <a href="eyebrow.php" class="dropdown-item">Eyes</a>
                                    <a href="face.php" class="dropdown-item">Face</a>
                                    <a href="lips.php" class="dropdown-item">Lips</a>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                            <a href="login.php" class="nav-item nav-link">Login</a>
                        </div>
                        <div class="navbar-nav icon ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="card_view.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle"
                                    style="padding-bottom: 2px;">
                                    <?php
                                      if(isset($_SESSION['card'])){
                                    
                                         $a =$_SESSION['card'];
                                          echo $total= count($a);
                                       
                                        }
                                        else{
                                        echo $total=0;
                                        }
                                    
                                    
                                       
                                       
                                    
                                    
                                    ?>
                                
                                
                                
                                
                                
                                </span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
   