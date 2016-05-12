<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Papillon</title>

	<link rel="stylesheet" type="text/css" href="./bower_components/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/css/main.css">
    <link rel="stylesheet" type="text/css" href="./stylesheets/css/error.css">
    
</head>
<body>
    
	<header>
	<div class="ui vertical segment">
		<div class="ui container">
			<div class="ui large secondary menu">
		       	<a class="item logo">
					<img src="./images/footer/logo.png" alt="logo">
		       	</a>
		       	<div class="right menu">
			        <a href="/" class="<?= route() == '' ? 'active' : '' ?> item">ABOUT US</a>
			        <a href="services.php" class="<?= route() == 'services' ? 'active' : '' ?> item">SERVICES</a>
                    <a href="courses.php"  class="<?= route() == 'courses' ? 'active' : '' ?> item">COURSES</a>
                    <a href="coming-soon.php"  class="<?= route() == 'coming-soon' ? 'active' : '' ?> item">COMING SOON</a>
			        <a href="contact.php"  class="<?= route() == 'contact' ? 'active' : '' ?> item">CONTACT</a>
		        </div>
		    </div>
		</div>
	</div>
	<div class="curve"></div>
	</header>

	<div class="errorpage content">
		<center>
			<h2>
			    <div>4</div>
			    <div>0</div>
			    <div>4</div>
			 </h2>
			<p>page not found</p>
		</center>
	</div>

	<footer><?php include 'footer.php';?></footer>
	<script src="./bower_components/jquery/dist/jquery.min.js"></script>
	<script src="./bower_components/semantic/dist/semantic.min.js"></script>
	<script src="scripts/main.js"></script>
</body>
</html>


<?php

    function route(){
      $requestURI =  sprintf("%s", $_SERVER['REQUEST_URI']);
      $route = explode("/", $requestURI);
      $route = explode("?", $route[1]);
      return $route[0];
    }

?>