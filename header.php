<script src="./scripts/segment.min.js"></script>
<script src="./scripts/ease.min.js"></script>

<link rel="stylesheet" href="./stylesheets/css/component.css">
<div class="grayback page_<?= route() ?>">
	<header class="page_<?= route() ?>">
	<div class="ui vertical segment">
		<div class="ui container">
			<div class="ui large secondary menu">
		       	<a href="/" class="item logo">
                    <!--<img src="./images/logo.png" alt="logo">-->
					<img src="./images/footer/logo.png" alt="logo">
		       	</a>
		       	<div class="right menu">
			        <a href="/" class="<?= route() == '' ? 'active' : '' ?> item">ABOUT US</a>
			        <a href="services.php" class="<?= route() == 'services' ? 'active' : '' ?> item">SERVICES</a>
                    <a href="courses.php"  class="<?= route() == 'courses' ? 'active' : '' ?> item">COURSES</a>
                    <a href="coming-soon.php"  class="<?= route() == 'coming-soon' ? 'active' : '' ?> item">COMING SOON</a>
			        <a href="contact.php"  class="<?= route() == 'contact' ? 'active' : '' ?> item">CONTACT</a>
		        </div>

                <div class="mobile-menu">
                   <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                        <svg width="1000px" height="1000px">
                            <path id="pathA" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                            <path id="pathB" d="M 300 500 L 700 500"></path>
                            <path id="pathC" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                        </svg>
                        <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                    </div><!-- menu-icon-wrapper -->
                    <div id="dummy" class="dummy">
                        <div class="dummy__item"></div>
                        <div class="dummy__item"></div>
                        <div class="dummy__item"></div>
                        <div class="dummy__item"></div>
                    </div><!-- /dummy -->
                </div>
		    </div>
		</div>
	</div>
	<div class="curve "></div>
	</header>
	
    	<section id="slider" class="page_<?= route() ?>">
                
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