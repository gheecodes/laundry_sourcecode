  <?php include('head.php');?>

  <?php include('header.php');?>
  <?php include('sidebar.php');?>

  <?php
  include('connect.php');
  date_default_timezone_set('Asia/Kolkata');
  $current_date = date('Y-m-d');

  ?>





  <!-- Page wrapper  -->
  <div class="page-wrapper">
  <!-- Bread crumb -->
  <div class="row page-titles">
  <div class="col-md-5 align-self-center">
  <h3 class="text-primary">Order Details</h3> </div>
  <div class="col-md-7 align-self-center">
  <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
  <li class="breadcrumb-item active">Order Management</li>
  </ol>
  </div>
  </div>
  <!-- End Bread crumb -->
  <!-- Container fluid  -->
  <div class="container-fluid">
  <!-- Start Page Content -->

  <!-- /# row -->
  <div class="row">
  <div class="col-lg-8" style="    margin-left: 10%;">
  <div class="card">
  <div class="card-title">

  </div>
  <div class="card-body">
  <div class="input-states">
  <form class="form-horizontal" method="POST" action="pages/save_order.php" name="userform" enctype="multipart/form-data">

  <input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">

  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">customer  Name</label>
  <div class="col-sm-9">
  <select name="fname" id="event" class="form-control" required="">



  <option value=" ">--Select customer--</option>
  <?php  
  $sql2 = "SELECT * FROM customer where id!=1";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'];?>"><?php echo $row2['fname'].' '.$row2['lname'];?> </option>
  <?php } ?>
  </select>




  </div>
  </div>
  </div>




  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Service Name</label>
  <div class="col-sm-9">
  <select name="sname" id="sname" class="form-control" required="" onchange="s();">



  <option value=" ">--Select service--</option>
  <?php  
  $sql2 = "SELECT * FROM service where id!=1";
  $result2 = $conn->query($sql2); 
  while($row2= mysqli_fetch_array($result2)){
  ?>
  <option value ="<?php echo $row2['id'].','.$row2['prize'];?>"><?php echo $row2['sname'];?> </option>
  <?php } ?>
  </select>
</div>
  </div>
  </div>

<!--  Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
PHP, Laravel and Codeignitor Developer -->
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Description</label>
  <div class="col-sm-8">
  <textarea class="form-control" rows="4" name="description" placeholder="Description" style="height: 80px;"></textarea>
  </div>
  </div>
  </div>

  



  </div>
  </div>
  </div> 
  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">PRICE</label>
  <div class="col-sm-9">
    <input type="number" name="prizes" id="prizes" readonly>
  </div>
  </div>
  </div>




  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Delivery Date</label>
  <div class="col-sm-9">
  <input type="date" name="dod" class="form-control" placeholder="Delivery Date">
  </div>
  </div>
  </div>


<div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Todays Date</label>
  <div class="col-sm-9">
  <input  name="todays_date" class="form-control"  value="<?php echo date('y/m/d'); ?>">
  </div>
  </div>
  </div>




  <button type="submit" name="btn_save" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
  </form>
  </div>
  </div>
  </div>
  </div>

  </div>




  <?php include('footer.php');?>



<script>
  function s() {
    //alert($('#sname').val());
    var sname=$('#sname').val();
    var price=sname.split(',');
    $('#prizes').val(price[1]);
  }
</script>