<?php
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
    $conn = new mysqli("localhost", "tinnt", "123", "DB");
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);    
    }
    if(isset($_POST["comic"])){
  		$output = "";
  		$title= $_POST['comic'];                            
		// $exec = $conn->prepare("SELECT * FROM comics WHERE title LIKE '%?%'");
		// $exec->bind_param("s",$title);
		// $exec->execute();
		// $result = $exec->get_result();  
		$query = "SELECT * FROM comics WHERE title LIKE '%$title%'";
		$result = $conn->query($query);                                    

		$output .= '<ul class="list__storyBook--filter">';
  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>';
  				$output .= '	<a href="">';
				$output .= "		<img src='' class='storyBook--filter-img'>";
  				$output .= "			<div class='storyBook--filter-right'>";
				$output .= "			<div class='storyBook--filter-name'>".$row["title"]."</div>";
				$output .= "			<p class='storyBook--filter-content'>".$row["genre"]."</p>";
				$output .= '			<p class="storyBook--filter-chapter"></p>'; //cần thêm db truyện
				$output .= "		</div>";
				$output .= "	</a>";
				$output .= "</li>";
  			}
  		}else{
  			  $output .= '<li> Comic not Found</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
    }
?>