<?php
/*
  Developed by Aizaz dinho (@aizazdinho)
  Designed  by Meezan (@iamMeezi)
*/
	include ('../core/init.php');
	

?>
<html>
	<head>	
		
		

		<title>electic</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<link rel="stylesheet" href="rules.css"/>
		<style> 
			
  
	
		</style>
	</head>
	<!--Helvetica Neue-->
<body>
<div class="front-img">
	<img src="canada.jpg"></img>
</div>	

<div class="header-wrapper">
	
	<div class="nav-container">
		<!-- Nav -->
		<div class="nav">
			
			<div class="nav-left">
					 <ul>
					<li><i aria-hidden="true"></i><a href="#">Home</a></li>
					<li><a href="aboutus.html">About</a></li>
					<li><a href="../admin/index.php">Admin Login</a></li>
				</ul>
			</div><!-- nav left ends-->
		
			<div class="nav-right">
				<ul>
					<li><a href="#">Contact us</a></li>
				</ul>
			</div><!-- nav right ends-->

		</div><!-- nav ends -->

	</div><!-- nav container ends -->

</div><!-- header wrapper end -->
	
<!---Inner wrapper-->
<div class="inner-wrapper">
	<!-- main container -->
	<div class="main-container">
		<!-- content left-->
		
  		
		<div class="content-left">
			<h1 class="font-italic">Welcome to ELECTIC TOURING.</h1>
			<br/>
			<p class="font-italic" style="background:black">A place to connect with your friends — and know about the places you love.get information about the places you wish to travel and make your arrangements accordingly..lets get started!!!</p>
		</div><!-- content left ends -->	
	
		<!-- content right ends -->
		<div class="content-right">
			<!-- Log In Section -->
			<div class="login-wrapper">
			  <?php include ('../includes/login.php');?>
			</div><!-- log in wrapper end -->

			<!-- SignUp Section -->
			<div class="signup-wrapper">
			   <?php include ('../includes/signup.php');?>
			</div>
			<!-- SIGN UP wrapper end -->

		</div><!-- content right ends -->

	</div><!-- main container end -->

</div><!-- inner wrapper ends-->
</div><!-- ends wrapper -->
</body>
</html>