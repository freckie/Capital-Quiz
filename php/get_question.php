<?

/*
 * php/get_question.php
 * Get question data by json.
 */

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
if($method == "GET")
{
	$cleared = $_GET['cleared'];
	$level = $_GET['level'];
}
else if($method == "POST")
{
	$cleared = $_POST['cleared'];
	$level = $_POST['level'];
}

// DB Config
require_once('./dbconfig.php');

// Variables
$arr_city = array();

// Get Country by random
$table_name = "game_capital_country";

if($level == 9)
{
	$sql = "SELECT * FROM $table_name ORDER BY rand() LIMIT 1";
}
else
{
	$sql = "SELECT * FROM $table_name WHERE level=$level ORDER BY rand() LIMIT 1";
}

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$arr_country = array(
	"name" => $row["name"],
	"id" => $row["id"],
	"capital" => $row["capital"],
	"level" => $row["level"]
);

$result->free();

// Get Capital
$table_name = "game_capital_city";
$sql = "SELECT * FROM $table_name WHERE id=".$arr_country["capital"];

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$arr_mid = array(
	"id" => $row["id"],
	"name" => $row["name"]	
);
array_push($arr_city, $arr_mid);
$capital_id = $row["id"];

$result->free();

// Get City by random
$table_name = "game_capital_city";
$sql = "SELECT * FROM $table_name WHERE id!=$capital_id ORDER BY rand() LIMIT 3";

$result = $conn->query($sql);

while($row = $result->fetch_array())
{
	$arr_temp = array(
		"id" => $row["id"],
		"name" => $row["name"]
	);
	array_push($arr_city, $arr_temp);
}

$result->free();

// Disconnect DB
$conn->close();

// Make JSON, echo
$data = array(
	"country" => $arr_country,
	"city" => $arr_city
);
echo json_encode($data);

// [ JSON ]
// city[0] : always capital !!

?>