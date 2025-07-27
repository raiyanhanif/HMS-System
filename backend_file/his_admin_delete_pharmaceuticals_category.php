<?php


 include 'his_admin_config.php';


 $pharm_cat_id=$_GET['id'];

 $sql="DELETE FROM hms_pharmacy_category WHERE phar_cat_id=$pharm_cat_id";

 $result=mysqli_query($conn,$sql) or die("Error .".mysqli_query($conn));


 if($result)
 {
     ?>
     <script>
         window.location.replace("his_admin_view_pharmacy_category.php");
     </script>
     <?php
 }

?>