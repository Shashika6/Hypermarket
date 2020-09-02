<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
         <style>
		* {box-sizing: border-box;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 1000px;
		  position: relative;
		  margin: auto;
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .text {font-size: 11px}
		}

		 #searchedCard{
            width: 25%;
        }
        @media all and (max-width: 426px){
            #searchedCard{
                width: 50%;
            }
        }

		</style>
    <head>
    <body>
    	
         <div data-role="page" id="page">
			 <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>

			 <div data-role="content" data-theme="a">
			 	<?php
		            if(!isset($results) || !count($results)>0){
		            ?>
		                <h2 style="color:#62BB46"><i>Search Results...</i></h2>
	             	<?php
		            } else {
		            ?>
		            <h2 style="color:#62BB46"><i>Search Results for "<?=$search_word?>"</i></h2>
		            <?php
		            }
		            ?>
	         	
	         	<div>
					<div class="ui-grid-a">
						<?php
			            if(!isset($results) || !count($results)>0){
			            ?>
			                <h4> No results found!</h4>
		             	<?php
			            } else {
			                foreach($results as $row){
			            ?>
			            <div class="ui-block-b" style="padding: 5px;" id="searchedCard">
							<div class="card" style="width: 100%; height:320px; border: #6767674d 1px solid; padding:10px;" align="center">
							  <img src="<?=base_url()?><?=$row['productImage']?>" alt="img" style="width:139px; height: 139px;">
							  <h3 style="height: 72px;"><a style="text-decoration:none; color: #000" href="<?=base_url()?>index.php/Store/viewItem?ID=<?=$row['productID']?>"  data-ajax="false"> <?=$row['productName']?></a></h3>
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
			</div>
			
         	<?php require 'common/footer.php'; ?>

		 </div>
    </body>

</html>