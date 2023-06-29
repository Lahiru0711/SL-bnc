<?php
   include ("db_client.php");
   include ("header.php");  //include header
    //include db
   if(isset($_POST['submit'])){   //isset-- if value is asin,excicute the programme
    $name=$_POST['name'];
	$address=$_POST['address'];  //variables
	$email=$_POST['email'];
	$phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
	$ename=$_POST['ename'];
	$eno=$_POST['eno'];
   
            
       $sql= "INSERT INTO cool (name,address,email,phone,password,ename,eno) VALUES('".$name."','".$address."','".$email."','".$phone."','".$password."','".$ename."','".$eno."')";;
       if($password != $cpassword)
	   {
		   echo "password confirmation faild !!";
		   
	   }else{
	   
	   $password=md5($password);  //encrypt password 
        	   
       
	   $result = $conn->query($sql);
        if($result==TRUE){
		  echo "New record created succesfully";
		}
        else{
		   echo "Error:" . $sql . "<br>" . $conn->error;
		}
	   }		
	$conn->close();
   }

?>
 <link rel="stylesheet" type="text/css" href="css/register_3.css">
 
 
 
 <div class="reg">
                 <form action= "register_client.php" method="POST">	
			  
				       <div class="user-details">
					     <div class="input-box">
						    <span class="details"> Username</span>
							<input type="text" name= "name" placeholder="Enter your full name" required>
						 </div> <!--input-box-->
						 
						 <div class="input-box">
						    <span class="details"> Address</span>
							<input type="text"  name="address" placeholder="Enter your Address" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> E-mail</span>
							<input type="E-mail" name="email" placeholder="Enter your E-mail" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Phone Number</span>
							<input type="text" name="phone" placeholder="Enter your Phone Number" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Password</span>
							<input type="password"  name="password" placeholder="Enter your Password" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Confirm Password</span>
							<input type="password"  name="cpassword" placeholder="Comfirm your Password" required>
						 </div> <!--input-box-->
						 
						  <p> in case o an emergency, mention the<br> name & Mobile No of another<br>
						  person to inform you of your information</p>
						 
						 <div class="input-box">
						    <span class="details"> Name </span>
							<input type="text" name="ename" placeholder="Name" required>
						 </div> <!--input-box-->
						 
						  <div class="input-box">
						    <span class="details"> Mobile Number </span>
							<input type="text" name="eno" placeholder="Mobile Number" required>
						 </div> <!--input-box-->
						 
                           <div class="button">
						    <button type="submit" value="submit" name="submit" >register </button>
						 </div><!--button-->
						 
					   </div> <!--user-details-->
                  </form> <!--form-->				  
			</div> <!--reg-->
			
<?php
   include("footer.php");
?>