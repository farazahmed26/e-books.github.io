<?php
include('../db_conn.php');

$cid=$_GET['id'];


$query= "delete from customers where c_id='".$cid."'";

$chk=mysqli_query($conn,$query);

if($chk)
{
	header('Location:tables.php');
}

?>