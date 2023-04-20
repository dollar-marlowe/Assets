<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
   
    <title>DICT-ETC</title>
    <script
  src="https://code.jquery.com/jquery-3.6.4.js"
  integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
  crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"          
    />
    <link rel="icon" href="images/DICT.png">
   <?php clearstatcache(true,'CSS/rubio.css'); ?>
   <link rel="stylesheet" href="CSS/rubio.css?rnd=132">
   <!-- https://wpreset.com/force-reload-cached-css/  references for forcing the browser to reload the file isntead of using the stubborn cache-->
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
        height:50px;;
      }
      .navbar-container{
        margin:0;
        margin-top:9px;
      }
      .navbar-container .hamburger-lines{
        top:5px;
      }
      .showcase-area{
        height:250px;
       background:none;
      
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
      input[type=text]:focus, input[type=file]:hover,input[type=date]:focus, textarea:focus, select:focus{
        box-shadow: -1px 1px 15px 3px rgba(175,181,235,0.78);
-webkit-box-shadow: -1px 1px 15px 3px rgba(175,181,235,0.78);
-moz-box-shadow: -1px 1px 15px 3px rgba(175,181,235,0.78);
border:solid 1px #33bbff;
      }
      input[type=text], textarea, select{
        border-radius:5px;
       
      }
     #nav_bg{
      width:100%;
      height:200px;
      position:absolute;
      object-fit: fill;
      margin-top:40px;
     }
     .nav{
      position:absolute;
     }
     .img_right{
     
      width:350px;
     margin-top:20px;
      
     }
     .img_left{
     
     height:250px;
    margin-top:-20px;
     
    }
     .img_con_right{
      right:349px;
      
     }
     .img_con_left{
      left:0px;
      
     }
     .img_left_gear{
      left:100px;
      position:absolute;
      height:200px;
      width:200px;
      margin-top:30px;
     }
     .img_left_gear2{
      left:5px;
      position:absolute;
      height:120px;
      width:120px;
      margin-top:150px;
     }
     .img_left_dict{
      left:164px;
      position:absolute;
      height:70px;
      width:70px;
      margin-top:95px;
     }
     .img_right_gear3{
      right:220px;
      position:absolute;
      height:200px;
      width:200px;
      margin-top:-100px;
     }
     .img_right_gear5{
      right:80px;
      position:absolute;
      height:100px;
      width:100px;
      margin-top:160px;
     }
     .img_right_gear4{
      right:120px;
      position:absolute;
      height:100px;
      width:100px;
      margin-top:-15px;
     }
     .back{
      position:absolute;
      width:100%;
      height:224px;
    
     

     }
     .back_div{
     display:block;
     
        width:100%;
        height:224px;
        
     }
     #back_div2{
      background: url("images/bgbg1.png") center no-repeat;
     
      -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        
     }
     #back_div1{
      background:url("images/bgbg3.png") center no-repeat;
      -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        display:none;
        
     }
     #back_div1 > *{
      text-align:center;
      margin:auto;
      color:#4d4d4d;
      font-size:3vh;

     }
     .back_elem{
   
      text-align:center;
     }
     
   .my_ribbon_hide{
    width:60px;
    height:20px;
    background:url('images/ribbon_shadow7.png')   no-repeat;
    
    background-position: center;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
    position:absolute;
    left:96.5%;
    margin-left:-5px;
   overflow:hidden;
    transition: transform 1s;
   
    
   }
   .my_ribbon_hide:hover {
    height:60px;
   
    }
    .my_ribbon_hide:hover  .ribbon_label{
  display:block;
   
    }
   .home_filler{
    width:100%;
   
    height:47px;
    display:none;
   }
   .ribbon_label{
      color:white;
      font-weight: bold;
      text-align:center;
      font-size:12px;
      margin-top:13px;
      display:none;
      transition: transform 1s;
   }
   .navbar-container input[type="checkbox"]{
    top:0px;
   }
   .imgform-container{
    border:none;
    background-color:#eee;
   }
   #imgform{
    background-color:#eee;
   }
   .imgform-img{
    margin-right:20px;
    background-color:#ffff;
   }
   .form-container{
    border: solid 1px #C6C6C6;
    background-color:#ffff;
   }
   .new_pannel{
    border: solid 1px #C6C6C6;
   }
   .bg_white{
			background-color:#fff;
		}
   @media (max-width:1665px){
    .my_ribbon_hide{
      left:96%;
    }
     
 
  }
  @media (max-width:1310px){
    .my_ribbon_hide{
      left:95%;
    }
     
 
  }
  @media (max-width:1030px){
    .my_ribbon_hide{
      left:94%;
    }
     
 
  }
   @media (max-width:900px){
     
     .modal-content {
       margin:20% auto;
     }
 
     .my_ribbon_hide{
      left:93%;
    }
  }
  @media (max-width:800px){
     
     .modal-content {
       margin:30% auto;
     }
 
  }
  @media (max-width:740px){
     
    .my_ribbon_hide{
      left:92%;
    }
 
  }
  @media (max-width:700px){
     
     .modal-content {
       margin:40% auto;
     }
 
  }
  @media (max-width:650px){
     
     .my_ribbon_hide{
       left:91%;
     }
  
   }
  @media (max-width:600px){
     
     .modal-content {
       margin:45% auto;
     }
     .my_ribbon_hide{
       left:90%;
     }
  }
  @media (max-width:600px){
     
     .modal-content {
       margin:50% auto;
     }
 
  }
   @media (max-width:500px){
    .modal-content {
        margin:60% auto;
       
      }
      .my_ribbon_hide{
       left:87%;
       margin-top:-10px;
     }
   }
   @media (max-width:400px){
    .modal-content {
        margin:70% auto;
        width:100%;
      }
      .my_ribbon_hide{
       left:85%;
     }
   }
   @media (max-width:350px){
    
      .my_ribbon_hide{
       left:83%;
     }
   }
   @media (max-width:300px){
    .modal-content {
        margin:80% auto;
        width:100%;
      }
      .my_ribbon_hide{
       left:80%;
     }
   }
   .logo{
    height:50px;
    top:0px;
   }
   .back-img{
    display:block;
    margin:auto;
   }
   .large{
    width:25%;
    margin:auto;
    
   }
   .mid{
    width:40%;
    margin:auto;
   }
   .rotate_clockwise{
   
    animation-name: clockwise;
    animation-duration: 15s;
    
    animation-iteration-count: infinite;
    animation-direction: forward;
  }
  .rotate_counter{
   
   animation-name: counter;
   animation-duration: 15s;
   
   animation-iteration-count: infinite;
   animation-direction: forward;
 }
 .paginate{
  margin:auto;
			margin-top:5px;
			margin-bottom:10px;
      width:fit-content;
		}

