<?php
// Include the database connection file
include("config.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="./Source/bootstrap.min.css">
	<link rel="stylesheet" href="./Source/style.css">
	<style>
		td{
			padding: 10px;
		}
	</style>
</head>

<body>
	<div class="container d-flex flex-column">
		<h2>Edit Data</h2>
		<p>
			<a href="index.php">
				<button class="btn btn-dark">Home</button>
			</a>
		</p>
		
		<form name="edit" method="post" action="editAction.php">
			<table border="0">
				<tr> 
					<td>Name</td>
					<td><input type="text" name="name" style="background-color: #B7CECE; border-radius:10px; padding:3px;" value="<?php echo $name; ?>"></td>
				</tr>
				<tr> 
					<td>Age</td>
					<td><input type="text" name="age" style="background-color: #B7CECE; border-radius:10px; padding:3px;" value="<?php echo $age; ?>"></td>
				</tr>
				<tr> 
					<td>Email</td>
					<td><input type="text" name="email" style="background-color: #B7CECE; border-radius:10px; padding:3px;" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
					<button class="btn btn-dark" type="submit" name="update">Update</button>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>