<!DOCTYPE html> <!--index09.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?php	
		$x = 14;
		$y = 8;
			$result = $x + $y;		
				echo "x + y = $result";		//22
				echo "<br>";
			$result = $x - $y;		
				echo $result;		//6
				echo "<br>";
			$result = $x * $y;		
				echo $result;		//112
				echo "<br>";
			$result = $x / $y;		
				echo $result;		//1.75
				echo "<br>";
			$result = $x % $y;		
				echo $result;		//6
				echo "<br>";		
			$x++;					
				echo $x;			//6
				echo "<br>";
			$y--;					
			echo $y;				//7
		
	?><!--end PHP script-->
	
	</body>
</html>