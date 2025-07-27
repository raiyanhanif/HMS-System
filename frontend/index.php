<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital Management System</title>
    <!-- Boostrap Link -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
        <!-- font awesome icon -->

    <link
      rel="stylesheet"
      href="path/to/font-awesome/css/font-awesome.min.css"
    />
    <!-- font awesome icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <!-- font aesome icon link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- index js link is below -->
    <script src="scripts/index.js"></script>
    <!-- for font awesome script -->

    <!-- css link -->
    <link rel="stylesheet" href="css/style.css">


    <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<!-- <link rel="stylesheet" href="css/style.scss"> -->
        


         <!-- font aesome icon link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap"
      rel="stylesheet"
    />

       <!-- font awesome link -->
        <!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
      <!-- font-awesome -->
      <link rel="stylesheet" href="font-awesome/fonts/fontawesome-webfont.ttf">

  </head>
<style>
  


  .heading p {
  color: #213a85;
  font-size: 17px;
  font-weight: bold;
  }
  .heading i {
  color: red;
  } /* Resetting default margin and padding */
  /* pure nav css here */
  body,
  ul {
  margin: 0;
  padding: 0;
  }
  
  nav {
  background-color: #02427a;
  }
  
  .menu {
  list-style: none;
  display: flex;
  }
  
  .menu li {
  position: relative;
  }
  
  .menu li a {
  display: block;
  padding: 10px 37px;
  text-decoration: none;
  color: #fff;
  font-size: 0.9rem;
  }
  
  .menu li:hover {
  background-color: #d01b08;
  border-radius: 2px;
  }
  
  .sub-menu {
  display: none;
  position: absolute;
  background-color: #d01b08;
  border-radius: 2px;
  min-width: 250px;
  z-index: 1;
  }
  
  .menu li:hover .sub-menu {
  display: block;
  }
  
  .sub-menu li a {
  color: #fff;
  padding: 8px 16px;
  display: block;
  text-decoration: none;
  }
  
  .sub-menu li:hover {
  background-color: #b61503;
  }
  
  .menu li {
  list-style: none;
  }
  
  .mainbtn:hover {
  background-color: red;
  border-color: red;
  color: white;
  font-weight: bold;
  }
  .mainbtn {
  border:2px solid white;
  width: 23%;
  font-weight: bold;
  color: white;
  text-align: center;
  
  }
  .mainbtn a{
  text-decoration: none;
  color: white;
  }
  
  /* crousel style is below */
  
  .carousel {
  width: 100%;
  /* max-width: 600px; Adjust width as needed */
  margin: 0 auto;
  overflow: hidden;
  position: relative;
  }
  
  .slide {
  display: none;
  /* width: 100%; */
  /* height: auto; */
  }
  
  .active {
  display: block;
  }
  
  /* sliderportion part is below */
  .slideportion p {
  font-size: 15px;
  }
  
  .slideportion h1 {
  font-size: 2.5rem;
  font-weight: bolder;
  color: #105fa4;
  }
  .slideportion h1 span {
  color: red;
  }
  
  .mainbtn1 {
  /* background-color: red; */
  border: 2px solid red;
  color: red;
  /* font-weight: bold; */
  }
  .bt a{
  text-decoration: none;
  }
  .mainbtn1:hover {
  background-color: red;
  border-color: red;
  color: white;
  /* font-weight: bold;  */
  }
  
  /* medical services css */
  .box h4 {
  color: white;
  }
  .box {
  width: 23%;
  /* margin: 5px; */
  margin: auto;
  background-color: #ffa517;
  }
  .box:hover {
  background-color: black;
  cursor: pointer;
  }
  .box a{
    text-decoration:none;
  }
  .box1 {
  width: 23%;
  /* margin: 5px; */
  color: white;
  margin: auto;
  background-color: #41b5ff;
  }
  .box1:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }
  .box1 a{
    text-decoration:none;
    color: white;
  }
  .box2 {
  width: 23%;
  /* margin: 5px; */
  margin: auto;
  color: white;
  background-color: #8f60fd;
  }
  .box2:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }

  .box2 a{
    text-decoration:none;
    color: white;
  }
  .box3 {
  width: 23%;
  /* margin: 5px; */
  margin: auto;
  color: white;
  background-color: #01b35d;
  }
  .box3:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }
  .box3 a{
    text-decoration:none;
    color: white;
  }

  .box4 {
  width: 23%;
  margin-left: 10px;
  /* margin: auto; */
  color: white;
  background-color: #ffa517;
  }
  .box4:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }
  .box4 a{
    text-decoration:none;
    color: white;
  }

  .box5 {
  width: 23%;
  margin-left: 25px;
  /* margin: auto; */
  color: white;
  background-color: #53aedb;
  }
  .box5:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }
  .box5 a{
    text-decoration:none;
    color: white;
  }

  .box6 {
  width: 23%;
  margin-left: 25px;
  color: white;
  /* margin: auto; */
  background-color: #8f60fd;
  }
  .box6:hover {
  background-color: black;
  cursor: pointer;
  color: white;
  }
  .box6 a{
    text-decoration:none;
    color: white;
  }
  
  /* doctor team css */
  
  .doctorcard {
  /* margin: 10px; */
  width: 24%;
  border-radius: 5px;
  margin: auto;
  box-shadow: 0px 12px 18px -6px rgba(0, 0, 0, 0.3);
  }
  .doctorcard a{
  text-decoration: none;
  color:#105FA4 ;
  }
  .doctorcard .info{
  background-color: #105FA4;
  color: white;
  }
  .doctorcard button{
  border: 1px solid #105FA4;
  }
  .doctorcard button:hover{
  background-color: #105FA4;
  
  }
  .doctorcard button a:hover{
  color: white;
  }
  
  /* WHAT PATIENTS SAY */
  .slideshow-container {
  position: relative;
  background: #f1f1f1f1;
  }
  
  /* Slides */
  .mySlides {
  display: none;
  padding: 19.5%;
  text-align: center;
  }
  
  /* Next & previous buttons */
  .prev,
  .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
  color: white;
  }
  
  /* The dot/bullet/indicator container */
  .dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
  }
  
  
  /* The dots/bullets/indicators */
  .dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  }
  
  /* Add a background color to the active dot/circle */
  .active,
  .dot:hover {
  background-color: #717171;
  }
  
  /* Add an italic font style to all quotes */
  q {
  font-style: italic;
  }
  
  /* Add a blue color to the author */
  .author {
  color: cornflowerblue;
  }
  
  .patient_box img {
  width: 270px;
  height: 150px;
  margin: 15px;
  border-radius: 10px;
  }
  .PATIENTS {
  background-color: #105fa4;
  }
  
  /* Success stories */
  
  .succes_stories img {
  border-radius: 50%;
  border: 2px solid gray;
  padding: 10px;
  }
  
  .succes_stories h3 {
  font-weight: bold;
  text-align: center;
  margin-top: 20px;
  }
  
  /* health_tag */
  .health_menu {
  background-color: #02427a;
  }
  .health_menu .active {
  background-color: red;
  clip-path: polygon(0 0, 96% 0, 100% 50%, 96% 100%, 0 100%, 0% 50%);
  }
  .health_menu a {
  text-decoration: none;
  color: white;
  }
  .health_menu :hover {
  background-color: red;
  color: white;
  }
  .list_health i {
  color: red;
  border: 1px solid red;
  padding: 3px;
  border-radius: 50%;
  font-size: 10px;
  font-weight: bold;
  }
  
  .list_health span {
  color: #105fa4;
  
  
  font-weight: 600;
  font-family: "Roboto", sans-serif;
  }
  .health_form1 .btn {
  background-color: #01b35d;
  color: white;
  }
  .health_form1 .btn a{
  text-decoration: none;
  color: white;
  }
  .health_form1 .btn:hover {
  background-color: #02427a;
  color: white;
  cursor: pointer;
  }
  .list_health p{
    padding: 5px;
  }
  
  
    /* footer css */
    /* footer css */
