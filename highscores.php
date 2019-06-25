<?php

	$initials = "";
	$score = "";
	$errors = array();

	$db = mysqli_connect('us-cdbr-iron-east-02.cleardb.net', 'bcd2f7930ec787', '06fbf25c', 'heroku_85857c074ef2ccf', 3306);




	$query = "SELECT * FROM LlamaLava ORDER BY score DESC LIMIT 5";
	$results = mysqli_query($db, $query);
	if ($results) {
		while($row = $results->fetch_assoc()) {
			echo "<p>" . strtoupper($row["initials"]). " - " . $row["score"]. "<br>";
		}
	}
	else {
		echo "</br>";
		echo "No Records";
		echo "</br>";
	}
	$initials = mysqli_real_escape_string($db, $_POST['initials']);
	$sc = $_GET["score"];
	$s = $sc;
	if (isset($_POST['submit']) && !empty($initials)) {
		$sql = "INSERT INTO LlamaLava (score, initials) VALUES ($s, '$initials')";
		$result = mysqli_query($db, $sql);
		// if ($result) {
		// 	echo "$sql";
		// 	echo "</br>";
		// 	echo "Success";
		// }
		// else {
		// 	echo "$sql";
		// 	echo "</br>";
		// 	echo "Failure";
		// 	echo "</br>";
		// 	echo "$result";
		// }
	}
?>