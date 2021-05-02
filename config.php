<?php
    $servername = "localhost";
    $database = "doctruyen";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // Attempt select query execution
?>
