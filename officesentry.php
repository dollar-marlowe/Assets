
    <?php
     $P="officesentry";
    include "ALGO/codes.php";
    $submitted=$_SERVER['REQUEST_METHOD']=='POST';
    $frmsubmit=isset($_POST['submit']);
    include "COMPONENTS/reroute.php";
    
    include "header.php";
    include "officeform.php";
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