<?php

	require_once('credentials.php');

	if ($_GET['url'] !== null and $_GET['score'] !== null) {

		$conn = new mysqli('localhost', $user, $pass, $db);

		$query = "SELECT * FROM answers WHERE `url` = '".$_GET['url']."'";

		$results = $conn->query($query);

		if (mysqli_num_rows($results) == 1) {
			foreach ($results as $record) {
				$id = $record['id'];
				if ($_GET['score'] === -1) { //Answer incorrect, adding one to incorr
					$incorr = $record['incorr'];
					$query = "UPDATE answers SET incorr=".$incorr-1." WHERE id = ".$id."";
					$conn->query($query);
				} elseif ($_GET['score'] === 1) {
					$corr = $record['corr'];
					$query = "UPDATE answers SET corr =".$corr+1."WHERE id = ".$id."";
					$conn->query($query);
				}
			}
		} else {
			if ($_GET['score'] === -1 ) {
				$query = "INSERT INTO answers (url, corr, incorr) VALUES ('".$_GET['url']."', 0, 1)";
				$conn->query($query);
			} elseif ($_GET['score'] === 1) {
				$query = "INSERT INTO answers (url, corr, incorr) VALUES ('".$_GET['url']."', 1, 0)";
				$conn->query($query);
			}
		}

	} else {
		echo 'No values submitted.';
	}

?>