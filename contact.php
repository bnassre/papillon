<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Papillon</title>

	<link rel="stylesheet" type="text/css" href="./bower_components/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/css/main.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/css/contact.css">

</head>
<body>
    
	<?php include 'header.php';?>
	
    <div class="content">
	<section class="page-title">
		<div class="ui container">
			<h1><span>Contact Us</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque error autem non corrupti repudiandae repellendus quaerat quae voluptas.</p>
		</div>
	</section>

	<section>
		<div class="ui container">
			<div class="contact ui stackable grid">
				<div class="six wide column">
				    <div class="info ui stackable grid">
				        <div class="four wide column">
                            Phone
                        </div>
                        <div class="twelve wide column">
                            (405) 285-1522<br>
                            (405) 285-1522
                        </div>
                        
                        <div class="four wide column">
                            Fax
                        </div>
                        <div class="twelve wide column">
                            (405) 285-1522<br>
                            (405) 285-1522
                        </div>
                        
                        <div class="four wide column">
                            Email
                        </div>
                        <div class="twelve wide column">
                            contact@papillon.com<br>
                            support@papillon.com
                        </div>
				    </div>
				</div>
				<div class="ten wide column">
					
                    <form method="post" action="">
                        <div class="ui stackable grid">
                            <div class="four wide column">
						        <label>Name</label>
                            </div>
                            <div class="ten wide column">
                                <input type="text" >
                            </div>
                            <div class="four wide column">
						        <label>Email</label>
                            </div>
                            <div class="ten wide column">
                                <input type="text" >
                            </div>
                            <div class="four wide column">
						        <label>Phone</label>
                            </div>
                            <div class="ten wide column">
                                <input type="text" >
                            </div>
                            <div class="four wide column">
						        <label>Message</label>
                            </div>
                            <div class="ten wide column">
                                <textarea name="" id="" cols="30" rows="4" >
                                    
                                </textarea>
                            </div>
                            <div class="four wide column">
						        
                            </div>
                            <div class="ten wide column">
                                <input type="submit" value="SEND" >
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<br><br><br>
			<div class="ui stackable grid header">
                <div class="four wide column">
                    <h1>LOCALISATION</h1>
                </div>

                <div class="twelve wide column">
                    <span>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions On sait depuis</span>
                </div>
            </div>
			
		</div>
		
		
		
		<div id="map"></div>
        <script type="text/javascript">

            var map;
            var marker;
            var coordinates = {lat: 47.655548, lng: -122.303200};
            function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                center: coordinates,
                zoomControl: true,
                zoomControlOptions: {
                    position: google.maps.ControlPosition.LEFT_TOP
                },
                mapTypeControl: false,
                scaleControl: true,
                scaleControlOptions: {
                    position: google.maps.ControlPosition.RIGHT_TOP
                },
                streetViewControl: false,
                rotateControl: false,
                zoom: 18
              });
            
              var image = "./images/marker.png";
              marker = new google.maps.Marker({
                position: coordinates,
                icon: image,
                map: map
              });
                
              marker.setAnimation(google.maps.Animation.BOUNCE);
            }
            

        </script>
        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzMHWg11VwhRJ4cm_o5QbpzdpgSh390ew&callback=initMap">
        </script>
	</section>
    </div>

	<footer><?php include 'footer.php';?></footer>
	<script src="./bower_components/jquery/dist/jquery.min.js"></script>
	<script src="./bower_components/semantic/dist/semantic.min.js"></script>
	<script src="scripts/main.js"></script>
</body>
</html>