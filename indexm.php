<?php session_start(); ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pharmacy";
$conn = mysqli_connect($servername, $username, $password, $dbname);
//echo("connection");
if (isset($_POST['Login'])) {
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$usertype = $_POST['usertype'];
	$query = "SELECT * FROM `userlogin` WHERE username='" . $user . "' and password='" . $pwd . "'and usertype='" . $usertype . "'";
	$result = mysqli_query($conn, $query);
	if ($result) {
		echo '<script> alert("You are logged in as ' . $usertype . ' ") </script>';
		// while ($row = mysqli_fetch_array($result)) {

		// }
		if ($usertype == "admin") {
?>
			<script>
				window.location.href = "admin.php"
			</script>
		<?php
		} else if ($usertype == "user") {
		?>
			<script>
				window.location.href = "accepts.php"
			</script>
			<?php

			echo $user;
			$_SESSION['username'] = $user;
			if (isset($_SESSION['username'])) {
				echo 'set';
			}
			?>
		<?php
		} else {
		?>
			<script>
				window.location.href = "Products.php"
			</script>
			<?php

			echo $user;
			$_SESSION['username'] = $user;
			if (isset($_SESSION['username'])) {
				echo 'set';
			}
			?>
<?php
		}
	} else {
		echo 'no result';
	}
}
?>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<style>
		#frmdiv {

			max-width: 760px;
			margin: 0 auto;
		}

		form {
			width: 50%;
			margin: 50px auto;
			padding: 40px 50px 40px 30px;
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
		select {
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
			color: gray;
			margin: 0;
			padding: 12px 20px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
		}

		#reg {

			color: gray;
			margin: 0;
			padding: 12px 10px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
			text-align: right;
		}
	</style>
</head>

<body>
	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#indexm">Login</a>
				<a href="user.php">Registration</a>
				<a href="Viewproducts.php">Availables</a>

			</div>
		</div>
	</header>
	<section id="sideMenu">
		<div id="frmdiv">
			<form name="indexm" action="indexm.php" method="POST"><br>
				<h1 align="center">LOGIN</h1>
				<label for="usertype">Select user type</label>
				<select name="usertype">
					<option value="">-SELECT-</option>
					<option value="admin">Admin</option>
					<option value="user">User</option>
					<option value="customer">Customer</option>
				</select>
				<label for="Username">Username</label>
				<input type="text" id="username" name="user_name" autocomplete="username" placeholder="Username">
				<label for="password">Password</label>
				<input type="password" id="password" name="user_password" autocomplete="password" placeholder="Password">
				<div id="reg">
					<button type="submit" name="Login" value="Login">Login</button>
					<a href="user.php" value="">Register</a>
				</div>
			</form>
		</div>
	</section>
	<footer>
		<div id="footer">
			<div id="col1">
				<ul>
					<li>INFO</li><br>
					<li><a href="about1.html">ABOUT US</a></li><br>
					<li><a href="prescript.php">UPLOAD YOUR PRESCRIPTION NOW!</a></li>
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