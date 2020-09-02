<!DOCTYPE html>
<html lang="en">

    <head>
        
          <script src = "https://checkout.stripe.com/checkout.js" ></script>
       <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/payment.css'); ?>"/>  
  
              <?php require 'common/header.php'; ?>
 
        <style>
            
            
          
        
        </style>    
                 <script>
$(document).ready(function(){
  $(":button").css("background-color", "#62bb46");
    $(":button").css("color", "white");


});
</script>
    </head>
    <body>
         <div data-role="page" id="page">
                <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
        <h2>Select Payment Method</h2>
        <div align="center">
            <form data-ajax="false" id="account" action="<?php echo base_url()?>index.php/payment/cash" method="post">
       
            
            
      
        
                 <input data-ajax="false" class="imgright" type="image" src="<?php echo base_url('/resources/images/cash-on-delivery-png-1.png'); ?>" alt="Submit" width="120px" height="80px">
      
              <input  data-ajax="false" formaction="<?php echo base_url()?>index.php/payment/hyperpoints" class="imgright" type="image" src="<?php echo base_url('/resources/images/logo_transparent.png'); ?>" alt="Submit" width="80px" height="80px">
        
    
         
         <input   data-ajax="false" formaction="<?php echo base_url()?>index.php/payment/stripe" class="imgleft" type="image" src="<?php echo base_url('/resources/images/stripe.png'); ?>" alt="Submit" width="130px" height="60px">
         
             
</form>
        </div>
        


       
            
       
     
		 
     <?php require 'common/footer.php'; ?>
         </div>

   
     




        
    </body>

</html>