<?php 
header('Content-Type: application/json');

if ($_GET["ajax"] == "savelist") {
	$payload = json_decode(file_get_contents("php://input"));

	if (isset($_SESSION["user_id"])) {
		$query = $conn->prepare("INSERT INTO lists SET list_name = ?, user_id = ?");
		$query->bindParam('1', htmlentities($payload->listname), PDO::PARAM_STR);
		$query->bindParam('2', $_SESSION["user_id"], PDO::PARAM_INT);
		$query->execute();

		$list_id = $conn->lastInsertId();

		foreach ($payload->restaurants as $restaurant) {
			$query = $conn->prepare("INSERT INTO list_items SET rest_name = ?, list_id = ?");
			$query->bindParam('1', htmlentities($restaurant), PDO::PARAM_STR);
			$query->bindParam('2', $list_id, PDO::PARAM_INT);
			$query->execute();
		}
	} else {
		$arr = ['message' => "ACCESS DENIED!"];
		header("Status: 403 Forbidden");
		http_response_code(403);
		echo json_encode($arr);
		exit();
	}
	
}

$arr = ['message' => "OK!"];
header("Status: 200 OK");
http_response_code(200);
echo json_encode($arr);
exit();