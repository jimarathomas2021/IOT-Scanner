<html>
<head>
<title>Insert Movies Results</title>
<body>

<?



// get the data from the form and assign the data to variables

$title = $_POST['title'];
$directorfn = $_POST['directorfn'];
$directorln = $_POST['directorln'];
$year = $_POST['year'];
$genre = $_POST['genre'];
$runtime = $_POST['runtime'];
$plot = $_POST['plot'];
$comments = $_POST['comments'];



// check to see if all the data is there

if (!$title
 || !$directorfn
 || !$directorln
 || !$year
 || !$genre
 || !$runtime
 || !$plot
 || !$comments)
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$title = addslashes($title);
$directorfn = addslashes($directorfn);
$directorln = addslashes($directorln);
$year = intval($year);
$genre = addslashes($genre);
$runtime = intval($runtime);
$plot = addslashes($plot);
$comments = addslashes($comments);

// connect to the db

@ $db = mysql_pconnect("localhost","mcwhorter","isotrack");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("mcwhorter");


// prepare the query

$query = "insert into director values
	('".NULL."','".$directorfn."','".$directorln."')";



// run the query

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." director added to Database.<br>";


$query = "insert into movie values
	('".NULL."','".$title."','".'"last_insert_id()"'.
"','".$year.
"','".$genre.
"','".$runtime.
"','".$plot.
"','".$comments."')";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." movie added to Database.<br>";


?>

</body>
</html>


