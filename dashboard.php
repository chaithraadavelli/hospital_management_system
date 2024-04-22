<?php
session_start();
error_reporting(0);
include("config.php");
include('include/checklogin.php');
check_login();
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient | Dashboard</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
</head>
<body>
    <div id="app">
        <?php 
            include("include/sidebar.php");
        ?>
        <div class="app-content">
            <?php
                include("include/header.php");
            ?>
            <div class="main-content">
                <div class="wrap-content container" id="container">
                <section id="page-title">
					<div class="row">
						<div class="col-sm-8">
							<br>
							<br>
							<h1 class="mainTitle">User | Dashboard</h1>
						</div>
					</div>
				</section>


                <div class="container-fluid container-fullw bg-white">
					<div class="row">
						
					<div class="col-sm-4">
				<div class="panel panel-white no-radius text-center">
						<div class="panel-body">
							<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
								<h2 class="StepTitle">My Appointments</h2>
							
								<p class="cl-effect-1">
									<a href="appointment-history.php">
									View Appointment History
									</a>
								</p>
						</div>
						</div>
					</div>
					<div class="col-sm-4">
							<div class="panel panel-white no-radius text-center">
								<div class="panel-body">
									<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
									<h2 class="StepTitle"> Book My Appointment</h2>
					
									<p class="links cl-effect-1">
										<a href="book-appointment.php">
										Book Appointment
										</a>
									</p>
								</div>
							</div>
					</div>



                </div>
            </div>
        </div>
        <?php include('include/footer.php');?>
    </div>


    
</body>
</html>