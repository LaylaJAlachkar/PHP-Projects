<!DOCTYPE html>
<!--Layla Alachkar-->
<html>
<head>
	<title> Program 3</title>
	<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
	<h1> Program #3: Getting Started with PHP </h1>
	<h3> By Layla Alachkar </h3>
	<h2> Triangle </h2>
	<p> This will calculate the permiter and the area of a triangle: enter 3 (x,y) coordinates </p>
	
	<form action = "Triangle.php" method = "post"> 
			(<input type = "number" name = "x1" value = "0">, 
			<input type = "number" name = "y1" value = "0">)
			<br />
			(<input type = "number" name = "x2" value = "0">, 
			<input type = "number" name = "y2" value = "0">)
			<br />
			(<input type = "number" name = "x3" value = "0">, 
			<input type = "number" name = "y3" value = "0">)
			<br />
			<input type = "submit" name = "submit" value = "Calculate">
	</form>
	<br / > <br />
	<h2> Primes </h2>
	<p> This finds all the prime numbers within a specified range: enter a low and high </p>
	<form action = "Primes.php" method = "post">
			Low:   <input type = "number" name = "low" value = "0">
			<br />
			High: <input type = "number" name = "high" value = "0">
			<br />
			<input type = "submit" name = "submit" value = "Find the primes">
	</form>
	
	<br /> <br />
	<h2> Calculator </h2>
	<p> This calculates a mathmatical statement
	<form>
		Mathmatical Statement: <input type = "text" name = "statement" value = "">
		<br />
		<input type = "submit" name = "submit" value = "Calculate">
</body>