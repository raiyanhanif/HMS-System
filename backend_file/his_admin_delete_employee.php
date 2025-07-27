<?php

include 'his_admin_config.php';



$emp_id=$_GET['id'];

$sql="DELETE FROM hms_employee where emp_id=$emp_id";

$result=mysqli_query($conn,$sql);

if($result)
{
    ?>
      <script>
          window.location.replace("his_admin_view_employee.php");
      </script>
    <?php
}
else
{
    die("Error :" .mysqli_error($conn));
}



?>