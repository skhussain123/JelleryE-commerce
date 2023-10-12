<?php

   include'admin/connection.php';
   $sql="SELECT DISTINCT(Size) FROM products WHERE pro_status = '1' ORDER BY Size DESC";
   $result=mysqli_query($connection,$sql);
  if(mysqli_num_rows($result)>0){
                
                        
   while($row=mysqli_fetch_assoc($result)){
                    ?>
<div style="margin-bottom: 10px; margin-left: 10px;" class="list-group fs-2 bg-light  text-uppercase checkbox" id="">
  <label><input type="checkbox" class="common_selector size" id="color" value="<?php echo $row['Size']; ?>">
    <?php echo $row['Size']; ?>
  </label>
</div>
<?php
                           } 
                          }
                
                    
                    ?>