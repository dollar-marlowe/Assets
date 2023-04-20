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
		#hf_table tr th:nth-child(1),
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
		#hf_table tr td:nth-child(1),
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
			padding:0px;
			background-color:white;
            justify-content: center;


		}
		.pannel h2{
			display:inline;
			padding-left:20px;
			padding-right:20px;
			font-size:18px;

		}
		.lbl_wrap{
			margin:10px;
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
			-webkit-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			-moz-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			width:80%;
			margin:auto;
			border-radius:0 0 30px 30px;



		}
		#hf_info_only{
			width:100%;
			}
		
		#myChart{  
				padding:20px 5px;
			
				
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
			#map_hf_all{
			display:block;
			}
			
			}
			#hf_filter_status{
				display: block;
			}
			#hf_tables{
				display: block;
			}
			
			#myChart{
				padding:20px 5px;
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

			#map_hf_all{
				display:none;

			}
		
			#hf_filter_status{
				display: none;
			}
			#hf_tables{
				display: none;
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

        .nav-panel {
        width: 100%;
        border-bottom: 2px solid navy;
        }

        .nav-panel ul {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0;
        margin-top: 20px;
        }

        .nav-panel li {
        padding: 10px 20px;
        border-right: 1px solid navy;
        }

        .nav-panel li:last-child {
        border-right: none;
        }

        .nav-panel li a {
        color: navy;
        text-decoration: none;
        font-weight: bold;
        }

        .nav-panel li a:hover {
        color: white;
        background-color: navy;
        }

        .halfcol{
				width:100%;
				display:block;
				border:solid 1px #ddd;
				border-radius:10px;
				margin-top:5px;
				margin-bottom:10px;
		}

        .cols{
		display:inline-block;
		width:49.5%;

		border-radius:10px;
		border:solid 1px #ddd;
		margin-top:0px;
		margin-bottom:10px;
		}
		.cols1{
			float:left;
		}
		.cols2{

			float:right;
			padding:20px;
			padding-top:0px;
        }

        .label_show_card {
            color: white;
            display: inline-block;
            padding: 20px 80px;
            border-radius: 15px;
            background-color: navy;
            text-align: center;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            width:90%;
            margin-top: 10px;
            box-shadow: -2px 2px 26px -12px rgba(220,120,0,.87);

        }

        .pannel_show_card{
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
			background-color:white;
            padding-bottom: 10px;
            display: flex;
            overflow:auto;
            float:left;
            width: 50%;


        }

        .pannel_holder{
			width:auto;
			margin-top:5px;
            overflow: hidden;
            justify-content: center;

		}


        .pannel_holder .pannel_show_card{
			width:45%;
			margin:1%;
            padding:20px 50px;
            justify-content: center;
            box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
		}

        #station_form_div {
            margin: 20px;
            width:100%;
        }

		#region{
			display:block;
			width: 90%;
			word-wrap:break-word;
			font-size: 12px;
		}

		#date_range_con{
			justify-content: center;
			display:flex;
			align-items:baseline;
		}

		/* #map-container {width: 50%; height: 500px;} */
		 #map-container {
		position: relative;
		width: 100%;
		height: 700px;
		justify-content: center;
		}

		#map {position: absolute; top: 0; right: 0; bottom: 0; left:0; margin: 2px; }
		#map-container2 {
		position: relative;
		width: 100%;
		height: 700px;
		justify-content: center;
		}
		#map2 {position: absolute; top: 0; right: 0; bottom: 0; left:0; margin: 2px; }
		/*#map {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		max-width: 100%;
		max-height: 100%;
		} */

		/* #list_station_log{
			list-style-type: disc;
			-webkit-columns: 2;
			-moz-columns: 2;
			columns: 2;
			list-style-position: inside;
		} */


</style>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>


