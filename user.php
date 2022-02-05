<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="design.css">

	<title>User Registration</title>
	<style>
		#frmdiv {
			background-color: rgba(0, 0, 0, 0.47);
			background-blend-mode: multiply;
			max-width: 680px;
			margin: 0 auto;
		}

		form {
			width: 50%;
			margin: 50px auto;
			padding: 40px 50px 40px 30px;
			background-color: transperent;
			border-radius: 8px;
			box-shadow: 0 8px 8px -5px rgba(0, 0, 0, 0.2);

		}

		label,
		h1 {
			font-weight: bold;
			margin-bottom: 4px;
			display: block;
			color: gold;
		}

		input,
		select {
			margin-bottom: 8px;
			padding: 0 10px;
			width: 90%;
			height: 30px;
			background-color: white;
			font-size: 0.75em;
			color: #444;
			border: none;
		}

		button {
			background-color: ;
			color: gray;
			margin: 0;
			padding: 12px 20px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
		}

		#reg {
			background-color: ;
			color: gray;
			margin: 0;
			padding: 12px 12px;
			font-size: 1em;
			font-weight: bold;
			border: none;
			border-radius: 6px;
			text-align: right;
		}

		}

	</style>
	<script>
		function validate() {
			var user = document.getElementById("user").value;
			var pwd = document.getElementById("pwd").value;
			var age = document.getElementById("age").value;
			var email = document.getElementById("email").value;
			var contact_number = document.getElementById("contact").value;
			var g - male = document.getElementById("male").checked;
			var g - female = document.getElementById("female").checked;
			var city = document.getElementById("city").value;
			var confirmation = document.getElementById("check").checked;
			var address = document.getElementById("address").value;
			if (user == "") {
				alert("Please enter your name");
				return false;
			}
			if (pwd == "") {
				alert("Please Enter your Password");
				return false;
			}
			if (pwd.length = 8) {
				alert("Your password should be 8 characters");
				return false;
			}
			if (age == "") {
				alert("Please Enter your age");
				return false;
			}
			if (email == "") {
				alert("Please Enter your email");
				return false;
			}
			if (contact_number == "") {
				alert("Please Enter Your Contact Number");
				return false;

			}
			if (isNaN(contact_number)) {
				alert("Please Enter valid contact_number");
				return false;
			}
			if (g - male != true && g - female!) {
				alert("Select your gender");
				return false;
			}
			if (city == 0) {
				alert("Select your city");
				return false;
			}
			if (address == "") {
				alert("Please Enter your address");
				return false;
			}
			if (confirmation == true) {
				alert("Confirm! your details");
				return false;
			}
		}

	</script>
</head>

<body>
	<header>
		<div id="topbar">
			<div id="topnav">
				<a id="active" href="#user">Registration</a>
				<a href="Pharmacy.php">Home</a>
				<a href="Viewproducts.php">Availables</a>
				<!--<a href="Products.php">Products</a>-->
			</div>
		</div>
	</header>


	<section id="sideMenu">
		<div id="frmdiv">
			<form name="Registration" action="user.php" method="POST"><br>
				<h1 align="center">User Registration</h1>
				<label for="Username">Username</label>
				<input type="text" id="user" name="user" autocomplete="user" placeholder="Username">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" autocomplete="password" placeholder="Password" required>

				<label for="Age">Age</label>
				<input type="Age" id="age" name="age" autocomplete="age" placeholder="Age">

				<label for="contact">Contact</label>
				<input type="number" id="contact" name="contact">
				<label for="Address">Address</label>
				<input type="Address" id="address" name="address" autocomplete="address" placeholder="Address">
				<label for="Email">Email</label>
				<input type="email" id="email" name="email" autocomplete="email" placeholder="Email" required>
				<div id="gender">
					<label for="Gender">Gender</label>
					<select name="gender">
						<option value="m">Male</option>
						<option value="f">Female</option>
					</select>
					<label for="city"> City</label>
					<select name="city">
						<option>-select-</option>
						<option>Galle</option>
						<option>Baddegama</option>
						<option>Matara</option>
					</select>
					<div id="confirm">
						<label for="Confirm">Confirm Details</label>
						<input type="checkbox" name="check" id="check" value="yes"><br>
						<div>
							<div id="reg">
								<button type="Submit" name="Submit" onclick="validate()">Submit</button>
								<button type="Reset" name="Reset">Reset</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>


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
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pharmacy";
try{
$conn= mysqli_connect($servername,$username,$password,$dbname);
//echo("successful connection");
}
catch(Exception $ex){
//if($conn->connect_error){
//	echo"faild".$conn->connect_error;
echo("connection faild");
}
if(isset($_POST['Submit'])){
	$user=$_POST['user'];
	$pwd=$_POST['password'];
	$age=$_POST['age'];
	$contact_number=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];	
	$register_query="INSERT INTO register(username,Password,Age,Contact,Email,Address,Gender,City)VALUES('$user','$pwd','$age','$contact_number','$email','$address','$gender','$city')";
	try{
		$register_result= mysqli_query($conn,$register_query);
		if($register_result){
		if(mysqli_affected_rows($conn)>0){
		//	echo("registration successful");		
           		
		}else{
			echo("registration faild");
		}
	    }
		?>
<script type="text/javascript">
	window.location.href = "Products.php"

</script><?php
	}catch(Exception $ex){
		echo("failed".$ex->getMessage());
	}
	
	
	}

 ?>
