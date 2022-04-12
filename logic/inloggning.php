<?php
if(isset($_POST["inlogg_skickat"])){

	htmlentities($name) = $_POST["username"];
	$pass = sha1($_POST['password']);
	
	$query = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
	$query->bindParam('1', $name, PDO::PARAM_STR);
	$query->bindParam('2', $pass, PDO::PARAM_STR);
	$query->execute();

	if ($query->rowCount() == 1) {
		// output data of each row
  		$results = $query->fetch(PDO::FETCH_ASSOC);
		$_SESSION["username"] = $results["name"];
		$_SESSION["user_id"] = $results["id"];
		// $_SESSION["usertype"] = $results["usertype"];

		$_SESSION["isLoggedIn"] = true;
	} else {
		$error = true;
	}
}

if (isset($_POST["utlogg_skickat"])) {

	session_destroy();
	header("location: index.php");
	exit();
}