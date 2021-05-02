<?php
// Include config file
require_once "/var/www/html/config.php";
session_start();

 
// Define variables and initialize with empty values
$username = $password ="";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    }
	 if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } else{
		$password = mysqli_real_escape_string($conn,$_POST['password']);
    }
	
	    if(empty($username_err) && empty($password_err)){
		
        $sql = "select id from Users where username='".$username."' and password= '$password' ";
        
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['id'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: index.php');
        }else{
            header('Location: reject.php');
       
		}     
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
