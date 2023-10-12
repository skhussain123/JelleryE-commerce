<?php
include "connection.php";

if(isset($_GET['deleteid'])) {

    $ids = $_GET['deleteid'];
    $sqlquery = "Delete from `register` WHERE `Register_ID` = $ids";
    $result  = mysqli_query($connection, $sqlquery);
    if (!empty($result)) {
      mysqli_close($connection);
      header("location: userdata.php?msgdlt=Delete Data Successfully");
    }
  
   }
?>