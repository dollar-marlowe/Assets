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

		.pannel_show_card_long{
			/* margin:auto; */
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px black;
			padding:2px;
			background-color:white;
            padding-bottom: 10px;
            display: flex;
            overflow:auto;
            float:left;
            width: 50%;
        }

		.label_content_handler{
			width:100%;
			padding:1px 2px;
			margin:1px 2px;
			border:solid 1px black;



		}

		.label_show_card_long {
            color: white;
            display: inline-block;
            padding: 2px 5px;
            border-radius: 1px;
            background-color: navy;
            text-align: center;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* cursor: pointer; */
            width:inherit;
            margin-top: 10px;
            box-shadow: -2px 2px 26px -12px rgba(220,120,0,.87);
			text-align: left;

        }

        .pannel_holder{
			width:100%;
			/* display: flex; */
			/* height: 20%; */
			margin-top:5px;
            /* overflow: hidden; */
            justify-content: center;

		}


        .pannel_holder .pannel_show_card{
			width:65%;
			min-height: 400px;
			max-height: 400px;
			margin:1%;
            padding:20px 50px;
            justify-content: center;
            box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
		}
		.pannel_holder_frame{
			width:100%;
			display: flex;
			align-items: baseline;
			/* margin-top:5px; */
            justify-content: center;

		}

		.pannel_holder_frame .pannel_show_iframe{
			width:45%;
			margin:1%;
			justify-content: center;
            /* box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57); */
		}

		.pannel_holder .pannel_holder_hf{
			margin:1%;
			display: flex;
			/* justify-content: center; */
			overflow: hidden;
			align-items:flex-start;

		}

	.pannel_show_card .join_con{
			width: fit-content;
			display: block;
			justify-content: center;
			/* overflow:auto; */
			min-height: 100%;

		}

        #station_form_div {
            /* margin: 20px; */
            width:100%;
        }

		#region{
			display:block;
			width: 90%;
			word-wrap:break-word;
			font-size: 12px;
		}

		.flat_con{
			justify-content: center;
			display:block;
		}

        .long_content{

            /* max-width:60%;
            min-width: 60%;
            min-height: 100px;
            max-height: 300px;
            white-space: pre-wrap; */

            max-width: 60%;
			min-width: 60%;
			min-height: 50px;
            height: 100px;
			min-height: 100px;
            max-height: 300px;
            box-sizing: border-box;
            white-space: pre-wrap;
        }


        @page {
            size: A4 portrait;
        }

        .pannel_con{
			-webkit-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			-moz-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			width: 95%;
			margin:auto;
			border-radius:0 0 30px 30px;
            display: flex;
            align-items: flex-start;
		}

		.news-container {
        /* display: inline-flex; */
        width: fit-content;
        /* flex-direction: row; */
        padding: 5px;
        margin-bottom: 5px;
        /* max-height: 300px; */
        justify-content:center;
        margin: 2px;
        max-height:10%;
      }

      .news-image {
        width: 300px;
		/* height: 30%; */
		float: left;
		margin: 0px 10px;

        /* height: 25%; */
        /* max-width: 30%; */
        /* margin-bottom: 10px; */
      }

      .news-name {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 5px;
		text-align: left;

      }

      .news-description {
        font-size: 12px;
        text-align: left;
        white-space: pre-wrap;
        /* width: fit-content; */
        padding: 10px;
		text-align: justify;

      }

	  .container {
		display: block;
		position: relative;
		padding-left: 35px ;
		margin-bottom: 12px;
		cursor: pointer;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	#list_station_log{
    list-style-type: disc;
    -webkit-columns: 2;
    -moz-columns: 2;
    columns: 2;
    list-style-position: inside;
}

    /* Hide the browser's default checkbox */
    .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
    }

	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
		border-radius: 5px;
	}
    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
    background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
    background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
    content: "";
    position: absolute;
    display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
    display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    }

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
<section id="station_entry_form" style="size: letter;">
		<div class="pannel_con">
			<div class="pannel">
                <br><br><br>
                <p class="label "><label style="font-size:40px; width:100%;">DAILY MONITORING REPORT</label></p>
                <p class="label "><label style="font-size:36px; width:100%;">Emergency Operation Center</label></p>
                <p class="label "><label style="font-size:21px; width:100%;">Disaster Risk Reduction and Management Division </label></p>

                        <!-- for News Log -->
						<div class="pannel_holder" id = "eoc_news_div">
							<p class="label" style="color:white; background-color:lightcoral"><label style="font-size:21px; width:100%;">Todays News	</label></p>
                            <div class="pannel_con">
                                <div class="news-container" id="news-container"></div>
                            </div>
                        </div>
						<br>

						<!-- for HF Log -->
						<div class="pannel_holder" id = "hf_log_div">
							<p class="label" style="color:white; background-color:lightcoral"><label style="font-size:21px; width:100%;">HF Stations Log</label></p>
								<div class="pannel_holder_hf">
									<div class="pannel_show_card" style="width: 35%;">
										<div class="join_con">
											<div>
												<p class="label"><label><b>HF Station Today's Log Counts</b></label></p>
												<p class="label_show_card"><label ><span style="font-size: 20px;" id="span_counter_total"></span> ENTRIES</label></p>
											</div>
												<br>
											<div>
												<p class="label"><label><b>HF Station Bar Chart by Weather</b></label></p>
												<canvas id="myChart" style="width:90%;max-width:250px"></canvas>
											</div>
										</div>
									</div>

									<div class="pannel_show_card"  style="width: 30%; display:block; padding: 20px 10px" >
										<p class="label"><label ><b>HF Station Today's Log List</b></label></p>
										<ul id="list_station_log" class="columns"style="font-size:12px; text-align:left; margin: 1px;">
											<?php
												$today = date("Y-m-d");
												$str = "SELECT distinct hf_log_id, station_name, location_region FROM trial_daily_log WHERE log_date='$today'";
												loadstationlist_region_log($str, "station_name", "location_region", "hf_log_id", "station_name");
											?>
										</ul>
									</div>

									<div class="pannel_show_card"  style="width: 30%; display:block;" >
										<p class="label"><label ><b>HF Map</b></label></p>

									</div>
								</div>
						</div>
						<!-- for DAM Log -->
						<div class="pannel_holder" id = "dam_log_div" >
							<p class="label" style="color:white; background-color:lightcoral"><label style="font-size:21px; width:100%;">External Sites</label></p>
							<div class="pannel_holder_frame">		
								<div class="pannel_show_iframe" >
									<iframe title="RDAMSDashboard" width="600" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiYjQ1YmY4YjMtYzAxMi00ZTk1LTg4OGEtYTdhY2MwNDQ3N2RkIiwidCI6IjQ5NmEyNDg2LTkwN2UtNDIxZS1iZmExLWY0ZGNiOTU2ZDIyNSIsImMiOjEwfQ%3D%3D&fbclid=IwAR3wGGdjly1qJGoJ1mz7Qd19CgmMj2MNHtf1mLnYlgZB0xNDIOBqaabAxoc" frameborder="0" allowFullScreen="true"></iframe>
								</div>
								<div class="pannel_show_iframe" >
									<iframe title="RDAMSDashboard" width="600" height="500" src="https://app.powerbi.com/view?r=eyJrIjoiYjQ1YmY4YjMtYzAxMi00ZTk1LTg4OGEtYTdhY2MwNDQ3N2RkIiwidCI6IjQ5NmEyNDg2LTkwN2UtNDIxZS1iZmExLWY0ZGNiOTU2ZDIyNSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
								</div>
								<!-- <div class="pannel_show_iframe" style="width:40%; margin:10px;">
									<iframe title="RDAMSDashboard" width="600" height="636" src="https://app.powerbi.com/view?r=eyJrIjoiYjQ1YmY4YjMtYzAxMi00ZTk1LTg4OGEtYTdhY2MwNDQ3N2RkIiwidCI6IjQ5NmEyNDg2LTkwN2UtNDIxZS1iZmExLWY0ZGNiOTU2ZDIyNSIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
								</div> -->
							</div>


						</div>
             </div>
        </div>

		<div>
			<table hidden class="disasters" id="hf_daily_log_table" style="margin-bottom:5px;margin-top:10px;">
									<?php
									$classes=array("all","item");
									$sql="select station_name, station_assignee, log_date, log_time, weather, signal_status from hf_daily_log where log_date=CURRENT_DATE order by log_time desc";
									$headers=array("Station Name","Station Assignee","Date","Time","Weather","Signal Status");
									loadtable($sql,$headers,false,false,$classes);
									?>
								</table>
		</div>

