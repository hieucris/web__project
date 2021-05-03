<?php
    $conn = new mysqli("localhost", "root", "", "doctruyen");
    if($conn->connect_error){
        die("Connection Failed: ".$conn->connect_error);    
    }
    
    if(isset($_POST["comic"])){
  		$output = "";
  		$name = $_POST['comic'];                            
		// $query = "SELECT * FROM stories WHERE name LIKE '%$name%'";
		$query = "SELECT stories.name, categories.name, stories.id, stories.img FROM categories, stories WHERE stories.name LIKE '%$name%' AND stories.category_id = categories.id";
		$result = $conn->query($query);                                    

		$output .= '<ul class="list__storyBook--filter">';
  		if ($result->num_rows > 0) {
  			while ($row = $result->fetch_array()) {
  				$output .= '<li>';
  				$output .= '	<a href="storyBook.php?id='.$row["2"].'">';
				$output .= "		<img src='".$row["img"]."' class='storyBook--filter-img'>";
  				$output .= "			<div class='storyBook--filter-right'>";
				$output .= "			<div class='storyBook--filter-name'>".$row["0"]."</div>";
				$output .= "			<p class='storyBook--filter-content'>".$row["1"]."</p>";
				$output .= "		</div>";
				$output .= "	</a>";
				$output .= "</li>";
  			}
  		}else{
  			  $output .= '<li class="emty">Không tìm thấy truyện</li>';
  		}
  		
	  	$output .= '</ul>';
	  	echo $output;
    }
?>