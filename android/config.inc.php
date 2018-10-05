<?php

$servername = "localhost";
$username = "golockfr";
$password = "u11gQ2gbB1";
$dbname = "golockfr_android";

try {
    	$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    	die("OOPs something went wrong");
    }

?>