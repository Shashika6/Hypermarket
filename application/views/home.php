<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
        <style>
		* {box-sizing: border-box;}
		
		.mySlides {display: none;}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: #bbb;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}

		#productCard, #promotionCard{
            width: 25%;
        }
        #introvid{
        	height:240;
        }
        @media all and (max-width: 426px){
            #productCard, #promotionCard{
                width: 50%;
            }
        }

        #introvid{
	      height: 240px;
	    }
	    @media all and (min-width: 426px){
	        #introvid{
	            height: 400px;
	        }
	    }

		</style>
    <head>
    <body>
    	
         <div data-role="page" id="page">
                <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>

			 <div data-role="content" data-theme="a">
	         	
			   <div class="slideshow-container">

				<div class="mySlides fade">
				  <!-- <img src="<?=base_url()?>resources/images/slider_1.jpg" style="width:100%"> -->
				  	<video id="introvid" width="100%" autoplay muted>
					  <source src="<?=base_url()?>resources/video/intro.mp4" type="video/mp4">
					  <!-- <source src="movie.ogg" type="video/ogg"> -->
					</video>
				</div>

				<div class="mySlides fade">
				  <img src="<?=base_url()?>resources/images/slider_2.jpg" style="width:100%">
				</div>

				<div class="mySlides fade">
				  <img src="<?=base_url()?>resources/images/slider_3.jpg" style="width:100%; height:80%">
				</div>

				</div>
				<br>

				<div style="text-align:center">
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				  <span class="dot"></span> 
				</div>

				<h2 style=" text-align: left;"><blink>Promotions</blink><a href="<?=base_url()?>index.php/promotions" data-ajax="false" class="ui-btn ui-btn-inline" style="margin-left: 10px; background-color: #62bb46; color: #fff; font-weight: normal;border-radius: 14px; height: 100%; padding:4px 15px;">View All</a></h2>
				
	

				<!-- Slideshow container -->
				<div class="slideshow-container">
					<div class="ui-grid-a">
						<?php
                        if(!isset($promotions) || !count($promotions)>0){
                            
                        } else {
                            foreach($promotions as $row){
                        ?>
                        <div class="ui-block-b promotionCard" style="padding: 5px;" id="promotionCard">
							<div class="card" style="width: 100%; height:320px; border: #6767674d 1px solid; padding:10px;" align="center">
							  <img src="<?=base_url()?><?=$row['productImage']?>" alt="img" style="width:139px; height: 139px;">
							  <h3 style="height: 72px;"><a style="text-decoration:none; color: #000" href="<?=base_url()?>index.php/Store/viewItem?ID=<?=$row['productID']?>" data-ajax="false"> <?=$row['productName']?></a></h3>
							  <center>
							  <span style="text-align: center; color: grey; color: grey; font-size: 18px;">was Rs. <?=$row['oldPrice']?>.00</span><br>
							  <span style="text-align: center; color: grey; color: red; font-size: 20px; ">Rs. <?=$row['newPrice']?>.00</span>
							  </center>
							</div>
						</div>
                        <?php
                            }
                        }
                        ?>
						
					</div>
				</div>
				<br>




				<h2 style=" text-align: left;">Store<a href="<?=base_url()?>index.php/store" data-ajax="false" class="ui-btn ui-btn-inline" style="margin-left: 10px; background-color: #62bb46; color: #fff; font-weight: normal;border-radius: 14px; height: 100%; padding:4px 15px;">View All</a></h2>
				<!-- Slideshow container -->
				<div class="slideshow-container">
					<div class="ui-grid-a">
						<?php
                        if(!isset($store) || !count($store)>0){
                            
                        } else {
                            foreach($store as $row){
                        ?>
                        <div class="ui-block-b productCard" style="padding: 5px;" id="productCard">
							<div class="card" style="width: 100%; height:320px; border: #6767674d 1px solid; padding:10px;" align="center">
							  <img src="<?=base_url()?><?=$row['productImage']?>" alt="img" style="width:139px; height: 139px;">
							  <h3 style="height: 72px;"><a style="text-decoration:none; color: #000" href="<?=base_url()?>index.php/Store/viewItem?ID=<?=$row['productID']?>" data-ajax="false"> <?=$row['productName']?></a></h3>
							  <center>
							  	<?php
		                        if(!$row['discount']==0){
								?>
                            	<span style="text-align: center; color: grey; color: grey; font-size: 18px;">was Rs. <?=$row['oldPrice']?>.00</span>
                        
		                        <?php
		                        }
								?>
							  	<br>
							  <span style="text-align: center; color: grey; color: red; font-size: 20px; ">Rs. <?=$row['newPrice']?>.00</span>
							  </center>
							</div>
						</div>
                        <?php
                            }
                        }
                        ?>
					</div>
				</div>
				<br>


			</div>
			
         	<?php require 'common/footer.php'; ?>

         	<script>
         		var slideIndex = 0;
				showSlides();

				function showSlides() {
				  var i;
				  var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slideIndex++;
				  if (slideIndex > slides.length) {slideIndex = 1}    
				  for (i = 0; i < dots.length; i++) {
				    dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " active";

				  setTimeout(showSlides, 1000*10);
				}

				

				if($(window).width() >= 768){

				var slidePromotionIndex = 0;
				showPromotionSlides();

				function showPromotionSlides() {
				  var i;
				  var slides = document.getElementsByClassName("promotionCard");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slidePromotionIndex=slidePromotionIndex+4;
				  if (slidePromotionIndex >= slides.length) {slidePromotionIndex = 4}
				  slides[slidePromotionIndex].style.display = "block";
				  slides[slidePromotionIndex-1].style.display = "block"; 
				  slides[slidePromotionIndex-2].style.display = "block"; 
				  slides[slidePromotionIndex-3].style.display = "block"; 

				  setTimeout(showPromotionSlides, 1000*10);
				}

				var slideProductIndex = 0;
				showProductSlides();

				function showProductSlides() {
				  var i;
				  var slides = document.getElementsByClassName("productCard");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slideProductIndex=slideProductIndex+4;
				  if (slideProductIndex >= slides.length) {slideProductIndex = 4}
				  slides[slideProductIndex].style.display = "block";
				  slides[slideProductIndex-1].style.display = "block";  
				  slides[slideProductIndex-2].style.display = "block"; 
				  slides[slideProductIndex-3].style.display = "block"; 

				  setTimeout(showProductSlides, 1000*10);
				}

				} else {

				var slidePromotionIndex = 0;
				showPromotionSlides();

				function showPromotionSlides() {
				  var i;
				  var slides = document.getElementsByClassName("promotionCard");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slidePromotionIndex=slidePromotionIndex+2;
				  if (slidePromotionIndex >= slides.length) {slidePromotionIndex = 2}
				  slides[slidePromotionIndex].style.display = "block";
				  slides[slidePromotionIndex-1].style.display = "block"; 

				  setTimeout(showPromotionSlides, 1000*10);
				}

				var slideProductIndex = 0;
				showProductSlides();

				function showProductSlides() {
				  var i;
				  var slides = document.getElementsByClassName("productCard");
				  for (i = 0; i < slides.length; i++) {
				    slides[i].style.display = "none";  
				  }
				  slideProductIndex=slideProductIndex+2;
				  if (slideProductIndex >= slides.length) {slideProductIndex = 2}
				  slides[slideProductIndex].style.display = "block";
				  slides[slideProductIndex-1].style.display = "block";  

				  setTimeout(showProductSlides, 1000*10);
				}
				}

				
			</script>
		 </div>

    </body>

</html>