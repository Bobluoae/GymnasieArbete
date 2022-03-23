<?php 
$error = false;
if(isset($_POST["reg_skickat"])){


	if ($_POST["username"] == "" || $_POST["password"] == "") {
		$error = true;
		$message = "Du måste skriva på båda fälten";
	}

	// SQL som tittar om användarnamnet redan finns
	$sql = "SELECT name FROM users WHERE name = '". $_POST["username"] ."'";
	$query = $db->query($sql);


	//hittade en rad i db med användarnamnet
	if (mysqli_num_rows($query)) {
		$error = true;
		$message = "Det här användarnamnet är redan taget!";
	}


	if ($error == false) {
		$sql = "INSERT INTO users SET password = '" . sha1($_POST['password']) .
			 "', name = '". $_POST["username"] ."'";

		$query = $db->query($sql);
		if ($query) {
			$_GET["page"] = "welcome";
		}
	}

}






	// if ($query->num_rows == 1) {
	// 	// output data of each row
 //  		while($results = $query->fetch_assoc()) {
 //    		$_SESSION["username"] = $results["name"];
 //    	} 

	// 	$_SESSION["isLoggedIn"] = true;
	// } else {
	// 	$error = true;
	// }
