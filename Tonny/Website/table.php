<!DOCTYPE html>
<html>
<head>
	<title> Table with Database </title>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>Username</th>
	</tr>
	<?php

	$conn = mysqli_connect("localhost", "#Username of which account you logged in", "#This is where you will place your password for SQL", "#This is your Database Name");
	if ($conn-> connect_error) {
		die("Connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT id, username from user";
	$result = $conn-> query($sql);

	if ($result-> num_rows > 0) { 
		while ($row = $result-> fetch_assoc()) { 
			echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td></tr>";
		}
		echo " </table>";
	}
	else {
		echo"0 result";
	}

	$conn-> close();
		
	?>
</table>
</body>
</html>
