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
        <h1>Time Table Generator</h1><br>
        <h3><u>College</u></h3>
        <form action="gotoPage1.php" method="post">
            <input type="text" name="college" placeholder="Name Of College" required>
            <input type="text" name="university" placeholder="Name Of University" required>
            <input type="submit" name="submit" class="login login-submit" value="Next ->" target="page1.html">
        </form>

        <div class="login-help">
            <a href="#">Trouble in choosing?</a>
        </div>
    </div>

    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <div id="clear"></div>


</body>
<div class="navigation animated fadeInUp">
    <nav class="navClass">
        <ul class="ulClass">
            <li class="listItem"><a href="#">Home</a></li>
            <li class="listItem"><a href="">About Us</a></li>
            <li class="listItem"><a href="">Support Us</a></li>
            <li class="listItem"><a href="">Contact Us</a></li>
        </ul>
    </nav>
</div>

</html>
