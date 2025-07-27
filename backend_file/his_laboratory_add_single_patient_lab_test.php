<?php


 include 'his_admin_header.php';
 include 'his_admin_config.php';
 if(isset($_POST['add_labtest']))
 {
    $lab_pat_fname=mysqli_real_escape_string($conn,$_POST['lab_pat_name']);
    $lab_pat_ailment=mysqli_real_escape_string($conn,$_POST['lab_pat_ailment']);
    $lab_pat_number=mysqli_real_escape_string($conn,$_POST['lab_pat_number']);
    $lab_number=mysqli_real_escape_string($conn,$_POST['lab_number']);
    $lab_pat_test=mysqli_real_escape_string($conn,$_POST['lab_pat_test']);
 

    $sql="INSERT INTO hms_labtest(lab_pat_name, lab_pat_ailment, lab_pat_number, lab_number, lab_pat_test) VALUES('$lab_pat_fname', '$lab_pat_ailment', '$lab_pat_number', '$lab_number', '$lab_pat_test')";
    $result=mysqli_query($conn,$sql);

    if($result)
    {
        ?>

        <script>
            alert('This Patient Lab Record Is Successfully Enterd');
            window.location.replcae('his_admin_add_patient_lab_test.php');
        </script>
        <?php
    }

    else
    {
        die("Error :".mysqli_error($conn));
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
                        <h4>Add Laboratory Test</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_add_patient_lab_test.php">Laboratory</a></li>
                            <li class="breadcrumb-item active">Add Laboratory</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">
                <?php  
                  include 'his_admin_config.php';
                    $pat_number=$_GET['number'];
                  $sql="SELECT * FROM hms_patient WHERE pat_number='$pat_number'";
                  $result=mysqli_query($conn, $sql) or die("Unsuccessfully....!");

                  if(mysqli_num_rows($result) > 0)
                  {
                      while($row=mysqli_fetch_assoc($result))
                      {

                   
                ?>

                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Patient Name</label>
                                <input type="text" required="required" name="lab_pat_name" readonly value="<?=$row['pat_fname'];?> <?=$row['pat_lname'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Patient's First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Ailment</label>
                                <input required="required" type="text" name="lab_pat_ailment" readonly value="<?=$row['pat_ailment'];?>" class="form-control"
                                    id="inputPassword4" placeholder="Patient`s Last Name">
                            </div>
                        
                        </div>

                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-12">
                                <label for="inputEmail4" class="col-form-label">Patient Number</label>
                                <input type="text" required="required" name="lab_pat_number" readonly value="<?=$row['pat_number'];?>" class="form-control"
                                    id="inputEmail4" placeholder="Patient's First Name">
                            </div>
                        </div>

                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-12">
                                
                                <label for="inputPassword4" class="col-form-label w-100">Lab Test Description</label>
                                <textarea name="lab_pat_test" id="" class="w-100"  required="required" placeholder=" Lab Decription"></textarea>
                    
                            </div>
                        </div>

                        
                        


                        


                        <div class="form-group ps-3 pe-3 pb-3">
                            
                            <div class="form-group col-md-2" style="display:none">
                            <?php
                                $length = 6;
                                $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">lab Number</label>
                                <input type="text" name="lab_number" value="<?php echo $patient_number;?>"
                                    class="form-control" id="inputZip">
                            </div>
                        </div>


                        <button type="submit" name="add_labtest" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add lab Test</button>




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