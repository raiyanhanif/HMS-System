<?php

include 'his_admin_header.php';


if(isset($_POST['add_pat_tran']))
{
     include 'his_admin_config.php';
     $t_pat_name = mysqli_real_escape_string($conn,$_POST['t_pat_name']);
     
     $t_pat_number= mysqli_real_escape_string($conn,$_POST['t_pat_number']);
     $t_date= mysqli_real_escape_string($conn,$_POST['t_date']);
     $t_hospital = mysqli_real_escape_string($conn,$_POST['t_hospital']);



     $sql="INSERT INTO hms_patient_transfer (t_pat_name, t_pat_number, t_date, t_hospital) values('$t_pat_name','$t_pat_number','$t_date','$t_hospital')";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
         ?>
          <script>
              window.location.replace('his_admin_view_single_patient_transfer.php');
          </script>
         <?php
     }
     else
     {
         die("Error:".mysqli_query($conn));
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Menagement System</title>
    <!-- ====>> bootstrap link <<========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- =======>> css link of header <<======= -->
    <link rel="stylesheet" href="assets/css/header.css">


    <!-- css of admin_dashboard -->
    <link rel="stylesheet" href="assets/css/his_admin_dashboard.css">

    <!-- font awesome icon -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

</head>
<style>
 .table span a {
    text-decoration: none;
    color: white;
  }

  .table table th,
  td {
    border: 1px solid gray;
    padding: 5px;
    text-align: center;
  }
</style>
<body>


 <div class="content mt-5 pt-5">
     <?php
      include 'his_admin_config.php';
      $pat_number=$_GET['number'];

      $sql="SELECT * from hms_patient where pat_number='$pat_number'";
      $result=mysqli_query($conn,$sql) or die("Unsuccessfully.....!");

      if(mysqli_num_rows($result) > 0)
      {
          while($row=mysqli_fetch_assoc($result))
          {

       
     ?>
    <div class="container-fluid mt-5">
            <div class="row head_title ">
                    <div class="col-md-4">
                        <h4>Transfer Patient To <b><?=$row['pat_fname'];?></b> Refferal Facility</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_patient_transfer.php">Patient</a></li>
                            <li class="breadcrumb-item active">Add Patient_Transfer</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                <input type="text" required="required" name="t_pat_name" value="<?=$row['pat_fname'];?> <?=$row['pat_lname'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Employee's First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                <input type="text" required="required" name="t_pat_number" value="<?=$row['pat_number'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Employee's First Name">
                            </div>
                            
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Refferal Hospital</label>
                                <input type="text" required="required" name="t_hospital" class="form-control"
                                    id="inputEmail4" placeholder=" Refferal Hospital Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Transfer Date</label>
                                <input type="date" required="required" name="t_date" class="form-control"
                                    id="inputEmail4" placeholder="Employee's First Name">
                            </div>

                           
                        </div>


                        


                        <button type="submit" name="add_pat_tran" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Patient Transfer</button>




                    </form> <!-- form end here .  -->
            <?php
          }
        }
        ?>

                   
                </div>
            </div>
            <!-- end form -->
    </div>
 </div>




</body>
</html>