
    <?php
     
    include "ALGO/codes.php";
   
    if(!isset($_SESSION["auth"]) && $_SESSION["auth"]!=true ){
      header("Location:login.php");
    }

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
</html>