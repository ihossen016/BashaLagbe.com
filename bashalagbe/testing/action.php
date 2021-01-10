<?php

//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':name'  => $_POST['name'],
  ':month'  => $_POST['month'],
  ':payment'   => $_POST['payment'],
  ':bill'   => $_POST['bill'],
  ':total'   => $_POST['total'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE tbl_sample 
 SET name = :name, 
 month = :month, 
 payment = :payment 
 bill = :bill 
 total = :total 
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM tbl_sample 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>