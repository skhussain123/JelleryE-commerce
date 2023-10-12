<?php
include "webheader.php"
?>
 <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12 " >
                <div id="header-carousel"  class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators" >
                        <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#header-carousel" data-slide-to="1"></li>
                        <li data-target="#header-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="img/necklace background img.webp"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Necklace
                                    </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">"Complete any outfit
                                        with our beautiful necklace collection."</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="neck.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="img/rings background img.jpg"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Rings
                                    </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">"Unforgettable rings for
                                        unforgettable moments."
                                    </p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="rings.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative" style="height: 530px;">
                            <img class="position-absolute w-100 h-100" src="img/Earrings background img.webp"
                                style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Earrings
                                    </h1>
                                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">"Earrings that will make
                                        you feel confident and beautiful"</p>
                                    <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                        href="earrings.php">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">Jewellery</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="neck.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/nackless 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Necklace</h6>
                            <p class="text-black">
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Necklace'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="rings.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/rings c 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Rings</h6>
                            <p>
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Rings'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="bracelets.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/Bracelets c 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Bracelets</h6>
                            <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Bracelets'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="earrings.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/Earring c1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Earrings</h6>
                            <p>
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Earrings'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>

                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">
                Cosmetics</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="lips.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/lips prodect1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>Lips</h6>
                            <p>
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Lips'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="face.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/FACE prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>FACE</h6>
                            <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Face'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="eyebrow.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/EYES prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>EYES</h6>
                            <p>
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Eyes'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="nails.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/NAILS prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6>NAILS</h6>
                            <p>
                                <?php
                            
                            include'admin/connection.php';
                            $sql="SELECT * FROM `products`WHERE Category='Nails'"; 
                           $result=mysqli_query($connection,$sql);
                            if(mysqli_num_rows($result)>0){
                              ?>
                            <h6>
                                <?php  echo $all=mysqli_num_rows($result);?> products
                            </h6>
                            <?php }
                     else{
                        ?>
                            <h6 class="" style="color: gray;">
                                <?php echo 0?> products
                            </h6>
                            </h6>
                            <?php
}   ?>
                            </p>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Recent
                Products</span></h2>
                <div class="" id="searchresult" style="display:none;">

                    </div>
        <div class="l" id="table-data">

        </div>


    </div>

    <script src="admin/jquery-3.6.3.min.js"></script>
    <script>
        $(document).ready(function () {
            function loadTable(page) {
                $.ajax({
                    url: "ajax-pagination.php",
                    type: "POST",
                    data: { page_no: page },
                    success: function (data) {
                        $("#table-data").html(data);
                    }
                });
            }
            loadTable();

            $(document).on("click", "#pagination a", function (e) {
                e.preventDefault();
                var page_id = $(this).attr("id");

                loadTable(page_id);
            })
        });


        $(document).ready(function () {
            $('#search').keyup(function () {
                var value = $(this).val();
                if (value != "") {

                    $.ajax({
                        url: "ring_search.php",
                        method: "POST",
                        data: { value: value },
                        success: function (data) {
                            $('#searchresult').html(data);
                            $('#searchresult').show();
                            $('#table-data').hide();
                        }

                    });
                }
                else {
                    $('#searchresult').hide();
                    $('#table-data').show();

                }

            });


        });
    </script>
    </script>
    
    
    
    <?php
    include "footer.php"
    ?>