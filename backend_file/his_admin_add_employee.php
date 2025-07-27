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
                        <h4>Add Employee Details</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_employee.php">Employee</a></li>
                            <li class="breadcrumb-item active">Add Employee</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">

                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Employee First Name</label>
                                <input type="text" required="required" name="emp_fname" class="form-control"
                                    id="inputEmail4" placeholder="Employee's First Name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Employee Last Name</label>
                                <input required="required" type="text" name="emp_lname" class="form-control"
                                    id="inputPassword4" placeholder="Employee`s Last Name">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Date Of Birth</label>
                                <input type="date" required="required" name="emp_dob" class="form-control"
                                    id="inputEmail4" placeholder="DD/MM/YYYY">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4" class="col-form-label">Joined Date</label>
                                <input type="date" required="required" name="emp_join_date" class="form-control"
                                    id="inputEmail4" placeholder="DD/MM/YYYY">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Employee Email</label>
                                <input required="required" type="emai" name="emp_email" class="form-control"
                                    id="inputPassword4" placeholder="Example@gmail.com">
                            </div>
                        </div>


                        <div class="form-group ps-3 pe-3 pb-3">
                            <label for="inputAddress" class="col-form-label">Employee Address</label>
                            <input required="required" type="text" class="form-control" name="emp_addr"
                                id="inputAddress" placeholder="Patient's Addresss">
                        </div>

                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-6">
                                <label for="inputCity" class="col-form-label" >Employee Phone</label>
                                <input required="required" type="text" name="emp_phone" class="form-control"
                                    id="inputCity">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputCity" class="col-form-label" >Assign Department</label>
                                <select id="inputState" required="required" name="emp_department" class="form-control">
                                    <option value="" desabled selected>Choose</option>
                                    <option>Accounting</option>
                                    <option>Laboratory</option>
                                    <option>Pharmacy</option>
                                    <option >Worker</option>
                                </select>
                            </div>
                          
                           
                            <div class="form-group col-md-2" style="display:none">
                            <?php

                                $length = 5;
                                $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">Patient Number</label>
                                <input type="text" name="emp_number" value="<?php echo $patient_number;?>"
                                    class="form-control" id="inputZip">
                            </div>
                        </div>


                        <button type="submit" name="add_employee" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">Add Employee</button>




                    </form> <!-- form end here .  -->

                    <?php
                       if(isset($_POST['add_employee']))
                       {
                            include 'his_admin_config.php';
                            $emp_fname = mysqli_real_escape_string($conn,$_POST['emp_fname']);
                            $emp_lname=  mysqli_real_escape_string($conn,$_POST['emp_lname']);
                            $emp_number= mysqli_real_escape_string($conn,$_POST['emp_number']);
                            $emp_email= mysqli_real_escape_string($conn,$_POST['emp_email']);
                            $emp_dob = mysqli_real_escape_string($conn,$_POST['emp_dob']);
                            $emp_join_date= mysqli_real_escape_string($conn,$_POST['emp_join_date']);
                            $emp_addr = mysqli_real_escape_string($conn,$_POST['emp_addr']);
                            $emp_phone = mysqli_real_escape_string($conn,$_POST['emp_phone']);
                            $emp_department=mysqli_real_escape_string($conn,$_POST['emp_department']);

                            $sql1="SELECT * FROM hms_employee where emp_email='$emp_email' or emp_phone='$emp_phone'";
                            $result1=mysqli_query($conn,$sql1) or die("Unsuccessfully....!");

                            if(mysqli_num_rows($result1) > 0)
                            {
                                ?>
                                <script>
                                    alert("He is already Registerd In Our Website");
                                    window.location.replace('his_admin_add_employee.php');

                                </script>
                                <?php
                            }
                            
                            else
                            {
                                $sql="INSERT INTO hms_employee (emp_fname, emp_lname, emp_number, emp_email, emp_dob, emp_join_date, emp_addr, emp_phone, emp_department ) VALUES('$emp_fname', '$emp_lname', '$emp_number', '$emp_email', '$emp_dob', '$emp_join_date', '$emp_addr', '$emp_phone', '$emp_department')";
                                $result=mysqli_query($conn,$sql);
                                if($result)
                                {
                                    ?>
                                    <script>
                                        window.location.replace("his_admin_view_employee.php");
                                    </script>
                                    <?php
                                }
                                else
                                {
                                    die("Error:".mysqli_query($conn));
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
     const mobileInput = document.querySelector('input[name="emp_phone"]');

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