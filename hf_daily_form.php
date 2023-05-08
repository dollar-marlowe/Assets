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
		.input_wrapper .station_log_mod{
			padding: 2px 2px;
			font-size: 18px;
		}
		textarea.station_log_mod{
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

		#signal_value{
			width: 70%;
			padding: 5px;
			margin: 0px 10px;


		}

		#station_remarks{
			width: 70%;
			padding: 5px;
		}

		#weather_div{
			display: block;
			margin:auto;
			/* border:solid 1px black; */
			width: inherit;
			align-items:center;

		}
		#weather_div input[type="submit"] {
		display: inline-block;
		margin: 5px;
		}

		#log_option{
			width: 50%;
		}
		#list_station_suggestions{
			list-style-type: disc;
			-webkit-columns: 3;
			-moz-columns: 3;
			columns: 3;
			list-style-position: inside;
			font-size:12px;
		}

		#search_station_logged{
			font-size: 18px;
			margin-right:10px;
			margin-left:5px;
		}



		@media (max-width:1343px){
			.imgform-container{
				display:block;

			}
			.align_center{
			margin:auto;

			width:fit-content;

		}

		.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:70%;}
		}

		@media (max-width:1267px){
			.imgform-container{
				display:block;

			}
			.align_center{
			margin:auto;

			width:fit-content;

		}
		.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:70%;}

		#log_option{
			width: 70%;
		}

		}
		@media (max-width:820px){
			table{

				font-size:13px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
				font-size:95%;
			}

			#weather_div{
				width: inherit;
			}

			#log_option{
				font-size: inherit;
				width: 100%;;
			}

			#list_station_suggestions{
			list-style-type: disc;
			-webkit-columns: 3;
			-moz-columns: 3;
			columns: 3;
			list-style-position: inside;
			font-size:10px;
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
				width:90%;
			}
			th:nth-child(5),td:nth-child(5){
				display:none;
			}

			#list_station{
				display: none;
			}

			#signal_value{
				width: 90%;
			}

			#station_remarks{
				width: 90%;
			}

			.imgform-img{
				width:100%;
			}

			#list_station_suggestions{
			list-style-type: disc;
			-webkit-columns: 2;
			-moz-columns: 2;
			columns: 2;
			list-style-position: inside;
			font-size:10px;
		}
		#search_station_logged{
			width: 100%;
			margin: 0px 5px;
		}
		#filter_type_selection{
			width: 100%;
			margin: 0px 5px;
		}


		}
		@media(max-width:400px){
			th:nth-child(3),td:nth-child(3),
			th:nth-child(8),td:nth-child(8){
				display:none;

			}
			.pannel h2{
				display:block;
			}
			.pannel{
				width: inherit;
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
			#list_station_suggestions{
			list-style-type: disc;
			-webkit-columns: 1;
			-moz-columns: 1;
			columns: 1;
			list-style-position: inside;
			font-size:8px;
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
		<div class="pannel" onclick="slide('#station_form_div')">
			<p class="lbl_wrap" id="accounts"><img src="images\compass4.png"><u>H</u>F Stations Daily Log</p>
		</div>

		<div class="input_wrapper" style=" display:flex; padding:1%; width:100%; align-items:baseline;display:none;">
			<!--this div is for single or group log entry-->
			<p class="label"><label >Logging Option:</label></p>
				<select id="log_option">
					<option value="Single">Single Station Daily Log</option>
					<option value="Group">Group Station Daily Log</option>
				</select>
		</div>

		<div class="pannel">
			<div class="imgform-container" id="station_form_div" style="width:100%;">
				<div class="imgform-img">
					<div>
								<div class="input_wrapper entry" id="single_log_div" style="width:100%;">
									<div class="label_show_card" style="width:100%;background-color:lightblue;">
												<p class="label" style="width:100%;"><label>Recommended Stations</label></p>
												<p class="label" style="width:100%;"><label>From <span id="curtime_display"></span> -  <span id="nexttime_display"></span></label></p>
												<ul id="list_station_suggestions" style="text-align:left;  padding:5px 20px;">
													<?php
														$timezone = new DateTimeZone('GMT+8');
														$start = new DateTime('now', $timezone);
														// $start = new DateTime(); // current time
														$diffInMinutes = 60 - $start->format('i'); // calculate difference to nearest hour
														$end = clone $start;
														$end->add(new DateInterval('PT' . $diffInMinutes . 'M')); // add difference to current time
														$start_time = $start->format("H:i");
														$end_time = $end->format("H:i");

														// Format start and end time for SQL query
														//added coment here
														$start_time_sql = $start->format("H:i");
														$end_time_sql = $end->format("H:i");
														$str = "SELECT hf_log_id, station_name, log_time FROM trial_daily_log WHERE log_time BETWEEN '$start_time_sql' AND '$end_time_sql'  GROUP BY station_name";
														loadstationlist_time($str, "station_name", "station_name", "log_time", "Recorded");

													?>
												</ul>
									</div>
									<br>
									<p class="label"><label for="disaster" id="label_log_option">Single HF Station Log</label></p>

									<!--<p class="label"><label for="disaster" id="label_log_option2">...</label></p>-->
									<br><br>
									<p class="label" id="station_name_label"><label for="disaster">Station Name:</label></p>
										<input tabindex="1" type="text" name="city" id="station_name"  placeholder="Station Name *" list="list_station" class="station_log" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px">


										<datalist id="list_station" name="list_station" hidden>
												<?php
													$str="SELECT distinct hf_id, station_name, region FROM hf_locations WHERE NOT station_status ='Proposed'";
													loadstationlist($str,"station_name","region","hf_id","station_name");
												?>
											</datalist>

									<p class="label"><label for="disaster" id="station_assignee_label">Assignee:</label></p>
									<input tabindex="2" type="text" id="station_assignee" placeholder="Call Sign *" class="station_log" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px">
									<br><br>

									<p class="label"><label for="disaster">Date:</label></p>
									<input type="date" id="get_date"  class="station_log station_multi" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px;">

									<p class="label"><label for="disaster">Time:</label></p>
									<input type="time" id="get_time"  class="station_log station_multi" style="font-size: 18px;margin-right:10px;margin-left:10px;padding:5px;">

										<div class="input_wrapper" style="margin:auto">
											<input type='submit' Value='Timestamp' class="btn btn-primary" id="get_Timestamp" style="color:white;font-weight:800;">
										</div>
									<br>

									<div class="input_wrapper" id="weather_div">
										<p class="label"><label >Weather</label></p>
										<br>
										<input type='submit' Value='Sunny' 	class="btn btn-primary" id="get_Sunny" style="color:white;font-weight:800;">
										<input type='submit' Value='Cloudy' class="btn btn-primary" id="get_Cloudy" style="color:white;font-weight:800;">
										<input type='submit' Value='Rainy' 	class="btn btn-primary" id="get_Rainy" style="color:white;font-weight:800;">
									</div>
									<br>
									<div class="input_wrapper" style="margin:0px;width:100%; justify-content:center;">
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
											<br><br>
									<p class="label"><label for="disaster" id="station_assignee_label">Remarks</label></p>
										<textarea id="station_remarks" placeholder="type 'N/A' if none" class="station_log" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px;" >N/A</textarea>

									</div>

								</div>

								<br>

								<div class="input_wrapper" style="margin:auto">
									<input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submit">
									<!-- <input type='submit' Value='Submit All' class="btn btn-primary" style="color:white;font-weight:800;" id="submit_all"> -->
									<input type='submit' Value='Clear' class="btn btn-primary" style="background-color:white;color:black;font-weight:800;" id="clear">
								</div>
							</div>
						</div>

            		</div>
        		</div>
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
           		<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station Today's Logs</p>
        	</div>

		<div class="imgform-container " id="station_table_div">
			<div class="imgform-img">
			<div class="inner-wrapper">
				<input type="text" id="search_station_logged" Placeholder="Search HF Station">
				<select id="filter_type_selection">
					<?php
					$today =date("Y-m-d");
					$str="SELECT distinct weather FROM hf_daily where log_date='$today'";
					loadropdown($str,"weather","weather","weather");
					?>
				</select>

				<table class="disasters" id="hf_daily_log_table" style="margin-bottom:5px;margin-top:10px;">
					<?php
					$classes=array("all","item");
					$sql="select hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status, remarks from hf_daily_log where log_date=CURRENT_DATE order by log_time desc";
					$headers=array("tik","Station Name","Station Assignee","Date","Time","Weather","Signal Status","Remarks");
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


  // get references to the HTML elements
  var curtime_display = document.getElementById("curtime_display");
  var nexttime_display = document.getElementById("nexttime_display");

  // create Date objects from the time valuess
  var startTime = new Date();
  startTime.setHours(<?php echo (int) substr($start_time_sql, 0, 2); ?>);
  startTime.setMinutes(<?php echo (int) substr($start_time_sql, 3, 2); ?>);
  var endTime = new Date();
  endTime.setHours(<?php echo (int) substr($end_time_sql, 0, 2); ?>);
  endTime.setMinutes(<?php echo (int) substr($end_time_sql, 3, 2); ?>);

  // format the time values as strings in 12-hour format with AM/PM
  var startTimeStr = startTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });
  var endTimeStr = endTime.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit', hour12: true });

  // set the text content of the HTML elements to the formatted time values
  curtime_display.textContent = startTimeStr;
  nexttime_display.textContent = endTimeStr;



	var stn_cd;
	var stn_cd_mod;
	var stn_cd_grp;
	var stn_log_gem;
	$("#search_provincial").css("display","none");
	$("#search_region").css("display","none");
	$("#group_log_div").css("display","none");
	$("#submit_all").css("display","none");
	$("#log_option").val("Single");
		var hf_collected="";
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

	$(window).keyup(function(e) {
		if(e.key === "Shift"){
		shift=false;
		}
	});

	$(document).keydown(function(e) {
		// salert("key");
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

			if(e.key === "1" || e.key === "1" ){
				$("#signal_value").val("1x1");
			}
			if(e.key === "2" || e.key === "2" ){
				$("#signal_value").val("2x2");
			}
			if(e.key === "3" || e.key === "3" ){
				$("#signal_value").val("3x3");
			}
			if(e.key === "4" || e.key === "4" ){
				$("#signal_value").val("4x4");
			}
			if(e.key === "5" || e.key === "5" ){
				$("#signal_value").val("5x5");
			}
			if(e.key === "Enter" || e.key === "Enter" ){
				$("#submit").click();
			}
			if(e.key === "s" || e.key === "S" ){
				$("#get_Sunny").click();
			}
			if(e.key === "c" || e.key === "C" ){
				$("#get_Cloudy").click();
			}
			if(e.key === "r" || e.key === "R" ){
				$("#get_Rainy").click();
			}

		}
	});



