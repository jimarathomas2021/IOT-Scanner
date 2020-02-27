<html>
<head>
<title>Delete Books Results</title>
<link rel="stylesheet" href="mycss.css">
<nav> 
	<ul>
<li><a class="home" href ="http://jessicacovarrubias.x10host.com/">Home</a></li>
<li><a class="insert" href ="http://jessicacovarrubias.x10host.com/insert_song.html">Insert</a></li>
<li><a class="delete" href="http://jessicacovarrubias.x10host.com/                               ">Delete</a></li>
<li><a class="all" href="http://jessicacovarrubias.x10host.com/all_songs.php">View All </a></li></ul>
</nav>
</head>
<body>
<div class="img-container">
<div class="inner-container">
<p>

<?



// get the data from the form and assign the data to variables

$songid = $_POST['songid'];


// check to see if all the data is there

if (!$songid
  )
{
	echo "You have not entered all the required details.<br>"
		."Please go back and try again.";
	exit;
}



// add slashes and prepare the data for inserting into the db

$bookid = intval($songid);

// connect to the db

@ $db = mysql_pconnect("localhost","jessi116","Covarrubias05");

if (!$db)
{
	echo "ERROR: Could not connect to database.  Please try again later.";
	exit;
}


// select the db
mysql_select_db("jessi116_project");


// prepare the query



$query = "delete from book where bookid = $bookid";

$result = mysql_query($query);

if($result)
	echo mysql_affected_rows()." book deleted from Database.";


?>
</p>
</body>
</html>