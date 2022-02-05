<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name ="viewreport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Products.css">
<title>Add Company</title>
<style>

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

label,h1 {
  font-weight: bold;
  margin-bottom: 4px;
  display: block;
  color:gray;
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

button{
  background-color: transperent;
  color:gray;
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
		 <a id="active" href="#addcom">Add Company's </a>
		 <a href="Companies.php">Company's</a>
		<a href="updatecom.php">Update Company</a>
		 </div>
	</header>
<section id="sideMenu"><div id="frmdiv">
<h1 align = "center"> Add Company Details </h1>
<form name = "Add" action="addcom.php" method = "POST" >
<table align="center">
<tr>
<td>Company ID :</td>
<td><input type = "text" name = "com_id" id = "com_id"></td></tr>
<tr>
<td>Company Name:</td>
<td><input type = "text" name = "com_name" id = "com_name"></td></tr>
<tr>
<td><input type="submit" value="Add" name="add"></td></tr><br>
</table>
</form>
</body>
</html>


<?php 
$db = mysqli_connect("localhost","root","","pharmacy");

if(isset($_POST['add'])){
	
	$com_id = $_POST['com_id'];
	$com_name = $_POST['com_name'];
	
	$qry = "INSERT INTO company VALUES('$com_id','$com_name')";
	if(mysqli_query($db,$qry)){
		
		echo'<script>alert("Add Successfully.");</script>';
		header('location:Companies.php');
	}else{
		
		echo mysqli_error($db);
	}
	
}


?>



       	 