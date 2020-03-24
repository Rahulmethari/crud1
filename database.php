<?php
// used to connect to the database
$host = "q68u8b2buodpme2n.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "crud1";
$username = "x5japq6t7xrd4bz6";
$password = "e9h4qzt64hd5bzat";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
