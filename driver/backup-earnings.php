<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
				$('#col'+index).animate({height: ha}, 1500).html("<div>"+ha+"</div>");
				});
			} 
		</script>
		<style>
	#contenitore{
position: relative;
width: 80%;
margin-left:5%;
text-align:center;
overflow:hidden;
font: 14px 'Trebuchet MS', sans serif;
}
.left{
float:left;
width:48%;
}
#grafico{
position:relative;
height:300px;
border-left:2px solid #000000;
border-bottom: 2px solid #000000;
width:80%;
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
.canc{
clear:both;
}
table{
width:60%;
background-color: white;
color: #000;
margin: 1em auto;
}
table caption{
background-color: #D8EED8;
color: #004156;
text-align: left;
}
table tr:nth-child(2n){
background-color: #D8EED8;
}
table tr:nth-child(2n+1){
background-color: #BFDFFF;
}
table td{
text-align:center;
border-bottom: 1px solid #CDCDCD;
padding: 6px;
}
.column{
position:absolute;
width: 16%;
bottom: 0;
background-color: #003366;
margin-left:5%;
}
div.button {
    margin: 0 auto;
    text-align: center;
    width: 100px;
    background-color:#003366;
    border: 1px solid #003366;
    border-radius: 5px;
    padding: 8px;
    color: #E1E2CF;
    cursor: pointer;
}
.column div{
margin-top:-20px;
height:20px;
}

</style>
<!--//pop-up-box -->
    </head>
<body>
<div class="body-back">
	<div class="masthead pdng-stn1">
		<div id="menu" class="panel" role="navigation">
			<div class="wrap-content">
				<div class="profile-menu text-center">
					<img class="border-effect" src="images/logo.png" alt=" ">
						<h3>MENU</h3>

						<div class="pro-menu">
							<div class="logo">
								<li><a class=" link link--yaku  active" href="main.html"><span>H</span><span>o</span><span>m</span><span>e</span></a></li>
								<li><a class=" link link--yaku" href="about.html"><span>A</span><span>b</span><span>o</span><span>u</span><span>t</span></a></li>
								<li><a class=" link link--yaku" href="short-codes.html"><span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="destination.html"><span>D</span><span>e</span><span>s</span><span>t</span><span>i</span><span>n</span><span>a</span><span>t</span><span>i</span><span>o</span><span>n</span><span>s</span></a></li>
								<li><a class=" link link--yaku" href="contact.html"><span>C</span><span>o</span><span>n</span><span>t</span><span>a</span><span>c</span><span>t</span></a></li>
							</div>
				

						</div>
				</div>
			</div>
		</div>
		<div class="phone-box wrap push" id="home">
			<div class="menu-notify">
				<div class="profile-left">
					<a href="#menu" class="menu-link"><i class="fa fa-list-ul"></i></a>
				</div>
				<div class="Profile-mid">
					<h5 class="pro-link"><a href="">Travel Hunt</a></h5>
				</div>
				
				<div class="clearfix"></div>
			</div> 
<!-- banner -->
   			<div class="details-grid">
				<div class="details-shade">
						<div class="details-right">
							<div id="contenitore" style="color:white;">
<div style="display:none;">

<table>
<caption>Date table</caption>
<tbody>
<tr><td>A</td><td>80%</td><td style="background-color:#336699">&nbsp;</td></tr>
<tr><td>B</td><td>68%</td><td style="background-color:#003366">&nbsp;</td></tr>
<tr><td>C</td><td>50%</td><td style="background-color:#ff6600">&nbsp;</td></tr>
<tr><td>D</td><td>20%</td><td style="background-color:#ffcc00">&nbsp;</td></tr>
</tbody></table>
<div class="button" onclick="viewGraph()">Rerun</div>
</div>
<div>
<div class="riga" style="top:25%;"><div>75%</div></div>
<div class="riga" style="top:50%;"><div>50%</div></div>
<div class="riga" style="top:75%;"><div>25%</div></div>
<div id="grafico">
<div id="col0" style="left:10%; background-color:#107B10;" class="column"></div>
<div id="col1" style="left:35%; background-color:#107B10;" class="column"></div>
<div id="col2" style="left:60%; background-color:#107B10;" class="column"></div>
<div id="col3" style="left:85%; background-color:#1BCE1B;" class="column"></div>
</div>
<div style="margin-top:2%;margin-left:0%;text-align:left; display:inline;">Tue</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Wed</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Thu</div>
<div style="margin-top:2%;margin-left:22%; display:inline; text-align:left;">Fri</div>
</div>
</div>

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
		<div class="w3agile agileinfo_copy_right">
			<div class="agileinfo_copy_right_left">
				<p>© 2017 PICK ME UP. All rights reserved </p>
			</div>
			<div class="agileinfo_copy_right_right">
				<ul class="social">
					<li><a class="social-linkedin" href="#">
						<i></i>
						<div class="tooltip"><span>Facebook</span></div>
						</a></li>
					<li><a class="social-twitter" href="#">
						<i></i>
						<div class="tooltip"><span>Twitter</span></div>
						</a></li>
					<li><a class="social-google" href="#">
						<i></i>
						<div class="tooltip"><span>Google+</span></div>
						</a></li>
					<li><a class="social-facebook" href="#">
						<i></i>
						<div class="tooltip"><span>Pinterest</span></div>
						</a></li>
					<li><a class="social-instagram" href="#">
						<i></i>
						<div class="tooltip"><span>Instagram</span></div>
						</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
	</div>
	<!--/footer-->
	
</div>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>