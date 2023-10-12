<?php
include('Connect.php');

if(isset($_REQUEST['btnsend'])){
   $contactName = $_REQUEST['conname'];
   $contactemail = $_REQUEST['conemail'];
   $contactsubject = $_REQUEST['consubject'];
   $contactmessage = $_REQUEST['conmessage'];

   $query = "INSERT INTO `message`(`con_name`, `con_email`, `con_subject`, `con_message`) VALUES ('$contactName','$contactemail','$contactsubject','$contactmessage')";

   $result  = mysqli_query($conn,$query);
   if(!empty($result)){
       header("location: contact.php?sentmsg= Your message has been sent sucessfully");
   }
}
?>




