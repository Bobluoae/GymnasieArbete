<?php 
$error = false;
if(isset($_POST["inlogg_skickat"])){

	$sql = "SELECT * FROM users WHERE password = '" . sha1($_POST['password']) .
		 "' AND name = '". $_POST["username"] ."'";

	$query = $db->query($sql);

	if ($query->num_rows == 1) {
		// output data of each row
  		while($results = $query->fetch_assoc()) {
    		$_SESSION["username"] = $results["name"];
    	} 

		$_SESSION["isLoggedIn"] = true;
	} else {
		$error = true;
	}
}


if (isset($_POST["utlogg_skickat"])) {

	unset($_SESSION["isLoggedIn"]);
	//Eller;
	//session_destroy();
	//header("location: http://localhost:8080/exercises/cookies_n_sessions/inlogg.php");
}
	// if ($_POST["username"] == "Agent46" && $_POST["password"] == "ThisIsNotAPassword") {
		
	// 	$_SESSION["isLoggedIn"] = true;
	// }