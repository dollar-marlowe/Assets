<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<style>
	
		.container{
			width:fit-content;
			margin:auto;
		}
		.sum{
			width:fit-content;
			display:inline-flex;
			margin:auto;
			margin-top:0px;
			margin-left:50px;
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
			margin-left:10px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table tr td{
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
			margin-left:12px;
			margin-top:10px;
			display:inline-block;
		}
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			
			table{
				width:fit-content;
				font-size:12px;
				margin:auto;
			}
		}
	
		@media (max-width:820px){
			table{
				width:fit-content;
				font-size:13px;
			}
			th:nth-child(6), td:nth-child(6){
				display:none;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			p.head{
				font-size:23px;
			}
			
		}
		@media (max-width:700px){
			
			table{
				width:fit-content;
				font-size:9px;
			}
			th:nth-child(5), td:nth-child(5),
				th:nth-child(6), td:nth-child(6){
				display:none;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			p.head{
				font-size:23px;
			}
			.sum{
				display:block;
			}
		}
		
		@media (max-width:452px){
			.sum{
				display:block;
			}
			table{
				width:fit-content;
			}
			
			th:nth-child(2), td:nth-child(2), th:nth-child(5), td:nth-child(5),
				th:nth-child(6), td:nth-child(6)				{
				display:none;
			}
		}
		@media (max-width:390px){
			table{
				width:fit-content;
				font-size:10px;	
			}
			
		}
			@media (max-width:358px){
				table{
					width:fit-content;
					font-size:8px;	
				}
				
			th:nth-child(2), td:nth-child(2), th:nth-child(5), td:nth-child(5),
				th:nth-child(6), td:nth-child(6),
				th:nth-child(7), td:nth-child(7){
				display:none;
			}
			th:nth-child(2), td:nth-child(2){
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
		
		

</style>
	
	<section id="imgform">
    <div class="imgform-container ">
		
		<!-- this section if for the summary--> 
	  	<div class="imgform-img" >
		<div class="new_pannel">
			<label class="label_new" onclick="slide('#acc1')">Assets Summary</label>
			<article class="new_pannel_body" id="acc1">
					<p class='head' style="margin-bottom:10px;margin-top:10px;"></p>
						
						<div class="container" >
								<?php 
								  //echo $_SESSION["status"];
									$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='available' group by category";
									$cols=  array("name","category","quantity");
								
									echo"<div class='sum' style='background-color:white;color:black'>";
										echo"<ul id='listavail'>";
										loadlist($str,$cols,"availhead","Available");	
										echo"</ul>";
									echo"</div>";
									echo"<div class=' sum'>";
									$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='deployed' group by category";
										echo"<ul id='listdep'>";
										loadlist($str,$cols,"dephead","Deployed");	
										echo"</ul>";
									echo"</div>";
									echo"<div class=' sum'>";
									$str="select name, category, count(*) as quantity, status from owned_assets where office_id=".$_SESSION["officeid"]."  and status='To Receive' group by category";
										echo"<ul id='listreceive'>";
										loadlist($str,$cols,"toreceive","To Receive");	
										echo"</ul>";
									echo"</div>";
								?>
							</div >
							<hr class="divide2" style="margin-top:5px;margin-bottom:10px;">
						<h3 id='total' style='width:100%;'>
						<?php
								echo total("select count(id) as id from assetowner where office_id=".$_SESSION["officeid"],"id");
						?>
						</h3>
						<hr class="divide2" style="margin-top:2px">
			</article>
		</div>
		<div class="new_pannel">
			<label class="label_new" onclick="slide('#acc2')">Inventory Table</label>
			<article class="new_pannel_body" id="acc2">
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
								<input   id="sbdemove" type='submit' Value='Demobilize' class='sub-bttn' >
								<input   id="receive" type='submit' Value='Receive' class='sub-bttn'>
								
			</article>
		</div>
		  
				
				
				<br>
					<!-- this ection if for table--> 
				
				<br>
        </div>
		<!-- this section is for the form transfer and deploy--> 
		<div class="form-container">
			<p class='head' id="assetmgt">Deploy Assets</p>
			<label for="action">Action</label>
						<select id="action" name="action" >
							<option value='1'>Deploy</option>
							<option value='2'>Transfer Ownership</option>
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
						placeholder="Descreption/Remarks"
						id="remarks">
					</textarea>
					<input   id="sbmmgt" type='submit' Value='Submit' class="btn btn-primary " style="color:white;font-weight:800;" >
					<input   id="submitmgtclr" type='submit' Value='Clear' class="btn btn-primary " style="color:white;font-weight:800;" >	
        </div>
      </div>
    </section>
	<script>
		$(document).ready(function(){
			$('#acc2').slideUp("slow");
			$("#status").val("available");
			$(".transfer").css("display","none");
			$("#sbdemove, #receive").css("display","none");
			var isokmgt={
				"items":false,
				"region":false
			};
			var lbl=0;
			var tblbl=0;
			//defined functions 
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
				var headers=" %ASSET NUMBER%SERIAL%ITEM NAME%CATEGORY%BRAND%DATE AQUIRED%STATUS";
				var str="select `assetowner`.`id` as id,`assets`.`assetid` as  `assetid`, \
				`assets`.`serial` as `serial`, assets.name as name, assets.category as category,\
				 assets.brand as brand, assetowner.date_aquired as `date`, \
				 `assets`.`status` as `status` from assets, assetowner \
				 where assetowner.assets_id=assets.id and `assets`.`status`='Available' and assetowner.office_id ="+$("#office").val();				
				$("#category").val(0);
				$("#category").attr("disabled","disabled");
				$("#status").val("available");
				loadtable(str,headers,1,0);
				
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
			//events for table filter
			$("#status, #category").change(function(){
				var status =$("#status").val();
				var headers=" %ASSET NUMBER%SERIAL%ITEM NAME%CATEGORY%BRAND%DATE AQUIRED%STATUS";	
				var str="select `assetowner`.`id` as id,`assets`.`assetid` as `assetid`, `assets`.`serial` as `serial`, assets.name as name, assets.category as category, assets.brand as brand, assetowner.date_aquired as `date`, `assets`.`status` as `status` from assets, assetowner where assetowner.assets_id=assets.id and assetowner.office_id =";
				if(status=="all"){
					$("#category").attr("disabled","disabled");
					$("#category").val(0);
					str=str+$("#office").val()+" order by assets.category";
				}	
				else{
					
					$("#category").removeAttr("disabled");
					if($("#category").val()==0){
						str=str+$("#office").val()+" and assets.status='"+status+"' order by assets.category";
					}
					else{
						str=str+$("#office").val()+" and assets.status='"+status+"' and assets.category='"+$("#category").val()+"'";
					}
				}
				if(status=="deployed"){
					//alert($("#office").val());
						headers=" %Asset id%Assets%Category%Province%Municipality%Brgy.%Date deployed%Deployment Status";	
						str="SELECT deployment.asset_owner_id as id, assets.assetid as aid, assets.name as name,  assets.category as `category`, \
						 province.name as province, municipality.name as muni, barangay.name as brgy,deployment.datemobilized\
						  as `datedep`, deployment.deployment_stat as depstat FROM deployment,region,province,municipality,\
						  barangay,assetowner,assets where deployment.reg_id=region.id and \
						  deployment.prov_id=province.id and deployment.muni_id=municipality.id \
						  and deployment.brgy_id=barangay.id and assetowner.id=deployment.asset_owner_id \
						  and assets.id=assetowner.assets_id and deployment.deployment_stat='Active'  \
						  and assetowner.office_id="+$("#office").val()+" order by `assets`.`category`";
						$("#sbdemove").css("display","inline-block");
					}
					else{
						$("#sbdemove").css("display","none");
					}
				if(status=="To Receive"){
					$("#receive").css("display","block");
				}
				else{
					$("#receive").css("display","none");
				}
				loadtable(str,headers,1,0);				
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
									
										//alert("called");
										
										 
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
