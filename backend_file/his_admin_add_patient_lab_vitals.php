<?php

include 'his_admin_header.php';



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


 if(isset($_POST['search']))
 {
   $search=mysqli_real_escape_string($conn,$_POST['search']);
 
 
   $sql="SELECT * FROM hms_patient WHERE pat_id LIKE '%$search' OR pat_fname LIKE '%$search' OR pat_lname LIKE '%$search' OR  pat_record_date LIKE '%$search' OR pat_ailment LIKE '%$search' OR pat_type LIKE '%$search' OR pat_dob LIKE '%$search'  ORDER BY pat_id ASC";
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
  table th{
    background-color:#19B3D3;
    /* color:lightgray; */
  }
</style>

<body>

  <div class="content mt-5 ">
    <div class="container-fluid mt-5">
      
      <!-- navbar-end -->
      <div class="row head_title mt-4">
        <div class="col-md-4">
          <h4>Laboratory Patient Vitals </h4>
        </div>
        <div class="offset-4 col-md-4">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="his_admin_add_patient_lab_test.php">Laboratory</a></li>
            <li class="breadcrumb-item active">View Laboratory</li>
          </ol>
        </div>
      </div>

      <!-- start form  -->
      <div class="container form bg-white ">

        <div class="row mt-5">
        <div class="search">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="text" name="search" placeholder=" Search here...!" class="py-2">
                    <button type="submit" class="btn btn-primary">search</button>
                    </form>
                </div> 
          <div class="table mt-4">
            <table cellspacing="0" border="1" width="100%" cellpadding="0">
              <tr>
                <th>Id</th>
                <th>Patient Name</th>
                <th>Patient Number</th>
                <th>patient Ailment</th>
                <th>Patient Lab Test Conducted</th>
                <th>Patient Category</th>
                <th>Patient DOB </th>
                <th>Action</th>

              </tr>

              <tbody>
                <?php
                               
                                if(mysqli_num_rows($result) > 0)
                                {
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {

                                        $mysqli_time=$row['pat_record_date'];

                                    

                                ?>
                <tr>
                  <td>
                    <?=$row['pat_id'];?>
                  </td>
                  <td>
                    <?=$row['pat_fname'];?> <?=$row['pat_lname'];?>
                
                  </td>
                  <td>
                    <?=$row['pat_number'];?>
                
                  </td>
                  <td>
                    <?=$row['pat_ailment'];?>
                
                  </td>
                 
                  <td>
                    <?php echo date("Y-m-d", strtotime( $mysqli_time));?>
                  </td>
                  <td>
                    <?=$row['pat_type'];?>
                  </td>
                  <td>
                    <?=$row['pat_dob'];?>
                  </td>
                  
                 
                  
                  
                  <td>
                    <span class="btn btn-success"> <a href="his_laboratory_add_single_patinet_lab_vitals.php?number=<?=$row['pat_number'];?>">Add Lab vitals</a></span>
                    

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
  
</body>

</html>