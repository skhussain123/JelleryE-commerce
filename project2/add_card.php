<?php

session_start();


if(isset($_POST['btn_card'])){
    
    $id =$_POST['card_id'];
    $title =$_POST['card_tit'];
    $price =$_POST['card_price'];
    $quan =$_POST['quantity'];
    $size =$_POST['card_size'];
    $color =$_POST['card_color'];

    if($_SESSION['card']){

      $check_pro=array_column($_SESSION['card'],'pro_id');
      if(in_array($id,$check_pro)){
        header("location:card_view.php?txt=Alerady Added Cart ");
      echo 'Already Added';
     }
     else{
      $_SESSION['card'][]=array('pro_id'=> $id,'pro_name'=>$title,'pro_price'=>$price,
      'pro_quan'=>$quan,'pro_size'=>$size,'pro_color'=>$color);
      
      header("location:card_view.php?txt=Add Cart success");

     }
      

    }
    else{
      $_SESSION['card'][]=array('pro_id'=> $id,'pro_name'=>$title,'pro_price'=>$price,
      'pro_quan'=>$quan,'pro_size'=>$size,'pro_color'=>$color);
      
      header("location:card_view.php?txt=Add Cart success");
    }

      
       
}













?>