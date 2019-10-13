<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <link rel="icon" href="images/favicon.ico" type="image/ico">
		<title>Talk2Me</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
			<?php
				include("header.php");
				echo $_ENV["PATH"];
			?>

<!-- Banner -->
				<section id="banner">
					<h2>Talk2Me</h2>
					<p>When you want some famous attention</p>
					<ul class="actions special">
						<li><a href="SignUp.php" class="button primary">Sign Up</a></li>
						<li><a href="AboutUs.php" class="button">Learn More</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h2>Introducing a new way
							<br />
							to connect with your favorite celebrities</h2>
							<p>Talk2Me facilitates video calls between celebrities and fans, providing them with a meaningful interaction
								that can't be found in a typical meet-and-greet experience.</p>
						</header>
						<!--<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>-->
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon solid major fa-video accent2"></span>
								<h3>Face to Face</h3>
								<p>Talk2Me video calls facilitate an intimate environment allowing you to get to know your favorite celebrities. </p>
							</section>
							<section>
								<span class="icon solid major fa-users accent3"></span>
								<h3>Celebrities</h3>
								<p>Browse through our sizable list of actors, singers, social media influencers, entrepreneurs, and so many more!</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon solid major fa-eye accent4"></span>
								<h3>Look Back</h3>
								<p>Video calls can be saved so you can go back and cherish the meaningful experiences you had.</p>
							</section>
							<section>
								<span class="icon solid major fa-lock accent5"></span>
								<h3>Privacy</h3>
								<p>Video calls are conducted through the generation of a one-time use link, avoiding the exchange of
										personal information and protecting the privacy of both the fan and the celebrity.</p>
							</section>
						</div>
					</section>
				</section>

			<!-- Footer -->
			<?php include("footer.php"); ?>

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