<?php
session_start();
$_SESSION['page'] = "payments";
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
		}); 
	</script>
	<!--//pop-up-box -->
</head>
<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<?php include 'basehead.php'; ?>
			<div class="phone-box wrap push" id="home">
				<div class="menu-notify" style="background-color:#2A3F54">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link"><a href="">Promotions</a></h5>
					</div>

					<div class="clearfix"></div>
				</div> 
				<!-- banner -->
				<div class="container-fluid" style="overflow:hidden;">
					<div class="panel-group">
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<button type="button" class="btn btn-success">75% OFF</button>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: right;">
									<p style="line-height: 1.5em; color:rgb(165, 165, 165); font-size: 13px;">11 Juni 2017<br>
										5 trips left
									</p>
								</div>
							</div>
							<p style="line-height: 1.5em; text-align: justify; font-weight: 600;">Potongan 75% untuk 5 perjalanan hingga Rp 20.000. Berlaku untuk PickMeUp di Surabaya dari 05 Jun s/d 11 Jun 2017.
								<br>
								<small style="color: rgb(165, 165, 165); font-weight: 400;">Surabaya</small>
							</p>
						</div>
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
									<button type="button" class="btn btn-success">75% OFF</button>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="text-align: right;">
									<p style="line-height: 1.5em; color:rgb(165, 165, 165); font-size: 13px;">11 Juni 2017<br>
										5 trips left
									</p>
								</div>
							</div>
							<p style="line-height: 1.5em; text-align: justify; font-weight: 600;">Potongan 75% untuk 5 perjalanan hingga Rp 20.000. Berlaku untuk PickMeUp di Surabaya dari 05 Jun s/d 11 Jun 2017.
								<br>
								<small style="color: rgb(165, 165, 165); font-weight: 400;">Surabaya</small>
							</p>
						</div>
					</div>
				</div>

				<?php include 'basefoot.php'; ?>

			</div>
		</div>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<script>
			$( document ).ready(function() {
				$("#<?php echo $_SESSION['page'];?>").addClass("active");   
			});
		</script>
	</body>
	</html>