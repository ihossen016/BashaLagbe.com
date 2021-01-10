<html>
<head>
    <title>BashaLagbe.com</title>
    <!--Font Awesome Link -->
    <script src="https://kit.fontawesome.com/b9615dbca9.js" crossorigin="anonymous"></script>
    
    <!--Custom Style -->
    <link rel="stylesheet" href="index-style.css">
    
</head>
<body>

	<?php include("header.php"); ?>
   
    <div class="banar">
    	<h1>Find Your Suitable Home Here!</h1>
    </div>
    
    <div class="extra">
    	<h2 id="ct">Our Coverage Areas</h2>
    	<a href="dhaka.php"><button id="ex">Dhaka</button></a>
    	<a href="gazipur.php"><button id="ex">Gazipur</button></a>
    	<a href="narayangonj.php"><button id="ex">Narayangonj</button></a>
    	<a href="savar.php"><button id="ex">Savar</button></a>
    </div>
    
    <!--Page Wrapper-->
    
    <div class="page-wrapper">
        
    <!--Content-->
        
        <?php
		
       echo "<div class='content clearfix'>";
          
    //--Main Content--//
           
        echo    "<div class='main-content'>";
        echo    "<h1 class='recent-post-title'>Trending Today</h1>";
               
				
			$connect = mysqli_connect("localhost", "root", "", "bashalagbe");
            
			$query = "SELECT * FROM rent ORDER BY rent_id DESC";
			$query_run = mysqli_query($connect, $query);
			$i = 0;
			while ($row = mysqli_fetch_array($query_run))
			{
				$postid = $row['rent_id'];
				if ($i == 3) 
				{
          			break;
        		}
				else
				{
				echo "<div class='post'>";
				echo   "<img src='images/" .$row['picture']. "' class='post-image'>";
				echo	"<div class='post-preview'>";
				echo		"<h2><a href='rent.php?rentid= $postid'>" .$row['rent_fee']. "</a>
				</h2>";
				echo		"<i class='far fa-user'> " .$row['city']. "</i>";
				echo    '&nbsp';
				echo		" <i class='far fa-calendar-alt'> " .$row['date']. "</i>";
				echo		"<p class='preview-text'>"
								.$row['address'].
							"</p>";
				echo		"<a href='rent.php?rentid= $postid' class='btn read-more'>View 
				Details</a>";
				echo	"</div>";
                echo "</div>";
				}
				$i++;
			}              
            
    //--Main Content--//
  
    echo "</div>";

    //--Content-->                    
                                    
   echo "</div>";
    
    ?>
    
    
    <!--Content-->
        
        <?php
		
       echo "<div class='content clearfix'>";
          
    //--Main Content--//
           
        echo    "<div class='main-content'>";
        echo    "<h1 class='recent-post-title'>All in One</h1>";
               
				
			$connect = mysqli_connect("localhost", "root", "", "bashalagbe");
            
			$query = "SELECT * FROM rent ORDER BY rent_id ASC";
			$query_run = mysqli_query($connect, $query);
			$i = 0;
			while ($row = mysqli_fetch_array($query_run))
			{
				$postid = $row['rent_id'];
				if ($i == 5) 
				{
          			break;
        		}
				else
				{
				echo "<div class='post'>";
				echo   "<img src='images/" .$row['picture']. "' class='post-image'>";
				echo	"<div class='post-preview'>";
				echo		"<h2><a href='rent.php?rentid= $postid'>" .$row['rent_fee']. "</a>
							</h2>";
				echo		"<i class='far fa-user'> " .$row['city']. "</i>";
				echo    '&nbsp';
				echo		" <i class='far fa-calendar-alt'> " .$row['date']. "</i>";
				echo		"<p class='preview-text'>"
								.$row['address']. "</p>";
				echo		"<a href='rent.php?rentid= $postid' class='btn read-more'>View 
				Details</a>";
				echo	"</div>";
                echo "</div>";
				}
				$i++;
			}              
            
    //--Main Content--//
    

   	echo		"<a href='allinone.php' class='btn read-more'>See More</a>";
    echo "</div>";

    //--Content-->                    
                                    
   echo "</div>";
    
    ?>
     
</div>
    <!-- //Page Wrapper-->
    
    
    <!-- Footer -->
    <div class="footer">
        <div class="footer-content">
           
            <div class="footer-section about">
            	<h1 class="logo-text" style="color: #F05053">BashaLagbe.com</h1>
            	<p>
            		BashaLagbe.com is a website anyone can find the best home they need.
					We help people to find suitable home according to their needs.
            	</p>
            	<div class="contact">
            		<span><i class="fas fa-phone"></i>&nbsp; 01623920049</span>
            		<span><i class="far fa-envelope"></i>&nbsp; contact@bashalagbe.com</span>
            	</div>
            	<div class="socials">
            		<a href=""><i class="fab fa-facebook"></i></a>
            		<a href=""><i class="fab fa-twitter-square"></i></a>
            		<a href=""><i class="fab fa-instagram-square"></i></a>
            		<a href=""><i class="fab fa-linkedin"></i></a>
            	</div>
            </div>

        </div>
        <div class="footer-bottom">
            &copy; BashaLagbe.com | Developed by Md. Zahid Hasan and MD. Ismail Hossen 
        </div>
    </div>

    <!-- //Footer -->

</body>
</html>
		