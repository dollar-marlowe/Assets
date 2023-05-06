<section id="imgform-wrapper">
      <div class="form-wrapper">
        <div id='form_title'></div>
        <div class="form-space">
          <form class="login-form" method='post'>
              <div class="input-box">
                <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                <input type="text" id="username" required>
                <label>Username</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <input type="password" id="password" required>
                <label>Password</label>
              </div>
              <div class="remember">
                <label><input type="checkbox"> Remember me</label>
              </div>
                <input type='submit' Value='LOGIN' class="btn btn-primary" id="submitlogin">
            </div>
        </div>
      </div>
</section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="JS/mm.js"></script>
    <script>

      $(document).ready(function(){
      
        var change_pass=false;
          $("#repassword").hide();
              var isoklogin={
                "uname":false,
                "pass":false
              };
              var err_label=0;
              function validate_elem(id,val){
                  if($(id).val()==val){
                    $(id).css("border-bottom-color","red");
                    if(err_label<1){
                      $("#loginheader").after("<p  style='color:red' id='msgerrlogin'>Required Feild(s)* cannot be empty!</p>");
                      err_label++;
                    }
                    return false;
                  }else{
                    $(id).css("border-bottom-color","#ddd");
                    return true;
                  }
              }

              function gologin(){
                if(isoklogin["uname"] && isoklogin["pass"]){
                  $("#msgerrlogin").remove();
                  err_label=0;
                  return true;
                }
                else{
                  return false;
                }
              }
              function login(){
                  var reroute=true;
                  //alert(change_pass);
                    if(change_pass){
                      if(validate_elem("#repassword","")){
                        if($("#password").val()== $("#repassword").val()){
                          $.post("AJAX/changepass.php",
                            {
                              staffid:  $("#username").val(),
                              pass:     $("#password").val()
                            },
                            function(data){
                              //alert(data);
                              if(data=="true"){
                              
                                $("#repassword").hide();
                                $("#password").val("");
                                  change_pass=false;
                                  $("#msgerrlogin").remove();
                                  $("#loginmsg").remove();
                                  $("#loginheader").after("<p  id='loginmsg'>Change password successful! Please login using your new password.</p>");
                                  $("#username").removeAttr("disabled");
                                }
                                else{
                                  $("#msgerrlogin").remove();
                                  $("#loginheader").after("<p style='color:red' id='msgerrlogin'>error"+data+"</p>");
                                }
                            
                            });
                        }
                        else{
                          $("#msgerrlogin").remove();
                          $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Password missmatched!</p>");
                          
                        }
                         

                      }
                      else{
                        $("#msgerrlogin").remove();
                        $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Repeat password caanot be empty!</p>");
                             
                      }

                    }
                    else{
                      isoklogin["uname"]=validate_elem("#username","");
                      isoklogin["pass"]=validate_elem("#password","");

                        if(gologin()){
                          $.post("AJAX/retrievelogin.php",
                          {
                            uname:$("#username").val(),
                            pass:$("#password").val()
                          }, 
                          function(data){
                            //alert(data);
                            if(data=="active"){
                                 // alert(data);
                                  window.location="home.php";
                                
                            }
                            else if (data=="false"){
                                if(err_label<1){
                                $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Login Failed!</p>");
                                err_label++;
                                reroute=false;
                              // alert("Login Failed!");
                              
                                }
                            }
                            else if (data=="change_pass"){
                              //
                              $("#loginmsg").remove();
                                $("#loginheader").after("<p  id='loginmsg'>Please create new password.</p>");
                              
                                 //session("uname","username");
                                $("#repassword").show();
                                change_pass=true;
                                $("#password").val("");
                                $("#username").attr("disabled","disabled");
                                //alert(session("uname"));
                            }
                            else if(data=="activation"){
                              $("#msgerrlogin").remove();
                              $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Account needs to be activated first! Please contact the admnisitrator!</p>");
                           
                            }
                            else{
                              $("#msgerrlogin").remove();
                              $("#loginheader").after("<p style='color:red' id='msgerrlogin'>"+data+"</p>");
                           
                            }
                          });
                        }
                   /*  var delayInMilliseconds = 2000; //1 second
                        setTimeout(function() {
                          window.location="login.php";  
                            }, delayInMilliseconds);
                       */
                  }
              }

              $("#submitlogin").click(function(){
                login();
              });
              $("#password, #username").keypress(function(event){
                var keycode =(event.keyCode ? event.keyCode: event.which);
                if(keycode=='13'){
                  login();
                 
                }
              });

              $("#username").change(function(){
                isoklogin["uname"]=validate_elem("#username","");
                gologin();
              });

              $("#password").change(function(){
                isoklogin["pass"]=validate_elem("#password","");
                gologin();
              });

      });
    </script>