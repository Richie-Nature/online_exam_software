<?php
$dsn ="mysql:host=localhost;dbname=cbt_online";
$uname = "root";
$password = "";
// if(!$connection){
//     die("could not connect to database" .$connect->connect_error());
// }

try {
    $connection = new PDO($dsn,$uname,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    echo "Could not connect to database: " . $e->getMessage();
}
