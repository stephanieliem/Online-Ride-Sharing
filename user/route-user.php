<!DOCTYPE html>

<html lang="en">
<head>
	<title>PICK ME UP!</title>	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	</style>
</head>
<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<div class="phone-box wrap push" id="home">
				<div class="menu-notify">
					<div class="row">
					<div class="profile-left">
						<a href="map-user.php" class="pro-link"><i class="fa fa-arrow-left" style="margin-left: 5px; color:white; font-size: 18px;"></i></a>

					</div>
					<div class="profile-left">
					<h5 class="pro-link" style="text-align:center;"><a>Route</a></h5>
						
					</div>

					<div class="clearfix"></div>

					
					</div>
				</div> 
				<!-- banner -->
				<div class="details-grid">
					<div id="wrapper">
						<!-- <div id="map" ></div> -->
						<img src="images/new-route.png" style="width: 100%;">
					</div>
					
				</div>
				<!-- <div class="container-fluid" style="overflow:hidden;"> -->
				<div class="panel-group">
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;padding-left:30px;">
						<table style="margin-left: 35%;">
							<tr>
								<td style="text-align:center; padding-bottom: 25px;"><b><h5>Economy</h5></b></td>
							</tr>
						</table>
						<table style="margin-left: 35%;margin-bottom: 15px;">
							<tr>
								<img src="images/automobile.png" style="margin-top: 0px; margin-left: 35%;">
							</tr>
							<tr>
								<td style="padding-left:15px;">PMU-Car</td>
							</tr>
							<tr>
								<td style="padding-left:5px;"><h6>IDR 15.000</h6></td>
							</tr>
						</table>
					</div>
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); padding: 10px;">
						<div class="row">
							<div class="col-xs-2">
								<img src="images/moneyicon.jpg" style="margin-left:10px; margin-top: 5px; width: 40px; height:30px;">&nbsp;
							</div>
							<div class="col-xs-5" style="padding-top: 0px;">
								<div style="font-size: 25px;"><label class="label label-success label-lg">Promo Applied</label></div>
							</div>
							<div class="col-xs-4" style="margin-top: 5px; margin-left: 5%;  font-size: 20px;">
								<img src="images/avatar.png" style="width: 25%;">&nbsp; 1-4
							</div>
						</div>
						<a href="complete-trip.php">
							<div class="panel text-center" style="background-color: black; color: white; padding-left:15px;padding-top:15px;padding-bottom:17px;">
								<h5>Pick Me Up !</h5>
							</div>
						</a>
					</div>
				</div>
				<!-- </div> -->
				<!-- //banner -->
			</div>
		</div>
	</div>
	
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>