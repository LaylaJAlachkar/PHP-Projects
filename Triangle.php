<!--Layla Alachkar-->
<html>
<head> 
	<title> Triangle Stats</title>
	<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
	<h1>Program #3: Triangle Stats </h1> <br>
	<h2> By Layla Alachkar </h2>
	<h3> Your input was... </h3> 
	(x1, y1) = (<?php echo $_POST['x1'];?> , <?php echo $_POST['y1'];?>)<br>
	
	(x2, y2) = (<?php echo $_POST['x2'];?> , <?php echo $_POST['y2'];?>)<br>
	
	(x3, y3) = (<?php echo $_POST['x3'];?> , <?php echo $_POST['y3'];?>)<br>
	
	<br />
	<?php function calcPerimeter($x1, $y1, $x2, $y2, $x3, $y3)
	{
		$x1 = $_POST['x1'];
		$y1 = $_POST['y1'];
		$x2 = $_POST['x2'];
		$y2 = $_POST['y2'];
		$x3 = $_POST['x3'];
		$y3 = $_POST['y3'];
		
		echo  (1/2)($x1*($y2-$y3) + $x2*($y3-$y1) + $x3*($y1-$y2));
	} ?>
	<h3> Answers: calcPerimeter(); </h3>	
	Perimeter = <br>
	Area = <br>
	<br />

	<input type= "submit" name = "back" value = "Back!" <a href="#" onclick="history.back();"></a>
</body>
</html>
