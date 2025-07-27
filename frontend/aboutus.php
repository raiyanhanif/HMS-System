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
                        <h2 class="text-white">ABOUT US</h2>
                        <p class="text-white"><i class="zmdi zmdi-home"></i> / Mahajan @ Glance / About us</p>
                    </div>
                
                </div>
            </div>
        </div>
    <!-- crousel and content end -->
    <!-- mahajan md  -->
    <div class="mahajan_md container">
        <div class="row pt-5 mt-4 mb-5 pb-4">
            <div class="col-md-8">
                <p> Mahajan Hospital was founded in 1969 by Mr. Dinesh Bhansali, Mr. Mahesh Bhansali & family. Through our dedicated efforts towards noble career, we were able to expand our hospital from Mahajan Hospital to Mahajan Super Specialty Hospital, in 2001. Now our hospital is known for multi functionality. At Mahajan Hospital we have set new benchmarks in quality standards in healthcare delivery, by keeping with the tradition of delivering healthcare at par with the best in the world.</p>

                <p> Mahajan Hospitals, Palanpur provides noble healthcare that includes prevention, treatment, rehabilitation and health education for patients, their families and clients by touching their lives. We have a good team of expert doctors who dedicated their life towards society.</p>

                <p>  Earlier our hospital was situated at Gurukul, in Memnagar area but now with new infrastructure we have our multi speciality hospital at Vastrapur. With 65 bed capacity at Vastrapur, Ahmedabad and further with a view of a multi speciality hospital, Dr. Vinay Bhomiya has already acquired about more than 6,500 Sq. yard land and more land sourding the exhisting structure of Sanjivani Super Mahajan Hospital is in the process of accquring.</p>
            </div>
            <div class=" col-md-4 ">
                    <img src="images/mahajan_image.png" class="w-100" alt="mahajan_md " height="350">
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

<?php
  include 'front_footer.php';
?>
</body>
</html>