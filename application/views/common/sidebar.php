<div data-role="panel" id="sidebar" data-theme="a" data-display="overlay">
	<ul data-role="listview" style="height:100%;">
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/home">Home</a></li>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/store">Store</a></li>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/promotions">Promotions</a></li>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;"  data-ajax="false"  href="<?=base_url()?>index.php/favourite">Favourites</a></li>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/cart">Cart</a></li>
		<?php
            if(!$this->session->has_userdata('Id')){
        ?>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/login/signin">Login / Register</a></li>
		<?php
        	}
        ?>
        <?php
            if($this->session->has_userdata('Id')){
        ?>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/myAccount">My Account</a></li>
		<?php
           }
        ?>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/scan/scanme">Scan me</a></li>
		<li style="height: 75px;"><a class="ui-btn" style="height: 75px;" data-ajax="false"  href="<?=base_url()?>index.php/contact">Contact us</a></li>
	</ul>
</div>

<script type="text/javascript">
	$( document ).on( "pagecreate", "#page", function() {
	    $( document ).on( "swiperight", "#demo-page", function( e ) {
	        if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
	            if ( e.type === "swiperight" ) {
	                $( "#left-panel" ).panel( "open" );
	            }
	        }
	    });
	});

</script>

