<?php
if(isset($_GET['pro_id'])){
    $id= $_GET['pro_id'];
  }
  include'admin/connection.php';
  $sql="SELECT * FROM products WHERE id=$id";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script data-require="jquery@3.1.1" data-semver="3.1.1"
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/quantity.css">
    <link rel="stylesheet" href="css/card.css">
    <script src="js/quantity.js"></script>
    <title>Title</title>
</head>

<body>

    <?php
include "webheader.php"
?>

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">jewellery</a>
                    <span class="breadcrumb-item active">Rings</span>
                    <span class="breadcrumb-item active">products Details</span>
                </nav>
            </div>
        </div>
    </div>
    <form action="add_card.php" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-4">
                <div class="card card-border" style="border-radius:25px;">
                    <?php
                    $result=mysqli_query($connection,$sql);
                    if(mysqli_num_rows($result)>0){
                      $row=mysqli_fetch_assoc($result);
                     ?> <img src="admin/<?php echo $row['Img']?>" style="height: 300px; border-radius:25px;" alt="">
                    <?php
                    
                    }
                    ?>

                </div>
            </div>
            <div class="col-md-7 col-lg-7 card">
           
                <br>
              <?php
              
              
              $result=mysqli_query($connection,$sql);
              if(mysqli_num_rows($result)>0){
                $row=mysqli_fetch_assoc($result);

                ?><h5><?php echo $row['Name']?> </h5>
                <input type="hidden" name="card_tit" value="<?php echo $row['Name']?></del>">
                <input type="hidden" name="card_id" value="<?php echo $row['id']?></del>">
                <input type="hidden" name="card_size" value="<?php echo $row['Size']?></del>">
                <input type="hidden" name="card_color" value="<?php echo $row['Color']?></del>">
                
                <?php
              }
              ?>
               <div class="row">
                    <div class="col-md-6">
                        <input type="hidden" class="" style="width: 100%;"></input>
                    </div>

                    <div class="col-md-6">
                        <style>
                            .mb{
                                position: relative;
                                bottom: 45px;
                                left: 80px;

                            }
                        </style>
                        <p class="mb text-black" style="width: 100%;">Post <?php echo $row['upload_time']?></p>
                    </div>
                    <br>
                    <br>
                </div>
             

                <div class="d-flex">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small>(99)</small>
                </div>
                <p>Brand : </p>
                <div class="">
               
                    <p class="text-success">&#128507;Warranty Not Available</p>

                    <p class="text-success">Cash on Delivery Available</p>
                    <?php
                      $result=mysqli_query($connection,$sql);
                      if(mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_assoc($result);
        
                        ?><h5  value="">RS : <?php echo $row['Price']?>.00 <del><?php echo $row['offprice'] ?></del></h5>
                        <input type="hidden" name="card_price" value="<?php echo $row['Price']?>.00 <del><?php echo $row['offprice'] ?></del>">
                        
                        <?php
                        
                       
                        
                      }
                ?>

                   
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max=""
                            name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern=""
                            inputmode=""><input type="button" value="+" class="plus">
                    </div>
                    
                   


                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <a  href="buy_pro.php?pro_or_id=<?php echo $_GET['pro_id'] ?>"class="btn btn-success" style="width: 100%;">Buy Now</a>
                    </div>

                    <div class="col-md-6">
                        <Button class="btn btn-info" name="btn_card" style="width: 100%;">Add to Card</Button>
                    </div>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        </form>

    </div>
    <br>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="card col-md-12 col-lg-12">

                    <div class="">
                        <br>
                        <h6 class="text-black">
                        <?php
                        echo $row['Name'];
                        ?>
                        </h6>
                        <br>
                        <h5>products details</h5>
                        <br>
                        <p class="text-black">Color : <?php echo $row['Color']?></p>
                        <p class="text-black">Size : <?php echo $row['Size']?></p>
                        <p class="text-black">Warranty status : Not Available</p>
                        <p class="text-black">Delivery charges :Free off</p>
                    </div>
                    <br>
                    <h5>Description </h5>
                    <br>
                    <p class="text-black">
                        <?php
                        echo $row['Description'];
                        ?>
                    <br>
                    <br>
                    <h5>Related products</h5>
                    <br>
                    <?php
                      $result=mysqli_query($connection,$sql);
                      if(mysqli_num_rows($result)>0){
                        $row=mysqli_fetch_assoc($result);
        
                       $category=$row['Category'];
                      }?>
                       <div class="container-fluid">
                        <div class="row">

                        
                       <?php
                       $ss="SELECT * FROM products WHERE Category='$category'";
                       $res=mysqli_query($connection,$ss);
                       if(mysqli_num_rows($res)>0){

                           
                           while($aa=mysqli_fetch_assoc($res)){
                               ?>

<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                         <div class="product-item bg-light mb-4">
                             <div class="product-img position-relative overflow-hidden">
                                 <img class="img-fluid w-100" style="height: 220px;"src='admin/<?php echo $aa['Img'] ?>' alt="">
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
                                 <p class=" text-decoration-none text-uppercase text-truncate" href=""><?php echo $aa['Name'];?></p>
                                 <div class="d-flex align-items-center justify-content-center mt-2">
                                     <h5>Rs : <?php echo $aa['Price']?>.00</h5>
                                     <br>
                                   
                                     <h6 class="text-muted ml-2"><del><?php echo $aa['offprice'] ?></del></h6>
                                 </div>
                                 <div class="d-flex align-items-center justify-content-center mb-1">
                                    <br>
                                  <div class="col-md-10 col-sm-5">
                                    <div class="row">

                                    <a class='btn btn-success' href="products_details.php?pro_id=<?php echo $aa['id'] ?>" style='width: 100%;'>product view</a>
                                    </div>
                                </div>
                                     
                                 </div>
                                
                                </div>
                         </div>
                     </div>
 

  

 
                        <?php
                       }
                    }
                    
                    
                    
                    
                    ?>
                   
                </div>
            </div>
        </div>
    </section>






    <?php
include "footer.php"
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>