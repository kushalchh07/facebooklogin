<?php

$servername="localhost";
$username="root";
$password="";
$dbname="facebook_db";

$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn){

    echo"Database connection succesfull";
}
else{
    echo"Connection Fail.";
}
?>