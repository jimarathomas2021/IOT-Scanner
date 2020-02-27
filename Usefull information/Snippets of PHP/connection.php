	<?PHP
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'students';
	$conn = @mysqli_connect($host, $username, $password, $dbname)or die ("Please check your password");
	echo "great work!!!";
	?>	


