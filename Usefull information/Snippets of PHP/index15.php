<!DOCTYPE html> <!--index09.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	<?php	
		$list_price = 19.95;
		$discount_percent = 20;
		$discount_amount = $list_price * $discount_percent * .01;
		$discount_price = $list_price - $discount_amount;				
		
		echo $discount_price;			//15.96
		
	?><!--end PHP script-->
	
	</body>
</html>