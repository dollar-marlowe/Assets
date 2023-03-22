
    <?php
     
    include "ALGO/codes.php";
   
    include "COMPONENTS/reroute.php";
    
    auth_validatation(3);
    reroute(2,"home.php");//2 is fo rthe access level, and for the destination of reroute is level is 2 and below
    include "header.php";
    include "loginacc_form.php";
    include "about.php";
    include "footer.php";
    ?>
	
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="JS/flexi.js"></script>
</html>
