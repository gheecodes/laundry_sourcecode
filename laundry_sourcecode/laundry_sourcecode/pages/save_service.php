<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('../connect.php');
/*$passw = hash('sha256', $_POST['password']);*/
//$passw = hash('sha256',$p);
//echo $passw;exit;
function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
/*$pass = hash('sha256', $salt . $passw);
*/
/*$image = $_FILES['image']['name'];*/
/*$target = "../uploadImage/Profile/".basename($image);*/

/*if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {*/
 // @unlink("uploadImage/Profile/".$_POST['old_image']);
    /*  $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }*/
extract($_POST);

  $sql="INSERT INTO `service`(`sname`, `prize`) VALUES ('$sname','$prize')";


 if ($conn->query($sql) === TRUE)
  {
      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="../view_services.php";
</script>
<?php
} else 
{
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="../view_services.php";
</script>
<?php } ?>