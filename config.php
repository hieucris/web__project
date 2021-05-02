<?php
    $servername = "192.168.14.155";
    $database = "phpmyadmin";
    $username = "phpmyadmin";
    $password = "root";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
    // Attempt select query execution
?>
