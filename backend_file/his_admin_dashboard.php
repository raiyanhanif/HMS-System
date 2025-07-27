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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Management System</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <!-- ====>> bootstrap link <<========= -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <!-- =======>> css link of header <<======= -->
  <link rel="stylesheet" href="assets/css/header.css">


  <!-- css of admin_dashboard -->
  <link rel="stylesheet" href="assets/css/his_admin_dashboard.css">

  <!-- font awesome icon -->
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

  <!-- font-awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">


</head>
<style>
  .breadcrumb li a {
    text-decoration: none;
  }

  .form {
    padding: 20px;
    border-radius: 10px
  }

  table th{
    background-color:#19B3D3;
    /* color:lightgray; */
  }

  .table span a {
    text-decoration: none;
    color: white;
  }

  .table table th,
  td {
    border: 1px solid gray;
    padding: 5px;
    text-align: center;
  }

  .ac {
    width: 170px;
  }
</style>

<body>
  <div class="content pt-5">
    <h5> Hospital Management System Dashboard </h5>
    <div class="main-box mt-4">

      <!-- =======>> for out patient <<============ -->

      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class="fa fa-wheelchair  fw-bold font-22 avatar-title"></i>
          </div>
          <div class="patient">
            <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_patient WHERE pat_type='OutPatient'";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_records=$row_count['total'];
            ?>
            <label for=""><?= $total_records ?></label>
            <p>OutPatient</p>
          </div>
        </div>
      </div>

      <!-- =========>> for out patient end ==========>> -->

      <!-- =========>>for in patient start =============>> -->
      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class="fa fa-bed"></i>
          </div>
          <div class="patient">
          <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_patient WHERE pat_type='InPatient'";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_indor_records=$row_count['total'];
            ?>
            <label for=""><?= $total_indor_records;?></label>
            <p>InPatient</p>
          </div>
        </div>
      </div>

      <!-- =========>>for in patient end =============>> -->

      <!-- ============>> for hospital employee start<<========= -->
      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class="fa fa-user"></i>
          </div>
          <div class="patient">
          <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_employee";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_employees=$row_count['total'];
            ?>
            <label for=""><?= $total_employees ?></label>
            <p>Employee</p>
          </div>
        </div>
      </div>
      <!-- ============>> for hospital employee end<<========= -->

    </div>


    <!-- ==================>> second-portion <<============= -->
    <div class="main-box mt-4">

      <!-- =======>> for vendor patient <<============ -->

      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class="fa fa-user-md"></i>
          </div>
          <div class="patient">
          <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_doctors";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_doctors=$row_count['total'];
            ?>
            <label for=""><?=$total_doctors;?></label>
            <p>Doctors</p>
          </div>
        </div>
      </div>

      <!-- =========>> for vendor patient end ==========>> -->

      <!-- =========>>for corporation assets start =============>> -->
      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class="fa fa-flask"></i>
          </div>
          <div class="patient">
          
            <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_laboratory";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_laboratory=$row_count['total'];
            ?>
            <label for=""><?= $total_laboratory; ?></label>
            <p>Laboratory</p>
          </div>
        </div>
      </div>

      <!-- =========>>for corporation assets end =============>> -->

      <!-- ============>> for pharmaceuticals start<<========= -->
      <div class="box1">
        <div class="box d-flex">
          <div class="icon">
            <i class='fa fa-flask'></i>
          </div>
          <div class="patient">
          <?php
            include 'his_admin_config.php';
              $sql="SELECT COUNT(*) AS total from hms_pharmacy";
              $result_count=mysqli_query($conn,$sql) or die("Unsuccessfully...!");
               $row_count=mysqli_fetch_assoc($result_count);
               $total_pharmacy=$row_count['total'];
            ?>
            <label for=""><?=$total_pharmacy;?></label>
            <p>Phramacy</p>
          </div>
        </div>
      </div>
      <!-- ============>> for pharmaceuticals end<<========= -->

    </div>



    <!-- =================>> Hospital Employee<<===================================== -->
    <div class="row head_title mt-5">
      <div class="col-md-5">
        <h4>View Appointment Patient Details</h4>
      </div>
      
    </div>

    <!-- start form  -->
    <div class="container form bg-white ">
<?php
include 'his_admin_config.php';

$records_per_page=10;

// retrive the page number from the url query string

if(isset($_GET['page']) && is_numeric($_GET['page']))
{
  $page=$_GET['page'];
}
else{
  $page=1; // if no page number is set,default to the first page
}

$starting_record= ($page- 1) * $records_per_page;
if(isset($_POST['search']))
{
  $search=mysqli_real_escape_string($conn,$_POST['search']);


  $sql="SELECT hm1.book_id,hm1.pat_email, hm1.pat_doctor, hm1.appointment_date, hm1.appointment_time, hm1.time_select, hm1.book_date, hm.pat_fname,hm.pat_lname,hm.pat_number,hm1.appointment_date,hm1.appointment_time,hm1.time_select,hm1.book_date,hm1.status FROM hms_patient hm, hms_book_appoint hm1 WHERE hm.pat_email=hm1.pat_email";
  $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");
}

