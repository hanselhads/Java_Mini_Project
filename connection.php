<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "jvcs";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{
 die("Failed to connect!");
}
