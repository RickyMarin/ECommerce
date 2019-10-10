<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

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
        <form method="POST" action="SignUp.php">
            <div class="row gtr-50 gtr-uniform">
                <div class="col-6 col-12-mobilep">
                    <input type="text" name="name" id="name" value="" placeholder="Name" />
                </div>
                <div class="col-6 col-12-mobilep">
                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <div class="col-12">
                    <textarea name="Username" id="Username" placeholder="Enter a username" rows="1"></textarea>
                </div>
                <div class="col-12">
                    <textarea name="Password" id="Password" placeholder="Enter a password" rows="1"></textarea>
                </div>
                <div class="col-12">
                    <textarea name="Address" id="Address" placeholder="Address" rows="1"></textarea>
                </div>
                <div class="col-4">
                    <textarea name="City" id="City" placeholder="City" rows="1"></textarea>
                </div>
                <div class="col-4">
                    <textarea name="ZipCode" id="ZipCode" placeholder="Zip Code" rows="1"></textarea>
                </div>
                <div class="col-4">
                    <select>
                        <option value="" disabled selected>State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
                <div class="col-6 col-12-mobilep">
                    <textarea name="Age" id="Age" placeholder="Enter your age 18+" rows="1"></textarea>
                </div>
                <div class="col-6 col-12-mobilep">
                    <textarea name="FavoriteCelebrity" id="FavoriteCelebrity" placeholder="Enter your favorite celebrity" rows="1"></textarea>
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" value="Sign Up!" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Footer -->


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
        $ZipMessage = "Enter a correct Zip Code";
    }
    else{
        $ZipCode = $_POST["Zip"];

    }

    if (empty($_POST["ZipCode"])) {
        $AgeMessage = "Enter a correct age";
    }}
?>


<?php
    $dbconn = pg_connect("dbname=siteUsers");
    $query = "INSERT INTO siteUsers VALUES ('$_POST[name]', '$_POST[email]', '$_POST[Username]', '$_POST[Age]', '$_POST[state]', '$_POST[Address]', '$_POST[City]', '$_POST[ZipCode]', '$_POST[FavoriteCelebrity]')";
    $result = pg_querty($query);
    if(!result){
        echo "Sign up failed. Please try again!";
    }
    else{
        echo "Sign up Success! Talk to your favorite celebrity now!";
    }
?>

</div>
<?php include("footer.php"); ?>
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