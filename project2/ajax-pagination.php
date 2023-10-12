<?php

  include 'admin/connection.php';
  $limit_per_page = 8;

  $page = "";
  if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
  }else{
    $page = 1;
  }

  $offset = ($page - 1) * $limit_per_page;
  ?><div class="container-fluid">
  <div class="row">
    <?php

  $sql = "SELECT * FROM products LIMIT {$offset},{$limit_per_page}";
  $result = mysqli_query($connection,$sql) or die("Query Unsuccessful.");
  $output= "";
  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                         <div class="product-item bg-light mb-4">
                           
                             <div class="product-img position-relative overflow-hidden">
                                 <img class="img-fluid w-100" style="height: 220px;" src='admin/<?php echo $row['Img'] ?>' alt="">
                                 <div class="product-action">
                                     <a class="btn btn-outline-dark btn-square" href=""><i
                                             class="fa fa-shopping-cart"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i
                                             class="fa fa-sync-alt"></i></a>
                                     <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                 </div>
                             </div>
                      
                             <div class="text-center py-4">
                                 <p class=" text-uppercase text-decoration-none text-truncate" href=""><?php echo $row['Name'];?></p>
                                 <div class="d-flex align-items-center justify-content-center mt-2">
                                     <h5>Rs : <?php echo $row['Price']?>.00</h5>
                                     <h6 class="text-muted ml-2"><del><?php echo $row['offprice'] ?></del></h6>
                                 </div>
                                 <div class="d-flex align-items-center justify-content-center mb-1">
                                     
                                     <div class="col-md-10 col-sm-5">
                                    <div class="row">

                                        <a class='btn btn-primary' href="products_details.php?pro_id=<?php echo $row['id'] ?>" style='width: 100%;'>product view</a>
                                       
                                    </div>
                                </div>
                                 </div>
                                
                                </div>
                         </div>
                     </div>
     
 <?php
    }
 ?></div>
</div>
<?php

    $sql_total = "SELECT * FROM products";
    $records = mysqli_query($connection,$sql_total) or die("Query Unsuccessful.");
    $total_record = mysqli_num_rows($records);
    $total_pages = ceil($total_record/$limit_per_page);
?>
<br>
<?php
    ?><div id="pagination" class="text-center" >
      <?php

    for($i=1; $i <= $total_pages; $i++){
      if($i == $page){
        $class_name = "btn-success btn border  border-info";
      }else{
        $class_name = "";
      }
      ?><a style="margin-left: 10px;"  class='<?php echo $class_name?>' id='<?php echo $i?>' href=''><?php echo $i?></a><?php
    }?>
     </div>
     
     <?php

    
  }else{
    echo "<h2>No Record Found.</h2>";
  }
?>
