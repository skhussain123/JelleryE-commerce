<?php
include "user";
session_start();
   
if(isset($_POST["btnsave"])){

     $tittle=$_POST['pname'];
     $price=$_POST['price'];
     $offprice=$_POST['offprice'];
     $desc=$_POST['desc'];
     $cate=$_POST['category'];
     $product_status='1';
     $color=$_POST['color'];
     $size=$_POST['size'];
     $files=$_FILES['file'];

     $filename=$files['name'];
     $fileerror=$files['error'];
     $filetmp=$files['tmp_name'];
     
     if($filename==''){
        header('location:addproduct.php?msg="please select file"');
    }
   else
    if(empty($tittle)){
        header('location:addproduct.php?msg="please Fill Tittle"');
    }
    else 
    if(empty($price)){
        header('location:addproduct.php?msg="please Fill price"');

    }
    else
    if(empty($offprice)){
        header('location:addproduct.php?msg="please Fill information"');

    }
    else 
    if(empty($desc)){
        header('location:addproduct.php?msg="please Fill Description"');

    }
    else 
    if(empty($cate)){
        header('location:addproduct.php?msg="Select category"');

    }
    else 
    if(empty($color)){
        header('location:addproduct.php?msg="Select product Color"');

    }
    else 
    if(empty($size)){
        header('location:addproduct.php?msg="Select product Size"');

    }
    
    
    
    else{
        $fileext=explode('.',$filename);
        $filecheck=strtolower(end($fileext));
    
        $fileextstored=array('png','jpg','jpeg','gif','webp');
    
        
    
        if(in_array($filecheck,$fileextstored)){
    
            $destnationfile='images/'.$filename;
            move_uploaded_file($filetmp,$destnationfile) or die("query Error");
            echo'image uploaded';
            


            include'connection.php';
          
            $sql="INSERT INTO `products`(`Name`, `Price`, `offprice`, `Description`,`Category`,`Img`,`Color`,`pro_status`,`Size`) VALUES ('$tittle','$price','$offprice','$desc','$cate','$destnationfile','$color','$product_status','$size')";
            $query=mysqli_query($connection,$sql);
            if($query){
                echo'insert success';
                header("location:showAll_product.php");
            }
        }
        else{

            $msg ='invalid file';
            $_SESSION['msg']="$msg";
        }}





    }
    


?>