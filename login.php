
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
      referrerpolicy="no-referrer"          
    />
    <link rel="stylesheet" href="CSS/rubio.css" />
	
  </head>
  <style>
    body{
      background:url("images/bg2.png") center no-repeat;
      /* background-size:100%; */
      /*background-position: 50% 11%;*/
      /* width:auto;
      height:100%; */
       -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;


    }
    
    @media (max-width: 900px){
      
    }
    #imgform{
      background:none;
    }
    #form_title{
      height:100px;
      width:100%;
      background: url("images/amis_tempest.png") center no-repeat;
       background-size:100%;
    }
  </style>
  <body>
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
</html>
</html>
