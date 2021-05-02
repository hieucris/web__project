<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <?php
	$link=mysqli_connect("localhost","root","","doctruyen") or die("Cannot connect to the localhost");
	//mysqli_select_db("dienthoai",$link) or die("Cannot connect to the database");
	if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
	mysqli_query($link,"SET NAMES 'UTF8'");
	
?>
</body>
</html>
