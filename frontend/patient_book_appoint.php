<?php
session_start();
if(!isset($_SESSION["pat_email"]) and (!isset($_SESSION["pat_email1"])))
{
    ?>
     <script>
         window.location.replace("patient_registration_form.php");
     </script>
    <?php
}
// echo $_SESSION["pat_email"];
// echo $_SESSION["pat_email1"];
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <!-- registration form -->
    <link rel="stylesheet" href="css/patient.css">
    <!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.scss">
        <link rel="stylesheet" href="css/style.css.map">
        <link rel="stylesheet" href="css/patient.css">

</head>
<style>

</style>
<body>

        <?php 

            include 'Backend/his_admin_config.php';

            $pat_id=$_GET['id'];


            $sql="SELECT * FROM hms_patient WHERE pat_id=$pat_id";
            $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");

            if(mysqli_num_rows($result) > 0)
            {

                while($row=mysqli_fetch_assoc($result))
                {

        ?>
    
     <!-- patietnt-register form -->
 <div class="wrapper" style="background-image: url('images/bg-pattern.jpg');">
    <div class="inner">
        <div class="image-holder">
            <img src="images/mahajan_image.png" alt="" height="400">
            <h3>Hii <?=$row['pat_fname'];?> <?=$row['pat_lname'];?></h3>
            
        </div>
        
        <form action="<?php $_SERVER['PHP_SELF'];?>" name="contactForm" onsubmit="return validateForm()" method="POST">
            <h3>Book Appointment</h3>
            <div class="form-group">
                <input type="text" placeholder="First Name" readonly value="<?=$row['pat_fname'];?>"  required="required" name="old_pat_fname" class="form-control">
                <input type="text" placeholder="Last Name" readonly value="<?=$row['pat_lname'];?>" required="required" name="old_pat_lname" class="form-control">
            </div>
              

            <div class="form-wrapper">
                <label for="">Date Of Birth</label>
                <input type="date" placeholder="Date Of Birth" value="<?=$row['pat_dob'];?>" readonly  required="required" name="pat_dob" class="form-control">
                <!-- <i class="zmdi zmdi-account"></i> -->
            </div>  

            <!-- <div class="form-wrapper">
                <input type="number" placeholder="Age" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div> -->

            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" value="<?=$row['pat_email'];?>" readonly required="required" name="pat_email" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>
            

            <!-- book_appointment date-->
            <div class="form-wrapper">
                <label for="appointment_date">Select Appointment Date:</label>
                <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
            </div>

            <!--book appointment Time  -->
            <div class="form-wrapper">
                <label for="appointment_time">Select Appointment Time:</label>
                <select name="appointment_time" id="appointment_time" class="form-control" required>
                    <option value="">Select Time Slot</option>
                    <option value="morning">Morning (10:00 am - 1:30 pm)</option>
                    <option value="evening">Evening (5:00 pm - 9:00 pm)</option>
                </select>
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>

            <!-- timing slot  -->
            <div class="form-wrapper">
                <label for="time_select">Select Time:</label>
                <select name="time_select" id="time_select" class="form-control" required>
                    <option value="">Select Time</option>
                </select>
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>
                    

            <div class="form-wrapper">
                <select name="pat_doctor" id="" required="required" class="form-control">
                    <option value="" disabled selected>Choose Doctor</option>
                    <?php
                       include 'Backend/his_admin_config.php';

                        $sql="SELECT * FROM hms_doctors ORDER BY doc_id";
                        $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");

                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row=mysqli_fetch_assoc($result))
                            {
                                ?>
                                    <option value="<?=$row['doc_id'];?>"> <?=$row['doc_fname'];?> <?=$row['doc_lname'];?> (<?=$row['doc_department'];?>) </option>
                                    
                                <?php
                                
                            }
                        }
                        
                     ?>
                   
                </select>
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>

           

            <div class="form-wrapper" style="display:none">
                <?php
                    $length = 5;
                    $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                ?>
                <label for="inputZip" class="col-form-label" >Patient Number</label>
                <input type="text" name="pat_number" value="<?php echo $patient_number;?>"class="form-control" id="inputZip">
                
            </div>
            
            
         
            <!-- <p>Lost password <a href="lost_password.html" id="lost">Click Here!</a></p> -->
            <button class="btn" name="submit" id="submitBtn">Appointment Book
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
        <?php
         }
        } 
        ?>
        <!-- php code start here -->
        <?php
        if(isset($_POST["submit"]))
        {
            
                include 'backend/his_admin_config.php';
                // $p_fname=mysqli_real_escape_string($conn,$_POST['old_pat_fname']);
                // $p_lname=mysqli_real_escape_string($conn,$_POST['old_pat_lname']);
                $p_email=mysqli_real_escape_string($conn,$_POST['pat_email']);
                $p_doctor_id=mysqli_real_escape_string($conn,$_POST['pat_doctor']);
                $p_appoint_date=mysqli_real_escape_string($conn,$_POST['appointment_date']);
                $p_appoint_time=mysqli_real_escape_string($conn,$_POST['appointment_time']);
                $p_time_select=mysqli_real_escape_string($conn,$_POST['time_select']);
                // $doc_id=$_POST['doc_id'];

                $select_sql="SELECT doc_fname,doc_lname from hms_doctors Where doc_id='$p_doctor_id'";

                $fetch_result=mysqli_query($conn,$select_sql) or die("Error".mysqli_error($conn));

                
                    $row1=mysqli_fetch_assoc($fetch_result);

                    $pat_name=$row1['doc_fname'].' '.$row1['doc_lname'];
            

              

                $sql="INSERT INTO hms_book_appoint(pat_email,pat_doctor,appointment_date,appointment_time,time_select,doc_id) VALUES('$p_email','$pat_name','$p_appoint_date','$p_appoint_time','$p_time_select',$p_doctor_id)";
                $result=mysqli_query($conn,$sql) or die("Error :".mysqli_error($conn));

                if($result)
                {
                    ?>
                     <script>
                         alert("You Record is Successfully Entered Please Wait For Some Time And Check You Email");
                         window.location.replace('index.php');
                     </script>
                    <?php
                }
                else
                {
                    echo "Error ".mysqli_error($conn);
                }
                    

        }

        ?>
        <!-- php code -end here -->
    </div>
