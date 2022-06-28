
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DICT-ETC</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"          
    />
    <link rel="icon" href="images/DICT.png">
    <link rel="stylesheet" href="CSS/avocado.css" />
	  <style>
      .navbar .ac-container label,  
      .navbar .ac-container label a,  
      .navbar .ac-container article a{
        transition: 0.1s ease;
        
        
      }
       .navbar .ac-container label:after,   
       .navbar .ac-container label a:after,  
       .navbar .ac-container article a{
    
        padding-bottom:10px;
     
      }
       .navbar .ac-container label:hover,
       .navbar .ac-container article a:hover{
        border-top: 2px solid rgb(45, 44, 46);
        border-bottom: 2px solid rgb(45, 44, 46);
        padding-bottom:5px;
       
       
      }
     
    </style>
  </head>
  <body>
  <img class="logo lg1" src="images/drrmd1.png" >
          <img class="logo" src="images/dictlogo1.png">
<nav class="navbar">
      
        <?php
       $P="";//this is for the page name
        if(isset($_SESSION["auth"])){
          echo "<div class='navbar-container'>";
         echo " <input type='checkbox' name='' id='nbrger'>";
         echo " <div class='hamburger-lines'>";
         echo "      <span class='line line1'></span>";
         echo "      <span class='line line2'></span>";
         echo "      <span class='line line3'></span>";
         echo " </div>";
       /*   echo " <ul class='menu-items'>";
         echo "     <li><a href='#'>Home</a></li>";
         echo "     <li><a href='officesentry'>Office Data Entry</a></li>";
         echo "     <li><a href='officialsentry'>Officials</a></li>";
         echo "     <li><hr style='width:80%; margin-bot  tom:1px'></li>";
         echo "     <li><a href='assets_mgt'>Assets Management</a></li>";
         echo "     <li><a href='assets'>Assets Data Entry</a></li>";
         echo "     <li><a href=''>Assets Map</a></li>";
         echo "     <li><hr style='width:80%; margin-bot  tom:1px'></li>";
         echo "     <li><a href='Logout'>Logout</a></li>"; */
              
         
         echo "<section class='ac-container'>";
         echo   "<div>";
         echo       "<input id='ac-1' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-1' id='home'><a href=''>Home</a></label>";
         echo  "</div>";
         echo   "<div>";
         echo       "<input id='ac-2' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-2'>Assets</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='assets'>Assets Data Entry</a>";
         echo           "<a href='assets_mgt'>Assets Management</a>"; 
         echo           "<a href=''>Assets Map</a>";
         echo       "</article>";
         echo   "</div>";
         echo   "<div>";
         echo       "<input id='ac-3' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-3'>Office Management</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='officesentry'>Office Data Entry</a>";
         echo           "<a href='officialsentry'>Personnel Data Entry</a>"; 
         echo           "<a href='loginaccount'>Personnel's User Account</a>"; 
         echo       "</article>";
         echo   "</div>";
         echo   "<div>";
         echo       "<input id='ac-4' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-4'><a href='Logout'>Logout</a></label>";
         echo  "</div>";
         echo "</section>";
        }
        ?>
            
      </div>
  </nav>

    <section class="showcase-area" id="showcase">
      <br>
      <div class="showcase-container">
        <h1 class="main-title" id="home">DICT-DRRM FOCALS</h1>
        <p class='header'>Shared Assets Management Portal.</p>
      </div>
    </section>
      <script>
     
        $(document).ready(function(){
          function hidelogo(){
            var lenght=$(window).width();
           if(lenght<570){
              if ($("#nbrger").is(":checked")==true){
                $("img.lg1").hide();
                
              }
              else{
                $("img.lg1").delay(9000).show();
              }
           
           }
           if(lenght<434){
              if ($("#nbrger").is(":checked")==true){
                  $("img.logo").hide();
                  
                }
                else{
                  $("img.logo").delay(800).show();
                }
           }
          }
          $("#nbrger").change(function(){
            hidelogo();
          
          });
          $("#home").click(function(){
            window.location="home.php";
          });
          $(window).resize(function(){
            var lenght=$(window).width();
         
            if(lenght<=570 && lenght >434){
              if ($("#nbrger").is(":checked")==true){
                $("img.lg1").hide();
              }
              else{
                $("img.lg1").delay(800).show();
              }
            }
            if(lenght>570){
              $("img.lg1").show();
            }


          });
        });
     
      </script>