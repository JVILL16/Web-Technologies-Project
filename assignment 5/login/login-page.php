<?php 
   include('login.php'); // Includes Login Script
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <title>UTSA Disc Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="../ex12_valid.js"></script>
    <link rel="stylesheet" type="text/css" href="login-page.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
</head>
<!--This is just a comment-->

<body>



    <div class="nav-box">
        <div class="navbox-one">
            <h1>UTSA Disc Golf Ultimate &nbsp;&nbsp;
            </h1>

        </div>
        <div class="navbox-two">
            Have fun, enjoy the fresh air, and get some exercise with disc golf fun on your own.
        </div>
        <div class="navbox-three">
            <img alt="disc golf photo" src="../assets/disc_golf.jpg">
        </div>

    </div>
    <div class="section-one">
        <div class="submission">
            <h2> Login Page</h2>
            <form name="loginForm" onsubmit="validateForm()" action="" method="POST">

                <b>Username:</b> <input type="text" name="Username"><br>

                <b>Password: </b><input type="password" name="Password"><br>

                <input type="checkbox" name="remember" value="1"> Remember Me? <br>

                <div id="sNotice"></div><br>

                <button type="submit" name="login">Login</button><br><br>



            </form>
            <button onclick="history.go(-1);">Back </button><br><br>
        </div>

    </div>



</body>

</html>