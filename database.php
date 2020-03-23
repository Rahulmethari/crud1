<?php
// used to connect to the database
$host = "q3vtafztappqbpzn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$db_name = "sigzk35n6bl3rdhd";
$username = "wv4igr5mrkc8g7ln";
$password = "gx9b3vjgjrgooqnv";

try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}

// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
