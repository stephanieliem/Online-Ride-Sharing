<?php
session_start();
$_SESSION['page'] = "trips";
?>
<!DOCTYPE html>

<html lang="en" style="height: 100%;">
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
		}); 
	</script>
	<!--//pop-up-box -->
</head>
<body style="height: 100%; overflow-y: hidden;margin:0;padding:0;">
	<div class="body-back">
		<div class="masthead pdng-stn1" style="min-height:100%; position:relative;">

			<?php include 'basehead.php'; ?>

			<div class="phone-box wrap push" id="home" style="padding-bottom:102px;">
				<div class="menu-notify" style="background-color:#2A3F54">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link"><a href="">Your Trips</a></h5>
					</div>

					<div class="clearfix"></div>
				</div> 
				<!-- banner -->
				<div class="container-fluid" style="overflow:hidden;">
					<div class="panel-group">
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>7/28/16, 21:30</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 25.000</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Petra Christian University - Tunjungan Plaza</p>
							<p class="card-text">Toyota Corolla</p>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>5/30/16, 20:21</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 20.000</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Galaxy Mall - Jl Jemursari 18</p>
							<p class="card-text">Daihatsu Xenia</p>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>4/25/16, 07:45</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 15.000</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Jl. Hr Muhammad 41- Supermall Pakuwon Indah</p>
							<p class="card-text">Daihatsu Sigra</p>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>4/04/16, 11:51</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 25.000</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Petra Christian University - Domicile</p>
							<p class="card-text">Toyota Avanza</p>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>3/27/16, 17:24</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 18.500</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Jl Darmo Permai Selatan XI - Ciputra World</p>
							<p class="card-text">Honda Mobilio</p>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4>3/15/16, 10:19</h4>
								</div	>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<h4 style="text-align:right;">Rp 16.400</h4>
								</div>
							</div>
							<p class="card-text" style="margin-bottom: 0 !important;">Petra Christian University - City of Tomorrow</p>
							<p class="card-text">Toyota Corolla</p>
						</div>
					</div>
				</div>
				<div style="height:100px">
						
				</div>
				<?php include 'basefoot.php'; ?>

			</div>
		</div>
	</div>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<script>
		$( document ).ready(function() {
			$("#<?php echo $_SESSION['page'];?>").addClass("active");
			var heighoftscreen = screen.height;
			$("#menu").height(heighoftscreen);   
		});
	</script>
</body>
</html>