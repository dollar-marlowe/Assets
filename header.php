<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
   
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
    <link rel="stylesheet" href="CSS/safiro.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <!-- <link rel="stylesheet" href="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.css" /> -->
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
      .navbar {
        height:9vh;
      }
      .navbar-container{
        margin:0;
        margin-top:13px;
      }

      
/*This si for the pop-up modal*/
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 9500; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */

/* The Close Button */
 .logout {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.logout :hover,
.logout :focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

      .modal {
  display: none;
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
         echo " <input type='checkbox' name='' id='nbrger' >";
         echo " <div class='hamburger-lines'>";
         echo "      <span class='line line1'></span>";
         echo "      <span class='line line2'></span>";
         echo "      <span class='line line3'></span>";
         echo " </div>";
       /*   echo " <ul class='menu-items'>";
         echo "     <li><a href='home'>Home</a></li>";
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
         echo       "<input id='ac-6' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-6'>My <u>P</u>rofile</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='userprofile'><u>V</u>iew Profile</a>";
         echo           "<a href='editprofile'>E<u>d</u>it Profile</a>"; 
         echo       "</article>";
         echo   "</div>";

         echo   "<div>";
         echo       "<input id='ac-1' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-1' id='home'><a href=''><u>H</u>ome</a></label>";
         echo  "</div>";

         echo   "<div>";
         echo       "<input id='ac-2' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-2'><u>A</u>ssets</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='assets'>Assets <u>D</u>ata Entry</a>";
         echo           "<a href='assets_mgt'>A<u>s</u>sets Management</a>"; 
         echo           "<a href='assetsmap'>Assets <u>M</u>ap</a>";
         echo       "</article>";
         echo   "</div>";

         echo "<div>";
         echo       "<input id='ac-5' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-5'><u>E</u>TC</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='disaster_edit'><u>H</u>azards Management</a>";
         echo           "<a href='risk_management'><u>R</u>isk Management</a>
                          <a href=''>ETC <u>D</u>eactivation</a>"; 
         echo       "</article>";
         echo   "</div>";
        

        
         echo   "<div>";
         echo       "<input id='ac-3' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-3'><u>O</u>ffice Management</label>";
         echo       "<article class='ac-medium'>";
         if( $_SESSION["auth_level"]>2){
         echo           "<a href='officesentry'>Office Data <u>E</u>ntry</a>";
         echo           "<a href='officialsentry'><u>P</u>ersonnel Data Entry</a>"; 
         echo           "<a href='loginaccount'>Personnel's <u>U</u>ser Account</a>";           
        }
     

         echo       "</article>";
         echo   "</div>";
         echo   "<div>";
         echo       "<input id='ac-4' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-4'><a href='Logout'><u>L</u>ogout</a></label>";
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
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content big">
    <span class="close">&times;</span>
   <br> <div id="popmsg"></div>
  </div>
  </div>

  <div id="myModal" class="modal2">

  <div class="modal-content ">
    <span class="logout">&times;</span>
   <br> <div id="popmsg1"></div>
  </div>

</div>
      <script>
          var idleMax = 20; // Logout after 10 minutes of IDLE
          var idleTime = 0;
          setInterval(function(){
            idleTime = idleTime + 1;
           // 
           //alert("called");
            if (idleTime >= idleMax) { 
             // alert("called");
              Popup_modal_show2("You have been automatically logged out due to inactivity. Thank you.",600);

              $.post("AJAX/mycodes.php",{
                command: "logout2"
              }, function(data){
                
              });
            
                       
            }
          }, 60000); 
     
        $(document).ready(function(){
          $(".modal2").hide();
        

         $(".logout").click(function(){
          $(".modal2").delay(100).fadeOut(function(){
            window.location="logout.php";
          });
        
         });
         
           // 1 minute interval    
          $( document ).mousemove(function( event ) {
              idleTime = 0; // reset to zero
              //alert("Test");
         });
        
         $( document ).scroll(function( event ) {
          //alert("scroll");
              idleTime = 0; // reset to zero
              //alert("Test");
         });
         $( document ).click(function( event ) {
          //alert("scroll");
              idleTime = 0; // reset to zero
              //alert("Test");
         });

        // count minutes
         

        

          $(".modal").hide();
            $("body").click(function(e){
            var target = $(e.target), article;
              if(!target.is(".navbar-container") && !target.is("#nbrger")  && !target.is(".hamburger-lines")  && !target.is(".navbar-container .ac-container")  && !target.is(".navbar-container .ac-container div")  && !target.is(".navbar-container .ac-container div label ")   && !target.is(".navbar-container .ac-container div article")  && !target.is(".navbar-container .ac-container div article a") &&  !target.is(".navbar-container .ac-container div input ")  &&  !target.is(".navbar-container .ac-container div label a") ){
              // alert( $("#nbrger").is(":checked"));
              $("#nbrger").prop("checked",false);
                        
                }
            });

            $(".navbar-container .ac-container div #ac-3").click(function(){
              if($(".navbar-container .ac-container div #ac-3").is(":checked")){
                $(".navbar-container .ac-container div #ac-2").prop("checked",false);
                $(".navbar-container .ac-container div #ac-5").prop("checked",false);
                $(".navbar-container .ac-container div #ac-6").prop("checked",false);
              }
            });

            $(".navbar-container .ac-container div #ac-2").click(function(){
              if($(".navbar-container .ac-container div #ac-2").is(":checked")){
                $(".navbar-container .ac-container div #ac-3").prop("checked",false);
                $(".navbar-container .ac-container div #ac-5").prop("checked",false);
                $(".navbar-container .ac-container div #ac-6").prop("checked",false);
              }
            });

            $(".navbar-container .ac-container div #ac-5").click(function(){
              if($(".navbar-container .ac-container div #ac-5").is(":checked")){
                $(".navbar-container .ac-container div #ac-3").prop("checked",false);
                $(".navbar-container .ac-container div #ac-6").prop("checked",false);
                $(".navbar-container .ac-container div #ac-2").prop("checked",false);
              }
            });
            $(".navbar-container .ac-container div #ac-6").click(function(){
              if($(".navbar-container .ac-container div #ac-6").is(":checked")){
                $(".navbar-container .ac-container div #ac-3").prop("checked",false);
                $(".navbar-container .ac-container div #ac-2").prop("checked",false);
                $(".navbar-container .ac-container div #ac-5").prop("checked",false);
              }
            });
            $(document).keydown(function(e) {
              idleTime = 0;
            });

            $(document).keyup(function(e) {
              idleTime = 0;
                if (e.key === "Escape") { // escape key maps to keycode `27`
                    // <DO YOUR WORK HERE>
                    $("#nbrger").prop("checked",false);
                }
                //alert(e.key);
                if (e.key === "Home") { // escape key maps to keycode `27`
                    // <DO YOUR WORK HERE>
                    if($("#nbrger").is(":checked")){
                      $("#nbrger").prop("checked",false);
                    }else{
                      $("#nbrger").prop("checked",true);
                    }
                
                }
                var id_office=".navbar-container .ac-container div #ac-3";
                  var id_assets=".navbar-container .ac-container div #ac-2";
                  var id_etc=".navbar-container .ac-container div #ac-5";
                  var id_profile=".navbar-container .ac-container div #ac-6";
                if($("#nbrger").is(":checked")){
                 
                    if (e.key === "h" || e.key === "H"){
                      window.location="home.php";
                    }

                    if (e.key === "A" || e.key === "a"){
                     $(id_office).prop("checked",false);
                     $(id_etc).prop("checked",false);
                     $(id_profile).prop("checked",false);
                        if($(id_assets).is(":checked")){
                          $(id_assets).prop("checked",false);
                        }else{
                          $(id_assets).prop("checked",true);
                        }
                    }
                    if (e.key === "P" || e.key === "p"){
                     $(id_office).prop("checked",false);
                     $(id_assets).prop("checked",false);
                     $(id_etc).prop("checked",false);
                        if($(id_profile).is(":checked")){
                          $(id_profile).prop("checked",false);
                        }else{
                          $(id_profile).prop("checked",true);
                        }
                    }
                   
                    if (e.key === "O" || e.key === "o"){
                      $(id_assets).prop("checked",false);
                      $(id_etc).prop("checked",false);
                      $(id_profile).prop("checked",false);
                        if($(id_office).is(":checked")){
                          $(id_office).prop("checked",false);
                        }else{
                          $(id_office).prop("checked",true);
                        }
                    }
                    if (e.key === "E" || e.key === "e"){
                      $(id_assets).prop("checked",false);
                      $(id_office).prop("checked",false);
                      $(id_profile).prop("checked",false);
                        if($(id_etc).is(":checked")){
                          $(id_etc).prop("checked",false);
                        }else{
                          $(id_etc).prop("checked",true);
                        }
                    }
                 
                    if (e.key === "l" || e.key === "L"){
                      window.location="logout.php";
                    }
                    
                    if($(id_assets).is(":checked")){
                      
                        if (e.key === "D" || e.key === "d"){
                        window.location="assets.php";
                        }
                        if (e.key === "s" || e.key === "S"){
                        window.location="assets_mgt.php";
                        }
                        if (e.key === "m" || e.key === "M"){
                        window.location="assetsmap.php";
                        }
                    }
               
                    if($(id_office).is(":checked")){
                      
                        if (e.key === "E" || e.key === "e"){
                        window.location="officesentry.php";
                        }
                        if (e.key === "p" || e.key === "P"){
                        window.location="officialsentry.php";
                        }
                        if (e.key === "u" || e.key === "U"){
                        window.location="loginaccount.php";
                        }
                    }

                    if($(id_etc).is(":checked")){
                      
                      if (e.key === "H" || e.key === "h"){
                      window.location="disaster_edit.php";
                      }
                      if (e.key === "R" || e.key === "r"){
                      window.location="risk_management.php";
                      }
                     
                  }

                  if($(id_profile).is(":checked")){
                      
                      if (e.key === "V" || e.key === "v"){
                      window.location="userprofile.php";
                      }
                      if (e.key === "D" || e.key === "d"){
                      window.location="editprofile.php";
                      }
                     
                  }
                }
                else{
                  $(id_assets).prop("checked",false);
                  $(id_office).prop("checked",false);
                  $(id_etc).prop("checked",false);
                  $(id_profile).prop("checked",false);
                }

            });

         /*  $(window).keypress(function(event){
                var keycode =(event.keyCode ? event.keyCode: event.which);
                alert(keycode);
                if(keycode=='27'){
                  $("#nbrger").prop("checked",false);
                 
                } 
              });*/

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