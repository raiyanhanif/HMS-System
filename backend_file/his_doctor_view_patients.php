<?php

include 'his_admin_header.php';

// session_start();
// include 'his_admin_header.php';
include 'his_admin_config.php';


//  $full_name=$_SESSION['doc_fname']." ".$_SESSION['doc_lname']." (". $_SESSION['doc_department'].")";
// $sql="SELECT * FROM hms_patient Where pat_doctor='$full_name'";
// session_start();

$records_per_page=3;

 // retrive the page number from the url query string

 if(isset($_GET['page']) && is_numeric($_GET['page']))
 {
   $page=$_GET['page'];
 }
 else{
   $page=1; // if no page number is set,default to the first page
 }

 $starting_record= ($page- 1) * $records_per_page;



$doc_id=$_SESSION['doc_id'];

$sql2="SELECT * FROM hms_doctors WHERE doc_id=$doc_id ";
$result2=mysqli_query($conn,$sql2) or die("Unsuccessfully....!");
$row2=mysqli_fetch_assoc($result2);

if(mysqli_affected_rows($conn) > 0)
{


  $sql="SELECT hm1.*, hm.* FROM hms_book_appoint hm1 JOIN hms_patient hm ON hm.pat_email=hm1.pat_email WHERE hm1.doc_id=$doc_id LIMIT $starting_record,$records_per_page";

  // $sql="SELECT * FROM hms_patient WHERE doc_id IN(SELECT p1.doc_id FROM hms_patient p1 WHERE p1.doc_id In(SELECT ba.doc_id FROM hms_book_appoint ba,hms_doctors d WHERE ba.doc_id=d.doc_id))";

  // $sql1="SELECT * FROM hms_book_appoint ba WHERE ba.doc_id IN (SELECT p1.doc_id FROM hms_patient p1,hms_doctors d WHERE p1.doc_id=d.doc_id)";
  
  $result=mysqli_query($conn,$sql) or die("Error :".mysqli_error($conn));



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
  table th{
    background-color:#19B3D3;
    /* color:lightgray; */
  }
</style>

<body>

  <div class="content mt-5 ">
    <div class="container-fluid mt-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PATIENTS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="his_admin_view_patients.php">View Patients</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="his_doctor_manage_patients.php">Manage patients</a>
              </li> 

              <li class="nav-item">
                <a class="nav-link" href="his_doctor_laboratory_manage.php">Manage patients</a>
              </li> 

              
            </ul>
         
          </div>
        </div>
      </nav>
      <!-- navbar-end -->
      <div class="row head_title mt-4">
        <div class="col-md-4">
          <h4>View Patient Details</h4>
        </div>
        <div class="offset-4 col-md-4">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Patients</a></li>
            <li class="breadcrumb-item active">View Patient</li>
          </ol>
        </div>
      </div>

      <!-- start form  -->
      <div class="container form bg-white ">

        <div class="row mt-5">
          <div class="search">
            <!-- <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <input type="search" name="search" placeholder=" Search here...!" class="py-2">
            <div class="btn btn-primary py-2">search</div>
            </form> -->
          </div>
          <div class="table mt-4">
            <table cellspacing="0" border="1" width="100%" cellpadding="0">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Dob</th>
           
                <th>Phone</th>
                <th>Type</th>
                <th>ailment</th>
                <th>Action</th>
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
                    <?=$row['pat_id'];?>
                  </td>
                  <td>
                    <?=$row['pat_fname'];?>
                    <?=$row['pat_lname'];?>
                  </td>
                  <td>
                    <?=$row['pat_number'];?>
                  </td>
                  <td>
                    <?=$row['pat_dob'];?>
                  </td>
                  
                  <td>
                    <?=$row['pat_phone'];?>
                  </td>
                  <td>
                    <?=$row['pat_type'];?>
                  </td>
                  <td>
                    <?=$row['pat_ailment'];?>
                  </td>
                  <td>
                    <span class="btn btn-primary"> <a href="his_admin_view_single_patient.php?id=<?=$row['pat_id'];?>&&number=<?=$row['pat_number'];?>">View</a></span>
                    <span class="btn btn-success"> <a href="his_doctor_add_single_prescription.php?number=<?=$row['pat_number'];?>">Add Prescr</a></span>



                  </td>
                </tr>
                <?php
                                    }
                                 }
                             ?>
              </tbody>
            </table>
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



<!-- second table of boo_appointmenrt data show -->
<div class="content">


<h1>Pre Appointed patients </h1>
<div class="container form bg-white ">

        <div class="row mt-5">
         
          <div class="search">
            <!-- <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <input type="search" name="search" placeholder=" Search here...!" class="py-2">
            <div class="btn btn-primary py-2">search</div>
            </form> -->
          </div>
          <div class="table mt-4">
            <table cellspacing="0" border="1" width="100%" cellpadding="0">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Number</th>
                <th>Dob</th>
           
                <th>Phone</th>
                <th>Type</th>
                <th>ailment</th>
                <th>Action</th>
              </tr>

              <tbody>
                <?php
                include 'his_admin_config.php';
                $records_per_page=3;

                // retrive the page number from the url query string
               
                if(isset($_GET['page']) && is_numeric($_GET['page']))
                {
                  $page=$_GET['page'];
                }
                else{
                  $page=1; // if no page number is set,default to the first page
                }
               
                $starting_record= ($page- 1) * $records_per_page;
               
               
                             
                // $sql="SELECT * FROM hms_patient WHERE doc_id IN(SELECT p1.doc_id FROM hms_patient p1 WHERE p1.doc_id In(SELECT ba.doc_id FROM hms_book_appoint ba,hms_doctors d WHERE ba.doc_id=d.doc_id))";

                $sql="SELECT * FROM hms_patient Where doc_id=$doc_id LIMIT $starting_record,$records_per_page";
 
                  $result=mysqli_query($conn,$sql) or die("Error :".mysqli_error($conn));
                    
                    if(mysqli_num_rows($result) > 0)
                    {
                        
                        while($row=mysqli_fetch_assoc($result))
                        {

                        

                    ?>
                <tr>
                  <td>
                    <?=$row['pat_id'];?>
                  </td>
                  <td>
                    <?=$row['pat_fname'];?>
                    <?=$row['pat_lname'];?>
                  </td>
                  <td>
                    <?=$row['pat_number'];?>
                  </td>
                  <td>
                    <?=$row['pat_dob'];?>
                  </td>
                  
                  <td>
                    <?=$row['pat_phone'];?>
                  </td>
                  <td>
                    <?=$row['pat_type'];?>
                  </td>
                  <td>
                    <?=$row['pat_ailment'];?>
                  </td>
                  <td>
                    <span class="btn btn-primary"> <a href="his_admin_view_single_patient.php?id=<?=$row['pat_id'];?>&&number=<?=$row['pat_number'];?>">View</a></span>
                    <span class="btn btn-success"> <a href="his_doctor_add_single_prescription.php?number=<?=$row['pat_number'];?>">Add Prescr</a></span>



                  </td>
                </tr>
                <?php
                                    }
                                 }
                             ?>
              </tbody>
            </table>
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
      </div>

      <?php
}
?>
</body>

</html>