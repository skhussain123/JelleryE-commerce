<?php
include 'Connect.php';
if(isset($_REQUEST['btnregister'])){
    
  $name =  $_REQUEST['username'];
  $email =  $_REQUEST['useremail'];
  $number =  $_REQUEST['usernumber'];
  $password =  $_REQUEST['password'];

  $role = "User";
  $query = "INSERT INTO `register`(`Username`, `Email`, `Password`, `phone`, `Role`) VALUES ('$name','$email','$password','$number','$role')";

    $result  = mysqli_query($conn,$query);
    if(!empty($result)){
        header("location: register.php?successmsg= Account Has Been Successfully Created, Now Login Your Account");
        session_start();
        $_SESSION['user_email']=$email;
        
    }else{
        header("location: register.php?errormsg= Account Can'nt Register Please Try Again");
    }
}

?>
<?php
include 'Connect.php';
if (isset($_REQUEST['btnlogin'])) {
    $email =  $_REQUEST['useremail'];
    $pass =  $_REQUEST['userpass'];
    $checkquery = "SELECT * FROM `register` WHERE Email = '$email' and `Password` ='$pass'";
    $result = mysqli_query($conn, $checkquery);
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] == $email && $row['Password'] = $pass) {
        if ($row['Role'] == "Admin") {
            session_start();
            $_SESSION['admin_email']=$email;
            header("location: admin/deshboard.php");
        } 
        else if ($row['Role'] == "User") {
            header("location: index.php");
            session_start();
            $_SESSION['user_email']=$email;
            
        }
         else {
            header("location: login.php");
        }
    }
}
?>
