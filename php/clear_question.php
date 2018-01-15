<?

/*
 * php/clear_question.php
 * Set Win or Lose Count.
 */

header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
if($method == "GET")
{
	$country = $_GET["country"];
	$isWin = $_GET["isWin"];
}
else if($method == "POST")
{
	$country = $_POST["country"];
	$isWin = $_POST["isWin"];
}

// DB Config
require_once('./dbconfig.php');

// Update
$table_name = "game_capital_country";

if($isWin == 1)
{
	$sql = "UPDATE $table_name SET win=win+1 WHERE id=$country";
}
else
{
	$sql = "UPDATE $table_name SET lose=lose+1 WHERE id=$country";
}

$conn->query($sql);

$conn->close();

?>