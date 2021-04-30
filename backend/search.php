<?php
    $conn = new mysqli("localhost", "tinnt", "123", "DB");
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);    
    }
    if(isset($_POST["comic"])){
  		$output = "";
  		$title= $_POST['comic'];
          $exec = $conn->prepare("SELECT * FROM comics WHERE title = ?");
          $exec->bind_param("s",$title);
          $exec->execute();
          $result = $exec->get_result();  
  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>'.ucwords($row['title']).'</li>';
  			}
  		}else{
  			  $output .= '<li> Comic not Found</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
    }
?>
