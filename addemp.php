<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Products.css">
	<title>Add Employee</title>
	<style>
		#frmdiv {

			max-width: 760px;
			margin: 0 auto;
		}

		form {
			width: 50%;
			margin: 50px auto;
			padding: 40px 50px 40px 30px;
			background-color: transperent;
			border-radius: 6px;
			box-shadow: 0 8px 8px -5px rgba(0, 0, 0, 0.2);

		}

		label,
		h1 {
			font-weight: bold;
			margin-bottom: 4px;
			display: block;
			color: gray;
		}

		input {
			margin-bottom: 24px;
			padding: 0 10px;
			width: 100%;
			height: 40px;
			background-color: white;
			font-size: 1em;
			color: #444;
			border: none;
		}

		button {
			background-color: transperent;
			color: gray;
			margin: 0;
			padding: 12px 20px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
		}

	</style>
</head>

<body>
	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#addemp">Add Employees</a>
				<a href="Employees.php">Employee's</a>
				<a href="updateemp.php">Update Employees </a>
			</div>
		</div>
	</header>
	<section id="sideMenu">
		<div id="frmdiv">
			<h1 align="center"> Add Employee Details </h1>
			<form name="Add" action="addemp.php" method="POST">
				<table align="center">
					<tr>
						<td>Employee ID :</td>
						<td><input type="text" name="emp_id" id="emp_id"></td>
					</tr>
					<tr>
						<td>Employee Name:</td>
						<td><input type="text" name="emp_name" id="emp_name"></td>
					</tr>
					<tr>
						<td>Employee Position:</td>
						<td><input type="text" name="emp_position" id="emp_position"></td>
					</tr>
					<tr>
						<td><input type="submit" value="Add" name="add"></td>
					</tr><br>
				</table>
			</form>
		</div>
	</section>
</body>

</html>



<?php 

$db = mysqli_connect("localhost","root","","pharmacy");

if(isset($_POST['add'])){
	
	$emp_id = $_POST['emp_id'];
	$emp_name = $_POST['emp_name'];
	$emp_position = $_POST['emp_position'];
	
	$qry = "INSERT INTO employee VALUES('$emp_id','$emp_name','$emp_position')";
	if(mysqli_query($db,$qry)){
		
		echo'<script>alert("Add Successfully.");</script>';
		header('location:Employees.php');
	}else{
		
		echo mysqli_error($db);
	}	
}
?>
