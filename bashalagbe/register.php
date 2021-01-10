<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="navbar">
            <a href="index.php">BashaLagbe.com</a>
			<div class="navbar-right">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
            
        </div>
    </header>

    <div class="testbox">
        <h1>Registration</h1>

        <form action="register.php" method="post">
            <label id="icon" for="name"><i class="icon-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" required/>

            <label id="icon" for="name"><i class="icon-envelope "></i></label>
            <input type="text" name="email" id="name" placeholder="Email" required/>

            <label id="icon" for="name"><i class="icon-phone "></i></label>
            <input type="text" name="number" id="name" placeholder="Phone" required/>

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required/>
            <label for="" id="acc">Account Type : </label>
            <select name="account" required>
            	<option value=""> --Select--</option>
            	<option value="0"> Landlord</option>
            	<option value="1"> Renter</option>
            	
            </select>

            <p>By clicking Register, you agree on our <a href="#">Terms and Conditions.</a>.</p>
            <input type="submit" name="insert" value="Register" class="button">
        </form>
    </div>
    
        
<?php
	
	$connection = mysqli_connect("localhost", "root", "", "bashalagbe");
	if(isset($_POST['insert']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['number'];
		$password = $_POST['password'];
		$usertype = $_POST['account'];
		
		$query = "INSERT INTO user (name, email, password, mobile, user_type) 
		VALUES ('$name', '$email', '$password', '$mobile', '$usertype')";
		$query_run = mysqli_query($connection, $query);
		
		if($query_run === true)
		{
			echo ' <script type="text/javascript"> alert("Account Created. Please Login.") </script> ';
		}
		else
		{
			echo ' <script type="text/javascript"> alert("Error") </script> ';
		}
	}

?>

</body>

</html>









