<html>
<head>
    <link rel="icon" href="images/favicon.ico" type="image/ico">
    <title>Payment Options</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=5, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        color: black;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #EFCA46;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 0;
        border: 1px solid #ccc;
        border-top: none;
    }


</style>

<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <?php include("header.php");
    session_start();
    if(!isset($_SESSION['Promo'])){
        header('Location:SignUp.php');
    }

    ?>

    <!-- Main -->
    <script>
        window.onload = function () {
            startTab();
        };

        function startTab() {
            document.getElementById("defaultOpen").click();
        }

        function openPage(evt, pageName) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Remove the background color of all tablinks/buttons
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < tablinks.length; i++) {
                //tablinks[i].style.backgroundColor = "";
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

    <section id="main" class="container">
        <h2 style="text-align:center;">Payment Options with your Promo Code!</h2>
        <div class="tab">
            <button class="tablink" onclick="openPage(event,'What is')" id="defaultOpen">Premium Membership!</button>
            <div id="What is" class="tabcontent">
                    <div class="box">
                    <h3>Unlimited Plan!</h3>
                    <p>At only $24.99 a month, you can make unlimited calls with all of our celebrities! Get expedited support with 4K video support (as supported). Video playback will be also be up to 4K (as supported). You will have access to our priority support line. Renews Monthly.
                        <form action="https://test.bitpay.com/checkout" method="post">
                            <input type="hidden" name="action" value="checkout" />
                            <input type="hidden" name="posData" value="" />
                            <input type="hidden" name="data" value="qbAfM+webtfbPR6Y7T0S7Vv/43J9mXh5y4Rr9QO677ASFC1PcSi4uTOb2rFKbGDN9Z9jvrwLHxg9honMVKVJeBSctDbLKYTlmyDgKM8rdbuvDZIsiJFUiPRbhJxWosY4OBjFlXrcFvoSNYATII0/YUF1N70sgbRjhSSWarMHI8SkwaCcF7J03d0/uZhHW9SH" />
                            <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
                        </form>
                    </div>
                <img src="thanks.jpeg" width="612" height="180" >
            </div>

    </section>


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



    <!-- Footer -->



</div>

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