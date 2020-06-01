<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>UTSA Disc Golf Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script type="text/javascript" src="../ex12_valid.js"></script>
    <link rel="stylesheet" type="text/css" href="register-page.css">
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico">
</head>
<!--This is just a comment-->

<body>

    <?php
        include_once('../database.php');
        
        $year = "";
        
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
            <h2> Register Page</h2>
            <form name="signForm" onsubmit="validateForm()" action="register-page.php" method="POST">


                <b>Firstname:</b> <input type="text" name="Firstname"><br>

                <b>Lastname:</b> <input type="text" name="Lastname"><br>


                <b>Username:</b> <input type="text" name="Username"><br>

                <b>Password: </b><input type="password" name="Password"><br>

                <b class="question">Are you in the College of:</b> <br>

                <table class="college_class" cellpadding="10">
                    <colgroup>
                        <col span="2">
                    </colgroup>

                    <tr>
                        <td style="margin-right:30px">
                            <input type="radio" name="college" value="Fine Arts"> Fine Arts
                        </td>
                        <td>
                            <input type="radio" name="college" value="Business"> Business
                        </td>
                    </tr>
                    <tr>
                        <td style="margin-right:21px">
                            <input type="radio" name="college" value="Education"> Education
                        </td>
                        <td>
                            <input type="radio" name="college" value="Engineering"> Engineering
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="college" value="Architecture"> Architecture
                        </td>
                        <td>
                            <input type="radio" name="college" value="Sciences"> Sciences
                        </td>
                    </tr>

                </table>



                <table class="date-table" cellpadding="2">
                    <tr>
                        <b>When was the last time you through a disc golf?</b><br>
                    </tr>
                    <tr>
                        <td>
                            <table class="month-table">
                                <colgroup>
                                    <col span="3">
                                </colgroup>
                                <tr>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="1">January
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="5">May
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="9">September
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="2">February
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="6">June
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="10">October
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="3">March
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="7">July
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="11">November
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="4">April
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="8">August
                                    </td>
                                    <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="12">December
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            Select a Day:<br>
                            <div class="drop-down">
                                <select name="days" id="days">

                                </select>
                            </div>
                        </td>
                        <td>
                            Enter a Year:
                            <?php
                                 print '  <br/><input onchange="checkDate()" type="text" id="year" name="year" width="40" value="' . $year . '"/>';
                            ?>

                        </td>
                    </tr>

                </table><br><br>

                <input type="checkbox" name="isAdmin" value="1"> If you are signing up for admin, check this box.
                <div id="sNotice"></div><br>



                <button type="submit" name="signup">SIGNUP</button>



                <?php
                            register_entry();
                            
                    ?>

            </form>
            <button onclick="history.go(-1);">Back </button>
        </div>

    </div>



</body>

</html>