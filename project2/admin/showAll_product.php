<?php
include "adminheader.php"
?>
<div id="layoutSidenav_content">
    <main class="content">
        <div class="container-fluid p-0">
            <br>
            <h1 class="h3 mb-3 text-center">Show All products</h1>
            <br>
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12">
                    <div class="card flex-fill">
                        <div class="card-header">

                            <a href="addproduct.php">
                                <h5 class="badge bg-primary text-black card-title mb-0">Add products</h5>
                            </a>
                        </div>
                        <table class="table table-bordered table-hover my-0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th class="">Tittle</th>
                                    <th>price</th>


                                    <th>category</th>
                                    <th class="">upload Time</th>
                                    <th>images</th>
                                    <th>Action</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include 'connection.php';


                                $sql = "SELECT * FROM `products`";
                                $result = mysqli_query($connection, $sql);
                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><?php echo $row['Name'] ?></td>
                                            <td><?php echo $row['Price'] ?></td>
                                            <td><?php echo $row['Category'] ?></td>
                                            <td><?php echo $row['upload_time'] ?></td>
                                            <td><img src="<?php echo $row['Img'] ?>" width="70px" height="40px" alt=""></td>

                                          <?php echo " <td><a href='editproducts.php?id={$row['id']} 'class='badge bg-success'>Edit</a></td>
                                            <td> <a href='editproductqueerie.php?deleteid={$row['id']}' class='badge bg-danger'>Delete</a>
                                            
                                            </td>" ?>
                                          
                                        </tr><?php
                                            }
                                        }



                                                ?><tr>
                                    <td class="text-black"></td>
                                    <td class="text-black"></td>
                                    <td class="text-black"></td>



                                </tr>


                            </tbody>
                        </table>




                    </div>
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