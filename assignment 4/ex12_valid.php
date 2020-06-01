<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHP Dates</title>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<style type="text/css">
        td { vertical-align: top; }
        p.err { color: red; }
        .month-table { border: 1px solid black;  }
        .month-table tr td { border: 1px solid black; padding: 3px; }
        .drop-down { text-align: center; }
</style>
<script type="text/javascript" src="ex12_valid.js"></script>
</head>
<!--This is just a comment-->
<body bgcolor="lightgray">

<?php
$year = $_REQUEST["year"];
$month = $_REQUEST["month"];
$day = $_REQUEST["days"];
$msg = "";
if ($year and ($year <= 1900 or $year >= 2100)) {
        $msg = "Invalid year: " . $year . ", must be between 1901 and 2099";
}

if ($year > 0 && $month > 0) {
        print "<p>Previous M/D/Y = " .  $month . "/" . $day . "/" . $year;
}


?>
<!-- Used only for error reporting -->
<?php
print '<p id="errmsg" class="err">' . $msg . '</p>';
?>

<form action="ex12_valid.php" method="get">
<table cellpadding="20">
        <tr>
        <td><b>Enter a Year:</b>
<?php
print '  <br/><input onchange="checkDate()" type="text" id="year" name="year" width="40" value="' . $year . '"/>';
?>
        <td><b>Choose a Month:</b>
        <table class="month-table" cellpadding="15">
                <colgroup>
                        <col span="3">
                </colgroup>
                <tr>
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="1">January
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="5">May
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="9">September
                </tr>
                <tr>
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="2">February
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="6">June
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="10">October
                </tr>
                <tr>
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="3">March
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="7">July
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="11">November
                </tr>
                <tr>
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="4">April
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="8">August
                        <td><input type="radio" onclick="daysInMonth()" name="month" id="month" value="12">December
                </tr>
        </table>

        <td><b>Select a Day:</b><br>
        <div class="drop-down">
                <select name="days" id="days">

                </select>
        </div>

        <td><input disabled id="submit" type="submit"/>
</table>
</form>

</body>
</html>
                        