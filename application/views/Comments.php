<!DOCTYPE html>
<html lang="en">

    <head>
        
        <?php require 'common/header.php'; ?>
            <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('resources/css/comments.css'); ?>"/> -->
    
         <style>
             #back{
                  /*padding:5%;*/
                background-color: #62bb46;
            }
            .formback{  
                margin: 5%;
                    width:70%;
                    border-radius: 1.5em;
                    padding:10%;
                 background-color: white;
            }
            
            #submit{
                  background-color: #62bb46;
                  color:white;
            }
         </style>
    </head>
    
    
    <body>
        <div>
            
         <div data-role="page"   id="demo-page" >
            <?php require 'common/sidebar.php'; ?>
             <?php require 'common/navbar.php'; ?>
             <div   id="demo-page" style="margin:10px 0px;">
                 <span style="color:#62BB46; font-size: 18px; font-style:italic;">Home->
                            <span style="font-size: 20px;">Feedback</span>
             </span>
             </div>
             
             <div data-role="main" class="ui-content" id="back">
                 
             
             
<form class="formback" method="POST" action="<?php echo base_url()?>index.php/myAccount/insertcomments">
                            <div class="ui-field-contain">
                                <h3 style="text-align: center">Tell us how you feel about us</h3>
                                <h4 style="text-align: center">Yours comments help us in improving our service</h4>
    <label for="textinput-1">Full Name:</label>
    <input type="text" name="name" id="name" value="">

    <label for="email-2">Email:</label>
    <input type="email" data-clear-btn="true" name="email" id="email" value="">

             
    <label>Enter Inquiry:</label>
    <input type="text" name="inquiry" id="inquiry" value="">
 

	
    <label>Details:</label>

    <textarea name="details" id="details"></textarea>
<br>
		           <button id="submit" formaction="<?php echo base_url()?>index.php/myAccount/insertcomments" >Submit</button>
    </div>  
 <?php
                            foreach($posts as $row)
                            {
                                ?>
    <div class="ui-field-contain">    

    <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" style="width:50px">
   
     <label style="text-align: left"><?php echo $row->name;?></label>    
     <label style="text-align: left"><u><?php echo $row->inquiry;?></u></label> 
    
       <label style="text-align: right"><?php echo $row->details;?></label>
      
     
    </div>
  
              <?php }
              
              ?>
     
    
     
                    </form>


             </div>
       <?php require 'common/footer.php'; ?>
            </div>
            </div>
    </body>
  
</html>