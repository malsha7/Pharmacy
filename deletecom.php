<?php

include("CONNECTION.php");

	mysqli_query($conn,"DELETE FROM company WHERE com_id='" . $_GET['id'] . "'");
    echo 'Company deleted!';
		
		
		mysqli_close($conn);
		
		//header("location:admin.php");
		//exit;

header('location: Companies.php');

?>

