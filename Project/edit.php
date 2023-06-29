<?php
// include database connection file
include("header.php");
include("db_client.php");


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])){	

	
	//write the update query
	
	$query ="UPDATE `cool` SET `name`='$_POST[name]',`address`='$_POST[address]',`email`='$_POST[email]',`phone`='$_POST[phone]',`password`='$_POST[password]',`ename`='$_POST[ename]',`eno`='$_POST[eno]' WHERE id='$_POST[id]'";
	$query_execute = mysqli_query($conn,$query);
	//execute query
	$result = $conn->query($query);
    if($result == TRUE){
		
	     echo "Record Update succesfully";
	}else{
	  echo "Error:".$sql."<br>".$conn->error;
	}
}


    //if the 'id' variable is set in the url, we know that we need to edit a record
if(isset($_GET['id'])){
	$id =$_GET['id'];
	//write sql to get user data
	$sql = "SELECT * FROM `cool` WHERE `id`='$id'";
	//execute the sql
	$result = $conn-> query($sql);
	
 if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
	   $name = $row['name'];
	   $address = $row['address'];
	   $email = $row['email'];
	   $phone = $row['phone'];
	   $password = $row['password'];
	   $ename = $row['ename'];
	   $eno = $row['eno'];
	   $id = $row['id'];
   }
   
 ?> 
 <link rel="stylesheet" type="text/css" href="css/register_3.css">
   <form action= "edit.php" method="POST">	
			  
				       <div class="user-details">
					     <div class="input-box">
						    <span class="details"> Username</span>
							<input type="text" name= "name" placeholder="Enter your full name" value="<?php echo $name; ?>">
							<input type="hidden" name="id"  value="<?php echo $id; ?>">
						 </div> <!--input-box-->
						 
						 <div class="input-box">
						    <span class="details"> Address</span>
							<input type="text"  name="address" placeholder="Enter your Address" value="<?php echo $address; ?>">
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> E-mail</span>
							<input type="E-mail" name="email" placeholder="Enter your E-mail" value="<?php echo $email; ?>">
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Phone Number</span>
							<input type="text" name="phone" placeholder="Enter your Phone Number" value="<?php echo $phone; ?>">
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Password</span>
							<input type="password"  name="password" placeholder="Enter your Password" value="<?php echo $password; ?>">
						 </div> <!--input-box-->
						 
						 
						  <p> in case o an emergency, mention the<br> name & Mobile No of another<br>
						  person to inform you of your information</p>
						 
						 <div class="input-box">
						    <span class="details"> Name </span>
							<input type="text" name="ename" placeholder="Name"value="<?php echo $ename; ?>">
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Mobile Number </span>
							<input type="text" name="eno" placeholder="Mobile Number"value="<?php $eno; ?>">
						 </div> <!--input-box-->
						 
                           <div class="button">
						    <button type="submit" value="update" name="update" > update </button>
						 </div><!--button-->
						 
					   </div> <!--user-details-->
                  </form> <!--form-->				  
			</div> <!--reg-->
 
 <?php
 }else{
    header('Location: myacc.php');
 }
}
 include('footer.php');
 ?>
 
 
          
 



