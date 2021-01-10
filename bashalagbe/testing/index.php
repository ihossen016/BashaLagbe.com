<html>
 <head>
  <title>Profile - Update</title>
  <link rel="stylesheet" href="../index-style.css">
  <link rel="stylesheet" href="../profile-style.css">
  
  <script src="https://kit.fontawesome.com/b9615dbca9.js" crossorigin="anonymous"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>
  
 </head>
 <body>
 	<header>
        <div class="navbar">
            <a href="../index.php">BashaLagbe.com</a>
            <?php session_start(); ?>
            <?php if(isset($_SESSION['id']) > 0): ?>
			<div class="navbar-right">
                <a href="../advertise.php">Advertise</a>
                <a href="../notification.php">Notification</a>
                <a href="../message.php">Message</a>
                <a href="../profile.php">Profile</a>
                <a href="../logout.php">Logout</a>
            </div>
            <?php else: ?>
			<div class="navbar-right">
                <a href="../login.php">Login</a>
                <a href="../register.php">Register</a>
            </div>
            <?php endif; ?> 
        </div>
    </header>
  <div class="profile-header">
            <div class="user-detail">
                <div class="user-image">
                    <i class="far fa-user"></i>
                </div>
<?php 
	include "../db-connect.php";
	
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
		" <br> Number : " . $row['mobile'] . "<br>";
	}
			
?>
                
            </div>
        </div>  
 
  <div class="container">
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">Payment History</div>
    <div class="panel-body">
     <div class="table-responsive">
      <table id="sample_data" class="table table-bordered table-striped">
       <thead>
        <tr>
         <th>ID</th> 
         <th>Name</th>
         <th>Month</th>
         <th>Payment</th>
         <th>Utility Bill</th>
         <th>Total Bill</th> 
        </tr>
       </thead>
       <tbody></tbody>
      </table>
     </div>
    </div>
   </div>
  </div>
  <br />
  <br />
 </body>
</html>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 var dataTable = $('#sample_data').DataTable({
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
   url:"fetch.php",
   type:"POST"
  }
 });

 $('#sample_data').on('draw.dt', function(){
  $('#sample_data').Tabledit({
   url:'action.php',
   dataType:'json',
   columns:{
    identifier : [0, 'id'],
    editable:[[1, 'name'], [2, 'month'], [3, 'payment', '{"1":"Due","2":"Paid"}'], 
			  [4, 'bill'], [5, 'total']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.id).remove();
     $('#sample_data').DataTable().ajax.reload();
    }
   }
  });
 });
  
}); 
</script>