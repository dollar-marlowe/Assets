<style>

		#type{
		font-weight:500;
		font-size:17px;	
		font-family: "Poppins", sans-serif;
		}
		#single{
			font-weight:700;
		}
	
		.imgform-img p.iframhead{
			margin-left:10px;
			width:100%;
			text-align:center;
			margin-bottom:10px;
		
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img,.imgform-img1{
			width:100%;
		padding:10px;
      border:1px solid #c6c6c6;
    background-color:#eee;
		}
		.pannel_con{
			background-color:#fff;
		}
		.iframes{
			background-color:#fff;
			margin-bottom:15px;
		}
		.iframes p:hover{
			text-decoration:underline;
		}
		
		
    .imgform-img iframe{
      height:600px;
	  display:inline-block;
    }
		.imgform-img img{
			width:90%;
			margin:auto;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			width:100%;
			margin:auto;
      border:none;
		}
		.sidebar{
			width:50%;
		padding:10px;
     
		display:inline-block;
		margin:auto;
		margin-top:0px;
		}
		.side{
			width:100%;
		padding:10px;
     
		display:inline-block;
		margin:auto;
		margin-top:0px;
			}
		
			

			.marginleft{
				margin-top:10px;
			}
			.radiusnone{
				border-radius:0px;
			}
			.pannel{
				
				border-top:solid 1px #ddd;

			}
			.sidehead{
				width:100%;
				text-align:center;
				
			}
			#hide_show {
				background:url('images/ribbon_shadow7.png')   no-repeat;
    
    background-position: center;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
    padding: .5em;
  width:60px;
  height:60px;
  text-align:center;
  
  color:white;

position:absolute;
	  transform: rotate(-90deg);
	  
	  margin:auto;
	  margin-top:25px;
	  margin-left:-40px;
	  transition:  0.4s;
	  

}
#hide_show:hover{
	color:#4dff4d;
	margin-left:-9px;
}
div.item{
	display:inline-block;
	width:80px;
	padding-bottom:10px;
	padding-top:10px;
	margin:auto;
	margin-top:5px;
	border: solid 1px #ddd;
	text-align:center;
	transition: transform .2s;
}
div.item:hover{
	transform: scale(1.1);
}
div.item  p{
	display:block;
	font-size:10px;
	width:fit-content;
	margin:auto;
	margin-top:0px;
}
div.item p img{
	width:30px;
	height:30px;
}
.pannel{
	height:200px;
	margin:auto;
	width:auto;
	padding:20px;
	
}
.center{
	margin:auto;
}
.item_container{
	margin:auto;
	width:fit-content;
	
}
			.p_row{
				display:block;
				
				width:fit-content;
			
				margin:auto;
				margin-bottom:10px;
				
			}

			.p_row > *{
				display:inline;
				
				width:fit-content;
				font-size:15px;
			}
			.lbls{
				margin-right:15px;
				
			}
			
			
			.welcome{
				width:100%;
				text-align:center;
			}
			.user_href{
				text-decoration:none;
				color:black;
			}
			.user_href:hover{
				
				color:#3C5B76;
			}
			.sum_box{
				
				
				display:inline-block;
				width:47%;
			
				height:45%;
				
				margin:4px;
			}
			.sum_box:nth-of-type(2):hover , .sum_box:nth-of-type(4):hover{
				
				background-color:#A0B2C4;
				color:#0000;
			}
			.sum_box:nth-of-type(1):hover, .sum_box:nth-of-type(3):hover{
				color:#0000;
				background-color:#D9E0E7;
			}
			.sum_box p{
				margin:0;
				width:100%;
				text-align:center;
				
			}
			.sum_box p{
				color:white;
				font-weight: bold;
			}
			.sum_box p:nth-child(1){
				margin-top:15px;
				font-size:2.5vh;
				
				font-family: Arial;
				
			}
			.sum_box p:nth-child(2){
				margin-top:5px;
				font-size:1.4vh;
				
				font-family: Arial;
			}
			.sum_box:nth-of-type(2), .sum_box:nth-of-type(4){
				background-color:#627F9D;
			}
			.sum_box:nth-of-type(1),.sum_box:nth-of-type(3){
				background-color:#8199B1;
			}
			.sidehead{
				background-color:#fff;
				border-bottom:solid 0.8px #ddd;
			}
			.pannel{
				background-color:#ffff;
			}
		
