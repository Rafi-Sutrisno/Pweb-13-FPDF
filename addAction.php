<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
include("config.php");

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "images/".$fotobaru;

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	
	if(move_uploaded_file($tmp, $path)){
		echo"berahsil";
		// Check for empty fields
		if (empty($name) || empty($age) || empty($email) || empty($fotobaru)) {
			if (empty($name)) {
				echo "<font color='red'>Name field is empty.</font><br/>";
			}
			
			if (empty($age)) {
				echo "<font color='red'>Age field is empty.</font><br/>";
			}
			
			if (empty($email)) {
				echo "<font color='red'>Email field is empty.</font><br/>";
			}

			if (empty($path)) {
				echo "<font color='red'>photo field is empty.</font><br/>";
			}
			
			// Show link to the previous page
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		} else { 
			// If all the fields are filled (not empty) 

			// Insert data into database
			$result = mysqli_query($mysqli, "INSERT INTO siswa (`name`, `age`, `email`, `foto`) VALUES ('$name', '$age', '$email', '$fotobaru')");
			
			// Display success message
			echo "<p><font color='green'>Data added successfully!</p>";
			echo "<a href='index.php'>View Result</a>";
		}
	}else{
		echo"tidak berhasil";
	}
}
?>
</body>
</html>