<?php
session_start(); // Session starts here.
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/826a7e3dce.css" media="all">
        <link rel="stylesheet" href="details.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    </head>
    <body>

        <header>
        <section class="topHeaderSection">
            <div class="topHeader">
                <div class="topHeaderContent">
                    <div class="logo"><a href="index.html"><img src="images/Logo-white.png" alt="Logo Image"/></a></div>
                </div>
            </div>
        </section>

            <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>

            <section class="topIntroSection">
                <div class="Step2Box">
                    <div class="Headline2">
                    <h1>Let's get to know each other</h1>
                        <h3>Fill in your name and earn 10 coins to get you started when we launch</h3>
                        <form class="personal_details" method="POST" action="connect.php">
                            <input class="first_name" type="text" placeholder="First Name" name="first_name"><br>
                            <input class="last_name" type="text" placeholder="Last Name" name="last_name"><br>
                            <input class="submit-join" type="submit" value="Welcome">
                        </form>
                    </div>
                    <div class="Headline-Image"></div>
                </div>
            </section>

            </header>

        <footer>
        </footer>
    </body>
</html>