<?php
//$UsernameError = $emailMessage = $genderErr = $AgeMessage = "";
//$Username = $email = $ZipMessage = $comment =  $hashedPassword = "";
//$age= $ZipCode = 0;
//echo $_POST["Username"];
//var_dump($GLOBALS);
$password = $_POST['Password'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$dbconn = pg_connect("host=ec2-174-129-218-200.compute-1.amazonaws.com port=5432 dbname=d8k5ke2dtvb9ue user=lkoloaarfawvjm password=adfffbf2c20b090912c5ffe90c7fc1e3d82b0af7dd240dc20b51dac2d7a89703");
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST[Username])) {
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

    if (empty($_POST["Age"])) {
        $AgeMessage = "Enter a correct age";
    }

    //$query="INSERT INTO test VALUES('$_POST[name]')";
    $query = "INSERT INTO customers VALUES ('$_POST[name]','$_POST[Username]','$_POST[email]','$_POST[Age]','$_POST[Address]','$_POST[City]','$_POST[State]','$_POST[ZipCode]','$_POST[FavoriteCelebrity]','$hashedPassword')";
    $result = pg_query($dbconn,$query);
    if(!$result){
        echo "You have chosen a Username that has already been chosen. Please enter a new username.";
    }
    else{
        echo "Sign up Success! Talk to your favorite celebrity now!";
    }}
?>