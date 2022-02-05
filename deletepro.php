<?php
	
include("CONNECTION.php");

	mysqli_query($conn,"DELETE FROM products WHERE item_id='" . $_GET['id'] . "'");
    echo 'Product deleted!';
		
		
		mysqli_close($conn);
		
		//header("location:admin.php");
		//exit;

header('location: admin.php');

?>
