<!DOCTYPE html> <!--marks.php-->
<html>
	<head>
		<meta charset = "utf-8">
		<title>Assignment 1</title>
		<style>body	{background-color:#E6E6FA;}</style>
	</head>
	 
	<body>
	<form action = "marks.php" method = "post">
		<label>User ID: </label>
		<input type = "text" name = "id"> <br>
		<label>E-Mail:  </label>
		<input type = "text" name = "email"> <br>
		<p><button> Submit </button></p>
	</form>
	
	
	<?PHP
	
	$user_id = $_POST['id'];
	$user_email = $_POST['email'];
	                                                                                                                                                                                                                                                                                                               
	$student_grades = array('Math' => 95, 'English' => 90, 'Physics' => 95, 'Biology' => 90);
	
	
	if ($user_id != "john" && $user_email != "jk@leomail.tamuc.edu" )
	{
		$message = 'Please enter a valid user ID and email. ';
		echo $message;
	}
	else if ($user_id != "john" || $user_email != "jk@leomail.tamuc.edu" )
	{
		$message = 'Incorrect user ID or email. ';
		echo $message;
	}
	else if ( $user_id == "john" && $user_email == "jk@leomail.tamuc.edu" )
	{
		$message = 'Hello, '. $user_id . '! Your e-mail address is ' . $user_email . '.';
		echo $message;
		echo "<br>";
		echo 'Please find your marks below.';
		echo "<br>";
			foreach ($student_grades as $subject => $show_grade)
			{
				echo "<br>$subject: $show_grade<br>";
			}
	}
	
	
		
	
	?>
	</body>
</html>