<?php //been working on this project for longer than I should. Getting tired...
// Pardon the decrease in quality...
require_once "sql_config.php"; // Database settings

$sql = "SELECT username FROM users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["username"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$link->close();
?>