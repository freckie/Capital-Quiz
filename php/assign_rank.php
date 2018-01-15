<?

$name = $_POST['name'];
$score = $_POST['score'];

// DB Config
require_once('./dbconfig.php');

$table_name = "game_capital_ranking";
$sql = "INSERT INTO $table_name (name, score) VALUES ('$name', $score);";

$conn->query($sql);

$conn->close();

echo "success";

?>