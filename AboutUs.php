<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <link rel="icon" href="images/favicon.ico" type="image/ico">
		<title>About Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <?php include("header.php"); ?>  
				<!--<header id="header">
					<h1><a href="index.html">Talk2Me</a> </h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Browse</a>
								<ul>
									<li><a href="index.html">Home</a></li>
									<li><a href="AboutUs.html">About Us</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="SignUp.html">Sign Up</a></li>
									<li><a href="Login.html">Login</a></li>
								</ul>
							</li>
							<li><a href="#" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>-->

			<!-- Main -->
			<script>
				window.onload = function () {
                startTab();
				};
	
				function startTab() {
					document.getElementById("defaultOpen").click();
	
				}
				// Get the element with id="defaultOpen" and click on it
				//document.getElementById("defaultOpen").click();
				
				function openPage(pageName) {
				  // Hide all elements with class="tabcontent" by default */
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				  }
				
				  // Remove the background color of all tablinks/buttons
				  tablinks = document.getElementsByClassName("tablink");
				  for (i = 0; i < tablinks.length; i++) {
					tablinks[i].style.backgroundColor = "";
				  }
				
				  // Show the specific tab content
				  document.getElementById(pageName).style.display = "block";
				
				  // Add the specific color to the button used to open the tab content
				  //elmnt.style.backgroundColor = color;
				}
		</script>
		
		<section id="main" class="container">		
			<h2 style="text-align:center;">About Us</h2>
			<div class="tab">
				<button class="tablink" onclick="openPage('What is')" id="defaultOpen">What is Talk2Me?</button>
				<button class="tablink" onclick="openPage('Who')">Who are we?</button>
			</div>
			<div id="What is" class="tabcontent">
				<div class="box">
					<h3>What is Talk2Me?</h3>
					<p> Talk2Me is a platform where fans can book a video call with their favorite celebrities.
						Talk2Me is a fast and easy service with instaneous, high quality calls as well as guaranteed
						appointments with our partner celebrities. </p>
					<div class="row">
						<div class="row-6 row-12-mobilep">
							<h3>What is our mission?</h3>
							<p>Our mission is to aid the creation of meaningful interactions for fans. In the day and age
							of modern social media, with our fast-paced society, meaningful conversations are becoming more of a relic
							of the past, lowering the amount of quality face-to-face interactions that humans were founded on as social creatures.
							Our goal is to help revamp these in-person interactions, while at the same time serving the huge popularity out there
							today for celebrities, from Hollywood stars to athletes to YouTube stars. </p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>How Does Talk2Me Work?</h3>
							<p>Fans can browse through the Talk2Me list of celebrities and select the one
								they would like to interact with over a video call. They will fill out a form
								with their availability for the video call. After purchase and confirmation that
								the celebrity will be able to conduct the video call, Talk2Me will generate a one-time
								use link to a video chat platform.</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>Which celebrities are we partnered with?</h3>
							<p>Our celebrity list grows day by day and we do not discriminate on industry. So long as they have
							a significant following, they can be our partners! The industries convered range from movie stars to NCAA athletes
							to Instagram models, and much more! If your favority celebrity is not currently on our list, feel free to <a href="contact.php">Contact Us</a>
							and suggest your celebrity!</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<h3>Why Should I Use Talk2Me?</h3>
							<p>Have you ever looked at a celebrity and thought, <i>"Wow, we would probably be great friends if
								they got to know me"</i>? Talk2Me gives you this rare opportunity! Talk2Me is a fun way
								to get to know your favorite celebrities through an intimate conversation. Why <i>shouldn't</i>
								you use Talk2Me?</p>
						</div>
					</div>
				</div>
				<div style="text-align: center;">
					<a href="SignUp.php" class="button">Sign Up Now</a>
				</div>
			</div>
			<div id="Who" class="tabcontent">
				<div class="box">
					<h2>Who are we?</h2>
						<div class="row-6 row-12-mobilep">
							<img src="Eldon Luk.jpg" alt="Eldon Luk" width="200" height="200" align="left">
							<h3>  	Eldon Luk</h3>
							<h4>  	CEO</h4>
							<p>  	Eldon Luk is a third-year Computer Science student at UVa who is interested
							in pursuing a career in Data Science.</p>
						</div>
						<div class="row-6 row-12-mobilep">
							<img src="Ricky Marin.jpeg" alt="Ricky Marin" width="200" height="200" align="left">
							<h3>  	Ricky Marin</h3>
							<h4>  	CTO/CFO</h4>
							<p>  	Ricky Marin is a dedicated third-year college student at UVa who is committed to
							providing a quality service at a quality cost.</p>
						</div>
						
						
						<div class="row-6 row-12-mobilep">
							<img src="Vivian Pham.jpeg" alt="Vivian Pham" width="200" height="200" align="left">
							<h3>  	Vivian Pham</h3>
							<h4>  	COO</h4>
							<p>  	Vivian Pham is a hard worker committed to furthering the company's vision of success</p>
						</div>
				</div>
		</section>


			<!-- Footer -->
			<?php include("footer.php"); ?>  
				<!--<footer id="footer">
				<!--	<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; 2019 Talk2Me. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>-->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>