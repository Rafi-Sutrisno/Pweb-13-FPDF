<?php
    $databaseHost = 'localhost';
    $databaseName = 'crud_app';
    $databaseUsername = 'pmauser';
    $databasePassword = 'rafisutrisno';

    // Open a new connection to the MySQL server
    $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
    if (!$mysqli){
        die("Failed to connect to db: " . mysqli_connect_error());
    }
?>