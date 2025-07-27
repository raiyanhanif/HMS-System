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
 
   $sql="SELECT * FROM  hms_pharmacy WHERE phar_id LIKE '%$search' OR phar_name LIKE '%$search' OR phar_bcode LIKE '%$search' OR phar_qty LIKE '%$search' OR phar_cat LIKE '%$search'  OR phar_vendor LIKE '%$search' ";
   $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");
 }
 else
 {
  $sql="SELECT * FROM  hms_pharmacy ORDER By phar_id ASC LIMIT $starting_record,$records_per_page";
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
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PHARMACEUTICALS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="his_admin_add_pharmaceuticals.php">Add Pharmacy</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="his_admin_add_pharmacy_category.php">Add category</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="his_admin_view_pharmacy_category.php">View category</a>
              </li>
            
            </ul>
         
          </div>
        </div>
      </nav>
      <!-- navbar-end -->
      <div class="row head_title mt-4">
        <div class="col-md-4">
          <h4>View Pharmacy Details</h4>
        </div>
        <div class="offset-4 col-md-4">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="">Pharmacy</a></li>
            <li class="breadcrumb-item active">View Pharmacy</li>
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
                <th>Barcode</th>
                <th>Quntity</th>
                <th>Category</th>
                <th>Vendor</th>
               
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
                    <?=$row['phar_id'];?>
                  </td>
                  <td>
                    <?=$row['phar_name'];?>

                  </td>
                  <td>
                    <?=$row['phar_bcode'];?>
                  </td>
                  <td>
                    <?=$row['phar_qty'] ;?> Cartons
                  </td> 
                  <td>
                    <?=$row['phar_cat'];?>
                  </td>
                  <td>
                    <?=$row['phar_vendor'];?>
                  </td>
               
                  <td>
                    <span class="btn btn-danger"> <a href="his_admin_delete_pharmaceuticals.php?id=<?=$row['phar_id']?>"  onclick="return del()"><i class="fa fa-trash-o fs-4"></i></a></span>


                  </td>
                </tr>
                
              </tbody>
              <?php
                    }
                  }
              ?>
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