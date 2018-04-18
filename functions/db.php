<?php
$host = "localhost";
$user = "root";
$pwd  = "unlocksql";
$db   = "dbforum2";

$con = mysqli_connect($host,$user,$pwd) or die("Could not connect");
mysqli_select_db($con,$db) or die("No database");

?>
