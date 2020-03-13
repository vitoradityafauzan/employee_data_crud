<html>
<head>
	<title>Adding Data</title>

</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$divi = $_POST['divi'];
		
	// checking empty fields
	if(empty($name) || empty($age) || empty($email) || empty($divi)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($divi)) {
			echo "<font color='red'>Division field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$query = mysqli_query($conn, "INSERT INTO profil(name,age,email,divi) VALUES('$name','$age','$email','$divi')");
		
		//display success message
		echo "<h1 style='color: green;'>Data added successfully.</h1>";
		echo "<br> <br> <a href='index.php' class='btn btn-link'>View Result</a>";
	}
}
?>
</body>
</html>
