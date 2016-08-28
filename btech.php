<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Time Table</title>



    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">



</head>

<body class="animated fadeInRight">

    <div class="login-card">
        <h1>Time Table Generator</h1><br>
        <h3><u>Moving Further</u></h3>
        <h4>Select Your Branch</h4>
        <form action="gotopage3.php" method="post">
            <select name="branch" id="programme">
                <option value="0">Civil</option>
                <option value="1">CSE</option>
                <option value="2">Mechanical</option>
                <option value="3">ECE</option>
                <option value="4">EEE</option>
            </select>
            <h4> Year</h4>
            <select name="year">
                <option value="0">1st</option>
                <option value="1">2nd</option>
                <option value="2">3rd</option>
                <option value="3">4th</option>
            </select><br>
            <h4>Semester</h4>
            <select name="sem">
                <option value="0">1st semester</option>
                <option value="1">2nd semester</option>
            </select><br>
            <input type="submit" name="submit" class="login login-submit" value="Next ->">

        </form>



        <div class="login-help">
            <a href="#">Trouble in choosing?</a>
        </div>
    </div>

    <!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>





</body>


</html>
