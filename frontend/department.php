<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
</head>
<style>
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
 /* department css */
  /* box */
  .boxe {
        text-align: center;
        border: 1px solid #105FA4;
        border-radius: 5px;
        width: 30%;
        margin: 4px;
    }
    .boxe a{
        text-decoration: none;
        color: white;
        background-color: #105FA4;
    }
    .boxe button{
        background-color: #105FA4;
        border: none;
        border-radius: 5px;
        margin:auto;
    }
     .boxe p{
        color: #105FA4;
        font-weight: 500;
    } 
    .boxe1 {
        text-align: center;
        border: 1px solid #FE1D14;
        border-radius: 5px;
        width: 30%;
        margin: 4px;
    }
    .boxe1 a{
        text-decoration: none;
        color: white;
        background-color: #FE1D14;
    }
    .boxe1 button{
        background-color: #FE1D14;
        border: none;
        border-radius: 5px;
        margin:auto;
    }
     .boxe1 p{
        color: #FE1D14;
        font-weight: 500;
    } 


 
</style>
<body>
    <?php

    include 'front_header.php';
?>

 <!-- department here start -->
       <!-- crousel and content  -->
       <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
            <div class="row">
                <div class="col-8 crouse " style="padding: 80px;">
                    <div class="para ms-5">
                        <h2 class="text-white">DEPARTMENT</h2>
                        <p class="text-white"><i class="zmdi zmdi-home"></i> / Mahajan @ Glance / Department</p>
                    </div>
                
                </div>
            </div>
        </div>
    <!-- crousel and content end -->
     <!-- mahajan md  -->
     <div class="mahajan_md container">
        <div class="row pt-5 mt-4 mb-5 pb-4">
            <div class="col-md-8 text-center">
                <div class="row ">
                    <div class="boxe py-4" style="width:31.5%">
                        <p>Front Office Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="boxe1 py-4" style="width:31.5%">
                        <p>Administration</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="boxe py-4" style="width:31.5%">
                        <p>Automobile Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                <div class="row mt-4 ">
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Account</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Marketing Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Cathlab Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                
                <div class="row mt-4">
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>I.C.U Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>O.T Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Dialysis Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                <div class="row mt-4">
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Pharmacy Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Pathology Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>C.T Scan Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
  
                
                <div class="row mt-4">
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Physiotherapy Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Diatician Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Radiology Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                    
                <div class="row mt-4">
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Cashlen Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Store Hour Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Nusrsing Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                <div class="row mt-4">
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>In House Doctors Team</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Security Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Housekeeping Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                
                <div class="row mt-4">
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Canteen</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Electricity Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Auto</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>  
                </div>
  
                <div class="row mt-4">
                    <div class="col-4 boxe py-4" style="width:31.5%">
                        <p>Biomedical Department</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                    <div class="col-4 boxe1 py-4" style="width:31.5%">
                        <p>Maa Yojana Desk</p>
                        <button class="px-3 py-2" type="button"><a href="images/crousel__1.png">Click Here</a></button>
                    </div>
                   
                </div>
  
            </div>
  
            
            <div class="col-md-4 ">
                    <img src="images/crousel__1.png" class="w-100" alt="mahajan_md " height="350">
                    <div class="row mt-3 mdlink " style="background-image: url('images/footerbg.jpg');">
                        <div class="col-12" style="background-color: #FE1D14; color: white;">
                            <h4>MAHAJAN GLANCE</h4>
                        </div>
                        <hr>
                        <div class="col-12 link">
                            <p><a href="md-message.php">MD's Message</a></p>
                        </div>
                        <hr>
                        <div class="co-12 link">
                            <p><a href="aboutus.php">About Us</a></p>
                        </div>
                        <hr>
                        <div class="col-12 link">
                            <p><a href="department.php">Department</a></p>
                        </div>
                    </div>
            </div>
        </div>
  
  
    </div>
    <!-- mahajan md end -->
<!-- department-end-here -->

<!-- footer start here -->

 <?php
        include 'front_footer.php';
?> 
</body>
</html>