<!DOCTYPE html>
<html lang="en">
 
<head>
     
        <?php require 'common/header.php'; ?>
  <title>Sign in</title>
  
  <style>
             body {
        
        /*font-family: 'Ubuntu', sans-serif;*/
             }

            .back{
                background-color: #62bb46;
            }

          input[type=text], input[type=email], input[type=password] {
                border-top: transparent important;
                border-left: transparent important;
                border-right: transparent important;
              
                
            }

            .form-row{
               background-color: #FFFFFF;
        width: 85%;
        height: 120%;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
       
            }
            
            .sign {
        padding-top: 25%;
        color: black;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
   .form {
        padding: 40px;
    }
     
    
 
    #icon {
      padding-left: 15%;
  width:30%;
  position:Absolute;
}
    
        </style>
  
  
  
</head>

<body>
<div data-role='page' class="back" >
    <?php require 'common/sidebar.php'; ?>
           <?php require 'common/navbar.php'; ?>
    
    <div class="form-row" style="background-color: white ">
                <div class="form">
                    
                    <div class="icon">
      <img src="<?php echo base_url('/resources/images/footer-logo.png'); ?>" id="icon" alt="User Icon" />
    </div>
                    
                    
                <header class="sign">
     <h4 class="card-title mt-2">Hello,</h4>
     
     
      </header>
    




<?php echo validation_errors(); ?>
    

     
     
     


<?php echo form_open('Login/userSignin'); ?>


<!--data-role="none"-->
  
   <div >
       <input type="text" class="fadeIn second" name="username" id="login" placeholder="Enter username" >
   </div>
     <div>
    <input  type="password" class="fadeIn third" name="password" id="password" placeholder="Enter password">
     </div>
     <div>
     <input type="submit" class="fadeIn fourth" value="Log In">
    
     </div>

  

   
  
  <div id="formFooter">
  
  <!-- <p class="underlineHover">Forgot Password <a href="<?php echo base_url()?>index.php/login/">Sign Up</a></p> -->
  <p class="underlineHover">Don't have an account <a href="<?php echo base_url()?>index.php/login">Sign Up</a></p>
  </div>




                </form>

             
    </div>
  </div>
<?php require 'common/footer.php'; ?>

    
      
</div>
   

    
</body>
 
</html>