<?php

include "db_connect.php";
$keywordfromform = $_GET["keyword"];

// Search for number 1
echo "<H2> RESULTS </H2>";

$sql = "SELECT joke_id, joke_question, joke_ans FROM results WHERE joke_id LIKE '%" . $keywordfromform . "%' ";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "REGISTRATION NUMBER: " . $row["joke_id"]. "<br>";
    echo "NAME: " . $row["joke_question"]. "<br>";
    echo "COURSE: " . $row["joke_ans"]. "<br>";
  }
} else {
  echo "0 results";
}

?>