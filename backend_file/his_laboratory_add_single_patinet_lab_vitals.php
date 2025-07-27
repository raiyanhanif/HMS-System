<?php

include 'his_admin_header.php';
include 'his_admin_config.php';

$pat_num=$_GET['number'];

$sql="SELECT * FROM hms_patient Where pat_number='$pat_num' ";
$result=mysqli_query($conn,$sql) or die("Unsuccessfullyy.....!");

if(mysqli_num_rows($result) > 0)
{
    while($row=mysqli_fetch_assoc($result))
    {



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
 
</style>
<body>

 <div class="content mt-5 pt-5">
    <div class="container-fluid mt-5">
            <div class="row head_title ">
                    <div class="col-md-4">
                        <h4>Capture <?=$row['pat_fname'];?>   vitals</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Laboratory</a></li>
                            <li class="breadcrumb-item active">Capture vitals</li>
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
                                <input type="text" required="required" name="vit_pat_name"  value="<?=$row['pat_fname'];?> <?=$row['pat_lname'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Patient's Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Patient Ailment</label>
                                <input required="required" type="text" name="" value="<?=$row['pat_ailment'];?>" class="form-control"
                                    id="inputPassword4" placeholder="patient`s ailment">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                <input type="text" required="required" name="vit_pat_number" value="<?=$row['pat_number'];?>" class="form-control"
                                    id="inputEmail4" placeholder="patient number">
                            </div>

                            
                        </div>
<?php
    }
}
                    
 ?>

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-3">
                                <label for="inputAddress" class="col-form-label">Patient Body Temperature C</label>
                                <input required="required" type="text" class="form-control" name="vit_bodytemp"
                                    id="inputAddress" placeholder=".C">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress" class="col-form-label">Patient Heart Pulse/Beat BPM</label>
                                <input required="required" type="text" class="form-control" name="vit_heatpulse"
                                    id="inputAddress" placeholder="HeartBeats per minute">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputAddress" class="col-form-label">Patient Respiratory Rate bPM</label>
                                <input required="required" type="text" class="form-control" name="vit_resprate"
                                    id="inputAddress" placeholder="Breathes Per Minute">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="inputAddress" class="col-form-label">Patient Blood Presure mmHg</label>
                                <input required="required" type="text" class="form-control" name="vit_bloodpess"
                                    id="inputAddress" placeholder="mmHg">
                            </div>

                            
                        </div>

                        

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-12">
                                <label for="inputCity" class="col-form-label" >Prescription</label>
                                <input required="required" type="text" name="vit_prescription" class="form-control"
                                    id="inputCity">
                            </div>
                        </div>


                        <button type="submit" name="add_vitals" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Vitals</button>




                    </form> <!-- form end here .  -->
                    <?php

                     if(isset($_POST['add_vitals']))
                     {
                         include 'his_admin_config.php';
                         $vit_pat_name=mysqli_real_escape_string($conn,$_POST['vit_pat_name']);
                         $vit_pat_number=mysqli_real_escape_string($conn,$_POST['vit_pat_number']);
                         $vit_bodytemp=mysqli_real_escape_string($conn,$_POST['vit_bodytemp']);
                         $vit_heatpulse=mysqli_real_escape_string($conn,$_POST['vit_heatpulse']);
                         $vit_resprate=mysqli_real_escape_string($conn,$_POST['vit_resprate']);
                         $vit_bloodpess=mysqli_real_escape_string($conn,$_POST['vit_bloodpess']);
                         $vit_prescription=mysqli_real_escape_string($conn,$_POST['vit_prescription']);

                         $sql="INSERT INTO hms_vitals(vit_pat_name, vit_pat_number, vit_bodytemp, vit_heatpulse, vit_resprate, vit_bloodpess, vit_prescription) VALUES('$vit_pat_name','$vit_pat_number','$vit_bodytemp','$vit_heatpulse','$vit_resprate','$vit_bloodpess','$vit_prescription')";
                         $result=mysqli_query($conn,$sql) or die('unsuccessfully....!');

                         if($result)
                         {
                             ?>

                                <script>
                                               window.location.replcae('This Patient Lab Record Is Successfully Enterd');
                                </script>
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