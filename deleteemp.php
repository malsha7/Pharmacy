<?php

include("CONNECTION.php");

	mysqli_query($conn,"DELETE FROM employee WHERE emp_id='" . $_GET['id'] . "'");
    echo 'Employee deleted!';
		
		
		mysqli_close($conn);
		
		//header("location:admin.php");
		//exit;

header('location: Employees.php');






?>

