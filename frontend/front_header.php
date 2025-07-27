
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

     <!-- MATERIAL DESIGN ICONIC FONT -->
     <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  
</head>
<style>
    .heading p {
color: #213a85;
font-size: 17px;
font-weight: bold;
font-family: sans-serif;
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
            <p class="fw-bold " >
              Mahajan Super Speciality Hospital Pvt.Ltd.
              <i>Depend On his life</i>
            </p>
          </div>
          <div class="col-md-3 calling">
            <p class="ms-4">
              <span class="ms-4 fs-6">24 x 7 Emergency Helpline </span>
  
              <span style="color: red">
                <i class="zmdi zmdi-phone fs-1" aria-hidden="true"
                  ><span class="fs-5"> +91 9099089121</span></i
                >
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                079-263056101112
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
  
</body>
</html>