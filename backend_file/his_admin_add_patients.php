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
                        <h4>Add Patient Details</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_patients.php">Patients</a></li>
                            <li class="breadcrumb-item active">Add Patient</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF'];?>" name="contactForm" onsubmit="return validateForm()" method="POST">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">First Name</label>
                                <input type="text" required="required" name="pat_fname" class="form-control"
                                    id="inputEmail4" placeholder="Patient's First Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Last Name</label>
                                <input required="required" type="text" name="pat_lname" class="form-control"
                                    id="inputPassword4" placeholder="Patient`s Last Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Passowrd</label>
                                <input required="required" type="password" name="pat_password" class="form-control"
                                    id="inputPassword4" placeholder="Patient`s password">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                <input type="date" required="required" name="pat_dob" class="form-control"
                                    id="inputEmail4" placeholder="DD/MM/YYYY">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Email</label>
                                <input required="required" type="email" name="pat_email" class="form-control"
                                    id="inputPassword4" placeholder="Example@gmail.com">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4" class="col-form-label">Assign Dcotor</label>
                            <select name="pat_doctor" id="" class="form-control">
                                <option value="" disabled selected>Choose Doctor</option>
                                    <?php
                                    include 'his_admin_config.php';

                                    $sql="SELECT * FROM hms_doctors ORDER BY RAND()";
                                    $result=mysqli_query($conn,$sql) or die("Unsuccessfully..!");

                                     if(mysqli_num_rows($result) > 0)
                                     {
                                         while($row=mysqli_fetch_assoc($result))
                                         {
                                             ?>
                                               <option value="<?=$row['doc_id'];?>"> <?=$row['doc_fname'];?> <?=$row['doc_lname'];?> (<?=$row['doc_department'];?>)</option>
                                             <?php
                                         }
                                     }

                                    ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group ps-3 pe-3 pb-3">
                            <label for="inputAddress" class="col-form-label">Address</label>
                            <input required="required" type="text" class="form-control" name="pat_addr"
                                id="inputAddress" placeholder="Patient's Addresss">
                        </div>

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputCity" class="col-form-label">Mobile Number</label>
                                <input required="required" type="number" maxLength=10 name="pat_phone" class="form-control"
                                    id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity" class="col-form-label">Patient Ailment</label>
                                <input required="required" type="text" name="pat_ailment" class="form-control"
                                    id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState" class="col-form-label">Patient's Type</label>
                                <select id="inputState" required="required" name="pat_type" class="form-control">
                                    <option>Choose</option>
                                    <option>InPatient</option>
                                    <option>OutPatient</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2" style="display:none">
                            <?php
                                $length = 5;
                                $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">Patient Number</label>
                                <input type="text" name="pat_number" value="<?php echo $patient_number;?>"
                                    class="form-control" id="inputZip">
                            </div>
                        </div>


                        <button type="submit" name="add_patient" class="ladda-button btn btn-primary mt-3 px-3 ms-3"
                            data-style="expand-right">Add Patient</button>




                    </form> <!-- form end here .  -->

                    <?php
                        if(isset($_POST['add_patient']))
                        {
                            include 'his_admin_config.php';

                            $pat_fname=mysqli_real_escape_string($conn,$_POST['pat_fname']);
                            $pat_lname=mysqli_real_escape_string($conn,$_POST['pat_lname']);
                            $pat_dob=mysqli_real_escape_string($conn,$_POST['pat_dob']);
                            $pat_email=mysqli_real_escape_string($conn,$_POST['pat_email']);
                            $pat_address=mysqli_real_escape_string($conn,$_POST['pat_addr']);
                            $pat_phone=mysqli_real_escape_string($conn,$_POST['pat_phone']);
                            $pat_ailment=mysqli_real_escape_string($conn,$_POST['pat_ailment']);
                            $pat_type=mysqli_real_escape_string($conn,$_POST['pat_type']);
                            $pat_number=mysqli_real_escape_string($conn,$_POST['pat_number']);
                            $p_doctor_id=mysqli_real_escape_string($conn,$_POST['pat_doctor']);
                            $pat_password=md5($_POST['pat_password']);

                            $select_sql="SELECT doc_fname,doc_lname from hms_doctors Where doc_id='$p_doctor_id'";

                            $fetch_result=mysqli_query($conn,$select_sql) or die("Error".mysqli_error($conn));
                            $row1=mysqli_fetch_assoc($fetch_result);
                            $pat_name=$row1['doc_fname'].' '.$row1['doc_lname'] ;
            


                     


                            $sql1="SELECT * FROM hms_patient Where pat_email='$pat_email' or pat_phone='$pat_phone'";
                            $result1=mysqli_query($conn,$sql1) or die("Unsuccessfully....!");

                            if(mysqli_num_rows($result1) > 0)
                            {
                                ?>
                                <script>
                                    alert("He is already Registerd In Our Website");
                                    window.location.replace('his_admin_add_patients.php');

                                </script>
                                <?php
                            }
                            else
                            {
                                $sql="INSERT INTO hms_patient (pat_fname, pat_lname, pat_dob, pat_email, pat_addr, pat_phone, pat_ailment, pat_type, pat_number, pat_password , pat_doctor, doc_id) VALUES('$pat_fname','$pat_lname','$pat_dob','$pat_email', '$pat_address', '$pat_phone', '$pat_ailment', '$pat_type', '$pat_number', '$pat_password', '$pat_name',$p_doctor_id)";
                                $result=mysqli_query($conn,$sql);

                                if($result)
                                {
                                    ?>
                                    <script>
                                        window.location.replace('his_admin_view_patients.php');
                                    </script>
                                    <?php
                                }
                                else
                                {
                                    die("Error:". mysqli_error($conn));
                                }
                            }



                        }

                    ?>
                </div>
            </div>
            <!-- end form -->
    </div>
 </div>
 <script>
function validateForm()
{
    var fname = document.forms["contactForm"] ["pat_fname"].value;
    var lname = document.forms["contactForm"] ["pat_lname"].value;
    var name = document.forms["contactForm"] ["name"].value;

    if(fname.length< 3 || !/^[a-z A-Z\s]*$/.test(fname))
    {
        alert("First Name should contain at least 3 alphabetic character and no symbols.");
        return false;

    }
    if(lname.length< 3 || !/^[a-z A-Z\s]*$/.test(lname))
    {
        alert("Last Name should contain at least 3 alphabetic character and no symbols.");
        return false;
    }
    if(name.length< 3 || !/^[a-z A-Z\s]*$/.test(name))
    {
        alert("patient Name should contain at least 3 alphabetic character and no symbols.");
        return false;
    }

    return true;
}

</script>

<!-- mobile no validation -->
<script>
     const mobileInput = document.querySelector('input[name="pat_phone"]');

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