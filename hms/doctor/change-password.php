<?php
session_start();
error_reporting(0);
include('include/config.php');
if(isset($_POST['submit']))
{
	//echo "hi";
	
	$cpass=$_POST['cpass'];
	$did=$_SESSION['id'];
	//echo "did= ".$did;
	$sql=mysqli_query($conn,"SELECT password FROM  doctors where password='$cpass' && id='$did'");
	$num=mysqli_fetch_array($sql);

	if($num>0)
	{
	$npass=$_POST['npass'];
 	$conn=mysqli_query($conn,"update doctors set password='$npass',  where id='$did'");

	echo "<script>alert('Password changed successfully!!')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor  | change Password</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<script type="text/javascript">
function valid()
{
if(document.chngpwd.cpass.value=="")
{
alert("Current Password Filed is Empty !!");
document.chngpwd.cpass.focus();
return false;
}
else if(document.chngpwd.npass.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npass.focus();
return false;
}
else if(document.chngpwd.cfpass.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cfpass.focus();
return false;
}
else if(document.chngpwd.npass.value!= document.chngpwd.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cfpass.focus();
return false;
}
return true;
}
</script>
</head>
	<body>
	<div id="app">		
        <?php include('include/sidebar.php');?>
			<div class="app-content">				
				<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor | Change Password</h1>
								</div>
								    <ol class="breadcrumb">
									    <li>
										    <span>Doctor</span>
									    </li>
									    <li class="active">
										    <span>Change Password</span>
									    </li>
                                    </ol>
							     </div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Change Password</h5>
												</div>
												    <div class="panel-body">
								                       
								                       
													        <form role="form" name="chngpwd" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="exampleInputEmail1">
															    Current Password
															</label>
							                                 <input type="password" name="cpass" class="form-control"  placeholder="Enter Current Password">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">
															    New Password
															</label>
					                                        <input type="password" name="npass" class="form-control"  placeholder="New Password">
														</div>														
                                                            <div class="form-group">
															<label for="exampleInputPassword1">
																Confirm Password
															</label>
									                    <input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password">
														</div>																												
												        <button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
								</div>
							</div>
						
						
						
					</div>
				</div>
			</div>
	</body>
</html>

