<?php 
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
}