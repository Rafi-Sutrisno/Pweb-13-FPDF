<?php
// Include the database connection file
include("config.php");

// Fetch data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC");
?>

<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Homepage</title>
	<link rel="stylesheet" href="./Source/bootstrap.min.css">
	<link rel="stylesheet" href="./Source/style.css">
</head>

<body>
	<div class="container d-flex flex-column">
		<h2 class="" style="color: #1C0F13;">The Bombardment</h2>

		<p>
			<a href="add.php">
				<button class="btn btn-dark" style="">Add New Data</button>
			</a>
		</p>
		<table width='100%' border=0 style="background-color: #B7CECE; border: none; border-radius: 25px;" class="text-center overflow-hidden">
			<tr bgcolor='#6E7E85' class="">
				<td><strong>Photo</strong></td>
				<td><strong>Name</strong></td>
				<td><strong>Age</strong></td>
				<td><strong>Email</strong></td>
				<td><strong>Action</strong></td>
			</tr>
			<?php
			// Fetch the next row of a result set as an associative array
			while ($res = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td><img src='images/".$res['foto']."' width='100' height='100'></td>";
				echo "<td>".$res['name']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['email']."</td>";	
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | 
				<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			}
			?>
		</table>
	</div>
	
</body>
</html>
