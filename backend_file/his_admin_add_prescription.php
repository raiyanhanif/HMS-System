<?php

include 'his_admin_header.php';
if(!isset($_SESSION['ad_role']))
{
    ?>
     <script>
     
         window.location.replace("his_doctor_view_patients.php");
     </script>
    <?php
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
 .table span a{
    text-decoration:none;
    color:white;
 }
 .table table th,td{
     border:1px solid gray;
     padding:5px;
     text-align:center;
 }
</style>
<body>

 <div class="content mt-5 pt-5">
    <div class="container-fluid mt-5">
            <div class="row head_title ">
                    <div class="col-md-4">
                        <h4>Add Prescription</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Pharmacy</a></li>
                            <li class="breadcrumb-item active">Give Prescription</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                
                <div class="row mt-5">
                    <div class="search">
                        <input type="search" placeholder=" Search here...!" class="py-2">
                        <div class="btn btn-primary py-2">search</div>
                    </div>
                    <div class="table mt-4">
                        <table cellspacing="0" border="1" width="100%" cellpadding="0">
                            <tr>
                                <th>Id</th>
                                <th>Patient Name</th>
                                <th>Patinet Number</th>
                                <th>Patient Address</th>
                                <th>Patient Ailment</th>
                                <th>Patient Category</th>
                                <th>Patient Age</th>
                                <th>Action</th>
                            </tr>

                            <tbody>
                            <?php
                                include 'his_admin_config.php';

                                $sql="SELECT * FROM hms_patient ORDER By pat_id ASC";
                                $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");

                                if(mysqli_num_rows($result) > 0)
                                {
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                    

                                ?>
                                <tr>
                                    <td><?=$row['pat_id'];?></td>
                                    <td><?=$row['pat_fname'];?> <?=$row['pat_lname'];?></td>
                                    <td><?=$row['pat_number'];?></td>
                                    <td><?=$row['pat_addr'];?></td>
                                    <td><?=$row['pat_ailment'];?></td>
                                    <td><?=$row['pat_type'];?></td>
                                    <td><?=$row['pat_dob'];?></td>
                                    <td>
                                        <span class="btn btn-success"> <a href="his_admin_add_single_prescription.php?number=<?=$row['pat_number'];?>">Add precription</a></span>
                                        

                                    </td>
                                </tr>
                            <?php
                                    }
                                 }
                             ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          
            <!-- end form -->
    </div>
 </div>

</body>
</html>