<?php
   include('../login/session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>UTSA Disc Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="../ex12_valid.js"></script>
    <link rel="stylesheet" type="text/css" href="welcome-page.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
</head>
<!--This is just a comment-->

<body>

    <?php
        include_once('../database.php');
        
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
            <h1>Welcome <?php echo $login_session; ?></h1> 
            <?php
                 individual_entry_info($login_session);
            ?>
            
            <h2><a href = "../login/logout.php">Sign Out</a></h2>
            <h2><a href = "../login/login-page.php">Login Page</a></h2>
        </div>

    </div>



</body>

</html>