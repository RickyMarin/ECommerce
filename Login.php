<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Login Page - Alpha by HTML5 UP</title>
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

			<section id="main" class="container medium">
				<header>
					<h2>Login Here!</h2>
					<p>Enter your username and password to begin chatting with your favorite celebrities!</p>
				</header>
				<div class="box">
					<form method="post" action="#">
						<div class="row gtr-50 gtr-uniform">
							<div class="col-12">
								<input type="text" name="Username" id="username" value="" placeholder="Username" />
							</div>
							<div class="col-12">
								<input type="text" name="Password" id="password" value="" placeholder="Password" />
							</div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" value="Login" /></li>
								</ul>
							</div>
						</div>
					</form>
				</div>
			</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

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