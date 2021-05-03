<?php 
    require_once "config.php";
    session_start();
    $username= 'user1';
    $password= 'user1';
     $sql = "SELECT id from Users where username='".$username."' and password= '$password' ";
        echo "<br>";
        echo $username;
        echo "<br>";
        echo $password;
        echo "<br>";
    $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
        $count = $row['id'];
        echo $count;
        if($count > 0){
            $_SESSION['username'] = $username;
           header('Location: a.php',true,301);
        }else{
            header('Location: reject.php');
       
		}
        
?>