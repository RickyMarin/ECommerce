<html>
    <head>
        <link rel="icon" href="images/favicon.ico" type="image/ico">
        <title>Celebrities List</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    
    <body class="is-preload">
        <?php include("LoggedInHeader.php"); ?>
        
        <?php
        use PHPMailer\PHPMailer\PHPMailer;
        if(isset($_POST['email']) && isset($_POST['datetime'])) {
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
            $mail->Subject = "Appointment has been set!";
            $mail->Body = "Thank you for setting up your appointment with " . $_POST['celebrity'] . " on " . $_POST['datetime'] . "! A representative will reach out soon to confirm the call.";
            $mail->AddAddress($_POST["email"]);
            $mail->Send();
            
            $msg = "Appointment has been set! A representative of " . $_POST['celebrity'] . " will reach out shortly to confirm the call.";
            }
        ?>
        
        <div id="page-wrapper">
            <div class="box">
                <style>
                    .oneline {
                     width: 300px;
                     height: 100px;
                     display: inline-block;
                     margin-right:10px;
                    }
                    
                    h3{
                        color:blue;
                    }
                    /*#name {display:inline-block;margin-right:10px;}
                    #email {display:inline-block;margin-right:10px;}
                    #datetime {display:inline-block;margin-right:10px;} 
                    #submit {display:inline-block;} */
                </style>
                <?php if (!empty($msg)) {
                    echo "<center><h3>$msg</h3></center>";
                } ?>
                <h2>The following celebrities can currently be scheduled:</h2>
                <div class="us">
                    <img src="Tinay Fey.jpeg" alt="Tina Fey" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Tina Fey</h3>
					<h4 style="text-align:left">Actress</h4>
					<p style="text-align:left; color:black">Tina Fey is an American actress, comedian, writer, producer, and playwright. She is best known for her work on the NBC sketch comedy series Saturday Night Live and for creating the acclaimed comedy series 30 Rock and Unbreakable Kimmy Schmidt. </p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min=2019-10-25 max=2025-12-31/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Tina Fey"/>
                    </form>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>