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
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
		});
	</script>

</head>


<body>
	<div class="body-back">
		<div class="masthead pdng-stn1" style="bottom : 0">

			<?php include 'headdriver.php'; ?>

			<div class="phone-box wrap push" id="home">
				<div class="menu-notify">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link" style="text-decoration:none"><a href="#">Choose Your Car</a></h5>
					</div>

					<div class="clearfix"></div>
				</div> 
				<!-- banner -->
   
			<!-- //banner -->
			<!--payment--> 
			<div class="details-grid" style="background-color:#f7f7f7">
				<div class="detail-shade">
					<div class="payment-left">
				
				<a href="editprofile-driver.php" style="color:black">
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); padding:10px;">
						<div class="row">
							<h5 style="padding-left:5%"> Ford Fiesta </h5>
							<br>
							<h5 style="padding-left:5%; margin-top:-2%"> L 1854 LE </h5>
						</div>
					</div>
				</a>
				<a href="editprofile-driver.php" style="color:black">
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); padding:10px;margin-top:-18px">
						<div class="row">
							<h5 style="padding-left:5%"> Honda Jazz </h5>
							<br>
							<h5 style="padding-left:5%; margin-top:-2%"> L 1256 SK </h5>
						</div>
					</div>
				</a>
				<a href="editprofile-driver.php" style="color:black">
					<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); padding:10px;margin-top:-18px">
						<div class="row">
							<h5 style="padding-left:5%"> Mitsubishi Pajero </h5>
							<br>
							<h5 style="padding-left:5%; margin-top:-2%"> L 1745 KL </h5>
						</div>
					</div>
				</a>
			</div>
			<div style="height:400px">

			</div>
			<?php include 'footdriver.php'; ?>
		</div>

		
	</div>

</div>

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
		$( document ).ready(function() {
			$("#<?php echo $_SESSION['driver'];?>").addClass("active");   
		});																						
	}); 
</script>
<!--//pop-up-box -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>