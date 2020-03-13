<?php
include_once("config.php");

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM profil WHERE id=$id");

while($res = mysqli_fetch_array($query))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$divi = $res['divi'];
}
?>
<html>
	 <head>
		<title>Employee Data</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<style>
			.footer {
			  position: fixed;
			  left: 0;
			  bottom: 0;
			  width: 100%;
			  background-color: red;
			  color: white;
			  text-align: center;
			}
		</style>
	 </head>

	 <body style="background-color: #95cced;">
		<div class="container mt-5">
		    <div class="row">
		        <div class="col-lg-6">
		            <h2>Employee Data Table</h2>
		            <a href="index.php" class="btn btn-warning">Landing Page</a>

		            <br>
		            <br>

					<form action="edit_proccess.php" method="post" name="form1">
						<table width="25%" border="0">
							<tr> 
								<td>Name</td>
								<td><input type="text" name="name" value="<?php echo $name ?>"></td>
							</tr>
							<tr> 
								<td>Age</td>
								<td><input type="text" name="age" value="<?php echo $age ?>"></td>
							</tr>
							<tr> 
								<td>Email</td>
								<td><input type="text" name="email" value="<?php echo $email ?>"></td>
							</tr>
							<tr> 
								<td>Division</td>
								<td>
									<select name="divi" value="<?php echo $divi ?>">
										<option value="Support">Support</option>
										<option value="Administrative">Administrative</option>
										<option value="Logistic">Logistic</option>
									</select>
								</td>
							</tr>
							<tr> 
								<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
								<td><input type="submit" name="update" value="Update"></td>
							</tr>
						</table>
					</form>		            
		        </div>
		    </div>
		</div>

		</br>

		<footer class="footer">
			<marquee bgcolor="red" behavior="alternate">&copy;2020 Employee Data Page. All rights reserved.</marquee> 
		</footer>

		<script type="text/javascript" src="asset/bootstrap.min.js"></script>
	   	<script type="text/javascript" src="asset/jquery.slim.js"></script>
	    <script type="text/javascript" src="asset/popper.min.js"></script>
	</body>
</html>