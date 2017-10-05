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
	<!--script-->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/bigSlide.js"></script>
	<script>
		$(document).ready(function() {
			$('.menu-link').bigSlide();
		});
		$( document ).ready(function() {
			$("#<?php echo $_SESSION['page'];?>").addClass("active");   
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
<div class="modal fade" id="myModalbook" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">

				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<h3 class="w3ls-title book">ADD TRAVELLER DETAILS</h3>
				<div class="main-booking">
					<form action="payment.html" method="post">
						<p>First Name </p>
						<input type="text" name="First Name"  required=""/>
						<p>Last Name </p>
						<input type="text" name="Last Name"  required=""/>
						<p>Your Email</p>
						<input type="text" name="Your Email"  required=""/>

						<p>Your Phone</p>
						<input type="text" name="Your Email"  required=""/>
						<div class="search">
							<input type="submit" value="Proceed To Payment">	
						</div>									
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>

<body>
	<div class="body-back">
		<div class="masthead pdng-stn1">
			<?php include 'basehead.php';?>
			<div class="phone-box wrap push" id="home">
				<div class="menu-notify">
					<div class="profile-left">
						<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
					</div>
					<div class="Profile-mid">
						<h5 class="pro-link"><a href="#">Methods</a></h5>
					</div>
					
					<div class="clearfix"></div>
				</div> 
				

				<div class="payment-left">

					<div class="payment-options">
						<div class="tabs-box">

							<h5 style="margin-bottom:3%;">Payment Methods</h5>
							<div class="col-xs-12" style="margin-bottom:5%;margin-top:3%;">
								<img src="images/moneyicon.jpg" style="width:13%;margin-right:10px;">
								<div style="display:inline-block;">Cash</div>
							</div>
							<div class="col-xs-12" style="margin-bottom:5%;">
								<img src="images/vm.jpg" style="width:13%;margin-right:10px;">
								<div style="display:inline-block;">Credit Card</div>
							</div>
							<div class="col-xs-12">
								<img src="images/pay.png" style="width:13%;margin-right:10px;">
								<div style="display:inline-block;">PMU-pay</div>
							</div>
								<div style="height:272px;" ></div>
							</div>			
							<div class="clearfix"> </div>
						</div>
						<div style="height:100px">
						</div>
						<?php include 'basefoot.php';?>
						<!--/footer-->
					</div>
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
			}); 

		</script>
		<!--//pop-up-box -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
	</body>
	</html>




