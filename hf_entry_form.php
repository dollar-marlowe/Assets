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
			width:fit-content;
			margin-left:5px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}

		#hr_radio_container{
				overflow: scroll;
				width: 100%;
				height: 500px;
			}

		table #hf_table{

			width:fit-content;
			overflow: scroll;
			height: 500px;
		}
		table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}

		#hf_table tr th:nth-child(4),
		#hf_table tr th:nth-child(6),
		#hf_table tr th:nth-child(8),
		#hf_table tr th:nth-child(10),
		#hf_table tr th:nth-child(13){
			display:none;
		}
		#hf_table tr td:nth-child(4),
		#hf_table tr td:nth-child(6),
		#hf_table tr td:nth-child(8),
		#hf_table tr td:nth-child(8),
		#hf_table tr td:nth-child(10),
		#hf_table tr td:nth-child(13){
			display:none;
		}

		
		.pannel{
			
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
			background-color:white;
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

		.input_wrapper .station_input{
			padding: 2px 2px;
			font-size: 18px;

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
			margin-bottom:30px;				
		}
		
		@media (max-width:1366px){
			#hf_table tr th:nth-child(14),
			#hf_table tr th:nth-child(15),
			#hf_table tr td:nth-child(14),
			#hf_table tr td:nth-child(15){
			display:none;
		}
			
			
		}
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.align_center{
			margin:auto;
			width:fit-content;
		}
			#hf_table tr th:nth-child(11),
			#hf_table tr td:nth-child(11),
			#hf_table tr th:nth-child(9),
			#hf_table tr td:nth-child(9){
			display:none;
		}
	}
	
		@media (max-width:820px){
			table{
			
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			#hf_table tr th:nth-child(11),
			#hf_table tr td:nth-child(11),
			#hf_table tr th:nth-child(9),
			#hf_table tr td:nth-child(9){
			display:none;
			}
		}
		@media (max-width:600px){
			table{
				
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			.pannel h2{
			
			font-size:13px;		
			}
			.pannel h2 img{
				width:20px;
				margin-bottom:-4px;
			}
			.input_wrapper, .inner-wrapper,#search_station{
				width:fit-content;
				/*width: 100%;*/
				font-size:9px;


				
				
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

			#hf_table tr th:nth-child(7),
			#hf_table tr td:nth-child(7){
			display:none;
			}
			
		}
		@media(max-width:400px){
			
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

			#hf_table tr th:nth-child(12),
			#hf_table tr td:nth-child(12),
			#hf_table tr th:nth-child(3),
			#hf_table tr td:nth-child(3){
			display:none;
			}


		}

		@media(max-width:320px){
			#hf_table tr th:nth-child(12),
			#hf_table tr td:nth-child(12){
			display:none;
			}
		}
		@media(max-width:280px){
			
		}
		input[type=submit]{
			width:200px;
			
		}	
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="station_entry_form">
	<br>
 	<div class="pannel_con">
		<div class="pannel" onclick="slide('#station_form_div')" >
            <p class="lbl_wrap" id="accounts"><img src="images\compass4.png"><u>H</u>F Station Entry Form</p>
        </div>
      
    	<div class="imgform-container " id="station_form_div">
			<div class="imgform-img">
				<div class="inner-wrapper top">
		
					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Station Name:</label></p>
					    <input type="text" class="station_input" disabled placeholder="Station Name" id="hf_name"/>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Station Code:</label></p>
					    <input type="text" class="station_input" disabled placeholder="Station Code" id="hf_code"/>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Region:</label></p>
					    <select id="region" name="region" class="station_input" onchange="FetchRegion(this.value,'SELECT * FROM province where reg_id=','#province','id','name','')">
							<?php
							$str="SELECT id, name FROM region";
							loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 
							?>
						</select>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Province:</label></p>
					    <select id="province" disabled name='province'  class="station_input" 
						onchange="FetchRegion(this.value,'SELECT * FROM municipality where province_id=','#municipality','id','name','Region')">
						<option value=0>Select from Region</option>
						</select>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">City/Municipality:</label></p>
					    <select id="municipality" disabled name='municipality'  class="station_input" 
						onchange="FetchRegion(this.value,'SELECT * FROM barangay where muni_id=','#barangay','id','name','Municipality')">
						<option value=0>Select from Province</option>
						</select>
                    </div>
					
					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Barangay:</label></p>
						<select id="barangay" disabled name='barangay'  class="station_input" onchange="revertcss('#barangay')">
						<option value=0>Select from Municipality</option>
						</select>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Status:</label></p>
						<select id="status" name='status'  class="station_input" onchange="revertcss('#status')">
						<option value=0>Select from Options</option>
						<option value="Operational">Operational</option>
						<option value="Intermittent">Intermittent</option>
						<option value="Rehabilitation">Rehabilitation</option>
						<option value="No Communication">No Communication</option>
						<option value="Proposed">Proposed</option>			
						</select>
                    </div>

					<div class="input_wrapper entry">
                        <p class="label"><label for="disaster">Latitude:</label></p>
						<input type="text" placeholder="Latitude *" class="station_input" id="hf_lat"/><br>
						<p class="label"><label for="disaster">Longitude:</label></p>
                		<input type="text" placeholder="Longitude *" class="station_input" id="hf_long"/>
                    </div>

					<div class="input_wrapper">
						<p class="label">
					    <label for="description">Description:</label></p>
							<textarea
							cols='25'   
							rows='7'
							placeholder='Description/Remarks/Additional info'
							id='description'
							class='pp'
							></textarea>
					</div>
					          
					<div class="input_wrapper" style="margin:auto">
						<input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submit">
						<input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear"> 
					</div>        

        		</div>
      		</div>
		</div>
	</div>
	

 	<div class="pannel_con">
			<div class="pannel" onclick="slide('#station_table_div')" >
           		<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station List</p>
        	</div>
 		
		<div class="imgform-container " id="station_table_div">
			<div class="imgform-img">
			<div class="inner-wrapper">
				<input type="text" id="search_station" Placeholder="Search HF Station" style="font-size: 18px;margin-right:10px;margin-left:5px;">
				<select id="search_region">
					<?php 
						$str="SELECT id,name FROM region";
						loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 
					?>
					</select>
				<div id="hr_radio_container">
					<table class="disasters" id="hf_table" style="margin-bottom:5px;margin-top:10px;">
						<?php
							$classes=array("all","item");
							$sql="select hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc from hf_locations order by hf_id desc";
							$headers=array("tik","Station Name","Station_Code","Region_Code","Region","Prov_Code","Province","Muni_Code","Municipality","Brgy.Code","Barangay","Status","Lat","Long","desc");
							loadtable($sql,$headers,true,false,$classes);
						?>
					</table>
				</div>
			</div>
			</div>
		</div>
	</div>

