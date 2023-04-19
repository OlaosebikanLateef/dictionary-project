<?php
$serverName = "localhost";
$username = "root";
$password = "Lateef";
$dbname = "dictionary";
$conn = mysqli_connect($serverName, $username, $password, $dbname);

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}












?>