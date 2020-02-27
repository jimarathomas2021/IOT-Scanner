<!DOCTYPE html> <!--ARRAYS-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?PHP
	
	/*********************  ARRAY  *****************************
		$myArray = array("Red", "Blue", "White");
		echo "the color is ".$myArray ['2'];
	**************************************************/
	
	
	
	/*******************	FOR LOOP	***************************
		$message = '';
		$counter = 1;
		
		for ($counter = 1; $counter <= 5; $counter++)
		{	
			$message = $message . $counter . '|';			
			echo $message;			
			echo "<br>";
		}
	***************************************************************	
		
	//							WHILE LOOP		
	/***********************************************************
		$investment = 1000;
		$interest_rate = .1;
		$years = 25;
		$future_value = $investment;
		
		$i = 0;
		while ($i <= $years)
		{
			$future_value = ($future_value + ($future_value * $interest_rate));
			$i++;
			echo 'Year ' . $i . ' = $' . $future_value;
			echo "<br>";
		}
	*******************************************************************************
	
	
	
	**********************  HOW TO ADD A VALUE TO END OF AN ARRAY  *******************	
	
	$names = array('Ted Lewis', 'Sue Jones', 'Ray Thomas');
	print_r($names);			//Output:	Array ( [0] => Ted Lewis [1] => Sue Jones [2] => Ray Thomas )
	
	$names[] = 'John Doe';
	print_r($names);			//Output:	Array ( [0] => Ted Lewis [1] => Sue Jones [2] => Ray Thomas [3] => John Doe)
	
	
	
	***********************	how to set a value at a specific index	**********************
	
			$letters = array('a', 'b', 'c', 'd');
			$letters[0] = 'e';
			$letters[3] = 'f';
			$letters[5] = 'g';
			print_r($letters);
	*/
	
	/*
	$letters = array('a', 'b', 'c', 'd');
	unset($letters[2]);
		print_r($letters);
	unset($letters);
	
	print_r($letters);
	*/
	
			$letters = array('a', 'b', 'c', 'd');
			unset($letters[2]);
			$letters = array_values($letters);
			print_r($letters);
			
			$name = array('Ray', 'Harris');
			
		
	?>
	
	</body>
</html>