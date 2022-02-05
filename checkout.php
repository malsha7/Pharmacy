<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="checkout.css">
	<style>
		html {
			background-image: url(../Pharmacy/20386082.jpg);
			z-index: 10;
			height: 100%;

			background-position: center;
			background-repeat: no-repeat;

		}
	</style>
</head>

<body>
	<div class="row">
		<div class="col-75">
			<div class="container">
				<form method="post" action="Delivery.php">

					<div class="row">
						<div class="col-50">
							<h3>Billing Details</h3>
							<br />
							<label for="fname"><i class="fa fa-user"></i> Full Name</label>
							<input type="text" id="fname" name="firstname">
							<label for="email"><i class="fa fa-envelope"></i> Email</label>
							<input type="text" id="email" name="email">
							<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
							<input type="text" id="adr" name="address">
							<label for="city"><i class="fa fa-institution"></i> City</label>
							<input type="text" id="city" name="city">


							<div class="row">
								<div class="col-50">
									<label for="state">District</label>
									<input type="text" id="district" name="district">
								</div>
								<div class="col-50">
									<label for=postalcode>Postal code</label>
									<input type="text" id="postal code" name="postal code">
								</div>
							</div>
						</div>

						<div class="col-50">
							<h3>Payment</h3>
							<label for="fname">Accepted Cards</label>
							<div class="icon-container">
								<img id="cards" src="creditcards-all-2020.jpg" alt="Accepted Credit Cards" height="40px" width="150px">
							</div>
							<label for="cname">Name on Card</label>
							<input type="text" id="cname" name="cardname">
							<label for="ccnum"> Card number</label>
							<input type="tel" id="ccnum" name="cardnumber" maxlength="10">
							<label for="expmonth">Exp Month</label>
							<input type="text" id="expmonth" name="expmonth">

							<div class="row">
								<div class="col-50">
									<label for="expyear">Exp Year</label>
									<input type="text" id="expyear" name="expyear">
								</div>
							</div>
						</div>

					</div>
					<label>
						<input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
					</label>
					<input type="submit" value="Continue to checkout" name="checkout" class="btn">
				</form>
			</div>
		</div>
	</div>
</body>
<?php



/* echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
	
	

	// (D) SEND ORDER VIA EMAIL
	if ($result=="") {
	  $to = "Delivery.php"; // CHANGE TO YOUR OWN!
	  $subject = "ORDER RECEIVED";
	  $message = "";
	  foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
	  if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
	}
	*/
?>

</html>