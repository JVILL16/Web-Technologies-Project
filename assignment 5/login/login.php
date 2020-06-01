<?php
    include("../database.php");
    session_start();
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT id FROM Users WHERE username = '$myusername' and pass_word = '".md5($mypassword)."'";
      $result = mysqli_query($db,$sql);
      $row = db_fetch($result);
      //$active = $row['active'];
      
      $count = db_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         if(!empty($_POST["remember"])) {
          
            setcookie ("username",$_POST["Username"],time()+ 3600);
            setcookie ("password",$_POST["Password"],time()+ 3600);
            echo "Cookies Set Successfuly";
        } else {
            setcookie("username","");
            setcookie("password","");
            echo "Cookies Not Set";
        }
         
         header("location: ../welcome/welcome-page.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      
      
   }

   










?>