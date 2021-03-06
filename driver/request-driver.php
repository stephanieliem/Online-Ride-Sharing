﻿<?php
session_start();
$_SESSION['driver'] = "home";
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>PICK ME UP!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Travel Hunt App Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<meta charset utf="8">
	<!--font-awsome-css-->
	<link rel="stylesheet" href="css/font-awesome.min.css"> 
	<!--bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!--custom css-->
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<!--component-css-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--script-->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/bigSlide.js"></script>
	<script>
		$(document).ready(function() {
			$('.menu-link').bigSlide();
		});
	</script>
	<!-- web-fonts -->  
	<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.popup-top-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			$("#<?php echo $_SESSION['driver']; ?>").addClass("active");
		}); 
	</script>
	<!--//pop-up-box -->
	<style>
		#map {
			height: 45vh;
			width: 100%;
			position:relative;
			margin: 0px;
		}
		.switch {
			position: relative;
			display: inline-block;
			width: 45px;
			height: 24px;
		}

		.switch input {display:none;}

		.slider {
			position: absolute;
			cursor: pointer;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #ccc;
			-webkit-transition: .4s;
			transition: .4s;
		}

		.slider:before {
			position: absolute;
			content: "";
			height: 22px;
			width: 22px;
			left: 1px;
			bottom: 1px;
			background-color: white;
			-webkit-transition: .4s;
			transition: .4s;
		}

		input:checked + .slider {
			background-color: #00cc00;
		}

		input:focus + .slider {
			box-shadow: 0 0 1px #2196F3;
		}

		input:checked + .slider:before {
			-webkit-transform: translateX(21px);
			-ms-transform: translateX(21px);
			transform: translateX(21px);
		}
		.slider.round {
			border-radius: 34px;
		}

		.slider.round:before {
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<?php include 'headdriver.php'; ?>
			<div class="phone-box wrap push" id="home" style="background-color:#2A3F54;">
				<div class="menu-notify">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link" id="on-offline"><a>REQUEST</a></h5>
					</div>
					<!--
					<div class="Profile-right" style="height: 22px;">
						<label class="switch" style="margin-bottom: 0px; ">
						  <input type="checkbox" id="onoff">
						  <div class="slider round" onclick="OnlineOffline()"></div>
						</label>
					</div>
				-->
				<div class="clearfix"></div>
			</div> 
			<!-- banner -->

			<div class="details-grid" margin-bottom:-50px;>
				<div class="panel" style="padding: 5px;">
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							<span class="glyphicon glyphicon-user" style="font-size:25px;margin-top:8px;"></span>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							<div class="row">
								Satria Damai
							</div>
							<div class="row">
								4.9<span class="glyphicon glyphicon-star"></span>
							</div>
						</div>

						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="text-align: right;">
							<a href="home-driver.php"><button class="btn btn-danger" style="margin-right:5px;margin-top:2px;">Decline</button></a>
						</div>
					</div>
				</div>
				<div id="wrapper" style="margin-top:-20px;background-color:#2A3F54;">
					<!-- <div id="map" ></div> -->
					<div id="map" ></div>
					<script>
						
						function initMap()
						{
							var map = new google.maps.Map(document.getElementById('map'),
							{
								zoom: 14,
								center : {lat: -7.272491, lng: 112.75785},
								disableDefaultUI: true
							});
						}
					</script>
					<script async defer
					src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnexwt0jVgRYQxZBS_JJW5LfYOxqFp2-M&callback=initMap">
				</script>
				<div id="moving"></div>
			</div>

		</div>
		<!-- <div class="container-fluid" style="overflow:hidden;"> -->
		<div class="panel-group">
			<div class="panel" style="padding:15px;padding-top:10px;background-color:#2A3F54;color:white;">
				<div class="row">
					<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<i class="fa fa-flag" style="font-size:30px;margin-top:8px;color:white;"></i>
					</div>
					<div class="col-xs-8" style="color:white;">
						<center>
							<b>5 Minutes</b>
							<br>
							<p style="margin-bottom: 0px;color:white;">Siwalankerto 141<br> Gedung Timur<br>Universitas Kristen Petra</p>
						</center>
					</div>
				</div>
			</div>

		</div>
		<a href="beforepickup-driver.php">
			<div class="panel text-center" style="background-color: green; color: white; padding-left:15px;padding-top:15px;padding-bottom:17px;margin-top:15px;margin-bottom:0;">
				<h5>ACCEPT REQUEST</h5>
			</div>
		</a>
	</div>
						<!-- <div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<table style="margin-bottom:15px;">
								<tr>
									<td style="padding-left:15px;padding-bottom:15px;"><b><h6>TODAY'S TOTALS</h6></b></td>
									<td style="vertical-align:top;padding-left:155px;"><button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
								</tr>
								<tr>
									<td style="padding-left:15px;"><h5><b>5</b>&nbsp; hours online</h5></td>
									<td colspan="2" style="color:#00e500; padding-left:90px;"><h4>IDR 97.500</h4></td>
								</tr>
								<tr>
									<td style="padding-left:15px;"><h5><b>6</b>&nbsp; trips</h5></td>
									<td style="padding-left:90px;"><h6>ESTIMATED NET</h6></td>
								</tr>
							</table>
						</div> -->
						<!-- </div> -->
						<!-- //banner -->

						<?php include 'footdriver.php'; ?>

					</div>
				</div>
				<script src="js/jquery.nicescroll.js"></script>
				<script src="js/scripts.js"></script>
				<script>
					function OnlineOffline()
					{
						if(document.getElementById('on-offline').innerHTML=="<a>Online</a>")
						{
							document.getElementById('on-offline').innerHTML="<a>Offline</a>";

						}
						else if(document.getElementById('on-offline').innerHTML=="<a>Offline</a>")
						{
							document.getElementById('on-offline').innerHTML="<a>Online</a>";
						}
					}
				</script>
			</body>
			</html>