<?php
session_start();
if(!isset($_SESSION['doc_email']) and (!isset($_SESSION['ad_email'])) and (!isset($_SESSION['lab_email'])))
{
  ?>
  <script>
    window.location.replace("../login.php");
  </script>
  <?php
}



 


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!-- ====>> bootstrap link <<========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- =======>> css link of header <<======= -->
  <link rel="stylesheet" href="assets/css/header.css">


  <!-- css of admin_dashboard -->
  <link rel="stylesheet" href="assets/css/his_admin_dashboard.css">

  <!-- font awesome icon -->
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <!-- font-awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">



</head>
<style>
  .breadcrumb li a {
    text-decoration: none;
  }

  .form {
    padding: 20px;
    border-radius: 10px
  }
</style>

<body>


  <input type="checkbox" id="check">
  <!--header area start-->
  <header>
    <label for="check">
      <i class="fa fa-bars nav_btn" id="sidebar_btn"></i>
    </label>
    <div class="left_area">
      <h3>HMS <span> DASHBOARD</span></h3>
    </div>

    <div class="right_area">
      <a href="logout.php" class="logout_btn" onclick="logOutShow()" id="log"><i class="fa fa-sign-out nav_btn"></i></a>
    </div>
  </header>
  <!--header area end-->
  <!--mobile navigation bar start-->
  <div class="mobile_nav">
    <div class="nav_bar">
      <img src="1.png" class="assets/image/dashbord1.jfif" alt="">
      <i class="fa fa-bars nav_btn"></i>
    </div>
    <div class="mobile_nav_items">
      <a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
      <a href="#"><i class="fa fa-cogs"></i><span>Components</span></a>
      <a href="#"><i class="fa fa-table"></i><span>Tables</span></a>
      <a href="#"><i class="fas fa-th"></i><span>Forms</span></a>
      <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>
  </div>
  <!--mobile navigation bar end-->
  <!--sidebar start-->
  <div class="sidebar">
    <p style="color: #7c8399; padding: 2px; margin-left: 10px; font-size: 12px; font-weight: bold;">NAVIGATION</p>
    <div class="profile_info">
      <img src="assets/image/dashbord1.jfif" class="profile_image" alt="">
      <h4>HMS</h4>
    </div>


    
  <?php
     if(isset($_SESSION['ad_role']))
     {
    ?>
    <a href="his_admin_dashboard.php"><i class="fa fa-desktop fs-5"></i><span>Dashboard</span></a>
    <a href="his_admin_view_patients.php"><i class="fa fa-wheelchair fw-bold fs-5"></i><span>Patients</span></a>
    <a href="his_admin_view_doctors.php "> <i class="fa fa-user-md fs-5"></i><span>Doctors</span></a>
    <a href="his_admin_view_employee.php"><i class="fa fa-user fs-5"></i><span>Employee</span></a>
    <a href="his_admin_view_laboratory.php"><i class="fa fa-flask fs-5"></i><span>Laboratory</span></a>
    <a href="his_admin_view_pharmacy.php"><i class="fa fa-flask"></i><span>Pharmaceuticals</span></a>
    <a href="settings/his_admin_update_patient_password.php"><i class="fa fa-setting"></i><span>Settings</span></a>
    <?php
     }
     ?>
     <!-- only show doctor -->
     <?php
     if(isset($_SESSION['doc_role']))
     {
       ?>
        <a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
    
    <a href="his_doctor_view_patients.php"><i class="fa fa-wheelchair fw-bold fs-5"></i><span>Patients</span></a>


       <?php
       
     }
     ?>

  <!-- only show laboratory -->
  <?php
  if(isset($_SESSION['lab_role']))
  {
    ?>
    <a href="#"><i class="fa fa-desktop"></i><span>Dashboard</span></a>
    <a href="his_admin_add_patient_lab_test.php"><span>Laboratory</span></a>
    <?php
  }
  ?>

  
  </div>
  <!--sidebar end-->

  




  
</body>
</html>