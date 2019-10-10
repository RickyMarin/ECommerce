<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<!-- hello -->
<html>
<head>
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <title>Login Page</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <?php include("header.php"); ?>

    <section id="main" class="container medium">
        <header>
            <h2>Sign Up</h2>
            <p>Sign up now to join all the action!</p>
        </header>
        <div class="box">
            <form method="post" action="#">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        <input type="text" name="name" id="name" value="" placeholder="Name"/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <input type="email" name="email" id="email" value="" placeholder="Email"/>
                    </div>
                    <div class="col-12">
                        <textarea name="Age" id="Age" placeholder="Enter your age 18+" rows="1"></textarea>
                    </div>
                    <div class="col-12">
                        <textarea name="Username" id="Username" placeholder="Enter a username" rows="1"></textarea>
                    </div>
                    <div class="col-12">
                        <textarea name="Favorite Celebrity" id="Favorite Celebrity"
                                  placeholder="Enter your favorite celebrity" rows="1"></textarea>
                    </div>
                    <div class="col-12">
                        <textarea name="Password" id="Password" placeholder="Enter a password" rows="1"></textarea>
                    </div>
                    <div class="col-12">
                        <ul class="actions special">
                            <li><input type="submit" value="Sign Up!"/></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php
    $UsernameError = $emailMessage = $genderErr = $AgeMessage = "";
    $Username = $email = $ZipMessage = $comment =  "";
    $age= $ZipCode = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Username"])) {
            $UsernameError = "Enter your name";
        } else {
            $Username = ($_POST["Username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $Username)) {
                $UsernameError = "You do not have a proper username";
            }
        }
        //name is fine, moves on to email
        if (empty($_POST["email"])) {
            $emailMessage = "Enter an Email";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailMessage = "Invalid email format";
            }
        }
    if (empty($_POST["Age"])) {
        $AgeMessage = "Enter a correct age";
    }
    else{
        $age = $_POST["Age"];
        if (!filter_var($age, FILTER_VALIDATE_INT)) {
            $AgeMessage = "Invalid Age";
        }
        if ($age < 110 && $age > 18){
            $AgeMessage = "Invalid Age";
        }
        //Age is fine
    }
    if (empty($_POST["Zip"])) {
        $AgeMessage = "Enter a correct age";
    }}
    ?>
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