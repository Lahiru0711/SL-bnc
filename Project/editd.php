<?php
// include database connection file
include("header.php");
include("db_client.php");


// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update'])){	

	
	//write the update query
	
	$query ="UPDATE `cool1` SET `name`='$_POST[name]',`address`='$_POST[address]',`email`='$_POST[email]',`phone`='$_POST[phone]',`password`='$_POST[password]',`V_brand`='$_POST[V_brand]',`V_model`='$_POST[V_model]',`V_regno`='$_POST[V_regno]' WHERE id='$_POST[id]'";;
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
	$sql = "SELECT * FROM `cool1` WHERE `id`='$id'";
	//execute the sql
	$result = $conn-> query($sql);
	
 if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
	   $name = $row['name'];
	   $address = $row['address'];
	   $email = $row['email'];
	   $phone = $row['phone'];
	   $password = $row['password'];
	   $V_brand = $row['V_brand'];
	   $V_model = $row['V_model'];
	   $V_regno = $row['V_regno']; 
	   $id = $row['id'];
   }
   
 ?> 
 <link rel="stylesheet" type="text/css" href="css/register_3.css">
   <form action= "editd.php" method="POST">	
			  
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
						 
                           <div class="input-box">
						    <span class="details"> Vehicle Brand Name  (ex- TOYOTA...)</span>
							<input type="text" name="V_brand" placeholder="Enter your Vehicle Brand Name" value="<?php echo $V_brand; ?>">
						  </div> <!--input-box-->
						  
						   <div class="input-box">
						    <span class="details"> Vehicle Model (ex- PRIUS...)</span>
							<input type="text" name="V_model" placeholder="Enter your Vehicle Model" value="<?php echo $V_model; ?>">
						 </div> <!--input-box-->
						 
						 <div class="input-box">
						    <span class="details"> Vehicle Registration No</span>
							<input type="text" name="V_regno" placeholder="Enter your Vehicle Reg No" value="<?php echo $V_regno; ?>">
						 </div> <!--input-box-->
						 
                           <div class="button">
						    <button type="submit" value="update" name="update" > update </button>
						 </div><!--button-->
						 
					   </div> <!--user-details-->
                  </form> <!--form-->				  
			</div> <!--reg-->
 
 <?php
 }else{
    header('Location: myacd.php');
 }
}
 include('footer.php');
 ?>
 

