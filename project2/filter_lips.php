<?php

//fetch_data.php

include('admin/connection.php');

if(isset($_POST["action"]))
{
	$query = "
		SELECT * FROM products WHERE Category='Lips'
	";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
      
		$query .= "
		 AND Price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}
	if(isset($_POST["Color"]))
	{
		$brand_filter = implode("','", $_POST["Color"]);
		$query .= "
		 AND Color IN('".$brand_filter."')
		";
        
	
	
    }

    if(isset($_POST["Size"]))
	{
		$brand_filter = implode("','", $_POST["Size"]);
		$query .= "
		 AND Size IN('".$brand_filter."')
		";
        
	
	
    }
    ?>

    <div class="container-fluid">
        <div class="row">

    
    <?php
   

	$result=mysqli_query($connection,$query) or die('error');
	if(mysqli_num_rows($result)>0){

		while($row=mysqli_fetch_assoc($result)){
			?>

<div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                         <div class="product-item bg-light mb-4">
                             <div class="product-img position-relative overflow-hidden">
                                 <img class="img-fluid w-100" style="height: 220px;"src='admin/<?php echo $row['Img'] ?>' alt="">
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
                                 <p class="text-uppercase text-decoration-none text-truncate" href=""><?php echo $row['Name'];?></p>
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
	}
    
    else {echo 'Not Found Data';}
}

?>