</div>
<!-- patient-refister-form -end -->


<!-- appointment date javascript -->
<script>
     // Function to get today's date in YYYY-MM-DD format
     function getTodayDate() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
        var yyyy = today.getFullYear();

        return yyyy + '-' + mm + '-' + dd;
    }

    // Set the minimum date for the date input field
    document.getElementById('appointment_date').setAttribute('min', getTodayDate());

    // Function to disable Sundays
    function disableSundays(date) {
        var day = date.getDay();
        // Disable Sundays (day 0)
        return [day !== 0, ''];
    }

    // Attach the disableSundays function to the date input field
    document.getElementById('appointment_date').addEventListener('input', function() {
        var selectedDate = new Date(this.value);
        var selectedDay = selectedDate.getDay();
        
        // Check if the selected date is a Sunday
        if (selectedDay === 0) {
            // If Sunday is selected, clear the input field
            this.value = '';
            alert('Sundays are not available for appointments. Please choose another date.');
        }
    });

    // Function to set the maximum date for the date input field to the last day of the current month
    function setMaxDate() {
        var today = new Date();
        var lastDay = new Date(today.getFullYear(), today.getMonth() + 1, 0);
        var dd = String(lastDay.getDate()).padStart(2, '0');
        var mm = String(lastDay.getMonth() + 1).padStart(2, '0'); // January is 0!
        var yyyy = lastDay.getFullYear();
        var maxDate = yyyy + '-' + mm + '-' + dd;

        document.getElementById('appointment_date').setAttribute('max', maxDate);
    }

    // Call setMaxDate function to set the maximum date for the date input field
    setMaxDate();
 </script>

 <!-- Appointment evening and morning shedule -->



<!-- Appointment timing shedule  -->
 <script> 

document.getElementById('appointment_time').addEventListener('change', function() {
    var timeSelect = document.getElementById('time_select');
    timeSelect.innerHTML = ''; // Clear previous options

    if (this.value === 'morning') {
        // Add morning time slots
        addTimeOption('10:00 am');
        addTimeOption('11:00 am');
        addTimeOption('12:00 pm');
        addTimeOption('1:00 pm');
    } else if (this.value === 'evening') {
        // Add evening time slots
        addTimeOption('5:00 pm');
        addTimeOption('6:00 pm');
        addTimeOption('7:00 pm');
        addTimeOption('8:00 pm');
    }
});

function addTimeOption(time) {
    var option = document.createElement('option');
    option.text = time;
    option.value = time;
    document.getElementById('time_select').appendChild(option);
}
 </script>







</body>
</html>