// 	document.getElementById("station_name").addEventListener("keydown", function(event) {
//   if (event.code === "Tab") {
//     event.preventDefault();

//     document.getElementById("station_name").focus();

//     var stationInput = document.getElementById("station_name");
//     stationInput.dispatchEvent(new Event('input')); // Show the datalist dropdown

//     setTimeout(function() {
//       var downArrowEvent = new KeyboardEvent("keydown", {key: "ArrowDown"});
//       var enterKeyEvent = new KeyboardEvent("keydown", {key: "Enter"});

//       // Dispatch arrow down and enter key events to select the first option
//       stationInput.dispatchEvent(downArrowEvent);
//       setTimeout(function() {
//         stationInput.dispatchEvent(enterKeyEvent);
//       }, 100);
//     }, 500);
// 	$("#get_Timestamp").click(); // Trigger the click event of #get_Timestamp
//   }
// });


document.getElementById("station_name").addEventListener("keydown", function(event) {
  if (event.code === "Tab") {
    // Trigger the click event of #get_Timestamp


    // Set focus on the input element
    $("#station_name").focus();
	// // $("#station_name").trigger("input");

    // // Simulate Arrow Down key press
    // $("#station_name").trigger(jQuery.Event('keydown', { key: "ArrowDown" }));

    // // Simulate Enter key press
    // $("#station_name").trigger(jQuery.Event('keydown', { key: "Enter" }));

	$("#get_Timestamp").click();
  }


});

