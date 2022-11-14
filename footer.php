<footer id="footer">
  <div class="wp">
        <div ><img src="images/1govph-seal-mono-footer.png" class="footer-img"></div>
        <div class="about-text"><p>Department of Information </p>
            <p>and Communications Technology</p><p> &copy; all rights reserved</p>
            <p style="color:rgb(228, 227, 227)">&nbsp </p>
            <p style="color:rgb(228, 227, 227)">&nbsp</p>
        </div>
        <div><img src="images/transparency-seal.png" class="footer-img"></div>
    </div>
    </footer>
    <script>
         <?php echo"/*".encrypt("THIS IS A COMMENT-The function is_true_false evaluates true or 
         false if there is a result in a given query.
         the function calls a function eval() which evaluate the string value passed inside eval,
         the string value contains the function name of the next function to be executed
         (designed this way beause of asyncronous rule in ajax in which case all codes 
         outside the ajax are evaluated first, 
         hence when returng a value inside ajax, the value will always be null)
         if is_true_false is either true or false based on query result.
         This comment is ecnrypted")."*/";?>
        function is_true_false(str,eval_func_true,eval_func_false){
           $.post("AJAX/mycodes.php",
            {
            sql:        str,
            command:    "is_empty"  
            },
            function(data){
              //alert(str);
                if(data=="true"){
                   
                    eval(eval_func_true);
                }
                else{
                    eval(eval_func_false);
                }
               
            });
            
        }
        function attributes_input(category){


        }
        function sizeof(array){

            var c = 0;
            for(i in array) // in returns key, not object
                if(array[i] != undefined)
                    c++;

            return c;
        }

        function to_array(values,delimeter){
				return values.split(delimeter);

			}
        function call_php_code(command_func,data_val,eval_func_true,eval_func_false){
           
            $.post("AJAX/mycodes.php",
            {
                command:command_func,
                values:data_val

            },
            function(data){
                if(data!=""){  
                    alert(data);
                      if(eval_func_true.includes("|")){
                       
                        var elem = eval_func_true.split("|");
                        eval(elem[0]+"('"+elem[1]+"','"+data+"')");     
                      }   else{
                        eval(eval_func_true);
                
                      }  
                }else{
                    
                    eval(eval_func_false);
                }
              
            });
        }
        function check_url(url){
            if(url.includes("%3Cscript%3E")){
                reroute() 
            }
        }

        function reroute(){
            windows.location("logout.php");
        }
        function href_each(target){
           
            $.each($(target),function(){
                //alert("click");
                var value=$(this).text();
                $(this).html("<a href='"+value+"' target='_blank'>Attachment</a>");

            });
        }
        function remove_next_word(target){
            $.each($(target),function(){
                //alert("click");
                var value=$(this).text();
                var arr_val=to_array(value," ");
                $(this).html(arr_val[0]);

            });
        }
        function global_load_table(str,headers,chkbox,allchk,classes,target,item,href,next_word){
            $.post("AJAX/loadtable.php", 
            {
                sql:str,
                hdr:headers,
                class:classes,
                check: chkbox,
                all:allchk
            },
            function(data){
                $(target).html(data);
                if(item!=""){
                    enrycpt_each(item);
			
                }
                if(href!=""){
                    href_each(href);	
                }
                if(next_word!=""){
                    remove_next_word(next_word);	
                }
            });
            
        }
        
        function make_input_attributes(target,class_names,cat,disaster_id,add_this,target_add){
		$.post("AJAX/load_disaster_attributes.php",
		{
			category:cat,
			disaster:disaster_id,
            myclass: class_names
		},
		function(data){
			$(target).html(data);
            if(add_this!=""){
                $(target_add).before(add_this);
            }
            if(data=="null"){
                $(target).html(add_this);
            }
		});

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
   
        function global_load_table_radio(str,headers,chkbox,allchk,classes,target,item,href,next_word,funct){
            $.post("AJAX/loadtable_radio.php", 
            {
                sql:str,
                hdr:headers,
                class:classes,
                check: chkbox,
                all:allchk,
                func: funct
            },
            function(data){
                $(target).html(data);
                if(item!=""){
                    enrycpt_each(item);
			
                }
                if(href!=""){
                    href_each(href);	
                }
                if(next_word!=""){
                    remove_next_word(next_word);	
                }
            });
        }

        function enrycpt_each(target){

         $.each($(target),function(){
            var chk_obj=$(this);
      
                   $.post("AJAX/mycodes.php",
                   {
                    command:"encrypt",
                    values:$(chk_obj).val()
                   },
                   function(data){
                 
                    $(chk_obj).val(data);
                  
                    
                   });    
            }); 
        }
        function slide(target){
          
			$(target).slideToggle("slow");
		}
        function mini_pannel_slide(target,imganimate){
		
		$(target).slideToggle("slow",function(){
			if($(target).is(":hidden")){
				$(imganimate).attr("src","images/arrow_down.png");
			
			}
			else{
				$(imganimate).attr("src","images/arrow.png");
				
			}
		});

	}
       
        function get_total_assets(office_val,arr_id,call_from){
			$.post("AJAX/get_assets_total.php",
			{
				office:office_val
			},
			function(data){
				var arr_data=to_array(data,"%");
				//alert(arr_id.lenght);
                var size=sizeof(arr_data);
                
                for(var key in arr_id){
                  
                    
                        $(arr_id[key]).text(arr_data[key]);
                 
                }
                if(call_from=="home"){
                    var receive=parseInt(arr_data[size-1]);
                    var plural="";
                    if(receive>1){
                        plural="s";
                    }
                    if(receive!=0){
                        Popup_modal_show("You have <b>"+receive+"</b> new item"+plural+" to be received. \
                        Please go to <a href='assets_mgt.php'>Assets management module</a> to receive these item"+plural+". Thank you.",600);
                        //$(".modal").css("display","block");
                    }
                }
				
			});
		}
        $(".close").click(function(){
			$(".modal").delay(100).fadeOut();
		}); 
        function Popup_modal_show(msg,speed){
            $(".modal").css("display","block");
            $(".modal").hide();
            $("#popmsg").html(msg);
            $(".modal").delay(speed).fadeIn();
        }
        function global_validate(target,value){
		if($(target).val().trim()==value){
			$(target).css({"border":"solid 1px red"}); 
			return true;
		}else{
			$(target).css({"border":"solid 1px rgb(118, 118, 118)"});
			return false;
		}
	}
        function Popup_modal_show2(msg,speed){// this pop-up modal will logout upon clicking close, 
            //this is only used for auto log-out message

            $(".modal2").css("display","block");
            $(".modal2").hide();
            $("#popmsg1").html(msg);
            $(".modal2").delay(speed).fadeIn();
        }
       


        function loadtable_decrypt(str,headers,chkbox,allchk, target,chkbox_name,with_chkbox,elem_chk){
			//var elem="all%item_pass_res"
			$.post("AJAX/loadtable_decryptstr.php",{
				sql:str,
				hdr:headers,
				check:chkbox,	
				all:allchk,
				class:elem
			},function(data){
				if(data!=""){
					//alert(chkbox);
					$(target).html(data);
					if(with_chkbox==1){
					enrycpt_each(chkbox_name);		
				}
					
				}else{
					$(target).empty();
				}				
					
			}
			);
		}
        function ajax(values){
            var params=to_array(values);
            $.post(params[0],{

            },
            function(data){

            });
        }
   
        function assign(target_elem,data){
            $(target_elem).val(data);
        }
        function assign_html(target_elem,data){
            $(target_elem).html(data);
        }
        function do_nothig(){
            //do nothing
        }
        function testing(){
            alert("testing");
        }
        function elem_hide(target){
           // alert(target);
            $(target).hide();
        }
        function elem_show(target){
            $(target).show();
        }
        function data_value(data){
            return data;
        }
        <?php 
        echo "
        function encypt1(str){
            return '".encrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'")."';
            //alert(str);
        }
        function decypt1(str){
            return '".decrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'")."';
            //alert(str);
        }
        function get_session_username(){
            return '".encrypt($_SESSION["uname"])."';
        }
        ";
        ?>
      
        
    </script>
    
