<?php 
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
		$message = "Det här användarnamnet är redan taget";
	}

	if (strlen($_POST['password']) <= 4) {
		$error = true;
		$message = "Du måste ha minst 5 karaktärer i ditt lösenord";
	}

	if (strlen($_POST['username']) <= 2) {
		$error = true;
		$message = "Du måste ha minst 3 karaktärer i ditt användarnamn";
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