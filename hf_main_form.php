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
			width:30%;
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
			#hf_info_only{
			width:25%;
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
			#hf_info_only{
				width:100%;
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
	<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>


<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
	<div class="nav-panel">
		<ul>
			<?php
				$pages = array("HF Daily Log Form" => "hf_daily.php", "HF Stations Data Entry" => "hf_entry.php");
				foreach ($pages as $page => $url) {
					echo "<li><a href='$url'>$page</a></li>";
				}
			?>
		</ul>
	</div>
	<br>

<section id="station_entry_form">
	<!-- DAILY -->
	<div>
	<p class="lbl_wrap"  style="text-align:center; margin:0px; width:100%; justify-content:center;" onclick="slide('#daily_HF_main_DIV')">HF MODULE MAIN PAGE</p>
	<div id="daily_HF_main_DIV" style=" width:100%; display:flex; flex-direction: row; align-content: flex-start;">
		<div style="align-self:stretch;" id="hf_info_only">
			<!-- first Panel -->
			<div class="pannel">
				<p class="lbl_wrap" id="hf_daily_summary_lbl" onclick="slide('#station_daily_DA_div')" ><img src="images\compass4.png">Daily Monitoring</p>
					<div class="pannel_holder" id = "station_daily_DA_div">
							<div>
								<p class="label_show_card" style="padding:10px 5px;">HF STATIONS<br><label><b><span style="font-size: 40px;text-decoration:underline; color:orange;" id="span_counter_total"></b></span><br>REPORTED</label></p>
								<br>
								<div class="label_show_card" style="padding:20px 5px;">
									<p class="label"><label >Monitored Weather</label></p>
									<canvas id="myChart" style="width:100%; margin-top:10px; background-color:white;"></canvas>
								</div>
								<div class="label_show_card" style="padding:20px 5px;">
                                    <label>
                                        <span>
                                        <p class="label"><label >Reported Concerns</label></p>
                                            <ul id="list_station_remarks" style="font-size:12px; text-align:left;  padding:5px 20px;">
                                                <?php
                                                    $today = date("Y-m-d");
                                                    $str = "SELECT distinct hf_log_id, station_name, remarks FROM trial_daily_log WHERE log_date='$today' AND remarks!='N/A'  AND remarks!='' ORDER BY station_name DESC";
                                                    loadstationlist_remarks($str, "station_name", "station_name", "remarks", "Recorded");
                                                ?>
                                            </ul>
                                        </span>
                                    </label>
                                </div>
								
								<div class="label_show_card" style="padding:20px 5px;">
									<p class="label"><label >HF Station <span id="span_date"></span>'s Log Filter by Region</label></p>
									<select id="filter_type_selection" style="width:100%;">
										<?php
											$today =date("Y-m-d");
											$str="SELECT distinct location_region FROM trial_daily_log where log_date='$today'";
											loadropdown($str,"location_region","location_region","region");
										?>
									</select>
									<label >
										<span style="font-size: 40px;" id="span_counter_total_0">
											<ul id="list_station_log" style="font-size:12px; text-align:left;  padding:5px 20px;">
												<?php
													$today = date("Y-m-d");
													$str = "SELECT distinct hf_log_id, station_name, location_region FROM trial_daily_log WHERE log_date='$today' ORDER BY station_name DESC";
													loadstationlist_count_log($str, "station_name", "location_region", "hf_log_id", "Recorded");
												?>
											</ul>
										</span>
									</label>
								</div>
							
								
							</div>
					</div>
			</div>
			<div class="pannel">
				<p class="lbl_wrap" id="hf_overall_summary_lbl" onclick="slide('#station_daily_DA_div_2')" ><img src="images\compass4.png">HF Stations Summary</p>
					<div class="pannel_holder" id = "station_daily_DA_div_2">
							<div>
								<p class="label_show_card" style="padding: 10px 20px;">EXISTING STATIONS<br><label><b><span style="font-size: 40px;text-decoration:underline; color:orange;" id="span_counter_total_2"></b></span><br>REPORTED</label></p>
								<br>
								<div class="label_show_card" style="padding:20px 5px;">
									<p class="label"><label >HF Stations by STATUS</label></p>
									<canvas id="myChart2" style="width:100%; margin-top:10px; max-height:300px; background-color:white;"></canvas>
									<br>
								</div>
								<div class="label_show_card" style="padding:20px 5px;" id="hf_filter_status">
									<p class="label"><label >FILTER HF STATIONS by STATUS</label></p>
									<dl id="status_hf_filter" style="width:90%;text-align:left;">
										<?php
											$str="SELECT distinct station_status FROM hf_locations";
											loadlist_withcheck($str,"station_status","station_status","Status");
										?>
									</dl>
								</div>
							</div>
					</div>
					
			</div>
		</div>
		<br>
			

			<!-- second Panel MAP Daily -->
		<div style="width:70%; padding:0px;" id="map_hf_all">
			<div class="pannel" style="width:100%; padding:0px;">
				<p class="lbl_wrap" id="hf_daily_map_lbl" onclick="slide('#hf_map_div')"><img src="images\compass4.png"><u>H</u>F Daily Monitored MAP</p>
				<div id="hf_map_div" class="inner-wrapper" style="width: 98%;">
					<!-- <div style="display:flex;width:100%;justify-content:center;"><input type="checkbox" id="circleToggle"> Show/Hide Ideal Range</input></div> -->
					<div id="map-container2" style="width: 100%; padding:0px;">
						<div id="map2" style="width: inherit; padding:0px;">load_hf_stations_map_2();</div>
					</div>
				</div>	
			</div>
			<div class="pannel" style="width:100%; padding:0px;">
				<p class="lbl_wrap" id="hf_overall_lbl" onclick="slide('#hf_map_div_2')"><img src="images\compass4.png"><u>H</u>F Overall MAP</p>
				<div id="hf_map_div_2" class="inner-wrapper" style="width: 98%;">
					<div style="display:flex;width:100%;justify-content:center;"> <input type="checkbox" id="circleToggle"> Show/Hide Ideal Range <i>(scale 1:100km)</i></input></div>
					<div id="map-container" style="width: 100%; padding:0px;">
						<div id="map" style="width: inherit; padding:0px;">load_hf_stations_map();</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	</div>
	<br>

	
	<br>
	<div style=" width:100%; flex-direction: row; align-content: flex-start;" id="hf_tables">
		<div class="pannel_con">
			<div class="pannel" onclick="slide('#station_table_div')" >
				<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station Logs Filter by Date</p>
				</div>

				<div class="imgform-container " id="station_table_div">
					<div class="imgform-img">
						<div class="inner-wrapper">
							<div id="date_range_con">
								<p class="label"><label for="disaster">Start Date:</label></p>
								<input type="date" id="get_start_date"  class="station_log station_multi" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px;">
								<!--end date -->
								<p class="label"><label for="disaster">End Date:</label></p>
								<input type="date" id="get_end_date" class="station_log station_multi" style="font-size: 18px; margin-right:10px; margin-left:10px; padding:5px;">
								<input type='submit' Value='Filter' class="btn btn-primary" id="enter_date_range" style="color:white;font-weight:800;">
								<!-- <p id="enter_date_range" class="label_show_card" style="padding:2px; margin:2px; width:fit-content"><label style="padding:2px; margin:2px; width:fit-content"> FILTER</label></p> -->
							</div>
								<table class="disasters" id="hf_daily_log_table" style="margin-bottom:5px;margin-top:10px;">
									<?php
									$classes=array("all","item");
									$sql="select station_name, station_assignee, log_date, log_time, weather, signal_status from hf_daily_log where log_date=CURRENT_DATE order by log_time desc";
									$headers=array("Station Name","Station Assignee","Date","Time","Weather","Signal Status");
									loadtable($sql,$headers,false,false,$classes);
									?>
								</table>
						</div>
					</div>
				</div>
		</div>

			<br>

		<div class="pannel_con">
				<div class="pannel" onclick="slide('#group_log_div')" >
				<p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Stations List</p>
				</div>

					<div class="imgform-container " id="group_log_div">
						<div class="imgform-img">
							<div class="inner-wrapper">
								<table class="disasters" id="hf_table" style="margin-bottom:5px;margin-top:10px;">
									<?php
										$classes=array("all","item");
										$sql="select hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc from hf_locations";
										$headers=array("","Station Name","Station_Code","Region_Code","Region","Prov_Code","Province","Muni_Code","Municipality","Brgy.Code","Barangay","Status","Lat","Long","desc");
										loadtable($sql,$headers,false,false,$classes);
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

    $(document).ready(function(){
		// load_hf_stations_map();


		$("#group_log_div").slideUp("slow");
		$("#station_table_div").slideUp("slow");


		 // Initialize the Leaflet map and tile layer
		 var map = L.map('map').setView([12.028207262012298, 121.38914521809126], 5);
			L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=ZNeVZYfFRnG1aR4nhFB6', {
				tileSize: 512,
				zoomOffset: -1,
				minZoom: 1,
				attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
				crossOrigin: true
			}).addTo(map);


			function load_hf_stations_map(filter) {
			$.post("AJAX/load_hf_stations_map.php", {
				filter_type:filter
			},
			function(data) {
				try {
					var stations = (typeof data === "object") ? data : JSON.parse(data);


					for (var i = 0; i < stations.length; i++) {
						var station = stations[i];

						var HF_Icon = L.Icon.extend({
							options: {
								// shadowUrl: 'images/tower_hf.png',
								iconSize:     [20, 30],
								// shadowSize:   [40, 54],
								iconAnchor:   [0, 0],
								shadowAnchor: [23, 43],
								shadowClass: 'leaflet-marker-icon',
								popupAnchor:  [12, 2]
							}
						});

						var greenHFicon = new HF_Icon({iconUrl: 'images/HF_Operational_icon_small.png'}),
							yellowHFicon = new HF_Icon({iconUrl: 'images/HF_Intermittent_icon_small.png'}),
							orangeHFicon = new HF_Icon({iconUrl: 'images/HF_Rehab_icon_small.png'}),
							redHFicon = new HF_Icon({iconUrl: 'images/HF_NoComs_icon_small.png'}),
							blueHFicon = new HF_Icon({iconUrl: 'images/HF_Proposed_icon_small.png'});

							if(station.station_status=="Operational"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: greenHFicon}).addTo(map);
							}else if(station.station_status=="Intermittent"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: yellowHFicon}).addTo(map);
							}else if(station.station_status=="Rehabilitation"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: orangeHFicon}).addTo(map);
							}else if(station.station_status=="No Communication"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: redHFicon}).addTo(map);
							}else if(station.station_status=="Proposed"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: blueHFicon}).addTo(map);
							}else{
								var marker = L.marker([station.station_lat, station.station_long]).addTo(map);
							}
						marker.bindPopup("<b>"+ station.station_name + "<br>Latitude: </b>" + station.station_lat + "<br><b>Longitude: </b>" + station.station_long + "<br><b>Status: </b>" + station.station_status + "<br><b>Remarks: </b>" + station.station_desc); // add a popup with the station name
						marker._icon.classList.add(station.station_status.replace(" ", "_"));
						marker._icon.classList.add(station.station_status.replace(" ", "_")+"_marker");
						var circle = L.circle([station.station_lat, station.station_long], {radius: 100000}).addTo(map);
						circle.getElement().classList.add("radius-icon");
						circle.getElement().classList.add(station.station_status.replace(" ", "_")+"_radius");

							$(".leaflet-marker-icon").hide();
							// $(".hf_look4_checked").change();
							$(".hf_look4_checked").eq(0).prop("checked",true);
							$(".Operational_marker").show();
							$(".radius-icon").hide();


					}
				} catch (error) {
					console.log(error); // Log any JSON parsing errors
					return null;
				}
			});
		}

		load_hf_stations_map("all");


		var map2 = L.map('map2').setView([12.028207262012298, 121.38914521809126], 5.5);
			L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=ZNeVZYfFRnG1aR4nhFB6', {
				tileSize: 512,
				zoomOffset: -1,
				minZoom: 1,
				attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
				crossOrigin: true
			}).addTo(map2);

   
			function load_hf_stations_map_2(filter) {
			$.post("AJAX/load_hf_stations_map_2.php", {
				filter_type:filter
			},
			function(data) {
				try {
					var stations = (typeof data === "object") ? data : JSON.parse(data);

					for (var i = 0; i < stations.length; i++) {
						var station = stations[i];

						function getIconOptions(status) {
							var shadowUrl;
							switch (station.signal_status) {
								case '5x5':
								shadowUrl = 'images/5x5_color.png';
								break;
								case '4x4':
								shadowUrl = 'images/4x4_color.png';
								break;
								case '3x3':
								shadowUrl = 'images/3x3_color.png';
								break;
								case '2x2':
								shadowUrl = 'images/2x2_color.png';
								break;
								case '1x1':
								shadowUrl = 'images/1x1_color.png';
								break;
								default:
								shadowUrl = 'images/icon_HF_Cloudy_default.png';
								break;
							}
							
							return {
								shadowUrl: shadowUrl,
								iconSize: [20, 20],
								shadowSize: [30, 30],
								iconAnchor: [0, 0],
								shadowAnchor: [5, 2],
								shadowClass: 'leaflet-marker-icon_2',
								popupAnchor: [12, 2]
							};
							}
								var iconOptions = getIconOptions(status);
								var HF_Icon = L.Icon.extend({
								options: iconOptions
								});

						var HF_weather_sunny = new HF_Icon({iconUrl: 'images/HF_weather_sunny.png'});
							HF_weather_cloudy = new HF_Icon({iconUrl: 'images/HF_weather_cloudy.png'});
							HF_weather_rainy = new HF_Icon({iconUrl: 'images/HF_weather_rainy.png'});
						
							if(station.weather=="Sunny"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: HF_weather_sunny}).addTo(map2);
							}else if(station.weather=="Cloudy"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: HF_weather_cloudy}).addTo(map2);
							}else if(station.weather=="Rainy"){
								var marker = L.marker([station.station_lat, station.station_long],{icon: HF_weather_rainy}).addTo(map2);
							}else{
								var marker = L.marker([station.station_lat, station.station_long]).addTo(map2);
							}
						// marker.bindPopup(station.station_name); // add a popup with the station name
						marker.bindPopup("<b>"+ station.station_name + "<br>Signal Strength: </b>" + station.signal_status + "<br><b>Weather: </b>" + station.weather);
						marker._icon.classList.add(station.weather.replace(" ", "_"));
						marker._icon.classList.add(station.weather.replace(" ", "_")+"_marker_2");
						var circle = L.circle([station.station_lat, station.station_long], {radius: 100000}).addTo(map2);
						circle.getElement().classList.add("radius-icon_2");
						circle.getElement().classList.add(station.station_status +"_radius_2");

							// $(".leaflet-marker-icon").hide();
							// $(".hf_look4_checked").change();
							// $(".hf_look4_checked").eq(0).prop("checked",true);
							// $(".Operational_marker").show();
							$(".radius-icon_2").hide();

					}
				} catch (error) {
					console.log(error); // Log any JSON parsing errors
					return null;
				}
			});
		}

		load_hf_stations_map_2("all_2");

		$("#station_daily_DA_div_2").onclick=$("#station_daily_DA_div_2").slideUp("slow");
		$("#hf_map_div_2").hide();
		$("#hf_overall_lbl").hide();	
		$("html, body").animate({scrollTop:0,}, 500, 'swing');

		$("#hf_overall_summary_lbl").click(function(){
	
			$("#hf_map_div_2").show();
			$("#hf_overall_lbl").show();
			$("#station_daily_DA_div").onclick=$("#station_daily_DA_div").slideUp("slow");
			$("#hf_daily_map_lbl").hide();
			$("#hf_map_div").hide();
		});

		$("#hf_daily_summary_lbl").click(function(){

			// alert("YES");
			$("#hf_map_div_2").hide();
			$("#hf_overall_lbl").hide();
			$("#station_daily_DA_div_2").onclick=$("#station_daily_DA_div_2").slideUp("slow");
			$("#hf_daily_map_lbl").show();
			$("#hf_map_div").show();
		});

		$("#circleToggle").change(function(){
			if ($(this).is(":checked")){
				if($(".hf_look4_checked").eq(0).prop("checked")){
					$(".Operational_radius").show();
				}if(!$(".hf_look4_checked").eq(0).prop("checked")){
					$(".Operational_radius").hide();
				}if($(".hf_look4_checked").eq(1).prop("checked")){
					$(".Proposed_radius").show();
				}if(!$(".hf_look4_checked").eq(1).prop("checked")){
					$(".Proposed_radius").hide();
				}if($(".hf_look4_checked").eq(2).prop("checked")){
					$(".No_Communication_radius").show();
				}if(!$(".hf_look4_checked").eq(2).prop("checked")){
					$(".No_Communication_radius").hide();
				}if($(".hf_look4_checked").eq(3).prop("checked")){
					$(".Intermittent_radius").show();
				}if(!$(".hf_look4_checked").eq(3).prop("checked")){
					$(".Intermittent_radius").hide();
				}if($(".hf_look4_checked").eq(4).prop("checked")){
					$(".Rehabilitation_radius").show();
				}if(!$(".hf_look4_checked").eq(4).prop("checked")){
					$(".Rehabilitation_radius").hide();
				}if($("#all_checker").prop("checked")){
					$(".Operational_radius").show();
					$(".Proposed_radius").show();
					$(".No_Communication_radius").show();
					$(".Intermittent_radius").show();
					$(".Rehabilitation_radius").show();
				}
			} else {
				$(".radius-icon").hide();
			}
		});


		$(document).on("change", "#Operational_checker", function() {
			if ($(this).prop("checked")){
				$(".Operational_marker").show();
				$("#circleToggle").change();
			}
			else{
				$(".Operational_marker").hide();
				$("#all_checker").prop("checked",false);
				$("#circleToggle").change();
			}
		});

		$(document).on("change", "#Proposed_checker", function() {
			if ($(this).prop("checked")){
				$(".Proposed_marker").show();
				$("#circleToggle").change();
			}
			else{
				$(".Proposed_marker").hide();
				$("#all_checker").prop("checked",false);
				$("#circleToggle").change();
			}
		});

		$(document).on("change", "#No_Communication_checker", function() {
			if ($(this).prop("checked")){
				$(".No_Communication_marker").show();
				$("#circleToggle").change();
			}
			else{
				$(".No_Communication_marker").hide();
				$("#all_checker").prop("checked",false);
				$("#circleToggle").change();
			}
		});

		$(document).on("change", "#Intermittent_checker", function() {
			if ($(this).prop("checked")){
				$(".Intermittent_marker").show();
				$("#circleToggle").change();
			}
			else{
				$(".Intermittent_marker").hide();
				$("#all_checker").prop("checked",false);
				$("#circleToggle").change();
			}
		});

		$(document).on("change", "#Rehabilitation_checker", function() {
			if ($(this).prop("checked")){
				$(".Rehabilitation_marker").show();
				$("#circleToggle").change();
			}
			else{
				$(".Rehabilitation_marker").hide();
				$("#all_checker").prop("checked",false);
				$("#circleToggle").change();
			}
		});
			//all_checker
		$(document).on("change", "#all_checker", function() {
			if ($(this).prop("checked")){
				$(".hf_look4_checked").prop("checked",true);
				// $(".Operational_marker").show();
				// $(".Proposed_marker").show();
				// $(".No_Communication_marker").show();
				// $(".Intermittent_marker").show();
				// $(".Rehabilitation_marker").show();
				$(".hf_look4_checked").change();

				$("#circleToggle").change();
				// $("#all_checker").prop("disabled",true);
			}
			else{
				// $(".Operational_marker").hide();
				// $(".Proposed_marker").hide();
				// $(".No_Communication_marker").hide();
				// $(".Intermittent_marker").hide();
				// $(".Rehabilitation_marker").hide();
				// $(".hf_look4_checked").change();
				$(".hf_look4_checked").prop("checked",false);
				$(".hf_look4_checked").change();

				$("#circleToggle").change();
			}
		});		
	

		$(document).on("change", ".hf_look4_checked", function() {
			var allChecked = true;
			for (var i = 0; i <= 4; i++) {
			if (!$(".hf_look4_checked").eq(i).prop("checked")) {
				allChecked = false;
				break;
			}
			}

			if (allChecked) {
				$("#all_checker").prop("checked",true);
			} 

		});


	var rowCount = $("#hf_daily_log_table tr").length;
			//alert(rowCount);

			if(rowCount==0){
				$("#span_counter_total").text(rowCount);
			}else{
           		$("#span_counter_total").text(rowCount-1);
			}
			

	var rowCount_log_sunny = $("#hf_daily_log_table tr").filter(function() {
    	return $(this).find("td:eq(4)").text() === "Sunny";
		}).length;
			//alert(rowCount_log_sunny);

	var rowCount_log_cloudy = $("#hf_daily_log_table tr").filter(function() {
    	return $(this).find("td:eq(4)").text() === "Cloudy";
		}).length;
			//alert(rowCount_log_cloudy);

	var rowCount_log_rainy = $("#hf_daily_log_table tr").filter(function() {
    	return $(this).find("td:eq(4)").text() === "Rainy";
		}).length;
			//alert(rowCount_log_rainy);


			var xValues = ["Sunny", "Cloudy", "Rainy"];
			var yValues = [rowCount_log_sunny, rowCount_log_cloudy, rowCount_log_rainy];
			var barColors = ["orange", "#FF1493", "navy"];

			var data = {
			labels: xValues,
			datasets: [{
				backgroundColor: barColors,
				data: yValues,
				label: 'Number of Reports'
			}]
			};

			var options = {
			title: {
				display: true,
				text: 'Pie Chart based on Reported Weather'
			},
			legend: {
				display: true,
				position: 'top',
				labels: {
				boxWidth: 16,
				padding: 10,
				usePointStyle: false,
				generateLabels: function(chart) {
					var data = chart.data;
					var labels = data.labels;
					var datasets = data.datasets;
					var legendItems = [];

					for (var i = 0; i < datasets[0].data.length; i++) {
					legendItems.push({
						text: labels[i] + ": " + datasets[0].data[i],
						fillStyle: datasets[0].backgroundColor[i],
						hidden: false,
						lineCap: 'butt',
						lineDash: [],
						lineDashOffset: 0,
						lineJoin: 'miter',
						lineWidth: 1,
						strokeStyle: datasets[0].backgroundColor[i],
						pointStyle: 'rect',
						index: i
					});
					}

					return legendItems;
				}
				}
			}
			};

			new Chart(document.getElementById('myChart'), {
			type: 'pie',
			data: data,
			options: options
			});


		var rowCount_hf_operational= $("#hf_table tr").filter(function() {
			return $(this).find("td:eq(11)").text() === "Operational";
			}).length;
			//alert(rowCount_hf_operational);

		var rowCount_hf_intermittent= $("#hf_table tr").filter(function() {
			return $(this).find("td:eq(11)").text() === "Intermittent";
			}).length;
			//alert(rowCount_hf_intermittent);

		var rowCount_hf_rehabilitation= $("#hf_table tr").filter(function() {
			return $(this).find("td:eq(11)").text() === "Rehabilitation";
			}).length;
			//alert(rowCount_hf_rehabilitation);

		var rowCount_hf_inactive= $("#hf_table tr").filter(function() {
			return $(this).find("td:eq(11)").text() === "No Communication";
			}).length;
			//alert(rowCount_hf_rehabilitation)

			var rowCount_hf_proposed= $("#hf_table tr").filter(function() {
			return $(this).find("td:eq(11)").text() === "Proposed";
			}).length;
			//alert(rowCount_hf_rehabilitation)


		var x1Values = ["Operational", "Intermittent", "Rehabilitation","Inactive","Proposed"];
		var y1Values = [(rowCount_hf_operational), (rowCount_hf_intermittent), (rowCount_hf_rehabilitation), (rowCount_hf_inactive), (rowCount_hf_proposed) ];
		var bar1Colors = ["green","yellow","orange","red","blue"];

		new Chart("myChart2", {
		type: "bar",
		data: {
			labels: x1Values,
			datasets: [{
			backgroundColor: bar1Colors,
			data: y1Values
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
					beginAtZero: true,
					suggestedMin: 1 // Set the minimum value of the y-axis to 1
					}
				}]
				},
			legend: {display: false},
			title: {
			display: true,
			text: "Recorded HF Stations by Status"
			}
		}
		});

		var rowCount_sta = $("#hf_table tr").length;
			//alert(rowCount);
			if(rowCount_sta==0){
				$("#span_counter_total_2").text((rowCount_sta)-(rowCount_hf_proposed));
				$("#span_counter_total_proposed").text(rowCount_hf_proposed);
			}else{
				$("#span_counter_total_2").text((rowCount_sta-1)-(rowCount_hf_proposed));
				$("#span_counter_total_proposed").text(rowCount_hf_proposed);
			}

	var stn_cd;
	var stn_cd_grp;

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



	$("#station_name").keyup(function(){
	//alert($("#station_name").val());
		var hidden_gem;
		hidden_gem = $("#list_station").find("option[value='" + $(this).val() + "']").attr("name");
		//alert(hidden_gem);
		stn_cd=hidden_gem;

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
							load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'false','false',"default","");
							$("#clear").click();
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
					station_name: 		stn_cd,
					station_assignee: 	$("#station_assignee").val(),
					get_date: 			$("#get_date").val(),
					get_time:			$("#get_time").val(),
					weather_status:		weather_stat,
					signal_status:		signal_val
			},
				function(data){
						// alert(data);
						if(data=="New record created!"){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",600);
							load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
							$("#clear").click();
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


		// $("#search_station").keyup(function(){
		// 	load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"open",$(this).val());
		// });


		$("#enter_date_range").click(function(){

			var start_date_val = ($("#get_start_date").val() !== '');
			var end_date_val = ($("#get_end_date").val() !== '');

			// alert(start_date_val);
			// alert(end_date_val);

			if (start_date_val && end_date_val) {
				load_hf_daily_table("#hf_daily_log_table","all%item_log","Station Name%Station Assignee%Date%Time%Weather%Signal Status%","station_name,station_assignee, log_date, log_time, weather, signal_status",'false','false',"date",$("#get_start_date").val(),$("#get_end_date").val());
			}else{
				alert("Select a Start and/or End date first.");
			}
			// alert($('#get_end_date').val());
		});


		$("#filter_type_selection").change(function() {
			var filterValue = $(this).val();

			var url = "AJAX/load_stations_DA.php?filter=" + filterValue;
			$.get(url, function(data) {
				$("#list_station_log").html(data);

			});
			//alert(filterValue);
		});


		// $(".item").click(function(){

		// 	var numberOfChecked = $('input:checkbox:checked').length;
		// 	var totalCheckboxes = $('input:checkbox').length;
		// 	var numberNotChecked = totalCheckboxes - numberOfChecked;
		// 	//alert(numberOfChecked);



		// });
		 //load_hf_daily_table("#hf_daily_log_table","all%item_log","Station Name%Station Assignee%Date%Time%Weather%Signal Status%","station_name,station_assignee, log_date, log_time, weather, signal_status",'false','false',"date",$("#get_start_date").val(),$("#get_end_date").val());


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

				// function load_hf_stations_map() {
				// 	$.post("AJAX/load_hf_stations_map.php", {}, function(data) {
				// 		console.log(data); // Log the response to the console
				// 		var stations = JSON.parse(data);
				// 		for (var i = 0; i < stations.length; i++) {
				// 			var station = stations[i];
				// 			var marker = L.marker([station.station_lat, station.station_long]).addTo(map);
				// 			marker.bindPopup(station.station_name); // add a popup with the station name
				// 		}
				// 	});
				// }



			// load_hf_stations_map();




				// function counter_hf_data(target,columns,filter,mydata){
				// 	$.post("AJAX/counter_hf_data.php",
				// 	{
				// 		filter_type: filter,
				// 		data:mydata,
				// 		my_columns:columns
				// 	},
				// 	function(data){
				// 		//alert(data);
				// 		$(target).html(data);
				// 		//enrycpt_each(".item_log");
				// 	});
				// }



});
</script>
