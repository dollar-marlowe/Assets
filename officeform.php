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
			width:90%;
			margin:auto;
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
        </div>

            <div class="form-container">
            <h2 id="header">Office Data Entry</h2>
                
                <label for="type">Office Type:</label>
						<select id="category" name='category' onchange="revertcss('#category')">
						<option value=0>Select from Options</option>
						<option value="Regional Office">Regional Office</option>
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
                    <input type="submit" value="Submit" name="submit" id="submitoffice" class="btn btn-primary" style='color:white;font-weight: bold'/>
              
            </div>
        </div>
</section>  
<script>
	var empty=0;
	var gc,go,gr,gp,gm,gb;
			gc=go=gr=gp=gm=gb=true;
	function validate(){
		if((!go || !gc || !gr || !gp || !gm || !gb) && empty<1){
				$("#header").after("<p id='msg' style='color:red'>Please fill up all required fields!</p>");
				empty++;
				return false;
			}
			if(go && gc && gr && gp && gm && gb){
				$("p").remove("#msg");
				empty=0;
				return true;
			}
			$("#msg1").remove();
	}
	$(document).ready(function(){
		
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
						brgy:$("#barangay").val()

					},
					function(data){
						$("#header").after(data);
						$("#province, #municipality, #barangay").html("<option value=0>Select from Region</option>").attr("disabled","disabled").css("border-bottom-color","red");
						$("#oname").val("");
					}
				
				);
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
	function FetchRegion(id,str,tofill,c1,c2,frm){
		if(id!=0 || id==""){
      $("#region, #province, #municipality, #barangay").css("border-bottom-color","#ddd");
				if(frm==""){
          $("#province").css("border-bottom-color","red");
					$("#municipality, #barangay").html("<option value=0>Select from Province</option>").attr("disabled","disabled").css("border-bottom-color","red");
					

				}
				if(frm=="Region"){
          $("#municipality").css("border-bottom-color","red");
					$("#barangay").html("<option value=0>Select from Municipality</option>").attr("disabled","disabled").css("border-bottom-color","red");

				}
        if(frm=="Municipality"){
          $("#barangay").css("border-bottom-color","red");

        }
        
				$.post("AJAX/dropdown.php",
				{
				
					sql:str+""+id+" order by name",
					col1:c1,
					col2:c2,
					from:frm
				},
				function(data){
					$(tofill).removeAttr("disabled");
					$(tofill).html(data);
				}
			);

		}
		else{
			if(frm==""){
        $("#region").css("border-bottom-color","red");
					$("#province, #municipality, #barangay").html("<option value=0>Select from Region</option>").attr("disabled","disabled").css("border-bottom-color","red");
					

				}
				if(frm=="Region"){
				  $("#province").css("border-bottom-color","red");
					$("#municipality, #barangay").html("<option value=0>Select from Province</option>").attr("disabled","disabled").css("border-bottom-color","red");

				}

        if(frm=="Municipality"){
				  $("#municipality").css("border-bottom-color","red");
        $(" #barangay").html("<option value=0>Select from Municipality</option>").attr("disabled","disabled").css("border-bottom-color","red");

      }

        
		}
			
		 
			
		
		
	}
	
</script>
