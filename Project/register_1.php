<?php
  include ("header.php");
?>

<link rel="stylesheet" type="text/css" href="css/register_1.css">
    <div class="b_background ">
	  <button onClick ="MyOnClickFn1()"> Client Register </button>
	  
	  <button onClick ="MyOnClickFn2()"> Driver Register </button>
	 </div> <!--b_background-->

	 <script>
	  
	  function MyOnClickFn1(){
	     document.location.href="register_client.php";  //client register
	  }
	 
	    function MyOnClickFn2(){
	     document.location.href="register_driver.php"; //driver register
	  }
	  
	  </script>
<?php
  include ("footer.php");
?>