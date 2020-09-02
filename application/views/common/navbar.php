<div data-role="header" style="width: 100%; height:auto;background-color: #fff; overflow: hidden;">
    <div class="ui-block-a" style="width: 10%">
        <div class="ui-body ui-body-d">
            <a style="color: #62bb46; font-size: 22px; margin: 5px;" href="#sidebar">
                <i style="margin-top: 10px;" class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <div class="ui-block-b" style="width: 60%">
        <div class="ui-body ui-body-d">
            <a href="<?=base_url()?>index.php/home" data-ajax="false">
                <img src="<?=base_url()?>resources/images/navbar-logo.png" alt="logo" style="width: 200px;">
            </a>            
        </div>
    </div>
    <div class="ui-block-c" style="width: 30%">
        <div class="ui-body ui-body-d" style="float: right;">
          
          <?php
            if(!$this->session->has_userdata('Id')){
            ?>

           <a id="navRight" href="<?=base_url()?>index.php/login/signin" data-ajax="false" style="text-decoration: none; color: #828282;">
            Login
            </a>
            <a id="navRight" href="#" style="text-decoration: none; color: #828282;">/</a>
            <a id="navRight" href="<?=base_url()?>index.php/login" data-ajax="false" style="text-decoration: none; color: #828282;">
            Register
            </a>

            <?php
            } else {
            ?>
            
             <a id="navRightLogout" href="<?=base_url()?>index.php/login/logout" data-ajax="false" style="text-decoration: none; color: #828282;">
            logout
            </a>

            <?php
            } 
            ?>

           <a href="<?=base_url()?>index.php/cart" data-ajax="false" style="text-decoration: none; color:#000; padding-right: 16px">
               <span>
                    <i class="fa fa-shopping-cart" id="navRightBadge"></i>
                    <span class="badge"  id="navRightBadge">0</span>
                </span>
           </a>
           
        </div>
    </div>

     <div class="ui-body" style="margin-top: 0;padding-top: 0;margin-bottom: 0;padding-bottom: 0">
      <form action="<?=base_url()?>index.php/search" method="GET" id="searchForm" data-ajax="false">
       <input type="search" name="where" id="search-basic" />
      </form>
     </div>

</div>
<script type="text/javascript">

</script>
<style>
    .badge {
      background: #62bb46;
      color: #fff;
      padding: 1px 5px;
      position: absolute;
      border-radius: .8em;
      border: 2px solid #fff;
    }

    #navRight{
      font-size: 10px;
    }
    #navRightLogout{
      font-size: 14px;
    }
    #navRightBadge{
      font-size: 14px;
    }
    @media all and (min-width: 426px){
        #navRight{
            font-size:18px;
        }
        #navRightLogout{
          font-size: 18px;
        }
          #navRightBadge{
        font-size: 16px;
      }
    }
</style>