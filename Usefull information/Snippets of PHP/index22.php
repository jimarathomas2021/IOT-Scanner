<!DOCTYPE html> <!--ARRAYS-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?PHP
	
	//  CODE THAT STORES 10 RANDOM NUMBERS IN AN ARRAY
	/*
		$numbers = array();
		for ($i = 0; $i < 10; $i++)
		{
			$numbers [] = mt_rand(1, 100);
		}
		print_r($numbers);
	*************************************************/	


		
	//	HOW TO REMOVE ELEMENTS THAT CONTAIN NULL VALUES AND REINDEX AN ARRAY
	/*
		$letters = array('a', 'b', 'c', 'd');			//array is a, b, c, d
		print_r($letters);
		 echo "<br>";
		 
		unset($letters[2]);								//array is a, b, NULL, d
		print_r($letters);
		echo "<br>";
		
		$letters = array_values($letters);				//array is a, b, d
		print_r($letters);
		echo "<br>";
	******************************************************************************/
		
		
		
	//	HOW TO USE ARRAY ELEMENTS WITH VARIABLE SUBSTITUTION
	/*
		$name = array ('Ray', 'Harris');
		echo "First Name: $name[0]";					//First Name: Ray
		echo "<br>";
		echo "First Name: {$name[0]}";					//First Name: Ray
		
	*************************************************************************/	
	
	
	// STORES EVEN VALUES INTO ARRAY
	
		$numbers = array();		
		for ($i = 0; $i < 10; $i++ )
			{
				$numbers [] = $i * 2;
			}
			print_r($numbers);
	
		
	?>
	
	</body>
</html>