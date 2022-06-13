<?php
$host = 'localhost';
$user = 'root';
$password = '1234';
$database = "accountdata";
$connection = mysqli_connect($host,$user,$password,$database);

if(mysqli_connect_error()){
    echo 'connection error';
}

?>