<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="addn.css">
	<title>Administrator</title>

	<style>
		body {
			background-color: #000;
			margin: 0;
		}

		section {
			height: auto !important;
			background-color: #fff;
		}

		/*	.view-users{
		width:100%;
		margin:10% 15%;
	}*/
		.view-users th {
			padding: 25px;
			font-size: 35px;
			height: auto;
		}

		.view-users td {
			object-fit: cover;
		}

		/*	.td-img{
		text-align:center;
		padding:10%;
		object-fit:cover;
		overflow:hidden;
		width:50px;
		height:50px;
	}*/
		.view-users tr {
			padding: 45px;
			font-size: 18px;
			height: 60px;
		}
	</style>

</head>

<body>

	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#Employees">Employee's</a>
				<a href="admin.php">Addproducts</a>
				<a href="Companies.php">Company's</a>
				<a href="Products.php">Products</a>
				<a href="SaleReport.php">Report</a>
			</div>
		</div>
	</header>


	<section id="sideMenu">
		<h1 align="center">Employee Details</h1>
		<div class="view-users">
			<?php
			$query = "SELECT * FROM employee";  // mysql query             DB
			$result = mysqli_query(mysqli_connect("localhost", "root", "", "pharmacy"), $query); ?>

			<table border="1" cellspacing="0">
				<tr>
					<th> ID</th>
					<th> Name</th>
					<th> Position</th>
					<th> Edit </th>
				</tr>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {  // fetch data from mysql and asign to variable
					$field1 = $row["emp_id"];
					$field2 = $row["emp_name"];
					$field3 = $row["emp_position"];       // display values in table
				?>
					<tr>

						<td><?php echo $field1 ?></td>
						<td><?php echo $field2 ?></td>
						<td><?php echo $field3 ?></td>
						<td>
							<form method="get" action="updateemp.php">
								<input type="hidden" name="id">
								<a href="updateemp.php?id=<?php echo $row["emp_id"]; ?>" type='submit' name="update" style="color:#0f0;" id="update">Update</a>
								<a href="deleteemp.php?id=<?php echo $row["emp_id"]; ?>" type='submit' name="delete" style="color:red;" id="delete" style="color:red;">Delete</a>
							</form>
						</td>

					</tr>
				<?php  } ?>
			</table>
			<?php $result->free(); ?>
		</div>

	</section>








</body>

</html>