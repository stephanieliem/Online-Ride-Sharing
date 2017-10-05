<?php
	session_start();
	$_SESSION['driver'] = "settings";
?>
<!DOCTYPE html>

<html lang="en">
<head>
<title>Travel Hunt App A Mobile App Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
		<?php include  'headdriver.php'; ?>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="">Profile</a></h5>
				</div>
				
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   
<div class="container-fluid" style="overflow:hidden;">
	<div class="profilepic" style="margin: 0 auto;height:30%;width:30%;margin-top:20px;margin-bottom:20px;">
		<img class="img-responsive" src="images/dummy.png">
	</div>
	<div class="profilefields">
	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="panel">
				<div class="panel-heading">
					<h5><b>First Name</b></h5>
				</div>
				<div class="panel-body" style="margin-top:-15px;">
					<div class="firstname">Damn</div>
				</div>
			</div>	
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<div class="panel">
				<div class="panel-heading">
					<h5><b>Last Name</b></h5>
				</div>
				<div class="panel-body" style="margin-top:-15px;">
					<div class="lastname">Son</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h5><b>Phone Number</b></h5>
				</div>
				<div class="panel-body" style="margin-top:-15px;">
					<div class="row">
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
						<img class="img-responsive" src="http://vignette1.wikia.nocookie.net/callofdutyfanon/images/b/bf/Indonesia-flag.gif/revision/latest/scale-to-width-down/320?cb=20130428233712" style="height:100%;width:100%;margin:0 auto;">
						</div>
						<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="margin-left:-20px;">+62 812-3456-7890</div>
					</div>
				</div>
			</div>	
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h5><b>E-mail</b></h5>
				</div>
				<div class="panel-body" style="margin-top:-15px;">
					<div class="emailaddr">hahaha@email.com</div>
				</div>
			</div>	
	</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel">
				<div class="panel-heading">
					<h5><b>Password</b></h5>
				</div>
				<div class="panel-body" style="margin-top:-15px;">
					<div class="passwordfield1">&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</div>
				</div>
			</div>	
	</div>
	</div>
	<button type="button" class="btn btn-lg btn-block" style="background-color:black;color:white;margin-bottom:20px;border-radius:5px;">Update Profile</button>

	</div>
</div>
	<?php include 'footdriver.php'; ?>
</div>


	
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script>
	$(document).ready(function(){
		$("#<?php echo $_SESSION['driver']; ?>").addClass("active");
	})
</script>
</body>
</html>