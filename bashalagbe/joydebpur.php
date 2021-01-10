<html>
<head>
	<title>Joydebpur</title>
	<link rel="stylesheet" href="../index-style.css">
</head>
<body>

	<?php include("header.php"); ?>

	<div class="page-wrapper">
        
    <!--Content-->
        
        <?php
		
       echo "<div class='content clearfix'>";
          
    //--Main Content--//
           
        echo    "<div class='main-content'>";
        echo    "<h1 class='recent-post-title'>Houses in Joydebpur</h1>";
               
				
			$connect = mysqli_connect("localhost", "root", "", "bashalagbe");
            
			$query = "SELECT city, rent_fee, picture, description, user_id, date FROM rent
			WHERE area='joydebpur'";
			$query_run = mysqli_query($connect, $query);
			
			while ($row = mysqli_fetch_array($query_run))
			{	
				echo "<div class='post'>";
				echo   "<img src='../images/" .$row['picture']. "' class='post-image'>";
				echo	"<div class='post-preview'>";
				echo		"<h2><a href='#'>" .$row['rent_fee']. "</a></h2>";
				echo		"<i class='far fa-user'> " .$row['city']. "</i>";
				echo    '&nbsp';
				echo		" <i class='far fa-calendar-alt'> " .$row['date']. "</i>";
				echo		"<p class='preview-text'>"
								.$row['description'].
							"</p>";
				//echo		"<a href='#' class='btn read-more'>" "Know More" "</a>";
				echo	"</div>";
                echo "</div>";
			}              
            
    //--Main Content--//
    

  
    echo "</div>";

    //--Content-->                    
                                    
   echo "</div>";
    
    ?>
     
</div>
    <!-- //Page Wrapper-->
</body>
</html>