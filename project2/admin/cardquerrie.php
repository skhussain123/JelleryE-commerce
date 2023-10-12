<?php
include 'Connection.php';

if (isset($_REQUEST['btnsavedata'])) {

  $Imagename =  $_FILES['choosefile']['name'];
  $tempname =  $_FILES['choosefile']['tmp_name'];
  $Storelocation = "Image/" . $Imagename;

  if (move_uploaded_file($tempname, $Storelocation)) {
    $title =  $_REQUEST['title'];
    $description =  $_REQUEST['description'];
    $query = "INSERT INTO `searchproducts`(`Title`, `Description`, `Image`) VALUES ('$title','$description','$Imagename')";
    mysqli_query($connection, $query);
    mysqli_close($connection);
    header("location: create.php");
  } else {

    echo "Failed To Upload Image";
  }
} else if (isset($_REQUEST['btnupdate'])) {

  $ids = $_REQUEST['Register_ID'];
  $name = $_REQUEST['editname'];
  $email = $_REQUEST['editemail'];
  $phone = $_REQUEST['editphone'];
  $role = $_REQUEST['editrole'];


  $sqlquery = "UPDATE `register` SET  `Username`='$name',`Email`='$email',`phone`='$phone',`Role`='$role' WHERE `Register_ID`  = $ids";
  $result  = mysqli_query($connection, $sqlquery);
  if (!empty($result)) {
    mysqli_close($connection);
    header("location: userdata.php");
  }
} 
else if (isset($_GET['deleteid'])) {

  $ids = $_GET['deleteid'];
  $sqlquery = "Delete from `register` WHERE `Register_ID` = $ids";
  $result  = mysqli_query($connection, $sqlquery);
  if (!empty($result)) {
    mysqli_close($connection);
    header("location: userdata.php?msgdlt=Delete Data Successfully");
  }

 }

 
?>
