		
<?php


 
// Define variables and initialize with empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $website = $comment = "";
 

 
    // Validate name
    if(empty($_POST["name"])){
        $nameErr = "* Please enter your name.";
    } else{
        $name = $_POST["name"];
		
		
       
    }
    
    // Validate email address
    if(empty($_POST["email"])){
        $emailErr = "* Please enter your email address.";     
    } 
		else
			{
				$email = $_POST["email"];
				
			   
			}
	
	
	// Validate gender
    if(empty($_POST["gender"]))
	{
        $genderErr = "* Please enter your gender.";     
    } 
		
	if(!empty($_POST["website"]))
	{
		$website = $_POST['website'];
	}
	
	if(!empty($_POST["comment"]))
	{
		$comment = $_POST['comment'];
	}
	
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Validation</title>
    <style type="text/css">
        .error{ color: red; }

    </style>
</head>
<body>
   
    <form method="post">
        <p>
            <label for="inputName">Name:</label>
            <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error"><?php echo $nameErr; ?></span>
        </p>
        <p>
            <label for="inputEmail">Email:</label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error"><?php echo $emailErr; ?></span>
        </p>
        <p>
            <label for="inputWebsite">Website:</label>
            <input type="text" name="website" id="inputWebsite" value="<?php echo $website; ?>">
        </p>
        <p>
            <label for="inputComment">Comment:</label>
            <textarea name="comment" id="inputComment" rows="7" cols="50"><?php echo $comment; ?></textarea>
        </p>
		<p>
			<label for = "inputGender">Gender:</label>
			<input type="radio" name="gender" value="female" > Female
			<input type="radio" name="gender" value="male" > Male
			<input type="radio" name="gender" value="other" > Other
			<span class="error"><?php echo $genderErr; ?></span>
		</p>
        <input type="submit" value="Submit" >
    </form>
	<h2>Your Input:</h2>
	<?php 
			echo $name; 
			 echo "<br>";
			echo $email;
			 echo "<br>";
			echo $website;
			 echo "<br>";
			echo $comment;
			 echo "<br>";
			
	?>
	<br>

</body>
</html>