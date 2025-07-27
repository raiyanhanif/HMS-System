<?php

include 'his_admin_config.php';
$doc_id=$_GET['id'];

$sql1="SELECT * FROM hms_doctors WHERE doc_id=$doc_id";
$result1=mysqli_query($conn,$sql1);

$row=mysqli_fetch_assoc($result1);

unlink('./upload/'.$row['doc_image']);

$sql="DELETE FROM hms_doctors Where doc_id=$doc_id";
$result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");


if($result)
{
    ?>
    <script>
        window.location.replace('his_admin_view_doctors.php');
    </script>
    <?php
}

else
{

    die("Error :".mysqli_error($conn));
}

?>