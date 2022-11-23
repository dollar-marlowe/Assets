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
			
			display:inline-block;
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img{
			width:fit-content;
			margin:auto;
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
		.pannel{
			
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
			background-color:#eaeaeaab;
		}
		.pannel h2{
			display:inline;
			padding-left:20px;
			padding-right:20px;
			font-size:18px;		
		
		}
		.lbl_wrap{
			margin-left: 10px;
			margin-bottom: 10px;
			font-size: 18px;
			transition: transform .2s; 
		}
		.lbl_wrap:hover{
			transform: scale(1.05); 
		}
		
		.pannel .lbl_wrap img{
			width:25px;
			margin-bottom:-6px;
		}
		.header2{
			font-size: 1.7rem;
			font-weight: 500;
			color: #444;
			margin-bottom: 1rem;
			margin-top: -1.2rem;
			text-align:center;
		}
		.align_center{
			margin:auto;
			
			width:fit-content;
			
			
		}
		.input_wrapper{
			
			width:fit-content;
			margin-top:5px;
		}

		.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:300px;
		}
		.input_wrapper .label{
			width:200px;
			margin-top:0px;
		}
		.inner-wrapper{
			
			width:fit-content;
			margin:auto;
			
		}
		.btn{
			margin-bottom:15px;
		}
		/* #imgform{
			background-color:#cfc9c9;
		} */

		.pannel_con{
			-webkit-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.75);
			-moz-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.75);
			box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.75);
			width:80%;
			margin:auto;
					
		}
		
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.align_center{
			margin:auto;
			
			width:fit-content;
			
			
		}
			
			
		}
		@media (max-width:820px){
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			.pannel_con{
				width:100%;
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
			.input_wrapper, .inner-wrapper{
				width:fit-content;
			}
			.input_wrapper{
				margin:auto;
				margin-top:10px;
			}
			.input_wrapper >*{
				display:block;
			}
			.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:200px;
			}
			th:nth-child(5),td:nth-child(5){
				display:none;
			}
		}
		@media(max-width:400px){
			th:nth-child(3),td:nth-child(3){
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
			.input_wrapper, .inner-wrapper{
				width:fit-content;
			}
			.input_wrapper{
				margin:auto;
				margin-top:10px;
			}
		}

		@media(max-width:320px){
			th:nth-child(7),td:nth-child(7){
				display:none;
			}
		}
		@media(max-width:280px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
		}
		input[type=submit]{
			width:200px;
			
		}
			
	
		
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
 <div class="pannel_con">
		<div class="pannel" onclick="slide('#hazard_form')" ><p class="lbl_wrap" id="accounts" ><img src="images\hazard.png"> <u>H</u>azard Data Log</p></div>
      
      <div class="imgform-container " id="hazard_form">
	   <div class="imgform-img">
					<div class="inner-wrapper">
					
					<div class="input_wrapper entry"><p class="label"><label for="disaster">Name</label></p>
					<input type="text" placeholder="Disaster's Name*" id="disaster" /></div>
					
					
					<div class="input_wrapper"><p class="label"><label for="naturedisaster">Nature of Disaster</label></p>
					<select id="category">
							<option value="0">Select from below</option>
							<option value="Cyclone%Meteorological">Cyclone</option>
							<option value="Earthquake%Geophysical">Earthquake</option>
							<option value="Volcanic Eruption%Geophysical">Volcanic Eruption</option>
							<option value="Lahar%Geophysical">Lahar</option>
							<option value="Landslide%Geophysical">Landslide</option>
							<option value="Tsunami%Hydrological">Tsunami</option>
							<option value="La-Niña%Hydrological">La-Niña</option>
							<option value="Flash Flood%Hydrological">Flash Flood</option>
							<option value="Epidemic%Biological">Epidemic</option>
							<option value="Pandemic%Biological">Pandemic</option>
							<option value="Insect/Animal Plagues%Biological">Insect/Animal Plagues</option>
							<option value="El-Niño%Climatological">El-Niño</option>
							<option value="Wildfires%Climatological">Fires/Wildfires"</option>
							<option value="Fires%Man-made">Fires"</option>										
							<option value="Human Induced%Man-made">Human Induced</option>
					</select>
					</div>

					

					

					<div class="input_wrapper"><p class="label">
					<label for="datestarted ">Date Started:</label></p>
					<input type="date" name="admission_date" id="date_added" class="form-control">
					</div>
							
				
						
					<div class="input_wrapper"><p class="label">
					<label for="status">Attachment</label></p>
					<input type="file" id="myFile" name="myFile" />
					</div>
					<div class="input_wrapper"><p class="label">
					<label for="description">Description</label></p>
					<textarea
							cols='25'
							rows='7'
							placeholder='Description/Remarks/Links'
							id='description'
							class='pp'
					></textarea></div>
					          
					<div class="input_wrapper" style="margin:auto">
					<input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submit">
					<input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear"> 
					</div>        
        
        </div>
      </div>
	</div>
	</div>
	<div class="pannel_con">
	<div class="pannel" style="margin-top:10px;" onclick="slide('#incident_log')"><p class="lbl_wrap" id="pass_reset" ><img src="images\logs.png"> <u>I</u>ncident Logs</p></div>
    
      <div class="imgform-container " id="incident_log"> 
			
        <div class="imgform-img">
			<div class="inner-wrapper">
				<input type="text" id="search_disaster" Placeholder="Search Disaster" style="font-size: 18px;margin-right:10px;margin-left:5px;">
				<select id='search_category'>
								<?php 
								$str="SELECT distinct natureofdisaster, natureofdisaster FROM disaster";
								loadropdown($str,"natureofdisaster","natureofdisaster","Nature of Disaster");
								?>
				</select>
				<table class="disasters" style="margin-bottom:5px;margin-top:10px;">
				<?php
				$classes=array("all","item");
				$sql="select id,name,category,natureofdisaster,description, datestarted, file_upload  from disaster";
				$headers=array("","Name","Category","Nature","Description","Date logged","File");
				loadtable($sql,$headers,true,false,$classes);
				
				?>
				</table>
				<div class="input_wrapper" style="margin:auto">
					<input type="submit" value="Mofidy" id="modify" class="btn btn-primary" style="color:white;font-weight:800;">
					<input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear2"> 
				</div>
					
			</div>			
        </div>

       
   
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
		
		function slide(target){
			$(target).slideToggle("slow");
		}
		
		

$(document).ready(function(){
	
	var edit=false;
	var item_id="";
	enrycpt_each(".item");
	href_each(".disasters td:nth-child(7)");
	remove_next_word(".disasters td:nth-child(6)");	
	var alt=false;
	/* $(document).on("click",".item",function(){
		alert("click");
	}); */
	$(document).keyup(function(e) {
		if(e.key === "Alt"){
		alt=false;
		}
	});
	$(window).keyup(function(e) {
		if(e.key === "Alt"){
		alt=false;
		}
	});

	$(document).keydown(function(e) {
		//alert("key");
		if(e.key === "Alt"){
		alt=true;
		}
		if(alt){
			if(e.key === "H" || e.key === "h" ){
				$("#hazard_form").slideToggle("slow");
			}
			if(e.key === "i" || e.key === "I" ){
				$("#incident_log").slideToggle("slow");
			}
		}
	});
	$("#disaster").keyup(function(){
		validate("#disaster","");
	});
	$("#category").change(function(){
		validate("#category","0")
	});
	$("#date_added").change(function(){
		validate_date("#date_added");
		
	});
	


	$("#myFile").change(function(){
		//alert($(this).val());
		validate("#myFile","");
		//var file =$("#myFile").prop("files")[0];
		//alert(file["name"]);
		//$("#profile").attr("src",file["name"]);
		//console.log(file);
	});

	$("#description").keyup(function(){
		
		//alert($(this).val());
		validate("#description","");
		

	});
	
	function validate(target,value){
		if($(target).val().trim()==value){
			$(target).css({"border":"solid 1px red"}); 
			return true;
		}else{
			$(target).css({"border":"solid 1px rgb(118, 118, 118)"});
			return false;
		}
	}
	function validate_all(){

		var keys ={
			"#disaster":"",
			"#category":"0",
			"#myFile":"",
			"#description":""
		};

		var go=true;

		for(var key in keys){
			if(validate(key,keys[key])){
				go=false;
			}
		}
		validate_date("#date_added");
		if(go && validate_date("#date_added")==false){
			return true;
		}
		else{
			return false;
		}
	}

	$("#submit").click(function(){
		
		if(validate_all()){
			$("#err_lbl").remove();
			var date= new Date($("#date_added").val());
			var str_date=date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
				
			var file =$("#myFile").prop("files")[0];
		
			var form= new FormData();
			form.append("myFile",file);
			//console.log(form);
			
			$.ajax({
				url:"AJAX/file_upload.php",
				type: "POST",
				data:form,
				contentType:false,
				processData:false,
				success: function(result){
					var ajax_src="";
					if(edit==false){
						ajax_src="AJAX/insert_disaster.php";
					}
					else{
						ajax_src="AJAX/edit_disaster.php";
					}

					//alert(result);
						if(result!="error"){
							$.post(ajax_src,{
								disaster_id:item_id,
								disaster: $("#disaster").val(),
								category: $("#category").val(),
								myFile: result,
								description: $("#description").val(),
								datestart: str_date							
							},
							function(data){
								if(data=="New record created!"){
									if(edit==false){
										Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",600);
									
									}else{
										Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>Record has been successfully updated!</b>",600);
									
									}
									edit=false;
									$("#submit").val("Submit");
									$('#msg').remove();
									clear();
									item_id="";
									var str="select id,name,category,natureofdisaster,description, datestarted, file_upload  from disaster";
									var headers="%Name%Category%Nature%Description%Date logged%File";
									var classes ="all%item";
									global_load_table(str,headers,true,false,classes,".disasters",".item",".disasters td:nth-child(7)",".disasters td:nth-child(6)");
									

								}
								else{
									Popup_modal_show("Error with data entry. Please contact the administrator! "+data,600);
								}
							
							}); 
						}else{
							alert("Error with file upload!");
						}
					
					
				}


			});
			
				
		}
		else{
			$("#err_lbl").remove();
			$(".entry").before("<p style='color \
			:red;text-align:right;font-size:1.1em;margin:auto;width:100%;' id='err_lbl'>Reqiured Fields Cannot be Empty!</p>");
	
		}
	});

	function clear(){
		var keys ={
			"#disaster":"",
			"#category":"0",
			"#myFile":"",
			"#description":""
		};

		for(var key in keys){
			$(key).val(keys[key]);
			$(key).css({"border":"solid 1px rgb(118, 118, 118)"});
		}
		
		$("#date_added").css({"border":"solid 1px rgb(118, 118, 118)"});
		$('#date_added').val(new Date());
		$("#err_lbl").remove();
		
			$("#submit").val("Submit");
			$('#msg').remove();
			
			eidt=false;
	}
	$("#clear").click(function(){
		if(edit){
				$(".item:checked").prop("checked",false);
				$("#err_2").remove();
			}
		clear();
		

	});
	$("#search_category").change(function(){
		var str="select id,name,category,natureofdisaster,description, \
			datestarted, file_upload  from disaster where natureofdisaster= '"+$(this).val()+"'";
			var headers="%Name%Category%Nature%Description%Date logged%File";
			var classes ="all%item";
			global_load_table(str,headers,true,false,classes,".disasters",".item",".disasters td:nth-child(7)",".disasters td:nth-child(6)");
			
	});

	$("#search_disaster").keyup(function(){
		//alert("test");
			var str="select id,name,category,natureofdisaster,description, \
			datestarted, file_upload  from disaster where name like '%"+$(this).val()+"%'";
			var headers="%Name%Category%Nature%Description%Date logged%File";
			var classes ="all%item";
			global_load_table(str,headers,true,false,classes,".disasters",".item",".disasters td:nth-child(7)",".disasters td:nth-child(6)");
									

	});
	$("#clear2").click(function(){
		$(".item").prop("checked",false);
		$("#err_2").remove();
	});
	$("#modify").click(function(){
		var chk_size=$(".item:checked").length;
		if(chk_size>1){
			$("#err_2").remove();
			$(".disasters").before("<p id='err_2' style='color:red;width:100%;text-align:center;'>You can only select one record to be mofied!</p>");
		}
		else if(chk_size==1){
			$("#err_2").remove();
			Popup_modal_show("<b>WARNING!</b><br><br><p>Modifications will also reflect accross all etc records, please ensure that data entegrity is preserved!</p>",300);
			
			$("#submit").val("Save");
			$('#msg').remove();
			$(".entry").before("<p id='msg' style='width:100%;text-align:center;'><b>Edit Module</b></p>");
			//$("#disaster").val();
			/* $.each($(".item:checked").parent().siblings(),function(){
				alert($(this).text());
			}); */
			item_id =$(".item:checked").val();
			var name=$(".item:checked").parent().next();
			//alert(item_id);
			edit=true;
			var category=$(name).next();
			//alert($(category).text());
			var nature=$(category).next();
			var desc=$(nature).next();
			var date_log=$(desc).next().text();
			var date_arr=to_array(date_log," ");
			var attch=$(date_log).next().find("a").attr("href");
			//alert(attch);
			$("#disaster").val($(name).text());
			$("#category").val($(nature).text()+"%"+$(category).text());
			$("#myFile").text(attch);
			//$('#date_added').datepicker({ dateFormat: 'yy-mm/dd' });
			$('#date_added').val(date_arr[0]);
			$("#description").val($(desc).text());

		}
		else{
			$("#err_2").remove();
			$(".disasters").before("<p id='err_2' style='color:red;width:100%;text-align:center;'>You must select 1 record to be modified!</p>");
			
		
		}
	});

 });
    </script>