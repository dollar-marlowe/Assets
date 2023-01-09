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
			
		}
		.inputs, .imgform-img  select, select{
			font-size:12px;
		}
		
		.imgform-img{
			width:100%;
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;

		}
		.mini_pannel{
			width:100%;
			background-color:#ddd;
			padding:5px;
		}
		.mini_pannel img{
			display:inline;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			
			margin:auto;
			border-radius:0 0 5px 5px;
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
		.table_con{
			width:fit-content;
			height:250px;
			overflow:scroll;
			margin:auto;
			
			border:solid 1px #ddd;
			padding:10px;
			border-radius:0 0 10px 10px;
			
			
			
		}
	
		.container{
			margin:auto;
			margin-top:10px;
			width:90%;
		}
		table{
			border-collapse: collapse;
			
			
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table.disasters{
			width:100%;
			margin:auto;
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
			margin:auto;
			margin-top:5px;
			
		}

		
		.input_wrapper .label{
			width:120px;
			margin-top:0px;
			font-size:13px;
			
		}
		.input_wrapper input[type=text], .input_wrapper select{
			width:170px;
			margin-bottom:5px;
		}
		.inner-wrapper{
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
		table{
			font-size:12px;
		}
		.halfcol{
				width:100%;
				display:block;
				border:solid 1px #ddd;
				border-radius:10px;
				margin-top:5px;
				margin-bottom:10px;
			}
			.box_label{
				display:inline-block;
				margin-top:-15px;
				margin-left:15px;						
			}
			.box_label span{
				background-color:white;
				font-size:16px;
				text-align:left;
			}
			#desc_risk tr:nth-child(1) td{
				text-align:center;
				
			}
			#desc_risk td:nth-child(1){
				
				font-weight:bold
			}
			#desc_risk{
				margin:auto;
				margin-bottom:10px;
				width:100%;
				
			}
			#desc_risk tr:nth-child(odd){
				background-color:white;
			}
			#desc_risk tr{
				border-bottom:solid 1px #ddd;
			}
			
		.affected tr td:nth-child(1){
			width:15px;
			align-items:center;
		}
		.affected tr td:nth-child(1) input{
			width:10px;
			margin:auto;
		}
		#epr option:nth-child(1)
		{
			background-color:white;

		}
		#epr option:nth-child(5)
		{
			background-color:#b3e6b3;

		}
		#epr option:nth-child(4)
		{
			background-color:#ffeb99;

		}
		#epr option:nth-child(3)
		{
			background-color:#ffb84d;

		}
		#epr option:nth-child(2)
		{
			background-color:#ff4d4d;

		}
		.arrow{
			opacity: 0.5;
		}
		
		.selection {
			width:49%;
			float:left;
			border: solid 1px #ddd;
			border-radius:10px;
			margin:0;
			margin-bottom:10px;
			display:inline-block;
		}
		.selection .label, .local_impact .label
		{
			width:85px;
		}
		.selection input[type=text], .selection select,
		.local_impact select
		{
			width:120px;
		}
		.local_impact{
			width:49%;
			margin:0;
			display:inline-block;
			border:solid 1px #ddd;
			border-radius:10px;
			float:right;
			margin-bottom:10px;

		}
		#add_attr{
			font-size:11px;
			width:fit-content;
			padding:2px;
			display:block;
			margin-left:120px; 
			margin-bottom:-30px;
		}
		
		
		.d_lbl .label{
			width: fit-content;
			margin-right:20px;
			display:inline;
		}
		.tables{
			width:100%;
			float:left;
		}
		#select_areas{
			float:left;
		}
		#areas_selected{
			float:right;
		}
		.lbl_wrap > *{
			display:inline-block;
		}
		
		@media (max-width:1267px){
				.pannel_con{
					width:90%;
				}
				
				.align_center{
					margin:auto;
					
					width:fit-content;
				
				
				}
				.cols, .cols2{
				display:block;
				width:100%;
				margin:auto;
			}
			.cols2{
				margin-top:10px;
				margin-bottom:10px;
			}
			.halfcol{
				width:49.5%;
				display:inline-block;
			}
			.selection .label, .local_impact .label
			{
				width:120px;
			}
			.selection input, .selection select,
			.local_impact select
			{
				width:180px;
			}
			
			
		}
		@media (max-width:900px){
			.pannel_con{
				width:95%;
			}
		}
		@media (max-width:820px){
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select{
			font-size:95%;
			}
			.halfcol{
				width:100%;
				display:block;
				
			}
			.selection .label, .local_impact .label
			{
				width:85px;
			}
			.selection input, .selection select,
			.local_impact select
			{
				width:120px;
			}
			
		}
		
		@media (max-width:600px){
			table{
				
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select{
			font-size:15px;
			}
			.pannel h2{
			
			font-size:13px;		
			}
			.pannel h2 img{
				width:20px;
				margin-bottom:-4px;
			}
			.input_wrapper{
				width:fit-content;
			}
			.input_wrapper{
				margin:auto;
				margin-top:10px;
				
			}
			.input_wrapper >*{
				display:block;
			}
			
			th:nth-child(5),td:nth-child(5){
				display:none;
			}
			.cols2{
				padding:0px;
			}
			.sub_pannel{
				width:100%;
				float:none;
				display:block;
			}
			.sub_pannel .input_wrapper > *{
				display:inline-block;
			}
		}
		@media(max-width:400px){
			.pannel_con{
				width:100%;
			}
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
			.input_wrapper{
				width:fit-content;
			}
			.inner-wrapper{
				width:100%;
			}
			.imgform-img{
				padding:0px;
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
			#search_category{
				font-size:11px;
			}
			.sub_pannel .input_wrapper > *{
				display:block;
			}
			.selection .label, .local_impact .label
			{
				width:120px;
			}
			.selection input, .selection select,
			.local_impact select
			{
				width:180px;
			}
			
		}
		@media(max-width:280px){
			th:nth-child(2),td:nth-child(2){
				display:none;
			}
			.inputs{
				font-size:10px;
			}
			.selection input, .selection select,
			.local_impact select
			{
				width:160px;
			}
			#add_attr{
				display:block;
				margin-left:0;
				width:100%;
				margin-bottom:0;
			}
		}
		.buttons{
			width:fit-content;
			padding:5px;
			padding-left:8px;
			padding-right:8px;
			background-color:rgb(45, 44, 46);
			color:white;
			margin-bottom:10px;
			transition: transform .2s;

		}
		.buttons:hover{
			transform:scale(1.01);
		}
		#disaster_affected{
			width:100%;
		}
		#activatefile, #date_activated, #reso, #etc_stat{
			width:180px;
		}
		.row_pannel{
			width:100%;
			border-bottom: solid 1px #ddd;
		
		}
		.row_pannel > *{
			display:inline-block;
		}
		
		.mini_affct{
		width:100%;
		}
		.mini_affct tr:nth-child(odd){
			background-color:white;

		}
		.broder_table tr{
			border-bottom: solid 1px #f0f1f6;
		}
		tr.head_table:nth-child(even){
			border-bottom: solid 1px #ddd;
			
		}
		
		
		.mini_affct tr{
			margin:0;
			padding:0;
			font-size:12px;
			
		}

		.mini_affct tr td{
			vertical-align:top;
			padding:0px;
			padding-top:3px;
		}
		.head_table td:nth-child(1), .head_table th:nth-child(1){
			padding-top:5px;
			width:25px;
		}
		table .head_table:nth-child(n+2) th{
			color: #4d4d4d;
		}
		.head_table th:last-child{
			width:25px;
		}
		
		
		.mini_con{
			display:none;
			width:98%;
			margin:auto;
			max-height:200px;
			overflow:auto;
		}
		.mini_con2{
			display:none;
			width:90%;
			margin:auto;
		}
		img.mini_arrow{
			width:12px;
			height:12px;
			opacity:0.5;
			display:inline;
			float:left;
			margin-top:5px;
			margin-left:5px;
			margin-right:10px;
		
		}
		.mini_row_head{
			width:92%;
			
		}
		.body_table tr td{
			padding-left:5px;
		}
		.etc_pannel{
			width:96%;margin:auto;
		}
		.etc_row{
			width:100%;
		}
	
		
		.mini_affct td, .mini_affct th{
			
			background-color:white;
			color:black;
			text-align:left;
		}
		/* .head_table{
			transition: transform .2s;
		}
		.head_table:hover{
			transform: scale(1.008); 
		} */
	
		.all_etc{
			border:solid 1px #ddd;
		}
		.all_active_etc{
			width:100%;
			
			
			margin:auto;
			display:inline-block;
			margin-top:10px;
		}
		.all_active_etc > *{
			margin:auto;
		}
		.deact_pannel{
			margin-bottom:10px;
		}
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
	<div class="pannel_con">
			<div class="pannel 1stpannel" onclick="slide('#hazard_form')" ><div  id="accounts"  class="lbl_wrap"><img src="images\hazard.png"> <p id="lbl_disaster_header"><u>D</u>isaster and Impact</p></div></div>		
				<div class="imgform-container " id="hazard_form">
					<div class="imgform-img">
									<div class="inner-wrapper" >
										<div class="cols cols1" >
											<p class="box_label"><span>Disaster/Calamity</span></p>
									
											<!-- <div class="input_wrapper" style="margin:auto">
											<input type="radio" name="gender" class="gender" value="male">Male<br>
											<input type="radio" name="gender" class="gender" value="female">Female<br>
											</div>   
											<div class="input_wrapper" style="margin:auto">
											<input type="submit" id="test" value="Submit" class="btn btn-primary">
											</div>   -->
											<br>
											<input type="hidden" value="0" id="form">
											<input type="hidden" value="0" id="current_etc">
											<div class="input_wrapper" style="margin:auto">
											<input type="text" id="search_disaster" class="inputs" Placeholder="Search Disaster">
											<select id='search_category' class="inputs">
													<?php 
													$str="SELECT distinct natureofdisaster, natureofdisaster FROM disaster";
													loadropdown($str,"natureofdisaster","natureofdisaster","Nature of Disaster");
													?>
											</select>
											</div>
											<div class="mini_pannel" onclick="mini_pannel_slide('#d_select','#narrow','images/arrow_down.png','images/arrow.png')" style="width:90%; margin:auto;">
															<img src="images/arrow.png" id="narrow"class="arrow" style="height:15px;width:20px;margin-left:15px;">
															<div style="display:inline-block;width:80%;"><p style="width:100%;text-align:center;">Select Hazard</p></div>
											</div>	
											<div class="table_con container" style="margin-top:0" id="d_select" >
												<table class="disasters">
													<?php
													$sql="select id,name,natureofdisaster, datestarted, file_upload  from disaster ";
													$classes=array("dst_all","dst_item");
													$headers=array("","Disaster","Nature..","Date","File");
													loadtable_radio($sql,$headers,true,false,$classes,"");
													?>
												</table>	
											</div>	
											
											<div  class="container" >
											<input type='submit' value='Add Parameter' id='add_attr'
											 style=''>

												<div class="halfcol" style="float:left;" >
												<p class="box_label"><span><u>P</u>arameters</span></p>
												
													<div id="attributes" >
													
													
													</div>
													
												</div>
												
												
												
												<div id="attributes2" class="halfcol"   style="float:right;padding-bottom:10px;" >
												<p class="box_label"><span><u>R</u>isk</span></p><br>
													<div class="input_wrapper">
														<p class="label">Pobability</p>
														<select id="probability">
																<option value="0">Select</option>
																
																<option value="D Certain/Immenent">D Certain/Immenent</option>
																<option value="C Highly Likely">C Highly Likely</option>
																<option value="B Less Likely">B Less Likely</option>
																<option value="A Unlikely">A Unlikely</option>
														</select>
													</div>
													<div class="input_wrapper">
														<p class="label">Overall Impact</p>
														<select id="o_impact">
																<option value="0">Select</option>
																<option value="4 Catastrophic">4 Catastrophic</option>
																<option value="3 Major">3 Major</option>
																<option value="2 Minor">2 Minor</option>
																<option value="1 Neglegible">1 Neglegible</option>
														</select>
													</div>
												

													<div class="mini_pannel" onclick="mini_pannel_slide('.risk_desc','#arrow','images/arrow_down.png','images/arrow.png')" style="width:90%; margin:auto;">
													 <img src="images/arrow.png" id="arrow"class="arrow" style="height:15px;width:20px;margin-left:15px;">
													 <div style="display:inline-block;width:80%;"><p style="width:100%;text-align:center;">Description</p></div>
													</div>
													<div class="container risk_desc"  style="width:90%;margin-top:0;">

													</div>
													<!-- <input type="submit" value="Session_test" id="sess_id"> -->
												</div>
												
											</div>
													<div style="width:100%;display:block; float:right;">
														<div class="input_wrapper" >
														<input type="submit" id="clear_disaster" value="Clear" class="buttons dstr" style="width:130px;">
														<input type="submit" id="save_disaster" value="Save" class="buttons dstr" style="width:130px;">
														<select class="impact_log impact1" style="width:120px;">
																
														</select>
														</div>
													</div>
												
										</div>  

										<div class="cols cols2" >
										<p class="box_label" style="width:100%;text-align:left;" ><span id="span_affected">Affected Areas</span></p>
										<div class="input_wrapper d_lbl">
													<p class="label disaster_name">Disaster Name:</p> <p class="label disaster_nature">Nature of Disaster</p>
												</div>  
												<hr style="width:95%;margin:auto;margin-bottom:20px;">
											<div class=" selection sub_pannel" >
												<div class="input_wrapper ">
													<p class="label">Scale: </p>
													<select id="scale" class="inputs2">
														<option value='Regional'>Regional level</option>
														<option value='Provincial'>Provincial level</option>
														<option value='Municipal'>Municipal level</option>
														<option value='Brangay'>Brangay level</option>
													</select>
												</div>  
												<div class="input_wrapper">
													<p class="label" for="region">Region:</p>
													<select id="region" class="inputs3" name="region" onchange="FetchRegion(this.value,'SELECT * FROM province where reg_id=','#province','id','name','')">
														<?php
														
														$str="SELECT id,name FROM region";
														loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 

														?>
													</select>
													
												</div>  
												
												 
												<div class="input_wrapper">
													<p class="label" for="region">Province:</p>
														<select id="province" disabled name='province' class="inputs3"
														onchange="FetchRegion(this.value,'SELECT * FROM municipality where province_id=','#municipality','id','name','Region')"
														>
														<option value=0>Select from Region</option>
														</select>
												</div>  

												<div class="input_wrapper">
													<p class="label" for="region">Municipality:</p>
														<select id="municipality" disabled name='municipality' class="inputs3"
														onchange="FetchRegion(this.value,'SELECT * FROM barangay where muni_id=','#barangay','id','name','Municipality')"
														>
														<option value=0>Select from Province</option>
														</select>
												</div>  
											</div>  
											<div class="local_impact sub_pannel">
													<div class="input_wrapper">
														<p class="label">EPR Protocol:</p>
														<select id="epr" class="inputs2">
																<option value="0">Select</option>

																<option value="CHARLIE">CHARLIE</option>
																<option value="BRAVO">BRAVO</option>
																<option value="ALPHA">ALPHA</option>
																<option value="STANDBY" >STANDBY</option>												
																		
														</select>
													</div>
													<div class="input_wrapper">
														<p class="label">Localized Impact:</p>
														<select id="l_impact" class="inputs2">
																<option value="0">Select</option>
																<option value="4 Catastrophic">4 Catastrophic</option>
																<option value="3 Major">3 Major</option>
																<option value="2 Minor">2 Minor</option>
																<option value="1 Neglegible">1 Neglegible</option>
														</select>
													</div> 
													<div class="input_wrapper">
														<p class="label">Which log?</p>
														<select class="impact_log impact2">
																
														</select>
														
													</div> 

													<div class="input_wrapper">
														<p class="label">Start date:</p>
														<input type="date" name="affected_date" id="affected_date" class="form-control">
													</div> 
												</div> 
											<div class="tables">
												<div id="select_areas" class="halfcol"  style="border-radius:0 0 10px 10px;"  >
														<div class="mini_pannel" onclick="mini_pannel_slide('#table_affected','#arrow2','images/arrow_down.png','images/arrow.png')" style="width:100%; margin:auto;">
															<img src="images/arrow.png" id="arrow2"class="arrow" style="height:15px;width:20px;margin-left:15px;">
															<div style="display:inline-block;width:80%;"><p style="width:100%;text-align:center;">Select New Affected Areas</p></div>
															</div>
													
															<div class="table_con" id="table_affected" style="width:100%;margin-bottom:0;">
																<table class="affected" style="width:100%;">
																	
																</table>	
															</div> 
															<div class="input_wrapper add_con"><input type="submit" value="Add Selected" id="add_selected" class="buttons"></div>
												</div> 
												
													<div id="areas_selected" class="halfcol"    style="border-radius:0 0 10px 10px;" >
													
														
														<div class="mini_pannel" onclick="mini_pannel_slide('#all_affected','#arrow3','images/arrow_down.png','images/arrow.png')" style="width:100%; margin:auto;">
															<img src="images/arrow.png" id="arrow3"class="arrow" style="height:15px;width:20px;margin-left:15px;">
															<div style="display:inline-block;width:80%;"><p style="width:100%;text-align:center;">All Affected Areas</p></div>
															</div>
													
														<div class="table_con" id="all_affected" style="width:100%;">
															<table id="disaster_affected">

															</table>

														</div> 

													</div> 	
													<div class="input_wrapper done_wr"><input type="submit" value="Done" id="done" class="buttons"></div>
												</div>	
											
										</div>  

						</div>
				</div>
			</div>
	</div>
	<div class="pannel_con">
			<div class="pannel" onclick="slide('#incident_areas')"><p id="pass_reset"  class="lbl_wrap"><img src="images\logs.png"> <u>E</u>mergency Telecoms Cluster Activation</p></div>
					<div class="imgform-container " id="incident_areas"> 						
						<div class="imgform-img">
							<div class="inner-wrapper" >
							<div class="cols cols1" >
							<p class="box_label"><span>For Activation</span></p>
								<div  class="halfcol"   style="float:right;padding-bottom:10px;border:none;" >
											<div class="input_wrapper">
													<p class="label">Date Activated:</p>
													<input type="date" id="date_activated" class="form-control all_etc">
											</div> 
											<div class="input_wrapper"><p class="label">
														<label for="status">Attachment:</label></p>
														<input type="file" id="activatefile" name="myFile" class="etc_input all_etc"/>
											</div>
											<div class="input_wrapper"><p class="label">
														<label for="status">Resolution No.:</label></p>
														<input type="text" id="reso"  class="etc_input all_etc" />
											</div>
											<div class="input_wrapper"><p class="label">
														<label for="status">ETC Status:</label></p>
														<select  id="etc_stat"  class="etc_input all_etc" />
															<option value="New Log">New Log</option>
															<option value="Escalated">Escalation</option>
															<option value="Downgraded">Downgrade</option>
														</select>
											</div>
											<div class="input_wrapper" >
														<input type="submit" id="clear_etc_act" value="Clear" class="buttons dstr" style="width:130px;">
														<input type="submit" id="save_etc" value="Submit" class="buttons dstr" style="width:130px;">
														
											</div>
							
								</div>
								<div class="halfcol width90" style="float:left;border:none;" >
								<hr style="width:96%;margin:auto;">
								<div class="etc_pannel">
								
										
									</div>	

								</div>
									
								
							</div>
							<div class="cols cols2" >
							<p class="box_label"><span>Active ETC</span></p>
								<div class="all_active_etc">
											
								</div>
									<div class="input_wrapper" >
										<input type="date" id="date_deactivated" class="form-control all_etc deact_pannel" style="width:130px;"/>
									
										<input type="file" id="deactivatefile" name="deactFile" class="etc_input all_etc deact_pannel" style="width:130px;"/>
									</div>
									<div class="input_wrapper" >
										<input type="submit" id="deactivate_etc" value="Deactivate" class="buttons dstr deact_pannel" style="width:130px;">														
									</div>
								
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
		var disaster_lbl="</u>D</u>isaster and Impact";
	function radio_click(){
		alert("click radio");
		alert($(".dst_item:checked").parent().next().next().text());
		
	}	
	
	<?php  echo "

	var sess_id='".$_SESSION["id"]."';
	function test4(){
		alert(sess_id);
	}
	var slect_log='".encrypt("SELECT id, concat(date_logged,'-',`status`) as log FROM etc_disaster where disaster_id=")."';
	
	";?>

