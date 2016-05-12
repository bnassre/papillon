<div class="grayback">
	<header>
	<div class="ui vertical segment">
		<div class="ui container">
			<div class="ui large secondary menu">
		       	<a class="item logo">
					<img src="./images/logo.png" alt="logo">
		       	</a>
		       	<div class="right menu">
			        <a href="/" class="<?= route() == '' ? 'active' : '' ?> item">ABOUT US</a>
			        <a href="services.php" class="<?= route() == 'services' ? 'active' : '' ?> item">SERVICES</a>
                    <a href="courses.php"  class="<?= route() == 'courses' ? 'active' : '' ?> item">COURSES</a>
                    <a href="coming-soon.php"  class="<?= route() == 'coming-soon' ? 'active' : '' ?> item">COMING SOON</a>
			        <a href="contact.php"  class="<?= route() == 'contact' ? 'active' : '' ?> item">CONTACT</a>
		        </div>

                <div class="mobile-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
		    </div>
		</div>
	</div>
	<div class="curve"></div>
	</header>
	
	<section id="slider">
            
        <div class="slide slide-1">
            <img src="images/slide-1.png" >
            <div class="text">
                <span>BETTER EDUCATION FOR A BETTER WORLD
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-2">
            <img src="images/slide-2.png" >
            <div class="text">
                <span>BETTER WORLD FOR A BETTER EDUCATION 
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-3">
            <img src="images/slide-3.png" >
            <div class="text">
                <span>WORLD EDUCATION A BETTER FOR BETTER
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-4">
            <img src="images/slide-4.png" >
            <div class="text">
                <span>BETTER EDUCATION FOR A BETTER WORLD
                </span>

                <button>READ MORE</button>
            </div>
        </div>
        
        <div class="ui container">    
            <div class="navigation">
                <div class="dot dots-1"></div>
                <div class="dot dots-2"></div>
                <div class="dot dots-3"></div>
                <div class="dot dots-4"></div>
            </div>
            
		</div>
		<img class="getdown" src="./images/arrow-down.png" >
	</section>
</div>




<?php

    function route(){
      $requestURI =  sprintf("%s", $_SERVER['REQUEST_URI']);
      $route = explode("/", $requestURI);
      $route = explode("?", $route[1]);
      return $route[0];
    }

?>