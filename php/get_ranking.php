<?

/*
 * php/get_ranking.php
 * Get Ranking data by json.
 */

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
if($method == "GET")
{
	$people = $_GET['people'];
}
else if($method == "POST")
{
	$people = $_POST['people'];
}

// DB Config
require_once('./dbconfig.php');

// Variables
$arr_rank = array();

// Get Ranking
$table_name = "game_capital_ranking";

$sql = "SELECT * FROM $table_name ORDER BY score DESC LIMIT $people";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$arr_mid = array(
		"name" => $row["name"],
		"score" => $row["score"]
	);
	array_push($arr_rank, $arr_mid);
}

$result->free();

// Disconnect DB
$conn->close();

// Make JSON, echo
echo json_encode($arr_rank);

?>