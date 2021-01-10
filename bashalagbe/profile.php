<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="profile-style.css">
    <link rel="stylesheet" href="index-style.css">
    <script src="https://kit.fontawesome.com/b9615dbca9.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php include("header.php"); ?>

        <div class="profile-header">
            <div class="user-detail">
                <div class="user-image">
                    <i class="far fa-user"></i>
                </div>
<?php 
	
	include "db-connect.php";
	
	$userid = $_SESSION['id'];
	
	$query = "SELECT name, email, mobile FROM user WHERE user_id = '$userid'";
	$query_run = mysqli_query($connect,$query);
	
	if(mysqli_num_rows($query_run) > 0)
	{
		$row = mysqli_fetch_assoc($query_run);
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
	 	echo "Name : " . $row['name'] . " <br> Email : " . $row['email'] .
		" <br> Number : 0" . $row['mobile'] . "<br>";
	}
			
?>
              
            </div>
        </div>

        <div class="tab-panel-main">

            <div class="tab">Rental History</div>
           <a href="testing/index.php"><button class="tab1">Update</button></a> 

            <table id="customers">
                <tr>
                    <th>City</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Rent Fee</th>
                    <th>Bedrooms</th>
                    <th>Kitchen</th>
                    <th>Bathrooms</th>
                    <th>Date</th>
                </tr>
<?php

	include "db-connect.php";
	
	$userid = $_SESSION['id'];
	
			
	$query = "SELECT * FROM rent WHERE user_id = '$userid'";
	$query_run = mysqli_query($connect, $query);
	
	if(mysqli_num_rows($query_run) > 0)
	{
		while($row = mysqli_fetch_assoc($query_run)){
			echo "<tr>";
            echo    "<th>" . $row['city'] . "</th>";
            echo    "<th>" . $row['area'] . "</th>";
            echo    "<th>" . $row['address'] . "</th>";
            echo    "<th>" . $row['rent_fee'] . "</th>";
            echo    "<th>" . $row['rooms'] . "</th>";
            echo    "<th>" . $row['kitchen'] . "</th>";
            echo    "<th>" . $row['bathroom'] . "</th>";
            echo    "<th>" . $row['date'] . "</th>";
            echo "</tr>";
		}
	}
	else {
		echo "0 results";
	}
	
?>

			</table>
		</div>
   
    </body>
</html>