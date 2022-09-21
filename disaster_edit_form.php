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
		tr:nth-child(even){
			background-color:	rgb(128,128,128);
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
			margin-top:20px;
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
			.imgform-img{
				padding-top:40px;
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
		

</style>
	
	<section id="imgform">
    <div class="imgform-container ">
		
		<!-- this section if for the summary--> 
	  	<div class="imgform-img" >
				
		  <section class='ac-container' >
				<div id='assets_summary'>
					<input id='ac-6' name='accordion-6' type='checkbox' class="acc-head">
					<label for='ac-6' class='acc-label' style='padding-bottom:20px;'>Disasters Encountered Summary</label>
					<article class='sizeauto' >							
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
				<div id='inventory_table' class="acc-head">
					<input id='ac-7' name='accordion-7' type='checkbox' >
					<label for='ac-7' class='acc-label'>Disasters Encountered Table</label>
					<article class='sizeauto' >							
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
											$str="select `assetowner`.`id` as id,`assets`.`qrcode` as `assetid`, 
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
				
			</section>
				
				
				<br>
					<!-- this ection if for table--> 
				
				<br>
        </div>
		<!-- this section is for the form transfer and deploy--> 

   		<div class="form-container">
			<p class='head' id="assetmgt">Disaster's Information</p>
            <label for="disaster">Name</label>
        <input type="text" placeholder="Disaster's Name*" id="aname" />
        
        
<label for="naturedisaster">Nature of Disaster</label>
        <select id="Nature of Disaster">
                <option value="Select nature of disaster">Select Nature of Disaster</option>
                <option value="Typhoon">Typhoon</option>
                <option value="Earthquake">Earthquake</option>
                <option value="Tsunami">Tsunami</option>
                <option value="Volcanic Eruption">Earthquake</option>
                <option value="Landslide">Earthquake</option>
                <option value="Flooding">Flooding</option>
                <option value="Man-Made Disaster">Man-Made Disaster</option>
            </select>

<label for="category">Category</label>

        <select id="Category for Typhoon">
                <option value="TY">Typhoon (TY)</option>
                <option value="STS">Severe tropical storm (STS)</option>
                <option	value="TS">Tropical storm (TS)</option>
                <option value="TD">Tropical depression (TD)</option>
        </select> 
<label for="description">Description</label>
        <textarea
                cols='25'
                rows='2'
                placeholder='Description/Remarks'
                id='remarks1'
                class=' pp'
        ></textarea>

<label for="date started ">Date Started:</label>
         <!--<span class="error">*</span><br> -->
                <input type="date" name="admission_date" id="admission date" class="form-control">
                <!--<span class="error"><?php echo $admission_dateErr;?></span>		-->
<label for="date started ">Date Ended:</label>
         <!--<span class="error">*</span><br> -->
                <input type="date" name="admission_date" id="admission date" class="form-control">
                <!--<span class="error"><?php echo $admission_dateErr;?></span>		-->
        <label for="status">Status</label>

        <select id="Status">
                <option value="green">Green Alert (ALPHA)</option>
                <option value="yellow"> Yellow Alert (BRAVO)</option>
                <option	value="red"> Red Alert (CHARLIE)</option>
                <option	value="Blue"> Blue Alert (DELTA)</option>
        </select> 
        <!--sample template lang ng category once nature of disaster value: Earthquake is selected
            <select id="Category for Earthquake">
                <option value="TE">Tectonic Earthquake</option>
                <option value="VE">Volcanic Earthquake</option>
        </select> 
        -->
        <!--
        <label for="auth_level" id="lbllevel">User Access Level</label>
            <select id="auth_level">
                <option value="1">Regular User</option>
                <option value="2">Technical Operator</option>
                <option value="3">Admin</option>	
            </select>	
        </lable>	

        <label for="office">Office Designation: *</label>
        <select id="office" name="off_designation" >
                <?php
                $str="SELECT * FROM office";
                loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                ?>
        </select>      
        -->	              
        <input type='submit' Value='Update' class="btn btn-primary" style="color:white;font-weight:800;" id="submit_account">
        <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear">            
</div>
</div>

<div>
