<?php
	$host = "localhost";
	$user = "root";
	$db = "mydb";
	$pass = "";
	 
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  //  echo "Connected to $db at $host successfully.";
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>