<?php
    // Include the database connection file
    include("config.php");

    // Get id parameter value from URL
    $id = $_GET['id'];

    $result = mysqli_query($mysqli, "DELETE FROM siswa WHERE id = $id");

    // Redirect to the main display page (index.php in our case)
    header("Location:index.php");
?>