<style>
		#type{
		font-weight:500;
		font-size:17px;	
		font-family: "Poppins", sans-serif;
		}
		#single{
			font-weight:700;
		}
	
		.imgform-img p{
			margin-left:10px;
			margin-bottom:10px;
			display:inline-block;
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img{
			width:100%;
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;

		}
		.imgform-img img{
			width:90%;
			margin:auto;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			width:90%;
			margin:auto;
		}
		
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.imgform-img{
				padding-top:40px;
			}
			
		}
		@media (max-width:820px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
		}
		@media (max-width:600px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			
		}
		
</style>
 <section id="imgform">
      <div class="imgform-container container">
        <div class="imgform-img">
          <img src="images/personnellogo.png" alt="" />
        </div>

        <div class="form-container">
          <h2 id='officialheader'>Personnel Data Entry</h2>

            <label for="personal_info">Personal Information *</label>                    
                <input type="text" placeholder="First Name *" id="off_fname"/>
                <input type="text" placeholder="Middle Initial *" id="off_mname"/>
                <input type="text" placeholder="Last Name *" id="off_lname"/>
                <input type="text" placeholder="Contact Number" id="off_cnumber"/>
                <input type="email" placeholder="E-mail Address *" id="off_email"/>
                
                <label for="position">Position/Function:*</label>

                <select id="position">
                    <option value=0>Select from options below</option>
                    <option value='Regional Director'>Regional Director</option>
                    <option value='Technical Operations Division Head'>Technical Operations Division Head</option>
                    <option value='Administrative and Finance Division Head'>Administrative and Finance Division Head</option>
                    <option value='Administrative and Finance Division Head'>Regional Focal</option>
                </select>

                <label for="off_designation">Office Designation: *</label>
                <select id="off_designation" name="off_designation" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select>
                    
                <input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submitofficial">
                <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="officeclear">
            
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function(){
       
          var okoff={
            "fname":false,
            "lname":false,
            "mname": false,
            "contact":false,
            "email":false,
            "position":false,
            "office":false
          };
          var errmsg=0;
          function validate_elem_office(id,value){
           
            if($(id).val()==value){
              $(id).css("border-bottom-color","red");
              if(errmsg<1){
                $("#msgadded").remove();
                $("#officialheader").after("<h4 style='color:red' id='errofficial'>Required field(s)* cannot be empty!</h4>");
                errmsg++;
              }
              return false;
            }
            else{
              
              $(id).css("border-bottom-color","#ddd");
              return true;
            }
          }
          function go_add_official(){
            if( okoff["fname"] && okoff["lname"] && okoff["mname"] && okoff["contact"] &&  okoff["email"] && okoff["position"] && okoff["office"]){
              errmsg=0;
              $("#errofficial").remove();
              return true;
            }
            else{
              return false;
            }
          }
          function clear_officials(){
            $("#off_fname,#off_lname,#off_mname,#off_cnumber,#off_email").val("").css("border-bottom-color","#ddd");
            $("#position,#off_designation").val(0).css("border-bottom-color","#ddd");
            $("#errofficial").remove();
           
            for(var key in okoff) {
              okoff[key]=false;
            }
            errmsg=0;
          }
          $("#officeclear").click(function(){
            clear_officials();
          });
          $("#submitofficial").click(function (){
            okoff["fname"]=validate_elem_office("#off_fname","");
            okoff["lname"]=validate_elem_office("#off_lname","");
            okoff["mname"]=validate_elem_office("#off_mname","");
            okoff["contact"]=validate_elem_office("#off_cnumber","");
            okoff["email"]=validate_elem_office("#off_email","");
            okoff["position"]=validate_elem_office("#position",0);
            okoff["office"]=validate_elem_office("#off_designation",0);
            if(go_add_official()){
              $.post("AJAX/insertofficials.php",{
                fname:    $("#off_fname").val(),
                lname:    $("#off_lname").val(),
                mname:    $("#off_mname").val(),
                contact:  $("#off_cnumber").val(),
                email:    $("#off_email").val(),
                position: $("#position").val(),
                office:   $("#off_designation").val()
              },
              function(data){
                $("#msgadded").remove();
                $("#officialheader").after("<h4 id='msgadded'>"+data+"</h4>");

              });
              clear_officials();
            }
          });
          $("#off_fname").change(function(){
            okoff["fname"]=validate_elem_office("#off_fname","");
            go_add_official();
          });
          $("#off_lname").change(function(){
            okoff["lname"]=validate_elem_office("#off_lname","");
            go_add_official();
          });
          $("#off_mname").change(function(){
            okoff["mname"]=validate_elem_office("#off_mname","");
            go_add_official();
          });
          $("#off_cnumber").change(function(){
            okoff["contact"]=validate_elem_office("#off_cnumber","");
            go_add_official();
          });
          $("#off_email").change(function(){
            okoff["email"]=validate_elem_office("#off_email","");
            go_add_official();
          });

          $("#position").change(function(){
            okoff["position"]=validate_elem_office("#position","");
            go_add_official();
          });
          $("#off_designation").change(function(){
            okoff["office"]=validate_elem_office("#off_designation","");
            go_add_official();
          });
      });
    </script>