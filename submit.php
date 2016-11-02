<html>
<body>
Name:
<?php echo $_POST["contactname"]; ?><br>
Major:
<?php echo $_POST["major"]; ?><br>
<?php
$conn = new mysqli(ini_get("mysql.default.host"),
                     ini_get("mysql.default.user"),
                     ini_get("mysql.default.password"),
			"projs");
if($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO ProjTable (name, major) VALUES (?,?)");
$stmt->bind_param("ss",$name $major);

$name = $_POST["contactname"];
$major = $_POST["major"];
$stmt->execute();
echo "Added to records";
$stmt->close();
$conn->close();
?>
<body>
</html>
