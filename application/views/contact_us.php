<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
        
        <style type="text/css">
            #contactMethod{
                    padding-top: 5%;
                }
            @media all and (max-width: 426px){
                #contactMethod{
                    padding-top: 15%;
                }
            }
        </style>
    <head>
    <body>
    	
         <div data-role="page" id="page">
			 <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>

          <div data-role="main" class="ui-content">
         	<span style="color:#62BB46; font-size: 18px; font-style:italic; ">Home-><span style="font-size: 20px;">Contact Us</span></span>
         </div>

			 
	         	<div role="main" class="ui-content" style="width: 100%; height: 250px; padding: 0; background-color: #8BC34A; color: #fff">
	         		<center id="contactMethod">
		         			<p style="font-size: 28px;">Call us</p>
				    		<p>+9411235645</p>
	         		</center>
			    </div>

			    <div role="main" class="ui-content" style="width: 100%; height: 250px; padding: 0; background-color: #4CAF50; color: #fff">		
			    	<center id="contactMethod" >
			    			<p style="font-size: 28px;" >Email us</p>
	         				<p>hello@hypermarket.com</p>
	         		</center>
			    </div>

			   <div id="googleMap" style="width:100%;height:400px;"></div>
			
			
         	<?php require 'common/footer.php'; ?>
		 </div>

    </body>

</html>

<script>
function initMap() {
  var myLatLng = {lat: 6.919485, lng: 79.919457};

  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 12,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAECvdgUK--0MnDubN_FZwXWQs4ugdozbM&callback=initMap"></script>
