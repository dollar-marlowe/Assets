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
			margin-left:10px;
			margin-bottom:10px;
			display:inline-block;
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img{
			width:100%;
			padding:10px;
			border: solid 1px #c6c6c6;
		}
		.imgform-img img{
			height:150px;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			width:90%;
			margin:auto;
		}
		.table_container{
			
			display:block;
			margin:auto;
			
			margin-top:10px;

		}
		.offices_table{
			width:90%;
			margin:auto;
		}
		table.offices_table tr th{
			text-transform:uppercase;
			font-weight:600;
			background-color:rgb(45, 44, 46);
			color:white;	
		}
		
		table.offices_table tr:nth-child(odd){
			background-color:rgb(232,232,232);
			color:black;
		}
		table.offices_table td, th{
			text-align:left;
			padding-left:10px;
			text-transform:capitalize;			
		}
		table.offices_table{
			border-collapse: collapse;
			width:98%;
			margin-left:10px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table.offices_table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}
		table.offices_table td:nth-child(4),
		table.offices_table td:nth-child(6),
		table.offices_table td:nth-child(8),
		table.offices_table td:nth-child(10),
		table.offices_table th:nth-child(4),
		table.offices_table th:nth-child(6),
		table.offices_table th:nth-child(8),
		table.offices_table th:nth-child(10)
		{
			display:none;
		}
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.imgform-img{
				padding-top:40px;
			}
			
		}
		@media (max-width:820px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
		}
		@media (max-width:600px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			
		}
		
		
		
</style>

<section id="imgform">
      <div class="imgform-container container">
        <div class="imgform-img">
          <img src="images/office.jpg" alt="" />
		  <div class="table_container">
				<table class="offices_table">
			</table>
			</div>
        </div>

            <div class="form-container">
            <h2 id="header">Office Data Entry</h2>
                
                <label for="type">Office Type:</label>
						<select id="category" name='category' onchange="revertcss('#category')">
						<option value=0>Select from Options</option>
						<option value="Regional Office">Regional Office</option>
						<option value="Provincial Office">Provincial Office</option>
						<option value="Satellite Office">Satellite Office</option>
						<option value="Main Office">Main Office</option>
											
						</select>

					<input type='text' placeholder='Office Name' name='oname' id='oname' />
					
					
					
						<label for="province">Region:</label>
						<select id="region" name="region" onchange="FetchRegion(this.value,'SELECT * FROM province where reg_id=','#province','id','name','')">
							<?php
							
							$str="SELECT id,name FROM region";
							loadropdown($str,"id","name","Region");//function for loading values into the dropdown accepts sql command and name of columns 

							?>
						</select>
						
						<label for="province" >Province:</label>
						<select id="province" disabled name='province'
						onchange="FetchRegion(this.value,'SELECT * FROM municipality where province_id=','#municipality','id','name','Region')"
						>
						<option value=0>Select from Region</option>
						</select>
						
						<label for="municipality" disabled >City/Municipality:</label>
						<select id="municipality" disabled name='municipality' 
						onchange="FetchRegion(this.value,'SELECT * FROM barangay where muni_id=','#barangay','id','name','Municipality')"
						>
						<option value=0>Select from Province</option>
						</select>
						
						<label for="barangay">Barangay:</label>
						<select id="barangay" disabled name='barangay' onchange="revertcss('#barangay')">
						<option value=0>Select from Municipality</option>
						</select>
						<input type='text' placeholder='Latitude' name='lat' id='lat' />
						<input type='text' placeholder='Longitude' name='long' id='long' />
                    <input type="submit" value="ADD NEW" name="submit" id="submitoffice" class="btn btn-primary" style='color:white;font-weight: bold'/>
					<input type="submit" value="Clear" name="submit" id="clear_office" class="btn btn-primary" style='color:white;font-weight: bold'/>
            </div>
        </div>
