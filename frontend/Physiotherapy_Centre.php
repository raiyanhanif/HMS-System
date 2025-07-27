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
    

</style>

<body>

    <!-- orthopadic here start -->
    <!-- crousel and content  -->
    <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">PHYSIOTHERAPHY</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / FACILITES / Physiotherapy
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
                <p>Physiotherapy is a health profession concerned with optimizing mobility and function and helping the body heal itself. The physiotherapist does that through use of clinical reasoning to choose and apply appropriate treatment to achieve the desired goal.</p>

                <p>Sanjivani Super Speciality Physiotherapy center is well equipped with latest equipments, technology and skilled staff to provide effective treatment for all kind of injuries and pains in Ahmedabad. We offer affordable and timely services for orthopaedic injuries and other major injuries.</p>

                <p>At Sanjivani Physiotherapy center we perform a comprehensive evaluation to come to the conclusion for the assessment of the condition and then plan out the specific treatment. We try to locate to the root problem and help you recover in the most natural way without any side-effects.</p>

                <p>With our experienced and active team we can manage to provide Physiotherapy treatment for all types of sports injuries, from the initial acute stage immediately after injury until the athlete is ready to return to play.</p>

                <br>
                <h5 style="color: #105FA4;">FACILITES</h5>
                <div class="row mt-2">
                    <div class="col-md-6 orthopadic_icon ">

                        <p><i class="zmdi zmdi-arrow-right"></i> Active Physiotherapy</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Passive Physiotherapy</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Cardiac Physiotherapy</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Wax Bath</p>

                    </div>
                    <div class="col-md-6 orthopadic_icon ">

                        <p><i class="zmdi zmdi-arrow-right"></i> Ultrasonic Stimulation of nerve</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Feradic Stimulation of nerve</p>
                        <p><i class="zmdi zmdi-arrow-right"></i> Traction</p>
                        

                    </div>
                </div>

            </div>
            <div class=" col-md-4 ">
                <img src="images/physiotherapy-centre.jpg" class="w-100" alt="mahajan_md " height="350">
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