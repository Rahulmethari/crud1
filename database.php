<?php
// used to connect to the database
$host = "us-cdbr-iron-east-01.cleardb.net";
$db_name = "heroku_81912b039ccbfc5";
$username = "b58177eca4226d";
$password = "ba58af97";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
