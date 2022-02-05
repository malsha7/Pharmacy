<?php
include("CONNECTION.php");
$emp_id = $_GET['id'];
if (isset($_POST["Update"])) {

  echo "ID: $id ";
  $emp_name = $_POST['emp_name'];
  $emp_position = $_POST['emp_position'];

  $update = ("UPDATE employee SET emp_name = '$emp_name', emp_position = '$emp_position' WHERE emp_id = '$emp_id'");
  if (mysqli_query($conn, $update)) {
    echo " Update successful.";
  } else {
    echo " not inserted!.";
  }

  header("location:Employees.php");
}

$result = mysqli_query($conn, "SELECT * FROM `employee`  WHERE emp_id = '$emp_id'");
$row = mysqli_fetch_array($result);

?>


<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewreport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Products.css">
  <title>Update Employee</title>
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

    label,
    h1 {
      font-weight: bold;
      margin-bottom: 4px;
      display: block;
      color: gray;
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

    button {
      background-color: transperent;
      color: gray;
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
        <a id="active" href="#updateemp">Update Employees</a>
        <a href="Employees.php">Employee's</a>
        <a href="addemp.php">Add Employees</a>
      </div>
    </div>
  </header>
  <section id="sideMenu">
    <div id="frmdiv">
      <h1 align="center"> Update Employee Details </h1>
      <form method="POST" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" enctype="multipart/form-data">
        <table align="center">
          <!--<tr>
				<td>Employee Id:</td>
				<td><input type = "text" name = "emp_id" id = "emp_id"></td></tr>
			  <tr>-->
          <td>Employee Name:</td>
          <td><input type="text" name="emp_name" id="emp_name" value="<?php echo $row["emp_name"]; ?>"></td>
          <tr>
            <td>Employee Position:</td>
            <td><input type="text" name="emp_position" id="emp_position" value="<?php echo $row["emp_position"]; ?>"></td>
          </tr>
          <tr>
            <td><input type="submit" value="Update" name="Update"></td>
          </tr><br>
        </table>
      </form>
    </div>
  </section>
</body>

</html>