<?php
  $title=$_POST['title'];
  $start=$_POST['start'];
  $end=$_POST['end'];
  $hours=$_POST['hours'];
  $number=$_POST['number'];
  
  // Database connection
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASSWORD", "niki1312");
  define("DB_DATABASE", "testdb");

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO training (title,start_date,end_date,hours,number_employee) VALUES(?,?,?,?,?)");
		$stmt->bind_param('sssss', $title,$start_date,$end_date,$hours,$number_employee);
		$execval = $stmt->execute();
		echo $execval;
		echo " Department added successful...";
		$stmt->close();
		$conn->close();
	}

?>
