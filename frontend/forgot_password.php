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
            <img src="images/mahajan_image.png" alt="" height="300">
            <h4 style="color: orange; margin-top: 20px;">IF You are not registered in our website , you can register here from the register button.</h4>
          
      
        </div>
        <form action="" method="">
            <h3>Forgot password</h3>
            

            <div class="form-wrapper">
                <input type="text" placeholder="Email Address" class="form-control">
                <i class="zmdi zmdi-email"></i>
            </div>

      
            
         
         
            <!-- <p>Lost password <a href="lost_password.html" id="lost">Click Here!</a></p> -->
            <button class="btn"><a href="#">Login</a>
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
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


</body>
</html>