<?php  //-- HTTPS Redirect
  if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
    $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'))
  {
    $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirect);
    exit();
  }
?>

<html>
  <head>
    <title>Gary Boyd's Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=B612|Oswald" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
  </head>
  <body>
    <center><font style="font-size:xx-large;"><p id="descriptor">Gary Boyd, Human</p></font></center>
    <div id="wrapper">
      <div class="nav-container">
        <div id="top-nav">
          <div class="nav-link" name="home">Home</div>
          <div class="nav-link" name="portfolio">Portfolio</div>
          <div class="nav-link" name="resume">Resume</div>
          <div class="nav-link" name="contact">Contact</div>
        </div>
      </div>
      <div id="content">
        <?php
          $PAGE = "main";
          if(isset($_GET['page'])) {
            $PAGE = htmlspecialchars($_GET['page']);
          }
          if(file_exists($PAGE . ".php")) {
            readfile($PAGE . ".php");
          }
          else {
            readfile("main.php");
          }
        ?>
      </div>
    </div>
  </body>
  <script src="/js/scripts.js"></script>
</html>