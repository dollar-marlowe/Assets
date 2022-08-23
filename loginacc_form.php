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
		/*table*/
		table tr th{
			text-transform:uppercase;
			font-weight:600;
			background-color:rgb(45, 44, 46);
			color:white;	
		}
		tr:nth-child(even){
			background-color:	rgb(128,128,128);
			color:white;
		}
		tr:nth-child(odd){
			background-color:rgb(232,232,232);
			color:black;
		}
		td, th{
			text-align:left;
			padding-left:10px;
			text-transform:capitalize;			
		}
		table{
			border-collapse: collapse;
			width:100%;
			margin-left:5px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}
		.pannel{
			width:90%;
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
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
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
		}
		@media (max-width:600px){
			table{
				
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
		@media(max-width:400px){
			th:nth-child(5),td:nth-child(5){
				display:none;
			}
		}

		@media(max-width:320px){
			th:nth-child(2),td:nth-child(2){
				display:none;
			}
		}
		@media(max-width:280px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
		}
		
			
	}
		
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
 <div id="accounts" class="pannel"><h2>Accounts Activation</23></div>
      <div class="imgform-container " id="accounts_form">
		
        <div class="imgform-img">
		
		<table class="users">
			<?php //THIS IS THE PHP CODE FOR LOADING THE TABLE FROM FUNCTION CALL LOCATED IN CODES
			$str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='activation'";
			$headers=array("","First Name","Last Name","User Name","Position","Level","Status");
			$classes=array("all","item");
			loadtable($str,$headers,true,false,$classes);
			?>
		 </table>
        </div>

        <div class="form-container">
          <h2 id='officialheader'>Accounts and Login</h2>
				<label for="status">Status</label>
					<select id="status">
						<option value="active">Active</option>
						<option value="activation">For activation</option>
						<option value="deactivated">Deactivated</option>
						<option value="change_pass">For password changing</option>
					</select>
				<label for="auth_level">User Access Level</label>
					<select id="auth_level">
						<option value="1">Regular User</option>
						<option value="2">Technical Operator</option>
						<option value="3">Admin</option>
						<?php
						if($_SESSION["auth_level"]==4){
							echo "<option value=4>System Admin</option>";
						}
						?>
						
					</select>	
				</lable>		

                <label for="office">Office Designation: *</label>
                <select id="office" name="off_designation" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select>                    
                <input type='submit' Value='Activate' class="btn btn-primary" style="color:white;font-weight:800;" id="submit_account">
                <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear">            
        </div>
      </div>
	  <div id="pass_reset" class="pannel"><h2>Password Reset</23></div>
      <div class="imgform-container " id="resets_form"> 
			
        <div class="imgform-img">
			<input type="text" id="search_uname" Placeholder="Username"> &nbsp <input type="text" id="search_fname" Placeholder="First Name">
			&nbsp <input type="text" id="search_lname" Placeholder="Last Name">
			<label for="office">Office Designation: *</label>
                <select id="office_search" name="office_search" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select>   
				
			<table class="table_search" style="margin-top:10px;margin-bottom:10px">
			
		
		 	</table>
			 <input type="Submit" id="reset_pass" value="Reset Password" style="margin-bottom:10px;color:white;" class="btn btn-primary">

        </div>

       
      </div>
	  <?php //there was a plan to setup a connection between js file and php however there is a problm whenever a js file updated
	  //is not reflecting  when being integrated in script tag, so the solution if to utilize the footer to 
	  //contain all js functtions connecting to php commands to use php helper functions in javascript such as sessions, email filter and AES encryption
	  //accessign wide PHP fucntions inside a javascript 
	  //the is_true_false function is located in footer a fucntion which allows you to invoke anothe rfunction inside depending weather the query will return trie or false
	   ?>

<?php //echo"alert('".encrypt("test2")."');";?>
    </section>

    <script>
		
		//var t1="sdjfhskdkjhkjasd";
		//alert(t1.includes("|"));
		
		<?php echo"/*".encrypt("This command is to hide the button reset password under reset password pannel
         This comment is ecnrypted")."*/
		 var acc_mgt_str='".encrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo")."';
		 var acc_mgt_str_where='".encrypt('where office_id=')."';
		 var acc_mgt_str_complete='".encrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where office_id=")."';
		 var acc_headers='".encrypt("%First Name%Last Name%User Name%Position%Level%Status")."';
		 
		 ";?>
		$("#reset_pass").hide();
      $(document).ready(function(){
		
		//check_url(window.location.href);
		//alert(window.location.href);
		//call_php_code("check_url",window.location.href,"reroute()","do_nothing()");
	//alert(acc_mgt_str_complete);
		//test_msg();
		//eval("testing()");
		//is_empty("","#officialheader");
		//alert(encypt1("String String"));
		$("#accounts_form").slideUp("slow");
		$("#status").val("activation");
		$("#status").change(function(){
			var status=$(this).val();
			var str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where status='"+status+"'";
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
			loadtable(str,headers,1,0,".users",".item",1,"all%item");
			if($(this).val()=="activation"){
				$("#submit_account").val("Activate");
			}
			else if($(this).val()=="active"){
				$("#submit_account").val("Deactivate");
			}
			else if($(this).val()=="deactivated"){
				$("#submit_account").val("Reactivate");
			}

		});
		$("#office").change(function(){
		
			office_change("#office",".users",".item","all%item");
		});
		function office_change(office_id,target,chkid, elem){

			var id=$(office_id).val();
			var str="";
			if(id==0){
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo";
			
			}else{
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where office_id="+id;
		
			}
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
			loadtable(str,headers,1,0,target,chkid,1,elem);
		}

		function loadtable(str,headers,chkbox,allchk, target,chkbox_name,with_chkbox,elem){
			
			$.post("AJAX/loadtable.php",{
				sql:str,
				hdr:headers,
				check:chkbox,	
				all:allchk,
				class:elem
			},function(data){
				if(data!=""){
					//alert(chkbox);
					$(target).html(data);
					if(with_chkbox==1){
						//alert(chkbox_name+" "+target);
					enrycpt_each(chkbox_name);		
				}
					
				}else{
					$(target).empty();
				}				
					
			}
			);
		}

	  $("#accounts").click(function(){
		$("#accounts_form").slideToggle("slow");
		$("#resets_form").slideUp("slow");

	  });

	  $("#pass_reset").click(function(){
		$("#accounts_form").slideUp("slow");
		$("#resets_form").slideToggle("slow");

	  });
	  $("#submit_account").click(function(){
		var  str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'";
		var headers=" %First Name%Last Name%User Name%Position%Level%Status";
		if($("#status").val()=="activation"){
			$.each($(".item:checked"),function(){
			var elem=$(this).val();
			
				$.post("AJAX/activate_account.php",
					{
						staff_id:elem,
						auth_level:$("#auth_level").val()
					},
					function(data){
						alert(data);		
					} 
				);
			});
			loadtable(str,headers,1,0,".users",".item",1,"all%item");
		}
		
	  });

	  function password_change_office(){
			var office_id=$("").val();
			var str="";
			if(office_id==0){
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo";
			}else{
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where office_id="+office_id;
			}
			is_true_false(str,"elem_hide('#reset_pass')", "elem_show('#reset_pass')");
			office_change("#office_search",".table_search",".item_pass_res","all_res%item_pass_res");

	  }
	  function look_up_name(str2){
		var office_id=$("").val();
			var str="";
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
		
		
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo "+str2;
			
			is_true_false(str,"elem_hide('#reset_pass')", "elem_show('#reset_pass')");
			loadtable(str,headers,1,0,".table_search",".item_pass_res",1,"all_res%item_pass_res");
	  }

	  $("#office_search").change(function(){
		
		password_change_office();
			
	  });
	  
	  $("#search_uname").on("keyup", function(){
		look_up_name("where username LIKE '%"+$(this).val()+"%'");

	  });

	  $("#search_fname").on("keyup", function(){
		look_up_name("where fname LIKE '%"+$(this).val()+"%'");

	  });

	  $("#search_lname").on("keyup", function(){
		look_up_name("where lname LIKE '%"+$(this).val()+"%'");

	  });
	  $("#reset_pass").click(function(){

			$.each($(".item_pass_res:checked"), function(){
				//alert("click");
				
				var id=$(this).val();
				//alert(data);
				var office=$("#office_search").val();
				//var str=acc_mgt_str_complete+"|"+$("#office_search").val();
				//alert(str);
				//call_php_code("update",data+"|"+str+"|"+office+"|"+acc_headers+"|1","assign_html|.table_search","do_nothig()");
				//call to this function must follow rule,
				//1st parameter specifies what command to execute
				//for the 2nd data parameter it should be composed of 5 data if not 3 separated by |, data are as follows: the employee_id|string command for the table|office_id|table headers|1(means the table has checkbox on each row)
				//this allows the code to break down the data into an array
				//the 3rd parameter is the next function to be called if there are more paramenters inside it shoule be in a pattern of fucntion_name|parameters|param...
				//the 4th parameter is to be executed if the query fails, for this instance it will just do nothing.
				if($($(this).parent().parent()).find("td.last").text()=="Active"){
					$("#reset_pass").hide();
						$.post("AJAX/resetpassword.php",{
						staff_id: id

						}, function(data){
							
							alert(data);
							password_change_office();
							$("#reset_pass").show();

						});  
				}
				else{
					alert("Invalid command, password reset already been requested!");
				}
			
			});
	  });
	  	
	});
    </script>