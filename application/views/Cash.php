<!DOCTYPE html>
<html lang="en">

    <head>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/style.css'); ?>"/>
        <?php require 'common/header.php'; ?>
      
            
<style>
    
    </style>

           
    </head>


  <body>
      
      <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
<h2 style=" text-align:center;"> Cash Payment Gateway</h2>
<form id="account" action="http://localhost/hypermarket/index.php/payment/cashPay">
<img style="height:80px; width:80px;border-radius: 50%;" src="<?php echo base_url('/resources/images/Cash.png')?>" alt="Italian Trulli">

<h4 for="text-1">Total Amount Payable:</h4>
 <input type="text" name="text-1" id="text-1" value="Rs. :<?php echo $pay?>">

<br>
<h4 for="text-1">Phone Number:</h4>
     <input type="text" name="textinput-1" id="textinput-1" placeholder="Mobile No." value="">

<br>

<div class="ui-field-contain">
   <h4 for="text-1">Address:</h4>
    <textarea cols="40" rows="8" name="textarea-1" id="textarea-1" placeholder="Enter Delivery Address"></textarea>
</div>

<br>
<br>
   <button  style="text-align: center;background-color:#62bb46; color:white" type="submit">Confirm</button>
        </form>
    
<?php require 'common/footer.php'; ?>
	 <script type="text/javascript">
        
    

        function toast(message) {
            var $toast = $('<div class="ui-loader ui-overlay-shadow ui-body-e ui-corner-all"><h3>' + message + '</h3></div>');

            $toast.css({
                display: 'block', 
                background: '#fff',
                opacity: 0.90, 
                position: 'fixed',
                padding: '7px',
                'text-align': 'center',
                width: '270px',
                left: ($(window).width() - 284) / 2,
                top: $(window).height() / 2 - 20
            });

            var removeToast = function(){
                $(this).remove();
            };

            $toast.click(removeToast);

            $toast.appendTo($.mobile.pageContainer).delay(2000);
            $toast.fadeOut(400, removeToast);
        }

       function removeAction(productID) {
        $.ajax({
          method: "GET",
          url: "<?=base_url()?>index.php/Favourite/removeFromFavorites",
          data: { productID: productID }
        }) .done(function( msg ) {
            $("#favouritesDiv").load(location.href+" #favouritesDiv");
            toast("Removed from favourites")
          });
               }

    </script>
  </body>
  </html>
