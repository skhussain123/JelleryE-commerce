<?php
include "webheader.php"
?>
 <section class="vh-100 bg-image bg-warning " style="background: #FF4E50;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    " >

        <div class="mask d-flex align-items-center h-100 gradient-custom-3" > 
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
        
                                <form action="allquery.php" method="post">
                                    

                                    <div class="form-outline mb-4">
                                        <label class="form-label"  for="form3Example1cg">Name</label>
                                        <input type="text" name="username" placeholder="Enter your name" id="form3Example1cg"
                                            style="font-size:medium" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example3cg">Email</label>
                                        <input type="email" name="useremail"  placeholder="Enter your email" id="form3Example3cg"
                                            style="font-size:medium" class="form-control form-control-lg" />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Pnumber">Phone Number</label>
                                        <input type="phone" name="usernumber"  placeholder="Enter your Phone Number" id="Pnumber"
                                            style="font-size:medium" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                        <input type="password" name="password"  placeholder="Enter your password" id="form3Example4cg"
                                            style="font-size:medium" class="form-control form-control-lg" />
                                    </div>

                            
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="btnregister" 
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-white">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="login.php" style="color: #0825e2;"> <u>Login here</u></a></p>
                                            <?php if (isset($_GET['successmsg'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation!</strong> <?php echo $_GET['successmsg']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } else if (isset($_GET['errormsg'])) { ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Alert!</strong> <?php echo $_GET['errormsg']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

                                </form>
                               
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