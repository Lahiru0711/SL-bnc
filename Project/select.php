<?php
  include ("header.php");
?>

<link rel="stylesheet" type="text/css" href="css/register_1.css">
    <div class="b_background ">
	  <button onClick ="MyOnClickFn1()"> Client Account </button>
	  
	  <button onClick ="MyOnClickFn2()"> Driver Account </button>
	 </div> <!--b_background-->

	 <script>
	  
	  function MyOnClickFn1(){
	     document.location.href="myacc.php";  //client register
	  }
	 
	    function MyOnClickFn2(){
	     document.location.href="myacd.php"; //driver register
	  }
	  
	  </script>
<?php
  include ("footer.php");
?>