<?php
	// find detail.txt for SQL username and password and store in array 
	$logindetail = array();
	$i=0;
	$file = fopen($_SERVER['DOCUMENT_ROOT']."/v0-6/detail.txt","r");
	// read the file
	while(! feof($file))
	  {
	  $logindetail[$i] = trim(fgets($file));
	  $i++;
	  }

	fclose($file);

	//Connect to the phpmyadmin database
	$dbhost = "localhost";
	$dbuser = $logindetail[0];
	$dbpass = $logindetail[1];
	$dbname = "uq_go_db_v06";	
	$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// if unable connect to the database, show error
	if(! $dbconn )
	{
	  die('Could not connect: ' . mysqli_connect_error());
	}

	mysqli_select_db($dbconn, $dbname);
?>