.footer_link h3{
    color: white;
    }
    .footer_link a{
    text-decoration: none;
    color: white;
    font-size: 15px;
  
    
    }
    .footer_link p{
      /* padding: 5px; */
    }
    .footer_icon i{
      padding: 5px;
    }
    .footer_icon p{
      font-size: 15px;
    }
    .scroll h3{
    color: white;
    }

    .footer_para p{
      padding:0px;
    }
    
    
    .div.scroll {
        margin: 4px, 4px;
        padding: 4px;
        background-color: green;
        width: 500px;
        height: 110px;
        overflow-x: hidden;
        overflow-y: auto;
        text-align: justify;
    }
    
  
  
   
.menu li a{
  font-size: 14px;
}
.heading p{
  font-size: 17px;
  font-weight: bold;
  font-family: sans-serif;
}
</style>

<body>
    <!-- navbar start -->
    <div class="container-fluid pt-5 pb-3">
      <div class="row">
        <div class="ms-5 col-md-2">
          <div class="img">
            <img src="images/logo.jfif" class="w-100" alt="" height="55" />
          </div>
        </div>
        <div class="col-md-3 heading">
          <p class=" " >
            Mahajan Super Speciality Hospital Pvt.Ltd.
            <i>Depend On his life</i>
          </p>
        </div>
        <div class="col-md-3 calling">
          <p class="ms-4">
            <span class="ms-4 fs-6">24 x 7 Emergency Helpline </span>

            <span style="color: red">
              <i class="zmdi zmdi-phone fs-1" aria-hidden="true"
                ><span class="fs-5" > +91 9099089121</span></i
              >
              <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <span style=" font-size: 16px;">079-263056101112</span>
              
             
            </span>
          </p>
        </div>
        <div class="col-md-1">
          <div class="img">
            <img src="images/hospital-loho.jfif" class="w-100" alt="" />
          </div>
        </div>

        <div class="ms-3 mt-2 col-md-2">
          <div class="img">
            <img src="images/iso.png" class="w-100" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- navbar-end -->

    <!-- pure nav -->
    <nav class="sticky-top">
      <ul class="menu ms-5 p-2">
        <li><a href="index.php">HOME</a></li>
        <li>
          <a href="#">MAHAJAN @ GLANCE</a>
          <ul class="sub-menu">
            <li><a href="md-message.php">MD's Message</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="department.php">Department</a></li>
          </ul>
        </li>
        <li>
          <a href="#">MEDICAL SERVICES </a>
          <ul class="sub-menu">
            <li><a href="orthopadic_surgery.php">Orthopadic Surgery</a></li>
            <li><a href="Advanced_Laparoscopic_Surgery.php">Advanced Laparoscopic Surgery</a></li>
            <li><a href="Endoscopic_Sinus_Surgery.php">Endoscopic Sinus Surgery</a></li>

            <li><a href="Chronic_Diseases.php">Chronic Diseases</a></li>
            <li><a href="Cardiology.php">Cardiology</a></li>
            <li><a href="Obstetrics_Gynaecology.php">Obstetrics & Gynaecology</a></li>
            <li><a href="Trauma_Centre.php">Trauma Centre</a></li>
            
          </ul>
        </li>

        <li>
          <a href="health_check.php">HEALTH CHECK</a>
         
        </li>

        <li>
          <a href="#">FACILITES</a>
          <ul class="sub-menu">
            <li><a href="Physiotherapy_Centre.php">Physiotherapy Centre</a></li>
            <li><a href="Colour_Doppler_Echocardiography.php">Colour Doppler Echocardiography </a></li>
            <li><a href="other_facility.php">Other Facility</a></li>
            <li><a href="iccu.php">ICCU</a></li>
            <li><a href="ct_scan.php">CT Scan</a></li>
            <li><a href="in_houe_pharmacy.php">In House Pharmacy</a></li>
            <li><a href="dialysis.php">Dialysis</a></li>
            <li><a href="center_steri.php">Central Sterilization</a></li>
            <li><a href="theater.php">Theatre</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="pathology.php">Pathology</a></li>
            <li><a href="radiology.php">Radiology</a></li>
            <li><a href="cathlab.php">Cath Lab</a></li>
          </ul>
        </li>

        <li>
          <a href="doctor_team.php">DOCTOR'S TEAM</a>
        </li>
        

       
        

        <li>
          <a href="#">LOGIN</a>
          <ul class="sub-menu">
            <li><a href="login.php"> Login</a></li>
            <li><a href="patient_registration_form.php">Patient Login</a></li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- end nav -->


    <!-- crousel and content portion -->
    <div class="container-fluid">
      <div class="row text-white" >
        <div class="col-md-6 " style="background-color:#105FA4; padding: 70px;">
          <h2>YOU CAN'T</h2>
          <h1 style="font-size: 3rem;">ALWAYS BE THERE</h1>
          <h2 style="margin-left:40%;">BUT WE CAN</h2>
          <p style="margin-top: 20px; font-size: 1rem; letter-spacing: 0.1rem;"> 2001, the hospital transformed its banner from “Mahajan Hospital” to “Mahajan Super Speciality Hospital” as a Proprietary firm and shifted to Palanpur. Later on in 2007, it was converted into Pvt. Ltd. under the company law.</p>

          <div class="mainbtn px-2 mt-3 py-2">
            <a href="aboutus.php" class="">READ MORE</a>
          </div>
       

        </div>
        <div class="col-md-6">
          <div class="carousel">
            <img class="slide" src="images/crousel_2.jpeg" height="480" alt="Image 1" width="100%">
            <img class="slide" src="images/crousel__1.png" height="480" alt="Image 2" width="100%">
            <img class="slide" src="images/crousel5.png" height="480" alt="Image 3" width="100%">
            <img class="slide" src="images/crousel10.jpg" height="480" alt="Image 3" width="100%">
            <img class="slide" src="images/crousel11.jpg" height="480" alt="Image 3" width="100%">
            <img class="slide" src="images/crousel7.jpg" height="480" alt="Image 3" width="100%">
            <img class="slide" src="images/crousel4.jfif" height="480" alt="Image 3" width="100%">
            <!-- Add more images as needed -->
          </div>
          
        </div>
      </div>
    </div>


    <!-- main_portion -->
    <div class="container slideportion">
      <div class="row">
        <div class="col-md-6  pb-5" style="padding-top: 45px;">
          <span class="fs-3 text-secondary" >WELCOME TO</span>
          <h1><span>MAHAJAN</span> HOSPITALS</h1>
          <p class="mt-3">Mahajan Hospital was founded in 1987 by Dr. Vinay Bhomia & Dr. Mamta Bhomia. Through our dedicated efforts towards noble career, we were able to expand our hospital from Mahajan Hospital to Mahajan Super Specialty Hospital, in 2001.</p>
          <p>Now our hospital is known for multi functionality. At Mahajan Hospital we have set new benchmarks in quality standards in healthcare delivery, by keeping with the tradition of delivering healthcare at par with the best in the world.</p>
          <p>Mahajan Hospitals, Palanpur provides noble healthcare that includes prevention,atment, rehabilitation and health education for patients, their families and clients by touching their</p>
          <div class="bt mt-5">
              <a class="mainbtn1 px-3 py-2" href="aboutus.php">READ MORE</a>
              <a href="patient_registration_form.php" class="mainbtn1 ms-2 px-3 py-2">BOOK APPOINTMENT</a>
          </div>
          
        </div>
        <div class=" col-md-6 mt-5 ">
          <img src="images/mahajan_image.png" class="rounded" alt="Hospital Image" height="450" width="100%">
        </div>
        
      </div>
    </div>
    <!-- main-portion-end  -->


    <!-- .medical_services  -->
      <div class="services " style="background-image: url('images/medical_services.jpg');">
        <h1 class="text-center pt-4 text-white">MEDICAL SERVICES</h1>
        <div style="line-height: 1em; border: 2px solid #b61503; width: 28%; margin: auto;"></div>
        <div class="container mt-5 pb-5 pt-4">
          <div class="row">
               <a href="orthopadic_surgery.php"><div class="col-md-3 px-3 py-4 rounded box text-center">
               <img src="images/medical_images/serviicon1.png" alt="Orthopadic">
                <h4 class="mt-3">ORTHOPADIC</h4></a>
              </div>
              <div class="col-md-3 px-3 py-4 rounded box1 text-center">
                <a href="Advanced_Laparoscopic_Surgery.php"><img src="images/medical_images/serviicon2.png" alt="Orthopadic">
                <h4 class="mt-3">LAPAROSCOPIC</h4></a>
              </div>
              <div class="col-md-3 px-3 py-4 rounded box2 text-center">
                <a href="Endoscopic_Sinus_Surgery.php"><img src="images/medical_images/serviicon3.png" alt="Orthopadic">
                <h4 class="mt-3">ENDOSCOPIC</h4> </a>
              </div>
              <div class="col-md-3 px-3 py-4 rounded box3 text-center">
                <a href="Chronic_Diseases.php"><img src="images/medical_images/serviicon4.png" alt="Orthopadic">
                <h4 class="mt-3">CHRONIC DISEASES</h4></a>
              </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-3 px-3 py-4 rounded box4 text-center">
              <a href="Cardiology.php"><img src="images/medical_images/serviicon5.png" alt="Orthopadic">
              <h4 class="mt-3">CARDIOLOGY</h4></a>
            </div>
            <div class="col-md-3 px-3 py-4 rounded box5 text-center">
              <a href="Obstetrics_Gynaecology.php"><img src="images/medical_images/serviicon6.png" alt="Orthopadic">
              <h4 class="mt-3">OBSTETRICS</h4></a>
            </div>
            <div class="col-md-3 px-3 py-4 rounded box6 text-center">
              <a href="Trauma_Centre.php"><img src="images/medical_images/serviicon7.png" alt="Orthopadic">
              <h4 class="mt-3">TRAUMA</h4></a>
            </div>
           
        </div>

        </div>
        
      </div>
    <!-- medical_services-end  -->


    <!-- meet our Specialities -->
    <div class="Specialities">
       <div class="container">
        <h1 class="text-center pt-4" style="color:#105FA4 ;">MEET OUR SPECIALISTS</h1>
        <div style="line-height: 1em; border: 2px solid #b61503; width: 40%; margin: auto;"></div>
        <div class="row mt-5 pt-3">
          <?php

          include 'Backend/his_admin_config.php';

          $sql=" SELECT * FROM hms_doctors";
          $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");


          if(mysqli_num_rows($result) > 0)
          {
            while($row=mysqli_fetch_assoc($result))
            {

          
          ?>
          <div class="col-md-3 p-3 text-center doctorcard">
            <div class="info pt-3">
              <h5>DR. <?= $row['doc_fname'];?> <?=$row['doc_lname'];?> </h5>
              <p>(<?=$row['doc_department'];?>)</p>
              <img src="./Backend/upload/<?=$row['doc_image'];?>" class="w-100" height="250" alt="doctor_image">
            </div>
               <button type="button" class="btn mt-3"><a href="doctor_team_profile.php?number=<?=$row['doc_number'];?>">READ MORE</a></button>
          </div>
        <?php

         }
        }
        ?>
          
          
        </div>




       </div> 
       
    </div>
    <!-- meet our Specialities end -->




    <!-- Patient Review -->
      <div class="PATIENTS mt-5 pb-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
     
              <h1 class="text-center pt-4 text-white">WHAT PATIENTS SAY</h1>
              <div style="line-height: 1em; border: 2px solid #b61503; width:70%; margin: auto;"></div>

              <div class="slideshow-container rounded">
                
                <?php

                  include 'Backend/his_admin_config.php';

                  $sql="SELECT pat_fname,pat_lname,feedback from hms_patient Where pat_type='InPatient'";
                  $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
                  if(mysqli_num_rows($result) > 0){
                    while($row=mysqli_fetch_assoc($result))
                    {
             
                      ?>
                      <div class="mySlides">
                      <q><?=$row['feedback'];?></q>
                      <p class="author">- <?=$row['pat_fname'];?> <?=$row['pat_lname'];?></p>
                      </div>
                      <?php
                  }
                }
                ?>

                
                
                
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
            </div>

            <div class="col-md-6 mt-5 pt-3">
                <div class="row">
                  <div class="col-md-6 patient_box">
                    <img src="images/medical_images/aicon5.png" alt="images">
                  </div>
                  <div class="col-md-6 patient_box">
                    <img src="images/medical_images/aicon6.png" alt="images">
                  </div>
                  <div class="col-md-6 patient_box">
                    <img src="images/medical_images/aicon7.png" alt="images">
                  </div>
                  <div class="col-md-6 patient_box">
                    <img src="images/medical_images/aicon8.png" alt="images">
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Patient review end -->


        <!-- Success Stories -->
        <div class="container mb-4 mt-5">
          <div class="row text-center">
            <div class="col-md-4 succes_stories">
              <img src="images/succes_stories.jpg" alt="succes_stories">
              <h3>Coronary Stent Pricing</h3>
            </div>
            <div class="col-md-4 succes_stories">
              <img src="images/succes_stories1.jpg" alt="succes_stories">
              <h3>Success Stories</h3>
            </div>
            <div class="col-md-4 succes_stories">
              <img src="images/succes_stories2.jpg" alt="succes_stories">
              <h3>Take the Virtual Tour</h3>
            </div>
          </div>
         
        </div>
        <!-- Succes Stories end -->


        <!-- health_checkup -->
        <div class="container-fluid" style="background-image: url('images/healthbg.jpg');">
          <div class="row">
            <div class="offset-7 mt-5 col-md-4 health_menu">
              <div class="row ">
                <div class="col-5 py-2 active">
                  <a href="">HEALTh CHECKUP</a>
                </div>
                <div class="py-2 col-7">
                  <a href="">PHOTO / VIDEO GALLERY</a>
                </div>
              </div>
            </div>

            <div class="offset-7 mt-4 col-md-4 rounded pt-5 ps-5 pe-5 pb-4 list_health bg-white">
                <h4 style="color: #d01b08;"><span>HEALTH </span>  CHECKUP</h4>
                <h5>WELL WOMAN</h5>
                <div class="row mt-4 ">
                  <div class="col-md-6 ">
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>CBC/ESR</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>BLOOD GROUP</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>URINE R/M</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>FBS OR RBS</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>CALCIUM</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>PAP SMEAR</span></p>
                  </div>
                  <div class="col-md-6">
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>CREATININE</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>SGPT</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>CHOLESTEROL</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>ECG</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>ECHO</span></p>
                    <p><i class="zmdi zmdi-arrow-right"></i> <span>CHEST X-RAY</span></p>

                  </div>

                  
                 
                </div>
                <div class="health_form1 mt-3 text-center">
                  <div class="btn" style="width: 45%;">
                    <a href="health_check.php">CHECKUP NOW</a>
                  </div><br>
                  <div class="btn mt-2" style="width: 55%;">
                    <a href="patient_registration_form.php">BOOK APPOINTMENT</a>
                  </div>
                </div>
               
            </div>

          </div>
        </div>
        
        <!-- health_checkup end -->


        <!-- location  -->
        <div class="container-fluid">
          <div class="row">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14559.764531815112!2d72.4371279!3d24.1737972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395ce95d4e6e9b25%3A0x3943120822bf5a35!2sZ.M.V.D.%20PARIKH%20HOSPITAL%20(MAHAJAN%20HOSPITAL)!5e0!3m2!1sen!2sin!4v1703398152397!5m2!1sen!2sin" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            <img src="images/location_mahajan.png" class="w-100" alt="location">
          </div>
        </div>
        <!-- location-end -->


        <!-- footer code here -->
     <!-- footer code here -->
       <!-- footer code here -->
       <div class="footer pb-5 pt-4" style="background-image: url('images/footerbg.jpg');">
      <div class="container">
        <div class="row">
            <div class="col-md-4 footer_icon ">
              <h2 class="pt-4 text-white">CONTCAT US</h2>
              <p class="text-white">Stadium Road, Infront Of Telephone Tower, Bareilly-243122</p>
              <i class="zmdi zmdi-phone fs-4 " style="color: #b61503" aria-hidden="true">&nbsp; <span class="fs-5 text-white">Phone: 0581-2531055, 2303888</span> </i>
              <i class="zmdi zmdi-phone fs-4 " style="color: #b61503" aria-hidden="true"
              > &nbsp; <span class="fs-5 text-white">Mobile: 9412289888, 8954244888</span></i>
              <i class="zmdi zmdi-inbox fs-4 " style="color: #b61503">&nbsp;&nbsp;<span class="fs-5 text-white">mahajanhospital111@gmail.com</span></i>

            </div>
            <div class="col-md-4 mt-3 footer_link">
              <h3>Useful Links</h3>
              <div class="row mt-4 footer_para">
                <div class="col-md-6">
                  <p ><a href="#">|&nbsp;&nbsp;Photo Gallery</a></p>
                  <p><a href="#">|&nbsp;&nbsp;About The Hospital</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Doctor’s Team</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Health Check</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Success Stories</a></p>
                </div>
                <div class="col-md-6">
                  <p><a href="#">|&nbsp;&nbsp;Activities</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Feedback</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Testimonial</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Career</a></p>
                  <p><a href="#">|&nbsp;&nbsp;Contact Us</a></p>
                
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-3">
              <h3 class="text-white">Join Our Facebook Page</h3>
              <div class="scroll mt-4">
                <img src="images/footer_mahajan_image.jpg" alt="" height="200" width="300">
              </div>
            </div>
            <hr style="color: white;" class="mt-4">
            <p class="text-center fs-4 text-white">© Copyright 2023 <b style="color: #b61503;">Mahajan Hospital.</b>  All Rights Reserved. Design by Nodoliya Raiyan</p>
        </div>
      </div>
    </div>
    <!-- footer code end -->
    <!-- footer code end -->
    <!-- footer code end -->






    <!-- script link  -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="D:\Hospital-Menagement-System\bootsrap_link\bootsrap 5\js\bootstrap.bundle.min.js"></script>

<script>
  // main-crousel

let index = 0;
const slides = document.getElementsByClassName('slide');

function showSlide() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  index = (index + 1) % slides.length;
  slides[index].style.display = 'block';
}

function startCarousel() {
  setInterval(showSlide, 2000); // Change image every 2 seconds (2000 milliseconds)
}

startCarousel();


</script>




   <script>
    // patient syays crousel

    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

   </script>




</body>


