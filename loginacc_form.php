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
          <img src="images/personnellogo.png" alt="" />
        </div>

        <div class="form-container">
          <h2 id='officialheader'>Accounts and Login</h2>


                <label for="off_designation">Office Designation: *</label>
                <select id="off_designation" name="off_designation" >
                        <?php
                        $str="SELECT * FROM office";
                        loadropdown($str,"id","office_name","Office");//function for loading values into the dropdown accepts sql command and name of columns 
                        ?>
                </select>
                    
                <input type='submit' Value='Submit' class="btn btn-primary" style="color:white;font-weight:800;" id="submitofficial">
                <input type='submit' Value='Clear' class="btn btn-primary" style="color:white;font-weight:800;" id="officeclear">
            
        </div>
      </div>
    </section>

    <script>
      $(document).ready(function(){
       
      });
    </script>