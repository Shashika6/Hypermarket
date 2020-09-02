<!DOCTYPE html>
<html lang="en">

    <head>



        <?php require 'common/header.php'; ?>

 

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
        height: 1000px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
       
            }
          
    
   .form {
        padding: 40px;
    }
     
 

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
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
            
        </script>

        <div data-role='page' class="back" >
            <?php
        if (empty($proval)) {
            
        } else {
            if (count($proval) > 0) {
            foreach ($proval as $pro) {
                    ?>
            <div class="form-row" style="background-color: white ">
                <div class="form">                           
                <header class="sign">
      <h1 class="card-title mt-2">You Won</h1>
                </header>
<div class="card">
  <img src="<?php echo $pro->getImg() ?>"  style="width:100%">
  <h1> <?php echo $pro->getItem() ?></h1>
  <p class="price"><?php echo $pro->getOldPrice() ?></p>
  <p class="price"> <?php echo $pro->getPromo() ?></p>
  <p class="price"> <?php echo $pro->getNewPrice() ?></p>
  <p class="price"> <?php echo $pro->getCode() ?></p>
  <p>show promocode and get your promotion</p>
  
</div>
      </div>
    </div>


               <?php
                }
            }
        }
        ?>

        </div>

<footer>
 
    
  </footer>



</body>

</html>