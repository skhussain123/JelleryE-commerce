<?php
session_start();
if(isset($_SESSION['user_email'])){
    session_unset();
    session_unset();
    header("location:login.php");
}
else{
    header("location:login.php");
}












?>