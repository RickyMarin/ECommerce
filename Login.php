<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
        <link rel="icon" href="images/favicon.ico" type="image/ico">
		<title>Login Page - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <?php include("header.php"); ?>

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