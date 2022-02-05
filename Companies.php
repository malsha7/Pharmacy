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
				<a id="active" href="#companies">Company's</a>
				<a href="Employees.php">Employee's</a>
				<a href="Products.php">Products</a>
				<a href="SaleReport.php">Report</a>
			</div>
		</div>
	</header>


	<section id="sideMenu">
		<h1 align="center">Company Details</h1>
		<div class="view-users">
			<?php
				$query = "SELECT * FROM company";  // mysql query             DB
				$result = mysqli_query(mysqli_connect("localhost","root","","pharmacy"),$query); ?>

			<table border="1" cellspacing="0">
				<tr>
					<th>ID</th>
					<th> Name</th>
					<th>Edit </th>
				</tr>
				<?php
					while ($row=mysqli_fetch_assoc($result)) {  // fetch data from mysql and asign to variable
						$field1 = $row["com_id"];
						$field2 = $row["com_name"];       // display values in table
					?>
				<tr>

					<td><?php echo $field1 ?></td>
					<td><?php echo $field2 ?></td>

					<td>
						<form action="" method="get" class="">
							<!--<input type="hidden"-->
							<a href="updatecom.php?id=<?php echo $row["com_id"]; ?>" type='submit' name="update" style="color:#0f0;">Update</a>
							<a href="deletecom.php?id=<?php echo $row["com_id"]; ?>" type='submit' name="delete" style="color:red;">Delete</a>
						</form>
					</td>

				</tr>
				<?php  } ?>
			</table>
			<?php    $result->free(); ?>
		</div>

	</section>


</body>

</html>
