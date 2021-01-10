<?php
	session_start();
	
	$connection = mysqli_connect("localhost", "root", "", "bashalagbe");
	if(isset($_POST['insert']))
	{
		$target = "images/" .basename($_FILES['image']['name']);
		
		$img = $_FILES['image']['name'];
		$city = $_POST['city'];
		$area = $_POST['area'];
		$address = $_POST['address'];
		$fee = $_POST['fee'];
		$room = $_POST['room'];
		$kitchen = $_POST['kitchen'];
		$bathroom = $_POST['bathroom'];
		$userid = $_SESSION['id'];
		
		$query = "INSERT INTO rent(city, area, address, rent_fee, picture, rooms, kitchen, 
		bathroom, user_id) VALUES ('$city', '$area', '$address', '$fee','$img', '$room', 
		'$kitchen', '$bathroom', '$userid')";
		$query_run = mysqli_query($connection, $query);
		//move_uploaded_file($_FILES['image']['tmp_image'], $target);
		
		if($query_run === true)
		{
			echo ' <script type="text/javascript"> alert("Data Saved") </script> ';
		}
		else
		{
			echo ' <script type="text/javascript"> alert("Error") </script> ';
		}
	}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Addvertise</title>
    <link rel="stylesheet" href="ad-style.css">
</head>

<body>
    <!-- 
    navigation bar section -->

    <div class="navbar">
        <a href="index.php">BashaLagbe.com</a>
        <div class="navbar-right">
            <a href="advertise.php" class="active">Advertise</a>
            <a href="notification.php">Notification</a>
            <a href="message.php">Message</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- addvertise section -->
    <div class="container">
        <h1>Post an Ad</h1>

        <form action="advertise.php" method="post" enctype="multipart/form-data">

            <!-- City -->
            <div class="row">
                <div class="col-25">
                    <label for="city">City</label>
                </div>
                <div class="col-75">
                 	 <select id="city" name="city" required>
						  <option value="">---- SELECT CITY ----</option>
						  <option value="Dhaka">Dhaka</option>
						  <option value="Gazipur">Gazipur</option>
						  <option value="Narayangonj">Narayangonj</option>
						  <option value="Savar">Savar</option>
            		</select>
                </div>
            </div>
            <!-- Area-->
            <div class="row">
                <div class="col-25">
                    <label for="area">Area</label>
                </div>
                <div class="col-75">
                    <select id="area" name="area" required>
						  <option value="">------ SELECT AREA ------</option>
						  <option value="">------ Dhaka ------</option>
						  <option value="Mirpur">Mirpur</option>
						  <option value="Uttara">Uttara</option>
						  <option value="Gulshan">Gulshan</option>
						  <option value="Mohakhali">Mohakhali</option>
						  <option value="">------ Gazipur ------</option>
						  <option value="Joydebpur">Joydebpur</option>
						  <option value="Kapashia">Kapashia</option>
						  <option value="Rothkhola">Rothkhola</option>
						  <option value="Salna">Salna</option>
          				  <option value="">------ Narayangonj ------</option>
						  <option value="Jamtola">Jamtola</option>
						  <option value="Amlapara">Amlapara</option>
						  <option value="Chanmari">Chanmari</option>
						  <option value="Paikpara">Paikpara</option>
          				  <option value="">------ Savar ------</option>
						  <option value="Gerua">Gerua</option>
						  <option value="Jamshing">Jamshing</option>
						  <option value="Vatpara">Vatpara</option>
						  <option value="Jaleshwar">Jaleshwar</option>
           			</select>
                </div>
            </div>
            <!-- Address -->
            <div class="row">
                <div class="col-25">
                    <label for="address">Full Address</label>
                </div>
                <div class="col-75">
                    <input type="text" id="address" name="address" placeholder="Address..." required>
                </div>
            </div>

            <!-- Rent Fee -->
            <div class="row">
                <div class="col-25">
                    <label for="fee">Rent Fee</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fee" name="fee" placeholder="Rent Fee..." required>
                </div>
            </div>
            <!-- Rooms -->
            <div class="row">
                <div class="col-25">
                    <label for="fee">Bedrooms</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fee" name="room" placeholder="Enter Number of Bedrooms..." required>
                </div>
            </div>
            <!-- Kitchen -->
            <div class="row">
                <div class="col-25">
                    <label for="fee">Kitchen</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fee" name="kitchen" placeholder="Enter Number of 
                    Kitchens..." required>
                </div>
            </div>
            <!-- Bathroom -->
            <div class="row">
                <div class="col-25">
                    <label for="fee">Bathrooms</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fee" name="bathroom" placeholder="Enter Number of Bathrooms..." required>
                </div>
            </div>
            <!-- upload -->
            <div class="row">
                <div class="col-25">
                    <label for="address">Upload Pictures</label>
                </div>
                <div class="col-75">
                    <input type="file" id="myFile" name="image" required>
                </div>
            </div>
            
            
            <div class="row">
                <input type="submit" value="Post" name="insert">
            </div>
        </form>
    </div>
    
</body>

</html>