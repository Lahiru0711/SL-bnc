<?php

   include ("db_client.php"); //include db
   include ("header.php");  //include header
   
   if(isset($_POST['submit'])){   //isset-- if value is asin,excicute the programme
    $name=$_POST['name'];
	$address=$_POST['address'];  //variables
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
	$V_brand=$_POST['V_brand'];
	$V_model=$_POST['V_model'];
	$V_regno=$_POST['V_regno'];
	
	 $sql= "INSERT INTO cool1 (name,address,email,phone,password,V_brand,V_model,V_regno) VALUES('".$name."','".$address."','".$email."','".$phone."','".$password."','".$V_brand."','".$V_model."','".$V_regno."')";
       if($password != $cpassword)
	   {
		   echo "password confirmation faild !!";
		   
	   }else{
	   
	        $password=md5($password);  //encrypt password 
        	   
       
	   $result = $conn->query($sql);
        if($result==TRUE){
		  echo ("New record created succesfully");
		} 
        else{
		   echo "Error:" . $sql . "<br>" . $conn->error;
		}
	   }		
	$conn->close();
   }

?>

<link rel="stylesheet" type="text/css" href="css/register_2.css">
<div class="reg">
                  <form action= "register_driver.php" method="POST">
				       <div class="user-details">
					     <div class="input-box">
						    <span class="details"> Name</span>
							<input type="text" name= "name" placeholder="Enter your  name" required>
						 </div> <!--input-box-->
						 
						 <div class="input-box">
						    <span class="details"> Address</span>
							<input type="text" name="address"  placeholder="Enter your Address" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> E-mail</span>
							<input type="text" name="email" placeholder="Enter your E-mail" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Phone Number</span>
							<input type="text" name="phone" placeholder="Enter your Phone Number" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Password</span>
							<input type="password" name="password"  placeholder="Enter your Password" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Confirm Password</span>
							<input type="password" name="cpassword" placeholder="Confirm your Password" required>
						 </div> <!--input-box-->
						 
						   <div class="input-box">
						    <span class="details"> Vehicle Brand Name  (ex- TOYOTA...)</span>
							<input type="text" name="V_brand" placeholder="Enter your Vehicle Brand Name" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Vehicle Model (ex- PRIUS...)</span>
							<input type="text" name="V_model" placeholder="Enter your Vehicle Model" required>
						 </div> <!--input-box-->
						 
						   <div class="input-box">
						    <span class="details"> Vehicle Registration No</span>
							<input type="text" name="V_regno" placeholder="Enter your Vehicle Reg No" required>
						 </div> <!--input-box-->
 						 
                        <div class="button">
						    <button type="submit" value="submit" name="submit" 
							style = "height: 35px;
									width: 300px;
									color: #fff;
									background: linear-gradient(
								135deg
								,#637383,#374049);
									outline: none;
									border-radius: 5px;
									text-transform: uppercase;
									margin-top: 10px;
									margin-bottom: 20px;
									margin-left: 20px;	">
									register </button>
						</div><!--button-->    
						 
					   </div> <!--user-details-->
                  </form> <!--form-->				  
			</div> <!--reg-->

<?php
  include ("footer.php");
?>