<?php
  include("header.php"); // nav bar and logo include loging page 
  include("db_client.php"); // include client database

    
  
    if(isset($_POST['login']))
    {
        $name = $_POST['name'];
        $password = $_POST['password'];
        //$encrypt = md5($password);
        $sql = "SELECT password FROM cool WHERE name = '$name' ";
        $result = mysqli_query($conn,$sql);

        if($row=mysqli_fetch_assoc($result))
        {
            if($password==$row['password'])
            {
                echo "Synchronizing Data";
                header("location:http://localhost/PHP/COOL/maincat.php");
                exit();
            }
            else
        {
            echo '<script>alert("login Faild! invalid password")</script>';
            exit();
        }
        }
        else
        {
            echo '<script>alert("login Faild! invalid username")</script>';
            exit();
        }
    }
?>
  <link rel="stylesheet" type="text/css" href="css/login.css">  
    <div class="login clearfix">
		       <h1> LogIn </h1>
		   </div><!--login-->

     	  <div class="reg">

                  <form method = "POST" action = "#">
				       <div class="user-details">
                  <div class="input-box">
						    <span class="details"> Username</span>
							<input type="text" placeholder="Username" name ="name"required>
						 </div> <!--input-box-->
						 
						   <div class="input-box">
						    <span class="details"> Password</span>
							<input type="password" placeholder="Password" name ="password" required>
							<input type="submit" value="login" name ="login">
						 </div> <!--input-box-->
 
						 <!--<div class="button">
						    <a href = "maincat.php"> Log in!</a>
							
						 </div>-->
						 
						 
						 <div class = "login_button">
						    <a href ="register_1.php"> Sign in!</a>
						 </div><!--link-->
						 
						 
						 
					   </div> <!--user-details-->
                  </form> <!--form-->				  
			</div> <!--reg-->					   