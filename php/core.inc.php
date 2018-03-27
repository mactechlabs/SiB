<?php
	$host = "localhost";
	$user = "root";
	$db = "schdb";
	$pass = "";
	
	$con = new mysqli($host,$user,$pass,$db);
	if(!$con){
		echo "Server Not Found";
	}