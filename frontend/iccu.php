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
</style>

<body>

    <!-- orthopadic here start -->
    <!-- crousel and content  -->
    <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">ICCU</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / FACILITES / Iccu
                    </p>
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
                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i> 16 Bedded Well Equipped ICCU with Central Station.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Bed side multi para monitors with invasive pressure
                            monitoring, Infusion pumps, pacemakers.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> ICCU is managed by highly trained doctors.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Defibrillators, Ultrasonic Nebulisers, Bed side oxygen,
                        </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Vaccum, Air Lines.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> 4 Bedded Separate Post Operative Cardiac CCU.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> All Beds equipped with Multi Para Monitors with</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> ECG</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> SPO2</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> NIBP</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> RESP</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> Invagive BP</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> Temperature</p>
                        <p class="ms-3"><i class="zmdi zmdi-arrow-right"></i> 2nd Invasive Line</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> 10 State of art ventilators.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Intra Aortic Balloon Pump.</p>

                    </div>
                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i> Bedside Digital X- Rays.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i>
                            Defibrillator (BPL)</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Ultrasonic <b class="text-dark">nebulizer.</b></p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Bedside Oxygen, Vacuum Line.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Capnography Monitor Available.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Muscle Pulsator To Prevent DVT.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Facility For Bedside <b class="text-dark"></b>Dialysis.
                        </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Special Air Beds .</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Availability of Pacemaker.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Infusion Pumps----Syringe Pumps, Volumetric Pumps.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Latest Crasn Carts.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <b class="text-dark">BIPAP</b> ventilators Available.
                        </p>
                        <p><i class="zmdi zmdi-arrow-right"></i>
                            2 Beds to 1 Nurse Ratio.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> ICCU Managed Round the <b class="text-dark">Clock by
                                Qualified Intensivists.</b></p>
                        <p><i class="zmdi zmdi-arrow-right"></i>
                            Diet Planned By Qualified Dietician.</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Multiple Parameter central Station.</p>
                    </div>
                    <br>

                </div>






            </div>
            <div class=" col-md-4 ">
                <img src="images/iccu.jpg" class="w-100" alt="mahajan_md " height="350">
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