<?php
  $title=$_POST['title'];
  
  // Database connection
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "niki1312");
  define("DB_DATABASE", "registration_form");

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO department (title) VALUES(?)");
		$stmt->bind_param('s', $title);
		$execval = $stmt->execute();
		echo $execval;
		echo " Department added successful...";
		$stmt->close();
		$conn->close();
	}

?>
