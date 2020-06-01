<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>UTSA Disc Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home-page.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
    <script src="../bar.js" type="text/javascript"></script>
</head>
<!--This is just a comment-->

<body>
    <?php
        include('../database.php');
    ?>

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

            <div class="dummy-logo">
                <div class="icon brand">
                    <img width="75" alt="Velox Icon" src="../assets/velox-icon-no-bg.png">
                </div>
            </div>

            <h3>Want to join the club?</h3>
            <form action="../register/register-page.php">
                <button type="submit" value="">Register</button>
            </form>
            <br>
            <h3>Already in the club?</h3>
            <form action="../login/login-page.php">
                <button type="submit" value="">Login</button>
            </form><br><br>

        </div>
        <div class="about-us">
            UTSA Golf Disc Club Ultimate is the competitive Disc Golf Team for UTSA. We play
            under USA Ultimate, the governing body of Ultimate Frisbee in the United States. It's tons of fun! It's
            one of the fastest growing team sports in the country because it offers challenges to players at all
            skill levels
        </div>
        <?php
        college_entries();     
        ?>
        </div>
    </div>



</body>

</html>