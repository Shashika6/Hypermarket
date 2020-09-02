<!DOCTYPE html>
<html>
<head>
<?php require 'common/header.php'; ?>

<title>QR Scanner</title>        
<script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>

<script src="<?php echo base_url('resources/javascript/instascan.min.js'); ?>"></script>  


 
</head>

<body>
    <div data-role="page" id="page">
    <?php require 'common/sidebar.php'; ?>
	         <?php require 'common/navbar.php'; ?>
       <div data-role="main" class="ui-content">
         	<span style="color:#62BB46; font-size: 18px; font-style:italic; ">Home-><span style="font-size: 20px;">QR Scanner</span></span>
         </div>
        <video id="preview"></video>
        
            <a id="contentText" href=""></a>
                <script type="text/javascript">

                    var scanner = new Instascan.Scanner ({ video: document.getElementById('preview') });
                    scanner.addListener ('scan', function (content) {
                    $("#contentText").html(content);
                    window.open (content, '_blank');
                    });
                    Instascan.Camera.getCameras().then(function (cameras) {
                    if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                    } else {
                    console.error('No cameras found.');
                    }
                    }).catch(function (e) {
                    console.error(e);
                    });
                    </script>
                    <?php require 'common/footer.php'; ?>
                    </div>
</body>
</html>

<!--<a  href="<?php echo base_url(); ?>index.php/ProfileController/getPerson?userid=<?php echo $cart->getId() ?>">-->