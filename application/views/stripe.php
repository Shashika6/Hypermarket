<!DOCTYPE html>
<html>
   <head>

      <?php require 'common/header.php'; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/payment.css'); ?>"/>  
     
      <script src = "https://checkout.stripe.com/checkout.js" ></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style>
      

          .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
  
      
  </style>
    


  <script>
      
$(document).ready(function(){
  $(":button").css("background-color", "#62bb46");
    $(":button").css("color", "white");


});
</script>
  
   </head>

   <body>
      <div data-role = "page" id = "page1">
<?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
         <div data-role = "header">
           
         </div>
      <h3 style="text-align:center; color: #62bb46;" >Stripe Payment Gateway</h3>
        <form  data-ajax="false" class="w3-container" id="frmBooking" name="bookingForm" method="post" action="/payment/stripe">
        <br>
           <div hidden id="message" class="alert alert-success">
    <strong>Success! Payment completed successfully!</strong> 
  </div> 
        <br>
            <img  class="center" src="<?php echo base_url('/resources/images/social.png'); ?>" alt="stripe" height="40%" width="50%">
             <br>
          <input style="font-size:22px;color: black;"readonly="true" id="item_name"  name="item_name" type="text"  value="Total Price :" />
          <input  style="font-size:24px;color: red;" readonly="true" id="item_value"  name="item_value" type="text"  value="Rs.<?php echo $pay ?>.00" >
           <br>
           
          <button data-ajax="false" id="customButton">Purchase</button>
          <br>
          <br>
       </form>

     <div align="center" id="thankyouPayment">
         
         
         

    <script type="text/javascript">
         jQuery(function($){
           var $form = $('#frmBooking');
           var handler = StripeCheckout.configure({
             key:'pk_test_cp21BcECf4kMMUbSlRlZlsMo',
             token : function(token){
                if(token.id){
                      var x = document.getElementById("message");
                     x.style.display = "block";
                }
             }
           })

         $('#customButton').on('click', function(e) {
           handler.open({
               name : 'Demo Site',
               currency: 'LKR',
               description: $('#item_name').val(),
               amount: $('#item_value').val() * 100
           });

            $(window).on('popstate', function(){
           handler.close();
         });
         });
       });
       </script>

     </div>
      <?php require 'common/footer.php'; ?>
      </div>

   </body>
</html>
