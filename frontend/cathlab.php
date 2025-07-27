<?php
        include 'front_header.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital management System</title>
    <!-- bootstrap link -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->

    <!-- font awesome link -->
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

</head>
<style>
    /* md message style here */
    .crouse {
        background-color: #105FA4;
        clip-path: polygon(0% 0%, 100% 0, 100% 0, 75% 100%, 0% 100%);
    }

    .mahajan_md img {
        clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
        border: 1px solid #b61503;
        padding: 10px;
    }

    /* mahajan md */
    .link a {
        color: white;
        text-decoration: none;

    }

    .mahajan_md p {
        /* padding:5px; */
        font-size: 15px;
    }

    .link:hover {
        background-color: #FE1D14;
        color: white;
    }

    .mdlink {
        border: 2px solid red;
    }

    /* health_check css */
    .main-head {
        background-color: #105FA4;
    }

    .main_head_in1 {
        background-color: #FE1D14;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    .main_head_in {
        border-left: 4px solid #FE1D14;
        color: white;
        font-size: 18px;
        font-weight: bold;
    }

    .main_head_icon {
        background-color: #EEEEEE;
    }

    .main_head_icon i {
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

    p b {
        color: #105FA4;
        font-size: 18px;
    }
    .orthopadic_icon span{
        font-weight: bold;
        color: black;

    }
    /* p span{
        font-weight: bold;
    } */
</style>

<body>

    <!-- orthopadic here start -->
    <!-- crousel and content  -->
    <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">CATH LAB</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / FACILITES / Cath Lab </p>
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
                   
                 <div class="col-12 orthopadic_icon">
                    <p><i class="zmdi zmdi-arrow-right"></i>  Latest Version of Cath Lab Facility for providing</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   Coronary Angiography</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>     Coronary Angioplasty</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   Peripheral Angiography</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>    Balloon Mitral Valvotomy</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   Temporary & Permanent ( Single & Dual Chamber )</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   Device Closure of ASD & VSD</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>    Electro Physiological Studies</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   Implantation of Automated Defibrillator</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>   
                        Peripheral Angioplasty</p>
                    <p><i class="zmdi zmdi-arrow-right"></i>     Procedures Done By <b class="text-dark">- Femoral - Radial - Route </b></p>
                    <p><i class="zmdi zmdi-arrow-right"></i>    Round the Clock Services of Cath lab
                    </p>
                    

                
                 </div>

                    
                </div>
                

            </div>
            <div class=" col-md-4 ">
                <img src="images/cath-lab.jpg" class="w-100" alt="mahajan_md " height="350">
                <?php  
                    include 'link1.php';

                ?>
            </div>
        </div>


    </div>
    <!-- mahajan md end -->

    <!--orthopadic end here  -->

    <!-- footer start -->
    <?php
        include 'front_footer.php';
    ?>

</body>

</html>