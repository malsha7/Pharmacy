<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Products.css">
	<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>

	<title>Add Product</title>
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
				<a id="active" href="#addpro">Add Products</a>
				<a href="Products.php">Products</a>
				<a href="updatepro.php">Update Products</a>
			</div>
		</div>
	</header>
	<section id="sideMenu">
		<div id="frmdiv">
		
			<h1 align="center"> Add Product</h1>
			<form name="Add" action="addpro.php" method="POST" enctype="multipart/form-data">
			<div align="center">
				<table>
					<tr>
						<td>Product ID :</td>
						<td><input type="text" name="item_id" id="item_id"></td>
					</tr>
					<tr>
						<td>Product Name:</td>
						<td><input type="text" name="item_name" id="item_name"></td>
					</tr>
					<tr>
						<td>Product Price:</td>
						<td><input type="text" name="item_price" id="item_price"></td>
					</tr>
					<tr>
						<td>Product image:</td>
						<td><input id="files" type="file" name="file" required>
							
						</td>
						<td><input type="hidden" name="image" value="<img src=images/<?php echo '.$row["image"];' ?>" alt="" /></td>
					</tr>
					<tr>
					
					
						<td><input type="submit" value="Add" name="add"></td>
					</tr>
				</table></div>
			</form>
		</div>
	</section>
</body>

</html>
<!--
<?php 
include("CONNECTION.php");
							   
/////////////////////////////////////////////////////////////////////////////////// File upload path
$targetDir = "images/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["add"]) && !empty($_FILES["file"]["name"]))
{
    $item_id =$_POST['item_id'];
	$item_name=$_POST['item_name'];
	$item_price=$_POST['item_price'];
    
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $query = "INSERT INTO products(item_id,item_name,item_image,item_price)VALUES('$item_id','$item_name','$fileName','$item_price')";
            mysqli_query($conn, $query);
            if($query){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                $_SESSION['success']  = "user successfully created!!";
				
			     header('location: admin.php');
            }
            else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

			
$mysqli -> close();

?>-->
