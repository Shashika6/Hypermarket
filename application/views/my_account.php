<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
             <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/account.css'); ?>"/>
        <script>
$(document).ready(function(){
  $(":button").css("background-color", "#62bb46");
    $(":button").css("color", "white");


});
</script>



<style>
   

    </style>

    </head>


  <body>
      <div data-role="page"  class=back id="demo-page" >
          <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
     
<h1 style="text-align:center">My Account</h1>
<form   data-ajax="false" method=POST id="account" action="<?php echo base_url()?>index.php/myAccount/editAccount">


          <div style="text-align: center;">
          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px;border-radius: 50%;"> <br> <br>
          </div>
    
    <div data-role="popup" id="popupBasic">
<p>This is a completely basic popup, no options set.</p>
</div>
    
    <?php foreach($data as $row)  {?> 
    <div style="text-align: right;">
         <h3 class="label info">HyperPoints :<?php echo $row->hyperpoints?></h3>
    </div>
    <br>
     <?php
    if($row->hyperpoints>1000){
        ?>
    <div style="text-align: center;">
             <img src="<?=base_url()?>resources/images/platinum.jpg" alt="badge" style="width:60px;border-radius: 50%;"> <br>
         </div>
    <div style="text-align: center;">
        <span >1000+</span>
         </div>
     <?php
    } else if($row->hyperpoints>500){
       ?>
       <div style="text-align: center;">
             <img src="<?=base_url()?>resources/images/gold.jpg" alt="badge" style="width:60px;border-radius: 50%;">
             <img src="<?=base_url()?>resources/images/arrow.png" alt="arrow" style="width:40px;margin: 10px 0px;">
             <img src="<?=base_url()?>resources/images/platinum.jpg" alt="badge" style="width:60px;border-radius: 50%;opacity:0.4;"> <br>
         </div>
    <div style="text-align: center;">
        <span style="margin-right:20px;">500-1000</span>  <span style="margin-left:30px;">1000+</span>
         </div>
        <?php
    } else if($row->hyperpoints>250){
       ?>
       <div style="text-align: center;">
             <img src="<?=base_url()?>resources/images/silver.jpg" alt="badge" style="width:60px;border-radius: 50%;">
             <img src="<?=base_url()?>resources/images/arrow.png" alt="arrow" style="width:40px;margin: 10px 0px;">
             <img src="<?=base_url()?>resources/images/gold.jpg" alt="badge" style="width:60px;border-radius: 50%;opacity:0.4;"> <br>
         </div>
        <div style="text-align: center;">
        <span style="margin-right:20px;">250-500</span>  <span style="margin-left:30px;">500-1000</span>
         </div>
        <?php
    } else {
    ?>
    
        <div style="text-align: center;">
             <img src="<?=base_url()?>resources/images/bronze.jpg" alt="badge" style="width:60px;border-radius: 50%;">
             <img src="<?=base_url()?>resources/images/arrow.png" alt="arrow" style="width:40px;margin: 10px 0px;">
             <img src="<?=base_url()?>resources/images/silver.jpg" alt="badge" style="width:60px;border-radius: 50%;opacity:0.4;"> <br>
         </div>
    <div style="text-align: center;">
        <span style="margin-right:20px;">0-250</span>  <span style="margin-left:30px;">250-500</span>
         </div>
    
    <?php
    }
    ?>
    
    
    <br>
           <div style="text-align: center;">
       
          <h3 >Username : </h3>
            <h3><?php echo $row->Username?></h3>
          
          <br>
          <br>  
          <h3 >Full Name :  </h3>
            <h3><?php echo $row->Name?></h3>
          <br> <br>
          <h3>Password : </h3>
             <h3>********</h3>
          <br> <br>
          <h3>E-Mail :  </h3>
           <h3><?php echo $row->Email?></h3>
          <br> <br>
          <h3>Mobile No. : </h3>
             <h3><?php echo $row->MobileNo?></h3>
          <h2></h2>
           <button  data-ajax='false' class="greenbutton" id="btn-btn" style="text-align: center;" type="submit">Edit Account</button>
          </div>

   <?php   } ?>







</form>
<?php require 'common/footer.php'; ?>
 </div>   
      
  </body>
  </html>
