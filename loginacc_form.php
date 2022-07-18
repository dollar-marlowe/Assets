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
 <section id="imgform">
 <div id="accounts" class="pannel"><h2>Accounts Activation</23></div>
      <div class="imgform-container " id="accounts_form">
		
        <div class="imgform-img">
		
		<table class="users">
			<?php

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
		
		<img src="images/personnellogo.png" alt="" />
        </div>

        <div class="form-container">
		<img src="images/personnellogo.png" alt="" />
        </div>
      </div>
    </section>

    <script>
		
      $(document).ready(function(){
		$("#accounts_form").slideUp("slow");
		$("#status").val("activation");
		$("#status").change(function(){
			var status=$(this).val();
			var str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where status='"+status+"'";
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
			loadtable(str,headers,1,0);
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
			var office_id=$(this).val();
			var str="";
			if(office_id==0){
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo";
			
			}else{
				str="SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where office_id="+office_id;
		
			}
			var headers=" %First Name%Last Name%User Name%Position%Level%Status";
			loadtable(str,headers,1,0);
		});

		function loadtable(str,headers,chkbox,allchk){
			var elem="all%item"
			$.post("AJAX/loadtable.php",{
				sql:str,
				hdr:headers,
				check:chkbox,	
				all:allchk,
				class:elem
			},function(data){
				$(".users").html(data);
			}
			);
		}
      });

	  $("#accounts").click(function(){
		$("#accounts_form").slideToggle("slow");
		$("#resets_form").slideUp("slow");

	  });

	  $("#pass_reset").click(function(){
		$("#accounts_form").slideUp("slow");
		$("#resets_form").slideToggle("slow");

	  });
	  $("#submit_account").click(function(){
		if($("#status").val()=="activation"){
			$.each($(".item:checked"),function(){
			var elem=$(this).val();
			//alert(elem);
				$.post("AJAX/activate.php",
					{
						staff_id:elem,
						auth_level:$("#auth_level").val()
					},
					function(data){

					}
				);
			});
		}
		
	  });
    </script>