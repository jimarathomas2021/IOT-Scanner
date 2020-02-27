<!DOCTYPE html> <!--ARRAYS-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?PHP
	
	/*
		$numbers = array();
		for ($i = 0; $i < 10; $i++)
		{
			$numbers [] = mt_rand(1, 100);
		}
		print_r($numbers);
		echo "<br>";
		
		$numbers_string = '';
		for ($i = 0; $i < count($numbers); $i++)
		{
			$numbers_string .= " [".$i."] =>".$numbers[$i] . ' ';
		}
		echo "Array (" .$numbers_string . ")";
	***********************************************************************/
		
		
	//	COMPUTES THE SUM AND AVERAGE OF AN ARRAY OF PRICES
	/*
		$prices = array(141.95, 212.95, 411, 10.95);
		$sum = 0;
		for($i = 0; $i < count($prices); $i++)
		{
			$sum += $prices[$i];
		}
		$average = $sum / count($prices);
		echo $average;
	*/
	
		$numbers = array();		
		$sum = 0; 
		for ($i = 0; $i < 20; $i++ )
			{
				$numbers [] = $i * 2;
				$sum += $numbers; 
			}
			//print_r($numbers);
	
			
		
		$average = $sum / count($numbers);
		echo $average;
	
	?>
	
	</body>
</html>