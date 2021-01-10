<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
</head>

<body>

    <header>
        <div class="navbar">
            <a href="#home">BashaLagbe.com</a>
			<div class="navbar-right">
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            </div>
             
        </div>
    </header>

    <div class="testbox">
        <h1>Log In</h1>

        <form action="login-fun.php" method="post">

            <label id="icon" for="name"><i class="icon-envelope "></i></label>
            <input type="text" name="email" id="name" placeholder="Email" required/>

            <label id="icon" for="name"><i class="icon-shield"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" required/>

            <input type="submit" name="insert" value="Login" class="button">

        </form>

        <p class="log">Don't have an account! Register <a href="register.php">Here</a></p>
    </div>





</body>

</html>