<?php
include "adminheader.php"
?>
<style>
    .textaria{
       margin-left: 450px;
       margin-top: 150px;
       
    }
.editborder{
    border: 2px solid black;
    
}
</style>
<div class="container-fluid textaria">
        <div class="row">
            <div class="col-md-8 bg-dark shadow p-2 mt-3 border-solid ">
                <h3 class='text-center text-white'>Edit Product Details</h3>
                </div>
            </div>
        <div class="row">

            <div class="col-md-8 mt-2">
                <form action="editproductqueerie.php" method="post">
                    <?php
                    include 'Connection.php';
                    $id =  $_GET['id'];
                    $sqlquery = "select * from `products` where `id` = $id";
                    $result = mysqli_query($connection,$sqlquery);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Tittle</label>
                        <input type="hidden" name="product_id" value="<?php echo $row['id']?>"  >
                        <input type="text" name="edittittle" value="<?php echo $row['Name']?>" class="form-control" id="exampleInputEmail1"placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">price</label>
                        <input type="number" name="editprice" value="<?php echo $row['Price']?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">	category</label>
                        <input type="phone" name="editcategory" value="<?php echo $row['Category']?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">color</label>
                        <input type="text" name="editcolor" value="<?php echo $row['Color']?>" class="form-control" id="exampleInputPassword1" placeholder="Admin/User">
                    </div>
                    <button type="submit" name="btnupdate" class="btn btn-success mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>