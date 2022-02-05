<?php
session_start();
include("CONNECTION.php");
if (isset($_POST['checkout'])) {

	$name = $_SESSION['name'] = $_POST['firstname'];
	$email = $_SESSION['email'] = $_POST['email'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$district = $_POST['district'];
	$postal_code = $_POST['postal_code'];
	$card_name = $_POST['cardname'];
	$card_number = $_POST['cardnumber'];
	//get date now()
	$date = date("Y-m-d H:i:s");

	$register_query = "INSERT INTO bills(firstname,email,address,city,district,postal_code,card_name,card_number,date)VALUES
		('$name','$email','$address','$city','$district','$postal_code','$card_name','$card_number','$date')";
	mysqli_query($conn, $register_query);
	if ($register_query) {
		if (mysqli_affected_rows($conn) > 0) {
			//	echo("checkout successful");	
			echo '<script>alert("Thank you ! Your Payment Successfully")</script>';
		}
	} else {
		echo ("recorded failed");
	}
}
if (isset($_POST['submit'])) {

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];
	$tel = $_POST['tel'];
	$notes = $_POST['notes'];
	$total = $_SESSION['total'];

	$order_query = "INSERT INTO orders(name,email,tel,total,notes)VALUES('$name','$email','$tel','$total','$notes');";
	//    "INSERT INTO order (name, email, tel, total, notes) VALUES ('$name','$email','$tel','$total')";

	mysqli_query($conn, $order_query);
	if ($order_query) {
		if (mysqli_affected_rows($conn) > 0) {
			//	echo("checkout successful");	
			echo '<script>alert("Thank you! Your Order is Successful")</script>';
			unset($_SESSION["shopping_cart"]);
			echo '<script>window.location="Pharmacy.php"</script>';
		}
	} else {
		echo 'recorded failed';
	}
}

?>

<html>

<head>
	<title>Order Delivery</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="delivery.css">
	<style>
		body {
			background-image: url("20386082.jpg");
			background-size: cover;
		}

		section {

			background-size: fit;
		}

		#frmdiv {

			max-width: 400px;
			margin: 0 auto;
		}

		form {
			width: 50%;
			margin: 20px auto;
			padding: 20px 20px 20px 30px;
			background-color: transparent;
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

		input,
		textarea {
			color: gray;
			margin: 0;
			padding: 12px 20px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
		}

		#reg {

			background-color: transparent;
			color: gray;
			margin: 0;
			padding: 12px 10px;
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
				<a id="active" href="#delivery">Order</a>
				<a href="checkout.php">Payments</a>
				<a href="Products.php">Products</a>
			</div>
		</div>
	</header>
	<section id="sideMenu">


		<!-- (B) ORDER FORM -->
		<form action="Delivery.php" id="orderform" method="post">
			<h1>Order Form</h1>
			<label for="name">Name:</label>
			<input type="text" name="name" id="name" value="<?php echo $_SESSION['name']; ?>" disabled>
			<label for="email">Email:</label>
			<input type="email" name="email" id="email" value="<?php echo $_SESSION['email']; ?>" disabled>
			<label for="tel">Telephone:</label>
			<input type="text" name="tel" id="tel" />
			<label for="total">Amount of bill:</label>
			<input type="text" name="total" id="total" value="<?php echo $_SESSION['total']; ?>" disabled>
			<div>
				<label for="notes">Additional Notes (if any):</label>
				<textarea name="notes"></textarea>
				<input type="submit" value="Place Order" name="submit" class="btn">
			</div>
		</form>

	</section>
	<?php



	/*include("CONNECTION.php");
if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email= $_POST['email'];
		$tel = $_POST['tel'];
		$notes = $_POST['notes'];
		$total = $_POST['total'];

		$order_query = /*"INSERT INTO order(name,email,tel,total,notes)VALUES('$name','$email','$tel','$total','$notes')";
		               "INSERT INTO `order`(`id`, `name`, `email`, `tel`, `total`, `notes`) VALUES ([NULL,'$name','$email','$tel','$total')";

		mysqli_query($conn,$order_query);
		if($order_query)
		{
			if(mysqli_affected_rows($conn)>0)
			{
			echo("<br>query successful");
			}
		}
		else
		{
		echo("<br>recorded faild");
		}

	}*/


	?>



</body>
<footer>
	<div id="footer">
		<div id="col1">
			<ul>
				<li>INFO</li><br>
				<li><a href="about1.html">ABOUT US</a></li>
			</ul>
		</div>
		<div id="col2">
			<ul id="socialmedia">
				<li>CONTACT US</li><br>
				<li id="fb"><a href="https://www.facebook.com/Raini-Pharmacy-114040280763758" target="black"><img src="download.png" height="50px" width="50px"></a>
			</ul>
		</div>
		<div id="col3">
			<ul id="shopinfo">
				<li>Raini Pharmacy</li><br>
				<li>Karapitiya,Galle</li>
				<li id="sh1"><strong>Email:</strong>RainiPharmacy@gmail.com</li>
				<li id="sh2"><strong>Hotline:</strong>+947590812345</li>
			</ul>
		</div>
		<div id="col4">
			<ul>
				<li>PAYMENTS</li><br>
				<li><img id="cards" src="creditcards-all-2020.jpg" alt="Accepted Credit Cards" height="100px" width="250px"></li>
			</ul>
		</div>
	</div>
	</div>
</footer>

</html>