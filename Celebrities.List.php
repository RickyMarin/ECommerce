<html>
    <head>
        <link rel="icon" href="images/favicon.ico" type="image/ico">
        <title>Login Page</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body class="is-preload">
        <?php include("LoggedInHeader.php"); ?>
        
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
        
        <div id="page-wrapper">
            <div class="box">
                <style>
                    .oneline {
                     width: 350px;
                     height: 100px;
                     border: solid 1px #ccc;
                     display: inline-block;
                    }
                </style>
                <h2>The following celebrities can currently be scheduled:</h2>
                <div class="us">
                    <img src="Tinay Fey.jpeg" alt="Tina Fey" width="180" height="180" align="left">
					<h3 style="text-align:left">Tina Fey</h3>
					<h4 style="text-align:left">Actress</h4>
					<p style="text-align:left; color:black">Tina Fey is an American actress, comedian, writer, producer, and playwright. She is best known for her work on the NBC sketch comedy series Saturday Night Live and for creating the acclaimed comedy series 30 Rock and Unbreakable Kimmy Schmidt. </p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="" placeholder="Name"/>
                        </div>
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value=""/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>