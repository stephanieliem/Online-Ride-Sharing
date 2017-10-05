<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
$_SESSION['driver'] = "earnings";
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
	<script src="js/jquery.nicescroll.js"></script>
					<script src="js/scripts.js"></script>
					<script>
						
						$(document).ready(function() {
							$('.menu-link').bigSlide();
							$("#<?php echo $_SESSION['driver']; ?>").addClass("active");
						});

						
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
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			viewGraph();
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

		function viewGraph(){

			$('.column').css('height','0');
			$('table tr').each(function(index) {
				var ha = $(this).children('td').eq(1).text();
				var val = document.getElementById("a"+index).value;
				$('#col'+index).animate({height: ha}, 1500).html("<div>"+val+"</div>");

			});

		} 
	</script>
	<style>
		#contenitore{
			position: relative;
			width: 80%;
			height: 40%;
			margin-left:5%;
			text-align:center;
			overflow:hidden;
			font: 0.875em 'Trebuchet MS', sans serif;
		}
		.left{
			float:left;
			width:48%;
		}
		#grafico{
			position:relative;
			height:120px;
			border-left:2px solid #000000;
			border-bottom: 2px solid #000000;
			width:100%;
			margin-top:20px;
		}
		.riga{
			position:absolute;
			left:0;
			height: 1px;
			background-color:gray;
			width: 100%;
		}
		.riga div{
			float:left;
			margin: -20px 0 -10px 3px;
		}

		.column{
			position:absolute;
			width: 16%;
			bottom: 0;
			/*background-color: #003366;*/
			margin-left:4%;
		}

		.column div{
			margin-top:-20px;
			height:20px;
		}
		.days
		{
			width:60%;
			margin: 1em auto;
			color:white;
		}
		.days tr,.days td
		{
			background-color: transparent;
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
						<div class="details-right" style="margin-left:3%;background-color:transparent;"> 
							<div id="contenitore" style="color:white;">
								<div style="display:none;">
									<input type="hidden" value="85000" id="a0">
									<input type="hidden" value="68000" id="a1">
									<input type="hidden" value="50000" id="a2">
									<input type="hidden" value="90000" id="a3">
									<table>
										<caption>Date table</caption>
										<tbody>
											<tr><td>A</td><td>85%</td><td style="background-color:#336699">&nbsp;</td></tr>
											<tr><td>B</td><td>68%</td><td style="background-color:#003366">&nbsp;</td></tr>
											<tr><td>C</td><td>50%</td><td style="background-color:#ff6600">&nbsp;</td></tr>
											<tr><td>D</td><td>90%</td><td style="background-color:#ffcc00">&nbsp;</td></tr>
										</tbody>
									</table>
									<div class="button" onclick="viewGraph()">Rerun</div>
								</div>
								<div class="container-fluid" style="margin-left:13%;">
									<div class="riga" style="top:31%;"><div>75.000</div></div>
									<div class="riga" style="top:56%;"><div>50.000</div></div>
									<div class="riga" style="top:81%;"><div>25.000</div></div>
									<div id="grafico">
										<div id="col0" style="left:0%; background-color:#107B10;" class="column"></div>
										<div id="col1" style="left:25%; background-color:#107B10;" class="column"></div>
										<div id="col2" style="left:50%; background-color:#107B10;" class="column"></div>
										<div id="col3" style="left:75%; background-color:#1BCE1B;" class="column"></div>
									</div>
										<!-- <div style="margin-top:2%; padding-left:0%;text-align:left;">Tue</div>
										<div style="margin-top:2%; padding-left:28%; display:inline;">Wed</div>
										<div style="margin-top:2%; padding-left:50%; display:inline;">Thu</div>
										<div style="margin-top:2%; padding-left:75%; display:inline;">Fri</div> -->
									</div>


								</div>
								<table class="days" style="background-color: rgba(0, 0, 0, 0);margin-top:0px;">
									<tbody style ="background-color: rgba(0, 0, 0, 0);">
										<tr style="background-color: rgba(0, 0, 0, 0);">
											<td style="width:7%; margin:0px;padding:0px;background-color: rgba(0, 0, 0, 0);">Tue</td>
											<td style="width:10%;margin:0px;padding:0px;background-color: rgba(0, 0, 0, 0);">Wed</td>
											<td style="width:10%;margin:0px;padding:0px;background-color: rgba(0, 0, 0, 0);">Thu</td>
											<td style="width:10%;margin:0px;padding:0px;background-color: rgba(0, 0, 0, 0);">Fri</td>
										</tr>
									</tbody>
								</table>

								<div style="width:100%; height:50px;">
									<table style="float:left; width:100%; color:white;">
										<tr>
											<td class="text-left" style="width:50%; padding-left:20px;">
												This Week
											</td>
											<td style="width:40%;">
												<h1>310.000</h1>
											</td>
											<td style="width:10%;">
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</td>
										</tr>
									</table>
								</div>
								<div style ="width: 60%; height:10%; overflow:auto; color:white;font-size:0.8em; margin:0;">
									<table style="margin-bottom:5%;">
										<tr>
											<td>
												<button style="background-color:transparent;border: none;overflow:hidden; color:grey;"> May, 28 - Jun, 3</button>
											</td>
											<td>
												<button style="background-color:transparent;border: none;overflow:hidden;">Jun, 4 - Jun, 10</button>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid" style="overflow:hidden;">
						<div class="panel-group">
							<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
								<table style="margin-bottom:15px;">
									<tr>
										<td rowspan="2" style="vertical-align:top;"><i class="fa fa-user-plus" aria-hidden="true"></i></i></td>
										<td style="padding-left:15px;"><b>Invites</b></td>
										<td rowspan="2" style="vertical-align:top;padding-left:45px;"><button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
									</tr>
									<tr>
										<td style="padding-left:15px;">Earn cash everytime you invite a driver</td>
									</tr>
									
								</table>
							</div>

							<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
								<table style="margin-bottom:15px;">
									<tr>
										<td rowspan="3" style="vertical-align:top;"><i class="fa fa-clock-o" aria-hidden="true"></i></td>
										<td style="padding-left:15px; width:80%;"><b>Trip History</b></td>
										<td rowspan="3" style="vertical-align:top;padding-left:120px;"><button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
									</tr>
									<tr>
										<td style="padding-left:15px;">Your trip history</td>
									</tr>
									<tr>
										<td style="color:#FFC100; padding-left:15px;"> 51 trips</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<!-- //banner -->
					<!--/footer-->
					<div style="height:100px">
						
					</div>

					<?php include 'footdriver.php';?>
					<!--/footer-->



				</body>
				</html>