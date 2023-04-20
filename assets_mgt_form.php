<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
	
		.container{
			width:100%;
			margin:auto;
			padding:10px;
			
			
		}
		.sum{
			
			width:49%;
			
			display:inline-flex;
			margin:auto;
			margin-top:0px;
			text-align: left;
						
		}
		.sum ul li{
			margin-bottom:10px;
		}
		ul#listavail li#availhead,
		ul#listdep li#dephead{
			list-style-type: none;
		}
		#listavail, #listavail p,#listdep, #listdep p{
			margin-bottom:10px;
		}
		p#total{
			margin:auto;
			font-weight:bold;
			color:red;

		}
		.list p{
			font-weight:bold;
		}
		
		
		.imgform-img p{
			margin-left:10px;
		
			display:inline-block;
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		.action{
			display:grid;
			margin:auto;
			width:50%;
		}
		table.asset tr th{
			text-transform:uppercase;
			font-weight:600;
			background-color:rgb(45, 44, 46);
			color:white;	
		}
		
		table.asset tr:nth-child(odd){
			background-color:rgb(232,232,232);
			color:black;
		}
		table.asset td, th{
			text-align:left;
			padding-left:10px;
			text-transform:capitalize;			
		}
		table.asset{
			border-collapse: collapse;
			width:98%;
			margin-left:10px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table.asset tr td{
			padding-bottom:10px;
			padding-top:10px;
		}
		.imgform select{
			z-index:-1;
		}
		.imgform-img{
			width:100%;
			
		}
		.imgform-container{
			width:95%;
			margin:auto;
			margin-top:20px;
		}
		p.head{
			display:block;
			margin:auto;
			width:fit-content;
	 		margin-bottom:1px;
			margin-top:-10px;
			font-size:23px;
		}
		#sbdemove, #receive{
			margin:auto;
			margin-top:10px;
			display:block;
		}
		.paginate{
			width:fit-content;
			margin:auto;
		}
		.lbl_canvas{
			margin:auto;
			margin-top:0;
			width:fit-content;
			text-align:center;
			height:40px;
			padding:10px;
			font-size:20px;
			display:block;
			
		}
		.lbl_canvas:hover{
			border-bottom:solid 5px #ddd;
			
		}
		.charts{
			width:100%;
			
		}
		
		.form-container input, .form-container label, .form-container select
		{
			font-size:12px;
		}
		
		@media (min-width:1268px){
			.form-container{
			width:30%;
			}
		}
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.form-container{
				width:100%;
				font-size:18px;
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea{
				width:50%;
				margin:auto;
			}
			
			table.asset{
				
				font-size:12px;
				margin:auto;
			}
		}
		@media (min-width:1600px){
			.float_left{
			float:left;
			}
			.float_right{
				float:right;
			}
		}
		@media (max-width:1600px){
			.sum{
				margin:auto;
				display:block;
				margin-bottom:10px;
				width:90%;
			}
			.container{
				width:100%;
				display:block;
			}
		}
		@media (max-width:820px){
			table.asset{
				
				font-size:13px;
			}
			table.asset th:nth-child(6), table.asset td:nth-child(6){
				display:none;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			p.head{
				font-size:23px;
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea{
				width:70%;
				margin:auto;
			}
			
		}
		@media (max-width:700px){
			
			table.asset{
				
				font-size:9px;
			}
			table.asset th:nth-child(5), table.asset td:nth-child(5),
			table.asset th:nth-child(6), table.asset td:nth-child(6){
				display:none;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			p.head{
				font-size:23px;
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea{
				width:75%;
				margin:auto;
			}
		}
		@media (min-width:453px){
			.hidden_list{
			display:none;
			margin:auto;
				width:fit-content;
			}
		}
		
		@media (max-width:452px){
			.sum{
				display:block;

			}
			table{
				width:fit-content;
			}
			
			table.asset th:nth-child(2),table.asset td:nth-child(2), table.asset th:nth-child(5), table.asset td:nth-child(5),
			table.asset th:nth-child(6), table.asset td:nth-child(6)				{
				display:none;
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea{
				width:90%;
				margin:auto;
			}
			.hidden_list{
				display:block;
				margin:auto;
				width:fit-content;
				
			}
			.charts, .lbl_canvas{
				display:none;
			}
		}
		@media (max-width:390px){
			table.asset {
				
				font-size:10px;	
			}
			.form-container input,
			.form-container label,
			.form-container select,
			.form-container .wrap,
			.form-container textarea{
				width:100%;
				margin:auto;
			}
			
		}
			@media (max-width:358px){
				table.asset{
					
					font-size:8px;	
				}
				
				table.asset th:nth-child(2), table.asset td:nth-child(2), table.asset th:nth-child(5), table.asset td:nth-child(5),
				table.asset th:nth-child(6), table.asset td:nth-child(6),
				table.asset th:nth-child(7), table.asset td:nth-child(7){
				display:none;
			}
			table.asset th:nth-child(2),table.asset  td:nth-child(2){
				color:red;
			}
		}
		.sum .wrap1 ul li{
			overflow-wrap: break-word;
		
		}

	/*accodion styles */
	.imgform-img .ac-container{
        width: 100%;
        display:block;
		text-align:center;
		margin:auto;		
		box-shadow:0px 0px 7px #3f4240;
	
      }
	 
	  .imgform-img .ac-container label{
        width:100%;
		position:relative;
		z-index: 0;		
		margin-bottom:10px;
      }	
	  .imgform-img .ac-container article{
		 width:100%;
	  }
	  .imgform-img .ac-container label:hover{
       
		font-weight:700;
		
      }
	  .imgform-img section.ac-container div:nth-child(odd)   {
			background-color:	rgb(120,120,120);
			color:white;
		}
		.imgform-img section.ac-container div:nth-child(odd) article  {
			background-color:	white;
			color:black;
		}
		/* .imgform-img section.ac-container div:nth-child(even) {
			background-color:	rgb(245, 243, 240);
		
			
		} */
		.imgform-img section.ac-container div:nth-child(even) article input {
		display:block;
			
		}
		.imgform-img section.ac-container div.acc-head:nth-child(even){
			border: solid 1px rgb(217, 216, 215);
		}
		.imgform-img section.ac-container div article {
			border-top:solid 1px rgb(217, 216, 215);
			
		}
		.ac-container input:checked ~ article.sizeauto{
       
		height:auto;
		display:inline-block;
		padding-bottom:15px;
		padding-top:8;
		
		}
		article.sizeauto > * {
			display:inline-block;
			overflow:hidden;
		}	
		#listdep, #listavail, #listreceive{
			background-color:white;
			color:black;
		}
		.filters {
			width:fit-content;
			margin:auto;
		}
		hr.divider{
			margin:auto;
			margin-top:10px;
			margin-bottom:10px;
			background-color:#ddd;
			width:90%;
			opacity:0.5;
		}
		.paginate{
			margin-top:5px;
			margin-bottom:10px;
		}
		.lower_bottons{
			width:fit-content;
			margin:auto;
		}
		article.new_pannel_body{
			padding:10px;
		}
		
		
	
		

</style>
	
	<section id="imgform">
    <div class="imgform-container ">
		
		<!-- this section if for the summary--> 
	  	<div class="imgform-img" >
		<div class="new_pannel">
			<label class="label_new lbl1" onclick="slide('#acc1')">Assets Summary</label>
			<article class="new_pannel_body" id="acc1">
					<p class='head' style="margin-bottom:10px;margin-top:10px;"></p>
						
						<div class="container"  style="display:none;">
								<?php 
								  //echo $_SESSION["status"];
									$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='available' group by category";
									$cols=  array("name","category","quantity");
								
									echo"<div class='sum' style='background-color:white;color:black'>";
									
									echo"</div>";
									echo"<div class=' sum'>";
									
									echo"</div>";
									echo"<div class=' sum'>";
									
									echo"</div>";
								?>
							</div >
							<div class="container">
									
								<div class='sum ' id='con_avail' >
									<?php
									$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='available' group by category";
									$cols=  array("name","category","quantity");
								
										echo"<ul id='listavail' class='hidden_list'>";
										loadlist($str,$cols,"availhead","Available");	
										echo"</ul>";
										?>
									<div style="width:100%;display:block">
										<canvas id="availCharts" class="charts">
										</canvas>
									</div>
								</div>
								<div class='sum ' id='con_dep'>
										<?php
										$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='deployed' group by category";
										$cols=  array("name","category","quantity");
								
										echo"<ul id='listdep'  class='hidden_list'>";
										loadlist($str,$cols,"availhead","Deployed");	
										echo"</ul>";
										?>
										<div style="width:100%;display:block">
											<canvas id="deployedCharts" class="charts">
											</canvas>
										</div>
								</div>
							<div>
							<div class="container">
								<div class='sum' id='con_receive' >
								<?php
										$cols=  array("name","category","quantity");
										$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='To Receive' group by category";
										echo"<ul id='listreceive' class='hidden_list'>";
										loadlist($str,$cols,"toreceive","To Receive");	
										echo"</ul>";
										?>
									<div style="width:100%;display:block">
										<canvas id="receiveCharts" class="charts">
											</canvas>
									</div>
								</div>
								<div class='sum' id='con_total'>
									<div style="width:100%;display:block">
										<canvas id="totalassetsCharts" class="charts">
											</canvas>
										</div>
								</div>
							<div>
							<hr class="divide2 hidden_list" style="background-color:#ddd;margin-top:5px;margin-bottom:10px;">
							<?php
								echo total("select count(id) as id from assetowner where office_id=".$_SESSION["officeid"],"id");
						?>
						<hr class="divide2 hidden_list"   style="background-color:#ddd;margin-top:2px">
			</article>
		</div>
		<div class="new_pannel">
			<label class="label_new lbl2" onclick="slide('#acc2')">Inventory Table</label>
			<article class="new_pannel_body" id="acc2">
			<div class="input_wrapper filters">
			<p class='head'></p>
						<p>Status: 
						<select id='status'>
							<option value='all'>All</option>
							<option value='available'>Available</option>
							<option value='To Receive'>To Receive</option>
							<option value='deployed'>Deployed</option>
							<option value='transfered'>Transfered</option>
							<option value='damaged'>Damaged</option>
						</select>
							</p>
							<?php 
							echo "<input type='hidden' id='office' value='".$_SESSION["officeid"]."'>";
							?>
								<p>
								Assets Category
							<select id='category'>
								<?php 
								$str="SELECT distinct category, category FROM assets";
								loadropdown($str,"category","category","Category");
								?>
							</select>
							</p>
							</div>
							<hr class="divider">
							<table class="asset">
											
										<?php
											$str="select `assetowner`.`id` as id,`assets`.`assetid` as `assetid`, 
											`assets`.`serial` as `serial`, assets.name as name, assets.category as category, 
											assets.brand as brand, assetowner.date_aquired as `date`, 
											`assets`.`status` as `status` from assets, assetowner 
											where assetowner.assets_id=assets.id and assetowner.office_id =".$_SESSION["officeid"]." and assets.status='available' 
											order by assets.category";
											$headers=  array(" ","ASSET NUMBER","SERIAL","ITEM NAME","CATEGORY","BRAND",
														"DATE AQUIRED","STATUS");
											$elem=array("all","item");
											loadtable($str,$headers,true, false, $elem);		
										?>
								</table>
								<div class="input_wrapper lower_bottons">
								<input   id="sbdemove" type='submit' Value='Demobilize' class='sub-bttn' >
								<input   id="receive" type='submit' Value='Receive' class='sub-bttn'>
								</div>

								
			</article>
		</div>
		  
				
				
			
        </div>
		<!-- this section is for the form transfer and deploy--> 
		<div class="form-container">
			<p class='head' id="assetmgt">Deploy Assets</p>
			<label for="action">Action</label>
						<select id="action" name="action" >
							<option value='1'>Deploy</option>
							<option value='2'>Transfer Ownership</option>
						</select>
						<label for="mgtetc" >Emergency Telecoms Activation related?</label>
						<select id="mgtetc" name="etc" >
						<?php
							$str="SELECT id, concat(disaster,'-', date_start) as `etc_disaster` FROM etc_disaster_view";
							loadropdown($str,"id","etc_disaster","Active ETC");//function for loading values into the dropdown accepts sql command and name of columns 
							?>
						</select>
						<label for="office" class="transfer">Select from Regional Offices:*</label>
						<select id="mgtoffice" name="office" class="transfer">
							<?php
							$str="SELECT id,office_name FROM office";
							loadropdown($str,"id","office_name","Offices");//function for loading values into the dropdown accepts sql command and name of columns 
							?>
							
						</select>
						
						<!-- this section is for transfer form idenfied by transfer class on each of the element defined--> 
					<label for="remarks" class="transfer">Remarks:</label>	
					
					<!-- this section is for deploy--> 
					<label for="province" class="deploy">Region:</label>
							<select id="region" name="region" class="deploy">
								<?php
								$str="SELECT id,name FROM region";
								loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 
								?>
							</select>	
					<label for="province" class="deploy">Province:</label>
							<select id="province" name="province" class="deploy" disabled>
							<option value=0>Select from Region</option>
							</select>
					<label for="municipality" class="deploy">Municipality:</label>
							<select id="municipality" name="municipality" class="deploy" disabled>
							<option value=0>Select from Region</option>
							</select>
					<label for="brgy" class="deploy">Barangay:</label>
							<select id="brgy" name="brgy" class="deploy" disabled>
							<option value=0>Select from Region</option>
							</select>	
					<textarea	
						cols="30"
						rows="6"
						placeholder="Description/Remarks"
						id="remarks">
					</textarea>
					<input   id="sbmmgt" type='submit' Value='Submit' class="btn btn-primary " style="color:white;font-weight:800;" >
					<input   id="submitmgtclr" type='submit' Value='Clear' class="btn btn-primary " style="color:white;font-weight:800;" >	
        </div>
      </div>
    </section>
	<script
	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
	</script>
	<script>
		
		$(document).ready(function(){
			$(".assetstotal").addClass("hidden_list");
		
			$(window).resize(function(){
				hide_show_charts();
          	});
			
			$(".assetstotal,.divide2").hide();
			$("#category option:nth-child(1)").text("All");
			$("#status").val("available");
			status_cat_change();
			$('#acc2').slideUp("slow");
		
			$(".transfer").css("display","none");
			$("#sbdemove, #receive").css("display","none");
			var isokmgt={
				"items":false,
				"region":false
			};
			var lbl=0;
			var tblbl=0;
			//defined functions 
			//$("#listavail, #listdep, #listreceive").hide();
			$(".lbl1").click(function(){
				//alert("click");
				if($("#acc1").is(":visible")){
					//alert("true");
					$("#acc2").slideDown();
				}
			});
			function hide_show_charts(){
				var lenght=$(window).width();
				if(lenght<=451){
					$(".hidden_list").show();
					$(".charts").hide();
					$(".lbl_canvas").hide();
				}
				else{
					$(".hidden_list").hide();
					$(".charts").show();
					$(".lbl_canvas").show();
				}
			}
			function get_total(element){
				var arr_elem=get_li(element);
				//console.log(arr_elem);
				var size=sizeof(arr_elem);
				var total=0;
				for(let i=1;i<size;i++){
					total+=parseInt(arr_elem[i][1]);
				}
				return total;
			}
			function total_assets_to_array(){

				return [["total"],["Available",get_total("#listavail li")], ["Deployed",get_total("#listdep li")]];

			}
			//var arr_totals=;
			//console.log(total_assets_to_array());
			make_chart("totalassetsCharts",total_assets_to_array(),"Total Assets","bar",false);
			//console.log(get_total("#listavail li"));
			make_chart("availCharts",get_li("#listavail li"),"Available Assets","doughnut",true);
			make_chart("deployedCharts",get_li("#listdep li"),"Deployed Assets","doughnut",true);
			make_chart("receiveCharts",get_li("#listreceive li"),"Receivable Assets","doughnut",true);
			hide_show_charts();
			function make_chart(target,data,title1,chart_type,show_legend){
				var total=0;
				$("#"+target).empty();
				$("#"+target).parent().find(".lbl_canvas").remove();
				var xValues=[];
				var yValues=[];
				var size=sizeof(data);
				
				for(let i=1;i<size;i++){
					total+=parseInt(data[i][1]);
					yValues.push(data[i][1]);
					xValues.push(data[i][1]+" "+data[i][0]);

				}
				var start_at_0=false;
				var bar_colors=generate_colors(sizeof(xValues));
				if(chart_type=="bar" || chart_type=="line" || chart_type=="scatter" || chart_type=="bubble" ){
							
				
					new Chart(target,{
						type:chart_type,
						data:{
							labels: xValues,
							datasets:[{
								backgroundColor:bar_colors,
								data: yValues

							}]
						},
						options: {
							legend: {display: show_legend},
							title: {
							display: false,
							text: title1,
							
							},
							
							scales: {
								yAxes: [{
									ticks: {
									beginAtZero: true
									}
								}]
								
								}
						}
						
						
					});
			}else{
				new Chart(target,{
						type:chart_type,
						data:{
							labels: xValues,
							datasets:[{
								backgroundColor:bar_colors,
								data: yValues

							}]
						},
						options: {
							legend: {display: show_legend},
							title: {
							display: false,
							text: title1,
							
							}
						}
						
						
					});

			}
			
				var add="<div class='Div_"+title1.replace(" ","_")+"' style='width:100%;display:block;margin:atuo;margin-bottom:20px;')><label class='lbl_canvas'> \
				"+total+" " +title1+"</label></div>";
							
				$("#"+target).css({"width":"95%","border":"1px solid #ddd","margin":"auto"}).before(add);

			}

			function get_li(target){
				var size=0;
				var arr_data=[];
				$.each($(target),function(){
					
					var val_arr=to_array($(this).text(),":");
					val_arr[0]=val_arr[0].replace(/\s+/g," ").trim();
					if(size>=1){
						val_arr[1]=val_arr[1].trim();
					}
					//
					arr_data.push(val_arr);
					
					size++;

				});
				return arr_data;
			}
			function fetch_loc(str, tofill, c1, c2, frm){
				$.post("AJAX/dropdown.php",
				{
					sql:str,
					col1:c1,
					col2:c2,
					from:frm
				},
				function(data){	
					
					$(tofill).removeAttr("disabled").html(data);
				});
			}
			function loadtable(str, headers, chkbox,allchk){
				
				var elem="all"+"%"+"item";
				$.post("AJAX/loadtable.php",
				{
					sql:str,
					hdr:headers,
					check:chkbox,
					all:allchk,
					class:elem

				}, function(data){
					
					$(".asset").html(data);
				});
			}
			function validate_mgt(){
				if($("#action").val()=='1'){
					if($("#region").val()==0 || $("#province").val()==0 || $("#municipality").val()==0 || $("#brgy").val()==0 || $(".item").is(":checked")==false){
						
						if(lbl<1){
							$('#assetmgt').after("<p id='errlbl' style='color:red'>Reuired * field(s) cannot be empty!</p>");
							lbl++;	
						}
						return false;
					}
					else{
						$("#errlbl").remove();
						lbl=0;
						tblbl=0;
						$("#errlbl").remove();
						$("#errtbl").remove();
						return true;
					}	
				}
				if($("#action").val()=='2'){	
					if($("#mgtoffice").val()==0){
						if(lbl<1){
							$('#assetmgt').after("<p id='errlbl' style='color:red'>Reuired * field(s) cannot be empty!</p>");
							lbl++;
							return false;
						}
					}
					else{
						$("#errlbl").remove();
						lbl=0;
						return true;
					}
				}
			}
			function loadlist(str, heads,idname,idhead,idlabel){
				$.post("AJAX/loadlist.php",
				{
					sql:str,
					cols:heads,
					head:idhead,
					label:idlabel
				},
				function(data){
					$(idname).empty();
					$(idname).html(data);
					make_chart("availCharts",get_li("#listavail li"),"Available Assets","doughnut",true);
					make_chart("deployedCharts",get_li("#listdep li"),"Deployed Assets","doughnut",true);
					make_chart("totalassetsCharts",total_assets_to_array(),"Total Assets","bar",false);
					make_chart("receiveCharts",get_li("#listreceive li"),"Receivable Assets","doughnut",true);
			

				});

			}
			function validate_mgt_elem(elem,val){
					if($(elem).val()==val){
						$(elem).css("border-bottom-color","red");
					}
					else{
						$(elem).css("border-bottom-color","#ddd");
					}
				}
			function clear_mgt_forms(){
				$("#region, #province, #municipality, #brgy, #mgtoffice ").css("border-bottom-color","#ddd").val(0);
				$("#province, #municipality, #brgy").attr("disabled","disabled");
				
				lbl=0;
				tblbl=0;
				$("#errlbl").remove();
				$("#errtbl").remove();
				$("#category").val(0);
				
				
				status_cat_change();
				//status_cat_change();
				
			}
			function itemselected(){
				if($(".item").is(":checked")==false){// this checks if one of them is selected no need to use each
					if(tblbl<1){
						$("#category").after("<p id='errtbl' style='color:red'>No item selected</p>");
						tblbl++;
					}
					return false;
				}
				else{
					return true;
				}
			}
			$(document).on("click",".all",function(){
				if($(".all").is(":checked")){
					$(".item").prop("checked",true);
				}else{
					$(".item").prop("checked",false);
				}
			
			});
			$(document).on("click",".Div_Deployed_Assets",function(){
				hide_show_partner("#deployedCharts","#availCharts",1600,"slow");
				
			});
			$(document).on("click",".Div_Available_Assets",function(){
				hide_show_partner("#availCharts","#deployedCharts",1600,"slow");
				
			});
			$(document).on("click",".Div_Receivable_Assets",function(){
				hide_show_partner("#receiveCharts","#totalassetsCharts",1600,"slow");
				
			});
			$(document).on("click",".Div_Total_Assets",function(){
				hide_show_partner("#totalassetsCharts","#receiveCharts",1600,"slow");
				
			});
			//events for retrieving locations: region, province, municipalit, brgy
			$("#region").change(function(){
				if($("#region").val()!='0'){
					var str="Select * from province where reg_id="+$("#region").val()+" order by name asc";
					fetch_loc(str, "#province", "id", "name", "Region");
					$("#municipality, #brgy").attr("disabled","disabled").html("<option value='0'>Select from Province</option>");
				}
				else{
					$("#province, #municipality, #brgy").attr("disabled","disabled").html("<option value='0'>Select from Region</option>");
				}
				validate_mgt_elem("#region",0);
				validate_mgt();
			});
			$("#province").change(function(){
				if($("#province").val()!='0'){
					var str="Select * from municipality where  province_id="+$("#province").val()+" order by name asc";
					fetch_loc(str, "#municipality", "id", "name", "Province");
					$("#brgy").attr("disabled","disabled").html("<option	value='0'>Select from Municipality</option>");
				}
				else{
					$("#municipality, #brgy").attr("disabled","disabled").html("<option value='0'>Select from Province</option>");
				}
				validate_mgt_elem("#province",0);
				validate_mgt();
			});
			$("#municipality").change(function(){
				if($("#municipality").val()!='0'){
					var str="Select * from barangay where muni_id="+$("#municipality").val()+" order by name asc";
					fetch_loc(str, "#brgy", "id", "name", "Municipality");
				}
				else{
					$("#brgy").attr("disabled","disabled").html("<option	value='0'>Select from Municipality</option>");
				}
				validate_mgt_elem("#municipality",0);
				validate_mgt();
			});
			$("#brgy").change(function(){
				validate_mgt_elem("#brgy",0);
				validate_mgt();
			});
			$("#action").change(function(){
				if($("#action").val()=='1'){
					$(".transfer").css("display","none");
					$(".deploy").css("display","inherit");
					$("#assetmgt").html("Deploy Assets");
					
				}
				else{
					$(".transfer").css("display","inherit");
					$(".deploy").css("display","none");
					$("#assetmgt").html("Transfer Assets Ownership");
				}
				$("#msg1").remove();
				clear_mgt_forms();
			});
			function status_cat_change(){
					var category =$("#category").val();
					
						var status =$("#status").val();
						var headers=" %ASSET NUMBER%SERIAL%ITEM NAME%CATEGORY%BRAND%DATE AQUIRED%STATUS";	
						var table_cols="`assetowner`.`id` as id,`assets`.`assetid` as `assetid`, \
						`assets`.`serial` as `serial`, assets.name as name, assets.category as \
						category, assets.brand as brand, assetowner.date_aquired as `date`, \
						`assets`.`status` as `status`";
						var table_source=" assets, assetowner \
						where assetowner.assets_id=assets.id and assetowner.office_id ="+$("#office").val();

						/* //var str="select `assetowner`.`id` as id,`assets`.`assetid` as `assetid`, \
						`assets`.`serial` as `serial`, assets.name as name, assets.category as \
						category, assets.brand as brand, assetowner.date_aquired as `date`, \
						`assets`.`status` as `status` from assets, assetowner \
						where assetowner.assets_id=assets.id and assetowner.office_id ="; */
						if(category!=0){
							table_source+=" and category ='"+category+"' ";
						}
						if(status=="all"){
							
							//str=str+$("#office").val()+" order by assets.category";
							table_source+=" order by assets.category";
						}	
						
						else if(status=="To Receive"){
							
							table_source=table_source+" and `assets`.`status`='To Receive'";
						}
						else if (status=="deployed"){
							//alert($("#office").val());
							
							//console.log(status);
								headers=" %Asset id%Assets%Category%Province%Municipality%Brgy.%Date deployed%Deployment Status";	
								/* //str="SELECT deployment.asset_owner_id as id, assets.assetid as aid, assets.name as name,  assets.category as `category`, \
								province.name as province, municipality.name as muni, barangay.name as brgy,deployment.datemobilized\
								as `datedep`, deployment.deployment_stat as depstat FROM deployment,region,province,municipality,\
								barangay,assetowner,assets where deployment.reg_id=region.id and \
								deployment.prov_id=province.id and deployment.muni_id=municipality.id \
								and deployment.brgy_id=barangay.id and assetowner.id=deployment.asset_owner_id \
								and assets.id=assetowner.assets_id and deployment.deployment_stat='Active'  \
								and assetowner.office_id="+$("#office").val()+" order by `assets`.`category`"; */
								$("#sbdemove").css("display","inline-block");
								table_source="deployment, region, province, municipality, \
								barangay, assetowner, assets where deployment.reg_id=region.id and \
								deployment.prov_id=province.id and deployment.muni_id=municipality.id \
								and deployment.brgy_id=barangay.id and assetowner.id=deployment.asset_owner_id \
								and assets.id=assetowner.assets_id and deployment.deployment_stat='Active' and assetowner.office_id="+$("#office").val();
								if(category!=0){
									table_source+=" and category ='"+category+"' ";
									} 
									table_source+=" order by `assets`.`category`";
								table_cols="deployment.asset_owner_id as id, assets.assetid as aid, assets.name as name,  assets.category as `category`, \
								province.name as province, municipality.name as muni, barangay.name as brgy,deployment.datemobilized\
								as `datedep`, deployment.deployment_stat as depstat";
								// alert(table_source);
								//alert(table_cols);

							}
							else{
								$("#sbdemove").css("display","none");
								
							
								$("#category").removeAttr("disabled");
							
								/* 	str=str+$("#office").val()+" and assets.status='"+status+"' order by `assets`.`category`"; */
									table_source+=" and `assets`.`status`='"+status+"'";
									if(category!=0){
									table_source+=" and category ='"+category+"' ";
									} 
									table_source+="order by `assets`.`category`";
								
					
							}
						if(status=="To Receive"){
							$("#receive").css("display","block");
							$("#sbdemove").css("display","none");
						}
						else{
							$("#receive").css("display","none");
						}
						global_load_table_paginate(table_cols,headers,1,1,"all%item",".asset","","","",table_source,"id",0);
						//console.log("Asfter call "+table_source);
						//loadtable(str,headers,1,0);	
			}
			//events for table filter
			$("#status, #category").change(function(){
				status_cat_change()
							
			});
			//events for input elements change 			
			$(".item").click(function(){			
				if(this.checked){
					$("#errtbl").remove();
					tblbl=0;
				}	
			});
			/* 
			$(".all").change(function(){
				alert($(this).attr("checked"));
				if(this.checked){
					$(this).attr("checked","checked");
					$.each($(".item"), function(){
					
						$(this).attr("checked","checked");
						alert($(this).attr("checked"));
					});
				}
				else{
					
					$(this).removeAttr("checked");
				}
			}); */
			$("#mgtoffice").change(function(){
				validate_mgt_elem("#mgtoffice",0);
				validate_mgt();	
			});
		
			//form validation
			function hasunavailable(){
					$value=false;
					$.each($(".item:checked"), function(){
							var elem=$(this).val();
							if($($(this).parent().parent()).find("td.last").text()!="Available"){
								$value=true;
								
							}
						});
				return $value;
			}
			function calculate_total(str,col){
				$.post("AJAX/total.php",
				{
					sql:str,
					id:col
				},
				function(data){
					$("#total").empty();
					$("#total").html(data);

				});
			}
			
			//bttn submit events 
			function updatealllistandtables(){
						var str="select name, category, count(*) as quantity, status from owned_assets where office_id="+$("#office").val()+"  and status='available' group by category";
						var cols=  "name%category%quantity";
						loadlist(str,cols,"#listavail","availhead","Available");
						var str="select name, category, count(*) as quantity, status from owned_assets where office_id="+$("#office").val()+"  and status='deployed' group by category";
						loadlist(str,cols,"#listdep","dephead","Deployed");
						var str="select name, category, count(*) as quantity, status from owned_assets where office_id="+$("#office").val()+"  and status='To Receive' group by category";
						loadlist(str,cols,"#listreceive","toreceive","To Receive");
						calculate_total("select count(id) as id from assetowner where office_id="+$("#office").val(),"id");
						clear_mgt_forms();	
					
			}
			$("#sbmmgt").click(function(){
				var reload=false;
				var i=1;
				itemselected();						
				if($("#action").val()=='1'){
					validate_mgt_elem("#region",0);
					validate_mgt_elem("#province",0);
					validate_mgt_elem("#municipality",0);
					validate_mgt_elem("#brgy",0);
					if(validate_mgt()){
						if(hasunavailable() || $("#status").val()=="deployed"){
							alert('You selected an item that is already deployed!');
						}
							else{
								var chk_size=$(".item:checked").length;
								var c=1;
								$.each($(".item:checked"), function(){
									var elem=$(this).val();
									$.post("AJAX/deploy.php",
										{
										assetowned:elem,
										regid:$("#region").val(),
										provid:$("#province").val(),
										muni:$("#municipality").val(),
										brgy:$("#brgy").val(),
										remarks:$("#remarks").val()
										},function(data){
											//alert(data);
											if(c==chk_size){
												var plural="";
												var helping="is";
												var helping1="has been";
												if(c>1){
													plural="s";
													helping="are";
													helping1="have been";
												}
												Popup_modal_show(c+" item"+plural+" "+helping1+" successfully deployed in "+$("#brgy option:selected").text()+", "+$("#municipality option:selected").text()+", "+$("#province option:selected").text()+".",600);
												updatealllistandtables();
												clear_mgt_forms();
											}
											
											c++;
									});
								});
							}
						
					}
				}
				if($("#action").val()=='2'){
					
					validate_mgt_elem("#mgtoffice","0");
					if(validate_mgt()){
						if(hasunavailable() && $("#status").val()!="deployed"){
							alert('The selected item is either damaged or unavailable!');
						}
						else{
							var c=1;
							var chk_size=$(".item:checked").length;
							//alert(chk_size);
							$.each($(".item:checked"), function(){
							var elem=$(this).val();
								$.post("AJAX/transfer.php",
									{
									assetowned:elem,
									office:$("#office").val(),
									to:$("#mgtoffice").val(),
									remarks:$("#remarks").val()
									},function(data){
										//alert($("#mgtoffice").val()+ " "+$("#office").val())
									
										alert(data);
										
										 
											if(c==chk_size){
												
												var plural="";
												var helping="is";
												var helping1="has been";
												if(c>1){
													plural="s";
													helping="are";
													helping1="have been";
												}
												Popup_modal_show(c+" item"+plural+" "+helping1+" transfered to "+$("#mgtoffice option:selected").text()+"!",600);
												updatealllistandtables();
												//clear_mgt_forms();
									}
										  c++;
										  
										 
								});
							});
						
						
						}						
						
					}
				}	
			});

			$("#submitmgtclr").click(function(){
				clear_mgt_forms();
			});
			$("#sbdemove").click(function(){
				if(itemselected()){
					var chk_size=$(".item:checked").length;
					var msg="";
					var i=1;
					$.each($(".item:checked"), function(){
							var elem=$(this).val();
							$.post("AJAX/demobilize.php",
								{
								assetowned:elem
								},function(data){
									//console.log(data);
									if(i==chk_size){
												var plural="";
												var helping="is";
												var helping1="has been";
												if(i>1){
													plural="s";
													helping="are";
													helping1="have been";
												}
												Popup_modal_show(i+" item"+plural+" "+helping1+" demobilized!",600);
												updatealllistandtables();
												clear_mgt_forms();
									}											
										i++;
							});
						});
						
				}
			});
			$("#receive").click(function(){
				if(itemselected()){
					var chk_size=$(".item:checked").length;
					var l=1;
					var msg="";
					$.each($(".item:checked"), function(){
							var elem=$(this).val();
							$.post("AJAX/receive.php",
								{
								id:elem
								},function(data){
							
								
								if(l==chk_size){
												var plural="";
												var helping="is";
												var helping1="has been";
												if(l>1){
													plural="s";
													helping="are";
													helping1="have been";
												}
												updatealllistandtables();
												clear_mgt_forms();
												Popup_modal_show(l+" item"+plural+" "+helping1+" received!",600);
												
									}
									l++;
							});
						});
						
				}
			});
		});
	</script>		
