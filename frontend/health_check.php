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

      <!-- bootstrap link -->
      <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

      <!-- font awesome link -->
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

    /* mahajan md */
    .link a{
        color: white;
        text-decoration: none;
        
    }
    .link:hover{
        background-color: #FE1D14;
        color: white;
    }
    .mdlink{
        border: 2px solid red;
    }

    /* health_check css */
    .main-head {
        background-color: #105FA4;
    }
    .main_head_in1
    {
        background-color:#FE1D14;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }
    .main_head_in{
        border-left: 4px solid #FE1D14 ;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }
    .main_head_icon{
        background-color: #EEEEEE;
    }
    .main_head_icon i{
        color: #FE1D14;
    }
    /* orthopadic surgery */
    .orthopadic_icon span {
        color: #105fa4;
        font-weight: 600;
    }

    .orthopadic_icon i {
        color: red;
        border: 1px solid red;
        padding: 3px;
        border-radius: 50%;
        font-size: 10px;
        font-weight: bold;
    }
    .orthopadic_icon p{
        color: #105FA4;
        font-weight: 600;
    }

</style>
<body>
    <?php
    ?>
        <!-- health_check start -->
        <!-- crousel and content  -->
        <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
            <div class="row">
                <div class="col-8 crouse " style="padding: 80px;">
                    <div class="para ms-5">
                        <h2 class="text-white">HEALTH CHECK</h2>
                        <p class="text-white"><i class="zmdi zmdi-home"></i> / Health Check</p>
                    </div>
                
                </div>
            </div>
        </div>
        <!-- crousel and content end -->
    
    
        <!-- mahajan md  -->
        <div class="mahajan_md container">
            <div class="row pt-5 mt-4 mb-5 pb-4">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-12 main-head">
                            <div class="row">
                                <div class="col-2 py-0 main_head_in">
                                    <p class="mt-2">BASIC-I</p>
                                </div>
                                <div class="offset-8 col-2 main_head_in1">
                                    <p class="mt-2"><i class="fa fa-rupee"></i> 1200</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-12 pt-3 main_head_icon rounded">
                            <div class="row">
                                <div class="col-md-6 orthopadic_icon">
    
                                    <p><i class="zmdi zmdi-arrow-right"></i> CBC</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> BLOOD GROUP</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> URINE R/M</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> CREATININE</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> SGPT</p>
    
                                </div>
                                <div class="col-md-6 orthopadic_icon">
                                   
                                        <p><i class="zmdi zmdi-arrow-right"></i> CHOLESTEROL</p>
                                        <p><i class="zmdi zmdi-arrow-right"></i> ECG</p>
                                        <p><i class="zmdi zmdi-arrow-right"></i> CHEST X-RAY</p>
                                        <p><i class="zmdi zmdi-arrow-right"></i> PHYSICIAN CONSULTATION</p>
                              
                                    
                                </div>
                            </div>
                           
                        </div>
    
    
                    </div>
                    
          <!-- Second price report -->
                    <div class="row mt-4">
                        <div class="col-12 main-head">
                            <div class="row">
                                <div class="col-2 py-0 main_head_in">
                                    <p class="mt-2">BASIC-II</p>
                                </div>
                                <div class="offset-8 col-2 main_head_in1">
                                    <p class="mt-2"><i class="fa fa-rupee"></i> 4000</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-12 pt-3 main_head_icon rounded">
                            <div class="row ">
                                <div class="col-md-4 orthopadic_icon">
    
                                    <p><i class="zmdi zmdi-arrow-right"></i> CBC/ESR</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> BLOOD GROUP</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> URINE R/M</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> STOOL R/M</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> FBS OR RBS</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> PPBS</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> BLOOD UREA</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> S.CREATININE</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> SGPT</p>
                                    
    
                                </div>
                                <div class="col-md-4 orthopadic_icon">
                                   
                                        <p><i class="zmdi zmdi-arrow-right"></i> SGOT</p>
                                        <p><i class="zmdi zmdi-arrow-right"></i>LIPID PROFILE</p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> CHOLESTEROL</p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> TRIGLYCERIDES</p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> HDL
                                        </p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> LDL</p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> VLDL</p>
                                        <p class="ms-5"><i class="zmdi zmdi-arrow-right"></i> C/H.L/H</p>
                              
                                    
                                </div>
                                <div class="col-md-4 orthopadic_icon">
    
                                    <p><i class="zmdi zmdi-arrow-right"></i> ECG</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> ECHO</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> TSH
                                    </p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> CHEST X-RAY</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> SONOGRAPHY    </p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> PHYSICIAN CONSULTATION</p>
                                   
                                    
    
                                </div>
                            </div>
                           
                        </div>
    
    
                    </div>
       
                <!-- Second report price end -->
    
                <!-- thired price report  -->
                <div class="row mt-4">
                    <div class="col-12 main-head">
                        <div class="row">
                            <div class="col-2 py-0 main_head_in">
                                <p class="mt-2">CARDIAC</p>
                            </div>
                            <div class="offset-8 col-2 main_head_in1">
                                <p class="mt-2"><i class="fa fa-rupee"></i> 3200</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 pt-3 main_head_icon rounded">
                        <div class="row">
                            <div class="col-md-6 orthopadic_icon">
    
                                <p><i class="zmdi zmdi-arrow-right"></i> CBC/ESR</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> BLOOD GROUP</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> URINE R/M</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> FBS OR RBS</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> CREATININE</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> SGPT</p>
    
                            </div>
                            <div class="col-md-6 orthopadic_icon">
                               
                                    <p><i class="zmdi zmdi-arrow-right"></i> LIPID PROFILE</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> ECG</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> ECHO</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> TMT</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> CHEST X-RAY</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> PHYSICIAN CONSULTATION</p>
                                 
                          
                                
                            </div>
                        </div>
                       
                    </div>
    
    
                </div>
                
                <!-- thired price report end -->
    
                <!-- fourth price report -->
                <div class="row mt-4">
                    <div class="col-12 main-head">
                        <div class="row">
                            <div class="col-3 py-0 main_head_in">
                                <p class="mt-2">WELL WOMAN</p>
                            </div>
                            <div class="offset-7 col-2 main_head_in1">
                                <p class="mt-2"><i class="fa fa-rupee"></i> 3200</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-12 pt-3 main_head_icon rounded">
                        <div class="row">
                            <div class="col-md-6 orthopadic_icon">
    
                                <p><i class="zmdi zmdi-arrow-right"></i> CBC/ESR</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> BLOOD GROUP</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> URINE R/M</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> FBS OR RBS</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> CALCIUM</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> CREATININE</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> SGPT</p>
                                <p><i class="zmdi zmdi-arrow-right"></i> CHOLESTEROL</p>
    
                            </div>
                            <div class="col-md-6 orthopadic_icon">
                               
                                    <p><i class="zmdi zmdi-arrow-right"></i> ECG
                                    </p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> THYROID HORMONE-TEST(TSH)</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> PAP SMEAR</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> CHEST X-RAY</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> SONOGRAPHY</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> MAMMOGRAPHY</p>
                                    <p><i class="zmdi zmdi-arrow-right"></i> GYNAEC CONSULTATION</p>
                                 
                          
                                
                            </div>
                        </div>
                       
                    </div>
    
    
                </div>
                
                <!-- fourth price report end -->
    
    
    
                </div>
    
          
             
                 <div class=" col-md-4 ">
                    <img src="images/health-check.jpg" class="w-100" alt="mahajan_md " height="350">
                 </div>
            </div>
            </div>
    
    
        </div>
        <!-- mahajan md end -->
    
            <!-- health_check end -->

            <!-- footer code -->
            <?php
                include 'front_footer.php';
            ?>
</body>
</html>