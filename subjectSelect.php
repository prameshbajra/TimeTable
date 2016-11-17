<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Time Table</title>



    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">



</head>

<body>

    <div class="login-card animated fadeInDown">
        <h1>Time Table Generator</h1>
        <h4><u>Please Enter Your Subjets</u></h4>
        <form action="routine.php" method="post">
            <input type="text" name="subject1" placeholder="Subject 1" required>
            <input type="text" name="subject2" placeholder="Subject 2" required>
            <input type="text" name="subject3" placeholder="Subject 3" required>
            <input type="text" name="subject4" placeholder="Subject 4" required>
            <input type="text" name="subject5" placeholder="Subject 5">
            <input type="text" name="subject6" placeholder="Subject 6">
            <input type="text" name="lab1" placeholder="Lab 1" required>
            <input type="text" name="lab2" placeholder="Lab 2" required>
            <input type="text" name="lab3" placeholder="Lab 3">
            <input type="submit" name="submit" class="login login-submit" value="Next ->">
        </form>

        <div class="login-help">
            <a href="#">Trouble in choosing?</a>
        </div>
    </div>

    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <div id="clear"></div>
    <div class="navigation animated fadeInUp">
        <nav class="navClass">
            <ul class="ulClass">
                <a href="index.php">
                    <li class="listItem">Home</li>
                </a>
                <a href="aboutUs.html">
                    <li class="listItem">About Us</li>
                </a>
                <a href="support.html">
                    <li class="listItem">Support Us</li>
                </a>
                <a href="contact.html">
                    <li class="listItem">Contact Us</li>
                </a>
            </ul>
        </nav>
    </div>
</body>

</html>
