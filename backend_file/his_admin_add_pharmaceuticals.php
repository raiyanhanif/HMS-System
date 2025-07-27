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
                        <h4>Create A Pharmaceuticals</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_pharmacy.php">Pharmaceuticals</a></li>
                            <li class="breadcrumb-item active">Add Pharmaceuticals</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Pharmaceuticals Name</label>
                                <input type="text" required="required" name="phar_name" class="form-control"
                                    id="inputEmail4" placeholder="Patient's First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Pharmaceuticals Quantity(Cartons)</label>
                                <input required="required" type="text" name="phar_qty" class="form-control"
                                    id="inputPassword4" placeholder="Patient`s Last Name">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-6">
                        
                                <label for="inputState" class="col-form-label">Pharmaceuticals Category</label>
                                <select id="inputState" required="required" name="phar_cat" class="form-control">
                                    <?php
                                    include 'his_admin_config.php';
                                        $sql="SELECT * FROM hms_pharmacy_category ORDER BY RAND()";
                                        $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");

                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                                ?>
                                                <option ><?=$row['phar_cat_name'];?></option>
                                                <?php
                                            }
                                        }
                                    ?>
                                </select>
                   
                            </div>
                            <div class="form-group col-md-6">
                            
                                <label for="inputState" class="col-form-label">Pharmaceuticals Vendor</label>
                                <select id="inputState" required="required" name="phar_vendor" class="form-control">
                                  
                                    <option>InPatient</option>
                                    <option>OutPatient</option>
                                </select>
                           
                            </div>
                        </div>


            

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-6" >
                                <?php
                                    $length = 8;
                                    $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                                ?>
                                    <label for="inputZip" class="col-form-label">Pharmaceuticals Bcode(EAN - 8)</label>
                                    <input type="text" name="phar_bcode" value="<?php echo $patient_number;?>"
                                        class="form-control" id="inputZip">
                            </div>
                            
                            <div class="form-group col-md-6">
                      
                                <label for="inputPassword4" class="col-form-label w-100">Pharmaceuticals Description</label>
                                <textarea name="phar_desc" id="" class="w-100"  required="required" placeholder=" Pharmaceutical`s Decription"></textarea>
                    
                            </div>
                          
                            
                        </div>


                        <button type="submit" name="add_pharmacy" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Pharmaceuticals</button>




                    </form> <!-- form end here .  -->

                    <?php
                            if(isset($_POST['add_pharmacy']))
                            {
                                include 'his_admin_config.php';

                                $phar_name=mysqli_real_escape_string($conn,$_POST['phar_name']);
                                $phar_qty=mysqli_real_escape_string($conn,$_POST['phar_qty']);
                                $phar_category=mysqli_real_escape_string($conn,$_POST['phar_cat']);
                                $phar_vendor=mysqli_real_escape_string($conn,$_POST['phar_vendor']);
                                $phar_bcode=mysqli_real_escape_string($conn,$_POST['phar_bcode']);
                                $phar_desc=mysqli_real_escape_string($conn,$_POST['phar_desc']);

                                $sql="INSERT INTO hms_pharmacy(phar_name, phar_qty, phar_cat, phar_vendor, phar_bcode, phar_desc) VALUES('$phar_name', '$phar_qty', '$phar_category', '$phar_vendor', '$phar_bcode', '$phar_desc')";
                                $result=mysqli_query($conn,$sql) ;

                                if($result)
                                {
                                    ?> 
                                    <script>
                                        alert('hii');
                                    </script>
                                    <?php
                                }

                                else

                                {
                                    die("Error:".mysqli_error($conn));
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