<?php
include "adminheader.php"
?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'Connection.php';
                        $sqlquery = "SELECT * FROM `Register`";
                        $result = mysqli_query($connection, $sqlquery);
                        while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr>
                            <td>{$row['Register_ID']}</td>
                            <td>{$row['Username']}</td>
                            <td>{$row['Email']}</td>
                            <td>{$row['Password']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['Role']}</td>
                            <td><a href='edit.php?Register_ID={$row['Register_ID']}' class='badge bg-success'>Edit</a>
                            <a href='cardquerrie.php?deleteid={$row['Register_ID']}' class='badge bg-danger'>Delete</a>
                            </td>
                        </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (isset($_GET['msgdlt'])) { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong> Congratulation!</strong> <?php echo $_GET['msgdlt'] ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    
                </main>
                <?php include "adminfooter.php" ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
