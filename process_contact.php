<?php

	if(isset($_POST)) {
		$host = "localhost";
		$database = "web_project1";
		$user = "root";
		$pass = "";

		$connection = mysqli_connect($host, $user, $pass, $database);
		if (mysqli_connect_errno()) {
  		die ("Database connection failed: ".mysqli_connect_error()."(".mysqli_connect_errorno().")");
		}

	if (isset($_POST['name'])) { $name = $_POST['name']; }
  if (isset($_POST['phone'])) { $phone = $_POST['phone']; }
  if (isset($_POST['email'])) { $email = $_POST['email'];
  if (isset($_POST['preference'])) { $preference = $_POST['preference']; }
  if (isset($_POST['message'])) { $message = $_POST['message']; }

  	$sql = "INSERT INTO contact_information (name, email, phone, preference, message) VALUES (
            '{$connection-> real_escape_string($name)}', 
            '{$connection-> real_escape_string($email)}', 
            '{$connection-> real_escape_string($phone)}',
            '{$connection-> real_escape_string($preference)}',
            '{$connection-> real_escape_string($message)}')";

  	$insert = $connection->query($sql);
  	if ($insert == TRUE) {
  		echo "<h3>Added the contact information.</h3>";
  	}
  	else {
  		die ("Error: {$connection->errno} : {$connection->error}");
  	}
	}
	mysqli_close($connection);

	header("Location: /gettouchsoon.html");
	exit();
}

?>