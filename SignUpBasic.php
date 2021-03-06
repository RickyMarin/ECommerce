

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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<style>
    input[type=radio] {
        border: 0px;
        width: 100%;
        height: 2em;
    }
</style>

<body class="is-preload">
<div id="page-wrapper">


    <!-- Header -->
    <?php include("header.php"); ?>

    <section id="main" class="container medium">
        <header>
            <h2>Sign Up</h2>
            <p>Congratulations on signing up for the basic membership!
                Your payment has been accepted and will renew monthly until cancelled.
                Finish the sign up process now to join all the action!
                Any errors will be listed below.</p>
        </header>
        <?php
        $dbconn = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com port=5432 dbname=d8k5ke2dtvb9ue user=lkoloaarfawvjm password=adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703");
        function makeSafe($value)
        {
            $value = htmlspecialchars($value);
            return $value;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $UsernameError = $emailMessage = $genderErr = $AgeMessage = "";
            $Username = $email = $ZipMessage = $comment = $hashedPassword = "";
            $age = $ZipCode = 0;
            $error = false;
            $password = $_POST['Password'];
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $name = makeSafe($_POST["name"]);
            //$username = makeSafe($_POST["Username"]);
            $city = makeSafe($_POST["City"]);
            $address = makeSafe($_POST["Address"]);
            $email = makeSafe($_POST["email"]);
            $favoriteCelebrity = makeSafe($_POST["FavoriteCelebrity"]);
            if (empty($name)) {
                echo "<font color=red  size='5pt'>Enter your name.</font> </p>";
                $error = true;
                // echo "<font size="45" "Enter your name">";
            } else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                    echo "<font color=red  size='5pt'>You have an invalid character in your name.</font> </p>";
                    $error = true;

                }
            }

            //name is fine, moves on to email
            if (empty($email)) {
                echo "<font color=red  size='5pt'>Enter an Email.</font> </p>";
                $error = true;
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<font color=red  size='5pt'>You need a proper email format.</font> </p>";
                    $error = true;
                }
            }
            if (empty($_POST["Age"])) {
                echo "<font color=red  size='5pt'>You did not enter an Age.</font> </p>";
                $error = true;
            } else {
                $age = $_POST["Age"];
                if (!filter_var(intval($age), FILTER_VALIDATE_INT)) {
                    echo "<font color=red  size='5pt'>You did not enter a number for your age.</font> </p>";
                    $error = true;
                }
                if (intval($age) > 110 || intval($age) < 18) {
                    echo "<font color=red  size='5pt'>You are not the proper age.</font> </p>";
                    $error = true;
                }
                //Age is fine
            }
            if (empty($_POST["ZipCode"])) {
                echo "<font color=red  size='5pt'>You did not enter a Zip Code.</font> </p>";
                $error = true;
            } else {
                $ZipCode = $_POST["ZipCode"];
                if (!filter_var(intval($ZipCode), FILTER_VALIDATE_INT)) {
                    echo "<font color=red  size='5pt'>You did not enter a proper number for Zip Code.</font> </p>";
                    $error = true;
                }
                if (strlen($ZipCode) != 5) {
                    echo "<font color=red  size='5pt'>You did not enter a proper 5 digit Zip Code.</font> </p>";
                    $error = true;
                }

            }

            if (empty($_POST["Address"])) {
                echo "<font color=red  size='5pt'>You did not enter an address.</font> </p>";
                $error = true;
            } else {
                if (!preg_match('/^\\d+ [a-z0-9A-Z ]+/', $address)) {
                    echo "<font color=red  size='5pt'>You did not enter a correct address.</font> </p>";
                    $error = true;
                }
            }
            if (empty($city)) {
                echo "<p align='left'> <font color=red  size='5pt'>Enter a city.</font> </p>";
                $error = true;
            } else {
                if (!preg_match("/^[a-zA-Z ]*$/", $city)) {
                    echo "<font color=red  size='5pt'>You need a proper city.</font> </p>";
                    $error = true;

                }
            }
            if (empty($_POST["FavoriteCelebrity"])) {
                echo "<font color=red  size='5pt'>You did not enter a favorite celebrity.</font> </p>";
                $error = true;
            }
            if (empty($_POST['Password'])) {
                echo "<font color=red  size='5pt'>You did not enter a password.</font> </p>";
                $error = true;
            }
            if (empty($_POST["State"])) {
                echo "<font color=red  size='5pt'>You did not enter a state</font> </p>";
                $error = true;
            }

            if ($error == false) {
                //echo "<p align='left'> <font color=red  size='6pt'>NO ERRORS.</font> </p>";
                $query = "INSERT INTO users VALUES ('$_POST[name]','$_POST[email]','$_POST[Age]','$_POST[Address]','$_POST[City]','$_POST[State]','$_POST[ZipCode]','$_POST[FavoriteCelebrity]','$hashedPassword', '$_POST[membership]')";
                $result = pg_query($dbconn, $query);
                if (!$result) {
                    echo "<center><h2>You have entered an email that has already been signed up. Please enter a different email.</h2></center>";
                } else {
                    session_start();
                    $_SESSION['logged_in']=true;
                    header("Location:Celebrities.List.php");
                }
            }
        }
        ?>

        <?php
        use PHPMailer\PHPMailer\PHPMailer;

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['Password']) && isset($_POST['Address'])
            && isset($_POST['City']) && isset($_POST['State']) && isset($_POST['ZipCode']) && isset($_POST['Age'])
            && isset($_POST['FavoriteCelebrity']) && isset($_POST['membership'])) {
            require 'vendor/autoload.php';

            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "talk2mecontact@gmail.com";
            $mail->Password = "RickyEldonVivian";
            $mail->SetFrom("talk2mecontact@gmail.com");
            $mail->Subject = "Welcome to Talk2Me!";
            $mail->Body = "Thank you for signing up for Talk2Me! Get ready to begin talking to your favorite celebrities.";
            $mail->AddAddress($_POST["email"]);
            $mail->Send();
            }
        ?>
        <div class="box">
            <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                  method="POST">
                <div class="row gtr-50 gtr-uniform">
                    <div class="col-6 col-12-mobilep">
                        <label for="NameLabel">Name:</label>
                        <input type="text" name="name" id="name" value="" placeholder="Name"/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <label for="emailLabel">Email:</label>
                        <input type="email" name="email" id="email" value="" placeholder="Email"/>
                    </div>
                    <div class="col-12">
                        <label for="PasswordLabel">Password:</label>
                        <input type="password" name="Password" id="Password" placeholder="Enter a password"/>
                    </div>
                    <div class="col-12">
                        <label for="AddressLabel">Address:</label>
                        <input type="text" name="Address" id="Address" placeholder="Address"/>
                    </div>
                    <div class="col-4">
                        <label for="CityLabel">City:</label>
                        <input type="text" name="City" id="City" placeholder="City"/>
                    </div>
                    <div class="col-4">
                        <label for="State">State:</label>
                        <select name="State">
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
                    <div class="col-4">
                        <label for="ZipCodeLabel">Zip Code:</label>
                        <input type="text" name="ZipCode" id="ZipCode" placeholder="Zip Code"/>
                    </div>

                    <div class="col-6 col-12-mobilep">
                        <label for="AgeLabel">Age:</label>
                        <input type="text" name="Age" id="Age" placeholder="Enter your age 18+"/>
                    </div>
                    <div class="col-6 col-12-mobilep">
                        <label for="FavoriteCelebrityLabel">Favorite Celebrity:</label>
                        <input type="text" name="FavoriteCelebrity" id="FavoriteCelebrity"
                               placeholder="Enter your favorite celebrity"/>
                    </div>
                    <div class="">
                        <input type="radio" name="membership" value="basic" id="b" checked="checked"/> <label for="b">Basic Membership: $19.99/month, with 5 calls a month</label><br>
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

    <!-- Footer -->



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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
