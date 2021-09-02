<?php

$dbHost = "localhost:3307";
$dbUserName = "root";
$dbPassword = "";
$dbName = "login_system_29e";

$conn = mysqli_connect($dbHost, $dbUserName, $dbPassword, $dbName);

if(!$conn){
    die("Database Connection Error: ".mysqli_connect_error());
}

