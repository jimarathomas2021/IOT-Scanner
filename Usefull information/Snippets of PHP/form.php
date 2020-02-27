<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
	$name = $_POST['name']; 
	$email = $_POST['email'];
	$add = $_POST['address'];
	$adm = $_POST['joining_date'];
	
	if(empty ($name))
	{
		$name_msg = "Please enter name"; 
	}
		
	
	if(empty ($email))
	{
		$email_msg = "Please enter email"; 
	}
	
	
	if(empty ($add))
	{
		$add_msg = "Please enter address"; 
	}
		
		
		
	if(empty ($adm))
	{
		$adm_msg = "Please enter admission date"; 
	}
		
		if(empty ($name && $email && $add && $adm))
		{
			echo "";
		}
		else 
		{
			if (mysqli_query($conn, $sql))
			{
				$sql = "INSERT INTO students_record (name, email, address, joining_date) VALUES ('$name', '$email', '$add', '$adm');";
				echo "Submitted";
			}
		}

	

	


}

?>
<!DOCTYPE html> 
<!-- Simple Form -->
<html lang ="en-US">
	<head>
		<meta charset = "utf-8">
		<title>Sample Form</title>
	</head>
	<body>
	
	<form action = "" method = "post">
	<p> Name: <br/><input type = 'text' name = 'name' id = '' /></p>
	<p> Email: <br/><input type = 'text' name = 'email' id = '' /></p>
	<p> Address: <br/><input type = 'text' name = 'address' id = '' /></p>
	<p> Admission Date: <br/><input type = 'text' name = 'joining_date' id = '' /></p>
	<p><input type = "submit" name="submit" /></p>
	<p style = "color:red;">
	
<?php
	
	if(isset($name_msg))
	{
		echo "<br>";
		echo $name_msg;
	}
	
	if(isset($email_msg))
	{
		echo "<br>";
		echo $email_msg;
	}
	
	if(isset($add_msg))
	{
		echo "<br>";
		echo $add_msg;
	}
	
	if(isset($adm_msg))
	{
		echo "<br>";
		echo $adm_msg;
	}
?>
	</p>
	</form>
	
	</body>
</html>