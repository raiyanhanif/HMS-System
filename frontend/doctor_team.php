<?php
  include 'front_header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- bootsrtap link -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

</head>
<style>
     /* md message style here */
 .crouse {
        background-color:#105FA4;
        clip-path: polygon(0% 0%, 100% 0, 100% 0, 75% 100%, 0% 100%);
    }
    .mahajan_md img{
        clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
        border: 1px solid #b61503;
        padding: 10px;
    }
    /* doctor team  */
    .doctor_team .type{
        background-color: #105FA4;
        color: white;
    }
    .doctor_team .description{
        background-color: #eaf0ec;
    }
    .description p{
        color: gray;
    }
    .description p span{
        color:#FE1D14 ;
    }
    .doctor_btn a{
        text-decoration:none;
        color:black;
    }


</style>
<body>
    <!-- doctor_team_start_here -->
         <!-- crousel and content  -->
         <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
            <div class="row">
                <div class="col-8 crouse " style="padding: 80px;">
                    <div class="para ms-5">
                        <h2 class="text-white">DOCTOR'S TEAM</h2>
                        <p class="text-white"><i class="zmdi zmdi-home"></i> /  Doctor's Team</p>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- crousel and content end -->
 
    
        <!-- mahajan md  -->
        <div class="container">
            <div class="row pt-5 mt-4 mb-5 pb-4">
                <div class="col-md-12 doctor_team">  
                    <div class="container">
                    <?php
                    include 'Backend/his_admin_config.php';

                    $sql=" SELECT * FROM hms_doctors order by doc_id";


                    $result=mysqli_query($conn,$sql) or die("unsucessfully...!");

                    if(mysqli_num_rows($result) > 0)
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                
                     ?>
                        <div class="row">
                            <div class="col-12 type">
                                <h4> <?=$row['doc_department'];?> </h4>
                            </div>
                            <div class="col-6 mt-3 p-2 rounded description">
                                <div class="">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="images/doctor_image.png"  alt="doctor_image" width="130" height="100">
                                        </div>
                                        <div class="col-6 mt-3 ms-5 doctor_btn">
                                            <h5><a href="doctor_team_profile.php?number=<?=$row['doc_number'];?>">Dr.<?=$row['doc_fname'];?> <?=$row['doc_lname'];?></a></h5>
                                            <p> <?=$row['doc_department'];?><br>
                                                <span><?=$row['doc_department'];?> ( <?=$row['doc_specilization'];?> )</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        }
                    }
                    ?>
                     
                        
                       
                    </div>
                </div>
                 
            </div>
            </div>
    
    
        </div>
   
        <!-- mahajan md end -->
            <!-- doctor_team_end here -->

    <!-- footer here -->
    <?php
        include 'front_footer.php';
    ?>
</body>
</html>


