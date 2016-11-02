<?php
$link = new mysqli(ini_get('mysql.default_host'), 
		ini_get('mysql.default_user'),
		ini_get('mysqli.default_pw'),
		'projs');

if ($link->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	$command = "SELECT name,major FROM ProjTable";
	$result = $link->query($command);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "Name: " . $row["name"]. "Major: " . $row["major"] . "\n";
		}
	}
	else {
		echo "No Projects Saved Yet";
	}
	$link->close();
}

?>
<html>
<body>
<a href = "index.html">Home Page</a>
<br>
<body>
</html>