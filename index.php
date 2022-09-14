<html>
<head>
	header logo
	
</head>

<body>
<H1>KL UNIVERSITY RESULTS</H1>

<?php

include "db_connect.php";

//include "search_db.php";

?>

<form action="search_1.php">
  Registration Number:<br>
  <input type="text" name="keyword"><br>
  please enter your 9 digit registration number</span><br>
  <input type="submit" value="submit">
 

</form>





<?php

//include "search_1.php";



$mysqli->close();

?>




</body>


</html>