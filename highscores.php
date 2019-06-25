<?php
	$initials = "";
	$score = "";
	$errors = array();

	$db = mysqli_connect('127.0.0.1', 'root', '12345', 'lavaLlama');
	$query = "SELECT * FROM scores ORDER BY score DESC LIMIT 5";
	$results = mysqli_query($db, $query);
	if ($results->num_rows > 0) {
		while($row = $results->fetch_assoc()) {
			echo "<p>" . strtoupper($row["initials"]). " - " . $row["score"]. "<br>";
		}
	}
	else {
		echo "No Records";
	}
	$initials = mysqli_real_escape_string($db, $_POST['initials']);
	$sc = $_GET["score"];
	$s = $sc;
	if (isset($_POST['submit']) && !empty($initials)) {
		$sql = "INSERT INTO scores (score, initials) VALUES ($s, '$initials')";
		$result = mysqli_query($db, $sql);
		if ($result) {
			echo "$sql";
			echo "</br>";
			echo "Success";
		}
		else {
			echo "$sql";
			echo "</br>";
			echo "Failure";
		}
	}
?>