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
		$from = $_GET['value1'];
		$to = $_GET['value2'];
		$difference = $to - $from;
		$percent = $difference / $from * 100;
		
		echo 'From: ' . $from;
		echo "<br>";
		echo 'To: ' .$to;
		echo "<br>";
		echo 'Increase/Decrease: ' . $percent . '%';
		echo "<br>";
	
	
	
	?>
	</body>
</html>