<?php
session_start();
$_SESSION['driver'] = "history";
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
			$("#<?php echo $_SESSION['driver']; ?>").addClass("active");
		});

	</script>
	<!-- web-fonts -->  
	<link href='//fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- //web-fonts -->
	<!-- pop-up-box -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<style>
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

			<?php include 'headdriver.php'; ?>

			<div class="phone-box wrap push" id="home">
				<div class="menu-notify">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link" id="on-offline"><a>Offline</a></h5>
					</div>
					<div class="Profile-right" style="height: 22px;">
						<label class="switch" style="margin-bottom: 0px; ">
							<input type="checkbox" id="onoff">
							<div class="slider round" onclick="OnlineOffline()"></div>
						</label>
					</div>
					<div class="clearfix"></div>
				</div> 
				<!-- banner -->
				<div class="container-fluid" style="overflow:hidden;">
					<div class="" style="height:10%;padding-top:30px;">
						PAST TRIPS
					</div>
					<div class="panel-group">
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>2/2/17, 13:45</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 72.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>9/29/16, 10:30</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 56.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>


						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>8/2/16, 15:45</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 45.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>7/28/16, 21:30</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 25.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>3/2/16, 11:45</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 54.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>

						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px; padding-left:30px;">
							<div class="row">
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
									<div class="row">
										<h4 style=""><b>2/5/16, 10:50</b></h4>
									</div>
									<div class="row">
										<p class="card-text">PickX</p>
									</div>
								</div>
								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" style="color:grey; text-align: right; margin-top: 5px;padding-right:-20px; margin-left:10%">
									<h4 style="">IDR 73.000</h4> 
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align:right;margin-right:-30px;margin-left:-10%">
									<i class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
								</div>
							</div>
						</div>

					</div>
				</div>

				<?php include 'footdriver.php'; ?>

			</div>
			
		</div>


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

	
	$(document).ready(function() {
		$('.menu-link').bigSlide();
		$("#<?php echo $_SESSION['driver']; ?>").addClass("active");
	});
</script>

</body>
</html>