// document.getElementById("list_station").addEventListener("keydown", function(event) {
//   if (event.code === "Tab") {
//     // Trigger the Tab key press event on the input element
//     $("#station_name").trigger(jQuery.Event('keydown', { key: "ArrowDown" }));
//   }
// });

document.addEventListener("keydown", function(event) {
  console.log("Key pressed: " + event.key);
});


// 	document.getElementById("station_name").addEventListener("keydown", function(event) {
//   if (event.code === "Tab") {
//     // event.preventDefault();
// 	$("#get_Timestamp").click(); // Trigger the click event of #get_Timestamp
//     $("station_name").focus();
//     //   var downArrowEvent = new KeyboardEvent("keydown", {key: "Tab"});
//     //   var enterKeyEvent = new KeyboardEvent("keydown", {key: "Enter"});
//     //   $("station_name").dispatchEvent(downArrowEvent);
//     //   $("station_name").dispatchEvent(enterKeyEvent);

// 	// $("station_name").dispatchEvent(new KeyboardEvent('keydown', {'key':'ArrowDown'} ));
// 	// $("station_name").dispatchEvent(new KeyboardEvent('keydown', {'key':'Enter'} ));
// 	// $("station_name").dispatchEvent(downArrowEvent);
//     // $("station_name").dispatchEvent(enterKeyEvent);

