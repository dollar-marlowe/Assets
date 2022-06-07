
    
    <?php
    
    include "ALGO/codes.php";

    
    if(!isset($_SESSION["auth"]) && $_SESSION["auth"]!=true ){
      header("Location:login.php");
    }
    


    include "header.php";
    include "assets_mgt_form.php";//content
    include "about.php";
    include "footer.php";
    ?>
	
  </body>
  <!-- 
    .................../ JS Code for smooth scrolling /...................... -->



  <script src="JS/flexi.js"></script>

  <script type="text/javascript">

 
</script>          
</html>
</html>