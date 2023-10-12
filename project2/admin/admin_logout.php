<?php
session_start();
if(isset($_SESSION['admin_email'])){
    session_unset();
    session_unset();
    header("location:../login.php");
}
else{
    
}












?>