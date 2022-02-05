<?php 
session_start();

$connect = mysqli_connect("localhost", "root", "", "pharmacy");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="Products.php"</script>';
			}
		}
		
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Shopping Cart</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Products.css">

	<style>
		html {
			background-image: url(../Pharmacy/20386082.jpg);
			z-index: 10;
		}

	</style>
</head>

<body>
	<br />
	<div id="topbar">
		<div id="topnav">
			<a id="active" href="#products">Products</a>
			<a href="indexm.php">Login</a>
			<a href="user.php">Registration</a>
			<a href="Pharmacy.php">Home</a>
		</div>
	</div>
	<div class="topnav-left">
	  <a href="mycart.php" >MyCart</a>
	</div>
	<h3 align="center">Buy items</h3>
	<div class="container">
		<br />
		<br />
		<br />
		<br /><br />
		<?php
				$query = "SELECT * FROM products ORDER BY item_id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
		<div class="col-md-4">
			<form method="post" action="Products.php?action=add&id=<?php echo $row["item_id"]; ?>">
				<div style="border:1px solid #333; background-color:transparent; border-radius:5px; padding:16px;" align="center">
					<div class="card_img">
						<img src="images/<?php echo $row["item_image"]; ?>" class="img-responsive" height="50px" /><br />
					</div>

					<div class="card_details">
						<h4 class="text-info"><?php echo $row["item_name"]; ?></h4>
						<h4 class="text-danger">LKR <?php echo $row["item_price"]; ?></h4>
						<input type="number" name="quantity" value="1" class="form-control" />
						<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" />
						<input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>

				</div>
			</form>
		</div>
		<?php
					}
				}
			?>
		<div style="clear:both"></div>
		<br />
	<!--	<h3>Order Details</h3>
		<form action="sales.php" method="POST">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
						<th width="5%">Pay</th>


					</tr>

					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>LKR <?php echo $values["item_price"]; ?></td>
						<td>LKR<?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="Products.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
						<td><a href="checkout.php?action=delivery&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Payments</span></a></td>


					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
							$_SESSION['total']=$total;
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">LKR<?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>

				</table>
			</div>-->

		</form>
		<br />
	</div>
</body>

</html>
