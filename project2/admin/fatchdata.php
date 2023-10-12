<?php
include 'Connection.php';
if (isset($_POST['value'])) {
    $input =  $_POST['value'];
    $searchQuery = "select * from  where Title Like '%$input%'";
    $result = mysqli_query($connection, $searchQuery);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" height="200" src="Image/<?php echo $row['Image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['Title'] ?></h5>
                        <p class="card-text"><?php echo $row['Description'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
<?php  }
    }
} ?>