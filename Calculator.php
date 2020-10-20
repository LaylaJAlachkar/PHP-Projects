<!DOCTYPE html>
<head> 
	<title> Calculator </title>
	<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
	<h1> Program #3: Calculator </h1>
	<h2> By Layla Alachkar </h2>
	<h3> Your input was... </h3>
	<?php 
		echo $_POST['statement']; 
	?>
	<br>
	<h3> Answer: </h3> 
	<br>
	<input type= "submit" name = "back" value = "Back!" <a href="#" onclick="history.back();"></a>
</body>
</html>