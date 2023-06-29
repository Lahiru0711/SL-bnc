<?php
// include database connection file
include("db_client.php");




if(isset($_GET['id'])){
  $id = $_GET['id'];
  //enter no
   $sql ="DELETE FROM cool WHERE id= '$id' ";
  
  
  //$result=$conn->query($sql);
  $result = mysqli_query($conn,$sql);
  if($result == TRUE){
	  echo "Record deleted successfully";
  }else{
      echo "Error:" .$sql."<br>". $conn->error;
  }
}
?>
