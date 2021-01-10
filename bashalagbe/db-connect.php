<?php

$host="localhost";
$user="root";
$password="";
$db="bashalagbe";

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect){
	echo "Connection failed!";
}
