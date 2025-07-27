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

if(isset($_POST['update_laboratory']))
{
    include 'his_admin_config.php';
    $lab_id=$_GET['id'];
    $lab_email=mysqli_real_escape_string($conn,$_POST['lab_email']);
    $lab_name=  mysqli_real_escape_string($conn,$_POST['lab_name']);
    $lab_password= md5($_POST['lab_password']);
    $lab_join_date= mysqli_real_escape_string($conn,$_POST['lab_join_date']);
    $lab_phone = mysqli_real_escape_string($conn,$_POST['lab_phone']);
    $lab_number= mysqli_real_escape_string($conn,$_POST['lab_number']);


    $sql="UPDATE hms_laboratory SET lab_email='$lab_email', lab_name='$lab_name', lab_password='$lab_password', lab_join_date='$lab_join_date', lab_phone='$lab_phone', lab_number='$lab_number' WHERE lab_id=$lab_id";
    $result=mysqli_query($conn,$sql) ;

    if($result)
    {
        ?>
        <script>
            window.location.replace('his_admin_view_laboratory.php');
        </script>
        <?php
    }
    else{
        die("Error:".mysqli_error($conn));
    }
                           
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
                        <h4>Manage Laboratory Details</h4>
                    </div>
                    <div class="offset-4 col-md-4">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="his_admin_view_laboratory.php">Laboratory</a></li>
                            <li class="breadcrumb-item active">Update Laboratory</li>
                        </ol>
                    </div>
            </div>

            <!-- start form  -->
            <div class="container form bg-white ">
                <div class="row mt-5">
            <?php
                include 'his_admin_config.php';
                $lab_id=$_GET['id'];

                $sql="SELECT * FROM hms_laboratory Where lab_id=$lab_id";
                $result=mysqli_query($conn,$sql) or die("Error :".mysqli_error($conn));

                if(mysqli_num_rows($result) > 0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {

               
            ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row ps-3 pe-3 pb-3 ">
                            <div class="form-group col-md-4"> 
                                <label for="inputEmail4" class="col-form-label">Laboratory Name</label>
                                <input type="text" required="required" name="lab_name" value="<?=$row['lab_name'];?>" class="form-control"
                                    id="inputEmail4" placeholder=" Laboratory Name">
                            </div>
                            <div class="form-group col-md-4"> 
                                <label for="inputEmail4" class="col-form-label">Laboratory Email</label>
                                <input type="email" required="required" name="lab_email" value="<?=$row['lab_email'];?>" class="form-control"
                                    id="inputEmail4" placeholder=" Laboratory Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="col-form-label">Laboratory password</label>
                                <input  type="text" name="lab_password" class="form-control"
                                    id="inputPassword4" placeholder="password..">
                            </div>
                        </div>


                        <div class="row ps-3 pe-3 pb-3">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">Joined date</label>
                                <input type="date" required="required" name="lab_join_date" value="<?=$row['lab_join_date'];?>" class="form-control"
                                    id="inputEmail4" placeholder="DD/MM/YYYY">
                            </div>

       
                            
                            <div class="form-group col-md-6">
                                <label for="inputPassword4" class="col-form-label">Laboratory Phone</label>
                                <input required="required" type="text" name="lab_phone" value="<?=$row['lab_phone'];?>" class="form-control"
                                    id="inputPassword4" placeholder="Laboratory Phone">
                            </div>
                        </div>


                        

                        <div class="row ps-3 pe-3 pb-3">
                            
                          
                           
                            <div class="form-group col-md-2" style="display:none">
                            <?php

                                $length = 5;
                                $lab_number = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);
                            ?>
                                <label for="inputZip" class="col-form-label">Laboratory Number</label>
                                <input type="text" name="lab_number" value="<?php echo $lab_number;?>"
                                    class="form-control" id="inputZip">
                            </div>
                        </div>


                        <button type="submit" name="update_laboratory" class="ladda-button btn btn-success mt-3 px-3 ms-3"
                            data-style="expand-right">update laboratory</button>




                    </form> <!-- form end here .  -->
                <?php
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
     const mobileInput = document.querySelector('input[name="lab_phone"]');

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