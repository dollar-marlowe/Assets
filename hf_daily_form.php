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

		table #hf_table{
			width:fit-content;
			overflow: scroll;
			font-size:9px;
		}

		table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}

		#hf_table tr th:nth-child(4),
		#hf_table tr th:nth-child(6),
		#hf_table tr th:nth-child(8),
		#hf_table tr th:nth-child(9),
		#hf_table tr th:nth-child(10),
		#hf_table tr th:nth-child(11),
		#hf_table tr th:nth-child(12),
		#hf_table tr th:nth-child(13),
		#hf_table tr th:nth-child(14),
		#hf_table tr th:nth-child(15),
		#hf_table tr th:nth-child(16){
			display:none;
		}
		#hf_table tr td:nth-child(4),
		#hf_table tr td:nth-child(6),
		#hf_table tr td:nth-child(8),
		#hf_table tr td:nth-child(9),
		#hf_table tr td:nth-child(10),
		#hf_table tr td:nth-child(11),
		#hf_table tr td:nth-child(12),
		#hf_table tr td:nth-child(13),
		#hf_table tr td:nth-child(14),
		#hf_table tr td:nth-child(15),
		#hf_table tr td:nth-child(16){
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

		.input_wrapper .station_log{
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
 <section id="station_entry_form">
	<br>
 <div class="pannel_con">
	<div class="pannel"> <!--onclick="slide('#station_form_div')" -->
            <p class="lbl_wrap" id="accounts"><img src="images\compass4.png"><u>H</u>F Stations Daily Log</p>
			
			<div class="input_wrapper" style="margin:auto">
				<!--this div is for single or group log entry-->
				<p class="label"><label >Logging Option:</label></p>
					<select id="log_option">
						<option value="Single">Single Station Daily Log</option>
						<option value="Group">Group Station Daily Log</option>
					</select>		
			</div>
			<br>
		
		
        <div class="imgform-container " id="station_form_div">
	        <div class="imgform-img">
				<div class="inner-wrapper top">	
				    <div class="input_wrapper entry" id="single_log_div">
						<p class="label"><label for="disaster" id="label_log_option">Single HF Station Log</label></p>
						<br><br>
                        <p class="label" id="station_name_label"><label for="disaster">Station Name:</label></p>				       
							<input type="text" name="city" id="station_name" placeholder="Station Name *" list="list_station" class="station_log" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px">
								<datalist id="list_station" name="list_station" hidden>
									<?php
										$str="SELECT distinct station_name, region, province FROM hf_locations";
										loadstationlist($str,"station_name","region","province");
									?>
								</datalist>

						<div class="input_wrapper entry" id="group_log_div">
							<!--<p class="label"><label for="disaster">Group HF Station Log</label></p><br><br>-->
							<p class="label"><label>Search Stations:</label></p>
						
							<input type="text" id="search_station" Placeholder="Search HF Station" style="font-size: 18px;margin-right:10px;margin-left:5px;">
							<select id="search_region">
								<?php 
									$str="SELECT id,name FROM region";
									loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 
								?>
							</select>
						
							<table class="disasters" id="hf_table" style="margin-bottom:5px;margin-top:10px;">
								<?php
									$classes=array("all","item");
									$sql="select hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc from hf_locations";
									$headers=array("","Station Name","Station_Code","Region_Code","Region","Prov_Code","Province","Muni_Code","Municipality","Brgy.Code","Barangay","Status","Lat","Long","desc");
									loadtable($sql,$headers,true,true,$classes);
								?>
							</table>
						</div>

						
						<p class="label"><label for="disaster" id="station_assignee_label">Assignee:</label></p>
						<input type="text" id="station_assignee" placeholder="Optional *" class="station_log" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px">
						<br><br>
						
						<p class="label"><label for="disaster">Date:</label></p>
						<input type="date" id="get_date"  class="station_log" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px;">
						
						<p class="label"><label for="disaster">Time:</label></p>
						<input type="time" id="get_time"  class="station_log" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px;">
						
							<div class="input_wrapper" style="margin:auto">
								<input type='submit' Value='Timestamp' class="btn btn-primary" id="get_Timestamp" style="color:white;font-weight:800;">
							</div>	
						<br>
							
						<div class="input_wrapper" style="margin:auto" id="weather_div">
						<p class="label"><label >Weather</label></p>		
								<input type='submit' Value='Sunny' 	class="btn btn-primary" id="get_Sunny" style="color:white;font-weight:800;">
								<input type='submit' Value='Cloudy' class="btn btn-primary" id="get_Cloudy" style="color:white;font-weight:800;">
								<input type='submit' Value='Rainy' 	class="btn btn-primary" id="get_Rainy" style="color:white;font-weight:800;">
						</div>
						<br>
						<div class="input_wrapper" style="margin:auto">
						<p class="label"><label >Signal Status</label></p>
						<select id="signal_value">
							<option value="0">Select from below</option>
							<option value="1x1">1 x 1</option>
							<option value="2x2">2 x 2</option>
							<option value="3x3">3 x 3</option>
							<option value="4x4">4 x 4</option>
							<option value="5x5">5 x 5</option>
						</select>		
								<!-- <input type='submit' Value='5x5' 	class="btn btn-primary" id="get_Sunny" style="color:white;font-weight:800;width:12%;">
								<input type='submit' Value='4x4' 	class="btn btn-primary" id="get_Cloudy" style="color:white;font-weight:800;width:12%;">
								<input type='submit' Value='3x3' 	class="btn btn-primary" id="get_Rainy" style="color:white;font-weight:800;width:12%;">
								<input type='submit' Value='2x2' 	class="btn btn-primary" id="get_Cloudy" style="color:white;font-weight:800;width:12%;">
								<input type='submit' Value='1x1' 	class="btn btn-primary" id="get_Rainy" style="color:white;font-weight:800;width:12%;"> -->
						</div>
						
						<br><br>

						<div class="input_wrapper" style="margin:auto">
							<input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submit">
							<input type='submit' Value='Clear' class="btn btn-primary" style="background-color:white;color:black;font-weight:800;" id="clear"> 
						</div>

					</div>
						

							
			
                </div>
				<br>
            </div>
        </div>

		<!--for Group ito na div -->
		
		<div class="imgform-container " id="station_form_div">
	        <div class="imgform-img">
				<div class="inner-wrapper top">	
				    
						
				

					</div>
				</div>
			</div>
		</div>
        
 	</div>
 </div>

 <div class="pannel_con">
			<div class="pannel" onclick="slide('#station_table_div')" >
           		<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station Log</p>
        	</div>
 		
		<div class="imgform-container " id="station_table_div">
			<div class="imgform-img">
			<div class="inner-wrapper">
				<input type="text" id="search_station" Placeholder="Search HF Station" style="font-size: 18px;margin-right:10px;margin-left:5px;">
				<select id="search_region">
					<?php 
						$str="SELECT distinct station_name, station_region, region, province FROM hf_daily";
						loadropdown($str,"station_name","region","province");
					?>
				</select>
				
				<table class="disasters" style="margin-bottom:5px;margin-top:10px;">
				<?php
				$classes=array("all","item");
				$sql="select hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status from hf_daily order by log_date desc";
				$headers=array("tik","Station Name","Station Assignee","Date","Time","Weather","Signal Status");
				loadtable($sql,$headers,true,false,$classes);
				
				?>
				</table>
				</div>
			</div>
		</div>
	</div>
 <!-- </section> -->

<script>
    function slide(target){
		$(target).slideToggle("slow");
		}
	
    
    $(document).ready(function(){

		//decrypt
		//filter-- for each checkbox
		//then encrypt ulit
	// $("#station_name_label").css("visibility","hidden");
	// $("#station_name").css("visibility","hidden");
	$("#group_log_div").css("display","none");
	$("#log_option").val("Single");
	var edit=false;
	var item_id="";
	enrycpt_each(".item");
	href_each(".disasters td:nth-child(11)");
	remove_next_word(".disasters td:nth-child(10)");	
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

	$("#get_Timestamp").click(function(){
		var now = new Date(Date.now());

		var hours = now.getHours();
		hours = hours <=9 ? '0' + hours : hours;

		var minutes = now.getMinutes();
		minutes = minutes <= 9 ? '0' + minutes : minutes;

		var months =(now.getMonth()+1);
		months = months <= 9 ? '0' + months : months;

		var dates =now.getDate();
		dates = dates <= 9 ? '0' + dates : dates;

		var formatted = hours + ":" + minutes;
		//var str_date = (now.getMonth()+1) + "/" + now.getDate()+ "/" + now.getFullYear();
		var str_date = now.getFullYear() + "-" + months + "-" + dates;

		// alert(formatted);
		// alert(str_date);
		//  $("#get_time").val($(formatted).text());
		//  $("#get_date").val(str_date());
		
		$("#get_time").val((formatted));
		$("#get_date").val((str_date));
	});

	$("#get_Sunny").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Cloudy").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Rainy").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Cloudy").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Sunny").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Rainy").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Rainy").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Cloudy").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Sunny").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Sunny").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});

	$("#get_Cloudy").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});
	
	$("#get_Rainy").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});


	$("#submit").click(function(){
		//pag save ng log sa DB heheheh
		//alert($("#get_date").val());
		$("#err_lbl").remove();
		
		$("div#weather_div").css({'border':'none'});
		$("select#signal_value").css({'border':'none'});
		var weather_stat="";
			
				let btn1_value = document.getElementById("get_Sunny").style.backgroundColor;
				let btn2_value = document.getElementById("get_Cloudy").style.backgroundColor;
				let btn3_value = document.getElementById("get_Rainy").style.backgroundColor;
				// alert(btn1_value);
				// alert(btn2_value);
				// alert(btn3_value);

				if(btn1_value=="green") {
					// alert("Sunny");
					weather_stat="Sunny";
					//alert(weather_status);
				}else if(btn2_value=="green"){
					// alert("Cloudy");
					weather_stat="Cloudy";
					//alert(weather_status);
				}else if(btn3_value=="green"){
					// alert("Rainy");
					weather_stat="Rainy";
					//alert(weather_status);
				}else{
					//alert("PILI KA Weather");
					weather_stat="none";
					$("div#weather_div").css({'border':'2px solid red','padding':'1em'});
				}
		

		
		var signal_val = $("select#signal_value").val();
		var no_weather = "";

		var select_input = is_empty_class("input.station_log","");
		var select_select = is_empty_class("select#signal_value","0");
		var select_weather = no_weather == weather_stat ? true:false;
		//condition ? exprIfTrue : exprIfFalse

		// alert(select_input);
		// alert(select_select);
		// alert(select_weather);

		if(select_input==false && select_select==false  && select_weather==false) {
			//alert("May value");
			$("#err_lbl").remove();
			 //alert($("select#signal_value").val());
			// alert($("input.station_log").val());
			$.post("AJAX/add_hf_log.php", 
			{
					station_name: 		$("#station_name").val(),
					station_assignee: 	$("#station_assignee").val(),
					get_date: 			$("#get_date").val(),
					get_time:			$("#get_time").val(),
					weather_status:		weather_stat,
					signal_status:		signal_val				
			},
				function(data){
						//alert(data);
						if(data=="New record created!"){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",600);								
						}else{
							alert("All fields are required to be filled with input.");
							}
			});		
	
		
		}else{
			//alert("Empty");
			$("#err_lbl").remove();
			$(".top").before("<p  style='color \
			:red;text-align:center' id='err_lbl'>Required fields cannot be empty!</p>");
			$("select#signal_value").css({'border':'1px solid red'});

		}

	});

	$("#clear").click(function(){
		// $("select#signal_value").prop()
	});


	$("#log_option").change(function(){

		//alert($("#log_option").val());
		if($("#log_option").val() =="Single"){
			//$("#single_log_div").css("display","block");
			$("#group_log_div").css("display","none");	
			//$("#station_name").css("display","block");
			$("#label_log_option").text("Single Station Log");
			$("#station_name_label").css("visibility","visible");
			$("#station_name").css("visibility","visible");
			$("#station_assignee").css("visibility","visible");
			$("#station_assignee_label").css("visibility","visible");

		}else if(($("#log_option").val() =="Group")){
			//$("#group_log_div").css("display","block");
			//$("#single_log_div").css("display","none");
			//$("#station_name").css("display","none");	
			$("#group_log_div").css("display","block");
			$("#label_log_option").text("Group Station Log");
			$("#station_name_label").css("visibility","hidden");
			$("#station_name").css("visibility","hidden");
			//station_assignee na elements
			$("#station_assignee").css("visibility","hidden");
			$("#station_assignee_label").css("visibility","hidden");


			// $("#station_name_label").css("visibility","hidden");
			// $("#station_name").css("visibility","hidden");
		}

	});

	$("#search_region").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"regional",$(this).val());


			
			// var str="select hf_id, station_name, region, province from hf_locations where station_name= '"+$(this).val()+"'";
			// 	var headers="Tik%Station Name%Region%Province%";
			// 	var classes ="all%item";
			// 	global_load_table(str,headers,true,false,classes,".disasters",".item",".disasters td:nth-child(11)",".disasters td:nth-child(10)");	
		});

		$("#search_station").keyup(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"open",$(this).val());
			//alert($(this).val());
		});

		$(".item").click(function(){

			var numberOfChecked = $('input:checkbox:checked').length;
			var totalCheckboxes = $('input:checkbox').length;
			var numberNotChecked = totalCheckboxes - numberOfChecked;

			alert(numberOfChecked);


		});

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
