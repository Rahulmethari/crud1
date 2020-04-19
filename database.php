<?php
// used to connect to the database
$host = "us-cdbr-iron-east-01.cleardb.net";
$db_name = "heroku_f1775403e255be";
$username = "b6fc99c0d984fb";
$password = "125b4491";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
