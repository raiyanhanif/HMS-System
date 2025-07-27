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
    
     h5{
        color: #105FA4;
        font-weight:bold;
    }

</style>

<body>

    <!-- orthopadic here start -->
    <!-- crousel and content  -->
    <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">COLOUR-DOPPLER-ECHOCARDIOGRAPHY</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / FACILITES / Colour-doppler-echocardiography
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
                <p><h5>Colour Doppler Echocardiography</h5></p>
               
                <p>Mahajan Super Speciality Hospital has Advanced and dedicated Colour Doppler machine
                </p>
              

               <p><h5> Treadmill Stress Test (TMT)</h5></p>

               <p> TMT is a special feature of our hospital by virtue of vast experience. Ours is the only hospital with TMT done by DM cardiologist and special attention to accuracy as well as patient safety.</p>

                <p><h5> Intensive Coronary Care Unit (I.C.C.U)</h5></p>
               

               
                <p>The ICCU at Mahajan Super Speciality Hospital is one of the best and latest equipped ICCU in Palanpur.</p>
               

                <p><h5> I. C. U. Ward</h5></p>

               <p>Our I.C.U. Ward consists of Channel Cardiographic Monitors attached, a Defibrillator Machine, A.B.G. Analyser and round the clock attendance of a Resident Doctor and a Staff Nurse and the rounds of the consultants to monitor the condition of the patients admitted in the ward.</p>
 
                
                <p><h5>N. I. C. U. Ward</h5></p>
                <p>  We have well-equipped N.I.C.U. Ward with latest equipments for Neonatal patients. We also have a provision of Radiant Warmer and Pulse-Oxymeter.</p>
                

              
                <p><h5> Ultra Sonography</h5></p>

                <p>  Ultrasound Sonography tests are done under the supervision of experienced and dedicated doctors.
</p>
               

              

      
                

            </div>
            <div class=" col-md-4 ">
                <img src="images/echocardiography.jpg" class="w-100" alt="mahajan_md " height="350">
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