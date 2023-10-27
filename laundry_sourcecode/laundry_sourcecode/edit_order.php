<?php 
/*echo "string"; exit;*/
include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>

<?php
include('connect.php');
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');

/*if(isset($_POST["btn_update"]))
{
extract($_POST);
$image = $_FILES['image']['name'];
$target = "uploadImage/Profile/".basename($image);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
@unlink("uploadImage/Profile/".$_POST['old_image']);
$msg = "Image uploaded successfully";
}else{
$msg = "Failed to upload image";
}*/
if (isset($_POST["btn_update"])) 
{
  # code...
extract($_POST);
$sname=$_POST['sname'];
$exp=explode(',', $sname);

/*$q1="UPDATE `order` SET `id`='$id',`fname`='$fname',`sname`='$sname',`discription`='$discription',`prizes`='".$exp[0]."',`delivery date`='$dod' WHERE `id`='".$_GET['id']."'";
*/



$q1= "UPDATE `order` SET `fname`='$fname',`sname`='".$exp[0]."',`discription`='$discription',`prizes`='".$exp[1]."',`delivery date`='$dod' WHERE `id`='".$_GET['id']."'";


//$q2=$conn->query($q1);




if ($conn->query($q1) === TRUE) 
{
$_SESSION['success']=' Record Successfully Updated';
?>
<script type="text/javascript">
window.location="view_order.php";
</script>
<?php
} else 
{
$_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="view_order.php";
</script>
<?php
}

}
?>


<?php
$que="SELECT * FROM `order` WHERE id='".$_GET["id"]."'";

$query=$conn->query($que);
while($row=mysqli_fetch_array($query))
{
//print_r($row);
extract($row);
$fname = $row['fname'];
$sname = $row['sname'];

$discription= $row['discription'];

$prizes = $row['prizes'];
$dod = $row['delivery date'];

}

?> 





<!-- Page wrapper  -->
<div class="page-wrapper">
<!-- Bread crumb -->
<div class="row page-titles">
<div class="col-md-5 align-self-center">
<h3 class="text-primary">order Management</h3> </div>
<div class="col-md-7 align-self-center">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
<li class="breadcrumb-item active">Add order Management</li>
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
<form class="form-horizontal" method="POST" enctype="multipart/form-data" name="userform">

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
  <option value ="<?php echo $row2['id'];?>" <?php if($row2['id']==$fname){ echo "selected"; }?>><?php echo $row2['fname'].' '.$row2['lname'];?> </option>
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
  <option value ="<?php echo $row2['id'].','.$row2['prize'];?>" <?php if($row2['id']==$sname){ echo "selected"; }?>> <?php echo $row2['sname'];?> </option>
  <?php } ?>
  </select>
</div>
  </div>
  </div>






  <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">Discription</label>
  <div class="col-sm-8">
<textarea class="form-control" rows="4" name="discription" style="height: 80px;" placeholder="Discription">
    <?php echo $discription; ?>

  </textarea>



  </div>
  </div>
  </div>


 <div class="form-group">
  <div class="row">
  <label class="col-sm-3 control-label">PRICE</label>
  <div class="col-sm-9">
    <input type="number" name="prizes" id="prizes" value ="<?php echo $prizes;?>">
  </div>
  </div>
  </div>




<div class="form-group">
  <div class="row">


  <label class="col-sm-3 control-label">Delivery Date</label>
  <div class="col-sm-9">
  <input type="date" name="dod" class="form-control" placeholder="Delivery Date" 
  value= "<?php echo $dod; ?>"></div>
  </div>
  </div>




<button type="submit" name="btn_update" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
</form>
</div>
</div>
</div>
</div>

</div>


<!-- /# row -->

<!-- End PAge Content -->


<?php include('footer.php');?>








<script>
  function s() {
    //alert($('#sname').val());
    var sname=$('#sname').val();
    var price=sname.split(',');
    $('#prizes').val(price[1]);
  }
</script>