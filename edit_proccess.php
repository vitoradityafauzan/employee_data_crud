<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
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

	} else {	
		//updating the table
		$query = mysqli_query($conn, "UPDATE profil SET name='$name',age='$age',email='$email', divi='$divi' WHERE id='$id'");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>