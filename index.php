<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table
		{
			width: 25%;
			border: 2px inset turquoise;

		}

		th
		{
			font-weight: 900;
			text-align: left;
			border: 2px inset turquoise;
			font-family: 'Boogaloo', cursive;
			font-size: 1.5em;
			color: cyan;

		}

		td
		{
			border: 2px inset turquoise;
			text-align: left;
			font-family: 'Boogaloo', cursive;
			color:cyan;

		}	
		body
		{
			background:black;
		}
		h4
		{
			color: cyan;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
</head>
<body>
<?php
	$myArray = array();
	echo("<h4>Minumum Number: 1</h4>\n");
	echo("<h4>Maximum Number: 100</h4>\n");
	echo("<h4>Number of Iterations: 100000</h4>\n");


	

	for($i = 0; $i < 100; $i++)
		{
			$myArray[$i] = 0;
		}

	for($i = 0; $i < 100000; $i++)
		{
			$index = rand(1,100);
			$index -=1;
			$myArray[$index] += 1;
		}

	echo('<table>');
	echo("<tr>");
		echo("<th>The Number Being Generated</th>");
		echo("<th>Count of each Number</th>");
	echo("</tr>");
	for($i = 0; $i < 100; $i++)
		{
			echo('<tr>');
			echo('<td>'.($i+1).'</td>');
			echo('<td>'.$myArray[$i].'</td>');
			echo('</tr>');
		}
	echo('</table>');
?>
</body>
</html>