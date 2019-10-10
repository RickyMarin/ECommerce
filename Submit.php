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
    }
    $dbuser = 'lkoloaarfawvjm';
    $dbpass = 'adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703';
    $host = 'ec2-174-129-218-200.compute-1.amazonaws.com';
    $dbname = 'd8k5ke2dtvb9ue';
    #$dbh = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
    $dbconn = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com port=5432 dbname=d8k5ke2dtvb9ue user=lkoloaarfawvjm password=adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703");
    if($dbconn){
        echo "Connected!";
    }
    else{
        echo "Connection failure";
    }
    //echo $query;
    $query = "INSERT INTO siteUsers(name, email, username, age, state, address, city, zipcode, favoriteCelebrity,hashedPassword) VALUES('test','test','test','1','VA','123 Main','11111','Jessica Alba','password')";
//'$_POST[name]', '$_POST[email]', '$_POST[Username]', '$_POST[Age]', '$_POST[state]', '$_POST[Address]', '$_POST[City]', '$_POST[ZipCode]', '$_POST[FavoriteCelebrity]')";
    $result = pg_query($dbconn,$query);
    if(!$result){
        echo "Sign up failed. Please try again!";
    }
    else{
        echo "Sign up Success! Talk to your favorite celebrity now!";
    }}
?>