<!DOCTYPE html>
<html lang="en">

    <head>
        
    	<style type="text/css">
    		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  column-gap: 10px;
  max-width: 175px;
  height: 350px;
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





    	</style>
        <?php require 'common/header.php'; ?>
    </head>
    <body style="background-color: white;">
        <div data-role="page" id="page">
        <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
         <div data-role="main" class="ui-content">
         	<span style="color:#62BB46; font-size: 18px; font-style:italic; ">Home-><span style="font-size: 20px;">Promotions</span></span>
         </div>
         <div class="ui-grid-a">
          <?php
          foreach ($storeItems as $item) {

        echo"<div class='ui-block-b' id='productCard'> <div class='card'>";
  echo"<img src='".base_url()."".$item->getProductImage()."'  style='width:175px;'>";
  echo"<h3 style='height:72px;'><a data-ajax='false' style='text-decoration:none' href='/hypermarket/index.php/Store/viewItem?ID=".$item->getProductID()."'>".$item->getProductName()." </a></h3>";
  if($item->getDiscount()!="0"){
      echo"<p class='price'><strike>Rs.".$item->getOldPrice()."</strike></p>";
  }else{
      echo"<br>";
  }
  echo"<p class='price'>Rs.".$item->getNewPrice()."</p>";
echo"</div>";
echo"</div>";

}
?>   
</div>
            <?php require 'common/footer.php'; ?>
</div>


    </body>

</html>