<?php
$host="localhost";
$user="root";
$database="cool";
$password="";
//create connection
$conn=new mysqli($host,$user,$password,$database);

if($conn-> connect_error){
  echo ("connection failed". $conn->connect_error);
}
?>

