<?php
include("CONNECTION.php");
$com_id = $_GET['id'];
if (isset($_POST["Update"])) {

	echo "ID: $id ";
	$com_name = $_POST['com_name'];

	$update = ("UPDATE `company` SET com_name = '$com_name' WHERE com_id = '$com_id'");
	if (mysqli_query($conn, $update)) {
		echo " Update successful.";
	} else {
		echo " not inserted!.";
	}

	header("location:Companies.php");
}

$result = mysqli_query($conn, "SELECT com_name FROM `company`  WHERE com_id = '$com_id'");
$row = mysqli_fetch_array($result);

?>



<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Products.css">
	<title>Update Company</title>
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
				<a id="active" href="#updatecom">Update Company's</a>
				<a href="Companies.php">Company's</a>
				<a href="addcom.php">Add Company's</a>
			</div>
		</div>
	</header>
	<section id="sideMenu">
		<div id="frmdiv">
			<h1 align="center"> Update Company </h1>
			<form method="post" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" enctype="multipart/form-data">
				<table align="center">
					<td>Company Name:</td>
					<td><input type="text" name="com_name" id="com_name" value="<?php echo $row["com_name"]; ?>"></td>
					<tr>
						<td><input type="submit" value="Update" name="Update"></td>
					</tr>
					<br>

				</table>
			</form>
		</div>
	</section>
</body>

</html>