<?php
// used to connect to the database
$host = "us-cdbr-iron-east-01.cleardb.net";
$db_name = "crud1";
$username = "be3351bc1a9044";
$password = "cbf9a5e4";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
