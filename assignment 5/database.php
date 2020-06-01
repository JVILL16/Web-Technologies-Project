<?php


# Open up a database, returns a link for other calls 
function db_open($url, $db, $user, $pw) {
	$db_link = mysqli_connect($url, $user, $pw);
	mysqli_select_db($db_link, $db);
	mysqli_query($db_link, 'SET NAMES UTF8;');
	return $db_link;
}

# All done -- close the DB connection
function db_close($db_link) {
	mysqli_close($db_link);
}

# Perform some kind of action like SELECT or INSERT or whatever
function db_query($db_link, $query) {
	$result = mysqli_query($db_link, $query);
	if ($result === FALSE) die(mysqli_error($db_link));
	return $result;
}

# Following a db_query, call db_fetch multiple times
function db_fetch($query) {
	return mysqli_fetch_array($query);
}

# Following a db_query, call db_num_rows to get row count
function db_num_rows($array)
{
    return mysqli_num_rows($array);
}

# Load a csv file full of comma seperated values
function db_load_data($db_link, $file, $table)
{
    $query = "LOAD DATA LOCAL INFILE '" . $file . "' INTO TABLE " . $table . 
        " FIELDS TERMINATED BY ',' ENCLOSED BY '\"' ESCAPED BY '\\\\' LINES TERMINATED BY '\\r\\n' IGNORE 1 LINES";
    $result = mysqli_query($db_link, $query);
    if ($result === FALSE) die(mysqli_error($db_link));
    return mysqli_affected_rows($db_link);
}


function register_entry_list() {
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");
    print "<p>Users\n";
    print "<ol>\n";
    $users = db_query($db, "SELECT * FROM Users");
    //$users = $db->prepare("SELECT * FROM Users")
    while (($user = db_fetch($users)) != NULL) {
        print "<li>" . htmlentities($user["first_name"]) . " " . htmlentities($user["last_name"]) . "\n";
    }                          
    print "</ol>\n";
   
}

function register_entry() {
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");

    if(isset ($_POST['signup'])) {
        $username = htmlspecialchars(trim($_POST['Username']));
        $password = htmlspecialchars(trim(md5($_POST['Password'])));
        $firstname = htmlspecialchars(trim($_POST['Firstname']));
        $lastname = htmlspecialchars(trim($_POST['Lastname']));
        $college = htmlspecialchars($_POST['college']);
        if (!isset ($_POST['isAdmin'])){
            $admin = 0;
        }else{
            $admin = 1;
        }
        $put = db_query($db, "INSERT INTO Users (id,isAdmin,first_name,last_name,username,pass_word,college) VALUES 
                                (null, '$admin', '$firstname', '$lastname', '$username', '$password', '$college')");
       // $put = $db->prepare("INSERT INTO Users (id,isAdmin,first_name,last_name,username,pass_word,college) 
                                    //VALUES (null, '$admin', '$firstname', '$lastname', '$username', '$password', '$college')"));
        if ($put == TRUE) {
            print "<p> Account Created !!!!!!!";
        }
    }   

}

function individual_entry_info($username) {
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");
    $user_info = db_query($db, "SELECT * from Users where username = '$username' ");
    

    while (($user = db_fetch($user_info)) != NULL) {
        print "<p> Firstname is " . htmlentities($user["first_name"]) . "\n"; 
        print "<p> Lastname is " . htmlentities($user["last_name"]) . "\n"; 
        print "<p> College of " . htmlentities($user["college"]) . "\n"; 
    }
}

function college_entries() {
    $db = db_open("easel2.fulgentcorp.com", "fnu882", "fnu882", "fhVVxpdyxK55N7QGHryL");
    $users = db_query($db, "SELECT * from Users");

    $fine_arts = 0;
    $business = 0;
    $education = 0;
    $engineering = 0;
    $architecture = 0;
    $sciences = 0;

    while (($user = db_fetch($users)) != NULL) {
        if($user["college"] == "Fine Arts"){
            $fine_arts += 1;
        }
        if($user["college"] == "Business"){
            $business += 1;
        }
        if($user["college"] == "Education"){
            $education += 1;
        }
        if($user["college"] == "Engineering"){
            $engineering += 1;
        }
        if($user["college"] == "Architecture"){
            $architecture += 1;
        }
        if($user["college"] == "Sciences"){
            $sciences += 1;
        }
    }  
    if(($user = db_fetch($users)) != NULL) {
        print "";
    }else {
        print "<div class=\"assignment5\">
            <canvas id=\"cnvs\" style=\"background-color:white;\" width=\"400\" height=\"400\"></canvas>
            <script type=\"text/javascript\">
                barData = [{ lbl: \"Fine Arts\", val: " . $fine_arts . " }, { lbl: \"Business\", val: " . $business . " }, { lbl: \"Education\", val: " . $education . " } , { lbl: \"Engineering\", val: " . $engineering . " }, { lbl: \"Architecture\", val: " . $architecture . " }, { lbl: \"Sciences\", val: " . $sciences . " }];
                bar(\"cnvs\", barData);
            </script>";
    }
    
}


?>