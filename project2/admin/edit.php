<?php
include "adminheader.php"
?>
<style>
    .textaria{
       margin-left: 450px;
       margin-top: 150px;
       
    }
.editborder{
    border: 2px solid black;
    
}
</style>
<div class="container-fluid textaria">
        <div class="row">
            <div class="col-md-8 bg-dark shadow p-2 mt-3 border-solid ">
                <h3 class='text-center text-white'>Update User Record</h3>
                </div>
            </div>
        <div class="row">

            <div class="col-md-8 mt-2">
                <form action="cardquerrie.php" method="post">
                    <?php
                    include 'connection.php';
                    $id =  $_GET['Register_ID'];
                    $sqlquery = "select * from `register` where `Register_ID` = $id";
                    $result = mysqli_query($connection,$sqlquery);
                    $row = mysqli_fetch_assoc($result);
                    ?>
                    <div class="form-group mt-3">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="hidden" name="Register_ID" value="<?php echo $row['Register_ID']?>"  >
                        <input type="text" name="editname" value="<?php echo $row['Username']?>" class="form-control" id="exampleInputEmail1"placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Emails</label>
                        <input type="email" name="editemail" value="<?php echo $row['Email']?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="phone" name="editphone" value="<?php echo $row['phone']?>" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Role</label>
                        <input type="text" name="editrole" value="<?php echo $row['Role']?>" class="form-control" id="exampleInputPassword1" placeholder="Admin/User">
                    </div>
                    <button type="submit" name="btnupdate" class="btn btn-success mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>