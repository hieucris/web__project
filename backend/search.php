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
  			  $output .= '<a> Comic not Found</a>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
    }
?>
