<?php

include'admin/connection.php';
$sql="SELECT DISTINCT(Color) FROM products WHERE pro_status = '1' ORDER BY Color DESC";
$result=mysqli_query($connection,$sql);
if(mysqli_num_rows($result)>0){

    
while($row=mysqli_fetch_assoc($result)){
?> <div style="margin-bottom: 10px; margin-left: 10px;" class="list-group fs-2 bg-light  text-uppercase checkbox"id="">
<label><input type="checkbox" class="common_selector color" id="color" 
value="<?php echo $row['Color']; ?>"  > 
<?php echo $row['Color']; ?></label>
</div>
<?php
       } 
      }


?>