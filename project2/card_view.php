<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="css/quantity.css">

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
                    <a class="breadcrumb-item text-dark" href="#">Cosmetics</a>
                    <span class="breadcrumb-item active">Lips</span>
                    <span class="breadcrumb-item active ">Card View</span>

                    </span>


                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <?php
            if(isset($_GET['txt'])){
              ?>
            <div class="alert alert-success" role="alert">
                <?php
               echo $_GET['txt'];?>
            </div>
            <?php
            
            }
            ?>
            <div class="col-md-10">
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-black">
                                <th class="">index serial</th>
                                <th>Title</th>
                                <th>price</th>
                                <th>Quantity</th>
                                <th>price</th>
                                <th>product id</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                      <?php 
            
                      $l=0;
    
                             
                             
                             if(isset($_SESSION['card'])){
                               foreach($_SESSION['card'] as $value =>$key){?>
                            <tr>
                                
                                <td>
                                    <input type="hidden" name="" value="<?php echo $key['pro_id']?>">
                                    <?php echo $value?>
                                </td>
                                <td>
                                    <?php echo $key['pro_name'] ?>
                                </td>
                                <td>
                                    <?php echo $key['pro_price'] ?>
                                </td>
                                <td>
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus"><input type="number" disabled
                                        step="1" min="1" max="" name="quantity" disabled
                                        value="<?php echo $key['pro_quan'] ?>" title="Qty"
                                        class="input-text qty text" size="4" pattern="" inputmode=""><input
                                        type="button" disabled value="+" class="plus">
                                    </div>
                                    
                                </td>
                                <td>
                             <?php
                               $l += ((int)$key['pro_price'] * (int)$key['pro_quan']);
                                  echo $tottal = ((int)$key['pro_price'] * (int)$key['pro_quan']);?></td>
                                  
                                  <td><p> <?php echo $key['pro_id'] ?></p></td>
                                  <td><a  href="delete_card.php?crd=<?php echo $key['pro_id'] ?>" class="badge bg-success"  name="delete">Delete</a>
                                 
                                  <td>

                                      <input name="name" type='hidden' value=''></input>
                                  </td>
                                  
                                
                                </tr>
                                <?php
                            }
                           
                        }
                        
                        else{
                            ?>
                            <h1 class="text-center badge badge-primary ">Empty Cart</h1>
                            <h1 class="text-center text-black ">0 items</h1>
                            <?php
                            
                        }
                        ?>












                        </tbody>
                    </table>



                </div>
            </div>

            <div class="col-md-2">
                <div class="card text-black">
                    <h4 class="fa-bold">Total price</h4>
                    <p class="text-center">
                        <?php echo $l;?>
                    </p>



                </div>
            </div>


        </div>
    </div>











    <?php
    include "footer.php"
    ?>
    <script src="js/quantity.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>