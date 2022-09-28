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
			font-size:14px;
		}
		
		.imgform-img,.imgform-img1{
			width:100%;
		padding:10px;
      border:1px solid #ddd;
      

		}
		
    .imgform-img #map{
      height:800px;
	  box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    }
		.imgform-img img{
			width:15px;
			height:25px;
			margin:0;
			display:inline;
			margin-right:10px;
			margin-bottom:-5px;
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
		
			
			.pannel-input{
				margin:0px;
				margin:auto;
				font-size:11px;
				

			}
			

			.marginleft{
				margin-top:10px;
			}
			.radiusnone{
				border-radius:0px;
			}
			.pannel{
				
				border-top:solid 1px #ddd;
				
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
			.table{
				margin:auto;
				width:fit-content;
				margin-bottom:20px;
			}
			#summary{
				width:90%;
				margin:auto;
				border: solid 1px #ddd;
				padding:20px;
			
				
			
			}
			#summary #lbl_sum{
				width:fit-content;
			
				margin:auto;
				margin-bottom:10px;
				font-weight:bold;
				font-size:19px;	
			}
			.p_row{
				display:block;
				
				width:fit-content;
			
				margin:auto;
				
			}
			#total_all, #lbl_total_all, #lbl_office_tag, #office_tag, #total_avail, #total_deloyed, #lbl_total_avail, #lbl_total_deployed{
				display:inline;
				
				width:fit-content;
			}
			.lbl_img{
				width:25px;
			}
			.avail_sum tr td, .dep_sum tr td{
				border: 1px solid #ddd;
				padding:5px;
			}
			.avail_sum, .dep_sum{
				width:100%;
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
			.pannel{
				height:330px;
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
			
				.imgform-img p, #summary #lbl_sum{
				font-size:15px;
				}
				.imgform-img  select, select{
				font-size:10px;
			}
			
		}
		@media (max-width:290px){
			#total_all, #lbl_total_all, #lbl_office_tag, #office_tag, #total_avail, #total_deloyed, #lbl_total_avail, #lbl_total_deployed{
			
				font-size:10px;
						
			
			}
			#summary #lbl_sum{
				font-size:13px;
			}
			
		
	}
		
			

				

