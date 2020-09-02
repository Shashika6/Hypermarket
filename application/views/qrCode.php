<!DOCTYPE html>
<!--<html lang="en">

    <head>
        <title>QR Scanner</title>
        <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="instascan.min.js"></script>

        <script type="text/javascript">

            var scanner = new Instascan.Scanner({video: document.getElementById('preview')});
            scanner.addListener('scan', function (content) {
                $("#contentText").html(content);
                window.open(content, '_blank');
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

    </head>
    <body>
        <h1>QR Scanner</h1>
        <video id="preview"></video>
        <div id="contentText">
        </div>    </body>   

</html>-->

<!DOCTYPE HTML>  
<html xmlns="http://www.w3.org/1999/xhtml">  
  
<head>  
    <title>JQuery QRCode Example</title>  
    <!--<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
    <meta name="viewport" content="width=device-width, initial-scale=2,user-scalable=no" />-->  
    <style>  
    #qrcode {
  width:160px;
  height:160px;
  margin-top:15px;
}
    </style>  
    <script src="Scripts/jquery-latest.min.js"></script>  
    <script type="text/javascript" src=" Scripts/qrcode.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>  
  
<body>  
 <input id="text" type="text" value="https://hogangnono.com" style="width:80%" /><br />
<div id="qrcode"></div> 
  
    <script type="text/javascript">  
    var qrcode = new QRCode("qrcode");

function makeCode () {      
    var elText = document.getElementById("text");
    
    if (!elText.value) {
        alert("Input a text");
        elText.focus();
        return;
    }
    
    qrcode.makeCode(elText.value);
}

makeCode();

$("#text").
    on("blur", function () {
        makeCode();
    }).
    on("keydown", function (e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });
    </script>  
</body>  
</html>