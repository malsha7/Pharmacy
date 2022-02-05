<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewreport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Products.css">
	<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>

	<title>Upload Prescription</title>
	<style>
	#frmdiv {
 
  max-width: 760px;
  margin: 0 auto;
}

form {
  width: 50%;
  margin: 50px auto;
  padding: 40px 50px 40px 30px;
  background-color:rgba(0, 0, 0, 0.51);
  border-radius: 6px;
  box-shadow: 0 8px 8px -5px rgba(0, 0, 0, 0.2);
  
}

label,td{
  font-weight: bold;
  margin-bottom: 4px;
  display: block;
  color:gold;
}

input ,select{
  margin-bottom: 24px;
  padding: 0 10px;
  width: 100%;
  height: 40px;
  background-color: white;
  font-size: 1em;
  color: gray;
  border: none;
}

button{
  background-color: transparent;
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
				<a id="active" href="#prescript">Upload</a>
				<a href="Pharmacy.php">Home</a>
				
			</div>
		</div>
	</header>
	<section id="sideMenu">
		<div id="frmdiv">
		
			<h1 align="center"> Upload Your Prescript</h1>
			<p>Raini Online Pharmacy is the most trusted online pharmacy with home delivery services in Sri Lanka Southern Province (Galle & Matara). Now you can upload your prescriptions & get your medication delivered straight .</p>
			<form name="Add" action="prescript.php" method="POST" enctype="multipart/form-data">
			<div align="center">
				<table>
					<tr>
						<td>Your Name:</td>
						<td><input type="text" name="name" id="name"></td>
					</tr>
					<tr>
						<td>Your Contact No.:</td>
						<td><input type="text" name="contact" id="contact"></td>
					</tr>
					<tr>
						<td>Patient Address:</td>
						<td><input type="text" name="address" id="address"></td>
					</tr>
					<tr> <td><label for="deliver">Delivery Location</label></td><td><select name = "deliver">
					<option value="">-Select-</option>
                       <option value="Galle">Galle</option>
                       <option value="Matara">Matara</option></select></td></tr>
					<tr>
					<tr>
						<td>Patient Name:</td>
						<td><input type="text" name="patient" id="patient"></td>
					</tr>
					<tr>
						<td>Patient Age:</td>
						<td><input type="text" name="age" id="age"></td>
					</tr>
					<tr> <td><label for="Gender">Gender</label></td><td><select name = "gender">
					<option value="">-Select-</option>
                       <option value="m">Male</option>
                       <option value="f">Female</option></select></td></tr>
					<tr>
						<td>Do You Have Allergy(No/Yes,if what?):</td>					
						<td><input type="text" name="allergy" id="allergy"></td>
					</tr>
					<tr>
						<td>Your Doctor's Prescription:</td>
						<td><input id="files" type="file" name="file" required>
							
						</td>
						<td><input type="hidden" name="image" value="<img src=images/<?php echo '.$row["image"];' ?>" alt="" /></td>
					</tr>
					<tr>
					
					
						<td><input type="submit" value="Send" name="add"></td>
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
    $name =$_POST['name'];
	$contact =$_POST['contact'];
	$address =$_POST['address'];
	$deliver=$_POST['deliver'];
	$patient=$_POST['patient'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$allergy=$_POST['allergy'];
	$date = date("Y-m-d H:i:s");
    
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
    // Upload file to server
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $query = "INSERT INTO prescript(name,contact,address,deliver,item_image,patient,age,gender,allergy,date)VALUES('$name','$contact','$address','$deliver','$fileName','$patient','$age','$gender','$allergy','$date')";
            mysqli_query($conn, $query);
            if($query){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                $_SESSION['success']  = "user successfully created!!";
				 //echo '<script>alert("Thank you ! We accept your Prescription")</script>';
				 echo '("Thank you ! We accept your Prescription")';	
			     //header('location: Pharmacy.php');
				 header('location: orders.php');
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
