<?php
// used to connect to the database

class Database
$dbservername = "q68u8b2buodpme2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbname = "crud1";
$dbusername = "x5japq6t7xrd4bz6";
$dbpassword = "e9h4qzt64hd5bzat";

try {
    $con = new PDO("mysql:host={$dbservername};dbname={$dbname}", $dbusername, $dbpassword);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
