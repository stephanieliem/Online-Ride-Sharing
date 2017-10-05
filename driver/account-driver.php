<?php 
session_start();
$_SESSION['driver'] = "settings";
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
	<!--//pop-up-box -->
</head>
<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<?php include 'headdriver.php';?>
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

				<div class="details-grid">
					<div class="details-shade">
						<div class="profilepic-tab">
							<div class="container">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="border-right:0.1px solid whitesmoke;">
										<div class="row">
											<div class="profilepic" style="margin: 0 auto;height:50%;width:50%;margin-top:0px;margin-bottom:0px;-webkit-filter: invert(100%); filter: invert(100%);">
												<img class="img-responsive" src="images/dummy.png">
											</div>
										</div>
										<div class="row">
											<div style="margin:0 auto;color:white;text-align:center;margin-top:10px;"><b>Dummy Name</b></div>
										</div>
										<div class="row">
											<div style="margin:0 auto;color:white;text-align:center;color:#2ad2c9;font-size:80%;"><a href="editprofile-driver.php" style="color:#2ad2c9;">EDIT</a></div>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="row">
											<div class="carpic" style="margin: 0 auto;height:50%;width:50%;margin-top:-7px;margin-bottom:0px;-webkit-filter: invert(100%); filter: invert(100%);">
												<img class="img-responsive" src="https://static1.squarespace.com/static/57f5feb22994cad3aa9fc6c8/57f60dede4fcb5154dc7cba7/57f6a876725e252e6ec6336b/1476146957206/transport-car-icon--android-iconset--icons8-8.png">
											</div>
										</div>
										<div class="row">
											<div style="margin:0 auto;color:white;text-align:center;margin-top:17px;"><b>FORD FIESTA</b></div>
										</div>
										<div class="row">
											<div style="margin:0 auto;color:white;text-align:center;font-size:80%;"><a href="choosecar.php" style="color:#2ad2c9;">CHANGE</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid" style="overflow:hidden;">
					<div class="panel-group">
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding:10px;">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: center;">
									<span class="glyphicon glyphicon-question-sign" style="color:grey;font-size:24px;"></span>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="" style="margin:0 auto;color:grey;margin-left:-10px; font-size:20px;">Help</div>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right fa-2x" aria-hidden="true" style=""></i></button>
								</div>
							</div>
						</div>
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding:10px;">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: center;">
									<span class="glyphicon glyphicon-cog" style="color:grey;font-size:24px;"></span>
								</div>
								<a href="settings-driver.php"><div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="" style="margin:0 auto;color:grey;margin-left:-10px; font-size:20px;">Settings</div>
								</div></a>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right fa-2x" aria-hidden="true" style=""></i></button>
								</div>
							</div>
						</div>
						
						<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding:10px;">
							<div class="row">
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: center;">
									<span class="glyphicon glyphicon-info-sign" style="color:grey;font-size:24px;"></span>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
									<div class="" style="margin:0 auto;color:grey;margin-left:-10px; font-size:20px;">About</div>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
									<button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right fa-2x" aria-hidden="true" style=""></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="height:100px">
					
				</div>
				<?php include 'footdriver.php'; ?>
				<!--/footer-->
				
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