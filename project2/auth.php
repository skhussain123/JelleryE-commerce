<?php

if(isset($_SESSION['user_email'])){
}
else{?>
    <script>
    window.location.href = "login.php";
    </script><?php
}
?>