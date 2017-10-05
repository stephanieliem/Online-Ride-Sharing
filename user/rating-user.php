<?php
	session_start();
	$_SESSION['page'] = "settings";
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
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="main.html">Travel Hunt</a></h5>
				</div>
				<div class="Profile-right">
					<a href="#small-dialog" class="sign-in popup-top-anim"> <i class="fa fa-user"></i></a> 
						<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form">
								<form action="#" method="post">
									<p>User Name </p>
									<input type="text" name="Name" required=""/>
									<p>User Password</p>
									<input type="password" name="Password" required=""/>	 
									<div class="wthree-text"> 
										<ul> 
											<li>
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span> Remember me ?</label>  
											</li>
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don’t have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
							   <h3><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
								
							</div>
							<div class="login-form signup-form">
								<form action="#" method="post">
									<p>User Name </p>
									<input type="text" name="Name"  required=""/>
									<p>User Email </p>
									<input type="text" name="Email"  required=""/>
									<p>User Password</p>
									<input type="password" name="Password" placeholder="" required=""/>	
									<div class="wthree-text"> 
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>I accept the terms of use</label> 
									</div>
									<input type="submit" value="Sign Up">		
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
					
				</div>
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   			<div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<br/><h2 style="color:white; display:inline;"><span class="glyphicon glyphicon-star" aria-hidden="true" style="color:yellow;"></span></h2><h1 style="display:inline;color:white;"> 4.93</h1><br/>
							<h4><br/>Your current rating</h4>

						</div>
				</div>
			</div>
			<div class="container-fluid" style="overflow:hidden;">
	<div class="panel-group">
		<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
		<table style="margin-bottom:15px;">
			<tr>
				<td rowspan="3" style="vertical-align:top;"><i class="fa fa-commenting-o" aria-hidden="true"></i></td>
				<td style="padding-left:15px;"><b>Feedback</b></td>
				<td rowspan="3" style="vertical-align:top;padding-left:45px;"><button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
			</tr>
			<tr>
				<td style="padding-left:15px;">Your top reported issue:</td>
			</tr>
			<tr>
				<td style="color:#FFC100; padding-left:15px;">Safety</td>
			</tr>
		</table>
		</div>

		<div class="panel" style="box-shadow: 0px 14px 121px -26px rgba(0,0,0,0.3); margin-top: 10px; padding: 15px; padding-bottom: 0px;">
		<table style="margin-bottom:15px;">
			<tr>
				<td rowspan="3" style="vertical-align:top;"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></td>
				<td style="padding-left:15px;"><b>User Badges</b></td>
				<td rowspan="3" style="vertical-align:top;padding-left:62px;"><button style="background-color:transparent;border: none;overflow:hidden;"><i class="fa fa-angle-right" aria-hidden="true"></i></button></td>
			</tr>
			<tr>
				<td style="padding-left:15px;">Your top liked quality:</td>
			</tr>
			<tr>
				<td style="color:#FFC100; padding-left:15px;"><i class="fa fa-trash-o" aria-hidden="true"></i>  Cleanliness</td>
			</tr>
		</table>
		</div>
	</div>
</div>
   <!-- //banner -->
		<!--/footer-->
    <div class="w3agile footer">
			<div class="col-md-3 w3agile_footer_grid">
				<h3>About Us</h3>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
					voluptatibus.</p>
				<h3 class="logo"><a href="main.html">T<span>r</span>a<span>v</span>e<span>l</span> <span>H</span>u<span>n</span>t</a></h3>
			</div>
			<div class="col-md-2 w3agile_footer_grid">	
				<h3>Links</h3>
				<ul>
					<li><a href="main.html">Home</a></li>
					<li><a href="short-codes.html">Services</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-4 w3agile_footer_grid">
				<h3>Twitter Posts</h3>
				<ul class="w3agile_footer_grid_list">
					<li>Ut aut reiciendis voluptatibus maiores alias, ut aut reiciendis.
						<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
					<li>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
						voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
				</ul>
			</div>
			<div class="col-md-3 w3agile_footer_grid">
				<h3>Newsletter</h3>
				<p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus.</p>
				<ul class="social">
					<form action="#" method="post">			 
					  <input type="text" name="Email" placeholder="Enter Email..." required="">

					 <input type="submit" value="Submit">
					 <div class="clearfix"></div>
				 </form>
				</ul>
			</div>
			<div class="clearfix"> </div>
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