</section>  
<script>
	var empty=0;
	var gc,go,gr,gp,gm,gb,glat,glong;
			gc=go=gr=gp=gm=gb=glat=glong=true;
	function validate(){
		if((!go || !gc || !gr || !gp || !gm || !gb || !glat || !glong) && empty<1){
				$("#header").after("<p id='msg' style='color:red'>Please fill up all required fields!</p>");
				empty++;
				return false;
			}
			if(go && gc && gr && gp && gm && gb && glat && glong){
				$("p").remove("#msg");
				empty=0;
				return true;
			}
			$("#msg1").remove();
	}
	$(document).ready(function(){
		function load_offices(){
			var headers="Edit%Office Name%Category%region_id%Region%province_id%Province%muni_id%Municipality%brgy_id%Barangay%lat%long"
			var table_cols="id, office_name, category, region_id, region, province_id, province, muni_id, municipality, brgy_id, barangay, lat, `long`";
			var table_source=" offices_latlong order by region_id";

			global_load_table_paginate(table_cols,headers,1,1,"all_offices%office_item",".offices_table","","","",table_source,"id",0);
						
		}
		load_offices();
		$("#submitoffice").click(function(){
			

			if($("#category").val()==0){
				$("#category").css("border-bottom-color","red");
				gc=false;
			}
			else{
				gc=true;
			}
			

			var oname=$("#oname").val();
			if(oname==""){
				$("#oname").css("border-bottom-color","red");
				
				go=false;
			}
			else{
				go=true;
			}
			
			if($("#lat").val()==""){
				$("#lat").css("border-bottom-color","red");
				
				glat=false;
			}
			else{
				glat=true;
			}
			if($("#long").val()==""){
				$("#long").css("border-bottom-color","red");
				
				glong=false;
			}
			else{
				glong=true;
			}

			if($("#region").val()==0){
				$("#region").css("border-bottom-color","red");
				gr=false;
				
			}
			else{
				gr=true;
			}
			if($("#province").val()==0){
				$("#province").css("border-bottom-color","red");
				gp=false;
				
			}
			else{
				gp=true;
			}
			if($("#municipality").val()==0){
				$("#municipality").css("border-bottom-color","red");
				gm=false;
				
			}
			else{
				gm=true;
			}
			if($("#barangay").val()==0){
				$("#barangay").css("border-bottom-color","red");
				gb=false;
			
			}
			else{
				gb=true;
			}
			if(validate()){
				$.post("AJAX/insertoffice.php",
					{
						name:$("#oname").val(),
						cat:$("#category").val(),
						reg:$("#region").val(),
						prov:$("#province").val(),
						muni:$("#municipality").val(),
						brgy:$("#barangay").val(),
						lat:$("#lat").val(),
						long:$("#long").val()

					},
					function(data){
						load_offices();
						$("#clear_office").click();
						$("#header").after(data);
						
					}
				
				);
			}
			
		});
		$(document).on("click",".office_item",function(){
			if($(".office_item").is(":checked")){
				$("#submitoffice").val("SAVE EDITS");
			}else{
				$("#submitoffice").val("ADD NEW");
			}
			var index = $(".office_item").index(this);
			if($(".office_item").eq(index).is(":checked")){
				$(".office_item").prop("checked",false);
				$(".office_item").eq(index).prop("checked",true);
						
			var o_name=$(".office_item").eq(index).parent().parent().find("td:nth-child(2)").text();
			var cat=$(".office_item").eq(index).parent().parent().find("td:nth-child(3)").text();
			var reg_id=$(".office_item").eq(index).parent().parent().find("td:nth-child(4)").text();
			var prov_id=$(".office_item").eq(index).parent().parent().find("td:nth-child(6)").text();
			var muni_id=$(".office_item").eq(index).parent().parent().find("td:nth-child(8)").text();
			var brgy_id=$(".office_item").eq(index).parent().parent().find("td:nth-child(10)").text();
			var lat=$(".office_item").eq(index).parent().parent().find("td:nth-child(12)").text();
			var long=$(".office_item").eq(index).parent().parent().find("td:nth-child(13)").text();
			//alert(prov_id);
			$("#lat").val(lat);
			$("#long").val(long);
			$("#oname").val(o_name);
			$("#category").val(cat);
			$("#region").val(reg_id);
			Fetch_data_select(reg_id,'SELECT * FROM province where reg_id=','#province','id','name','',prov_id);
			Fetch_data_select(prov_id,'SELECT * FROM municipality where province_id=','#municipality','id','name','Region',muni_id);
			Fetch_data_select(muni_id,'SELECT * FROM barangay where muni_id=','#barangay','id','name','Municipality',brgy_id);
			}
			else{
				$("#msg, #msg1").remove();
			$("#province, #municipality, #barangay").html("<option value=0>Select from Region</option>").attr("disabled","disabled").css("border-bottom-color","#ddd");
			$("#oname, #lat, #long").val("").css("border-bottom-color","#ddd");
			$("#category, #region").val("0").css("border-bottom-color","#ddd");
			}
			
		});
		$("#clear_office").click(function(){
			$("#msg, #msg1").remove();
			$("#province, #municipality, #barangay").html("<option value=0>Select from Region</option>").attr("disabled","disabled").css("border-bottom-color","#ddd");
			$("#oname, #lat, #long").val("").css("border-bottom-color","#ddd");
			$("#category, #region").val("0").css("border-bottom-color","#ddd");
			$(".office_item ").prop("checked",false);
		});
		
		$("#lat").change(function(){
			if($("#lat").val()==""){
				$("#lat").css("border-bottom-color","red");
				
				glat=false;
			}
			else{
				$("#lat").css("border-bottom-color","#ddd");
				glat=true;
			}
			

		});
		$("#long").change(function(){
			if($("#long").val()==""){
				$("#long").css("border-bottom-color","red");
				
				glong=false;
			}
			else{
				$("#long").css("border-bottom-color","#ddd");
				glong=true;
			}
			

		});
		$("#oname").change(function(){
			var oname=$("#oname").val();
			if(oname==""){
				$("#oname").css("border-bottom-color","red");
				
				go=false;
			}
			else{
				$("#oname").css("border-bottom-color","#ddd");
				go=true;
			}
			
			validate();
		});
		$("#category,#region,#province,#municipality,#barangay").change(function(){
			if($("#category").val()!=0){
				gc=true;
				
			}
			else{
				gc=false;
			}
			if($("#region").val()!=0){
				gr=true;
				
			}
			else{
				gr=false;
			}
			if($("#province").val()!=0){
				gp=true;
			
			}
			else{
				gp=false;
			}
			if($("#municipality").val()!=0){
				gm=true;
				
			}
			else{
				gm=false;
			}
			if($("#barangay").val()!=0){
				gb=true;
				
			}
			else{
				gb=false;
			}
			validate();

		});
	});

	function revertcss(elem){
    //alert($(elem).val()+" "+elem);
    if($(elem).val()!=0){
      $(elem).css("border-bottom-color","#ddd");
    }
    if($(elem).val()==0){
      $(elem).css("border-bottom-color","red");
      
    }
   
  }
	
	
</script>
