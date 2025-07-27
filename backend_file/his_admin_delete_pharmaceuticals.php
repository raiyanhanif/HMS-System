<?php


 include 'his_admin_config.php';


 $pharm_id=$_GET['id'];

 $sql="DELETE FROM hms_pharmacy WHERE phar_id=$pharm_id";

 $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");


 if($result)
 {
     ?>
     <script>
         window.location.replace("his_admin_view_pharmacy.php");
     </script>
     <?php
 }

?>