<?php

include 'his_admin_config.php';



$lab_id=$_GET['id'];

$sql="DELETE FROM hms_laboratory where lab_id=$lab_id";

$result=mysqli_query($conn,$sql);

if($result)
{
    ?>
      <script>
          window.location.replace("his_admin_view_laboratory.php");
      </script>
    <?php
}
else
{
    die("Error :" .mysqli_error($conn));
}



?>