<!DOCTYPE html> <!--index02.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	<form method = "GET">
		<input type = "text" name = "value1">
		<input type = "text" name = "value2">
		<p><button> Submit </button></p>
	</form>
	
	<?PHP
		$list_price = $_GET['value1'];
		$discount_percent = $_GET['value2'];
		$discount_amount = $list_price * $discount_percent * .01;
		$discount_price = $list_price - $discount_amount;	
					
		echo 'Item cost: $' . $list_price;
		echo "<br>";
		echo 'Discount percent: ' . $discount_percent . '%';
		echo "<br>";
		echo 'Discount amount: $' . $discount_amount;	
		echo "<br>";
		echo 'Discounted price: $' . $discount_price;
	
	
	?>
	</body>
</html>