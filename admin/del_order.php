<?php
include('../db_conn.php');

$oid=$_GET['oid'];


$query= "delete from orders where o_id='".$oid."'";

$chk=mysqli_query($conn,$query);

if($chk)
{
	header('Location:tables.php');
}

?>