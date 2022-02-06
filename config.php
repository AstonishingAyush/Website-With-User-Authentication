<?php

$server = "Your_Server";
$username = "Your_Username";
$password = "Your_Server_Password";
$database = "Your_Database_Name";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die ("<script>alert('Connection Failed')</script>");
}




?>