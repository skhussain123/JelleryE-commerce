<?php

include'admin/connection.php';


if(isset($_POST['value'])){
   
    $input=$_POST['value'];

?><div class="container-fulid">
    <div class="row">

   
<?php

    
    $sql="SELECT * FROM products WHERE Name Like '%$input%'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){

        while($row=mysqli_fetch_assoc($result)){?>
         <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                         <div class="product-item bg-light mb-4">
                             <div class="product-img position-relative overflow-hidden">
                                 <img class="img-fluid w-100" style="height: 220px;"src='admin/<?php echo $row['Img'] ?>' alt="">
                                 <div class="product-action">
                                     <a class="btn btn-outline-dark btn-square" href=""><i
                                             class="fa fa-shopping-cart"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i
                                             class="fa fa-sync-alt"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                 </div>
                             </div>
                             <div class="text-center py-4">
                                 <p class=" text-uppercase text-decoration-none text-truncate" href=""><?php echo $row['Name'];?></p>
                                 <div class="d-flex align-items-center justify-content-center mt-2">
                                     <h5>Rs : <?php echo $row['Price']?>.00</h5>
                                     <h6 class="text-muted ml-2"><del><?php echo $row['offprice'] ?></del></h6>
                                 </div>
                                 <div class="d-flex align-items-center justify-content-center mb-1">
                                 <div class="col-md-10 col-sm-5">
                                    <div class="row">

                                    <a class='btn btn-primary' href="products_details.php?pro_id=<?php echo $row['id'] ?>" style='width: 100%;'>product view</a>
                                    </div>
                                </div>
                                 </div>
                                
                                </div>
                         </div>
                     </div>


<?php

        }
    }
    else{
        ?><h2 class="text-center"><?php echo'NOT fount data';?></h2><?php
    }
    
}

?> </div>
</div>
<?php



?>