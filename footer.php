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
    