</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
	<!-- <script sr="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script> -->
   
 <section id="imgform"><div class="imgform-container ">

      <div class="imgform-container ">
	 <!--  <p id="hide_show" class="top">Hide</p> -->
	  	<div class="sidebar">
		 
				<div class="imgform-img radiusnone top pannel_con" >
					<h3 onclick="test('#panel1','pannel')" class="sidehead">DICT ASSETS MAP<?php echo  "-".date("Y/m/d");?></h3>
						<DIV id="panel1" class="pannel">
							<table class="table" >
							<tr><td>
							<label for="regions" id="regionslbl" class="table_lbl1">Regions</label>
							<td><label for="regionslbl"  class="table_lbl2">Regions</label><select id="regions" class="pannel-input">
								<?php 
									$cols1=array("id");
									$str="SELECT * FROM region r order by reg_code asc";
									loadropdown_encrypt($str,$cols1,"name","below",1);

								?>
							</select>	
							<tr><td>
							<label for="dict_offices" id="dict_officeslbl1" class="table_lbl1">DICT Offices</label>
							<td><label for="dict_offices"  class="table_lbl2">DICT Offices</label><select id="dict_offices" class="pannel-input">
								<?php 
									$cols1=array("id","lat","long");
									$str="SELECT * FROM offices_latlong";
									loadropdown_encrypt($str,$cols1,"office_name","below",0);//sql command,colunmn id to be enryptyed in values
									//the value to show in option, default text top show onload, then if values are abreviated or not

								?>
							</select>	
						
							
						
							<tr><td><label id="assetslbl1" for="assets" class="table_lbl1">Show Assets</label>
							<td><label id="assetslbl1" for="assets" class="table_lbl2">Show Assets</label><select id="assets" class="pannel-input">
								<option value=0>Select</option>
								<option value="available">Available</option>
								<option value="deployed">Deployed</option>
								<option value="all">All</option>
							</select>

							
						</table>
						
						<div id="summary">							
							<p id="lbl_sum">Map Legend</p>
							<div class="p_row"><p id="lbl_office_tag">&nbsp<img src="images/office.PNG" >DICT Office</p></div>
							<div class="p_row"><p id="lbl_total_avail"><img src="images/avail.PNG" style="width:20px;height:20px;margin-bottom:-3px;">Available:</p><p id="total_avail">####</p></div>
							<div class="p_row"><p id="lbl_total_deployed"><img src="images/deplopyed.PNG" style="width:20px;height:20px;margin-bottom:-3px;">Deployed:</p><p id="total_deloyed">#### </p></div>
							<div class="p_row"><p id="lbl_total_all"><img src="images/avail.PNG" style="width:20px;height:20px;margin-bottom:-3px;"><img src="images/deplopyed.PNG" style="width:20px;height:20px;margin-bottom:-3px;">&nbsp Total:</p><p id="total_all">#### </p></div>
						
						</div>
					</DIV>
				</div>
				
				<div class="imgform-img radiusnone marginleft pannel_con">
					<h3  onclick="test('#panel2','pannel')" class="sidehead">SUMMARY OF DEPLOYED ASSETS</h3>
						<div id="panel2" class="pannel">
						<p style="font-size:30px;">Select from DICT Offices drop down to view summary of deployed assets</p>
						</div>
				</div>
				<div class="imgform-img radiusnone marginleft pannel_con">
					<h3  onclick="test('#panel3','pannel')" class="sidehead">SUMMARY OF AVAILABLE ASSETS</h3>
						<DIV id="panel3" class="pannel">
						<p style="font-size:30px;">Select from DICT Offices drop down to view summary of available assets</p>
						</DIV>
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
		$(".table_lbl2").hide();
		var map = L.map('map');
		var marker;
		var markeravail;
		var markerdeployed;
		var viewdep=false;
		var viewavail=false;
		var cleararr=[];
		var arrdepmarkers=[];
		var arravailpmarkers=[];
		var currentlat, currentlong;
		var mobile_map_minus=0;
		var mobile_map_plus_reg=0;
		var screen_height=800;
		loadmap("10.659%124.486999%6");// these are going to be converted into array with % as the splitter
		$("#assets").attr("disabled","disabled");
		
		$(window).resize(function(){// this is the even for windows resize calling the function 
			var l=$(window).width();
			var h=$(window).height();
				if(l<1267 && l>792){
					$(".br").remove();
				
					$(".table_lbl1").hide();
					$(".table_lbl2").show().after("<br class='br'>");
				}
				
				if(l>1267){
					$(".table_lbl1").show();
					$(".table_lbl2").hide()
					$(".br").remove();
				}
				if(l<792 ){
					$(".br").remove();
				
					$(".table_lbl1").hide();
					$(".table_lbl2").show().after("<br class='br'>");
				}
				
				if(h<=screen_height){
					$("#map").css("height","500px");
					mobile_map_minus=1;
					mobile_map_plus_reg=1;
				}
				else{
					$("#map").css("height","800px");
					mobile_map_minus=0;
					mobile_map_minus=0;
				}

				
			});
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
			var h=$(window).height();
			if(h<=screen_height){
				
						mobile_map_minus=1;
						mobile_map_plus_reg=2;
						
			}else{
				mobile_map_minus=0;
				mobile_map_plus_reg=0;
			}
			var arr_info=to_array(info,"%");
			var lat=Number(arr_info[0]);
			var long=Number(arr_info[1]);
			
			var focus=Number(arr_info[2])-Number(mobile_map_plus_reg);
			//alert(focus);
			currentlong=long;
			currentlat=lat;
			
    		map.setView(new L.LatLng(lat,long), focus );
			if (marker != undefined) {
              map.removeLayer(marker);
       			 }
					remove_deployed_markers();

			 	marker= L.marker([lat, long]).addTo(map);
				marker.bindPopup(" <b>"+arr_info[3]+"</b>").openPopup();
				
			//var map = new L.map('map').setView([lat, long],focus);
		}	
		function loadmap(info){
			var h=$(window).height();
			

			var arr_info=to_array(info,"%");
			var lat=parseFloat(arr_info[0]);
			var long=parseFloat(arr_info[1]);
			if(h<=screen_height){
				//alert("samall");
						$("#map").css("height","500px");
						mobile_map_minus=1;
						mobile_map_plus_reg=2;
						lat=11.038;
						long=122.583;
			}else{
				mobile_map_minus=0;
				mobile_map_plus_reg=0;
			}
			
			var focus=Number(arr_info[2])-Number(mobile_map_minus);
			//alert(focus);
			map.setView([lat, long],focus);
				L.tileLayer('https://api.maptiler.com/maps/streets-v2/{z}/{x}/{y}@2x.png?key=wDVBx6Hikcs1TqkSLwqF',{
					tileSize: 512,
					zoomOffset: -1,
					minZoom: 1,
					crossOrigin: true
				}).addTo(map);
				L.control.scale({
					metric: true,
					imperial: false,
					position: 'bottomright'
				}).addTo(map);

				L.Control.Watermark=L.Control.extend({
					onAdd:function(map){
						var img =L.DomUtil.create('img');
						img.src='images/test_dict.png';
						img.style.width='120px';
						img.style.height='120px';
						return img;
					},
					onRemove:function(map){},
				});
				L.control.watermark=function(opts){
					return new L.Control.Watermark(opts);
				}
				L.control.watermark({position:'bottomleft'}).addTo(map);

				L.Control.Watermark=L.Control.extend({
					onAdd:function(map){
						var img =L.DomUtil.create('img');
						img.src='images/compass4.png';
						img.style.width='90px';
						img.style.height='90px';
						return img;
					},
					onRemove:function(map){},
				});
				L.control.watermark=function(opts){
					return new L.Control.Watermark(opts);
				}
				L.control.watermark({position:'topright'}).addTo(map);
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

		function get_details_summary(ajax,offc,class_name,heads,target,stat){
			$.post(ajax,
			{
				office:offc,
				class:class_name,
				headers:heads

			},function(data){
				// alert(data);
				if(stat=="available"){
					$("#office_owner").remove();
					$("#avail_total").remove();
					var content=to_array(data,"%");
					$(target).html(content[0]);
					$("."+class_name).before("<p id='office_owner'>Location: <b>"+content[2]+"</b></p>");
					$("."+class_name).before("<p id='avail_total'>Grand Total: <b>"+content[1]+"</b></p>");
				}
				if(stat=="deployed"){
					$(target).html(data);
				}
				
			});
		}

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
					//$("#office_tag").text(arrval[3]);

				});
				get_total_assets($(this).val());
				get_details_summary("AJAX/deployed_assets_table.php",$(this).val(),"dep_sum","Assets%Location%Total","#panel2","deployed");
				
				get_details_summary("AJAX/avail_assets_table.php",$(this).val(),"avail_sum","Assets%Serials%Total","#panel3","available");
			}
			else{
				change_map("14.654%121.065002%6%DICT CENTRAL");
				$("#assets").val(0);
				$("#assets").attr("disabled","disabled");
				//9%10.659%124.486999%REGION VII (CENTRAL VISAYAS)
				map.setView(new L.LatLng(10.659,124.486999), 6-mobile_map_minus );
			}

			
		});
		$("#assets").change(function(){
			if($("#dict_offices").val()!=0){
				remove_deployed_markers();
				get_markers($(this).val(),$("#dict_offices").val(),6);
				
			}
			
		});
		function get_marker_style(color){
			const myCustomColour = color; 

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
					return myicon;
		}
		function plot_markers_deployed(rows,myicon){
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
		}
		function plot_markers_available(rows,myicon){
			for(let i=0;i<sizeof(rows);i++){
						var item=to_array (rows[i],"@");
						//alert(item[0]+" "+item[1]+" "+item[2]);
						markeravail= L.marker([item[1], item[2]],{icon:myicon}).addTo(map);
						arravailpmarkers.push(markeravail);
						var asset_name=to_array(item[0],":");
						markeravail.bindTooltip(asset_name[0]+"...", {permanent: true, offset: [0, 0] });
						
						markeravail.bindPopup	(" <b>"+item[0]+"</b>");
						marker.openPopup();
						viewavail=true;
					
					}
		}

		function remove_deployed_markers(){
			
			if (viewdep) {//public variable
				for(let i=0;i<sizeof(arrdepmarkers);i++){//arrdepmarkers is also a public variable
					map.removeLayer(arrdepmarkers[i]);
				}
				arrdepmarkers=cleararr;
				viewdep=false;
			 
				} 
			if (viewavail) {//public variable
				
				for(let j=0;j<sizeof(arravailpmarkers);j++){//arrdepmarkers is also a public variable
					map.removeLayer(arravailpmarkers[j]);
					//alert("remove avail");
				}
				arravailpmarkers=cleararr;
				viewavail=false;
			 
				} 
	}
		function get_markers(assets_status,office_val,zoom){
			
			$.post("AJAX/get_geoloc_assets.php",{
				stat:assets_status,
				office:office_val
			}, 
			function(data){
				
				if(data.trim()!="false" && data.trim()!="false$false"){
					//alert(data);
					var myicon;
					var color="";
					var view=view=6-Number(mobile_map_minus);;
					var lat=13.023799;
					var long=124.060997;
					if(assets_status=="available"){
						color="#00cc66";
						view=12-Number(mobile_map_plus_reg);
						lat=currentlat;
						long=currentlong;

					}
					if(assets_status=="deployed"){
						color="#D8700F";
						
					}
					var h=$(window).height();
					if(h<=screen_height && (assets_status=="all" || assets_status=="deployed")){
				//alert("samall");
						
						lat=11.038;
						long=122.583;
					}
					
					//alert(view);
					 map.setView(new L.LatLng(lat,long), view );
					 if(assets_status=="all"){
						 
						var all=to_array(data,"$");
								myicon=get_marker_style("#D8700F");
								var rows=to_array(all[0],"%");
								//var type=to_array(rows,"@");
								if(rows!="false"){
									plot_markers_deployed(rows,myicon);
								}
								
								myicon=get_marker_style("#00cc66");
								rows=to_array(all[1],"%");
								//alert(typeof(rows));
								if(rows!="false"){
								plot_markers_available(rows,myicon);
								}
					 }
					 else{
						myicon=get_marker_style(color);
							var rows=to_array(data,"%");
														
							if(assets_status=="deployed"){
								plot_markers_deployed(rows,myicon);
							}
							
							if(assets_status=="available"){
								plot_markers_available(rows,myicon);
							}
					 }
					
				}
					
			});
		}

		function get_total_assets(office_val){
			$.post("AJAX/get_assets_total.php",
			{
				office:office_val
			},
			function(data){
				var arr_data=to_array(data,"%");
				$("#total_avail").text(arr_data[0]);
				$("#total_deloyed").text(arr_data[1]);
				$("#total_all").text(arr_data[2]);
				
			});
		}

      });
    </script>