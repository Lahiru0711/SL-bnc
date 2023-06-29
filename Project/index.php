
<?php
  include("header.php");  //nav bar and logo include home page
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<div class="intro clearfix">
	        <div class="introimage">
			   <img src="img/123.jpg">
			   
			</div> <!--introimage-->
			
			<div class="introform">
		          <h2>speed booking</h2>
				  <div class="title"><b>Plan Your Ride<b></div><!--title-->
						 <form method="get" action="index.php">
						 <input type="text" placeholder="Enter Pickup Location" required>
						 <input type="text" placeholder="Enter Drop Location" required> 
						<button><a href="maincat.php">BOOK NOW</a></button> 
						
                  </form> 
			</div> <!--introform-->
	   </div> <!--intro-->
<?php
   include("footer.php");   //footer
?>