</section>


<script>



		function slide(target){
			$(target).slideToggle("slow");
		}
		
		function revertcss(elem){
		//alert($(elem).val()+" "+elem);
			if($(elem).val()!=0){
				$(elem).css("border-bottom-color","#ddd");
			}
			if($(elem).val()==0){
				$(elem).css("border-bottom-color","red");
			} 
 		 }

		 
			
	$(document).ready(function(){
		var province_value_option;
		var municipality_value_option;
		var barangay_value_option;
		$("#hf_table td:nth-child(5)").css("width","20px");

		var edit=false;
		var item_id="";
		enrycpt_each(".item");
		href_each(".disasters td:nth-child(16)");
		remove_next_word(".disasters td:nth-child(15)");	
		var alt=false;

		//kung tama ako, ito ay para sa shortcut key
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
					$("#station_entry_form").slideToggle("slow");
				}
				if(e.key === "i" || e.key === "I" ){
					$("#incident_log").slideToggle("slow");
				}
			}
		});


		$("#barangay").change(function(){
			
			// alert($("#submit").val());
			//if($("#submit").val()=="Update"){
		
				//for auto station name input
				var hf_name_add = $("select#municipality.station_input").find(":selected").text();
				var hf_name_add_del_extra1 = hf_name_add.split("(Capital)").join("");
				var hf_name_add_del_extra2 = hf_name_add_del_extra1.split("CITY").join("");
				var hf_name_add_del_extra3 = hf_name_add_del_extra2.split(" OF ").join("");
				var hf_name_add_to_input = "DICT" + " " + hf_name_add_del_extra3;
				$("input#hf_name.station_input").val(hf_name_add_to_input);

				//for auto station code input
				// var hf_code_add = $("select#region.station_input").val(); +hf_code_add +
				var hf_code_for_mod = $("select#barangay.station_input").val();
				if(hf_code_for_mod.length<5){
					hf_code_for_mod=hf_code_for_mod.padStart(5, 0);
					var hf_code_add_to_input ="HF-" + hf_code_for_mod;
					//alert(hf_code_add_to_input);
				}else{
					var hf_code_add_to_input ="HF-" + $("select#barangay.station_input").val();
				}
			
				$("input#hf_code.station_input").val(hf_code_add_to_input);
				$("input#hf_name.station_input").prop("disabled",false);
			
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
				"#hf_name":"",
				"#hf_code":"",
				"#region":"0",
				"#province":"0",
				"#municipality":"0",
				"#barangay":"0",
				"#status":"0",
				"#hf_lat":"",
				"#hf_long":"",
				"#description":""
			};

			var go=true;
			for(var key in keys){
				if(validate(key,keys[key])){
					go=false;
				}
				else{
					go=true;
				}
			}
		}

		$("#submit").click(function(){
		
		//alert((province_value).val());

		var btn_option_val = this.value;
		btn_option = btn_option_val == "Submit" ? "AJAX/add_hf_station.php" : "AJAX/edit_hf_station.php";
		//alert(btn_option);
			var select_in=is_empty_class("select.station_input","0");
			var txt_are_in=is_empty_class("textarea.pp","");
				if(is_empty_class("input.station_input","")==false && select_in==false && txt_are_in==false){
					if(btn_option_val=="Submit"){
						$.post(btn_option,
						{
							hf_name: 		$("#hf_name").val(),
							hf_code: 		$("#hf_code").val(),
							region: 		$("#region").val(),
							province: 		$("#province").val(),
							municipality: 	$("#municipality").val(),
							barangay: 		$("#barangay").val(),
							status: 		$("#status").val(),
							hf_lat: 		$("#hf_lat").val(),
							hf_long: 		$("#hf_long").val(),
							description: 	$("#description").val()						
						},
							function(data){
								//alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",100);
									load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"national","");
									setTimeout(function() {
										$("#clear").click();
										window.location.reload();
									}, 1000);
									 
								}else{
									alert("All fields are required to be filled with input.");
								}
							});	

					}else if(btn_option_val=="Update"){
						if($("select#province.station_input").is(':disabled')){
							$.post(btn_option,
							{
								hf_id:				item_id,
								hf_name: 			$("#hf_name").val(),
								hf_code: 			$("#hf_code").val(),
								region: 			$("#region").val(),
								province: 			province_value_option,
								municipality: 		municipality_value_option,
								barangay: 			barangay_value_option,
								status: 			$("#status").val(),
								hf_lat: 			$("#hf_lat").val(),
								hf_long: 			$("#hf_long").val(),
								description: 		$("#description").val()						
							},
							function(data){
								// alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>Record has been successfully updated!</b>",100);
									load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"national","");
									setTimeout(function() {
										$("#clear").click();
										window.location.reload();
									}, 1000);
									
									 
								}else{
									alert("All fields are required to be filled with input.");
								}
							});	
		
						}else{
							$.post(btn_option, 
							{
								hf_id:				item_id,
								hf_name: 			$("#hf_name").val(),
								hf_code: 			$("#hf_code").val(),
								region: 			$("#region").val(),
								province: 			$("#province").val(),
								municipality: 		$("#municipality").val(),
								barangay: 			$("#barangay").val(),
								status: 			$("#status").val(),
								hf_lat: 			$("#hf_lat").val(),
								hf_long: 			$("#hf_long").val(),
								description: 		$("#description").val()						
							},
							function(data){
								// alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>Record has been successfully updated!</b>",100);
									load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"national","");
									setTimeout(function() {
										$("#clear").click();
										window.location.reload();
									}, 1000);
								  
								}else{
									alert("All fields are required to be filled with input.");
								}
							});	
						}
					}
						
				}else{
					//alert("Empty");
					$("#err_lbl").remove();
					$(".top").before("<p style='color \
					:red;' id='err_lbl'>Required fields cannot be empty!</p>");
				}
				
		});

		$("#search_region").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"regional_all",$(this).val());
			// var str="select hf_id, station_name, region, province from hf_locations where station_name= '"+$(this).val()+"'";
			// 	var headers="Tik%Station Name%Region%Province%";
			// 	var classes ="all%item";
			// 	global_load_table(str,headers,true,false,classes,".disasters",".item",".disasters td:nth-child(11)",".disasters td:nth-child(10)");	
		});

		$("#search_station").keyup(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"open_all",$(this).val());
			//alert($(this).val());
		});

		$("#clear").click(function(){
			clear();
			$("#province").prop("disabled",true);
			$("#province").defaultSelected;
			$("#municipality").prop("disabled",true);
			$("#municipality").defaultSelected;
			$("#barangay").prop("disabled",true);
			$("#barangay").defaultSelected;
			
		});

		// $(document).on("click",".item",function(){
		// 	alert("click");
		// });

		$(".logo").click(function(){
			// alert("tae");
			window.location = "hf_main.php";
		});

		$(".item").click(function(){
			//$("#myModal").css("display","none");
			$("#clear").click();
			$("span.close").css("display","none");
			//$("#station_form_div").onclick=(slide('#station_form_div'));
			
			
			var elem="<div class='input_wrapper' style='width:100%' id='modify_div'> \
							<p class='label' style='width:100%'>Do you want to modify selected station?</p> <br>\
							\
							<input class='label' type='submit' value='MODIFY' id='modify_station' style='width:100%;'> \
							<input class='uael-close-modal' type='submit' value='Cancel' id='modify_cancel' style='width:100%'> \
							\
						</div>\
							";
			
					$(".big").css("height");
			
					Popup_modal_show(elem,200);
					$(".big div div .label").css("text-align","center");

		});	
		$(document).on("click",".item",function(){
			//$("#myModal").css("display","none");
			$("#clear").click();
			$("span.close").css("display","none");
			//$("#station_form_div").onclick=(slide('#station_form_div'));
			
			
			var elem="<div class='input_wrapper' style='width:100%' id='modify_div'> \
							<p class='label' style='width:100%'>Do you want to modify selected station?</p> <br>\
							\
							<input class='label' type='submit' value='MODIFY' id='modify_station' style='width:100%;'> \
							<input class='uael-close-modal' type='submit' value='Cancel' id='modify_cancel' style='width:100%'> \
							\
						</div>\
							";
			
					$(".big").css("height");
			
					Popup_modal_show(elem,200);
					$(".big div div .label").css("text-align","center");

		});	

		$(document).on("click","#modify_cancel",function(){
			$("#myModal").css("display","none");
			$(".item:checked").prop("checked",false);
		});


		$(document).on("click","#modify_station",function(){
			//alert("Panget");
				var chk_size=$(".item:checked").length;
				if(chk_size>1){
					$("#err_2").remove();
					$(".disasters").before("<p id='err_2' style='color:red;width:100%;text-align:center;'>You can only select one record to be modified!</p>");
				}else if(chk_size==1){
					$("#err_2").remove();
							
					Popup_modal_show("<b>Updating HF Station</b><br><br><p>Selected HF Station's details loaded!</p>",300);
					$('span.close').css('display','block');
					
					$(".item").attr("disabled", true);
					$("#station_table_div").onclick=(slide('#station_table_div'));
					$("#station_form_div").onclick=$("#station_form_div").slideDown("slow");
					
					$("html, body").animate({scrollTop:0,}, 500, 'swing');
					$("#submit").val("Update");
					$('#msg').remove();
					
					//$(".entry").before("<p id='msg' style='width:100%;text-align:center;'><b>Edit Module</b></p>");
					
					// $.each($(".item:checked").parent().siblings(),function(){
					// alert($(this).text());
					// });
					//alert(item_id);	
					
					item_id=$(".item:checked").val();
						edit=true;
					var hf_name=$(".item:checked").parent().next();	
					var sta_code=$(hf_name).next();			
					var region=$(sta_code).next(); //option value
					var regionAlt=$(region).next();

					var province=$(regionAlt).next();//option value
					var provinceAlt=$(province).next();

					var municipality=$(provinceAlt).next();//option value
					var municipalityAlt=$(municipality).next();

					var barangay=$(municipalityAlt).next();//option value
					var barangayAlt=$(barangay).next();

					province_value_option =province.text();
					municipality_value_option =municipality.text();
					barangay_value_option =barangay.text();

					var status=$(barangayAlt).next();
					var latitude=$(status).next();
					var longitude=$(latitude).next();
					var description=$(longitude).next();

					$("#hf_name").val($(hf_name).text());
					$("#hf_code").val($(sta_code).text());
					$("#region").val($(region).text());
					//alert($(province).text());
					$("#province").html("<option>"+$(provinceAlt).text()+"</option>");
					$("select#province.station_input").prop("disabled",true);
					// $("select#region.station_input").prop("onchange",FetchRegion(this.value,'SELECT * FROM municipality where province_id=','select#province.station_input','id','name','Region'));
					//$("select#province.station_input").prop("onchange",FetchRegion(this.value,'SELECT * FROM municipality where province_id=','select#municipality.station_input','id','name','Region'));
					$("#municipality").html("<option>"+$(municipalityAlt).text()+"</option>");
					$("select#municipality.station_input").prop("disabled",true);			
					//$("#municipality").val($(municipality).text());
					$("#barangay").html("<option>"+$(barangayAlt).text()+"</option>");
					$("select#barangay.station_input").prop("disabled",true);	
					$("#status").val($(status).text());
					$("#hf_lat").val($(latitude).text());
					$("#hf_long").val($(longitude).text());
					$("#description").val($(description).text());

					$("input#hf_name.station_input").prop("disabled",false);
						
				}else{
					$("#err_2").remove();
					$(".disasters").before("<p id='err_2' style='color:red;width:100%;text-align:center;'>You must select 1 record to be modified!</p>");
				}
			
		});

		function clear(){
			$("#err_lbl").remove();
			var keys ={
				"#hf_name":"",
				"#hf_code":"",
				"#region":"0",
				"#province":"0",
				"#municipality":"0",
				"#barangay":"0",
				"#status":"0",
				"#hf_lat":"",
				"#hf_long":"",
				"#description":""
			};

			for(var key in keys){
				$(key).val(keys[key]);
				$(key).css({"border":"solid 1px rgb(118, 118, 118)"});
			}
		
			$("#err_lbl").remove();
				$("#submit").val("Submit");
				$('#msg').remove();
		}


					function load_hf_table(target,classes,header,columns,with_checkbox,with_header_chk,filter,mydata){
					$.post("AJAX/load_hf_table.php",
					{
						filter_type: filter,
						data:mydata,
						my_head:header,
						my_classes:classes,
						my_columns:columns,
						chk: with_checkbox,
						all_chk: with_header_chk

					},
					function(data){
						$(target).html(data);
					});
				}
	});
 </script>