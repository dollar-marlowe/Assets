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
		
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img,.imgform-img1{
			width:100%;
		padding:10px;
      border:1px solid #ddd;
      border-radius:20px;

		}
		
    .imgform-img iframe{
      height:600px;
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
		
			
		@media (max-width:1467px){
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
		}
		@media (max-width:820px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
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
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
		
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
			
		
</style>
 <section id="imgform"><div class="imgform-container ">

      <div class="imgform-container ">

	  	<div class="sidebar">
				<div class="imgform-img radiusnone top" >
					<h3 onclick="test('#panel1','pannel')" class="sidehead">Lorem ipsum1</h3>
						<p id="panel1" class="pannel">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						   pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						    culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
				<div class="imgform-img radiusnone marginleft">
					<h3  onclick="test('#panel2','pannel')" class="sidehead">Lorem ipsum</h3>
						<p id="panel2" class="pannel">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						   pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						    culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
				<div class="imgform-img radiusnone marginleft">
					<h3  onclick="test('#panel3','pannel')" class="sidehead">Lorem ipsum</h3>
						<p id="panel3" class="pannel">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						   pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						    culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
			</div>

      <div class="imgform-img " style='border:none;'>
	  
              <div class="imgform-img block">
                <p onclick="test('#windy','iframe')" class="iframhead">WINDY.COM LIVE MONITORING</p>
                <iframe style="border:none;width:100%; " src="https://embed.windy.com/embed2.html?lat=9.709&lon=123.750&
                  detailLat=9.709&detailLon=123.750&width=650&height=450&zoom=5&level=surface&overlay=rain&product
                  =ecmwf&menu=&message=&marker=&calendar=now&pressure=&type=map&location=coordinates&detail=&metric
                  Wind=default&metricTemp=default&radarRange=-1" id="windy"></iframe>
                
              </iframe>

              </div>

              <div class="imgform-img block">
              <p onclick="test('#flood','iframe')">DOST FLOOD DAM INFROMATION LIVE MONITORING</p>
                <iframe id="flood"style="border:none;width:100%; " src="https://bagong.pagasa.dost.gov.ph/flood#dam-information" ></iframe>
                
              </iframe>

              </div>
        </div>

        <div class="imgform-img" style='border:none;'>
              <div class="imgform-img">
              <p onclick="test('#georisk','iframe')">PHIVOLCS GOERISK LIVE MONITORING</p>
                <iframe id="georisk" style="border:none;width:100%; " src="https://hazardhunter.georisk.gov.ph/map#" ></iframe>
                
              </iframe>

              </div>
              <div class="imgform-img">
              <p onclick="test('#covid','iframe')">DOH-COVID19 LIVE MONITORING</p>
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
				if(l<=1467 && l>820){
			
					$(".pannel").slideToggle("slow");
				}else{
					$(target).slideToggle("slow");
				}
			}
			if(from=="iframe"){
				$(target).slideToggle("slow");
			}
			
			
		}
      $(document).ready(function(){
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