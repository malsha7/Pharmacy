<!DOCTYPE html>
<?php session_start();?>

<html>

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="pharma.css">
	<style>
		#slider {
			height: 900px;
			width: 100%;
			animation-duration: 3s;
			animation-name: slidein;
		}

		@keyframes slidein {
			from {
				margin-left: 50%;
				width: 100%;
			}

			to {
				margin-left: -2%;
				
			}
		}

	</style>
</head>

<body>
	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#home">Home</a>
				<a href="indexm.php">Login</a>
				<a href="user.php">Registration</a>
				<a href="Viewproducts.php">Availables</a>
				<?php //echo $_SESSION['username']; ?>
			</div>
		</div>
	</header>
	
	<section id="sideMenu">
		<div id="slider">
			<figure>
				<img src="ezgif.com-gif-maker.gif" width="900px" height="500px"  />
			</figure>
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
					<li id="fb"><a href="" target="black"><img src="download.png" height="50px" width="50px"></a>
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
	</footer>
</body>

</html>
