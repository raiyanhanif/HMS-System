<?php
   include 'his_admin_header.php';

?>
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


  $sql="SELECT * FROM hms_patient_transfer ORDER By t_id ASC LIMIT $starting_record,$records_per_page";
  $result=mysqli_query($conn,$sql) or die("Unsuccessfully....!");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head><style>
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
     
      <div class="row head_title mt-4">
        <div class="col-md-4">
          <h4>Rfferal Transfer Patients Details</h4>
        </div>
        <div class="offset-4 col-md-4">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="his_admin_view_patients.php">Patients</a></li>
            <li class="breadcrumb-item active">View Patient</li>
          </ol>
        </div>
      </div>

      <!-- start form  -->
      <div class="container form bg-white ">

        <div class="row mt-5">
          <div class="search">
            
          </div>
          <div class="table mt-4">
            <table cellspacing="0" border="1" width="100%" cellpadding="0">
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Number</th>
               
                <th>Transfer Hospital Name</th>
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
                    <?=$row['t_id'];?>
                  </td>
                  <td>
                    <?=$row['t_pat_name'];?>
                    
                  </td>
                  <td>
                    <?=$row['t_pat_number'];?>
                  </td>
                 
                  <td>
                    <?=$row['t_hospital'];?>
                  </td>
                  <td>
                    <span class="btn btn-danger"> <a href="his_admin_delete_single_patient_transfer.php?id=<?=$row['t_id']?>"  onclick="return del()"><i class="fa fa-trash-o fs-4"></i></a></span>


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
