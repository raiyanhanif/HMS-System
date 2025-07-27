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
            
        </div>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
            <h3>Login Form</h3>
            
            <div class="form-wrapper">
                <input type="email" placeholder="Email Address" name="ad_email" class="form-control" required>
                <i class="zmdi zmdi-email"></i>
            </div>
            
            <div class="form-wrapper">
                <input type="password" placeholder="Password" name="ad_password" class="form-control" id="myInput" required>
                <i class="zmdi zmdi-eye" onclick="myFunction()"></i>
            </div>

            <div class="form-wrapper">
                <select name="role" id="" class="form-control" required>
                    <option value="" disabled selected>role</option>
                    <option value="admin">admin</option>
                    <option value="doctor">doctor</option>
                    <option value="laboratory">laboratory</option>
                   
                </select>
                <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
            </div>
            
            <p>Forgot Password <a href="">Click here..!</a></p>
         
            <!-- <p>Lost password <a href="lost_password.html" id="lost">Click Here!</a></p> -->
            <button class="btn" name="submit" id="submitBtn">Login
                <i class="zmdi zmdi-arrow-right"></i>
            </button>

        </form>

        <!-- here star php code  -->

        <?php
         if(isset($_POST['submit']))
         {
             session_start();
              include 'Backend/his_admin_config.php';
              
              $email=mysqli_real_escape_string($conn,$_POST['ad_email']);
              $password=md5($_POST['ad_password']);
              $role=mysqli_real_escape_string($conn,$_POST['role']);

              if($_POST['role']=="doctor")
              {
                  $sql="SELECT * FROM hms_doctors where doc_email='$email' AND doc_password='$password' AND role='$role'";
                  $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");

                  if(mysqli_num_rows($result) > 0)
                  {
                      while($row=mysqli_fetch_assoc($result))
                      {
                          $_SESSION['doc_id']=$row['doc_id'];
                          $_SESSION['doc_email']=$row['doc_email'];
                          $_SESSION['doc_role']=$row['role'];
                          $_SESSION['doc_fname']= $row['doc_fname'];
                          $_SESSION['doc_lname']=$row['doc_lname'];
                          $_SESSION['doc_department']=$row['doc_department'];
                          $_SESSION['fname']=$row['doc_fname'];
                                                    //   $_SESSION['fname']=$row['doc_fname']+" "+$row['doc_lname']+" ("+$row['doc_department']+")";

                          ?>
                            <script>
                                window.location.replace('Backend/his_doctor_view_patients.php');
                            </script>
                          <?php
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
              elseif($_POST['role']=="admin")
              {
                $sql="SELECT * FROM hms_admin where ad_email='$email' AND ad_password='$password' AND role='$role'";
                $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");

                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $_SESSION['ad_email']=$row['ad_email'];
                        $_SESSION['ad_role']=$row['role']

                        ?>
                          <script>
                              window.location.replace('Backend/his_admin_dashboard.php');
                          </script>
                        <?php
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

            //   laboratory login page
     
            elseif($_POST['role']=="laboratory")
            {
              $sql="SELECT * FROM hms_laboratory where lab_email='$email' AND lab_password='$password' AND role='$role'";
              $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");

              if(mysqli_num_rows($result) > 0)
              {
                  while($row=mysqli_fetch_assoc($result))
                  {
                      $_SESSION['lab_email']=$row['lab_email'];
                      $_SESSION['lab_role']=$row['role']

                      ?>
                        <script>
                            window.location.replace('Backend/his_admin_add_patient_lab_test.php');
                        </script>
                      <?php
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

              
         }

            
        ?>

        <!-- here end php code -->
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
	const emailInput = document.querySelector('input[name="ad_email"]');
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