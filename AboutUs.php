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

    <style>
        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            color: black;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #EFCA46;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 0;
            border: 1px solid #ccc;
            border-top: none;
        }

        .us {
            background-color: lightgray;
            color: white;
            margin: 10px;
            padding: 30px;
            height: 250px;
            vertical-align: middle;
        }
    </style>

	<body class="is-preload">
		<div id="page-wrapper">

			<!-- Header -->
            <?php include("header.php"); ?>

			<!-- Main -->
			<script>
				window.onload = function () {
                startTab();
				};
	
				function startTab() {
					document.getElementById("defaultOpen").click();
				}

				function openPage(evt, pageName) {
				  // Hide all elements with class="tabcontent" by default */
				  var i, tabcontent, tablinks;
				  tabcontent = document.getElementsByClassName("tabcontent");
				  for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				  }
				
				  // Remove the background color of all tablinks/buttons
				  tablinks = document.getElementsByClassName("tablink");
				  for (i = 0; i < tablinks.length; i++) {
					//tablinks[i].style.backgroundColor = "";
                      tablinks[i].className = tablinks[i].className.replace(" active", "");
				  }
				
				  // Show the specific tab content
				  document.getElementById(pageName).style.display = "block";
				  evt.currentTarget.className += " active";
				}
		</script>

		<section id="main" class="container">		
			<h2 style="text-align:center;">About Us</h2>
			<div class="tab">
				<button class="tablink" onclick="openPage(event,'What is')" id="defaultOpen">What is Talk2Me?</button>
				<button class="tablink" onclick="openPage(event,'Who')">Who are we?</button>
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
						<div class="us">
							<img src="Eldon Luk.jpg" alt="Eldon Luk" width="180" height="180" align="left">
							<h3 style="text-align:center">Eldon Luk</h3>
							<h4 style="text-align:center">Chief Financial Officer</h4>
							<p style="text-align:center; color:black">Eldon Luk is a third-year Computer Science student at UVa who is interested
							in pursuing a career in Data Science.</p>
						</div>
						<div class="us">
							<img src="Ricky Marin.jpeg" alt="Ricky Marin" width="180" height="180" align="left">
							<h3 style="text-align:center">Ricky Marin</h3>
							<h4 style="text-align:center">Chief Technology Officer</h4>
							<p style="text-align:center; color:black">Ricky Marin is a dedicated third-year college student at UVa who is truly committed to
							providing a quality service at a quality cost as CTO/CFO.</p>
						</div>
						<div class="us">
							<img src="Vivian Pham.jpeg" alt="Vivian Pham" width="180" height="180" align="left">
							<h3 style="text-align:center">Vivian Pham</h3>
							<h4 style="text-align:center">Chief Marketing Officer</h4>
							<p style="text-align:center; color:black">Vivian Pham is a hard working UVa student committed to furthering and managing the company's vision of success.</p>
						</div>
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