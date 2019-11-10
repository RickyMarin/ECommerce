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
    <?php
   if(empty($_SESSION)){
       header("Location: Signup.php");
   }
    ?>

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
					<p style="text-align:left; color:black">Tina Fey is an American actress, comedian, writer, producer, and playwright. She is best known for her work on the NBC sketch comedy series Saturday Night Live and for creating the acclaimed comedy series 30 Rock and Unbreakable Kimmy Schmidt.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Tina Fey"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Tony Bennett.jpg" alt="Tony Bennett" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Tony Bennett</h3>
					<h4 style="text-align:left">Basketball Coach</h4>
					<p style="text-align:left; color:black">Tony Bennett is an American basketball coach and former player. He has been the head men's basketball coach at the University of Virginia since March 31, 2009.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Tony Bennett"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Taylor Swift.jpg" alt="Taylor Swift" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Taylor Swift</h3>
					<h4 style="text-align:left">Singer</h4>
					<p style="text-align:left; color:black">Taylor Swift is an American singer-songwriter. She is known for narrative songs about her personal life, which have received widespread media coverage.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Taylor Swift"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Bazzi.jpg" alt="Bazzi" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Bazzi</h3>
					<h4 style="text-align:left">Singer</h4>
					<p style="text-align:left; color:black">Bazzi is an American singer, songwriter, rapper and record producer. His song "Mine", released in October 2017, gained popularity in early 2018 when it became a meme through the use of a Snapchat lens filter featuring the song.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Bazzi"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Kyle Guy.jpg" alt="Kyle Guy" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Kyle Guy</h3>
					<h4 style="text-align:left">Basketball Player</h4>
					<p style="text-align:left; color:black">Kyle Guy is an American professional basketball player for the Sacramento Kings of the National Basketball Association. He played college basketball for the Virginia Cavaliers.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Kyle Guy"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Ricky Martin.jpeg" alt="Ricky Martin" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Ricky Martin</h3>
					<h4 style="text-align:left">Singer</h4>
					<p style="text-align:left; color:black">Ricky Martin is a Puerto Rican singer, actor and author who is widely regarded as the "King of Latin Pop".</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Ricky Martin"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Alfred Weaver.jpg" alt="Alfred Weaver" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Alf Weaver</h3>
					<h4 style="text-align:left">Professor</h4>
					<p style="text-align:left; color:black">Alf Weaver received his Ph.D. in Computer Science from the University of Illinois in 1976. He joined the University of Virginia in 1977 and is now Professor of Computer Science, Chair of the UVA Faculty Senate, and Founding Director of UVA’s Applied Research Institute.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Alfred Weaver"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Axel Gunnarsson.jpg" alt="Axel Gunnarsson" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Axel Gunnarsson</h3>
					<h4 style="text-align:left">Soccer Player</h4>
					<p style="text-align:left; color:black">Axel Gunnarsson is a Swedish soccer player who currently plays for the University of Virginia.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Axel Gunnarsson"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Katy Perry.jpg" alt="Katy Perry" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Katy Perry</h3>
					<h4 style="text-align:left">Singer</h4>
					<p style="text-align:left; color:black">Katy Perry, is an American singer, songwriter and television judge.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Katy Perry"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Sandra Oh.jpg" alt="Sandra Oh" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Sandra Oh</h3>
					<h4 style="text-align:left">Actress</h4>
					<p style="text-align:left; color:black">Sandra Oh is a Canadian-American actress. She is best known for her roles as Cristina Yang on the ABC medical drama series Grey's Anatomy and Eve Polastri in the BBC America spy thriller series Killing Eve.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Sandra Oh"/>
                    </form>
                </div>
                <div class="us">
                    <img src="Ty Jerome.jpg" alt="Ty Jerome" width="180" height="180" align="left" margin-right:10px>
					<h3 style="text-align:left">Ty Jerome</h3>
					<h4 style="text-align:left">Basketball Player</h4>
					<p style="text-align:left; color:black">Ty Jerome is an American professional basketball player for the Phoenix Suns of the National Basketball Association. He played college basketball for the Virginia Cavaliers.</p>
                    <form id="insert" name="insert" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                    method="POST">
                        <div class="oneline">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" value="" placeholder="Email"/>
                        </div>
                        <div class="oneline">
                            <label for="datetime">Date and time desired for call:</label>
                            <input type="datetime-local" name="datetime" id="datetime" value="" min="<?php echo date('Y-m-d\TH:i'); ?>" max="2025-12-31T23:59"/>
                        </div>
                        <input type="submit" value="Schedule now!" id="submit"/>
                        <input type="hidden" id="celebrity" name="celebrity" value="Ty Jerome"/>
                    </form>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>