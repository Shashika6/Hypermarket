<!DOCTYPE html>
<html lang="en">

    <head>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/style.css'); ?>"/>
        <?php require 'common/header.php'; ?>
      
<style>
    
    
    </style>

    </head>


  <body>
      <div data-role="page" id="demo-page" >
        <?php require 'common/sidebar.php'; ?>
        <?php require 'common/navbar.php'; ?>
        
          <form action="http://localhost/hypermarket/index.php/payment/hyperPay" id="account"> 
<h2 style=" text-align:center;"> HyperPoints Payment Gateway</h2>

<img style="height:80px; width:80px" src="<?php echo base_url('/resources/images/cash.png')?>" alt="Italian Trulli">
<div class="ui-field-contain">
<h4 for="text-1">Available HyperPoints:</h4>
 <input type="text" name="text-1" id="text-1" value="<?php echo $hyperPoints ?>">
</div>
<br>

<div class="ui-field-contain">
<h4 for="text-1">Total Price:</h4>
 <input type="text" name="text-1" id="text-1" value="Rs. <?php echo $pay ?>">
</div>

<br>
<div class="ui-field-contain">
<h4 for="text-1">Final Price:</h4>
 <input style="color:red;" type="text" name="text-1" id="text-1" value="Rs. <?php echo $pay ?> - <?php echo $hyperPoints ?> = Rs. <?php echo $final ?>">
</div>


  <br>
     <button  style="text-align: center;background-color:#62bb46; color:white" type="submit">Confirm</button>
 </form>

        
<?php require 'common/footer.php'; ?>
</div>
    








</form>
	
  </body>
  </html>
