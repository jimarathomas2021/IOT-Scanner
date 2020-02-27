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
		$name = "Name: $first_name $last_name";
		
		echo $name;
		echo "<br>";
		$name = $first_name $last_name;
		echo $name;
		
	?><!--end PHP script-->
	
	</body>
</html>