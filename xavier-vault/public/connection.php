<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "Shiznixshades";
$dbname = "login_db";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

  die("failed to connect!");
}
