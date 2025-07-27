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
        padding:5px;
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

</style>
<body>
    <!-- md message here  -->
         <!-- crousel and content  -->
         <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">MD'S MESSAGE</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / Mahajan @ Glance / MD's Message</p>
                </div>
            
            </div>
        </div>
    </div>
    <!-- crousel and content end -->

      <!-- mahajan md  -->
      <div class="mahajan_md container">
        <div class="row pt-5 mt-4 mb-5 pb-4">
            <div class="col-md-8">
                <p>It is my pleasure to welcome you to the Mahajan Super Specialty Hospital.</p>
                <p>This hospital was born out of the fulfillment of my mother's wish to give back to society something of enduring value.</p>
                <p>While building this institution we have been guided by one primary consideration; that there should be no compromise in the quality of care that we deliver, and today our hospital is amongst the best having the latest of equipments and the best of doctors.</p>
                <p>We are a young hospital and therefore a very modern one.</p>
                <p>Our services have already gained international recognition and I am proud to say that we have treated patients from almost everywhere. In the future, I see our hospital becoming a global health-care provider offering an international standard of health care at affordable prices.</p>
                <p>In addition to the continuous advances in technology, our focus on continuous improvement on the quality front is of paramount importance.</p>
            </div>
            <div class=" col-md-4 ">
                    <img src="images/mahajan_md.jpg" class="w-100" alt="mahajan_md " height="350">
                    <div class="row mt-3 mdlink " style="background-image: url('images/footerbg.jpg');">
                        <div class="col-12" style="background-color: #FE1D14; color: white;">
                            <h4>MAHAJAN GLANCE</h4>
                        </div>
                        <hr>
                        <div class="col-12 link">
                            <p><a href="md-message.html">MD's Message</a></p>
                        </div>
                        <hr>
                        <div class="co-12 link">
                            <p><a href="aboutus.html">About Us</a></p>
                        </div>
                        <hr>
                        <div class="col-12 link">
                            <p><a href="department.html">Department</a></p>
                        </div>
                    </div>
            </div>
        </div>


    </div>
    <!-- mahajan md end -->

<!--md-message end here  -->

        <!-- footer start -->
        <?php

            include 'front_footer.php';

        ?>

</body>
</html>