<!DOCTYPE html>
<html lang="en">

    <head>
         
    	<style type="text/css">
            .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper{
                background-color: white;
            }
    		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  column-gap: 10px;
  max-width: 175px;
  height: 375px;
  text-align: center;
  font-family: arial;
  
}
#productCard{
            width: 25%;
        }
        @media all and (max-width: 426px){
            #productCard{
                width: 50%;
            }
        }
.text-center {
           
        }
        
        #qty{
            width:10% ;
        }
        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type: none;
            padding: 0;

            -moz-user-select: none;
            -webkit-user-select: none;
        }

        .rating-stars ul > li.star {
            display: inline-block;

        }

        /* Idle State of the stars */
        .rating-stars ul > li.star > i.fa {
            font-size: -0.5em; /* Change the size of the stars */
            color: #ccc; /* Color on idle state */
        }

        /* Selected state of the stars */
        .rating-stars ul > li.star.selected > i.fa {
            color: #FF912C;
        }

        .ui-popup-container  {
            top: 33% !important;
            left: 15px !important;
            right: 15px;
            text-align: center;
            position: fixed;
        }

        #ra-stars > li.star > i.fa {
            font-size: 15px !important;
        }
    	</style>
       <?php require 'common/header.php'; ?>
    </head>
    <body>
        <div data-role="page" id="page">
     <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
        
         <div data-role="main" class="ui-content">
         	<span style="color:#62BB46; font-size: 18px; font-style:italic; ">Home-><span style="font-size: 20px;">Store</span></span>
         </div>
         <div class="ui-grid-a">
          <?php
          foreach ($storeItems as $item) {

        echo"<div class='ui-block-b' id='productCard'> <div class='card'>";
  echo"<img src='".base_url()."".$item->getProductImage()."'  style='width:175px;'>";
  echo"<h3 style='height:72px;'><a style='text-decoration:none' data-ajax='false'  href='/hypermarket/index.php/Store/viewItem?ID=".$item->getProductID()."'>".$item->getProductName()." </a></h3>";
  if($item->getDiscount()!="0"){
      echo"<p class='price' style='font-size:18px;'>was Rs.".$item->getOldPrice()."</p>";
  }else{
      echo"<br>";
  }
  echo"<p class='price' style='font-size:20px;color:red;'>Rs.".$item->getNewPrice()."</p>";
echo"</div>";
echo"</div>";

}
?>   
</div>
<?php require 'common/footer.php'; ?>
        
        <script>
function redirect(){
        
	window.location.href = "<?=base_url()?>index.php/Store/viewItem?ID=1";;
}
</script>
</div>
    </body>

</html>