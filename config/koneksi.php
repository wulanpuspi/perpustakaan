<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "perpus_wul";

$database = mysqli_connect($host,$username,$password,$database);

if(!$database){
	die("database tidak terhubung");
}