<?php include('head.php');?>
<?php include('header.php');?>
<?php include ('connect.php');?>
<?php include('sidebar.php');?>   
<?php //echo  $_SESSION["email"];
 date_default_timezone_set('Asia/Kolkata');
 $current_date = date('Y-m-d');

 $sql_currency = "select * from manage_website"; 
             $result_currency = $conn->query($sql_currency);
             $row_currency = mysqli_fetch_array($result_currency);
?>    
        <!-- Page wrapper  -->
        <div class="page-wrapper">
             <?php include 'social_link.php'; ?> 
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Owner Dashboard</h3> 

                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <marquee scrollamount=4><b></b></marquee>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
        

     



                      <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-bag f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                  <?php 

                        $sql= "select * from `order` where `todays_date`= '".date('Y-m-d')."'";
                    $res=$conn->query($sql);
              $num_rows = mysqli_num_rows($res);
            ?>

                                  
                                    <h2 class="color-white">  
                                     <?php

                                      echo $num_rows 

                                             ?>


                                    </h2>
                                    <p class="m-b-0">New orders</p>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="col-md-4">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-comment f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    
                                    <?php 
                        $sql= "select * from `order` where `delivery_status`='0'";
                    $res=$conn->query($sql);
              $num_rows = mysqli_num_rows($res);
            ?>

                                  
                                    <h2 class="color-white">  
                                     <?php

                                      echo $num_rows 

                                             ?>

                              </h2>
                                    <p class="m-b-0">Inprogress</p>
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-md-4">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-vector f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php 
                        $sql= "select * from `order` where `delivery_status`='1' ";
                    $res=$conn->query($sql);
              $num_rows = mysqli_num_rows($res);
            ?>

                                  
                                    <h2 class="color-white">  
                                     <?php

                                      echo $num_rows 

                                             ?>

                                                

                                    </h2>
                                    <p class="m-b-0">Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>

        </div>
        <div class="card">
<div class="card-body">
<div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Orders Status</h3> </div>
<div class="table-responsive m-t-40">
<table id="myTable" class="table table-bordered table-striped">
<thead>
<tr>
<th>id</th>
<th>customer Name</th>
<!-- <th>Last Name</th> -->
<th>service name</th>
<th>Disciption</th>
<th>PRIZE</th>
<th>Dilivery Date</th>
<th>pickup date</th>
<th>status</th>

<!-- <th>discription</th>  
<th>Pick up date</th>
<th>Dilivery date</th> -->
</tr>
</thead>
<tbody>
<?php 
include 'connect.php';
$sql = "SELECT * FROM `order`";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())

{
$sql1 = "SELECT * FROM `service` where id='".$row['sname']."'" ;
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();

$sql2 = "SELECT * FROM `customer` where 
id='".$row['fname']."'";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row2['fname']; ?></td>
<!-- <td><?php echo $row['lname']; ?></td> -->
<td><?php echo isset($row1['sname']) ? $row1['sname'] : "N/A"; ?></td>

<td><?php echo $row['discription']; ?></td>
<td><?php echo $row['prizes']; ?></td>
<td><?php echo $row['delivery date']; ?></td>
<td><?php echo $row['todays_date']; ?></td>
<?php if ($row['delivery_status']==0) {
?>
<td>pending</td>
<?php } 
else{

?>
<td>completed</td>
<?php }?>
<td>
<?php if ($row['delivery_status']==0) {
?>

<?php }?>





<!-- <a href="assign_role.php?id=<?=$row['id'];?>"><button type="button" class="btn btn-xs btn-danger" ><i class="fa fa-pay"></i></button></a> -->
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>

            <!-- End Container fluid  -->
            <?php include('footer.php');?>

