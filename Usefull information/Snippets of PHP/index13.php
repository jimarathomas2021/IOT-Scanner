<!DOCTYPE html> <!--index09.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?php	
		$first_name = 'Bob';
		$last_name = 'Roberts';
		$name = 'Name: ' . $first_name;					// Name: Bob
		$name = $first_name . ' ' . $last_name;			// Bob Roberts
		
		$price = 19.99;
		$price_string = 'Price:' . $price;				// Price: 19.99
		
	?><!--end PHP script-->
	
	</body>
</html>