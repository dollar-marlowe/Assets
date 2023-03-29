<!doctype html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>User Profile Page</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- For animation -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <!-- Styles for the User Profile page -->
        <style>
        body{
            color: #1a202c;
            text-align: left;
            background-color: #efefef;
        }
        .main-body {
            top:70px;
            
            padding: 15px;
        }
        #content{
          width: 50%;
          justify-content: center;
          align-items: center;
          margin: 20px auto;
          border: 1px solid #cbcbcb;
        }
        #display-image{
          width: 100%;
          justify-content: center;
          padding: 5px;
          margin: 15px;
        }
        form{
          width: 50%;
          margin: 20px auto;
        }
        .img{
          border-radius:50%;
        }
        .card {
            box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
        }

        .card {
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #ffffff;
            background-clip: border-box;
            border: 0 solid rgba(0,0,0,.125);
            border-radius: .25rem;
        }
        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }
        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }
        .gutters-sm>.col, .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem!important;
        }
        .bg-gray-300 {
            background-color: #e2e8f0;
        }
        .h-100 {
            height: 100%!important;
        }
        .shadow-none {
            box-shadow: none!important;
        }
        </style>

    </head>

<body>
    <?php
        include "ALGO/codes.php";
        include "header.php";
        include "footer.php";
    ?>

  <section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="row"> 
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              
              <!-- If image is found in database, show it. Otherwise, show a blank profile image -->
              <img class="rounded-circle img-fluid" 
              style="width: 150px;"
              <?php
                            if ($_SESSION["url"]==false) {
                                echo  'src="http://bootdey.com/img/Content/avatar/avatar1.png"';
                                }
                            else {
                                echo "src='".$_SESSION["url"]."'";
                                }
                            ?>
              alt="avatar">  

              <h5 class="my-3" name="name"><?php
              //For nickname
              echo $_SESSION["uname"];
              ?></h5>
              
              <p class="text-muted mb-1"><?php
              //For position
              echo $_SESSION["position"];
              ?></p>

              <p class="text-muted mb-4"><?php 
              //For office
              echo $_SESSION["officename"];
              ?></p>
              
              </div>
          </div>
          
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Full Name</p>
                </div>
                <div class="col-sm-9">
                  <!-- Get fname and lname from login credentials -->
                  <p class="text-muted mb-0"><?php echo($_SESSION["fname"] . " " . $_SESSION["lname"])?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Email</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                  <!-- Get email from login credentials -->
                  <?php
                  echo $_SESSION["login_email"]
                  ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Mobile</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                  <!-- Get mobile number from login credentials -->
                  <?php
                  echo $_SESSION["user_mobile"]
                  ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Address</p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">
                    <!-- Get address of the employee -->
                  <?php echo $_SESSION["user_address"]?>
                  </p>
                </div>
              </div>
              <hr>
              <button class="btn btn-primary" style="float:right" type="button" id="editprofile">Edit Your Profile</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script>
          // Listener for Edit Your Profile button  
          $(document).ready(function(){
           
            $("#editprofile").click(function(){
              window.location = "editprofile.php";

            
            });
            $("#footer").hide();
          });

        </script> 
</body>

</html>