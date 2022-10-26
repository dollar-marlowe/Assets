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
		#search_disaster, .imgform-img  select, select{
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
			height:250px;;
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
			background-color:white;
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
			margin-top:5px;
		}

		
		.input_wrapper .label{
			width:200px;
			margin-top:0px;
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
		
		
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
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
			
			
		}
		@media (max-width:820px){
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select{
			font-size:95%;
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
		
	
		
</style>
<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
 <section id="imgform">
	<div class="pannel_con">
			<div class="pannel" onclick="slide('#hazard_form')" ><p  id="accounts"  class="lbl_wrap"><img src="images\hazard.png"> <u>A</u>ffected Areas</p></div>		
				<div class="imgform-container " id="hazard_form">
					<div class="imgform-img">
									<div class="inner-wrapper" style='height:300px;'>
										<div class="cols cols1" >
									
											<!-- <div class="input_wrapper" style="margin:auto">
											<input type="radio" name="gender" class="gender" value="male">Male<br>
											<input type="radio" name="gender" class="gender" value="female">Female<br>
											</div>   
											<div class="input_wrapper" style="margin:auto">
											<input type="submit" id="test" value="Submit" class="btn btn-primary">
											</div>   -->
											<br><br>
											<div class="input_wrapper" style="margin:auto">
											<input type="text" id="search_disaster" Placeholder="Search Disaster">
											<select id='search_category'>
													<?php 
													$str="SELECT distinct natureofdisaster, natureofdisaster FROM disaster";
													loadropdown($str,"natureofdisaster","natureofdisaster","Nature of Disaster");
													?>
											</select>
											</div>
											<div class="table_con">
												<table class="disasters">
													<?php
													$sql="select id,name,natureofdisaster, datestarted, file_upload  from disaster ";
													$classes=array("dst_all","dst_item");
													$headers=array("","Disaster","Nature..","Date","File");
													loadtable_radio($sql,$headers,true,false,$classes);
													?>
												</table>	
											</div>	
										</div>  

										<div class="cols cols2" >
										test
											<div class="input_wrapper" style="margin:auto">
												
											</div>   
									</div>  

						</div>
				</div>
			</div>
	</div>
	<div class="pannel_con">
			<div class="pannel" onclick="slide('#incident_log')"><p id="pass_reset"  class="lbl_wrap"><img src="images\logs.png"> <u>E</u>mergency Telecoms Cluster Activation</p></div>
					<div class="imgform-container " id="incident_log"> 						
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
		
		
		
		

$(document).ready(function(){
	href_each(".disasters td:nth-child(5)");
	remove_next_word(".disasters td:nth-child(4)");	
	$("#test").click(function(){
		alert($(".gender").val());
	});

	$("#search_category").change(function(){
		var str="select id,name,natureofdisaster, datestarted, file_upload \
		 from disaster where natureofdisaster= '"+$(this).val()+"'";
			 var headers="%Disaster%Nature..%Date%File";
			var classes ="dst_all%dst_item";
			global_load_table_radio(str,headers,true,false,classes,".disasters",".dst_item",".disasters td:nth-child(5)",".disasters td:nth-child(4)");
			
	});

	$("#search_disaster").keyup(function(){
		//alert("test");
			var str="select id,name,natureofdisaster, datestarted, \
			file_upload  from disaster where name like '%"+$(this).val()+"%'";
			var headers="%Disaster%Nature..%Date%File";
			var classes ="dst_all%dst_item";
			global_load_table_radio(str,headers,true,false,classes,".disasters",".dst_item",".disasters td:nth-child(5)",".disasters td:nth-child(4)");
									

	});
 });
    </script>