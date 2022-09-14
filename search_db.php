<?php


// Check database
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
echo $mysqli->host_info . "<br>";


$sql = "SELECT joke_id, joke_question, joke_ans FROM results";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "joke id: " . $row["joke_id"]. " - joke question: " . $row["joke_question"]. " " . $row["joke_ans"]. "<br>";
  }
} else {
  echo "0 results";
}



?>