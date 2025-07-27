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
            <img src="images/mahajan_image.png" alt="" height="300">
            <h4 style="color: orange; margin-top: 20px;">IF You are not registered in our website , you can register here from the register button.</h4>
            <button class="btn"><a href="patient_registration_form.php">register</a>
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </div>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h3>Login Form</h3>
            

            <div class="form-wrapper">
                <input type="email" placeholder="Email Address" required="required" name="pat_email" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>

            
      
            
            <div class="form-wrapper">
                <input type="password" placeholder="Password" required="required" name="pat_password" class="form-control" id="myInput">
                <i class="zmdi zmdi-eye" onclick="myFunction()"></i>
            </div>
            <p>Lost password <a href="forgot_password.php">Click here! </a></p>
         
            <!-- <p>Lost password <a href="lost_password.html" id="lost">Click Here!</a></p> -->
            <button class="btn" name="submit" type="submit"> Login
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
        <?php

        
         if(isset($_POST['submit']))
         {
             include 'Backend/his_admin_config.php';
            $p_email=mysqli_real_escape_string($conn,$_POST['pat_email']);
            $p_password=md5($_POST['pat_password']);
          
            

            $sql1="SELECT * FROM hms_patient WHERE pat_email='$p_email' AND pat_password='$p_password'";
            $result1=mysqli_query($conn,$sql1) or die("Unsuccessfully....!");

            if(mysqli_num_rows($result1) > 0)
            {
                if($result1)
                {
                    session_start();
                    $uniqnuber="9ABCDEFGHIJKLMNOPQRSTUVW";
                    $_SESSION["pat_unique"]=$uniqnuber;
                   

                    $sql2="SELECT * FROM hms_patient where pat_email='$p_email'";
                    $result2=mysqli_query($conn,$sql2) or die("Unsuccessfully...!");

                    if(mysqli_num_rows($result2) > 0)

                    {
                        $row2=mysqli_fetch_assoc($result2);
                       

                            ?>
                            <script>
                                window.location.replace('patient_book_appoint.php?id=<?=$row2['pat_id'];?>');
                            </script>
                        <?php

                       
 
                    }

                        

                }
            }
            else
            {
                ?>
                <script>
                    window.location.replace('close_popup.php');
                </script>
              <?php
            }
            
         }
        ?>
    </div>
</div>
<!-- patient-refister-form -end -->


<!-- pateint eye show code here -->
<script>
    function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}
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