</section>


<script>

    function slide(target){
		$(target).slideToggle("slow");

		}



    $(document).ready(function(){
        $("#showcase").hide();
		$("#about").hide();
        $("#footer").hide();
	generateNewsQuery("#news-container","default","news_title, news_desc, news_url, news_ref","");




		//decrypt
		//filter-- for each checkbox
		//then encrypt ulit
	// $("#station_name_label").css("visibility","hidden");
	// $("#station_name").css("visibility","hidden");

	//(target,columns,filter,mydata)
	//load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
	//var total_hf_recorded = counter_hf_data("#span_counter_total","hf_id","count_total","")


	var rowCount = $("#hf_daily_log_table tr").length;
			//alert(rowCount);

			if(rowCount==0){
				$("#span_counter_total").text(rowCount);
			}else{
           		$("#span_counter_total").text(rowCount-1);
			}

	var rowCount_sta = $("#hf_table tr").length;
			//alert(rowCount);
			if(rowCount_sta==0){
				$("#span_counter_total_2").text(rowCount_sta);
			}else{
				$("#span_counter_total_2").text(rowCount_sta-1);
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
			var barColors = ["orange", "lightblue","navy"];

			new Chart("myChart", {
			type: "bar",
			data: {
				labels: xValues,
				datasets: [{
				backgroundColor: barColors,
				data: yValues
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
				text: "Expected Representation of reported HF Station by Weather"
				}
			}
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
			return $(this).find("td:eq(11)").text() === "Inactive";
			}).length;
			//alert(rowCount_hf_rehabilitation)


		var x1Values = ["Operational", "Intermittent", "Rehabilitation","Inactive"];
		var y1Values = [(rowCount_hf_operational), (rowCount_hf_intermittent), (rowCount_hf_rehabilitation), (rowCount_hf_inactive) ];
		var bar1Colors = ["green","yellow","orange","red"];

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
			text: "Expected Representation of reported HF Station by Status"
			}
		}
		});


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
						alert(data);
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

	$("#btn_cancel_news").click(function(){
		// $("select#signal_value").prop()
			$("#get_news_title").val("");
			$("#get_news_desc").val("");
			$("#get_news_ref").val("");
			$("#myFile").val("");
			$("#news_option").val("0");

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

		function validate(target,value){
			if($(target).val().trim()==value){
				$(target).css({"border":"solid 1px red"});
				$("#err_lbl").remove();
				return true;
			}else{
				$(target).css({"border":"solid 1px rgb(118, 118, 118)"});
				$("#err_lbl").remove();
				return false;
			}
		}

		function validate_all(){
			var keys ={
				"#news_option":"0",
				"#get_news_title":"",
				"#get_news_desc":"",
				"#get_news_ref":"",
				"#myFile":""
			};

			var go=true;

			for(var key in keys){
				if(validate(key,keys[key])){
					go=false;
				}
			}
			return go;
		}


		$("#myFile").change(function(){
			// alert($(this).val());
			validate("#myFile","");
			// var file =$("#myFile").prop("files")[0];
			// alert(file["name"]);
			// $("#profile").attr("src",file["name"]);
			// console.log(file);
		});


		//submit BUTTON
		$("#btn_save_news").click(function(){

			//DEO need muna ng ajax para sa file upload bago po i push ung ibang details
			if(validate_all()){
				$("#err_msg").remove();

				//alert("Ready to be saved");
				var file =$("#myFile").prop("files")[0];
				var form= new FormData();
				form.append("myFile",file);

				// $today Y-m-d

				//image upload
				//get date papunta sa date_logged sa ajax
				$.ajax({
					url:"AJAX/add_news_pic.php",
					type: "POST",
					data:form,
					contentType:false,
					processData:false,
					success: function(result){
						alert(result);
						$.post("AJAX/add_news_log.php",{
							news_cat: 		$("#news_option").val(),
							news_title: 	$("#get_news_title").val(),
							news_desc: 		$("#get_news_desc").val(),
							news_ref:		$("#get_news_ref").val(),
							news_url:		result
							// signal_status:	signal_val
						},
						function(data){
								alert(data);
								if(data=="New record created!"){
									Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",600);
									generateNewsQuery("#news-container","default","news_title, news_desc, news_url, news_ref","");
									//load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");
									$("#btn_cancel_news").click();
								}else{
									alert("All fields are required to be filled with input.");
								}
						});
					}
				});

			} else {
				$("#err_msg").remove();
				$(".err_msg").before("<p  style='color:red;text-align:center' id='err_msg'>Required fields cannot be empty!</p>");
				alert("KULANG!");
			}
		});


		$(document).on("click", ".selected_news", function() {
            if ($(this).prop("checked")) {
                $(this).closest(".news-container").css("background-color", "lightblue");


            } else {
                $(this).closest(".news-container").css("background-color", "white");
            }
        });

		$(".logo").click(function(){
			// alert("tae");
			window.location = "eoc_monitor.php";

		});


		function generateNewsQuery(target, filter, columns, mydata) {
		$.post("AJAX/load_news_to_print.php", {
			filter_type: filter,
			my_columns: columns,
			data: mydata
		}, function(data) {
			$(target).html(data);

			// add double click event listener to images
			$(target).find('.news-image').on('dblclick', function() {
			var newsRef = $(this).attr('title');
			window.open(newsRef);
			});
		});
		}


});
</script>
