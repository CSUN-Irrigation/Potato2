<?php
$username = filter_input(INPUT_POST, 'username');
if (!empty($username)){
	$host = "localhost";
	$dbusername = "";
	$dbpassword = "";
	$dbname = "";

	// Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

	if (mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() . ') ' . mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO user (username)
			values('$username')";
		if ($conn->query($sql)){
			echo "New record is inserted successfully";
			echo "<script>setTimeout(\"location.href = 'table.php';\",1500);</script>";
		}
		else{
			echo "Error: ". $sql . "<br>". $conn->error;
		}

	}
	
}
else{
	echo "Username should not be empty";
	die();
}
?>