@keyframes clockwise {
  0% {transform:rotate(0deg);}
  25% {transform:rotate(180deg);}
  75% {transform:rotate(180deg);}
  100% {transform:rotate(180deg);}
}
@keyframes counter {
  0% {transform:rotate(0deg);}
  25% {transform:rotate(-180deg);}
  75% {transform:rotate(-180deg);}
  100% {transform:rotate(-180deg);}
}
   
  

     
    </style>
  </head>
  <body>
  
          <img class="logo" src="images/dict_label2.png">
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
         echo       "<input id='ac-1' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-1' id='home'><a href='home.php'><u>H</u>ome</a></label>";
         echo  "</div>";

         echo   "<div>";
         echo       "<input id='ac-6' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-6'>My <u>P</u>rofile</label>";
         echo       "<article class='ac-small'>";
         echo           "<a href='userprofile.php'><u>V</u>iew Profile</a>";
         echo           "<a href='editprofile.php'>E<u>d</u>it Profile</a>"; 
         echo       "</article>";
         echo   "</div>";
         if($_SESSION["auth_level"]>=1 && $_SESSION["auth_level"]!=2.5){
         echo   "<div>";
         echo       "<input id='ac-2' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-2'><u>A</u>ssets</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='assets.php'>Assets <u>D</u>ata Entry</a>";
         echo           "<a href='assets_mgt.php'>A<u>s</u>sets Management</a>"; 
         echo           "<a href='assetsmap.php'>Assets <u>M</u>ap</a>";
         echo       "</article>";
         echo   "</div>";
         }
         if($_SESSION["auth_level"]>=3){
         echo "<div>";
         echo       "<input id='ac-5' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-5'><u>E</u>TC</label>";
         echo       "<article class='ac-medium'>";
         echo           "<a href='disaster_edit.php'><u>H</u>azards Management</a>";
         echo           "<a href='risk_management.php'><u>R</u>isk Management</a>
                          <a href=''>ETC <u>D</u>eactivation</a>"; 
         echo       "</article>";
         echo   "</div>";
         }
        
          if($_SESSION["auth_level"]>=4){
        
         echo   "<div>";
         echo       "<input id='ac-3' name='accordion-1' type='checkbox' >";
         echo       "<label for='ac-3'><u>O</u>ffice Management</label>";
         echo       "<article class='ac-medium'>";
     
         echo           "<a href='officesentry.php'>Office <u>D</u>ata Entry</a>";
         echo           "<a href='officialsentry.php'><u>P</u>ersonnel Data Entry</a>"; 
         echo           "<a href='loginaccount.php'>Personnel's <u>U</u>ser Account</a>";
         
         echo       "</article>";
         echo   "</div>";        
        }
        if($_SESSION["auth_level"]>=3 || $_SESSION["auth_level"]==2.5){
        
          echo   "<div>";
          echo       "<input id='ac-7' name='accordion-1' type='checkbox' >";
          echo       "<label for='ac-7'><u>H</u>F Management</label>";
          echo       "<article class='ac-large'>";
      
          echo           "<a href='hf_main.php'>HF Station Main <u>P</u>age</a>";
          echo           "<a href='hf_daily.php'><u>H</u>F Station Daily Log</a>"; 
          echo           "<a href='hf_entry.php'>HF Station Data <u>E</u>ntry</a>";
          echo           "<a href='hf_daily_analytics.php'>HF Station <u>A</u>nalytics</a>";

         echo       "</article>";
         echo   "</div>";
        }
          
         echo   "<div>";
         echo       "<input id='ac-4' name='accordion-1' type='checkbox' />";
         echo       "<label for='ac-4'><a href='logout.php'><u>L</u>ogout</a></label>";
         echo  "</div>";
         echo "</section>";
        }
        ?>
            
      </div>
  </nav>

    <section class="showcase-area" id="showcase">
      <br>
      <div class="showcase-container">
          
       <div class="back">
          <div class="back_div" id="back_div1"><br>
              <h3>ETC ACTIVATED-DECEMBER 15, 2022 TINEG ABRA</h3>
          </div>

          <div class="back_div" id="back_div2"><br>
          <img src="images/label_head1.png" class="back-img large">
          <img src="images/label_head4.png" class="back-img mid">
          </div>
          
        </div>
       
        <div class="img_con_right nav">
        <img src="images/beeswax2.png" class="nav img_right">
        </div>
       
      
        <div class="img_con_left nav">
        <img src="images/left_img_tech2.png" class="nav img_left">
        </div>
        <img src="images/lower_bar_only6.png" id="nav_bg">
        <img src="images/ger_small.png" class="img_right_gear4 rotate_counter">
        <img src="images/ger_small.png" class="img_right_gear5  rotate_clockwise">
        <img src="images/gear4.png" class="img_left_gear rotate_counter">
        <img src="images/gear7.png" class="img_left_gear2 rotate_clockwise rotate">
        <img src="images/gear4.png" class="img_right_gear3 rotate_clockwise">
        <img src="images/small_dict_shadow.png" class="img_left_dict">
        
     
      </div>
    </section>
    <div class="home_filler">
      </div>
    <div class="my_ribbon_hide" onclick="hide_show_execute('#showcase','fast','filler')" >
        <p class='ribbon_label'>HIDE</p>
      </div>
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
        <?php echo "
        var lvl=".$_SESSION["auth_level"].";";?>
        var luwas=false;
          var idleMax = 15; // Logout after 10 minutes of IDLE
          var idleTime = 0;
          setInterval(function(){
           
           // 
           //alert("called");
            if (idleTime >= idleMax) { 
             // alert("called");
             luwas=true;
              Popup_modal_show2("<center><b>SYSTEM NOTIFICATION!</b><br><br>You have been automatically logged out due to inactivity. Thank you.</center>",600);
              
              $.post("AJAX/mycodes.php",{
                command: "logout2"
              }, function(data){
                
              });
            
                       
            }else{
              idleTime = idleTime + 1;
            }

           
          }, 60000); 

          
     
        $(document).ready(function(){
          luwas=false;
          var show_panel1=true;
          
          setInterval(function(){
           //animate
           if(show_panel1){
            $("#back_div2").hide(1000);
            $("#back_div1").show(1000);
            show_panel1=false;

           }
           else{
            $("#back_div2").slideDown(1000);
            $("#back_div1").slideUp(1000);
            show_panel1=true;

           }
          
           
          }, 15000); 
          
          //rotate('.rotate_clockwise','-360',2200);
          //rotate('.rotate_counter','+360',2200);
          
          
          
         
        function rotate(target,movement,duration){
            $(target).animate({  borderSpacing: movement }, {
                step: function(now2,fx) {
                  $(this).css('-webkit-transform','rotate('+now2+'deg)'); 
                  $(this).css('-moz-transform','rotate('+now2+'deg)');
                  $(this).css('transform','rotate('+now2+'deg)');
                  //rotate2=(rotate2=='-360')?'+360':'-360';
                },
                duration:duration
            },'swing');
        }

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
              if(luwas==false)
              {
              idleTime = 0;
              }
            else{
                window.location="login.php";
              }

            });

            $(document).keyup(function(e) {
              if(luwas==false)
              {
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
                      if(lvl>=3){
                      $(id_assets).prop("checked",false);
                      $(id_etc).prop("checked",false);
                      $(id_profile).prop("checked",false);
                        if($(id_office).is(":checked")){
                          $(id_office).prop("checked",false);
                        }else{
                          $(id_office).prop("checked",true);
                        }
                      }
                    }
                  
                    if (e.key === "E" || e.key === "e"){
                      if(lvl>=3){
                      $(id_assets).prop("checked",false);
                      $(id_office).prop("checked",false);
                      $(id_profile).prop("checked",false);
                        if($(id_etc).is(":checked")){
                          $(id_etc).prop("checked",false);
                        }else{
                          $(id_etc).prop("checked",true);
                        }
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
                      
                        if (e.key === "D" || e.key === "d"){
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
                //alert(luwas);
              }else{
                
                window.location="login.php";
                //alert(luwas);
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
          });
        });
     
      </script>