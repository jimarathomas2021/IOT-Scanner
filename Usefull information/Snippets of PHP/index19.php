<!DOCTYPE html> <!--index02.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
	
	
	<form method = "post">
		<input type = "text" name = "FirstName">
		<p><button> Submit </button></p>
	</form>
	
	<?PHP
	
	$first_name = $_POST['FirstName'];
	
	if (empty	($first_name)	)
	{
		$message = 'You must enter your first name. ';
		echo $message;
	}
	else
		{
			$message = 'Hello ' . $first_name. '!';
			echo $message;
		}
	
		
	
	?>
	</body>
</html>