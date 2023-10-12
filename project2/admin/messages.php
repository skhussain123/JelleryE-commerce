

<?php include "adminheader.php" 


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
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'Connection.php';
                        $sqlquery = "SELECT * FROM `message`";
                        $result = mysqli_query($connection, $sqlquery);
                        while ($row = mysqli_fetch_assoc($result)) {
                         echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['con_name']}</td>
                            <td>{$row['con_email']}</td>
                            <td>{$row['con_subject']}</td>
                            <td>{$row['con_message']}</td>
                            <td>
                            <a href='deletemessage.php?deleteid={$row['id']}' class='badge bg-danger'>Delete</a>
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
