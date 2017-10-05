<?php
session_start();
$_SESSION['page'] = "home";
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
	<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
	<script>
		function showform(){
			document.getElementById("moving").style.top = "0";
			document.getElementById("moving").style.height = "100%";
			document.getElementById("tooglemenu").style.display = "none";
			document.getElementById("toogleback").style.display = "block";
			document.getElementById("navdiv").style.backgroundColor = "white";
			document.getElementById("navdiv").style.position = 'relative';
		}
		function hideform(){
			document.getElementById("moving").style.top = "100%";
			document.getElementById("moving").style.height = "0%";
			document.getElementById("tooglemenu").style.display = "block";
			document.getElementById("toogleback").style.display = "none";
			document.getElementById("navdiv").style.backgroundColor = "transparent";
			document.getElementById("navdiv").style.position = 'fixed';
		}
		$(document).ready(function() {
			var $scrollingDiv = $("#scrollingDiv");
			var $destination = $("destination");


					// $scrollingDiv
					// 	.stop()
					// 	.animate({"marginTop": ($(window).scrollTop() + 10) + "px"}, "slow" );
					// $destination
					// 	.stop()
					// 	.animate({"marginTop": ($(window).scrollTop() + 10) + "px"}, "slow" );			

				});
			</script>
	<!-- <script>
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
	</script> -->
	<style>
		#wrapper{position:relative;}
		#map {
			height: 100vh;
			width: 100%;
			position:relative;
		}
		#infoi {
			width: 80%;
			height: 5%;
			position: absolute;
			top: 10%;
			left: 10%;
			z-index: 10;
			margin:0;
		}
		.ha {display: block; padding: 0; margin: 0; border: 0; width: 100%;}
		#moving {
			position: absolute; 
			top: 100%;  
			width: 100%; 
			height: 0; 
			background: rgba(255, 255, 255, 1); 
			transition: all 0.75s; 
			z-index: 20;
		}
		.location {
			width: 100%;
		}
		.location tr td {
			padding: 10px;
			height: 30px;
		}
		#grey {
			background-color: #e8e9ea;
		}
		#dark-grey {
			background-color: #b5b6b7;
		}
		#navdiv {
			background-color: #2A3F54;
		}
	</style>
	<!--//pop-up-box -->
</head>
<body style="margin:0; overflow-y:hidden;">

	<div id="scrollingDiv">
		<div class="masthead pdng-stn1">

			<?php include 'basehead.php'; ?>

		<!-- <div class="phonebox wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left" id="tooglemenu" style="margin-left:10%; padding-bottom: 5%;">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul" style="font-size:20px; color:black;"></i></a>
				</div>
				<div id="toogleback" style="margin-left:10%; padding-bottom: 5%; display: none;">
					<a><i class="fa fa-arrow-left" style="font-size:20px; color:black;" onclick="hideform()"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Payments</a></h5>
				</div>
				<div class="Profile-right">
					<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a> 
					
				</div>
				
			</div>  -->
			<div class="phone-box wrap push" id="home">
				<div class="menu-notify" id="navdiv" style="position: fixed;z-index:1000; background: transparent; height: 45px;">
					<div class="profile-left">
						<a href="#menu" id="tooglemenu" class="menu-link"><i class="fa fa-list-ul" style="margin-left: 15px; color: black"></i></a>
						<a id="toogleback" style="left: 12px; position: absolute; display: none;"><i class="fa fa-arrow-left" style="font-size:20px; color:black;" onclick="hideform()"></i></a>
					</div>
				</div> 
				<div id="wrapper">
					<div id="infoi" style="background-color:white; margin:0 auto; height: 40px;" onclick="showform()">
					<div>
						<table style="width:100%; height:100%;"><tr>
							<td style="padding-left:10px;padding-top:10px;width:5%;">
								<span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
							</td>
							<td style="padding-left:10px; height: 100%;padding-top: 10px;">
								Where to?
							</td>
						</tr></table>
					</div>
					</div>
					<div id="map"></div>
					<div id="moving">
						<div class="col-xs-12" style="box-shadow: 0 4px 10px -2px gray;">
							<table class="location">
								<tr>
									<td style="width: 40px;">•</td>
									<td id="grey" contenteditable>Petra Christian University</td>
								</tr>
							</table>
							<table class="location" style="margin-top: 7px; margin-bottom: 8px;">
								<tr>
									<td style="width: 40px;">•</td>
									<td id="dark-grey" contenteditable></td>
								</tr>
							</table>
						</div>
						<div class="col-xs-12" style="padding: 10px;"><a href="route-user.php" style="color:black;text-decoration:none;">
							<table style="margin-left: 10px; width: 100%;">
								<tr>
									<td rowspan="2" style="width: 40px;"><i class="fa fa-home fa-lg" aria-hidden="true"></i><a href="route-user.php"></td>
									<td>Home</td>
								</tr>
								<tr>
									<td style="color: grey; padding-bottom: 6px; border-bottom: 0.1px solid grey;">Jl. Penjaringan IA Surabaya</td>
								</tr>
								<tr>
									<td rowspan="2" style="width: 40px;"><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i></td>
									<td style="padding-top: 5px">Work</td>
								</tr>
								<tr>
									<td style="color: grey; padding-bottom: 6px; border-bottom: 0.1px solid grey;">Jl. Raya Darmo 49</td>
								</tr>
								<tr>
									<td rowspan="2" style="width: 40px; padding-top: 1px; padding-left: 4px;"><i class="fa fa-map-pin fa-lg" aria-hidden="true"></i></td>
									<td rowspan="2" style="padding-top: 13px; padding-bottom: 13px; border-bottom: 0.1px solid grey;"">Set location on map</td>
								</tr>
								<tr></tr>
								<tr>
									<td rowspan="2" style="width: 40px; padding-top: 1px; padding-left: 4px;"><i class="fa fa-play fa-lg" aria-hidden="true"></i></td>
									<td rowspan="2" style="padding-top: 13px; padding-bottom: 13px; border-bottom: 0.1px solid grey;"">Enter destination later</td>
								</tr>
								<tr></tr>
								</a>
							</table>
						</div>
					</div>
				</div>
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
					$( document ).ready(function() {
						$("#<?php echo $_SESSION['page'];?>").addClass("active");   
					});
				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnexwt0jVgRYQxZBS_JJW5LfYOxqFp2-M&callback=initMap">
			</script>
		</div>
	</body>
	</html>