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
		$message = $_GET['value1'];
		$message1 = $_GET['value2'];
		$total = $message + $message1;
		echo "The sum is: " .$total;
	?>
	</body>
</html>