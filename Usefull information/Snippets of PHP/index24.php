<!DOCTYPE html> <!--ARRAYS-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?PHP
	
	/* SKIPS EMPTY VALUES IN AN ARRAY
	
		$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		unset($numbers[2], $numbers[6]);
		end($numbers);
		$last = key($numbers);
		$numbers_string = '';
		for($i = 0; $i <= $last; $i++)
		{
			if (isset($numbers[$i]))
			{
				$numbers_string .= $numbers[$i] . ' ';
			}
		}
		echo $numbers_string;				//displays: 1 2 4 5 6 8 9 10
	*/
		
		
		
		
		
	/* SUM OF AN ARRAY USING FUNCTIONS
		
		$sum = 0;
		$myArray = array("7", "10", "20");
		for($x = 0; $x <= 2; $x++)
		{
			echo "Value of x is: " .$myArray[$x];
			$sum += $myArray[$x];
			echo "<br>";
		}
		echo "Sum is: " .$sum;
	*/
		
		
		
		
	/* GIVES EVEN NUMBERS
		
		$sum = 0;
		$myArray = array();
		for($x = 2; $x <= 50; $x++)
		{
			$myArray[] = array($x);
			echo "value of $sum is $x";
			echo "<br>";
			$x = $x+1;
			$sum++;
		}
	*/
	
	
	
	
		
	/* LOGICAL OPERATOR 
	
		$number01 = 20;
		$number02 = 20;
		if($number01==$number01=20 or 5==15)
		{
			echo "Yes";
		}
	*/
	
	
	/*
	$tax_rates = array('NC' => 7.75, 'CA' => 8.25, 'NY' => 8.875);
	echo '<ul>';
	foreach ($tax_rates as $rate)
	{
		echo '<li>';
		echo $rate;
		echo '</li>';
	}
	echo '</ul>';
*/
		
/*	
	$tax_rates = array('NC' => 7.75, 'CA' => 8.25, 'NY' => 8.875);
	echo '<ul>';
	foreach ($tax_rates as $state => $rate)
	{
		echo '<li>';
		echo $state;
		echo " (" . $rate . ")";
		echo '</li>';
	}
	echo '</ul>';
	*/
	
	// A FOREACH GROUP THAT DISPLAYS THE VALUES IN A REGULAR ARRAY
	$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
		unset($numbers[2], $numbers[6]);
		$numbers_string = '';
		foreach($numbers as $number)
		{
				$numbers_string .= $number . ' ';
		}
	
		echo $numbers_string;				//displays: 1 2 4 5 6 8 9 10

		
			
	?>
	
	</body>
</html>