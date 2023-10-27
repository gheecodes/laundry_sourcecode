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
<h3 class="text-primary">Customer Details</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Customer Management</li>
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
<form class="form-horizontal" method="POST" action="pages/save_customer.php" name="userform" enctype="multipart/form-data">

<input type="hidden" name="currnt_date" class="form-control" value="<?php echo $currnt_date;?>">

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Customer  Name</label>
<div class="col-sm-9">
<input type="text" name="fname" class="form-control" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Customer Surname</label>
<div class="col-sm-9">
<input type="text"  name="lname" id="lname" class="form-control" id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" required="">
</div>
</div>
</div>





<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Contact no.</label>
<div class="col-sm-9">
<input type="text" name="contact" class="form-control" placeholder="Contact Number" id="tbNumbers" minlength="10" maxlength="10" onkeypress="javascript:return isNumber(event)" required="">
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<label class="col-sm-3 control-label">Address</label>
<div class="col-sm-8">
<textarea class="form-control" rows="4" name="address" placeholder="Address" style="height: 80px;"></textarea>
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



