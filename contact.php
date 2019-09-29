<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Main -->
    <section id="main" class="container medium">
        <header>
            <h2>Contact Us</h2>
            <p>Tell us what you think about our little operation.</p>
        </header>
        <div class="box">
            <form method="post" action="#">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="name" id="name" value="" placeholder="Name" />
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="email" name="email" id="email" value="" placeholder="Email" />
                    </div>
                    <div class="col-12">
                        <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                    </div>
                    <div class="col-12">
                        <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Send Message" /></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>

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