<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
	<div class="nav-panel">
		<ul>
			<?php
				$pages = array("Return to HF MAIN PAGE" => "hf_main.php", "Back to HOME" => "home.php");
				foreach ($pages as $page => $url) {
					echo "<li><a href='$url'>$page</a></li>";
				}
			?>
		</ul>
	</div>
	<br>
    
    <div id="analytics_form_title">
            <p class="lbl_wrap"  style="text-align:center; margin:0px; width:100%; justify-content:center;">HF Daily Data Analytics Module</p>   
    </div>
    <br>
    <section id="analytics_form">
         <!-- first Pannel -->
            <div id="hf_info_only">
                <div class="pannel" >
					<div onclick="slide('#station_daily_Analytics_div')">
                    	<p class="lbl_wrap" id="hf_daily_summary_lbl" ><img src="images\compass4.png"><u>D</u>aily Logs</p>
					</div>
					<div class="label_show_card" style="padding:20px 5px;" id="station_daily_Analytics_div">
						<p class="label"><label >HF Frequency Monitoring</label></p>
						<div id="date_range_con">
								<p class="label"><label for="disaster">Start Date:</label></p>
								<input type="date" id="get_start_date"  class="station_log station_multi" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px; height:inherit;">
								<!--end date -->
								<p class="label"><label for="disaster">End Date:</label></p>
								<input type="date" id="get_end_date" class="station_log station_multi" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px; height:inherit;">
								<input type='submit' Value='Filter' class="btn btn-primary" id="enter_date_range" style="color:black;font-weight:800;background-color: white; ">
								<!-- <p id="enter_date_range" class="label_show_card" style="padding:2px; margin:2px; width:fit-content"><label style="padding:2px; margin:2px; width:fit-content"> FILTER</label></p> -->
							</div>
						<canvas id="myChart" style="width:100%; margin-top:10px; background-color:white;height:auto;"></canvas>
					</div>
				</div>
            </div>
			<br>
			<div class="pannel_con" hidden>
			<div class="pannel" onclick="slide('#station_table_div')" >
				<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station Logs Filter by Date</p>
				</div>
				<div class="imgform-container " id="station_table_div">
					<div class="imgform-img">
						<div class="inner-wrapper">
							
								<table class="disasters" id="hf_daily_log_table" style="margin-bottom:5px;margin-top:10px;">
									<?php
									$classes=array("all","item");
									$sql="select station_name, station_assignee, log_date, log_time, weather, signal_status from hf_daily_log order by log_time desc";
									$headers=array("Station Name","Station Assignee","Date","Time","Weather","Signal Status");
									loadtable($sql,$headers,false,false,$classes);
									?>
								</table>
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="pannel_con" style="width:100%;">
			<div class="pannel" onclick="slide('#station_time_div')" >
				<p class="lbl_wrap" id="accounts"><img src="images\compass4.png"><u>A</u>ctive HF Stations List by Time</p>
				</div>
				<div class="imgform-container " id="station_time_div">
					<div class="imgform-img">
						<div class="label_show_card" style="width:100%;">
                                <p class="label"><label>Possible Active Stations</label></p>
                                <ul id="list_station_remarks" style="font-size:12px; text-align:left;  padding:5px 20px;">
                                    <?php
										$timezone = new DateTimeZone('GMT+8');
										$start = new DateTime('now', $timezone);
                                        // $start = new DateTime(); // current time
										$diffInMinutes = 60 - $start->format('i'); // calculate difference to nearest hour
										$end = clone $start;
										$end->add(new DateInterval('PT' . $diffInMinutes . 'M')); // add difference to current time
										$start_time = $start->format("H:i");
										$end_time = $end->format("H:i");
                                        $str = "SELECT hf_log_id, station_name, log_time FROM trial_daily_log WHERE log_time BETWEEN '$start_time' AND '$end_time'  GROUP BY station_name";
                                        loadstationlist_time($str, "station_name", "station_name", "log_time", "Recorded");
                                    ?>
                                </ul>
						</div>
					</div>
				</div>
			</div>
        
    </section>
	<script>
		 function slide(target){
		$(target).slideToggle("slow");
		}

		$("#station_daily_Analytics_div").slideUp("slow");
		
    $(document).ready(function(){

		
		
		var officeCountsArray = []; // Define officeCountsArray outside of loadTableData
		loadTableData();
	
	
		function loadTableData() {
			var officeCounts = {};

			$("#hf_daily_log_table tr").each(function() {
				var officeName = $(this).find("td:eq(0)").text();
				if (!officeCounts.hasOwnProperty(officeName)) {
					officeCounts[officeName] = {
						"Sunny": 0,
						"Cloudy": 0,
						"Rainy": 0
					};
				}
				var weatherCondition = $(this).find("td:eq(4)").text();
				if (weatherCondition === "Sunny" || weatherCondition === "Cloudy" || weatherCondition === "Rainy") {
					officeCounts[officeName][weatherCondition]++;
				}
			});

			// Create an array of objects with the office name, total count, and individual weather condition counts
			var officeCountsArray = [];
			for (var officeName in officeCounts) {
				if (officeCounts.hasOwnProperty(officeName) && officeName.trim() !== '') {
					var sunnyCount = officeCounts[officeName]["Sunny"];
					var cloudyCount = officeCounts[officeName]["Cloudy"];
					var rainyCount = officeCounts[officeName]["Rainy"];
					var totalCount = sunnyCount + cloudyCount + rainyCount;
					officeCountsArray.push({
						"officeName": officeName + ": " + totalCount,
						"totalCount": totalCount,
						"sunnyCount": sunnyCount,
						"cloudyCount": cloudyCount,
						"rainyCount": rainyCount
					});
				}
				
			}
	
			// Sort the array by total count in descending order
			officeCountsArray.sort(function(a, b) {
			return b.totalCount - a.totalCount;
			});
			
			// Render the chart
			renderChart(officeCountsArray);
		}
		

		// Function to render chart
		function renderChart(officeCountsArray) {
			console.log(officeCountsArray);
			

			
			var ctx = document.getElementById('myChart').getContext('2d');
			

			if (myChart!=undefined) {
				myChart.destroy(); // destroy existing chart
			}
			var myChart = new Chart(ctx, {
				type: 'horizontalBar',
				data: {
					labels: officeCountsArray.map(function(item) {
						return item.officeName;
					}),
					datasets: [
						{
							label: 'Sunny',
							data: officeCountsArray.map(function(item) {
								return item.sunnyCount;
							}),
							backgroundColor: 'rgba(255, 206, 86, 0.2)',
							borderColor: 'rgba(255, 206, 86, 1)',
							borderWidth: 1
							
						},
						{
							label: 'Cloudy',
							data: officeCountsArray.map(function(item) {
								return item.cloudyCount;
							}),
							backgroundColor: 'rgba(255, 99, 132, 0.2)',
							borderColor: 'rgba(255, 99, 132, 1)',
							borderWidth: 1
						},
						{
							label: 'Rainy',
							data: officeCountsArray.map(function(item) {
								return item.rainyCount;
							}),
							backgroundColor: 'rgba(54, 162, 235, 0.2)',
							borderColor: 'rgba(54, 162, 235, 1)',
							borderWidth: 1
						}
					]
				},
				options: {
					scales: {
						xAxes: [{
							stacked: true
						}],
						yAxes: [{
							stacked: true
						}]
					},
					barPercentage: 0.1, // set the height of each bar to 50% of the available space
					categorySpacing: 0.1 // adjust the space between categories (offices)
	

					
				}
				
			});
			// Update the chart data and options
			
				myChart.data.datasets[0].data = officeCountsArray.map(function(item) {
					return item.sunnyCount;
				});
				myChart.data.datasets[1].data = officeCountsArray.map(function(item) {
					return item.cloudyCount;
				});
				myChart.data.datasets[2].data = officeCountsArray.map(function(item) {
					return item.rainyCount;
				});
				myChart.data.labels = officeCountsArray.map(function(item) {
					return item.officeName;
				});

		
				myChart.update(myChart);
		}


	$("#enter_date_range").click(function(){

		var start_date_val = ($("#get_start_date").val() !== '');
		var end_date_val = ($("#get_end_date").val() !== '');

		// alert(start_date_val);
		// alert(end_date_val);

		if (start_date_val && end_date_val) {
			load_hf_daily_table("#hf_daily_log_table","all%item_log","Station Name%Station Assignee%Date%Time%Weather%Signal Status%","station_name,station_assignee, log_date, log_time, weather, signal_status",'false','false',"date",$("#get_start_date").val(),$("#get_end_date").val());
			loadTableData();
		}else{
			alert("Select a Start and/or End date first.");
		}
		// alert($('#get_end_date').val());
	});


		function load_hf_daily_table(target,classes,header,columns,with_checkbox,with_header_chk,filter,mydata,mydata2){
					$.post("AJAX/load_hf_daily_table.php",
					{
						filter_type: filter,
						data:mydata,
						data2:mydata2,
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