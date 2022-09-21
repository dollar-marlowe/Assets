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
		/*table*/
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
			width:100%;
			margin-left:5px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}
		table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}
		.pannel{
			width:90%;
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
		}
		.pannel h2{
			display:inline;
			padding-left:20px;
			padding-right:20px;
			font-size:18px;		
		
		}
		.pannel h2#accounts{
			border-right:solid 2px #ddd;
			
		}
		.pannel h2 img{
			width:30px;
			margin-bottom:-6px;
		}
		.header2{
			font-size: 2.7rem;
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
		}
		@media(max-width:400px){
			th:nth-child(5),td:nth-child(5){
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
		}

		@media(max-width:320px){
			th:nth-child(2),td:nth-child(2){
				display:none;
			}
		}
		@media(max-width:280px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
		}	
</style>

<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
 <div class="pannel"><h2>Disaster Data Entry</h2></div>	

        <div class="form-container">
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
                <input type='submit' Value='Save' class="btn btn-primary" style="color:white;font-weight:800;" id="submit_account">
                <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="clear">            
        </div>
      </div>
	 
    <div>
			
        <div class="imgform-img">
		</div>	
	</div>