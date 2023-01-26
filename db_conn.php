<?php
$hostname= "127.0.0.1" ;
$username = "root";
$password = "";
$database = "db_books";

$conn = mysqli_connect($hostname,$username,$password,$database);
 

if(!$conn)
 {
    echo mysqli_connect_error($conn);
 }

?>