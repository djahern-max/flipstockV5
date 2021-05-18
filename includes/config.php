  
<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("America/New_York");

try {
    $con = new PDO("mysql:dbname=heroku_c3ecb6a7a15fde6;host=us-cdbr-east-03.cleardb.com", "b74c44936ce731", "2b30f1df");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>