// 	$('station_name').trigger(jQuery.Event('keydown', { keyCode: 40 }));
// 	$('station_name').trigger(jQuery.Event('keydown', { keyCode: 13 }));
//   }
// });

// $(document).ready(function() {
//   $(document).on('keydown', function(event) {
//     if (event.keyCode === 9) { // Check if the pressed key is the tab key
//       $("#get_Timestamp").click(); // Trigger the click event of #get_Timestamp
//     }
//   });
// });

	// var stationNameInput = document.getElementById('station_name');

	// 	stationNameInput.addEventListener('keydown', function(event) {
	// 	if (event.keyCode === 9) { // Check if TAB key was pressed
	// 		// event.preventDefault(); // Prevent default TAB behavior

	// 		// Simulate down arrow key press
	// 		var downArrowEvent = new KeyboardEvent('keydown', {keyCode: 40});
	// 		stationNameInput.dispatchEvent(downArrowEvent);
	// 		alert("down arrow key pressed");

	// 		// Simulate enter key press
	// 		var enterKeyEvent = new KeyboardEvent('keydown', {keyCode: 13});
	// 		stationNameInput.dispatchEvent(enterKeyEvent);
	// 		alert("enter key pressed");
	// 	}
	// 	});

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


	//current task
	// $("#station_name").keyup(function(){
	// //alert($("#station_name").val());
	// 	var hidden_gem;
	// 	hidden_gem = $("#list_station").find("option[value='" + $(this).val() + "']").attr("name");
	// 	//alert(hidden_gem);
	// 	stn_cd=hidden_gem;

	// });

	$("#station_name").keyup(function(){
	var hidden_gem;
	hidden_gem = $("#list_station").find("option[value='" + $(this).val() + "']").attr("name");
	stn_cd=hidden_gem;

	// // Get the selected option in the list_station select element
	// var selectedOption = $("#list_station option[value='" + $(this).val() + "']");

	// // If an option is selected, set the value of the station_name field to its value attribute
	// if (selectedOption.length) {
	// 	$("#station_name").val(selectedOption.attr("value"));
	// }
	});


	//add mulitple HF ID under reg/prov
	$("#submit_all").click(function(){
		$.each($(".item:checked"),function(){
			hf_collected+=$(this).val() + " % ";
     		//alert($(this).text());
		});
		stn_cd_grp = hf_collected.trim();
		//alert(stn_cd_grp);
		// const array_hf_collected= hf_collected.split("  ");
		// alert(array_hf_collected);
		// const myArray = text.split(" ");
		// let word = myArray[1];
		// $.each($(".item:checked").parent().siblings(),function(){
		// alert($(this).text());
		//alert($("checkbox.item").text());

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

		var select_input = is_empty_class("input.station_multi","");
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
			$.post("AJAX/add_hf_log_multi.php",
			{
					station_name_grp: 	stn_cd_grp, //all selected checkboxes--
					station_assignee: 	"REGION Entry",
					get_date: 			$("#get_date").val(),
					get_time:			$("#get_time").val(),
					weather_status:		weather_stat,
					signal_status:		signal_val
			},
				function(data){
						//alert(data);
						if(data=="New records created!"){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b> Multiple New record has been created!</b>",600);
							load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
							setTimeout(function() {
							$("#clear").click();
							window.location.reload();
							}, 2000);
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
		var no_weather = "none";

		var select_input = is_empty_class("input.station_log","");
		var select_remarks = is_empty_class("textarea.station_log","");
		var select_select = is_empty_class("select#signal_value","0");

		var select_weather = no_weather == weather_stat ? true:false;
		//condition ? exprIfTrue : exprIfFalse

		// alert(select_input);
		// alert(select_select);
		// alert(select_weather);



		if(select_input==false && select_select==false  && select_weather==false && select_remarks==false) {
			//alert("May value");
			$("#err_lbl").remove();
			 //alert($("select#signal_value").val());
			// alert($("input.station_log").val());
			//    alert($("#station_name").val());
			//    alert($("#get_date").val());
			//    alert($("#get_time").val());


			// var str = "SELECT COUNT(*) FROM trial_daily_log WHERE log_date = '" + existing_station_date_log + "' AND station_name = '" + existing_station_name_log + "' AND log_time = '" + existing_station_time_log + "'";

			$.post("AJAX/check_dupli.php", {
			 existing_station_name_log :  $("#station_name").val(),
			 existing_station_date_log :  $("#get_date").val(),
			 existing_station_time_log :  $("#get_time").val()
			},

			function(data) {

				if(data=="Duplicate found!") {
				 	// alert(data);
					alert("This Log Already Exist!");
				} else {
					// alert(data);
					$.post("AJAX/add_hf_log.php", {
							station_name: 		stn_cd,
							station_assignee: 	$("#station_assignee").val(),
							get_date: 			$("#get_date").val(),
							get_time:			$("#get_time").val(),
							hf_remarks:			$("#station_remarks").val(),
							weather_status:		weather_stat,
							signal_status:		signal_val
					},
						function(data){
								// alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",100);
									$("html, body").animate({scrollTop:0,}, 500, 'swing');
									load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
									setTimeout(function() {
									$("#clear").click();
									window.location.reload();
									}, 1000);
								}else{
									alert("All fields are required to be filled with input.");
									}
					});
				}
			});


		}else{
			//alert("Empty");s
			$("#err_lbl").remove();
			$(".top").before("<p  style='color \
			:red;text-align:center' id='err_lbl'>Required fields cannot be empty!</p>");
			$("select#signal_value").css({'border':'1px solid red'});

		}

	});

	$("#clear").click(function(){
		// $("select#signal_value").prop()
			$("#station_name").val("");
			$("#station_assignee").val("");
			$("#get_date").val("");
			$("#get_time").val("");
			$("#get_Sunny").dblclick();
			$("#get_Rainy").dblclick();
			$("#get_Cloudy").dblclick();
			$("#signal_value").val("0");

	});

	$(".logo").click(function(){
			// alert("tae");
			window.location = "hf_main.php";
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
			$("#submit_all").css("display","none");
			$("#submit").css("display","inline");

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
			$("#submit_all").css("display","inline");
			$("#submit").css("display","none");


			// $("#station_name_label").css("visibility","hidden");
			// $("#station_name").css("visibility","hidden");
		}

	});

		$("#search_region").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"regional",$(this).val());
		});

		$("#search_provincial").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"provincial",$(this).val());
		});

		$("#search_scope").change(function(){
			if($(this).val()=="national"){
				$("#search_region").css("display","none");
				$("#search_provincial").css("display","none");
				//load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"national","");
			}else if($(this).val()=="regional"){
				$("#search_region").css("display","inline");
				$("#search_provincial").css("display","none");

			}else if($(this).val()=="provincial"){
				$("#search_region").css("display","inline");
				$("#search_provincial").css("display","inline");

			}

			//load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"regional",$(this).val());
		});


		$("#search_station").keyup(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"open",$(this).val());
		});

		//for HF daily log table na ito
		$("#search_station_logged").keyup(function(){
			load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name,station_assignee, log_date, log_time, weather, signal_status",'true','false',"open",$(this).val());

		});

		$("#filter_type_selection").change(function(){
			load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"weather",$(this).val());

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
			// <input class='label' type='submit' value='Request to Delete Selected Log' id='delete_station_log' style='width:100%; margin: 5px; padding: 5px;'> \
			stn_log_gem=($(".item:checked").val());
			
			


			var station_display_modify = $(".item:checked").parent().next().text();
			var elem="<div class='input_wrapper' style='width:100%' id='modify_div'> \
							<p class='label' style='width:100%; font-size:inherit;'>Currently selected <br> <b>"+station_display_modify+"</b/></p>\
							<input class='label' type='submit' value='Request to Modify Selected Log' id='modify_station_log' style='width:100%; margin: 5px; padding: 5px;'> \
							<input class='uael-close-modal' type='submit' value='CANCEL' id='modify_cancel_log' style='width:100%; margin: 5px;padding: 5px;'> \
							\
						</div>\
							";

					$(".big").css("height");

					Popup_modal_show(elem,200);
					$(".big div div .label").css("text-align","center");

		});

		$(document).on("click","#modify_cancel_log",function(){
			$("#myModal").css("display","none");
			$(".item:checked").prop("checked",false);
		});

		$(document).on("click","#modify_station_log",function(){
			//alert("Panget");
			

				// $("#modify_div").css("display","none");
				var station_display_modify =				$(".item:checked").parent().next().text();
				var station_display_modify_assignee = 		$(".item:checked").parent().next().next().text();
				var station_display_modify_date = 			$(".item:checked").parent().next().next().next().text();
				var station_display_modify_time = 			$(".item:checked").parent().next().next().next().next().text();
				var station_display_modify_weather = 		$(".item:checked").parent().next().next().next().next().next().text();
				var station_display_modify_status = 		$(".item:checked").parent().next().next().next().next().next().next().text();
				var station_display_modify_remarks = 		$(".item:checked").parent().next().next().next().next().next().next().next().text();

				var elem2="<div class='input_wrapper' style='width:100%;justify-contents:center;height:500px;' id='modify_inputs_div'> \
									<div style='display:inline-block; align-items:center;'>\
										<p class='label' id='station_name_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Station Name:</label></p>\
											<input type='text' name='city' id='station_name_mod' placeholder='Station Name *' value='"+station_display_modify+"' list='list_station' class=' station_log_mod' style='width:100%; margin: 5px; padding: 5px;'>\
										<p class='label' id='station_assignee_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Assignee:</label></p>\
											<input type='text' id='station_assignee_mod' placeholder='Call Sign *' value='"+station_display_modify_assignee+"' class=' station_log_mod' style='width:100%; margin: 5px; padding: 5px;'><br>\
										<p class='label' id='station_date_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Date:</label></p>\
											<input type='date' id='get_date_mod' class='  station_log_mod' value='"+station_display_modify_date+"' style='width:100%; margin: 5px; padding: 5px;'>\
										<p class='label' id='station_time_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Time:</label></p>\
											<input type='time' id='get_time_mod' class=' station_log_mod' value='"+station_display_modify_time+"' style='width:100%; margin: 5px; padding: 5px;'>\
										<p class='label' id='station_weather_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Weather:</label></p>\
										<select id='weather_value_mod' style='width:100%; margin: 5px; padding: 5px;' class='station_log_mod'>\
										<option value='Sunny' "+(station_display_modify_weather.trim() === 'Sunny' ? 'selected' : '')+">Sunny</option>\
										<option value='Cloudy' "+(station_display_modify_weather.trim() === 'Cloudy' ? 'selected' : '')+">Cloudy</option>\
										<option value='Rainy' "+(station_display_modify_weather.trim() === 'Rainy' ? 'selected' : '')+">Rainy</option>\
										</select>`\
										\
										<p class='label' id='station_weather_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Signal Status:</label></p>\
											<select id='signal_value_mod' style='width:100%; margin: 5px; padding: 5px;' class='station_log_mod'>\
													<option value='1x1' "+(station_display_modify_status.trim() === '1x1' ? 'selected' : '')+">1x1</option>\
													<option value='2x2' "+(station_display_modify_status.trim() === '2x2' ? 'selected' : '')+">2x2</option>\
													<option value='3x3' "+(station_display_modify_status.trim() === '3x3' ? 'selected' : '')+">3x3</option>\
													<option value='4x4' "+(station_display_modify_status.trim() === '4x4' ? 'selected' : '')+">4x4</option>\
													<option value='5x5' "+(station_display_modify_status.trim() === '5x5' ? 'selected' : '')+">5x5</option>\
												</select>\
										<p class='label' id='station_remarks_label' style='width:100%; margin: 0px 5px; padding: 5px;'><label for='disaster'>Remarks:</label></p>\
										<textarea id='station_remarks_mod' placeholder='type N/A if none'  style='width:100%; margin: 5px;padding: 5px; resize: none; overflow:scroll;'  class='station_log_mod'>"+station_display_modify_remarks+"</textarea>\
										\
											<br><input class='label' type='submit' value='UPDATE' id='send_station_update_log' style='width:100%; margin: 5px; padding: 5px;background-color:black;color:white;'> \
											<br><input class='uael-close-modal' type='submit' value='CANCEL' id='send_station_cancel_log' style='width:100%; margin: 5px;padding: 5px;'> \
									</div>\
								</div>\
						";

					$(".big").css("height");

					Popup_modal_show(elem2,100);
					$(".big ").css("height","125%");
					$(".big div div .label").css("text-align","center");
					
					
					stn_cd_mod  = $("#list_station").find("option[value='" + $("#station_name_mod").val() + "']").attr("name");
		
		});

		$(document).on("click","#send_station_cancel_log",function(){

			$(".big ").css("height","auto");
			$("#myModal").css("display","none");
			$(".item:checked").prop("checked",false);
		});


		$(document).on("click","#send_station_update_log",function(){
			// $(".big ").css("height","auto");
			// $("#myModal").css("display","none");
			// $(".item:checked").prop("checked",false);
			// alert("Clicked!");

			// alert(stn_cd_mod);

			var select_input_mod = is_empty_class("input.station_log_mod","");
			// alert(select_input_mod);
			var select_remarks_mod = is_empty_class("textarea.station_log_mod","");
			// alert(select_remarks_mod);
			var select_select_mod = is_empty_class("select.station_log_mod","0");
			// alert(select_select_mod);

			if(select_input_mod==false && select_select_mod==false  && select_remarks_mod==false) {
				$("#err_lbl").remove();

					$.post("AJAX/edit_hf_log.php", {
							station_id: 		stn_cd_mod,
							station_assignee: 	$("#station_assignee_mod").val(),
							get_date: 			$("#get_date_mod").val(),
							get_time:			$("#get_time_mod").val(),
							hf_remarks:			$("#station_remarks_mod").val(),
							weather_status:		$("#weather_value_mod").val(),
							signal_status:		$("#signal_value_mod").val(),
							log_gem:			stn_log_gem
					},
						function(data){
								// alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>Selected log has been updated!</b>",100);
									$("html, body").animate({scrollTop:0,}, 500, 'swing');
									$(".big ").css("height","auto");
									$("#myModal").css("display","none");
									$(".item:checked").prop("checked",false);
									
									load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
									setTimeout(function() {
									$("#clear").click();
									window.location.reload();
									}, 2000);
								}else{
									alert("All fields are required to be filled with input.");
									}
					});

			}else{
				//alert("Empty");s
				$("#err_lbl").remove();
				$(".top").before("<p  style='color \
				:red;text-align:center' id='err_lbl'>Required fields cannot be empty!</p>");
				$("select#signal_value").css({'border':'1px solid red'});
			}

		});


		$(document).on("change","#station_name_mod",function(){
			// alert("changed");
			$("#station_name_mod").css("color","orange");

		});
		$(document).on("change","#station_assignee_mod",function(){
			// alert("changed");
			$("#station_assignee_mod").css("color","orange");

		});

		$(document).on("change","#get_date_mod",function(){
			// alert("changed");
			$("#get_date_mod").css("color","orange");

		});

		$(document).on("change","#get_time_mod",function(){
			// alert("changed");
			$("#get_time_mod").css("color","orange");

		});

		$(document).on("change","#weather_value_mod",function(){
			// alert("changed");
			$("#weather_value_mod").css("color","orange");

		});
		$(document).on("change","#signal_value_mod",function(){
			// alert("changed");
			$("#signal_value_mod").css("color","orange");

		});
		$(document).on("change","#station_remarks_mod",function(){
			// alert("changed");
			$("#station_remarks_mod").css("color","orange");

		});

		$(document).on("keyup","#station_name_mod",function(){
			// alert("Working!");
			var hidden_gem_mod;
			

			hidden_gem_mod = $("#list_station").find("option[value='" + $(this).val() + "']").attr("name");
			stn_cd_mod = hidden_gem_mod;
			stn_cd_mod = stn_cd_mod;
			
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
						//var arr_class=to_array(classes,"%");
						enrycpt_each(".item");
					});
				}

		function load_hf_daily_table(target,classes,header,columns,with_checkbox,with_header_chk,filter,mydata){
					$.post("AJAX/load_hf_daily_table.php",
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
						//alert(data);
						$(target).html(data);
						enrycpt_each(".item_log");
					});
				}


});
</script>
