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
    p b{
        color: #105FA4;
    }
</style>

<body>

    <!-- orthopadic here start -->
    <!-- crousel and content  -->
    <div class="main-part container-fluid" style="background-image: url('images/benner1.jpg');">
        <div class="row">
            <div class="col-8 crouse " style="padding: 80px;">
                <div class="para ms-5">
                    <h2 class="text-white">OBSTETRICS-GYNAECOLOGY</h2>
                    <p class="text-white"><i class="zmdi zmdi-home"></i> / MEDIAL SERVICES / obstetrics-gynaecology
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
                <h4 style="color: #105FA4;">Well Women care</h4>
                <br>
                <p>Being based at the India’s renowned private Hospital Sanjivani Hospitals provides the full spectrum of women's health care service. Our well woman gynaecology Centre equipped with the best state of the art facilities, provide comprehensive care to the women of all age groups, offer ranges of services such as Antenatal Care, painless deliveries, management of high risk pregnancies/late pregnancies, among others.</p>
                <p>
                    Well, a woman’s health is an extremely serious section of any hospitals giving. Right from the youth to physiological conditions, childbirth to biological time, women bear a bunch of health issue which require being addressed from time to time
                </p>

                <p>In Mahajan Hospital's woman gynaecology deliver the best quality problem-solving, surgery and counseling facilities for the good woman. We have well prepared and sophisticated delivery rooms and gynaecology familiar operation theaters with modern facilities, some advanced equipment birth delivery techniques.</p>
                <br>
                <p><b>Gynaecological Care</b></p>
                <div class="row mt-2">
                    <div class="col-md-6 orthopadic_icon">
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Family planning & contraception services</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Menstrual problems, Vaginal Discharge</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Vulvovaginal services</span></p>

                            <p><i class="zmdi zmdi-arrow-right"></i>  <span> Ovarian Cyst. Myomectomy (Fibroid)</span></p>
                         
                    </div>
                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Congenital Anomaly. Sling Surgery (Uterine Prolapse)</span></p>
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Urogynaecology (Urinary Problems)</span></p>
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Gynaecologic oncology</span></p>

                `   </div>
                </div>
                <br>

               <!-- second portion start here -->
               <p><b>Obstetrics Department</b></p>
               <div class="row mt-2">
                   <div class="col-md-6 orthopadic_icon">
                           <p><i class="zmdi zmdi-arrow-right"></i>  <span>Painless vaginal delivery</span></p>
                           <p><i class="zmdi zmdi-arrow-right"></i>  <span>Cesarean Section (C.S), Dilatation & Evacuation (D & E)</span></p>
                           <p><i class="zmdi zmdi-arrow-right"></i>  <span>High risk pregnancy</span></p>

                          
                        
                   </div>

                   <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Fetal Monitioring, antenatal care</span></p>
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>General Obstetrics</span></p>
                    </div>
                  
               </div>
               <!-- second-portion-end -here  -->
               <br>

               <!-- thired -portion-start-here -->
               <p><b>Laparoscopy</b></p>
                <div class="row">
                    <div class="col-md-6 orthopadic_icon">
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span> Diagnostic and operative laparoscopy</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Total Laparoscopy hystrectomy</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Laparoscopic myomectomy (fibroid)</span></p>

                            
                    </div>
                    <div class="col-md-6 orthopadic_icon">
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Laparoscopic endometriosis surgery</span></p>
                        <p><i class="zmdi zmdi-arrow-right"></i>  <span>Advance laparoscopic surgery</span></p>
                        
                `   </div>
                </div>
               <!-- thired-portion-end-here  -->

               <br>
               <!-- fourth portion start here -->
               <p><b>Infertility Treatment</b></p>
                <div class="row">
                    <div class="col-md-12 orthopadic_icon">
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span> Male Infertility</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Female infertility</span></p>
                     </div>
                   
                </div>
               <!-- Fourth portion end here -->
               <br>

               <!-- fifth-portion start-here  -->
               <p><b>Sonography</b></p>
                <div class="row">
                    <div class="col-md-12 orthopadic_icon">
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span> Obstertric ultrasound with color doppler</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Transabdominal sonograhy</span></p>
                            <p><i class="zmdi zmdi-arrow-right"></i>  <span>Transvaginal sonography</span></p>
                     </div>
                   
                </div>
               <!-- fifth-portion end here -->


            </div>
            <div class=" col-md-4 ">
                <img src="images/obstetrics-gynaecology.jpg" class="w-100" alt="mahajan_md " height="350">
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