#user{
	margin:auto;
	text-align:center;
}
			
.modal {
  display: none;
      }
@media (max-width:1583px){
			.side{
				display:inline-flex;
			}
			.imgform-container{
				display:block;
				
			}
			.block{
				display:block;
			}
			
			.sidebar{
				width:100%;
				display:inline-flex;
				
				
			}
			.marginleft{
				margin-left:10px;
			}
			
			.top{
				margin-top:10px;
			}
			.block{
				display:block;
			}
			.imgform-img{
				margin-right:0PX;
			}
		}
		@media (max-width:1000px){
			.sum_box{
				
				width:44%;
				margin:4px;
			}
		}
		@media (max-width:820px){
			

			.imgform-img p.iframhead, .imgform-img  select, input[type=text]{
			font-size:95%;
					}
			.imgform-img iframe{
			height:400;
			}
			.sidebar{
				display:block;
			}
			
			.marginleft{
				margin-left:0px;
				
			}
		
		}
		@media (max-width:600px){
			
			.imgform-img p.iframhead, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
		
		}
		
		
		
</style>

 <section id="imgform"><div class="imgform-container ">

      <div class="imgform-container ">
	  <p id="hide_show" class="top">Hide</p>
	  	<div class="sidebar">
		  		<div class="imgform-img radiusnone top  pannel_con">
					<h3  onclick="test('#panel3','pannel')" class="sidehead">
					<?php 
					$offc_name=$_SESSION["officename"];
					$words_size=strlen($offc_name); 
					$start=strpos($offc_name,"(");
					$end=strpos($offc_name,")");
					$go= ($start!=null && $end!=null)? true:false;
					$dict=substr($offc_name,0,$start-1);
					$abreviate=substr($offc_name,$start+1,($words_size-$start-1));
					$abr_size=strlen($abreviate);
					$abreviate=(str_word_count($abreviate)>2)? abreviate_except($abreviate, $abr_size,"IN AND OF (CAR)"):"";
					$final_name= (($words_size>30)&& $go) ? $dict." ".$abreviate:$offc_name;
					echo $final_name;
					?>
					</h3>
						<div id="panel3" class="pannel"><p class="welcome">Welcome back</p>
						<h4 id="user"><a class="user_href" href="userprofile.php"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"]."!";  ?></a></h4>
						</div>
				</div>

				<div class="imgform-img radiusnone marginleft pannel_con">
					<h3  onclick="test('#panel2','pannel')" class="sidehead">Assets Overview</h3>
						<div id="panel2" class="pannel" style="padding:5px;margin:auto;">
							<?php echo "<input id='office_en' type='hidden' value='".encrypt($_SESSION["officeid"])."'>";?>
							<div class="sum_box to_assetsmg">
								
								<p id="total_avail">####</p>
								<p  >Available</p>
							</div>
							<div class="sum_box to_map" style="float:left">
								
								<p id="total_deloyed" >#### </p>
								<p  >Deployed</p>
								
							</div>
							<div class="sum_box to_assetsmg" style="float:left">
								
								<p id="total_receive">#### </p>
								<p  >To be Received</p>
								
							</div>
							<div class="sum_box to_assetsmg_total" >
								
								<p id="total_all">#### </p>
								<p>Total</p>
							
							</div>
							
						
						</div>
				</div>

				<div class="imgform-img radiusnone  marginleft pannel_con" >
					<h3 onclick="test('#panel1','pannel')" class="sidehead">Tracker Panels</h3>
					<div id="panel1" class="pannel">
							<div class="item_container">
								<div class="item" id="btnwindy" onclick="hide_show('#windypannel')">
									<p ><img src="images/windy.png" ></p>
									<p><u>W</u>indy Panel></p>
								</div>
								<div class="item" id="btnphil" onclick="hide_show('#georiskpannel')">
									<p><img src="images/philvolcs.png"></p>
									<p><u>G</u>eorisk Panel</p>
								</div>

								<div class="item" id="btpagasa" onclick="hide_show('#floodpannel')">
									<p><img src="images/pagasa.png"></p>
									<p>F<u>l</u>ood Panel</p>
								
								</div>
								
								<div class="item" id="btncovid" onclick="hide_show('#covidpannel')">
									<p><img src="images/covid.png"></p>
									<p><u>C</u>ovid Panel</p>
								</div>
							</div>	
							
					</div>		
						
					
				</div>
				
				
				
			</div>

      <div class="imgform-img " id="group1" style='border:none;'>
	  
              <div class="imgform-img block iframes" id="windypannel">
                <p onclick="test('#windy','iframe')" class="iframhead">WINDY.COM LIVE MONITORING</p>
			
                <iframe style="border:none;width:100%; " src="https://embed.windy.com/embed2.html?lat=9.709&lon=123.750&
                  detailLat=9.709&detailLon=123.750&width=650&height=450&zoom=5&level=surface&overlay=rain&product
                  =ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metric
                  Wind=default&metricTemp=default&radarRange=-1" id="windy"></iframe>
                
              </iframe>

              </div>

              <div class="imgform-img block iframes" id="floodpannel">
              <p onclick="test('#flood','iframe')"  class="iframhead">DOST FLOOD DAM INFROMATION LIVE MONITORING</p>
			  
                <iframe id="flood"style="border:none;width:100%; " src="https://bagong.pagasa.dost.gov.ph/flood#dam-information" ></iframe>
                
              </iframe>

              </div>
        </div>

        <div class="imgform-img" id="group2"style='border:none;'>
              <div class="imgform-img iframes" id="georiskpannel">
              <p onclick="test('#georisk','iframe')"  class="iframhead">PHIVOLCS GEORISK LIVE MONITORING</p>
                <iframe id="georisk" style="border:none;width:100%; " src="https://www.pagasa.dost.gov.ph" ></iframe>
                
              </iframe>

              </div>
              <div class="imgform-img iframes" id="covidpannel">
              <p onclick="test('#covid','iframe')"  class="iframhead">DOH-COVID19 LIVE MONITORING</p>
                <iframe id="covid"style="border:none;width:100%;"
                src="https://public.tableau.com/views/COVID-19CasesandDeathsinthePhilippines_15866705872710/Home?
                :embed=y&:embed_code_version=3&:loadOrderID=0&:display_count=y&publish=yes&:origin=viz_share_link" ></iframe>
                
              </iframe>

              </div>
        </div>

       		
      </div>
    </section>

    <script>
		function test(target,from){
			var l=$(window).width();
			if(from=="pannel"){
				if(l<=1583 && l>820){
			
					$(".pannel").slideToggle("slow");
				}else{
					$(target).slideToggle("slow");
				}
			}
			if(from=="iframe"){
				$(target).slideToggle("slow");
			}
			
		}
		function hide_show(id){
			//alert($(id).is(":hidden"));
				if(id=="#windypannel" || id=="#floodpannel"){
					if($("#group1").is(":hidden")){
						$("#group1").show(400);
					}
				}

				if(id=="#covidpannel" || id=="#georiskpannel"){
					if($("#group2").is(":hidden")){
						$("#group2").show(400);
					}
				}

					$(id).toggle(400, function(){
						
						if(id=="#windypannel" || id=="#floodpannel"){
							//alert($("#floodpannel").is(":hidden")+" "+$("#windypannel").is(":hidden"));
							if($("#floodpannel").is(":hidden") ==true && 	$("#windypannel").is(":hidden")==true){
							$("#group1").hide(400);
							//alert("hide");
							}
							
						}

						if(id=="#covidpannel" || id=="#georiskpannel"){
							//alert($("#floodpannel").is(":hidden")+" "+$("#windypannel").is(":hidden"));
							if($("#covidpannel").is(":hidden") ==true && 	$("#georiskpannel").is(":hidden")==true){
							$("#group2").hide(400);
							//alert("hide");
							}
							
						}
						//un-border windy button if pannel is hidden
						if(	$("#windypannel").is(":hidden")){
							$("#btnwindy").css("border","none");
						}
						else{
							$("#btnwindy").css("border","solid 1px #ddd");
						}
						//un-border flood dam button if pannel is hidden

						if(	$("#floodpannel").is(":hidden")){
							$("#btpagasa").css("border","none");
						}
						else{
							$("#btpagasa").css("border","solid 1px #ddd");
						}
						//un-border georisk philvocs button if pannel is hidden
						if(	$("#georiskpannel").is(":hidden")){
							$("#btnphil").css("border","none");
						}
						else{
							$("#btnphil").css("border","solid 1px #ddd");
						}
						//un-border covid button if pannel is hidden
						if(	$("#covidpannel").is(":hidden")){
							$("#btncovid").css("border","none");
						}
						else{
							$("#btncovid").css("border","solid 1px #ddd");
						}
						
					
					});
					
		}

      $(document).ready(function(){
	
		var kk="";
		 var alt=false;
		 var ctrl=false;
		
		 $(".to_map").click(function(){
			window.location="assetsmap.php";
		 });
		 $(".to_assetsmg").click(function(){
			window.location="assets_mgt.php";
		 });
		 $(".to_assetsmg_total").click(function(){
			window.location="assets_mgt.php#con_total";
		 });
			
			
		/* $(document).keydown(function(e) {
			alert(e.key);
		}); */
		
		var arr_id=["#total_avail","#total_deloyed","#total_all","#total_receive"];
				get_total_assets($("#office_en").val(),arr_id,"home");
				//alert($("#total_receive").text());
		/* $(".modal").css("display","block");	*/	
		

		$(window).keyup(function(e) {
			if (e.key === "Control"){
				ctrl=false;
				//alert("Ctrl false");
			}
			if (e.key === "Alt"){
				alt=false;
				//alert("alt false");
			}
		});
			$(document).keydown(function(e) {
				if (e.key === "Control"){
				ctrl=true;
				//alert("Ctrl");
				}
				if (e.key === "Alt"){
					alt=true;
					//alert("ALT");
				}
				if(alt){
					//alert("true "+e.key);
					
					if (e.key == ">") { // escape key maps to keycode `27`
						// <DO YOUR WORK HERE>
						hidepannel();
					}
					if((e.key=="w" || e.key=="W")){
						hide_show('#windypannel');
					}
					if((e.key=="g" || e.key=="G") ){
						hide_show('#georiskpannel');
					}
					if((e.key=="L" || e.key=="l") ){
						hide_show('#floodpannel');
					}
					if((e.key=="c" || e.key=="C") ){
						hide_show('#covidpannel');
					}
				}
               //kk=e.key;
			  // alert(e.key);
            });

		var hidden=false;
		function hidepannel(){
			if(hidden){
				$(".sidebar").show(400);
				$("#hide_show").text("Hide");
				hidden=false;
			}else{
				$(".sidebar").hide(400);
				
				$("#hide_show").text("Show");
				hidden=true;
			}
		}
		$("#hide_show").click(function(){
			
			hidepannel();
		});
		$(window).resize(function(){
			var l=$(window).width();
			if(l<=1467 && l>820){
				$(".pannel").css("display","none");
			}
			if(l>1467){
				$(".pannel").css("display","block");
			}
		});
		
      });
    </script>