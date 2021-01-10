<header>
        <div class="navbar">
            <a href="index.php">BashaLagbe.com</a>
<?php 
			session_start();
			if(isset($_SESSION['id']) > 0)
			{	
				$type = $_SESSION['type'];
				$type_v = (int)$type;
				if($type_v == 1)
				{
					echo	"<div class='navbar-right'>";
					echo		"<a href='notification.php'>Notification</a>";
					echo		"<a href='message.php'>Message</a>";
					echo		"<a href='profile.php'>Profile</a>";
					echo		"<a href='logout.php'>Logout</a>";
					echo	"</div>";
				}
				else
				{
					echo	"<div class='navbar-right'>";
					echo		"<a href='advertise.php'>Advertise</a>";
					echo		"<a href='notification.php'>Notification</a>";
					echo		"<a href='message.php'>Message</a>";
					echo		"<a href='profile.php'>Profile</a>";
					echo		"<a href='logout.php'>Logout</a>";
					echo	"</div>";
				}			
			}		
			else
			{
				echo	"<div class='navbar-right'>";
				echo		"<a href='login.php'>Login</a>";
				echo		"<a href='register.php'>Register</a>";
            	echo	"</div>";
			}			
            
?>

        </div>
</header>

