<?php
session_start();


if(isset($_GET["crd"])){
   
    echo $id= $_GET['crd'];
    foreach($_SESSION['card'] as $key => $value){

        if($value['pro_id']==$id){
            unset($_SESSION['card'][$key]);
            $_SESSION['card']=array_values($_SESSION['card']);
            header('location:card_view.php');
            
        }
    }
    // foreach($_SESSION['card'] as $key => $value){

    //     if($value['pro_id']==$_POST['name']){
    //         unset($_SESSION['card'],$key);
    //         $_SESSION['card']=array_values($_SESSION['card']);
    //         header('location:card_view.php');
            
    //     }
    // }
}








?>