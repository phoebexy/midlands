<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="js/main.js"></script>
    <script src='js/jquery-3.3.1.min.js'></script>
  </head>
<body>

<div class="header">
<h1>EXPONDENT</h1>
<h5>ALWAYS READY TO ASSIST</h5>
<h5>+44 741 834 3330</h5>
</div>

<div class="broadcast">
<h2>EMERGENCY SMS BROADCAST</h2>
<form action="http://51.15.114.121:1880/form" class="broadcast_form" method="post">
  <p>This SMS message will be sent to all listed phone numbers. Please use responsibly.</p>
  <p>Message</p><input type="text" name="message"><br>
  <p>Phone Number(s)</p><input type="text" name="dest"><br>
  <input class="button" type="submit" value="SEND">
</form>
</div>

<div class="helpline">
  <?php
  $html = "<h2>HELPLINE MESSAGES</h2>";
  if ($handle = opendir("./entries/")) {
    while (false !== ($entry = readdir($handle))) {
      if ($entry != "." && $entry != "..") {
        $html .= "
        <div class="helpline_entry" id="$entry">
          <p>$entry</p>
          <audio controls><source src="$entry" type="audio/mp3">
        </div>
        ";
      }
    } closedir($handle);
  } else {
    $html .= "<p>Error reading files from server</p>";
  } echo $html;
   ?>
  <h2>HELPLINE MESSAGES</h2>
  <div class="helpline_entry">
    <p>PHONE NUMBER</p>
    <audio controls><source src="" type="audio/wav">
  </div>
  <div class="helpline_entry">
    <p>PHONE NUMBER</p>
    <audio controls><source src="" type="audio/wav">
  </div>
  <div class="helpline_entry">
    <p>PHONE NUMBER</p>
    <audio controls><source src="" type="audio/wav">
  </div>
  <div class="helpline_entry">
    <p>PHONE NUMBER</p>
    <audio controls><source src="" type="audio/wav">
  </div>
</div>

<div class="footer">
  <label>Developed by Ben, Phoebe, Alistair and Jess for Hack The Midlands 2018</label>
</div>
</body>
</html>