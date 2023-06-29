<?php
  include ("header.php");
?>

<link rel="stylesheet" type="text/css" href="css/register_1.css">
    <div class="b_background ">
	  <button onClick ="MyOnClickFn1()"> Client login </button>
	  
	  <button onClick ="MyOnClickFn2()"> Driver login </button>
	 </div> <!--b_background-->

	 <script>
	  
	  function MyOnClickFn1(){
	     document.location.href="login.php";  //client register
	  }
	 
	    function MyOnClickFn2(){
	     document.location.href="logind.php"; //driver register
	  }
	  
	  </script>
<?php
  include ("footer.php");
?>