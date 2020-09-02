<!DOCTYPE html>
<html lang="en">

    <head>


        <?php require 'common/header.php'; ?>

        
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 

        <title>Sign Up</title>

        <style>
             body {
        
        font-family: 'Ubuntu', sans-serif;
             }

            .back{
                background-color: #62bb46;
            }

            input[type=text], input[type=email], input[type=password] {
                border-top: transparent !important;
                border-left: transparent !important;
                border-right: transparent !important;
              
                
            }

            .form-row{
               background-color: #FFFFFF;
        width: 500px;
        height: 850px;
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
        <script>
            $(document).ready(function () {
                $('.js-example-basic-multiple').select2();
            });


        </script>

        <script type="text/javascript">
            function Validate() {
                var password = document.getElementById("txtPassword").value;
                var confirmPassword = document.getElementById("txtConfirmPassword").value;
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            }
        </script>

        <div data-role='page' class="back" >
            <?php require 'common/sidebar.php'; ?>
             <?php require 'common/navbar.php'; ?>

            <?php
            echo form_open('Login/userSignup');

            echo validation_errors();
            if (isset($success))
                echo '<p>' . $success . '</p>';
            ?>




            <div class="form-row" style="background-color: white ">
                <div class="form">
                    
                    
<!--                       <div class="icon">
      <img src="<?php echo base_url('/resources/images/footer-logo.png'); ?>" id="icon" alt="User Icon" />
    </div>
                <header class="sign">-->





                    <h4 class="card-title mt-2">Welcome</h4>




                </header>
                


                <div>
                    <label>Full Name : </label>
                    <input class="lg-input" type="text" name="fname"  placeholder="Enter Full Name" required style=" border-top: transparent !important
                border-left: transparent !important
                border-right: transparent !important">
                </div> 


                <div>
                    <label>Username :</label>                         
                    <input class="lg-input" type="text" name="uname" placeholder="Enter Userame " required>
                </div> 




                <div>
                    <label>Email address :</label>
                    <input class="lg-input" type="email" name="email" placeholder="Enter email address" required>  
                </div>

                <div>
                    <label>Contact No. : </label>
                    <input class="lg-input" type="text"  name="moblieno" placeholder="Enter Contact No" required>

                </div>




                <div>
                    <label>Create password</label>

                    <input class="lg-input" type="password" name="password" placeholder="Enter User password" id="txtPassword" required>

                </div>

                <div>
                    <label>Confirm Password : </label>
                    <input class="lg-input" type="password"   name="cpassword" placeholder="Re-Enter password" id="txtConfirmPassword" required>

                </div>
          




            <div>
                <button type="submit" class="btn btn-primary btn-block" onclick="return Validate()"> Register  </button>
            </div> <!-- form-group// -->      

        </form>

        <div class="border-top card-body text-center">Already have an account <a href="<?php echo base_url()?>index.php/Login/signin">Sign In</a></div>
          </div>
    </div>



<?php require 'common/footer.php'; ?>
        </div>



</body>

</html>