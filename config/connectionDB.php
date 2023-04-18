<?php
$servername = "localhost";
$username = "root";
$password = "smoothless";
$dbname = "dictionary";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}












?>