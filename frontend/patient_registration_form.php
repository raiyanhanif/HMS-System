<?php
session_start();
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
     <!-- patietnt-register form -->
 <div class="wrapper" style="background-image: url('images/bg-pattern.jpg');">
    <div class="inner">
        <div class="image-holder">
        <p><i class="zmdi zmdi-arrow-left " style="font-size:2rem; color:orange" onclick="window.history.go(-1); return true;"></i></p>
            <img src="images/mahajan_image.png" alt="" height="400">
            <h4 style="color: orange; margin-top: 20px;">IF You are already registered in our website , you can login here from the login button.</h4>
            <button class="btn"><a href="patient_login.php">Login</a>
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'];?>"  name="contactForm" onsubmit="return validateForm()" onsubmit="return validateMobileNumber()" method="POST">
            <h3>Registration Form </h3>
            <div class="form-group">
                <input type="text" placeholder="First Name"  required="required" name="pat_fname" class="form-control">
                <input type="text" placeholder="Last Name"  required="required" name="pat_lname" class="form-control">
            </div>
            <div class="form-wrapper">
                <input type="text" placeholder="Patient Name"  required="required" name="pat_name" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div>  

            
            <div class="form-wrapper">
                <label for="pat_dob">Date Of Birth</label>
                <input type="date" placeholder="Date Of Birth" id="date-input"  required="required" name="pat_dob" class="form-control">
                <!-- <i class="zmdi zmdi-account"></i> -->
            </div>  

            <!-- <div class="form-wrapper">
                <input type="number" placeholder="Age" class="form-control">
                <i class="zmdi zmdi-account"></i>
            </div> -->

            <div class="form-wrapper">
                <input type="email" placeholder="Email Address"  required="required" name="pat_email" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>

            <div class="form-wrapper">
                <textarea placeholder=" Address" name="pat_addr" required="required" class="form-control"></textarea>
                <!-- <i class="zmdi zmdi-email"></i> -->
            </div>


            <div class="form-wrapper">
                <input type="number" placeholder="Mobile No" maxLength=10 id="mobileNumber" required="required" name="pat_phone" class="form-control">
                <i class="zmdi zmdi-phone"></i>
            </div>

            <div class="form-wrapper" style="display:none">
                <?php
                    $length = 5;
                    $patient_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                ?>
                <label for="inputZip" class="col-form-label" >Patient Number</label>
                <input type="text" name="pat_number" value="<?php echo $patient_number;?>"class="form-control" id="inputZip">
                
            </div>
            
            <div class="form-wrapper" style="display:none">
                <input type="password" placeholder="Password" name="pat_type" class="form-control" id="myInput">
                <i class="zmdi zmdi-eye" onclick="myFunction()"></i>
            </div>
            
            <div class="form-wrapper">
                <input type="password" placeholder="Password" required="required" name="pat_password" class="form-control" id="myInput">
                <i class="zmdi zmdi-eye" onclick="myFunction()"></i>
            </div>
         
            <!-- <p>Lost password <a href="lost_password.html" id="lost">Click Here!</a></p> -->
            <button class="btn" name="submit" id="submitBtn">Register
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
        <!-- php code start here -->
        <?php
             if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if(isset($_POST["submit"]))
                {
                include 'Backend/his_admin_config.php';

                $p_fname=mysqli_real_escape_string($conn,$_POST['pat_fname']);
                $p_lname=mysqli_real_escape_string($conn,$_POST['pat_lname']);
                $p_dob=mysqli_real_escape_string($conn,$_POST['pat_dob']);
                $p_email=mysqli_real_escape_string($conn,$_POST['pat_email']);
                $p_address=mysqli_real_escape_string($conn,$_POST['pat_addr']);
                $p_phone=mysqli_real_escape_string($conn,$_POST['pat_phone']);
              
                $p_type=mysqli_real_escape_string($conn,$_POST['pat_type']);
                $p_number=mysqli_real_escape_string($conn,$_POST['pat_number']);
                $p_password=md5($_POST['pat_password']);

                $sql1="SELECT * FROM hms_patient Where pat_email='$p_email' Or pat_phone='$p_phone'";
                $result1=mysqli_query($conn,$sql1) or die("Unsuccessfully....!");

                

                if(mysqli_num_rows($result1) > 0)
                {
                    ?>
                        <script>
                            alert("He is Already Available in Our Website");
                            window.location.replace('patient_registration_form.php');
                        </script>
                    <?php
                }
                else
                {

                    $sql="INSERT INTO hms_patient (pat_fname,pat_lname,pat_dob,pat_email,pat_addr,pat_phone,pat_type,pat_number,pat_password) VALUES('$p_fname','$p_lname','$p_dob','$p_email','$p_address','$p_phone','$p_type','$p_number','$p_password')";
                    $result=mysqli_query($conn,$sql);

                    
                    if($result)
                        {
                       
                            $sql2="SELECT * FROM hms_patient where pat_email='$p_email'";
                            $result2=mysqli_query($conn,$sql2) or die("Unsuccessfully...!");

                            if(mysqli_num_rows($result2) > 0)

                            {
                                $row2=mysqli_fetch_assoc($result2);
                                //session_start();

                                $_SESSION["pat_email1"]=$row2["pat_email"];
                                echo $_SESSION["pat_email1"];
                                

                                    ?>
                                   
                                    <script>
                                        
                                        window.location.replace('patient_book_appoint.php?id=<?=$row2['pat_id'];?>');
                                    </script>
                                <?php
        
                                
        
                            }
                    
                        }
                   
                    else
                    {
                        die("ERROR:".mysqli_error($conn));
                    }
                }
            }
        }
        ?>
        <!-- php code -end here -->
    </div>
