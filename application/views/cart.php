<html>
    
    <head>
        <?php require 'common/header.php' ?>
        <title>Admin Page</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>

        <style>

            .shopping-cart {
  width: 750px;
  height: 423px;
  margin: 80px auto;
  background: #FFFFFF;
  box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
  border-radius: 6px;
 
  display: flex;
  flex-direction: column;
}

	
.title {
  height: 60px;
  border-bottom: 1px solid #E1E8EE;
  padding: 20px 30px;
  color: #5E6977;
  font-size: 18px;
  font-weight: 400;
}
 
.item {
  padding: 20px 30px;
  height: 120px;
  display: flex;
}
 
.item:nth-child(3) {
  border-top:  1px solid #E1E8EE;
  border-bottom:  1px solid #E1E8EE;
}
            body{
                background-color: white;
                
            }

            .back{
                background-color: white;
            }

            hr { 
 
  background-color: #62bb46;
  width: 100%;
} 
          

            .ui-corner-all{
                background-color: #FFFFFF;
                border:#62bb46 important;

                width: 80%;
                height: auto;   
                margin: 1em auto;
                box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
            }
            
            .real{
                padding-left: 50%;
            }
            .sp-quantity {
                width:124px;
                height:42px;
                font-family:"ProximaNova Bold", Helvetica, Arial;
                padding-left: 30%;
                
                
                
            }
            .sp-minus {
                width:40px;
                height:40px;
                padding-top: 0.05%;
                padding-bottom: 0.05%;
                 font-weight: bold;
                 font-size: 30px;
                border:1px solid #e1e1e1;
                float:left;
                text-align:center;
            }
            .sp-input {
                width:40px;
                height:40px;
                border:1px solid #e1e1e1;
                border-left:0px solid black;
                float:left;
                
                 font-weight: bold;
                 font-size: 30px;
            }
            .sp-plus {
                width:40px;
                height:40px;
                border:1px solid #e1e1e1;
                border-left:0px solid #e1e1e1;
                float:left;
                text-align:center;
                 padding-top: 0.05%;
                padding-bottom: 0.05%;
                 font-weight: bold;
                 font-size: 30px;
            }
            .sp-input input {
                width:30px;
                height:34px;
                text-align:center;
                font-family:"ProximaNova Bold", Helvetica, Arial;
                border: none;
            }
            .sp-input input:focus {
                border:1px solid #e1e1e1;
                border: none;
            }
            .sp-minus a, .sp-plus a {
                display: block;
                width: 100%;
                height: 100%;
                padding-top: 5px;
            }

            .title {
                height: 60px;
                border-bottom: 1px solid #E1E8EE;
                padding: 20px 30px;
                color: #5E6977;
                font-size: 18px;
                font-weight: 400;
            }

            .item {
                padding: 20px 30px;
                height: 120px;
                display: flex;
            }

           
            .delete-btn,
            .like-btn {
                display: inline-block;
                Cursor: pointer;
            }
            .delete-btn {
                width: 18px;
                height: 17px;
                background: url(&quot;delete-icn.svg&quot;) no-repeat center;
            }
       .total-price {
                width: 83px;
                padding-top: 27px;
                text-align: center;
                font-size: 16px;
                color: #43484D;
                font-weight: 300;
            }


            .quantity {
                padding-top: 20px;
                margin-right: 60px;
            }
            .quantity input {
                -webkit-appearance: none;
                border: none;
                text-align: center;
                width: 32px;
                font-size: 16px;
                color: #43484D;
                font-weight: 300;
            }

           .delete {
                width: 30px;
                height: 30px;
                background-color: #E1E8EE;
                border-radius: 6px;
                border: none;
                cursor: pointer;
            }
            
            .submit {
               
                width:100%;
                font-size: 25px;
                font-family:sans-serif;
                font-weight: bold;
                background-color: #62bb46;
                color: white;
                border-radius: 6px;
                border: none;
                cursor: pointer;
                 position: relative;
                padding: 4%;
                
            }
            
            .minus-btn img {
                margin-bottom: 3px;
            }
            .plus-btn img {
                margin-top: 2px;
            }

            button:focus,
            input:focus {
                outline:0;
            }
            .tbl{
                width: 100%;   
            }


            .image {
                margin-right: 50px;
            }

            
            .description {
                padding-top: 10px;
                margin-right: 60px;
                width: 115px;
            }

            .description span {
                display: block;
                font-size: 14px;
                color: #43484D;
                font-weight: 400;
            }

            .description span:first-child {
                margin-bottom: 5px;
            }
            .description span:last-child {
                font-weight: 300;
                margin-top: 8px;
                color: #86939E;
            }   

            @media (max-width: 800px) {
                .shopping-cart {
                    width: 100%;
                    height: auto;
                    overflow: hidden;
                }
                .item {
                    height: auto;
                    flex-wrap: wrap;
                    justify-content: center;
                }
                .image img {
                    width: 40%;
                }
                .image,
                .quantity,
                .description {
                    width: 100%;
                    text-align: center;
                    margin: 6px 0;
                }
              
            }

        </style>


        <script>
            var index;
            
            function myFunction(x) {
                index = x.rowIndex;
                //console.log("Row index is: " + x.rowIndex);
            }

            function getqtyplus() {
                console.log(index);
                var x = document.getElementById("tbl");
                var qty = x.getElementsByClassName("quntity-input")[index].value;

                console.log(qty);

                var price = document.getElementsByClassName("real")[index].textContent;


                var itemprice = price * qty;
                console.log(itemprice);
                document.getElementsByClassName('price')[index].innerHTML = itemprice;
                counttotel();
            }

            function getqtymin() {
                console.log(index);
                var x = document.getElementById("tbl");
                var qty = x.getElementsByClassName("quntity-input")[index].value;


                var price = document.getElementsByClassName('real')[index].textContent;


                var itemprice = price * qty;
                console.log(itemprice);
                document.getElementsByClassName('price')[index].innerHTML = itemprice;
                counttotel();

            }




            function counttotel() {
                var sum = 0;
                var table = document.getElementById("tbl");
                var tds = table.getElementsByClassName('price');


                for (var i = 0; i < tds.length; i++) {
                    sum += isNaN(tds[i].innerText) ? 0 : parseInt(tds[i].innerText);
                }

//                for (var i = 1; i < table.rows.length; i++)
//                {
//                    var subprice = isNaN(document.getElementsByClassName('price')[index].textContent) ? 0 : parseInt(document.getElementsByClassName('price')[index].textContent);
//                    console.log(subprice);
//                    sumVal += subprice;
//                }
                
                document.getElementById("total").innerHTML = "Total Price = " + sum;
                document.getElementById("totalPrice").val() = sum;
                //console.log(sumVal);
            }


        </script>
    </head>
    <body>
 <form method="get" action="<?php echo base_url()?>index.php/Cart/purchase">
        <div  class="back" >
            
            <table class="tbl" id="tbl">
                <?php
                if (empty($castval)) {
                    
                } else {


                    if (count($castval) > 0) {


                        foreach ($castval as $cart) {
                            ?>
                            <tr onclick="myFunction(this)" class="item" >

                                <td>
                                    <div class="image">
                                        <img src=<?php echo base_url() . $cart->getImage() ?>>
                                    </div>
                                    <div class="description">
                                        <span><?php echo $cart->getProductname() ?></span>
                                        <span>Rs.<?php echo $cart->getNewprice() ?><snap class="real" hidden><?php echo $cart->getNewprice() ?></snap></span>
                                    </div>                                   
                                    <div class="sp-quantity quantity">
                                        <div class="sp-minus fff" onclick="getqtymin()"> <div class="ddd" href="#">-</div>
                                        </div>
                                        <div class="sp-input">
                                            <input data-role="none" type="text" class="quntity-input" value='<?php echo $cart->getQyt() ?>' />
                                        </div>
                                        <div class="sp-plus fff" onclick="getqtyplus()"> <div class="ddd" href="#" >+</div>
                                        </div>
                                    </div>
                                  </td>
                                <td class="total-price">  
                                    <div class="ctprice"><p>Rs.<span class="price" id="price"> <?php echo $cart->getNewprice()*$cart->getQyt() ?></span></p> </div> 
                                    <hr data-role="none">
                                </td>
                                
                                <td>
                                </td>

                            
        
                            </tr>

                            



                            <?php
                        }
                    }
                }
                ?>
                            
                <?php
                if (empty($castval)) {
                    
                } else {


                    if (count($castval) > 0) {

                        $sum=0;
                        foreach ($castval as $cart) {
                            
                            
                             $cost=$cart->getNewprice()*$cart->getQyt();
                            $sum +=$cost;
                        }
                        
                        ?>
                            
                            

                            
                            
                             <tr class="ui-body ui-body-a ui-corner-all item"><td>
                        <span id="total" name="total">Rs.<?php echo $sum ?>.00</span>
                        <input type="hidden" id="totalPrice" name="totalPrice" value="<?php echo $sum ?>">
                    </td></tr>
                    <?php 

                       }
                   }
                       ?>            
                            
                            
                            
                            
               
            </table>
            <div>
               
                    
                    <button type="submit" id="btnPurchase">Purchase</button>
                            

            </div>
          
        </div>
        </form>

        <script>

    $(".ddd").on("click", function () {

                var $button = $(this);
                var oldValue = $button.closest('.sp-quantity').find("input.quntity-input").val();

                if ($button.text() === "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }

                $button.closest('.sp-quantity').find("input.quntity-input").val(newVal);

            });
            
            



        </script>

    </body>
</html>

