else
{



$sql="SELECT hm1.book_id,hm1.pat_email, hm1.pat_doctor, hm1.appointment_date, hm1.appointment_time, hm1.time_select, hm1.book_date, hm.pat_fname,hm.pat_lname,hm.pat_number,hm1.appointment_date,hm1.appointment_time,hm1.time_select,hm1.book_date,hm1.status FROM hms_patient hm, hms_book_appoint hm1 WHERE hm.pat_email=hm1.pat_email  LIMIT $starting_record,$records_per_page";
$result=mysqli_query($conn,$sql) or die("Error :".mysqli_error($conn));
}
?>
      <div class="row mt-5">
        <div class="search">
          <form action="" method="post">
            <input type="text" name="search" placeholder=" Search here...!" class="py-2">
            <button type="submit" class="btn btn-primary">search</button>
          </form>
        </div>
        <div class="table mt-4">
          <table cellspacing="0" border="1" width="100%" cellpadding="0">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Number</th>

              <th>Email</th>
              <th>Assign Doctor</th>
              <!-- <th>Type</th> -->
              <th>Appointment date</th>
              <th>Appointment Time</th>
              <th>Time Select</th>
              <th>Boo date</th>
              <th>Approvel</th>
              <th>Status</th>

            </tr>

            <tbody>
              <?php
                  
            if(mysqli_num_rows($result) > 0)
            {
                
                while($row=mysqli_fetch_assoc($result))
                {

                

            ?>
              <tr>
                <td>
                  <?=$row['book_id'];?>
                </td>
                <td>
                  <?=$row['pat_fname'];?>
                  <?=$row['pat_lname'];?>
                </td>
                <td>
                  <?=$row['pat_number'];?>
                </td>
                <td>
                  <?=$row['pat_email'];?>
                </td>
                <td>
                  <?=$row['pat_doctor'];?>
                </td>
                <td>
                  <?=$row['appointment_date'];?>
                </td>
                <td>
                  <?=$row['appointment_time'];?>
                </td>

                <td>
                  <?=$row['time_select'];?>
                </td>

                <td>
                  <?=$row['book_date'];?>
                </td>
                <td>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="book_id" value="<?=$row['book_id'];?>">
                    <?php
                        if($row['status'] !='Approve')
                        {
                          ?>
                    <button class="btn btn-primary" type="submit" name="approve_checkbox">Approve</button>
                    <?php
                        }
                        else
                        {
                          ?>
                    <button type="button" class="btn btn-primary" disabled>Aprrove</button>
                    <?php
                        }
                        ?>

                  </form>
                </td>

                <td>
                  <?=$row['status'];?>
                </td>



              </tr>
              <?php
                                    }
                                 }
                             ?>
            </tbody>
          </table>
          <?php
              if(isset($_POST["approve_checkbox"]))
              {
                
                include 'his_admin_config.php';
                $book_id=mysqli_real_escape_string($conn,$_POST['book_id']);

                $status="Approve";
                $sql="UPDATE hms_book_appoint SET status='$status' Where book_id=$book_id";
                $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");

                if($result)
                {
                  //send email to the patient
                  $sql="SELECT * FROM hms_book_appoint Where book_id=$book_id";
                  $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");

                  $row=mysqli_fetch_assoc($result);

                  $to=$row['pat_email'];
                  $subject="Your Appointment is Approved";
                  $message="Dear \n\n Your appointment has been approved.\n\nAppointment Deatils:\nTime Slot: ".$row['appointment_time']."\nAppointment date: ".$row['appointment_date']."\nAppointment Doctor: ".$row['pat_doctor'];
                  $headers="From: nodoliyaraiyan9712@gmail.com";

                  mail($to,$subject,$message,$headers);

                  ?>
          <script>
            alert("Status updated successfully and email sent to the patient")
            window.location.replace('his_admin_dashboard.php');
          </script>
          <?php
                }
              }
            ?>

        </div>
        <?php
               //pagination links

               $sql_count="SELECT COUNT(*) AS total from hms_patient";
               $result_count=mysqli_query($conn,$sql_count);
               $row_count=mysqli_fetch_assoc($result_count);
               $total_records=$row_count['total'];
               $total_pages = ceil($total_records / $records_per_page);

               echo '<ul class="pagination justify-content-center mt-3">';

               if($page > 1)
               {
                 echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).'">Previous</a></li>';
               }
               for ($i=1; $i<= $total_pages; $i++)
               {
                 echo '<li class="page-item '.($page == $i ? "active" : "").' "><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
               }
               if($page < $total_pages)
               {
                 echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).'">Next</a></li>';
               }

               echo '</ul>';
            ?>
      </div>
    </div>

    <!-- end form -->
  </div>
  </div>
  <script>
    function del() {
      return window.confirm("Are You Sure Want to delete this recortd...!");
    }
  </script>
</body>

</html>









<!-- ======>> Script Link <<============ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body> -->
<!-- ===========>> footer link is below <<============= -->

</div>
<!-- content-end -->
</body>

</html>