</div>
<!-- patient-refister-form -end -->

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

<script>
    function validateMobileNumber() {
    var mobileNumber = document.getElementById("mobileNumber").value;
    if (mobileNumber.length < 10) {
        alert("Mobile number must be at least 10 numbers long.");
        return false;
    }
    return true;
}
</script>

<!-- validatio  for date of birth -->
<script>
    var today=new Date().toISOString().split('T')[0];
    document.getElementById("date-input").setAttribute("max",today);
        
    </script>

<!-- mobile no validation -->
<script>
const mobileInput = document.querySelector('input[name="pat_phone"]');
const submitBtn = document.getElementById('submitBtn');

mobileInput.addEventListener('input', function(event) {
    let mobileNumber = this.value;
    mobileNumber = mobileNumber.replace(/\D/g, ''); // Remove non-digit characters

    if (mobileNumber.length > 10) {
        mobileNumber = mobileNumber.slice(0, 10); // Truncate input to 10 digits
    }

    this.value = mobileNumber; // Update input value

    if (mobileNumber.length !== 10) {
        submitBtn.disabled = true; // Disable submit button if mobile number is not exactly 10 digits
        submitBtn.title = "Mobile number should be exactly 10 digits long."; // Tooltip message
    } else {
        submitBtn.disabled = false; // Enable submit button if mobile number is 10 digits
        submitBtn.title = ""; // Clear tooltip message
    }
});


</script>

<!-- validation of email -->
<script> 
	const emailInput = document.querySelector('input[name="pat_email"]');
let isEmailValid = true;

emailInput.addEventListener('blur', function() {
    const enteredEmail = this.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for basic email validation

    if (enteredEmail.length > 2 && !emailRegex.test(enteredEmail)) {
        alert('Error: Please enter a valid email address.');
        isEmailValid = false;
    } else {
        isEmailValid = true;
    }
});

emailInput.addEventListener('input', function() {
    if (!isEmailValid) {
        const enteredEmail = this.value;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for basic email validation

        if (emailRegex.test(enteredEmail)) {
            isEmailValid = true;
        }
    }
});
</script>




</body>
</html>