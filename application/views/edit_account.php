<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/account.css'); ?>"/>
          <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/popup.css'); ?>"/>
        <script>
$(document).ready(function(){
  $(":button").css("background-color", "#62bb46");
    $(":button").css("color", "white");


});
</script>
    <style>
 .popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 260px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 1%;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  right:50%;
  margin-left: -130px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

    </style>

    </head>


  <body>
      <div data-role="page"  class=back id="demo-page" >
          <?php require 'common/sidebar.php'; ?>
        <?php require 'common/navbar.php'; ?>
<h1 style="text-align:center">Edit Account</h1>

<form    id="account" method=POST action="<?php echo base_url()?>index.php/myAccount/saveChanges">

          <div style="text-align: center;">

          <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:200px"> <br> <br>
          </div>
 
                <?php foreach($data as $row)  {?>
   
           <div style="text-align: center;">
               
     
          <h3 >Username : </h3>
            <input type="text" disabled="disabled" data-clear-btn="true" name="username" id="username" value="<?php echo $row->Username?>">
         
         
          <br>
           
          <h3 >Full Name :  </h3>
         <input class="lg-input" type="text" data-clear-btn="true" name="name" id="name" value="<?php echo $row->Name?>">
          <br>
          <h3>Password : </h3>
     
        <input hidden="true" onclick="myFunction()"class="lg-input" type="password" name="password" placeholder="Enter User password" id="txtPassword" value="<?php echo $row->Password?>">
         <div class="popup">
  <span class="popuptext" id="myPopup">
  <h4>Change Password</h4>
 
  <label>Enter Password:</label>
           <input type="password" name="pass1" id="pass1" data-theme="a">
            <label for="pw">Re-Enter Password:</label>
            <input type="password" name="pass2" id="pass2" data-theme="a">
            <button formaction="<?php echo base_url()?>index.php/myAccount/changePass" id="saver" onclick="hide()"class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Save</button>
 <button  data-ajax="false" formaction="<?php echo base_url()?>index.php/myAccount/editAccount" id="hider" onclick="hide()"class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">Cancel</button>
 
  </span>  
       </div>
          <br>
          <h3>E-Mail :  </h3>
         <input class="lg-input" type="email" data-clear-btn="true" name="email" id="email" value="<?php echo $row->Email?>">

          <br>
          <h3>Mobile No. : </h3>
              <input class="lg-input" type="text" data-clear-btn="true" name="mobileno" id="mobileno" value="<?php echo $row->MobileNo?>">
          <h2></h2>
           <button   class="greenbutton" style="text-align: center;" type="submit">Save</button>
     
          </div>
   
       </form>
<?php require 'common/footer.php'; ?>
</div>
 
 
 
 

       
       <script>
// When the user clicks on <div>, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
window.close();
}
function hide() {
  var popup = document.getElementById("hider");
  popup.classList.toggle("hide");
window.close();
}
</script>
       






   <?php   } ?>






  </body>
  </html>