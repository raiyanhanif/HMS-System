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
    .mahajan_md p{
        /* padding:5px; */
        font-size:15px;
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
.orthopadic_icon span{
    color: #105fa4;
    font-weight: 600;
}
.orthopadic_icon i{
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
                        <h2 class="text-white">ORTHOPADIC SURGERY</h2>
                        <p class="text-white"><i class="zmdi zmdi-home"></i> / MEDIAL SERVICES / Orthopadic Surgery</p>
                    </div>
                
                </div>
            </div>
        </div>
    <!-- crousel and content end -->
      <!-- mahajan md  -->
      <div class="mahajan_md container">
        <div class="row pt-5 mt-4 mb-5 pb-4">
            <div class="col-md-8">
                <p>  Our Orthopedic surgeons use both surgical and non-surgical means to treat musculoskeletal trauma, sports injuries, degenerative diseases, infections, tumors, and congenital conditions.</p>

                <p>We provide overall Orthopaedic surgery facilities and work dejectedly that the patient is recovered soon. Our doctors are committed to the use of advance technology related to the care of musculoskeletal system.</p>

                <p>Our department of Orthopaedic surgery continuously plans to expand our clinical programs to help our patients get more advanced care.</p>

                <b>Our Orthopaedic Sub specialty services include :</b>

                <div class="row mt-3">
                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Adult Reconstruction and Joint replacement.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Sports Medicine.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Spine Surgery.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Diagnostic and Therapeutic Arthroscope.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Surgery of the Hand and Wrist.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Surgery of the Shoulder and Elbow.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>of the Foot and Ankle.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Musculoskeletal Tumor Surgery.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Orthopaedic Trauma Surgery.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span>Pediatric Orthopaedics.</span> </p>
                    </div>

                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Trauma Cases.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Physical medicine and Rehabilitation.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Class 100 theatre available for joint replacement.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Back up team intevsivist availabe for trauma patient after surgery.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Details of patient available by e-mail on request.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Facilities for ilizarov type of operation.</span> </p>
                        <p><i class="zmdi zmdi-arrow-right"></i> <span> Joint Replacement Surgery (Knee, Hip, Shoulder)</span> </p>
                       
                    </div>

                </div>
            </div>
            <div class=" col-md-4 ">
                    <img src="images/orthopaedic-surgery.jpg" class="w-100" alt="mahajan_md " height="350">
                    <?php
                        include 'link.php';
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