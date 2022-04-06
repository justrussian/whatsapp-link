<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WA</title>
</head>
<body class="" onload="myWhatsappFunction()">
  <a id="whatsapp-btn" class="" target="_blank">Whatsapp</a>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.3/mobile-detect.min.js"></script>
  <script>
    var whatsapp_number = "<?php settype($_GET['phone'], 'integer'); echo isset($_GET['phone']) ? (int) $_GET['phone'] : ''; ?>";
    function myWhatsappFunction() {
      var md = new MobileDetect(window.navigator.userAgent);
      if (md.mobile()) {
        document.getElementById("whatsapp-btn").href = "whatsapp://send?phone=" + whatsapp_number;
      } else {
        document.getElementById("whatsapp-btn").href = "https://web.whatsapp.com/send/?phone=" + whatsapp_number;        
      }
      location.href = document.getElementById("whatsapp-btn").href;
    };
  </script>
</body>
</html>
