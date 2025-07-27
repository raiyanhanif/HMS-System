<?php

include 'his_admin_header.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
</head>
<style>
      .contente {
      display: none;
      margin-top: 20px;
    }
    .table-borderless th,td{
        border:1px solid gray;
    }
</style>
<body>
    <div class="content">
        <div class="container-fluid">
            <!-- row start -->
<?php
    include 'his_admin_config.php';
    $pat_id=$_GET['id'];

    $sql="SELECT * FROM hms_patient WHERE pat_id=$pat_id";
    // $sql="SELECT * FROM hms_patient hm,hms_book_appoint hm1 WHERE hm.pat_email=hm1.pat_email ";
    $result=mysqli_query($conn,$sql) or die("Unsuccessfuly...!");

    if(mysqli_num_rows($result) >  0)
    {
        while($row=mysqli_fetch_assoc($result))
        {

 
?>
          
            <div class="row mt-5">
                <div class="col-md-4">
                    <h4><?=$row['pat_fname'];?> <?=$row['pat_lname'];?>'s Profile</h4>
                </div>
                <div class="offset-4 col-md-4">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Patients</a></li>
                    <li class="breadcrumb-item active">View Patients</li>
                </ol>
                </div>
             </div><!-- row end -->


             <!-- profile start -->
            <div class="row mt-3">

                <div class="col-md-4 bg-white rounded">
                    <div class="row pt-3">
                        <div class="col-12">
                            <div class="img d-flex justify-content-center ">
                                <img src="assets/image/logo.jfif" class="rounded-circle" alt="" height="80" width="80">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12">
                            <div class="text-left ms-4 text-secondary">
                                <p class=""><strong>Full Name : </strong><?=$row['pat_fname'];?> <?=$row['pat_lname'];?></p>
                                <p class=""><strong>Mobile :</strong> <?=$row['pat_phone'];?>  </p>
                                <p class=""><strong>Address : </strong> <?=$row['pat_addr'];?> </p>
                                <p class=""><strong>Date Of Birth : </strong> <?=$row['pat_dob'];?> </p>                         
                                <p class=""><strong>Ailment : </strong> <?=$row['pat_ailment'];?></p>
                                <p class=""><strong>Number : </strong> <?=$row['pat_number'];?></p>               
                                
                                <hr>

            
                                <p class=""><strong>Date Recorded :</strong> <?=$row['pat_record_date'];?> </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>  <!-- Main div closed of profile -->
<?php
        }
    }
?>

                <!-- lab start here -->
                <div class="col-md-7 ms-4 bg-white">
                <div class="card-box mt-4 ms-3">
                                <ul class="nav nav-pills navtab-bg nav-justified">
                                <div class="btn-group" role="group" aria-label="Medical Records">

                                </div>
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary" onclick="showContent('prescription')">Prescription</button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary" onclick="showContent('vitals')">Vitals</button>
                                    </li>
                                    <li class="nav-item">
                                        <button type="button" class="btn btn-primary" onclick="showContent('laboratory')">Laboratory</button>
                                    </li>
                                </ul>
                                <!--Medical History-->
                                <div class="tab-content">
                                    <div class="tab-pane show active contente" id="prescriptionContent" >
                                        <ul class="list-unstyled timeline-sm">
                                            <?php
                                             include 'his_admin_config.php';
                                             $pat_number=$_GET['number'];
                                             $sql="SELECT * FROM hms_prescription WHERE pres_pat_number='$pat_number'";
                                             $result=mysqli_query($conn,$sql) or die("Unsuccessfully.....");


                                             if(mysqli_num_rows($result)>0)
                                             {
                                                 while($row=mysqli_fetch_assoc($result))
                                                 {

                                                    $mysqli_time= $row['pres_date'];
                                             
                                            ?>
                                          
                            
                                            <li class="timeline-sm-item">
                                                <span class="timeline-sm-date"><?php echo date("Y-m-d", strtotime( $mysqli_time));?></span>
                                                <h5 class="mt-0 mb-1"></h5>
                                                <p class="text-muted mt-2">
                                                 <?=$row['pres_ins'];?>
                                                </p>

                                            </li>
                                            <?php
                                                    
                                            }
                                        }
                                        ?>
                                          
                                        </ul>

                                    </div> <!-- end tab-pane -->
                                    
                                    <!-- end Prescription section content -->
                                    <div class="tab-pane show contente" id="vitalsContent">
                                        <div class="table-responsive">
                                            <table class="table table-borderless border border-dark mb-0">

                                            <?php
                                            $pat_num=$_GET['number'];
                                              $sql="SELECT * FROM hms_vitals WHERE vit_pat_number='$pat_num'";
                                              $result=mysqli_query($conn,$sql) or die("Unsuccessfullyy....!");


                                              if(mysqli_num_rows($result)>0)
                                              {
                                                  while($row=mysqli_fetch_assoc($result))
                                                  {

                                                    $mysqli_time=$row['vit_daterec'];

                                                
                                            ?>

                                                <thead class="thead-light" border="1">
                                                    <tr>
                                                        <th>Body Temperature</th>
                                                        <th>Heart Rate/Pulse</th>
                                                        <th>Respiratory Rate</th>
                                                        <th>Blood Pressure</th>
                                                        <th>Date Recorded</th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody>
                                                    <tr>
                                                        <td><?=$row['vit_bodytemp'];?> .c</td>
                                                        <td><?=$row['vit_heatpulse'];?> Rate/Pulse</td>
                                                        <td><?=$row['vit_resprate'];?> Resprate</td>
                                                        <td><?=$row['vit_bloodpess'];?> BPM</td>
                                                        <td> <?php echo date("Y-m-d", strtotime( $mysqli_time));?></td>
                                                        
                                                    </tr>
                                                </tbody>
                                              <?php

                                                }
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end vitals content-->

                                    
                                    
                                    <!-- end vitals content-->

                                    <div class="tab-pane contente" id="laboratoryContent">
                                        <ul class="list-unstyled timeline-sm">
                                     <?php
                                        include 'his_admin_config.php';
                                        $lab_pat_number=$_GET["number"];
                                        $sql="SELECT * FROM hms_labtest WHERE lab_pat_number='$lab_pat_number'";
                                        $result=mysqli_query($conn,$sql) or die("Unsuccessfully...!");


                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            while($row=mysqli_fetch_assoc($result))
                                            {

                                                $mysqldatetime=$row['lab_date_rec'];

                                         
                                     ?>
                                                <span class="timeline-sm-date"></span>
                                                <h3 class="mt-0 mb-1"></h3>
                                                <hr>
                                                <h5>
                                                    Laboratory Tests
                                                </h5>

                                                <p class="text-muted mt-2">
                                                   <?=$row['lab_pat_test'];?>
                                                </p>
                                                <hr>
                                                <h5>
                                                    Laboratory Results
                                                </h5>

                                                <p class="text-muted mt-2">
                                                 <?=$row['lab_pat_result'];?>
                                                </p>
                                                <hr>

                                            </li>
                                        <?php
                                           }
                                        }
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- end lab records content-->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                </div>
                <!-- lab end here -->


            </div><!-- row end div -->  <!-- profile end -->
            



          

        </div><!-- container-fluid end -->
     
    </div> <!-- content div end -->

    <!-- javascript of content button -->
    <script>
        function showContent(contentType) {
            // Hide all content divs
            document.querySelectorAll('.contente').forEach(function(content) {
            content.style.display = 'none';
            });

            // Show the selected content
            document.getElementById(contentType + 'Content').style.display = 'block';
        }
</script>
    </script>
</body>
</html>



