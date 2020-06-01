<?php
    session_start();
    include_once('../database.php');
    
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT username from Users where username = '$user_check'";
$ses_sql = mysqli_query($db, $query);
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location: login-page.php");
    die();
 }
?>