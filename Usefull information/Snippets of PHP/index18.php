<!DOCTYPE html> <!--index02.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	
	<?PHP
		$name = 'Ray ';
		$name = $name . 'Harris';		//	'Ray Harris'
		echo $name; 
		echo "<br>";
		$name = 'Ray ';
		$name .= 'Harris';				//	'Ray Harris'
		echo $name;
		echo "<br>";
		echo "<br>";
		
		$count = 1;
		$count = $count + 1;			//2
		echo $count;
		echo "<br>";
		$count = 1;
		$count += 1;					//2
		echo $count;
		echo "<br>";			
		$count = 1;
		$count++;						//2
		echo $count;
		echo "<br>";
		echo "<br>";
		
		$message = 'Months: ';
		$months = 120;
		$message .= $months;
		echo $months;					// 'Months: 120'
		echo "<br>";
		$subtotal = 24.50;
		$subtotal += 75.50;				//100
		$subtotal *= .9;				//90 (100 * .9)
		echo $subtotal;			
		echo "<br>";
		echo "<br>";
		
	
		$nf = number_format(12345);		//12,345
		echo $nf;
		echo "<br>";
		$nf = number_format(12345, 2);
		echo $nf;
		echo "<br>";
		$nf = number_format(12345.674, 2);	
		echo $nf;
		echo "<br>";		
		$nf = number_format(12345.675, 2);	
		echo $nf;
		echo "<br>";
		echo "<br>";
		
		$date = date('Y-m-d');
		echo $date;
		echo "<br>";
		$date = date('m/d/y');
		echo $date;
		echo "<br>";
		$date = date('m.d.y');
		echo $date;
		echo "<br>";
		$date = date('Y');
		echo $date;
		echo "<br>";
		echo "<br>";
		
		$name = null;
		isset($name);
		echo isset($name);
		echo "<br>";
		empty($name);
		echo empty($name);
		echo "<br>";
		$price = 52;
		is_numeric($price);
		echo is_numeric($price);
		
		
	
	?>
	</body>
</html>