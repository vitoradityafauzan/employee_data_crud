<?php
	include_once("config.php");

	$query = mysqli_query($conn, "SELECT * FROM profil ORDER BY id DESC");
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
		            <a href="add.php" class="btn btn-warning">Tambah</a>
		            <br>
		            <br>
		            <table class="table">

						<tr bgcolor='#CCCCCC'>
							<td>#</td>
							<td>Name</td>
							<td>Age</td>
							<td>Email</td>
							<td>Division</td>
							<td>Update Data</td>
						</tr>
						<?php 
							$no = 1;
							//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
							while($rslt = mysqli_fetch_array($query)) { 
						
							echo "<tr>";
							echo "<td>".$no++."</td>";
							echo "<td>".$rslt['name']."</td>";
							echo "<td>".$rslt['age']."</td>";
							echo "<td>".$rslt['email']."</td>";	
							echo "<td>".$rslt['divi']."</td>";	

							echo "<td> <div class=\"btn-group\"><a href=\"edit.php?id=$rslt[id]\" class=\"btn btn-info\">Edit</a> | <a href=\"delete.php?id=$rslt[id]\" class=\"btn btn-primary\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></div></td>";		
						}
						?>
					</table>
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