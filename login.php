
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DICT-ETC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer">
    <?php clearstatcache(true,'CSS/rubio.css'); ?>
    <link rel="stylesheet" href="CSS/rubio.css?rnd=132">
    <link rel="stylesheet" type="text/css" href="CSS/landing-page.css?v=<?php echo filemtime('CSS/landing-page.css'); ?>">

  </head>
  <body>
    <header>
      <h2 class='logo-login'>DRRMF Shared Assets Management Portal</h2>
      <nav class="navigation">
        <a href="#">About</a>
        <a href="#">Contact</a>
        <button class="btnLogin-popup">Login</button>
      </nav>
    </header>
    <?php
  
    include "ALGO/codes.php";
   // $_SESSION["auth"]=false;

    if(isset($_SESSION["auth"])){
      if($_SESSION["auth"] &&   $_SESSION["status"]=="active" ){
        header("Location:home.php");
      }
    }
    
    
    include "loginform.php";//content
    
    ?>
  <!-- <img src="images/DICT.png" style="height:100%;margin-left:22%;z-index:-2;position:absolute" > -->
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="JS/flexi.js"></script>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
</html>
