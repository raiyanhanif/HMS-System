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


  $sql="SELECT * FROM hms_patient WHERE pat_id LIKE '%$search' OR pat_fname LIKE '%$search' OR pat_lname LIKE '%$$search' OR pat_number LIKE '%$search' OR  pat_dob LIKE '%$search' OR pat_email LIKE '%$search' OR pat_phone LIKE '%$search' OR pat_type LIKE '%$search' OR  pat_ailment LIKE '%$search' ORDER BY pat_id ASC";
  $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");
}
else
{
  $sql="SELECT * FROM hms_patient ORDER By pat_id ASC LIMIT $starting_record,$records_per_page";
  $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");
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
  .ac{
    width:170px;
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
                <a class="nav-link" href="his_admin_add_patients.php">Add patients</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="his_admin_patient_transfer.php">Patient Transfer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="his_admin_view_single_patient_transfer.php">View Patient Transfer</a>
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
                <th>Dob</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Type</th>
                <th>Assign_Doctor</th>
                

                <th class="ac">Action</th>
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
                    <?=$row['pat_email'];?>
                  </td>
                  <td>
                    <?=$row['pat_phone'];?>
                  </td>
                  <td>
                    <?=$row['pat_type'];?>
                  </td>
                  <td>
                    <?=$row['pat_doctor'];?>
                  </td>
                  
                  <td>
                    <span class=" " style="padding:5px"> <a style="text-decoration:none; color:#002E45" href="his_admin_view_single_patient.php?number=<?=$row['pat_number'];?>&&id=<?=$row['pat_id']?>"><i class="fa fa-eye fs-4"></i></a></span>&nbsp;&nbsp;
                    <span><a style="text-decoration:none; color:orange" href="his_admin_update_patients.php?id=<?=$row['pat_id'];?>"><i class="fa fa-edit fs-4"></i></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><a style="text-decoration:none; color:red" href="his_admin_delete_patient.php?id=<?=$row['pat_id'];?>" onclick="return del() "><i class="fa fa-trash-o fs-4"></i></a></span>
                                        

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
  <script>
     function del()
     {
         return window.confirm("Are You Sure Want to delete this recortd...!");
     }
 </script>
</body>

</html>