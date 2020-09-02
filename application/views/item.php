<!DOCTYPE html>
<html lang="en">

    <head>
     <?php require 'common/header.php'; ?>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="<?=base_url()?>resources/javascript/sendEmail.js"></script>
    	<style type="text/css">
            .ui-overlay-a, .ui-page-theme-a, .ui-page-theme-a .ui-panel-wrapper{
                background-color: white;
            }
    		.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  column-gap: 10px;
  max-width: 350px;
  text-align: center;
  font-family: arial;
   
  
  
}


.button {
 padding:5px; cursor:pointer; background:grey; color:white; width:25px; height:15px; text-align:center; display:inline-block;
}

.button:hover {
background:black;
}
.ui-btn-inline{
    background-color: #62bb46;}
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
        .form-row{
               background-color: #FFFFFF;
        width: 80%;
        height: 90%;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
       
            }
            
            .price{
                color: red;
                font-size:250%;
               font-weight: bold;
            }
            .old{
                font-size:150%;
                 font-weight: bold;
            }
             #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 0px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
    	</style>
        
       
       
    </head>
    <body>
        
        <div data-role="page" id="page">
        <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
         
       <div class="form-row" style="background-color: white ">
         <div data-role="main" class="ui-content">
         	
         </div>
         
    <center>
        
          <?php
          foreach ($itemDetails as $item) {

        
  echo"<img id='productImage' src='".base_url()."".$item->getProductImage()."'  style='width:300px;'>";
  
  echo"<h2>".$item->getProductName()."</h2>";
   echo"<strike class='old'>Rs.".$item->getOldPrice().".00"."</strike>";
  echo"<p class='price'>Rs.".$item->getNewPrice().".00"."</p>";

  if($checkFavo==false && $log=='1'){
  echo"<form action='/hypermarket/index.php/Store/addToFavorites?productID=".$item->getProductID()."'>";
  echo"<input onclick='redirect()' type='image' src='".base_url()."./resources/images/favoriteIcon.png' alt='Submit' width='48' height='48'>";
  echo"</form>";
  }else if($checkFavo==true && $log=='1'){
  echo"<form action='/hypermarket/index.php/Store/removeFromFavorites?productID=".$item->getProductID()."'>";
  echo"<input type='image' onclick='redirect()' src='".base_url()."./resources/images/redHeart.png' alt='Submit' width='48' height='48'>";
  echo"</form>";
  }
   echo"<p>Quantity</p>";
   echo"<form action='/hypermarket/index.php/store/addToCart?productID=".$item->getProductID()."'>";
             echo"<span class='plus button' style='background-color: #62bb46;color:white;width:10%;font-size:100%'>";
echo"+";
echo"</span>";
              echo"<input data-role=none style='text-align:center' type='text' name='quantity' id='qty' maxlength='12'/>";
echo"<span class='min button' style='background-color: #62bb46;color:white;width:10%;;'>";
echo"-";
echo"</span><br><br>";
if($log=='1'){
              echo"<div class='ui-input-btn ui-btn ui-btn-inline' style='background-color: #62bb46;color:white;width:40%;font-size:100%;'>Add to Cart
        <input type='submit' onclick='redirect()' data-enhanced='true'  value='cart'>
    </div>";
}else{
     echo"<div class='ui-input-btn ui-btn ui-btn-inline' style='background-color: #b2beb6;color:white;width:40%;font-size:100%;'>Add to Cart
        <input type='submit' onclick='redirect()' disabled data-enhanced='true'  value='cart'>
    </div>";
}
echo"<a id='myBtn' href='#reviewPanel'><img src='".base_url()."resources/images/reviewButton.png' style='width:100px;'></a>";
                            echo"</form>";
}
?>
              

      </center>    
    
     <?php
     if($log=='1'){
          foreach ($itemDetails as $item) {
    echo"<form action='/hypermarket/index.php/store/itemReview?productID=".$item->getProductID()."'>";
          } ?>
    <div id="overlay"   data-overlay-theme="a" class="ui-content">
        <p>Rate me : </p>
         <section class='rating-widget'>
            <div class='rating-stars text-center'>
                <form id="starForm">
                <ul id='stars'>
                    <li class='star' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                    <li class='star' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                    </li>
                </ul>
                    
                    <input  id="starVal" size="15" name="starValue" type="hidden" />
                    </form>
            </div>
        </section>


        <input name="reviewText" type="text" placeholder="Write a review about this item">
        <br>
        <button type='submit' onclick="redirect()">Submit</button>
    </div>
 </form>
     <?php } ?>
 
     <?php
          foreach ($reviewItem as $review) {
?>
            
              
              
             
              

<!-- <div class="ui-body ui-body-a ui-corner-all">
  
    <h4><?=$review->getName()?>
<?php if($review->getStarCount()=='1'){ ?>
    <img id='productImage' src='<?=base_url()?>resources/images/1star.png'  style='width:100px;float:right;'>
<?php }else if($review->getStarCount()=='2'){?>
    <img id='productImage' src='<?=base_url()?>resources/images/2star.png'  style='width:100px;float:right;'>
<?php }else if($review->getStarCount()=='3'){ ?> 
    <img id='productImage' src='<?=base_url()?>resources/images/3star.png'  style='width:100px;float:right;'>
<?php  }else if($review->getStarCount()=='4'){?>
    <img id='productImage' src='<?=base_url()?>resources/images/4star.png'  style='width:100px;float:right;'>
<?php }else if($review->getStarCount()=='5'){ ?>
    <img id='productImage' src='<?=base_url()?>resources/images/5star.png'  style='width:100px;float:right;'>
<?php } ?>
</h4>
  
  
    <p><?=$review->getReview()?></p>
  
</div>-->
             <?php  
          }
    ?>

<div data-role="panel" data-position="right" data-display="overlay" id="reviewPanel">
     Reviews(<?php echo $reviewCount ?>);
   <?php
          foreach ($reviewItem as $review) {
?>
         

 <div class="ui-body ui-body-a ui-corner-all">
   
  
    <h4><?=$review->getName()?>
<?php if($review->getStarCount()=='1'){ ?>
    <img id='productImage' src='<?=base_url()?>resources/images/1star.png'  style='width:100px;float:left;'>
<?php }else if($review->getStarCount()=='2'){?>
    <img id='productImage' src='<?=base_url()?>resources/images/2star.png'  style='width:100px;float:left;'>
<?php }else if($review->getStarCount()=='3'){ ?> 
    <img id='productImage' src='<?=base_url()?>resources/images/3star.png'  style='width:100px;float:left;'>
<?php  }else if($review->getStarCount()=='4'){?>
    <img id='productImage' src='<?=base_url()?>resources/images/4star.png'  style='width:100px;float:left;'>
<?php }else if($review->getStarCount()=='5'){ ?>
    <img id='productImage' src='<?=base_url()?>resources/images/5star.png'  style='width:100px;float:left;'>
<?php } ?>
</h4>
  
  
    <p><?=$review->getReview()?></p>
  
</div>
             <?php  
          }
    ?>
</div><!-- /panel -->


</div>

    <?php require 'common/footer.php'; ?>
    <script>
        jQuery(function(){
  var j = jQuery; //Just a variable for using jQuery without conflicts
  var addInput = '#qty'; //This is the id of the input you are changing
  var n = 1; //n is equal to 1
  
  //Set default value to n (n = 1)
  j(addInput).val(n);

  //On click add 1 to n
  j('.plus').on('click', function(){
    j(addInput).val(++n);
  })

  j('.min').on('click', function(){
    //If n is bigger or equal to 1 subtract 1 from n
    if (n >= 1) {
      j(addInput).val(--n);
    } else {
      //Otherwise do nothing
    }
  });
});
    </script>

<script>$(document).ready(function(){
  
  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
   
    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });
    
  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });
  
  
  /* 2. Action to perform on click */
  $('#stars li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');
    
    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }
    
    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }
    
    // JUST RESPONSE (Not needed)
    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
    var msg = "";
    if (ratingValue > 1) {
        msg = "Thanks! You rated this " + ratingValue + " stars.";
    }
    else {
        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
    }
    responseMessage(msg);
    
  });
  
  
});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}</script>

<script>$("#stars").on("click", "i", function(e){
    e.preventDefault();
    var $this = $(this).parent();
    $this.addClass("select").siblings().removeClass("select");
    $("#starVal").val($this.data("value"));
})

$("form[name=starForm]").submit(function(e) {
    //do your validation here
    if ($(this).find("li.select").length == 0) {
        alert( "Please select a size." );
        e.preventDefault();
    }
});</script>
<script>
function redirect(){
  var url=window.location.href;
	window.location.href = url;
  location.reload();
}

function sendEmailRedirect(){
    redirect();
}
</script>
</div>
        
       
    </body>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
//function topFunction() {
//  document.body.scrollTop = 0;
//  document.documentElement.scrollTop = 0;
//}
</script>
</html>