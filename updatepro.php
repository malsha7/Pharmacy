<?php
include("CONNECTION.php");

if (isset($_POST["Update2"])) {

	$id = $_GET['id'];
	echo "ID: $id ";
	$name1 = $_POST['name'];
	$price1 = $_POST['item_price'];

	if (empty($_FILES["file"]["name"])) {
		$sql = "UPDATE products SET item_name='$name1',item_price ='$price1'  WHERE item_id= '$id' ";
		if (mysqli_query($conn, $sql)) {
			echo " Update successful.";
		}
	}

	if (!empty($_FILES["file"]["name"])) //if image is changed
	{
		$targetDir = "images/";
		$fileName = basename($_FILES["file"]["name"]);
		$targetFilePath = $targetDir . $fileName;
		$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

		// Allow certain file formats
		$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');

		if (in_array($fileType, $allowTypes)) {
			// Upload file to server
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
				echo " FILE MOVED ";
				$sql = "UPDATE products SET item_name='$name1',item_price ='$price1',item_image ='$fileName'  WHERE item_id= '$id' ";
				if (mysqli_query($conn, $sql)) {
					echo " Update successful. ";
				}
			}
		}
	}
}



$result = mysqli_query($conn, "SELECT * FROM `products` WHERE item_id='" . $_GET['id'] . "' ");
$row = mysqli_fetch_array($result);
//header('location: admin.php');

?>

<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Products.css">
	<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>

	<title>Update Product</title>

	<style>
		.img-pre {
			max-width: 200px;
			overflow: auto;
		}

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
				<a id="active" href="#updatepro">Update Products</a>
				<a href="Products.php">Products Details</a>
				<a href="addpro.php">Add Products</a>
				<a href="admin.php">Admin</a>
			</div>
		</div>
	</header>

	<section id="sideMenu">
		<div id="frmdiv">
			<h1 align="center"> Update Product Details </h1>
			<form method="post" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" enctype="multipart/form-data">
				<table align="center">
					<tr>
						<td>Product Name:</td>
						<td><input type="text" name="name" value="<?php echo $row["item_name"]; ?>" placeholder="Product Name" required></td>
					</tr>
					<tr>
						<td>Product Price:</td>
						<td><input type="text" name="item_price" id="item_price" value="<?php echo $row["item_price"]; ?>"></td>
					</tr>
					<tr>
						<td>Product image:</td>
						<td>
							<div class="img-box-R" id="img-box-R">
								<input type="file" name="file" id="file">
								<input type="hidden" name="item_image" value="<?php echo $row["item_image"]; ?>" />
								<img src='<?php echo 'images/' . $row["item_image"]; ?>' alt="cover" class="img-pre">
								<span class="img-pre-span">Image Preview</span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="hidden" name="item_id" value="" />
							<input type="submit" value="Update" name="Update2">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</section>

	<script>
		// Image Preview
		const inpFile = document.getElementById("file");
		const previewContainer = document.getElementById("img-box-R");
		const previewImage = previewContainer.querySelector(".img-pre");
		const previewImageAlt = previewContainer.querySelector(".img-pre-span");

		function HideAlt() {
			previewImageAlt.style.display = "none";
		}
		HideAlt();
		inpFile.addEventListener("change", function() {
			const file = this.files[0];

			if (file) {
				const reader = new FileReader();


				HideAlt();
				previewImage.style.display = "block";

				reader.addEventListener("load", function() {
					console.log(this);
					previewImage.setAttribute("src", this.result);
				});

				reader.readAsDataURL(file);
			} else {
				previewImageAlt.style.display = null;
				previewImage.style.display = null;
				previewImage.setAttribute("src", "<?php echo 'images/' . $row["item_image"]; ?>");
			}
		});
	</script>
</body>

</html>