<?php
			if($_POST['submit']=='SUBMIT'){
				$to = 'marketing@relevancelab.com'; // note the comma
				$subject = 'Contact Us details';
				$message = '
				<html>
				<head>
<meta name="description" content="Relevance Lab is a specialist cloud solutions company focused on IP creation & high tech services. Know more.">
				<title>Contact Us Details</title>
</head>
				<body>
				
				<table border=1 width=250>
				
				<tr>
				<td>Name</td>
				<td>'.$_POST['fname'].'</td>
				</tr>
				<tr>
				<td>E-mail</td>
				<td>'.$_POST['mail'].'</td>
				</tr>
				<tr>
				<td>Subject</td>
				<td>'.$_POST['subject'].'</td>
				</tr>
				<tr>
				<td>Message</td>
				<td>'.$_POST['message'].'</td>
				</tr>				
				</table>
				</body>
				</html>
		';		
		// To send HTML mail, the Content-type header must be set
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		mail($to, $subject, $message, $headers);
		echo "<script>alert('Email Sent Successfully!');</script>";
			}	?>


<!DOCTYPE html>

<html lang="en">
<head>
<title>Contact | DevOps Specialist Company</title>
<link href="favicon.ico" rel="shortcut icon">
<link href="images/favicon_img.png" type="image/png" rel="icon">
<meta charset="utf-8"/>
<meta name="description" content="Relevance Lab is a specialist cloud solutions company focused on IP creation & high tech services. Know more."><!--Description of this page-->
<meta name="keywords" content=""><!--Specify Keywords for SEO-->
<meta name="robots" content="all"><!--meta tag for all search engines-->
<meta name="googlebot" content="all,index,follow"><!--meta tag specificaly for Google search engine-->
<meta name="author" content="Srinivasa kumar">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Styles -->
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/bootstrap-override.css" rel="stylesheet">
<link rel="stylesheet" href="css/theme.css">
<link rel="stylesheet" href="css/index.css" media="screen" />
<link href="css/font.css" rel='stylesheet'>
<link href="css/customstyles.css" rel='stylesheet'>   
<link href="css/animate.css" rel='stylesheet'>     
<script type="text/javascript">   var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-28403818-1']);  _gaq.push(['_trackPageview']);   (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })(); </script>
</head>
<body id="getintouch">
<!--Navigation-->
<header>
<div class="navbar transparent  navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span></a>
<a href="index.html" class="brand"><img src="images/Logo3.png" alt="logo" class="logo-container" /></a>
<div class="nav-collapse collapse">
<ul class='nav pull-right'>
<li class=''>
<a href="index.html">HOME</a>
</li>

<li class=""><a href="Devops.html">DEVOPS</a></li>

<li class=''>
<a href="Offerings.html">OFFERINGS</a>
</li>


<li class=''>
<a href="verticals.html">VERTICALS</a>
</li>

<li class=''>
<a href="identity.html">IDENTITY</a>
</li>
<li class=''>
<a href="buzz.html">BUZZ</a>
</li>
<li class=''>
<a href="careers.html">CAREERS</a>
</li>
<li class='active'>
<a href="contact.php">CONTACT</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</header>
<!--Navigation-->
<p>

</p>
<!--Get in touch-->
<section class="section-wrapper-top  showcase">
<div class="container">
<div class="section_header2">
<h3>Get in Touch</h3>
</div>
<hr>
<div class="contact-info">
<p>We’d love to hear from you. Interested in working together? Fill out the form below with some info about your project and I will get back to you as soon as I can.&nbsp;<small style="color: #b30808">*Please fill all the required form fields, thanks!</small></p>
<span class="pull-right"></span>
</div>



<form method="post" action="" id="myForm">
<div class="row">
<div class="span4"><input type="text" class="input-xlarge contact" id="fname" name="fname" placeholder="*Enter your full name" required="required"></div>
<div class="span4"><input type="email" class="input-xlarge contact" id="mail" name="mail" placeholder="*Enter your email address" required="required"></div>
<div class="span4"><input type="text" class="input-xlarge contact" id="subject" name="subject" placeholder="Enter your subject"></div>
</div>
<div class="row">
<div class="span12">
<textarea style="width: 97%" rows="10" id="message" name="message" placeholder="*Your message here" required="required"></textarea>
<p><input class="btn  btn-primary pull-left" type="submit" value="SUBMIT" name="submit">
</p>
</div>
</div></form>
</div>
</section>
<!--Get in touch-->

<!--Our Locations-->
<section class="section-wrapper pre-footer" id="contact-section">
<div class="container">
<div class="section_header2">
<h3>Our Locations</h3>
</div>
<hr>
<div class="row">
<div class="span4">
<div class="feature-item animated" >
<h4>Relevance Lab Inc.</h4>
<p>Suite 210W Gateway Office, 2001 Gateway Place,San Jose, CA 95110,</br>
Tel: +1 408 392 0200</p></div></div>
<div class="span4"  >
<div class="feature-item animated" >
<h4>Relevance Lab Pvt. Ltd.</h4>
<p>1st Floor, CSRIE, Grape Garden Technology Park 17 H Main Road, 6th Block, Koramangala, Bangalore – 560095, Tel : +91-80-6726 1000</p>
</div></div>
<div class="span4"  >
<div class="feature-item animated">
<h4>Relevance Lab Pte. Ltd.</h4>
<p>20 Maxwell Road, #11-09, Maxwell House Singapore 069113</p>
</div></div>
</div></div>
</section>
<!--Our Locations

<iframe height="350" style="width:100%;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.co.in/maps?t=m&amp;q=Relevance+Lab+Inc,+Gateway+Place,+San+Jose,+CA,+United+States&amp;ie=UTF8&amp;hq=Relevance+Lab+Inc,&amp;hnear=Gateway+Pl,+San+Jose,+California+95110,+United+States&amp;ll=37.371999,-121.918716&amp;spn=0.023874,0.036392&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>

<!--Google map-->
<section>
<div id="map_canvas_custom_129737" style="width:100%; height:405px" ></div>
<script type="text/javascript">
(function(d, t) {var g = d.createElement(t),s = d.getElementsByTagName(t)[0];
   g.src = "http://map-generator.net/en/maps/129737.js?point=2001+Gateway+Place%2C+San+Jose%2C+CA+95110%2C+USA";
   s.parentNode.insertBefore(g, s);}(document, "script"));</script>
</section>
<footer>

<div class="deep-footer">
<div class="container">
<div class="row">
<div class="span10"><p>© 2013 Relevance Lab. All rights reserved | </p>
<!--<div class="span10"><p>© 2013 Relevance Lab. All rights reserved | This site is best viewed in 1024/768 resolution or higher</p>-->
</div>
    
<div class="span2">
<p><a href="sitemap.html"><img src="images/sitemap_icon_07.png" alt="sitemap" />Sitemap</a></p>
</div>
</div>
</div>
</div>
</footer>
<!-- Scripts -->

<script src="js/latest-jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>
<script src="js/index-slider.js"></script>           
<script src="js/waypoint.js"></script>          
</body>
</html>
