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
	 <?php
        $dbconn = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com port=5432 dbname=d8k5ke2dtvb9ue user=lkoloaarfawvjm password=adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703");
        function makeSafe($value)
        {
            $value = htmlspecialchars($value);
            return $value;
        }
        session_start();
        if(isset($_SESSION['logged_in'])){
            header("Location:Celebrities.List.php");
        }
        
        $msg = '';
		if(isset($_POST['email']) && isset($_POST['password'])) {
			$password = $_POST['password'];
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$email = makeSafe($_POST["email"]);
			$dbconn = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com port=5432 dbname=d8k5ke2dtvb9ue user=lkoloaarfawvjm password=adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703");
			$query = "SELECT password FROM users WHERE email = '$email'";
			$result = pg_query($dbconn, $query);
            $row = pg_fetch_row($result);

			if(password_verify($password, $row[0])){
			    session_start();
			    $_SESSION['logged_in']=true;
				header("Location:Celebrities.List.php");
			}
			else{
				$msg = "Incorrect login credentials. Please try again.";
			}
		}
	?>
	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <?php include("header.php"); ?>

			<section id="main" class="container medium">
				<header>
					<h2>Login Here!</h2>
					<p>Enter your username and password to begin chatting with your favorite celebrities!</p>
				</header>
                <?php if (!empty($msg)) {
                    echo "<center><h2>$msg</h2></center>";
                } ?>
				<div class="box">
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<div class="row gtr-50 gtr-uniform">
							<div class="col-12">
								<input type="text" name="email" id="email" value="" placeholder="Email" />
							</div>
							<div class="col-12">
								<input type="password" name="password" id="password" value="" placeholder="Password" />
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