$(document).ready(function(){
	get_etc("activating",".etc_pannel");
	get_etc_active("active",".all_active_etc");		
	$(".deact_pannel").hide();
	$("#hazard_form").slideUp();
	disable_affected();
	$(".impact_log").attr("disabled","disabled");
	$("#add_selected").hide();
	// $(".showcase-container, .showcase-area").hide();
	// $("#imgform").css("padding-top","100px");
	$("#add_attr").hide();
	
	
	$("#region").hide().prev().hide();
	$("#province").hide().prev().hide();
	$("#municipality").hide().prev().hide();
	$("#done").hide();
	
	

	var alt=false;
	var height=$(".big").css("height");
	href_each(".disasters td:nth-child(5)");
	remove_next_word(".disasters td:nth-child(4)");	
	enrycpt_each(".dst_item");
	$("#search_category option[value=0]").text("Select Category");
	

	$(window).keyup(function(e) {
		if(e.key === "Alt"){
		alt=false;
		}
	});
	
	$(".impact1").change(function(){
		$(".impact2").val($(this).val());
		//alert("change");
		//$(".inputs2").removeAttr("disabled");

	});
	$(".impact2").change(function(){
		$(".impact1").val($(this).val());
	});
	$(document).keydown(function(e) {
		//alert("key");
		if(e.key === "Alt"){
		alt=true;
		}
		if(alt){
			if(e.key === "P" || e.key === "p" ){
				$("#attributes").slideToggle("slow");
				$("#add_attr").toggle();
			}
			if(e.key === "R" || e.key === "r" ){
				$("#attributes2").slideToggle("slow");
			}
		}
	});
	
	
	$("#sess_id").click(function(){
		//test4();
	});
	
	$("#add_attr").click(function(){
		var elem="<div class='input_wrapper'> \
		<p class='label'>Attribute Name:</p> \
		<input type='text' id='new_attr'>\
		</div> \
		<div class='input_wrapper'> \
		<p class='label'>Values if any:</p> \
		<textarea cols='25' rows='5' id='attr_val' \
		Placeholder='Place / in between each value'></textarea>\
		</div> \
		<div class='input_wrapper'> \
		<input type='submit' value='Add' id='add_new_attr' style='width:50px;'> \
		</div> \
		";
		
		$(".big").css("height","fit-content");
		
		Popup_modal_show(elem,100);
		$(".big div div .label").css("text-align","left");
	});
	$("#test").click(function(){
		alert($(".gender").val());
	});
	$(document).on("click","#add_new_attr",function(){
		
		var disaster_id=$(".dst_item:checked").val();
		var cat=$(".dst_item:checked").parent().next().next().text();
		if(global_validate("#new_attr","")==false){
		
			$.post("AJAX/add_attributes.php",
			{
				disaster: disaster_id,
				attr: $("#new_attr").val(),
				val: $("#attr_val").val(),
				category: cat
			}, function(data){
				if(data=="New record created!"){
					var classes="input_wrapper%dst_lbl label%dst_input%dst_hidden";
					make_input_attributes("#attributes", classes, cat, disaster_id,"","#attributes div:nth-child(1)","");
			
					$("#add_attr").show();
					$("#new_attr").val("");
					$("#attr_val").val("");

					alert("Attribute added");
					

				}
				else{
					alert(data);
				}
				
			});
		}
		else{
			//alert(disaster_id+" "+cat);
		}
		//alert($("#new_attr").val());
	});
	$(document).on("change",".dst_item",function(){
		
		var cat=$(this).parent().next().next().text();	
		var name=$(this).parent().next().text();
		$(".disaster_name").html("Disater: "+"<b>"+name+"</b>");
		$(".disaster_nature").html("Type: "+"<b>"+cat+"</b>");
		

		
		var disaster_id =$(this).val();
		var classes="input_wrapper%dst_lbl label%dst_input%dst_hidden";
		make_input_attributes("#attributes", classes, cat, disaster_id,"","#attributes div:nth-child(1)","");
		if(	!$("#attributes").is(":hidden")){
			$("#add_attr").show();
							//$("#btncovid").css("border","none");
		}else{
			$("#add_attr").hide();
		}
		
	
		
		            
		//alert($(this).val());
		$("#lbl_disaster_header").html(name+" Risk and Impact");
		//alert($("#form").val());
		fill_areas("SELECT id,name, geocode FROM assets.region","Select All%Regions%Geocode");
		
		
	});
	// $('#attributes').on('DOMSubtreeModified', function(){
	// 	$('#attributes:last-child').after("<input type='submit' value='Add Parameter' id='add_attr' \
	// 										 style='font-size:11px;width: \
	// 										 fit-content;padding:2px; \
	// 										  display:block; '>");
	// 	});
	
	$(".mini_pannel").click(function(){
		
		
	});

	function desc_risk(val,type){
		var table="";
		if(type=="risk"){
			if(val=="D Certain/Immenent"){
			table="<table id='desc_risk'> \
			<tr><td colspan='2'>"+val+" \
			<tr><td>Tropical Cyclone Track/Floods/Lanslide: <td> More than 2 Provinces/highly urbanized cities exposed \
			<tr><td>Escalation Protocol: <td> RDRRMC to take lead and manage \
			</table>";
			}

			if(val=="C Highly Likely"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Tropical Cyclone Track/Floods/Lanslide: <td>2 Provinces/highly urbanized cities exposed \
				<tr><td>Escalation Protocol: <td> RDRRMC to augment \
				</table>";
			}
			if(val=="B Highly Likely"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Tropical Cyclone Track/Floods/Lanslide: <td>1 Provinces/highly urbanized cities exposed \
				<tr><td>Escalation Protocol: <td> RDRRMC to monitor \
				</table>";
			}
			if(val=="A Unlikely"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Tropical Cyclone Track/Floods/Lanslide: <td>2 Provinces/highly urbanized cities exposed \
				<tr><td>Escalation Protocol: <td>No Exposure \
				</table>";
			}
		}
		if(type=="impact"){
			if(val=="4 Catastrophic"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Wind Impact: <td>Tropical Cyclone Wind Signal 3 and above \
				<tr><td>Floods/Lanslide: <td>High to very high susceptibility \
				<tr><td>Ciritcal Cyclone Chart Track: <td> RED ALERT LEVEL Within 200km diameter \
				<tr><td>Affected Pupulation: <td> 15% or more than 15% of the overall Regional Population \
				</table>";
			}

			if(val=="3 Major"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Wind Impact: <td>Tropical Cyclone Wind Signal 2 \
				<tr><td>Floods/Lanslide: <td>Moderate susceptibility \
				<tr><td>Ciritcal Cyclone Chart Track: <td> ORANGE ALERT LEVEL Within 201KM to 400KM diameter \
				<tr><td>Affected Pupulation: <td> 9% to 14% of the overall Regional Population \
				</table>";
			}
			if(val=="2 Minor"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Wind Impact: <td>Tropical Cyclone Wind Signal 1 \
				<tr><td>Floods/Lanslide: <td>Low susceptibility \
				<tr><td>Ciritcal Cyclone Chart Track: <td> YELLOW ALERT LEVEL Within 401KM to 600KM diameter \
				<tr><td>Affected Pupulation: <td> 10% of the overall Regional Population \
				</table>";
			}
			if(val=="1 Neglegible"){
				table="<table id='desc_risk'> \
				<tr><td colspan='2'>"+val+" \
				<tr><td>Wind Impact: <td>No ropical Cyclone Wind Signal  \
				<tr><td>Floods/Lanslide: <td>No susceptibility \
				<tr><td>Ciritcal Cyclone Chart Track: <td> No susceptibility \
				<tr><td>Affected Pupulation: <td> No affected population \
				</table>";
			}
		}
		
		$(".risk_desc").html(table);
		$("#impact_desc").remove();
	
	}
	$("#epr").change(function(){
		var val=$(this).val();
		if(val=="STANDBY"){
			$(this).css("background-color","#b3e6b3")
		}
		if(val=="0"){
			$(this).css("background-color","white")
		}
		if(val=="ALPHA"){
			$(this).css("background-color","#ffeb99")
		}
		if(val=="BRAVO"){
			$(this).css("background-color","#ffb84d")
		}
		if(val=="CHARLIE"){
			$(this).css("background-color","#ff4d4d")
		}
	});
	$("#probability").change(function(){
		var val =$(this).val();
		desc_risk(val,"risk");
		
		
	});

	$("#o_impact").change(function(){
		var val =$(this).val();
		desc_risk(val,"impact");
		
		
	});
	
	
	
	$("#search_category").change(function(){
		var str="";
		if($(this).val()=="0"){
			str="select id,name,natureofdisaster, datestarted, file_upload \
		 from disaster order by id desc";
		}else{
			str="select id,name,natureofdisaster, datestarted, file_upload \
		 from disaster where natureofdisaster= '"+$(this).val()+"' order by id desc";
		}
		 
		load_disaster(str);
			
	});
	function load_disaster(str){
		
			var headers="%Disaster%Nature..%Date%File";
			var classes ="dst_all%dst_item";
			global_load_table_radio(str,headers,true,false,classes,".disasters",".dst_item",".disasters td:nth-child(5)",".disasters td:nth-child(4)", "");
			enrycpt_each(".dst_item");
	}

	$("#search_disaster").keyup(function(){
		//alert("test");
			var str="select id,name,natureofdisaster, datestarted, \
			file_upload  from disaster where name like '%"+$(this).val()+"%'";
			load_disaster(str);
									

	});

	function fill_areas(str,headers){
		
		var classes ="all_area%item_area";
		global_load_table(str,headers,true,true,classes,".affected",".item_all","",".item_area");//the checkbox item_area are disabled on first load 
		//as disaster attributes were not yet supplied
		//this will enable as soon as the save button under disater/calamatiy pannel is clicked
		$(".item_area").removeAttr("disabled");
		
		//$(".item_area").attr("disabled","disabled");
									

	}
	function fill_province(){
		var str="SELECT id,name, geocode FROM assets.province p where reg_id="+$("#region").val();
		 var headers="%Province%Geocode";
		 if($("#region").val()=="0"){
			str="SELECT id ,name, geocode FROM assets.province p ";
		 }
			
			fill_areas(str,headers);
	}
	function fill_municipality(){
		var str="select id,\
		name, geocode  FROM municipality m where province_id="+$("#province").val();
		var headers="%Municiplality%Geocode";
		
			
			fill_areas(str,headers);
	}
	function fill_barangay(){
		var str="SELECT id,\
		 name, geocode  FROM assets.barangay b where muni_id="+$("#municipality").val();
			var headers="%Barangay%Geocode";
			fill_areas(str,headers);
			$(".item_area").removeAttr("disabled");
	}
	$("#region").change(function(){
		$(".affected").empty();
		if($("#scale").val()=="Provincial"){
			fill_province();

		}
		$(".item_area").removeAttr("disabled");
		
	});
	$("#province").change(function(){
		$(".affected").empty();
		if($("#scale").val()=="Municipal"){
		fill_municipality();
		}
		$(".item_area").removeAttr("disabled");
	});
	$("#municipality").change(function(){
		$(".affected").empty();
		if($("#scale").val()=="Brangay"){
		fill_barangay();
		}
		$(".item_area").removeAttr("disabled");
	});
	$("#scale").change(function(){
		var val = $(this).val();
		if(val=="Regional"){
			$("#region").hide().prev().hide();
			$("#province").hide().prev().hide();
			$("#municipality").hide().prev().hide();
		
			var str="SELECT id,name, geocode FROM assets.region";
			var headers="Select All%Region%Geocode";
			fill_areas(str,headers);
		

		}
		if(val=="Provincial"){
			$("#region").show().prev().show();
			$("#province").hide().prev().hide();
			$("#municipality").hide().prev().hide();
			fill_province();
			$("#region").removeAttr("disabled");
			
		}
		if(val=="Municipal"){
			$("#region").show().prev().show();
			$("#province").show().prev().show();
			$("#municipality").hide().prev().hide();
			fill_municipality();
			$("#region").removeAttr("disabled");
			$("#province").removeAttr("disabled");
			
		}
		if(val=="Brangay"){
			$("#region").show().prev().show();
			$("#province").show().prev().show();
			$("#municipality").show().prev().show();
			fill_barangay();
			$("#region").removeAttr("disabled");
			$("#province").removeAttr("disabled");
			$("#municipality").removeAttr("disabled");
			
		}
		$(".item_area").removeAttr("disabled");
		
	});
	$(document).on("click",".item_area",function(){
		
		if($(this).is(":checked")){
			$("#add_selected").show();
		}
		else{
			$("#add_selected").hide();
		}
	});
	$("#clear_disaster").click(function(){
		$("#lbl_disaster_header").html(disaster_lbl);
		$(".dst_item").prop("checked",false);
		$("#attributes").empty();
		$("#add_attr").hide();
		$(".disasters").css({"border":"none"});
		$(".dst_item").css({"border":"solid 1px rgb(113, 113, 113)"});
		$("#attributes2 div select").css({"border":"solid 1px rgb(113, 113, 113)"});
		$("#attributes2 div select").val("0");
		$(".risk_desc").empty();
		$("#search_disaster").val("");
		$("#search_category").val("0");
		var str="select id,name,natureofdisaster, datestarted, \
			file_upload  from disaster ";
		load_disaster(str);
		$("#form").val("New/Escalation");
		$("#scale").val("Regional");
		$(".inputs3").attr("disabled","disabled").hide().prev().hide();
		disable_affected();
		$(".impact_log ").empty().attr("disabled","disabled");

	});
	$("#save_disaster").click(function(){
		$(".disasters").css({"border":"none"});
		//alert($(".dst_item:checked").val()+" "+$(".dst_item:checked").parent().next().text());
		var risks=is_empty_class("#attributes2 select","0");
		if($(".dst_item").is(":checked")){
			// $.each($("#attributes2 select"),function(){
			// 	alert($(this).val());
			// });
			if(!is_empty_class("input.dst_input","") && risks==false){// this global function allows you to validate all inputs within thesame class
				//witout the husle of manually checkicking each
				//this function only colord the border red of the input that is empty
				//howevewr if on of the inputs wihin this class is empty it will always retrun true. emaing that there is an empty input within the class
				var arr_attributes="";
				var arr_keys=["%","?","&","^","<",">","$","@","'"];
				var length=$("input.dst_input").length;
				var index=1;
				//alert(length);
				$.each($("input.dst_input"),function(){
					arr_attributes+=str_replace(arr_keys,$(this).parent().find("p").text())+" isog "+str_replace(arr_keys,$(this).val())+" isog "+$(this).prev().val();
					if(index<length){
						arr_attributes+=" msunod ";
					}
					index++;
				});
			
				//alert(length);
				$.each($("select.dst_input"),function(){
					arr_attributes+=" msunod "+str_replace(arr_keys,$(this).parent().find("p").text())+" isog "+str_replace(arr_keys,$(this).val())+" isog "+$(this).prev().val();
					
				});

				//alert(arr_attributes);
				var ajax="";
				if($(".impact1").val()=="0"){
					ajax="AJAX/add_etc_disaster.php";
				}
				$.post(ajax,
				{
					disaster:$(".dst_item:checked").val(),
					attributes:arr_attributes,
					probability:$("#probability").val(),
					o_impact:$("#o_impact").val()

				},
				function(data){
					var arr_data=to_array(data,"%");
					if(arr_data[0]=="New records created!"){
						Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record created!</b>",600);
						$(".impact2, .impact").val("C");
						
						$("#attributes2 div > select").attr("disabled","disabled");
						$(".dst_input").attr("disabled","disabled");
						$("#add_attr").attr("disabled","disabled");
						$(".dstr").attr("disabled","disabled");
						$(".impact1, .impact2").attr("disabled","disabled");
						$("#add_lbl").remove();
						$(".dst_item").attr("disabled","disabled");
						$("#span_affected").after("<span id='add_lbl' style='font-size:12px;'>-(complete the data by adding affected areas)</span>");
						enable_affected();
						$(".item_area").removeAttr("disabled");
						$("#current_etc").val(arr_data[1]);
				
					}
					else{
						alert(arr_data[0]);
					}
				});
			}		
			
		}else{
			$(".disasters").css({"border":"solid 1px red"});
		}
	});
	$("#add_selected").click(function(){
		var date= new Date($("#affected_date").val());
		var str_date=date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
		//alert(str_date);
		var size=$(".item_area:checked").length;
		var index=1;
		var str_affected=""; 
		validate_date("#affected_date");
		if(is_empty_class(".inputs2","0")==false && validate_date("#affected_date")==false){
			$.each($(".item_area:checked"),function(){
			str_affected+=$(this).val();
			//+" sibog "+$("#scale").val()+" sibog "+$("#epr").val()+" sibog "+$("#l_impact").val();
			if(index < size){
				str_affected+=" msunod ";
			}
			index++;
			});

			//alert(str_affected);
			$.post("AJAX/add_affected_areas.php",
			{
				areas:str_affected,
				disaster: $(".dst_item:checked").val(),
				scale: $("#scale").val(),
				epr: $("#epr").val(),
				l_impact: $("#l_impact").val(),
				etc: $("#current_etc").val(),
				epr: $("#epr").val(),
				date: str_date
			},function(data){
				//alert(data);
				Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>"+data+"</b>",600);
				soft_clear_col2();
				load_affected("#disaster_affected");
				$("#done").show();
				

			});
		}else{
			$(".add_err").remove();
			$(".add_con").after("<div class='input_wrapper add_err'><p style='color:red;'>Please check required fields!</p></div>");
		}
		//alert(size);		
	});
	$("#done").click(function(data){
		soft_clear_col2();
		$(".impact_log ").empty();
		$(".dst_item").prop("checked",false).removeAttr("disabled");
		$("#attributes").empty();
		$("#add_attr").hide();
		$("#probability, #o_impact").removeAttr("disabled");
		$(".dstr").removeAttr("disabled");

		



	});
	function soft_clear_col2(){
		$('.item_area').prop("checked",false);
		$("#scale").val("Regional");

		$("#epr").val("0").css({"background-color":"white"});

		$("#l_impact").val("0");
		$(".add_err").remove();
		$("#region").hide().prev().hide();
			$("#province").hide().prev().hide();
			$("#municipality").hide().prev().hide();
		
			var str="SELECT id,name, geocode FROM assets.region";
			var headers="Select All%Region%Geocode";
			fill_areas(str,headers);
	}
	function get_etc(stat, target){
		//alert("test");
		$.post("AJAX/load_etc_rows.php",
		{
			status:stat
		},
		function (data){
			
			$(target).html(data);
			remove_next_word(".head_table th:nth-child(2)");
			remove_first_word(".head_tableth:nth-child(4)");
			remove_first_word(".head_table th:nth-child(5)");
			remove_next_word(".mini_con td:nth-child(5)");

		});
	}
	$(document).on("change",".etc_item",function(){
	
		//alert($(this).val());
		var src=$(this).parent().siblings(":last").find(".mini_arrow");
		if($(this).is(":checked")){
			$(".mini_con").slideUp();
		$(".mini_arrow").attr("src","images/mini_arrow_down1.png")
		
		$(this).parent().parent().next().find("td .mini_con").slideDown();
		
                src.fadeOut("fast",function(){
					src.attr("src","images/mini_arrow_up.png");
                    src.fadeIn("fast");
                });
		}
		else{
			$(this).parent().parent().next().find("td .mini_con").slideUp();
			src.fadeOut("fast",function(){
					src.attr("src","images/mini_arrow_down1.png");
                    src.fadeIn("fast");
                });

		}
		
		//alert(src);
	});
	// $(".head_table").hover(function(){
	// 	$(this).find("th").css("background-color", "yellow");
	// 	alert("hover");
	// });
	$("#clear_etc_act").click(function(){
		$('#date_activated').val(new Date());
		$("#activatefile").val("");
		$("#reso").val("");
		$(".etc_item").prop("checked",false).change();
		$(".err_lbl_etc").remove();
		$(".all_etc").css({"border":"solid 1px #ddd"})

	});

	function get_etc_active(stat, target){
		//alert("test");
		$.post("AJAX/load_active_etc.php",
		{
			status:stat
		},
		function (data){
			
			$(target).html(data);
			href_each(".active_etc_logs th:nth-child(5)");
			remove_first_word(".active_etc_logs_affected td:nth-child(3)");
			remove_next_word(".active_etc_logs_affected td:nth-child(5)");

		});
	}
	$("#save_etc").click(function(){
		var validate_d=validate_date("#date_activated");
		if(is_empty_class(".etc_input","")==false && validate_d==false ){
			var date= new Date($("#date_activatedv").val());
			var str_date=date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
			var file =$("#activatefile").prop("files")[0];
			var form= new FormData();
			form.append("myFile",file);
			$.ajax({
				url:"AJAX/file_upload_etc.php",
				type:"POST",
				data:form,
				contentType:false,
				processData:false,
				success: function(result){
					alert(result);
					if(result!="error"){
						$.post("AJAX/activate_etc_disaster.php",
						{
							etc_id:$(".etc_item:checked").val(),
							date_activated:str_date,
							file:result,
							reso: $("#reso").val().trim(),
							etc_stat: $("#etc_stat").val()
						},
						function(data){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>"+data+"</b>",600);
							get_etc("activating",".etc_pannel");	
							get_etc_active("active",".all_active_etc");	

						});
					}				
				}
			});
					
		}
		else{
			$(".err_lbl_etc").remove();
			$("#date_activated").parent().before("<div class='input_wrapper err_lbl_etc'><p id='err_etc' style='color:red;'>Required fields cannto be empty!</p></div>");
		}
	});
	$(document).on("change",".radio_active_etc",function(){
		$(".deact_pannel").show();
		
		var radio_active= $(".radio_active_etc:checked").parent().parent().next().find("td div");
		$(".mini_con").slideUp();
		radio_active.slideDown();


	});
 });
    </script>