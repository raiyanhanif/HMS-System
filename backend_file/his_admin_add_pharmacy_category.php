<?php

include 'his_admin_header.php';
if(!isset($_SESSION['ad_role']))
{
    ?>
     <script>
     
         window.location.replace("his_doctor_view_patients.php");
     </script>
    <?php
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Menagement System</title>
    <!-- ====>> bootstrap link <<========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- =======>> css link of header <<======= -->
    <link rel="stylesheet" href="assets/css/header.css">


    <!-- css of admin_dashboard -->
    <link rel="stylesheet" href="assets/css/his_admin_dashboard.css">

    <!-- font awesome icon -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

</head>
<style>
 
</style>
<body>

 <div class="content mt-5 pt-5">
    <div class="container-fluid mt-5">
            <div class="row head_title ">
                    <div class="col-md-4">
                        <h5>Create A Pharmaceuticals Category</h5>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_pharmacy.php">Pharmacy</a></li>
                            <li class="breadcrumb-item active">Add category</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Pharmaceuticals Category Name</label>
                                <input type="text" required="required" name="phar_cat_name" class="form-control"
                                    id="inputEmail4" placeholder="Pharmaceuticals`s Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Pharmaceuticals vendor</label>
                                <input required="required" type="text" name="phar_cat_vendor" class="form-control"
                                    id="inputPassword4" placeholder="Pharmaceuticals`s vendor">
                            </div>
                         
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4" class="col-form-label w-100">Pharmaceuticals Category Description</label>
                                <textarea name="phar_cat_desc" id="" class="w-100"  required="required" placeholder=" Pharmaceuticals`s Decription"></textarea>
                            </div>
                            
                        </div>


                        <button type="submit" name="add_category" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Pharmacy category</button>




                    </form> <!-- form end here .  -->

                    <?php
                        if(isset($_POST['add_category']))
                        {
                            include 'his_admin_config.php';

                            $phar_cat_fname=mysqli_real_escape_string($conn,$_POST['phar_cat_name']);
                            $phar_cat_vendor=mysqli_real_escape_string($conn,$_POST['phar_cat_vendor']);
                            $phar_cat_desc=mysqli_real_escape_string($conn,$_POST['phar_cat_desc']);
                           

                            $sql="INSERT INTO hms_pharmacy_category (phar_cat_name, phar_cat_vendor, phar_cat_desc ) VALUES('$phar_cat_fname', '$phar_cat_vendor', '$phar_cat_desc')";
                            $result=mysqli_query($conn,$sql);

                            if($result)
                            {
                                ?>
                                  <script>
                                      alert("hii");
                                  </script>
                                <?php
                            }
                            else
                            {
                                die("Error:". mysqli_error($conn));
                            }



                        }

                    ?>
                </div>
            </div>
            <!-- end form -->
    </div>
 </div>

</body>
</html>