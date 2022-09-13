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
      

		}
		
    .imgform-img #map{
      height:800px;
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
		
			.pannel{
				height:300px;
			}
			.pannel-input{
				margin:0px;
				margin:auto;
				font-size:11px;
				

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
				height:300px;
				padding-top:15px;

			}
			.sidehead{
				width:100%;
				text-align:center;
				
			}
			#hide_show {
			border: 1px solid #ddd;
			background-color:white;
			padding: .5em;
			width:fit-content;

			position:absolute;
			transform: rotate(90deg);
			
			margin:auto;
			margin-top:25px;
			margin-left:-9px;
			z-index:2900;

					}
			#hide_show:hover{
				background-color:#ddd;
			}
			#assetslbl{
				margin-top:10px;
			}
				

</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
	<!-- <script sr="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script> -->
   
 <section id="imgform"><div class="imgform-container ">

      <div class="imgform-container ">
	 <!--  <p id="hide_show" class="top">Hide</p> -->
	  	<div class="sidebar">
		 
				<div class="imgform-img radiusnone top pannel_con" >
					<h3 onclick="test('#panel1','pannel')" class="sidehead">DICT OFFICES</h3>
						<p id="panel1" class="pannel">
							
							<label for="dict_offices">DICT Offices</label>&nbsp &nbsp 
							<select id="dict_offices" class="pannel-input">
								<?php 
									$cols1=array("id","lat","long");
									$str="SELECT * FROM offices_latlong";
									loadropdown_encrypt($str,$cols1,"office_name","below");

								?>
							</select>	
						
							<br>
							<br>
						
							<label id="assetslbl" for="assets">Show Assets</label>&nbsp &nbsp 
							<select id="assets" class="pannel-input">
								<option value=0>Select</option>
								<option value="available">Available</option>
								<option value="deployed">Deployed</option>
								<option value="All">All</option>
							</select>

							<br>
							<br>
						
							<label id="categorylbl" for="assets">Category</label>&nbsp &nbsp &nbsp &nbsp  &nbsp
							<select id="category" class="pannel-input">
							<?php 
								$str="SELECT distinct category, category FROM assets";
								loadropdown($str,"category","category","Category");
								?>
							</select>
						
						
						</p>
				</div>
				
				<div class="imgform-img radiusnone marginleft pannel_con">
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
				<div class="imgform-img radiusnone marginleft pannel_con">
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
    
        <div class="imgform-img" style='border:none;'>
              <div class="imgform-img " id="map">
              <p>Assets map</p>
               
              </div>
        </div>

       		
      </div>
    </section>

    <script>
		
		function test(target,from){//this function if for hiding and showing the contecnt of the pannel 
			var l=$(window).width();
			if(from=="pannel"){//
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
		/* function get_loc(place){
			var geocoder= new maptiler.Geocoder({
				input: place,
				key: "wDVBx6Hikcs1TqkSLwqF"
			});
			geocoder.on('select',function(item){
				alert("Selected ", item);
			});
		}
		get_loc("manila"); */

      $(document).ready(function(){
		var map = L.map('map');
		var marker;
		var markeravail;
		var markerdeployed;
		var viewdep=false;
		var cleararr=[];
		var arrdepmarkers=[];
		var currentlat, currentlong;
		loadmap("10.659%124.486999%6");// these are going to be converted into array with % as the splitter
		$("#assets").attr("disabled","disabled");
	
		/* function add_markers(data,status){
			
			if(status=="available"){
				if (markeravail != undefined) {
              		map.removeLayer(markeravail);
       			 }
			}
			else{
				if (markerdeployed != undefined) {
              		map.removeLayer(markerdeployed);
       			 }

			} 
		}*/
		

		function change_map(info){
			//alert(info);
			var arr_info=to_array(info,"%");
			var lat=Number(arr_info[0]);
			var long=Number(arr_info[1]);
			var focus=Number(arr_info[2]);
			currentlong=long;
			currentlat=lat;
			
    		map.setView(new L.LatLng(lat,long), focus );
			if (marker != undefined) {
              map.removeLayer(marker);
       			 }

				if (viewdep) {
					for(let i=0;i<sizeof(arrdepmarkers);i++){
						map.removeLayer(arrdepmarkers[i]);
					}
					arrdepmarkers=cleararr;
             	
       			 } 
			 	marker= L.marker([lat, long]).addTo(map);
				marker.bindPopup(" <b>"+arr_info[3]+"</b>").openPopup();
				
			//var map = new L.map('map').setView([lat, long],focus);
		}	
		function loadmap(info){
			var arr_info=to_array(info,"%");
			var lat=parseFloat(arr_info[0]);
			var long=parseFloat(arr_info[1]);
			var focus=Number(arr_info[2]);
			
			map.setView([lat, long],focus);
				L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}@2x.png?key=wDVBx6Hikcs1TqkSLwqF',{
					tileSize: 512,
					zoomOffset: -1,
					minZoom: 1,
					crossOrigin: true
				}).addTo(map);

				/*     var pinicon =L.icon({
						iconUrl:"vsatavailablemarker.png",
						iconSize: [38,50],
						iconAnchor:[14.6515,121.0588600],
					
					});*/

					

					const myCustomColour = '#D8700F'; 

				 const markerHtmlStyles = `
				background-color: ${myCustomColour};
				width: 1.5rem;
				height: 1.5rem;
				display: block;
				left: -1.5rem;
				top: -1.5rem;
				position: relative;
				border-radius: 3rem 3rem 0;
				transform: rotate(45deg);
				border: 1px solid #FFFFFF`;

				const myicon = L.divIcon({
				className: "my-custom-pin",
				iconAnchor: [-10, 2],
				labelAnchor: [0, 2],
				popupAnchor: [0, -20],
				html: `<span style="${markerHtmlStyles}" />`
				}); 
				// var marker= L.marker([14.6515, 121.0493],{icon:myicon }).addTo(map);
				//marker.bindPopup(" <b>QC CIRCLE</b><br>Pres. Quezon Memorial Circle").openPopup();
				

				//var marker1= L.marker([14.6527491, 121.0588600],{icon:myicon }).addTo(map);
				
				//marker.valueOf()._icon.style.backgroundColor = 'green';
				
				//marker1.bindPopup(" <b>DICT CENTRAL OFFICE</b><br> C.P Garcia Ave., Diliman, Q.C").openPopup(); 
				/* var circle= L.circle([14.6515, 121.0493],
				{
					color: 'red',
					fillcolor:'red',
					fillopacity: 1,
					radius:3000
				}).addTo(map);
				circle.bindPopup(" <b>QC CIRCLE BOMBING INCIDENT</b><br>100 Casualties, 30 person dead, 70 person wounded").openPopup(); */
		}
		var hidden=false;
		$("#hide_show").click(function(){
			if(hidden){
				$(".sidebar").show(400);
				$("#hide_show").text("Hide");
				hidden=false;
			}else{
				$(".sidebar").hide(400);
				
				$("#hide_show").text("Show");
				hidden=true;
			}
			
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
		$("#dict_offices").change(function(){
			//alert($("#dict_offices").val());
			$("#assets").val(0);
			if($(this).val()!=0){
			
			
				$.post("AJAX/mycodes.php",
				{
					command:"decrypt",
					values:$("#dict_offices").val()
				},
				function(data){
					//alert(data);
					var arrval=to_array(data,"%");//arrval[0] is the office id
					//alert(data);
					change_map(arrval[1]+"%"+arrval[2]+"%10%"+arrval[3]);//the values are(lat,long,focus,Office name)
					$("#assets").removeAttr("disabled");

				});
			}
			else{
				change_map("14.654%121.065002%6%DICT CENTRAL");
				$("#assets").val(0);
				$("#assets").attr("disabled","disabled");
				//9%10.659%124.486999%REGION VII (CENTRAL VISAYAS)
				map.setView(new L.LatLng(10.659,124.486999), 6 );
			}
		});
		$("#assets").change(function(){
			if($("#dict_offices").val()!=0){
				if($(this).val()=="deployed"){
				get_markers($(this).val(),$("#dict_offices").val(),6);
				}
			}
			
		});

		function get_markers(status,office_val,zoom){
			
			$.post("AJAX/get_geoloc_assets.php",{
				stat:status,
				office:office_val
			}, 
			function(data){
					//add_markers(data,status);
					/* var depicon=L.icon({
						iconUrl: "images/deployed.png",
						iconAnchor: [-10, 2],
					labelAnchor: [0, 2],
					popupAnchor: [0, -20] 



					});*/

					const myCustomColour = '#D8700F'; 

					const markerHtmlStyles = `
					background-color: ${myCustomColour};
					width: 1.5rem;
					height: 1.5rem;
					display: block;
					left: -1.5rem;
					top: -1.5rem;
					position: relative;
					border-radius: 3rem 3rem 0;
					transform: rotate(45deg);
					border: 1px solid #FFFFFF`;

					const myicon = L.divIcon({
					className: "my-custom-pin",
					iconAnchor: [-10, 2],
					labelAnchor: [0, 2],
					popupAnchor: [0, -20],
					html: `<span style="${markerHtmlStyles}" />`
					}); 
					var rows=to_array(data,"%");
					map.setView(new L.LatLng(10.659,124.486999), 6 );
					//map.setView(new L.LatLng(currentlat,currentlong), 6 );
				for(let i=0;i<sizeof(rows);i++){
						var item=to_array (rows[i],"@");
						//alert(item[0]+" "+item[1]+" "+item[2]);
					markerdeployed= L.marker([item[1], item[2]],{icon:myicon}).addTo(map);
					arrdepmarkers.push(markerdeployed);
					var asset_name=to_array(item[0],":");
					markerdeployed.bindTooltip(asset_name[0]+"...", {permanent: true, offset: [0, 0] });
					
					markerdeployed.bindPopup(" <b>"+item[0]+"</b>");
					marker.openPopup();
					viewdep=true;
					
					}
			});
		}

      });
    </script>