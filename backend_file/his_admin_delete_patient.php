<?php

include 'his_admin_config.php';


$pat_id=$_GET['id'];

$sql="DELETE FROM hms_patient where pat_id=$pat_id";

$result=mysqli_query($conn,$sql);

if($result)
{
    ?>
      <script>
          window.location.replace("his_admin_view_patients.php");
      </script>
    <?php
}
else
{
    die("Error :" .mysqli_error($conn));
}



?>