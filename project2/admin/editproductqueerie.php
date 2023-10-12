
<?php

include 'Connection.php';
if (isset($_REQUEST['btnupdate'])) {
$ids = $_REQUEST['product_id'];
$name = $_REQUEST['edittittle'];
$price = $_REQUEST['editprice'];
$category = $_REQUEST['editcategory'];
$color = $_REQUEST['editcolor'];
$sqlquery = "UPDATE `products` SET  `Name`='$name',`Price`='$price',`Category`='$category ',`Color`='$color' WHERE `id` = $ids";
$result  = mysqli_query($connection, $sqlquery);
if (!empty($result)) {
  mysqli_close($connection);
  header("location: showAll_product.php");
}




} 




else if (isset($_GET['deleteid'])) {
    $ids = $_GET['deleteid'];
    $sqlquery = "Delete from `products` WHERE `id` = $ids";
    $result  = mysqli_query($connection, $sqlquery);
    if (!empty($result)){
      mysqli_close($connection);
      header("location: showAll_product.php?msgdlt=Delete Card Successfully");
    }
  }















?>