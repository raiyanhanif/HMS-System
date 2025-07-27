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
                        <h4>Add Docotr's Details</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_doctors.php">Doctor's</a></li>
                            <li class="breadcrumb-item active">Add Doctor</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">First Name</label>
                                <input type="text" required="required" name="doc_fname" class="form-control"
                                    id="inputEmail4" placeholder="Doctor's First Name" oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Last Name</label>
                                <input required="required" type="text" name="doc_lname" class="form-control"
                                    id="inputPassword4" placeholder="Doctor`s Last Name"  oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">joined Date</label>
                                <input required="required" type="date" name="doc_date" class="form-control"
                                    id="inputPassword4" placeholder=""  oninput="this.value=this.value.toUpperCase()">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Email</label>
                                <input type="email" required="required" name="doc_email" class="form-control"
                                    id="inputEmail4" placeholder="Example@gmail.com">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Profile</label>
                                <input required="required" type="file" name="doc_image1" accept=".jpeg, .jpg, .png" class="form-control"
                                    id="inputPassword4" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Password</label>
                                <input type="password" required="required" name="doc_password" class="form-control"
                                    id="inputEmail4" placeholder="password.." >
                            </div>
                        </div>


                        <div class="form-group ps-3 pe-3 pb-3">
                            <label for="inputAddress" class="col-form-label">Address</label>
                            <input required="required" type="text" class="form-control" name="doc_addr"
                                id="inputAddress" placeholder="Doctor's Addresss"  oninput="this.value=this.value.toUpperCase()">
                        </div>

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputCity" class="col-form-label">Mobile Number</label>
                                <input required="required" type="text" name="doc_phone" class="form-control"
                                    id="inputCity" placeholder="Doctor Mobile No..">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity" class="col-form-label">Department</label>
                                <input required="required" type="text" name="doc_department" class="form-control"
                                    id="inputCity" placeholder="Doctor Department"  oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity" class="col-form-label">Specilization</label>
                                <input required="required" type="text" name="doc_specilization" class="form-control"
                                    id="inputCity" placeholder="Doctor Specili" oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-2" style="display:none"  >
                            <?php
                                $length = 5;
                                $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">Doctor Number</label>
                                <input type="text" name="doc_number" value="<?php echo $patient_number;?>"
                                    class="form-control" id="inputZip">
                            </div>
                        </div>

                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Degree</label>
                                <input type="text" required="required" name="doc_degree" class="form-control"
                                    id="inputEmail4" placeholder=" Degree.."  oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Exprience</label>
                                <input required="required" type="text" name="doc_expri" class="form-control"
                                    id="inputPassword4" placeholder="Exprience.. "  oninput="this.value=this.value.toUpperCase()">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Age</label>
                                <input required="required" type="text" name="doc_age" class="form-control"
                                    id="inputPassword4" placeholder="Age"  oninput="this.value=this.value.toUpperCase()">
                            </div>
                        </div>


                        <button type="submit" name="add_doctor" class="ladda-button btn btn-primary mt-3 px-3 ms-3"
                            data-style="expand-right">Add doctor</button>




                    </form> <!-- form end here .  -->

                    <?php
                       
                       include 'his_admin_config.php';
                      if(isset($_POST['add_doctor']))
                      {

                       

                        $file_name=$_FILES['doc_image1']['name'];
                        $file_temp=$_FILES['doc_image1']['tmp_name'];
                      
                        $folder="./upload/" . $file_name;

                        


                        if(move_uploaded_file($file_temp, $folder))
                        {
                            ?>
                                <script>
                                    window.location.replace('his_admin_view_doctors.php');
                                </script>
                            <?php 
                        }
                        else
                        {
                            ?>
                                <script>
                                    alert("Image does not uloaded");
                                </script>
                            <?php
                        }

                           


                        $doc_fname=mysqli_real_escape_string($conn,$_POST['doc_fname']);
                        $doc_lname=mysqli_real_escape_string($conn,$_POST['doc_lname']);
                        $doc_date=mysqli_real_escape_string($conn,$_POST['doc_date']);
                        $doc_email=mysqli_real_escape_string($conn,$_POST['doc_email']);
                        $doc_address=mysqli_real_escape_string($conn,$_POST['doc_addr']);
                        $doc_phone=mysqli_real_escape_string($conn,$_POST['doc_phone']);
                        $doc_department=mysqli_real_escape_string($conn,$_POST['doc_department']);
                        $doc_speci=mysqli_real_escape_string($conn,$_POST['doc_specilization']);
                        $doc_number=mysqli_real_escape_string($conn,$_POST['doc_number']);
                        $doc_degree=mysqli_real_escape_string($conn,$_POST['doc_degree']);
                        $doc_expri=mysqli_real_escape_string($conn,$_POST['doc_expri']);
                        $doc_age=mysqli_real_escape_string($conn,$_POST['doc_age']);

                        $doc_password=md5($_POST['doc_password']);

                        $sql1="SELECT * FROM hms_doctors WHERE doc_email='$doc_email' or doc_phone='$doc_phone'";
                        $result1=mysqli_query($conn,$sql1) or die("Unsuccessfully....!");

                        if(mysqli_num_rows($result1) > 0)
                        {
                            ?>
                            <script>
                                alert("Doctor is already Registerd In Our Website");
                                window.location.replace('his_admin_add_doctors.php');

                            </script>
                            <?php
                        }
                        
                    else
                    {


                        $sql= "INSERT INTO hms_doctors(doc_fname, doc_lname, doc_date, doc_email, doc_addr, doc_phone, doc_department, doc_specilization, doc_number, doc_degree, doc_expri, doc_age , doc_image, doc_password) VALUES('$doc_fname', '$doc_lname', '$doc_date', '$doc_email', '$doc_address', '$doc_phone', '$doc_department', '$doc_speci', '$doc_number', '$doc_degree', '$doc_expri', '$doc_age', '$file_name', '$doc_password')";
                        
                        $result=mysqli_query($conn,$sql) ;
                    
                        if($result)
                        {
                                ?>
                                 <script>
                                    
                                    window.location.replace('his_admin_view_doctors.php');
                                 </script>


                                <?php
                        }
                    
                        else
                        {
                            die("Error:".mysqli_error($conn));
                        }
                    }

                }
                    ?>
                </div>
            </div>
            <!-- end form -->
    </div>
 </div>


 
<!-- mobile no validation -->
<script>
     const mobileInput = document.querySelector('input[name="doc_phone"]');

mobileInput.addEventListener('input', function(event) {
    const mobileNumber = this.value;
    const onlyNumbers = /^\d+$/.test(mobileNumber);
    const isNotTooLong = mobileNumber.length <= 10;

    if (!onlyNumbers || !isNotTooLong) {
        this.value = mobileNumber.slice(0, 10); // Truncate input to 10 digits
        event.preventDefault(); // Prevent further input
       
    }
});

</script>
</body>
</html>