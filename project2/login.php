<?php
include "webheader.php"
?>
 <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Login</a>
                </nav>
            </div>
        </div>
    </div>
    <section class="vh-100" style="background-color:#fff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="  box-shadow: rgb(204, 219, 232) 3px 3px 6px 0px inset, rgba(255, 255, 255, 0.5) -3px -3px 6px 1px inset;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-6 d-none d-md-block">
                                <img src="img/3rd bg.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-6 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="allquery.php" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1 ">

                                            <a href="index.html" class="text-decoration-none">
                                                <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                                                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
                                            </a>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example17">Email address </label>
                                            <input type="email" name="useremail" style="font-size: medium;" placeholder="Enter your email " id="form2Example17" class="form-control form-control-lg" />

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example27">Password</label>
                                            <input type="password" name="userpass" style="font-size: medium;" placeholder="Enter your password" id="form2Example27" class="form-control form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-3">
                                            <input type="submit" class="btn btn-danger" name="btnlogin" value="Login" />
                                        </div>


                                        <p class="mb-5 pb-lg-2" style="color: black;">Don't have an account? <a href="register.php" style="color: #0825e2;">Register here</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include "footer.php"
    ?>
