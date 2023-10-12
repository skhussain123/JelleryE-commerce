<?php

session_start();
include 'connection.php';
include "adminheader.php"
?>

   
        <div id="layoutSidenav_content">
            <main class="content">
                <div class="container-fluid p-0">


                    <br>
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xxl-9">
                            <div class="">
                                <?php

                                if(isset($_GET['msg'])){
                                    ?>
                                    <div class="alert alert-danger" role="alert">
                                    <?php   echo $_GET['msg'];?></div>
                                    <?php
                                }

                                ?>

                                <div class="container-fluid h">
                                    <div class="row">
                                        <div class="col-md-8 card">
                                            <div class="">
                                                <div class="card-tittle">

                                                    <br>

                                                    <h3>Add Products</h3>

                                                    <p>This is a page of add products</p>
                                                    <br>
                                                    
                                                    <form action="product_query.php" method="post"
                                                        enctype="multipart/form-data">
                                                        <input type="file" name="file" id="upload_file"
                                                            placeholder="products tittle" id="">
                                                            <p><?php
                                                            include'connection.php';
                                                            $sql="SELECT * FROM `products`";
                                                            $result=mysqli_query($connection,$sql);
                                                            if(mysqli_num_rows($result)>0){
                                                                $all=mysqli_num_rows($result);
                                                            }

                                                            
                                                            ?></p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-4 card">
                                            <br>
                                            <img id="imagepreview" width="100%" height="170px" alt="">

                                            <div class="a">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <script src="jquery-3.6.3.min.js"></script>
                                <script>

                                    function readURL(input) {
                                        if (input.files && input.files[0]) {
                                            var reader = new FileReader();

                                            reader.onload = function (e) {
                                                $('#imagepreview').attr('src', e.target.result);
                                            }

                                            reader.readAsDataURL(input.files[0]);
                                        }
                                    }

                                    $("#upload_file").change(function () {
                                        readURL(this);
                                    });
                                </script>




                            </div>
                        </div>

                    </div>

                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">


                            <br>
                            <span>Enter Product Tittle</span>

                            <input class="form-control" name="pname" type="text" placeholder="Tittle">
                            <br>
                            <span>Set Price</span>
                            <input class="form-control" type="text" name="price" placeholder="PKR :">
                            <br>
                            <span>off Price</span>
                            <input class="form-control" type="phone" name="offprice" placeholder="OFF% Price:">
                            <br>

                            <br>

                            <div class="form-group">
                                <label for="name">Text Area</label>
                                <textarea class="form-control" name="desc" rows="3"></textarea>
                            </div>


                            <br>

                            <div class="form-group">
                                <select name="category" class="form-control" style="width: 570px; margin-right: 10px;">
                                    <option class="form-control text-danger" value="" data-display-text="Fruits">Select
                                        Category :</option>
                                    <option value="Nails">Nails</option>
                                    <option value="Eyes">Eyes</option>
                                    <option value="Face">Face</option>
                                    <option value="Lips">Lips</option>
                                    <option value="Rings">Rings</option>
                                    <option value="Necklace">Necklace</option>
                                    <option value="Earrings">Earrings</option>
                                    <option value="Bracelets">Bracelets</option>



                                </select><br>


                            </div> 
                            <br>
                          
                            <div class="form-group">
                                <select name="color" class="form-control" style="width: 570px; margin-right: 10px;">
                                    <option class="form-control text-danger" value="" data-display-text="Fruits">Select
                                        Color :</option>
                                    <option value="White">White</option>
                                    <option value="Black">Black</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Golden">Golden</option>
                                    <option value="Gray">Gray</option>
                                    <option value="Red">Red</option>
                                    <option value="yellow">yellow</option>
                                  



                                </select>
                                <br>
                                <br>


                            </div>

                            <div class="form-group">
                                <select name="size" class="form-control" style="width: 570px; margin-right: 10px;">
                                    <option class="form-control text-danger" value="" data-display-text="Fruits">Select
                                        Size :</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XS">XS</option>
                                    <option value="XL">XL</option>
                                  



                                </select>
                                <br>
                                <br>


                            </div>

                            <input name="btnsave" type="submit" value="Submit" class=" form-control btn btn-warning">

                            <br>
                            <br>
                            <br>
                            </form>
                        </div>


                        <div class="col-lg-5">
                            <div class="">
                                <br>
                                <br>
                                <div class="card">
                                    <div class="card-header">
                                        <h3>Products Quantity</h3>
                                    </div>
                                    <div class="card-body">


                                        <div class="row">
                                            <div class="">
                                                <h5 class="card-title">Total Quantity</h5>
                                                <?php
                                                include'connection.php';
                                                $sql="SELECT * FROM `products`";
                                                $result=mysqli_query($connection,$sql);

                                                if(mysqli_num_rows($result)>0){

                                                   ?>
                                                <h2>
                                                    <?php echo $all=mysqli_num_rows($result); ?>
                                                </h2>

                                                <?php
                                                }
                                            ?>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">

                                        </h1>
                                        <div class="mb-0">
                                            <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i>
                                                -2.25% </span>
                                            <span class="text-muted">Since last week</span>
                                        </div>
                                        <div>

                                        </div>
                                        <div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </main>
            <?php include "adminfooter.php" ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>