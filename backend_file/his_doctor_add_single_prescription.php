<?php

include 'his_admin_header.php';



?>
 <?php
                        if(isset($_POST['add_prescription']))
                        {
                            include 'his_admin_config.php';

                           
                            $pres_pat_name=mysqli_real_escape_string($conn,$_POST['pres_pat_name']);
                            $pres_pat_age=mysqli_real_escape_string($conn,$_POST['pres_pat_age']);
                            $pres_pat_number=mysqli_real_escape_string($conn,$_POST['pres_pat_number']);
                            $pres_number=mysqli_real_escape_string($conn,$_POST['pres_number']);
                            $pres_pat_addr=mysqli_real_escape_string($conn,$_POST['pres_pat_addr']);
                            $pres_pat_type=mysqli_real_escape_string($conn,$_POST['pres_pat_type']);
                            $pres_pat_ailment=mysqli_real_escape_string($conn,$_POST['pres_pat_ailment']);
                            $pres_ins=mysqli_real_escape_string($conn,$_POST['pres_ins']);
                            

                           

                            $sql="INSERT INTO hms_prescription (pres_pat_name, pres_pat_age, pres_pat_number, pres_number, pres_pat_addr, pres_pat_type, pres_pat_ailment, pres_ins ) VALUES('$pres_pat_name', '$pres_pat_age', '$pres_pat_number', '$pres_number', '$pres_pat_addr', '$pres_pat_type',  '$pres_pat_ailment', '$pres_ins')";
                            $result=mysqli_query($conn,$sql);

                            if($result)
                            {
                                ?>
                                  <script>
                                      window.location.replace('his_doctor_view_patients.php')
                                  </script>
                                <?php
                            }
                            else
                            {
                                die("Error:". mysqli_error($conn));
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
 
</style>
<body>

 <div class="content mt-5 pt-5">
    <div class="container-fluid mt-5">
            <div class="row head_title ">
                    <div class="col-md-4">
                        <h5>Add Patient Prescription</h5>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                            <li class="breadcrumb-item active">Add Prescription</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">
                    <?php
                       include 'his_admin_config.php';

                       $pat_number=$_GET['number'];
                       $sql1="SELECT * FROM hms_patient WHERE pat_number='$pat_number'";
                       $result1=mysqli_query($conn, $sql1) or die("Error:".mysqli_error($conn));

                       if(mysqli_num_rows($result1) > 0)
                       {
                           while($row=mysqli_fetch_assoc($result1))
                           {

                        
                    ?>

                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                <input type="text" required="required"  name="pres_pat_name" readOnly value="<?=$row['pat_fname'];?> <?=$row['pat_lname'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Pharmaceuticals`s Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Patient Age</label>
                                <input required="required" type="text" readOnly value="<?=$row['pat_dob'];?> " name="pres_pat_age" class="form-control"
                                    id="inputPassword4" placeholder="Pharmaceuticals`s vendor">
                            </div>
                         
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                <input type="text" required="required" name="pres_pat_number" readOnly value="<?=$row['pat_number'];?> " class="form-control"
                                    id="inputEmail4" placeholder="Pharmaceuticals`s Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Patient Address</label>
                                <input required="required" type="text" name="pres_pat_addr" readOnly value="<?=$row['pat_addr'];?> " class="form-control"
                                    id="inputPassword4" placeholder="Pharmaceuticals`s vendor">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Patient Type</label>
                                <input required="required" type="text" name="pres_pat_type" readOnly value="<?=$row['pat_type'];?> " class="form-control"
                                    id="inputPassword4" placeholder="Pharmaceuticals`s vendor">
                            </div>
                            
                        </div>

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-12">
                            <label for="inputPassword4" class="col-form-label">Patient ailment</label>
                                <input required="required" type="text" name="pres_pat_ailment"  value="<?=$row['pat_ailment'];?> " class="form-control"
                                    id="inputPassword4" placeholder="Pharmaceuticals`s vendor">
                            </div>
                            
                        </div>

                        
                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4" class="col-form-label w-100">Prescription</label>
                                <textarea name="pres_ins" id="" class="w-100"  required="required" placeholder=" Prescription`s Decription"></textarea>
                            </div>
                            
                        </div>

                        <div class="form-group col-md-2" style="display:none">
                            <?php
                                $length = 5;
                                $prescription_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">Prescription Number</label>
                                <input type="text" name="pres_number" value="<?php echo  $prescription_number;?>"
                                    class="form-control" id="inputZip">
                         </div>


                        <button type="submit" name="add_prescription" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Patient Prescription</button>




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