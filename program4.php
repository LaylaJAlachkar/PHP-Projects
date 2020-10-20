<!DOCTYPE html>
<html>

<head>
<title>General Query</title>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>

<body>
<h3> General Query Page by Layla Alachkar </h3>
<?php
	// If there is a queryText, answer the query
	//
	if (array_key_exists('queryText', $_POST)) {
		$user = $_POST['user'];
		$database = $user; // user and database have same name
		$password = $_POST['password'];
			
		$mysqli = new mysqli("cs.okstate.edu", $user, $password, $database);
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		}
		$query = $_POST['queryText'];
		$result = $mysqli->query($query);
		echo "<pre>\n";
		echo $query;
		echo "\n\n</pre><hr>\n";
		
		if (!is_object($result)) {
			echo "\n\n" . $result;
		}
		else {
			// MAKE HTML TABLE
			echo '<table border="2" cellPadding="3">', "\n";
			$row = $result->fetch_array(MYSQLI_ASSOC);
			if ($row) {
				$keys = array_keys($row);
				echo '<tr>';
				foreach ($keys as $key) {
					echo "<th>$key</th>";
				}
				echo '</tr>';
				while ($row) {
					echo '<tr>';
					foreach ($row as $cell) {
						echo '<td>' . $cell . '</th>';
					}
					echo '</tr>';
					$row = $result->fetch_array(MYSQLI_ASSOC);
				}
			}
			echo "</table>\n";
			echo "<br/><br/><br/>";
		}
	}
	
	// If there is not a queryText, display a prompt asking for a query
	else {
		echo '<form id="generalQuery" name="generalQuery" action="generalQuery.php" method="POST">', "\n";
		echo '<textarea rows="15" cols="80" name="queryText" form="generalQuery">', "\n";
		echo 'SELECT * FROM Student;</textarea><br/>', "\n";
		echo 'Username: <input type="textfield" name="user"><br/>', "\n";
		echo 'Password: <input type="password" name="password"><br/>', "\n";
		echo '<input type="submit" value="Go">', "\n";
		echo '</form><br/>', "\n";
	}
?>
<form method = "post" action = "Tables.php">
<select Name = "Tables">
	<option value = "Stores"> Volvo </option>
	<option value = "Items"> Items </option>
	<option value = "Inventory"> Inventory </option>
</select>
<input type = "submit" value = "Submit">
</form>
</body>
</html>
