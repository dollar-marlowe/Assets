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
		.inputs, .imgform-img  select, select{
			font-size:12px;
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
		.table_con{
			overflow:auto;
			margin:auto;
			height:250px;
			
			
		}
		.container{
			margin:auto;
			margin-top:10px;
			width:90%;
		}
		table{
			border-collapse: collapse;
			
			margin-left:5px;
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
		.input_wrapper input, .input_wrapper select{
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
			margin-bottom:30px;		
			border-radius:30px;
			
		}
		input[type=submit]{
			width:200px;
			
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
			
				margin-top:-15px;
				margin-left:15px;
				margin-bottom:20px;
				position:absolute;
				
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
		}
		@media(max-width:280px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
			.inputs{
				font-size:10px;
			}
		}
		
	
		
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
	<div class="pannel_con">
			<div class="pannel 1stpannel" onclick="slide('#hazard_form')" ><p  id="accounts"  class="lbl_wrap"><img src="images\hazard.png"> <u>A</u>ffected Areas</p></div>		
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
											<div class="input_wrapper" style="margin:auto">
											<input type="text" id="search_disaster" class="inputs" Placeholder="Search Disaster">
											<select id='search_category' class="inputs">
													<?php 
													$str="SELECT distinct natureofdisaster, natureofdisaster FROM disaster";
													loadropdown($str,"natureofdisaster","natureofdisaster","Nature of Disaster");
													?>
											</select>
											</div>
											<div class="table_con container" >
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
											 style='font-size:11px;width:
											 fit-content;padding:2px;
											  display:block;
											  margin-left:120px; margin-bottom:-15px;'>

												<div id="attributes" class="halfcol" style="float:left;" >
												<p class="box_label"><span><u>P</u>arameters</span></p>
												<br>
												</div>
											
												
												<div id="attributes2" class="halfcol"   style="float:right;" >
												<p class="box_label"><span><u>R</u>isk</span></p><br>
													<div class="input_wrapper">
														<p class="label">Pobability</p>
														<select id="probability">
																<option value="0">Select</option>
																
																<option value="D Certain/Immenent">D Certain/Immenent</option>
																<option value="C Highly Likely">C Highly Likely</option>
																<option value="B Highly Likely">B Highly Likely</option>
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
													<div class="container risk_desc">

													</div>
													<!-- <input type="submit" value="Session_test" id="sess_id"> -->
												</div>
											</div>
												
										</div>  

										<div class="cols cols2" >
										<p class="box_label"><span>Affected Areas</span></p>
											<div class="input_wrapper" style="margin:auto">
												<div class="input_wrapper">
													<p class="label">Scale: </p>
													<select id="scale">
														<option value='Regional'>Regional level</option>
														<option value='Provincial'>Provincial level</option>
														<option value='Municipal'>Municipal level</option>
														<option value='Brangay'>Brangay level</option>
													</select>
												</div>  
												<div class="input_wrapper">
													<p class="label" for="region">Region:</p>
													<select id="region" name="region" onchange="FetchRegion(this.value,'SELECT * FROM province where reg_id=','#province','id','name','')">
														<?php
														
														$str="SELECT id,name FROM region";
														loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 

														?>
													</select>
												</div>  
												 
												<div class="input_wrapper">
													<p class="label" for="region">Province:</p>
														<select id="province" disabled name='province'
														onchange="FetchRegion(this.value,'SELECT * FROM municipality where province_id=','#municipality','id','name','Region')"
														>
														<option value=0>Select from Region</option>
														</select>
												</div>  

												<div class="input_wrapper">
													<p class="label" for="region">Municipality:</p>
														<select id="municipality" disabled name='municipality' 
														onchange="FetchRegion(this.value,'SELECT * FROM barangay where muni_id=','#barangay','id','name','Municipality')"
														>
														<option value=0>Select from Province</option>
														</select>
												</div>  
												<div class="input_wrapper">
													<p class="label" for="region">Barangay:</p>
														<select id="barangay" disabled name='barangay' onchange="revertcss('#barangay')">
														<option value=0>Select from Municipality</option>
														</select>
												</div>  
												<table class="affected">
													
												</table>	
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
							<div class="inner-wrapper" style='height:300px;'>
							
								<div class="input_wrapper" style="margin:auto">
							
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
	function radio_click(){
		alert("click radio");
		alert($(".dst_item:checked").parent().next().next().text());
		
	}	
	
	<?php  echo "

	var sess_id='".$_SESSION["id"]."';
	function test4(){
		alert(sess_id);
	}
	
	";?>

$(document).ready(function(){
	// $(".showcase-container, .showcase-area").hide();
	// $("#imgform").css("padding-top","100px");
	$("#add_attr").hide();
	
	
	$("#province").hide().prev().hide();
	$("#municipality").hide().prev().hide();
	$("#barangay").hide().prev().hide();

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
	$("#scale").change(function(){
		var val = $(this).val();
		if(val=="Regional"){
			$("#province").hide().prev().hide();
			$("#municipality").hide().prev().hide();
			$("#barangay").hide().prev().hide();

		}
		if(val=="Provincial"){
			$("#province").show().prev().show();
			$("#municipality").hide().prev().hide();
			$("#barangay").hide().prev().hide();
			
		}
		if(val=="Municipal"){
			$("#province").show().prev().show();
			$("#municipality").show().prev().show();
			$("#barangay").hide().prev().hide();
			
		}
		if(val=="Brangay"){
			$("#province").show().prev().show();
			$("#municipality").show().prev().show();
			$("#barangay").show().prev().show();
			
		}
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
					make_input_attributes("#attributes", classes, cat, disaster_id,"<p class='box_label'><span><u>P</u>arameters</span></p><br>","#attributes div:nth-child(1)");
			
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
		
		var disaster_id =$(this).val();
		var classes="input_wrapper%dst_lbl label%dst_input%dst_hidden";
		make_input_attributes("#attributes", classes, cat, disaster_id,"<p class='box_label'><span><u>P</u>arameters</span></p><br>","#attributes div:nth-child(1)");
		if(	!$("#attributes").is(":hidden")){
			$("#add_attr").show();
							//$("#btncovid").css("border","none");
		}
		            
		//alert($(this).val());

		
	});
	// $('#attributes').on('DOMSubtreeModified', function(){
	// 	$('#attributes:last-child').after("<input type='submit' value='Add Parameter' id='add_attr' \
	// 										 style='font-size:11px;width: \
	// 										 fit-content;padding:2px; \
	// 										  display:block; '>");
	// 	});

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
		$("#desc_risk").before("<p id='impact_desc' Style='font-size:16px;text-align:center; width:100%;'>Description</p>");

	}
	$("#probability").change(function(){
		var val =$(this).val();
		desc_risk(val,"risk");
		
		
	});

	$("#o_impact").change(function(){
		var val =$(this).val();
		desc_risk(val,"impact");
		$("#desc_risk").before("<p ></p>");
		
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
		 
			 var headers="%Disaster%Nature..%Date%File";
			var classes ="dst_all%dst_item";
			$(".disasters").empty();
			global_load_table_radio(str,headers,true,false,classes,".disasters",".dst_item",".disasters td:nth-child(5)",".disasters td:nth-child(4)","");
			enrycpt_each(".dst_item");
			
	});
	

	$("#search_disaster").keyup(function(){
		//alert("test");
			var str="select id,name,natureofdisaster, datestarted, \
			file_upload  from disaster where name like '%"+$(this).val()+"%'";
			var headers="%Disaster%Nature..%Date%File";
			var classes ="dst_all%dst_item";
			global_load_table_radio(str,headers,true,false,classes,".disasters",".dst_item",".disasters td:nth-child(5)",".disasters td:nth-child(4)", "");
			enrycpt_each(".dst_item");
									

	});
 });
    </script>