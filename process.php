<?php
session_start();
$servername = "localhost";
$username = "admin";
$password = "password";
$name = $_POST["username"];
$pass = $_POST["password"];
try {

	$conn = new PDO("mysql:host=$servername;dbname=tetprj", $username, $password);

	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$da = $conn->prepare("SELECT * FROM user WHERE name=:name AND password=:pass");
	$da->setFetchMode(PDO::FETCH_OBJ);
	$da->execute(['name' => $name, 'pass' => $pass]);

	if ($rt = $da->fetch()) {
		setcookie($name, 'usr=' . $pass, time() + (86400 * 30), "/");
		$_SESSION['name'] = $rt->name;
		$_SESSION['id'] = $rt->id;
		header("Location: Home/Home.php");
	} else {
		$_SESSION['w'] = 1;
		header("Location:./index.php");
	}
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
