<?php
include "adminheader.php"
?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                    </ol>
                    
    <div class="container-fluid pt-5">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class=" pr-3">Jewellery</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="../neck.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/nackless 1.webp" alt="">
                        </div>
                        <div class="flex-fill ml-3 pl-3" style="color:black;">
                            <h6 >Necklace </h6>
                            <p class="text-black">
                                <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../rings.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/rings c 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;">
                            <h6>Rings</h6>
                            <p>
                                <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../bracelets.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/Bracelets c 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3"style="color:black;">
                            <h6>Bracelets</h6>
                            <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../earrings.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/Earring c1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;">
                            <h6>Earrings</h6>
                            <p>
                                <?php
                            
                            include 'connection.php';
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

    <div class="container-fluid pt-5 "style="color:black;">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class=" pr-3">
                Cosmetics</span></h2>
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <a class="text-decoration-none" href="../lips.php">
                    <div class="cat-item d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/lips prodect1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;" >
                            <h6>Lips</h6>
                            <p>
                                <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../face.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/FACE prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;">
                            <h6>FACE</h6>
                            <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../eyebrow.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/EYES prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;">
                            <h6>EYES</h6>
                            <p>
                                <?php
                            
                            include 'connection.php';
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
                <a class="text-decoration-none" href="../nails.php">
                    <div class="cat-item img-zoom d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="../img/NAILS prodect 1.webp" alt="">
                        </div>
                        <div class="flex-fill pl-3" style="color:black;">
                            <h6>NAILS</h6>
                            <p>
                                <?php
                            
                            include 'connection.php';
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



                </div>
            </main>
            <?php include "adminfooter.php" ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>