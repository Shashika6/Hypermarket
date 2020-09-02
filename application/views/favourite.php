<!DOCTYPE html>
<html lang="en">

    <head>
        <?php require 'common/header.php'; ?>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="<?=base_url()?>resources/javascript/sendEmail.js"></script>

        <style>
           * {
            background-color: #fff;
           }
           #productCard{
            width: 50%;
            }
            @media all and (max-width: 426px){
                #productCard{
                    width: 100%;
                }
            }
        </style>
        

    </head>
    <body>
        <div data-role="page"> 
            <?php require 'common/sidebar.php'; ?>
	        <?php require 'common/navbar.php'; ?>
            
            <div data-role="main" class="ui-content">
             	<span style="color:#62BB46; font-size: 18px; font-style:italic; ">Home->
                    <span style="font-size: 20px;">Favourites</span>
                    <!-- <span style="font-size: 20px;float: right;">
                        <a style="border:1px solid #62bb4675; border-radius: 16px;padding: 2px 4px; text-decoration: none; color: #62bb46;" href="#" data-ajax="false"><i class="fa fa-share"></i></a>
                    </span> -->
                    
                </span>

                <div class="ui-grid-a" id="favouritesDiv">
                    <?php
                    if(!$this->session->has_userdata('Id')){
                    ?> 
                    <h5 style="height: 60px;">
                        <a href="<?=base_url()?>index.php/login/signin" data-ajax="false"> Login</a> to View Favourites.
                    </h5>
                    <?php
                    }
                    ?>
                    <?php
                    if(!isset($favoItemDetails) || !count($favoItemDetails)>0){

                    } else {
                        foreach($favoItemDetails as $item){
                    ?>
                    <div class="ui-block-b card" style="border: #6767674d 1px solid; margin: 10px 0px" id="productCard">
                        <div class="">
                            <div class="ui-grid-a">
                                <div class="ui-block-b"  style="padding:5px;">
                                    <img src="<?=base_url()?><?=$item->getImage()?>" alt="img" style="margin: 20px 10px; width:120px; height: 120px;">
                                </div>
                                <div class="ui-block-b"  style="padding:5px;">
                                    <h4 style="height: 60px;">
                                        <a style="text-decoration:none; color: #000;" href="<?=base_url()?>index.php/Store/viewItem?ID=<?=$item->getId()?>" data-ajax="false"> <?=$item->getProductname()?></a>
                                    </h4>
                                    <form>
                                        <a style="font-size:22px; float: right;  margin: 10px;border:1px solid #62bb4675; border-radius: 16px; padding: 2px 4px; text-decoration: none; color: #62bb46;" href="javascript:shareAction('<?= $this->session->userdata('Email'); ?>','<?=$item->getProductname()?>','<?=$item->getId()?>')" data-ajax="false"><i class="fa fa-share"></i></a>
                                        <!-- <input type="image" style="float: right; width: 28px; height: 28px; margin: 15px 10px 10px 10px;" src="<?=base_url()?>resources/images/redHeart.png" alt="Favourite"> -->
                                        <a style=" text-decoration: none;float: right; width: 28px; height: 28px; margin: 15px 10px 10px 10px;" onclick="javascript:removeAction(<?=$item->getId()?>);"><img style="width: 28px; height: 28px;" alt="Favourite" src="<?=base_url()?>resources/images/redHeart.png"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <?php
                        }
                    }
                    ?>
                </div>
                
            </div>

            <?php require 'common/footer.php'; ?>
            </div>


    <script type="text/javascript">
        
        function shareAction(email,productName,id){
            var sendTo = email;
            sendEmail(sendTo, productName, id);
        }

        function toast(message) {
            var $toast = $('<div class="ui-loader ui-overlay-shadow ui-body-e ui-corner-all"><h3>' + message + '</h3></div>');

            $toast.css({
                display: 'block', 
                background: '#fff',
                opacity: 0.90, 
                position: 'fixed',
                padding: '7px',
                'text-align': 'center',
                width: '270px',
                left: ($(window).width() - 284) / 2,
                top: $(window).height() / 2 - 20
            });

            var removeToast = function(){
                $(this).remove();
            };

            $toast.click(removeToast);

            $toast.appendTo($.mobile.pageContainer).delay(2000);
            $toast.fadeOut(400, removeToast);
        }

       function removeAction(productID) {
        $.ajax({
          method: "GET",
          url: "<?=base_url()?>index.php/Favourite/removeFromFavorites",
          data: { productID: productID }
        }) .done(function( msg ) {
            $("#favouritesDiv").load(location.href+" #favouritesDiv");
            toast("Removed from favourites")
          });
               }

    </script>
    </body>

</html>