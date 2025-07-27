<?php
  include 'his_admin_config.php';

  $pat_number=$_GET['number'];
  

  $sql="DELETE FROM hms_vitals WHERE vit_pat_number='$pat_number'";
  $result=mysqli_query($conn,$sql) or die("unsuccessfully...!");

  if($result)
  {
      ?>
      <script>
          alert("This record Is Deleted Successfully In hidden ");
          window.location.replace('his_admin_add_patient_lab_vitals.php');
      </script>
      <?php
  }
?>