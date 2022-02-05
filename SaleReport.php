<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name ="viewreport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="add.css">
<title>Administrator</title>

<style>
	body{
		background-color:#000;
		margin:0;
	}
	section{
		height:auto !important;
		background-color:#fff;
	}
	/*.view-users{
		width:100%;
		margin:10% 15%;
	}*/
	.view-users th{
		padding:25px;
		font-size:30px;
		height:auto;
	}
	.view-users td{
		object-fit:cover;
	}
	.td-img{
		text-align:center;
		padding:10%;
		object-fit:cover;
		overflow:hidden;
		width:50px;
		height:50px;
	}

</style>

</head>
<body>

	<header>
		<div id="topbar">
		<div id="topnav">
		 <a id="active" href="#SaleReport">Report</a>
		 <a href="admin.php">Addproducts</a>
		  <a href="Companies.php">Company's</a>
		 <a href="Products.php">Products</a>
		 <a href="EmployeeS.php">Employee's</a></div>
		 </div>
	</header>


	<section id ="sideMenu">
	<h1 align="center">SaleReport</h1>
			<div class="view-users">
				<?php
				$query = "SELECT * FROM bills";  // mysql query             DB
				$result = mysqli_query(mysqli_connect("localhost","root","","pharmacy"),$query); ?>

				<table border="1" cellspacing="0">
					<tr>
						<th>ID</th>   
						<th> Firstname</th>						
						<th>Email </th>
						<th>Address </th>
						<th>City</th>
						<th>District</th>
						<th>Postal Code</th>
						<th>Card Name</th>
						<th>Date</th>
						
					</tr>
					<?php
					while ($row=mysqli_fetch_assoc($result)) {  // fetch data from mysql and asign to variable
						$field1 = $row["id"];
						$field2 = $row["firstname"];       // display values in table
						$field3 = $row["email"]; 
						$field4 = $row["address"]; 
						$field5 = $row["city"]; 
						$field6 = $row["district"]; 
						$field7 = $row["postal_code"]; 
						$field8 = $row["card_name"]; 
						$field9 = $row["date"]; 
					?>
					<tr>
						 
						<td><?php echo $field1 ?></td>
						<td><?php echo $field2 ?></td>
						<td><?php echo $field3 ?></td>
						<td><?php echo $field4 ?></td>
						<td><?php echo $field5 ?></td>
					   <td><?php echo $field6 ?></td>
					   <td><?php echo $field7 ?></td>
					   <td><?php echo $field8 ?></td>
					   <td><?php echo $field9 ?></td>
					
						
						
					</tr>
					<?php  } ?>
				</table>
				<?php    $result->free(); ?>
			</div>

				
			</div>

	</section>







	
</body>

</html>