<html>
<body>
Name:
<?php echo $_POST["contactname"]; ?><br>
Major:
<?php echo $_POST["major"]; ?><br>
Project Description:
<?php echo $_POST["project"]; ?><br>
<?php
$link = new mysqli(ini_get('mysql.default_host'), 
		ini_get('mysql.default_user'),
		ini_get('mysqli.default_pw'),
		'projs');

if ($link->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	$command = $link->prepare("INSERT INTO ProjTable (name, major, project) VALUES (?,?,?)");
	$command->bind_param("sss",$name, $major, $project);
	$name = $_POST["contactname"];
	$major = $_POST["major"];
	$project = $_POST["project"];
	$command->execute();
	$command->close();
	$link->close();
	echo "Added Record to db";
}

?>
<br>
<a href = "index.html">Home Page</a>
<br>
<a href = "viewprojs.php">List of Projects</a>
<br>
<body>
</html>
