      
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
    <title>Title</title>
</head>

<body>
<?php
include "webheader.php";

include 'admin/connection.php';
if(isset($_GET['pro_or_id'])){

    $id=$_GET['pro_or_id'];
}

$sql="SELECT * FROM products WHERE `id`=$id";
$result=mysqli_query($connection,$sql);

?>
 

    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">jewellery</a>
                    <span class="breadcrumb-item active">Rings</span>
                    <span class="breadcrumb-item active">products Details</span>
                    <span class="breadcrumb-item active">Buy products</span>
                </nav>
            </div>
        </div>
    </div>
    <?php
 if(isset($_SESSION['user_email'])){
}
else{?>
    <script>
    window.location.href = "login.php";
    </script><?php
}

?> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        
                        <div class="col-md-1">
                            <?php
                            if(mysqli_num_rows($result)>0){

                                while ($row=mysqli_fetch_assoc($result)) {
                                
                            ?>
                          
                            <img src="admin/<?php echo $row['Img'] ?>" class="ml-4" style="height: 100px; border-radius:25px;" alt="">
                        </div>
                        <div class="col-md-8">
                            <h5 class="text-black mt-4 ml-3"><?php  echo $row['Name'];?></h5>
                        </div>
                        <div class="col-md-3">
                            <p class="text-black mt-4 ml-3">Total price :<?php echo $row['Price']?></p>
                            <p class="text-black  ">1 item(L) subTotal Rs. <?php echo $row['Price']?></p>

                            <?php $ppp = $row['Price'] ?>
                        </div>
                    </div>
                    <p class="ml-2 mt-2"><?php echo $row['Description']?></p>
                    <?php?>
                    <br>
                   
                    <p class="alert alert-dark"><?php
                    if($http_response_heade)
                    ?></p>
                    </p>
                    <?php
                    }
                     }?>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Name</label>
                                    <input type="text"name="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Name"></div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mobile number</label>
                                    <input type="phone" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                     <label for="inputState">City</label>
                                    <select id="inputState"  name="city" class="form-control">
                                    <option selected >karachi</option>
                                    </select> 
                                </div>
                                <div class="form-group">
                                   
                                    <label for="inputState">State</label>
                                    <select id="inputState" name="state" class="form-control">
                                    <option  selected >Area</option>
                                    <option >Malir</option>
                                    <option >Korangi</option>
                                    <option >Shah faisal</option>
                                    <option >Gulshan</option>
                                    <option >Johar</option> 
                                    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                
                                <label for="exampleInputPassword1">Address</label>
                                <input type="text"  name="address"class="form-control" id="exampleInputPassword1" placeholder="house number / Building / Area">
                                </div>
                                <div class="form-group">
                              <label for="inputState">payment status</label>
                            <select id="inputState" name="payment" class="form-control">
                            <option selected >Cash on Delivery</option>
                        </select>
                    </div>
                    <br>
                    <button type="submit" name="btn_order"class="btn btn-primary col-md-6">Submit</button>
                </div>
            </form>
        </div>
        </div>
            </div>

        </div>
    </div>

    <?php


include 'admin/connection.php';


if(isset($_POST['btn_order'])){
     $pro_id =$_GET['pro_or_id'];
     $name =$_POST['name'];
     $phone =$_POST['phone'];
     $address = $_POST['address'];
     $city =$_POST['city'];
     $state=$_POST['state'];
     $payment =$_POST['payment'];
     $user_email=$_SESSION['user_email'];

    if(empty($name)|| empty($name) || empty($phone) || empty($address) || empty($city) || empty($state) || empty($payment) ){
        $_SESSION['err']="please fill all fields";
       
    }
    else{

        
        

        
        $sql="INSERT INTO `order_detail`(`order_name`,`products_id`,`price`,`city`, `state`, `payment_status`, `address`, `phone`,`user_email`) VALUES ('$name','$pro_id',' $ppp','$city','$state','$payment','$address','$phone','$user_email')";
        $result=mysqli_query($connection,$sql);
        if($result){
            $_SESSION['err']="your order successfuly insert";
        }
        else{
            echo'not inserted';
        } 
        
        
        
    }
    


}?>



    <?php
include "footer.php"
?>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>