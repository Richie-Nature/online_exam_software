<?php
require_once("constants.php");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
    die("could not connect to database" .mysqli_connect_error());
}