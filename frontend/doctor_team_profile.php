<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
<!-- MATERIAL DESIGN ICONIC FONT -->
<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

</head>
<style>
    .nav{
        background-color: #F9FBFE;
        border-bottom: 1px solid gray ;
    }
    .icon i{
        color: rgb(77, 77, 197);
        font-weight: bold;
    }
    .doctor_profile_desc i{
        color: #4FB87C;
    }
    .doctor_profile{
        color: #999B99;
        border-bottom: 1px solid #999B99;
    }
    .doctor_profile_desc h3{
        color: black;
    }

</style>
<body>



    <div class="nav">
        <div class="container">
            <div class="row">
                <div class="col-1 pt-3 icon">
                    <i class="zmdi zmdi-arrow-left fs-2" onclick="window.history.go(-1); return true;"></i>
                </div>
                <div class="col-7 pt-3">
                    <span class="main-title fs-4">Mahajan Super Speciality Hospital Pvt. Ltd.</span>
                </div>
                <div class="col-2 pt-2 pb-1 text-end">
                    <img src="images/medical_images/moxie_logo.png" alt="moxie_image">
                </div>
            </div>
        </div>
    </div>

    <!-- doctor profile view here -->
    <div class="container doctor_profile">
        <div class="row">
            <?php
             include 'backend/his_admin_config.php';
             $doc_number=$_GET['number'];

             $sql="SELECT * FROM hms_doctors WHERE doc_number='$doc_number'";
             $result=mysqli_query($conn,$sql) or die("Unsucessfully.....!");

             if(mysqli_num_rows($result) > 0)
             {
                 while($row=mysqli_fetch_assoc($result))
                 {

             
            ?>
           

                    <div class="col-4 text-center">
                        <img src="images/doctor_image.png" alt="doctor_image" class="w-100">
                        <span> DR. <?=$row['doc_fname'];?> <?=$row['doc_lname'];?></span>
                        <p>Department : (<?=$row['doc_department'];?>)</p>
                        <p>Specilization : (<?=$row['doc_specilization'];?>)</p>
                        <p>Exprience : <?=$row['doc_expri'];?></p>
                        <p>Age : <?=$row['doc_age'];?></p>
                        <p><i class="zmdi zmdi-pin"></i><br>
                        <span><?=$row['doc_addr'];?></span></p>
                    </div>
                    <div class="col-6 mt-5 doctor_profile_desc">
                        <h3></h3>
                        <span>
                            <p>Language Known -</p>
                                <i class="zmdi zmdi-check"></i><span> hindi</span>  <i class="zmdi zmdi-check ms-5"></i><span > English</span>
                                <i class="zmdi zmdi-check ms-5"></i><span > Gujarati</span>
                        </span>
                    </div>

                    <?php
                 }

                }
                ?>
              
        </div>
    </div>
    <!-- doctor profile view end here -->
</body>
</html>