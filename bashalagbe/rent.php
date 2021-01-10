<html>
<head>
	<title>Rent</title>
	<link rel="stylesheet" href="rent-style.css">
	<link rel="stylesheet" href="index-style.css">
</head>
<body>

	<?php include("header.php"); ?>
    
    <div class="box">
<?php   
  		$rentid = $_GET["rentid"];
		include ("db-connect.php");
		
		$query = "SELECT * FROM rent WHERE rent_id='$rentid' ";
		$query_run = mysqli_query($connect, $query);
		$row = mysqli_fetch_array($query_run);
		
		echo	"<div class='img'>";
		echo		"<img src='images/" .$row['picture']. "'>";
		echo	"</div>";
		echo	"<div class='details'>";
		echo		"<h1>Rent Fee : " .$row['rent_fee']. "</h1><br>";
		echo		"<h3>Bedrooms : " .$row['rooms']. "</h3>";
		echo		"<h3>Kitchen : " .$row['kitchen']. "</h3>";
		echo		"<h3>Bathrooms : " .$row['bathroom']. "</h3>";
		echo		"<h3>Address : " .$row['address']. "</h3>";
		echo		"<br><a href='demo.html'><button id='btn'>Book This Flat</button></a>";
		echo	"</div>";
    	
 ?>  	
    </div>
</body>
</html>