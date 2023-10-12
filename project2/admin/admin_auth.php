<?php


if(isset($_SESSION['admin_email'])){

     
}
else{?>
    <script>
    window.location.href = "admin_login.php";
    </script><?php
}
?>