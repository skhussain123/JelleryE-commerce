<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Beauty Bling</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a href="deshboard.php" class="text-decoration-none">
                    <span class="h4 text-uppercase text-warning bg-dark px-2">Beauty</span>
                    <span class="h4 text-uppercase text-dark bg-warning px-2 ml-n1">Bling</span>
                </a>
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            <a href="../index.php">
                    <button class="btn btn-warning"  id="btnNavbarSearch" type="button">Visit Site</button>
                </a>
                <a href="../login.php">
                    <button class="btn btn-warning" style="margin-left: 10px;"  id="btnNavbarSearch" type="button">logout</button>
                </a>
            </div>
        </form>
        
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link text-warning mt-5" href="deshboard.php">
                            <div class="sb-nav-link-icon text-warning"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>



                        <div class="sb-sidenav-menu-heading text-success">Product</div>
                                <a class="nav-link text-warning" href="addproduct.php">Add New Prodects</a>
                                <a class="nav-link text-warning" href="showAll_product.php">View prodects</a>



                                <div class="sb-sidenav-menu-heading text-success">Accounts Details</div>
                       <a class="nav-link text-warning" href="userdata.php">Users  Details</a>

                       <div class="sb-sidenav-menu-heading text-success">Messages</div>
                       <a class="nav-link text-warning" href="messages.php">User Messages</a>

                       
                    
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                
                            </nav>
                        </div>
                        
                       
                </div>
              
            </nav>
        </div>