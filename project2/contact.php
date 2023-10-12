<?php
include "webheader.php"
?>

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Contact</span>
                </nav>
            </div>
        </div>
    </div>
   
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact
                Us</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form action="messagequeery.php" Method="Post" >
                        <div class="control-group">
                            <input type="text"  name="conname" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email"  name="conemail" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text"  name="consubject" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="conmessage" rows="8" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class=" btn btn-success">
                        <input type="submit"  name="btnsend" class=" form-control"  placeholder="SEND MESSAGE">
                                    </div>
                                    <?php if (isset($_GET['sentmsg'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Congratulation!</strong> <?php echo $_GET['sentmsg']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php }  ?>
                
                    </form>

                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                        src="https://maps.google.com/maps?q=aptech metro&t=&z=14&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Aptech Metro Star GAte</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>beauty@bling.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+92 0312345678</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "footer.php"
    ?>