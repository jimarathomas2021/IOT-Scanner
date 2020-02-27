<!DOCTYPE html> <!--index02.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>PHP Variables</title>
	</head>
	 
	<body>
<form method= "GET">
	<input type="text" name="userName">
	<button>SUBMIT</button>
</form>
		<?php
			$message = $_GET['userName'];
			echo $message. " is taking PHP";
		?><!-- end PHP script -->
	</body>
</html>