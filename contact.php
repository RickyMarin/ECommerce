 <!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <title>Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <?php include("header.php"); ?>

    <?php
        use PHPMailer\PHPMailer\PHPMailer;
        require 'vendor/autoload.php';
        $msg = '';

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
            $mail = new PHPMailer;
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->Username = "talk2mecontact@gmail.com";
            $mail->Password = "RickyEldonVivian";
            $mail->setFrom('talk2mecontact@gmail.com', 'Talk2Me');
            $mail->addAddress('talk2mecontact@gmail.com', 'Talk2Me');

            if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
                $mail->Subject = $_POST['subject'];
                $mail->isHTML(false);
                $mail->Body = <<<EOT
                Email: {$_POST['email']}
                Name: {$_POST['name']}
                Message: {$_POST['message']}
                EOT;
                //Send the message, check for errors
                if (!$mail->send()) {
                    //The reason for failing to send will be in $mail->ErrorInfo
                    //but you shouldn't display errors to users - process the error, log it on your server.
                    $msg = 'Sorry, something went wrong. Please try again later.';
                } else {
                    $msg = 'Message sent! Thanks for contacting us.';
                }
            }
            else {
                    $msg = 'Form not complete, message ignored.';
            }
        }
        ?>
    <!-- Main -->
    <section id="main" class="container medium">
        <header>
            <h2>Contact Us</h2>
            <p>Tell us what you think about our little operation.</p>
        </header>
        <?php if (!empty($msg)) {
            echo "<center><h2>$msg</h2></center>";
        } ?>
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
