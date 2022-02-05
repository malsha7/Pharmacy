<?php
include("CONNECTION.php");
if (isset($_POST['ordering'])) {

	$id = $_GET['id'];
	$status = "done";
	echo $id;

	$order_query = ("UPDATE prescript SET status = '$status' WHERE id = '$id'");

	mysqli_query($conn, $order_query);
	if ($order_query) {
		if (mysqli_affected_rows($conn) > 0) {

			echo '<script>alert("Accepted ! Your Successfully")</script>';
			echo '<script>window.location="Products.php"</script>';
		}
	} else {
		echo 'recorded failed';
	}
}
?>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="add.css">
	<title>Customers Accept Orders</title>

	<style>
		body {
			background-color: #000;
			margin: 0;
		}

		section {

			height: auto !important;
			background-color: #fff;
		}

		.view-users th {
			text-align: center;
			padding: 15px;
			font-size: 20px;
			height: auto;
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

		.view-users td,
		a {
			object-fit: cover;
		}

		.td-img {
			text-align: center;
			padding: 15%;
			object-fit: cover;
			overflow: hidden;
			width: auto;
			height: 50px;
			cursor: zoom-in;
		}

		.view-users tr {
			padding: 15px;
			font-size: 18px;
			height: 60px;
		}

		.view-users {
			margin-left: 5%;
			width: 100%;
			height: auto;
		}
	</style>

</head>

<body>

	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#accepts">Accept Orders</a>
				<a href="Products.php">Products</a>
			</div>
		</div>
	</header>


	<section id="sideMenu">
		<h1 align="center">Accept Orders</h1>
		<div class="view-users">
			<?php
			$query = "SELECT * FROM prescript";  // mysql query             DB
			$result = mysqli_query(mysqli_connect("localhost", "root", "", "pharmacy"), $query); ?>

			<table border="1" cellspacing="0">
				<tr>
					<th>Name</th>
					<th>Contact No.</th>
					<th> Address </th>
					<th>Location</th>
					<th>Patient Name</th>
					<th>Patient Age</th>
					<th>Patient Gender</th>
					<th>Allergy</th>
					<th>Date</th>
					<th>Prescript</th>
					<th>Confirm</th>

				</tr>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {  // fetch data from mysql and asign to variable
				?>
					<tr>

						<td><?php echo $row["name"]; ?></td>
						<td><?php echo $row["contact"]; ?></td>
						<td><?php echo $row["address"]; ?></td>
						<td><?php echo $row["deliver"]; ?></td>
						<td><?php echo $row["patient"]; ?></td>
						<td><?php echo $row["age"]; ?></td>
						<td><?php echo $row["gender"]; ?></td>
						<td><?php echo $row["allergy"]; ?></td>
						<td><?php echo $row["date"]; ?></td>
						<td>

							<div class="td-img">
								<img src="images/<?php echo $row["item_image"]; ?>" width="80px" onclick="imgDisplay(this);">
							</div>

						</td>
						<td>

							<form method='post' action="accepts.php?id=<?php echo $row["id"]; ?>">
								<input type="submit" id="ordering" name="ordering" value="Ordering">
							</form>
						</td>
					</tr>
				<?php  } ?>
			</table>
			<?php $result->free(); ?>
		</div>

	</section>




	<div id="container">
		<span onclick="imgHide();" class="closebtn">
			<ion-icon name="close-circle-outline" style="color: red !important;"></ion-icon>
		</span>
		<img id="fullImg">
	</div>


	<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
	<script type="text/javascript">
		var elem = document.getElementById("container");

		function imgDisplay(img) {
			var fullImg = document.getElementById("fullImg");
			fullImg.src = img.getAttribute("src");
			openFullscreen();
		}

		function openFullscreen() {
			elem.style.display = "flex";
			if (elem.requestFullscreen) {
				elem.requestFullscreen();
			} else if (elem.mozRequestFullScreen) {
				/* Firefox */
				elem.mozRequestFullScreen();
			} else if (elem.webkitRequestFullscreen) {
				/* Chrome, Safari and Opera */
				elem.webkitRequestFullscreen();
			} else if (elem.msRequestFullscreen) {
				/* IE/Edge */
				elem.msRequestFullscreen();
			}
		}

		function imgHide() {
			elem.style.display = "none";
			if (document.exitFullscreen) {
				document.exitFullscreen();
			} else if (document.webkitExitFullscreen) {
				document.webkitExitFullscreen();
			} else if (document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			} else if (document.msExitFullscreen) {
				document.msExitFullscreen();
			}
		}
	</script>
</body>

</html>