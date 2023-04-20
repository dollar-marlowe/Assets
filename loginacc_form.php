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
			
			padding-left:10px;
			padding-right:10px;
			margin-right:0px;

		}
		.left_pannel{
			background-color:#fff;
			border:solid 1px #c6c6c6;
			margin-right:20px;
			padding:20px;
			margin-top:0px;
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
		.pannel_con{
			border: solid 1px #c6c6c6;
		}
		.pannel{
			width:90%;
			margin:auto;
			margin-top:0px;
			margin-bottom:15px;
			text-align:center;
			border:solid 1px #c6c6c6;
			padding:10px 0px 10px 0px;
			background-color:#eaeaeaab;
		}
		.pannel:hover{
			background-color:#b3b3b3a3;
		}
		.pannel h2{
			display:inline;
			padding-left:20px;
			padding-right:20px;
			font-size:18px;		
		
		}
		.pannel h2#accounts{
			border-right:solid 2px #ddd;
			
		}
		.lbl_wrap{
			width:fit-content;
			display:inline-block;
    		font-size: 18px;
			margin-left:10px;
			transition: transform .2s; 
		}
		.lbl_wrap:hover{
			transform: scale(1.05); 
		}
		.wrap{
			width:fit-content;
			margin:auto;
		}
		.pannel .lbl_wrap img{
			width:30px;
			margin-bottom:-6px;
		}
		
		.align_center{
			margin:auto;
			
			width:fit-content;
			
			
		}
		.header2{
			font-size: 1.8rem;
			font-weight: 500;
			color: #444;
			margin-bottom: 1rem;
			margin-top: 5px;
			text-align:center;
		}
		.form-container h2{
			font-size: 1.8rem;
		}
		.left_pannel select{
			width:250px;
		}
		.wrap_me{
			display:inline-block;
		}
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.align_center{
			margin:auto;
			width:fit-content;
			
			}
			.form-container{
				width:100%;
				margin-top:15px;

			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea
						{
				width:40%;
				margin:auto;
			}
			.align_center{
			margin:auto;
			width:fit-content;
			
			}

			
		}
		@media (max-width:1246px){
			.align_center > *{
				margin-bottom:5px;
			}
			.align_center{
				width:fit-content;
				margin:auto;
			}
		}
		@media (min-width:821px){
			.align_center input{
				margin-right:10px;
			}
		}
		@media (max-width:820px){
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea
						{
				width:60%;
				margin:auto;
			}
			.align_center{
			margin:auto;
			width:100%;
			
			}.align_center > *{
				margin-left:0px;
				margin:auto;
				display:block;
				margin-bottom:5px;
			
			}
			.wrap_me{
				width:fit-content;
				margin:auto;
			}
		}
		@media (max-width:600px){
			table{
				
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			.pannel h2{
			
			font-size:13px;		
			}
			.pannel h2 img{
				width:20px;
				margin-bottom:-4px;
			}
		}
		@media(max-width:400px){
			th:nth-child(5),td:nth-child(5){
				display:none;
			}
			.pannel h2{
			display:block;	
			}
			.pannel h2#accounts{
			border-right:solid 1px white;
			margin-bottom:5px;
			
			}
			.pannel h2#pass_reset{
			border-top:solid 1px #ddd;
			
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea
						{
				width:100%;
				margin:auto;
			}
			.left_pannel select,.imgform-img select{
			width:180px;
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
		
			
	
		
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
 <div class="pannel"><div class="wrapper"><p class="lbl_wrap"  id="accounts" ><img src="images\activate.png">Accounts Activation</p><p class="lbl_wrap" id="pass_reset"><img src="images\reset2.png">Password Reset</p></div></div>
      <div class="imgform-container " id="accounts_form">
		
        <div class="imgform-img left_pannel">
		<p>	
		<label for="status">Status</label>
					<select id="status">
						<option value="active">Active</option>
						<option value="activation">For activation</option>
						<option value="deactivated">Deactivated</option>
						<option value="change_pass">For password changing</option>
					</select></p>
		<p><label for="office">Office Designation: *</label>
                <select id="office" name="off_designation" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select> </p>
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
          <h2 id='officialheader' class="header2">Accounts Activation and Deactivation</h2>
				
				<label for="auth_level" id="lbllevel">User Access Level</label>
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

                                 
                <input type='submit' Value='Activate' class="btn btn-primary" style="color:white;font-weight:800;" id="submit_account">
                <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear">            
        </div>
      </div>
	 
      <div class="imgform-container " id="resets_form"> 
			
        <div class="imgform-img bg_white pannel_con">
		<h2 id='officialheader' class="header2">Password Reset</h2>
			<div  class="align_center"><input type="text" id="search_uname" Placeholder="Username"> <input type="text" id="search_fname" Placeholder="First Name">
			 <input type="text" id="search_lname" Placeholder="Last Name">
			<div class="wrap_me"><label for="office">Office Designation: *</label>
                <select id="office_search" name="office_search" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select>  </div> 
			</div>	
			
			<table class="table_search" style="margin-top:10px;margin-bottom:10px">
			<?php //THIS IS THE PHP CODE FOR LOADING THE TABLE FROM FUNCTION CALL LOCATED IN CODES
				$str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'";
				
				$headers=array("","First Name","Last Name","User Name","Position","Level","Status");
				$classes=array("all_res","item_pass_res");
				loadtable($str,$headers,true,false,$classes);
				?>
		
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
		 
		 var cur=".$_SESSION["officeid"].";";?>
		//$("#reset_pass").hide();
		
		

$(document).ready(function(){
	$("#office").val(cur);
	
	enrycpt_each(".item");	
	enrycpt_each(".item_pass_res");	
	office_change("#office",".users",".item","all%item");
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

		
		$("#accounts").click(function(){
			$("#accounts_form").slideDown("slow");
			$("#resets_form").slideUp("slow");
		
	  	});

	  $("#pass_reset").click(function(){
		$("#accounts_form").slideUp("slow");
		$("#resets_form").slideDown("slow");

	  });

		$("#status").change(function(){
			var status=$(this).val();
			var str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where status='"+status+"'";
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
			loadtable(str,headers,1,0,".users",".item",1,"all%item");
			if($(this).val()=="activation"){
				$("#submit_account").show();
				$("#submit_account").val("Activate");
			}
			else if($(this).val()=="active"){
				$("#submit_account").show();
				$("#submit_account").val("Deactivate");
			}
			else if($(this).val()=="deactivated"){
				$("#submit_account").show();
				$("#submit_account").val("Reactivate");
			}
			else if($(this).val()=="change_pass"){
				$("#submit_account").hide();
			}
			is_true_false(str,"elem_hide('#auth_level, #lbllevel')", "elem_show('#auth_level, #lbllevel')");

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
			is_true_false(str,"elem_hide('#auth_level')", "elem_show('#auth_level')");

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

	  $("#submit_account").click(function(){
		var  str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'";
		var headers=" %First Name%Last Name%User Name%Position%Level%Status";
		var ajaxsrc="";
		if($("#status").val()=="activation"){
			ajaxsrc="AJAX/activate_account.php";
		}else{
			ajaxsrc="AJAX/deactivate_account.php";
		}

			$.each($(".item:checked"),function(){

			var elem=$(this).val();
			 $("#submit_account").hide();
				$.post(ajaxsrc,
					{
						staff_id:elem,
						auth_level:$("#auth_level").val()
					},
					function(data){
						alert(data);	
						$("#submit_account").show();	
					} 
				);
			});
			loadtable(str,headers,1,0,".users",".item",1,"all%item");
	  });

	  function password_change_office(){//this fucntion is for password reset pannel when office dropdown changed it's value
			//alert("called");
			var office_id=$("#office_search").val();
			var str="";
			
			if(office_id=="0"){
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo";
			}else{
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where office_id="+office_id;
				
			}
			is_true_false(str,"elem_hide('#reset_pass')", "elem_show('#reset_pass')");
			office_change("#office_search",".table_search",".item_pass_res","all_res%item_pass_res");

	  }
	  function look_up_name(str2){//this fucntion is being used to look up for whatever related name inputed in the username, lastname, firstname field
	
			var str="";
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
		
		
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo "+str2;//this string command if for table 
			
			is_true_false(str,"elem_hide('#reset_pass')", "elem_show('#reset_pass')");
			loadtable(str,headers,1,0,".table_search",".item_pass_res",1,"all_res%item_pass_res");
	  }

	  $("#office_search").change(function(){
		
		password_change_office();
			
	  });
	  
	  $("#search_uname").on("keyup", function(){
		if($.trim($(this).val())!=""){
			look_up_name("where username LIKE '%"+$(this).val()+"%'");
		}
		else{
			$(".table_search").html("");
			$("#reset_pass").hide();
		}
		

	  });

	  $("#search_fname").on("keyup", function(){
		if($.trim($(this).val())!=""){
			look_up_name("where fname LIKE '%"+$(this).val()+"%'");
		}else{
			$(".table_search").html("");
			$("#reset_pass").hide();
		
		}
		

	  });

	  $("#search_lname").on("keyup", function(){
		if($.trim($(this).val())!=""){
			look_up_name("where lname LIKE '%"+$(this).val()+"%'");
		}else{
			$(".table_search").html("");
			$("#reset_pass").hide();
		
		}
		

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
				var status=$($(this).parent().parent()).find("td.last").text();
				if(status=="active"){
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
					if(status=="deactivated"){
						alert("Invalid command, account has already been deactivated!");
					}else{
						alert("Invalid command, password reset already been requested!");
					}
				
				}
			
			});
	  });
	  	
 });
    </script>