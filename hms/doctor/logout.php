<?php
session_start();
include('include/config.php');
$_SESSION['dlogin']=="";
$ldate=date( 'd-m-Y h:i:s A', time () );
$did=$_SESSION['id'];
mysqli_query($conn,"UPDATE doctorslog  SET logout = '$ldate' WHERE uid = '$did' ORDER BY id DESC LIMIT 1");
session_unset();
echo "<script>alert('You have successfully logout')</script>";
?>
<script language="javascript">
document.location="../../index.php";
</script>
