<style>
.datepicker, .datepicker2{
    position:absolute;
}
</style>
<script>
   $(function() {

     $( "#tabs" ).tabs();
  });
  </script>

    <!--<div id="container">
    		<div id="body">-->
    <div class="normalheader transition animated fadeIn small-header">
    <div class="hpanel">
        <div class="panel-body">
            <a class="small-header-action" href="#">
                <div class="clip-header">
                    <i class="fa fa-arrow-down"></i>
                </div>
            </a>
            <h2 class="font-light m-b-xs">
               Add New Inquiry
            </h2>
        </div>
    </div>
</div>

<div class="content animate-panel">		
    			<div id="leftcontent" class="col-md-8">
    			<div class="hpanel hblue">
		            <div class="panel-heading hbuilt">
		                <div class="panel-tools">
		                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
		                    <a class="closebox"><i class="fa fa-times"></i></a>
		                </div>
		                 Add New Inquiry
		            </div>
		            <div class="panel-body">
		                <form action = "<?php echo base_url(); ?>index.php/cases/saveCases" id = "inquiryForm" name = "inquiryForm" method="post" class="form-horizontal">
		                    <div class = "row">
		                    <div class="col-lg-12 ">
		                        <div class = "input-group ">
		                        <?php $data = array('name'=> 'customer','id' => 'customer','value'=> '','class' => 'form-control','placeholder' => 'Type Customer Name/Code/Email/Phone');
		                        echo form_input($data); 

		                        $data1 = array('type'=>'hidden','name'=> 'customer_id','id' => 'customer_id','value'=> '');
		                        echo form_input($data1);
		                        ?>
		                        <!--<input type="text" class="form-control" placeholder = "Type Customer Name/Code/Email/Phone"> -->
		                        <span class="input-group-btn"> 
		                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-expanded="true"> + <span class="caret"></span></button>
		                                <ul class="dropdown-menu">
		                                    <li><a href="#" data-toggle="modal" data-target="#myModal" onclick = "setType(4)">Add as Agent</a></li>
		                                    <li><a href="#" data-toggle="modal" data-target="#myModal" onclick = "setType(5)">Add as Corporate</a></li>
		                                    <li><a href="#" data-toggle="modal" data-target="#myModal" onclick = "setType(6)">Add as Walkin</a></li>
		                                </ul>
		                        </span>
		                        </div>
		                    </div>
		                
		                <div class="col-lg-6">
		                    <input type = "hidden" name = "cust_code" id = "cust_code" value = "" />
		                                            <label class = "col-sm-2 control-label">Name</label>
		                                            <div class = "col-sm-10">
		                                             <?php $data = array('name'=> 'cust_name','id' => 'cust_name','value'=> '','class' => 'form-control whiteborder ','placeholder' => '');
		                        echo form_input($data); ?>
		                                            </div>
		                                        </div>

		                			<div class="col-lg-6">
		                                            <label class = "col-sm-2 control-label">Mobile</label>
		                                            <div class = "col-sm-10">
		                                            <?php $data = array('name'=> 'cust_mobile','id' => 'cust_mobile','value'=> '','class' => 'form-control whiteborder ','placeholder' => '');
		                        echo form_input($data); ?>
		                                        </div>
		                                        </div>

		                			<div class="col-lg-6">
		                                            <label class = "col-sm-2 control-label">Email</label>
		                                            <div class = "col-sm-10">
		                                            <?php $data = array('name'=> 'cust_email','id' => 'cust_email','value'=> '','class' => 'form-control whiteborder ','placeholder' => '');
		                        echo form_input($data); ?>
		                                        </div>
		                                    </div>

		                			<div class="col-lg-6">
		                                            <label class = "col-sm-2 control-label">Type</label>
		                                            <div class = "col-sm-10">
		                                                <label id = "cust_type" class = "form-control whiteborder"></label>
		                                         </div>  
		                                        </div>
		                                    </div>

		                 <div class="hr-line-dashed"></div>

		                    <div class="form-group"><label class="col-sm-2 control-label">Inquiry For</label>
		                    <div class="col-sm-10">

		                        <?php 

		                      

		                       $product_type_master = array(''=>'Select Product Type')+$product_type_master;

		                        echo form_dropdown('product', $product_type_master, '','class ="form-control m-b" onchange = "showProductDetails(this.value)"');
		                        ?>
		                    </div>
		                    </div> 
		            <?php
		            /******* initialize counter *******/
		            	$i = 1;
		            ?>

		        <div id="visa" style="display:none">              
    				<div id="content<?php echo $i?>" style="margin-bottom:10px;">
    					<div class="hpanel hblue">
	    					<div class="panel-heading hbuilt">
				                <div class="panel-tools">
				                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
				                    <a class="closebox"><i class="fa fa-times"></i></a>
				                </div>
				                 Destination:
			    				 <?php 
                        			$country_opt = array('' => 'Select Country' ) + $country_master;
                        			echo form_dropdown('validvisa', $country_opt, '','class ="form-control m-b" onchange = "valid_visa(this.value)"');
                        		?>	

			    			<!--		<select id="country" class="form-control" style="width:40% !important;display:inline !important;" name="country" onchange="showDetails()">
			    							<option value="" default>Select</option>
			    							<option value="USA">USA</option>
			    							<option value="AUS">Austrelia</option>
			    							<option value="NEP">Nepal</option>
			    							<option value="JAP">Japan</option>
			    							<option value="UAE">UAE</option>
			    					</select>   -->
			    					<a href="javascript:void(0)" id="add<?php echo $i;?>" onclick="addCountry()" class="pull-right">Add</a>
				            </div>
		    					<div id="" class="panel-body">
			    					<div id="details" class="hide">
			    						<div id="enquiry_details">
			    							<div>
			    								<p>
			    									No. of Passengers: 
			    									<input type="text" id="adult" name="adult">
			    								</p>
			    								<p>
			    									<div class="hpanel" id="tabs">
													  <ul class="nav nav-pills">
													    <li><a href="#tab-1">Valid Visa</a></li>
													    <li><a href="#tab-2">On Arrival</a></li>
													    <li><a href="#tab-3">Apply</a></li>
													  </ul>
													 <!--<div class="tab-content">-->
													  <div id="tab-1">
													    <p><input type="text" id="validvisa" name="adult"></p>
													  </div>
													  <div id="tab-2">
													    <p><input type="text" id="onarrival" name="adult"></p>
													  </div>
													  <div id="tab-3">
													    <p><input type="text" id="apply" name="adult"></p>
													  </div>
													 </div>
													<!--</div>-->
			    								</p>
			    								<div id="process_details">
			    									<div class="hpanel hblue">
								    					<div class="panel-heading hbuilt">
											                <div class="panel-tools">
											                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
											                    <a class="closebox"><i class="fa fa-times"></i></a>
											                </div>
										            		Processing Details
										            	</div>
								    					<div class="panel-body">

								    						<div class="form-group">

								    						 <label class="col-sm-2 control-label">Passenger Name</label>
								    						 	<div class="col-sm-10">
							    						 		<input class="form-control m-b" type="text" id="adult-name" name="adult-name">
								    						 	</div>		
								    						</div>


								    						<div class="form-group">
								    						 <label class="col-sm-2 control-label">Date of Birth</label>
								    						 	<div class="col-sm-10">
								    						 		<input id="birth_date" type="text" value="" style = "width: 95%;" name = "birth_date" class="datepicker form-control m-b " placeholder = 'Select Birth Date' />

								    						 	</div>		
								    						</div>


								    						<div class="form-group">
								    						 <label class="col-sm-2 control-label">Do You Have Any Valid Visa? </label>
								    						 	<div class="col-sm-10">
								    						 		<?php 
                        										$country_opt = array('' => 'Select Country' ) + $country_master;
                        										echo form_dropdown('visa_country', $country_opt, '','class ="form-control m-b" onchange = "countrywiseVal(this.value);"');
                        									?>	

								    						 	</div>		
								    						</div>


								    						<div class="form-group">

								    						 <label class="col-sm-2 control-label">Do You Have Any Dual Citizenship?</label>
								    						 	<div class="col-sm-10">
								    						 		<?php 
                        										$country_opt = array('' => 'Select Country' ) + $country_master;
                        										echo form_dropdown('visa_country', $country_opt, '','class ="form-control m-b" onchange = "countrywiseVal(this.value);"');
                        									?>	
								    						 	</div>		
								    						</div>

								    						<div class="form-group">

								    						 <label class="col-sm-2 control-label">Passport Issue Country</label>
								    						 	<div class="col-sm-10">
								    						 		<?php 
                        										$country_opt = array('' => 'Select Country' ) + $country_master1;
                        										echo form_dropdown('visa_country', $country_opt, '','class ="form-control m-b" onchange = "selectState(this.options[this.selectedIndex].value)"');
                        									?>	
								    						 	</div>		
								    						</div>	

								    						<div class="form-group">
								    						 <label class="col-sm-2 control-label">Passport Issue City</label>
								    						 	<div class="col-sm-10">
								    						 		<?php 
								    						 		//print_r($country_opt);
								    						 		//exit;
                        										$state_opt = array('' => 'Select State' ) + $state_master;
                        										echo form_dropdown('visa_state', $state_opt, '','class ="form-control m-b" onchange = "countrywiseState(this.value)"');
                        									?>	
								    						 	</div>		
								    						</div>
								    						<div class="form-group">
								    						 <label class="col-sm-2 control-label">Passport Expire Date</label>
								    						 	<div class="col-sm-10">
								    						 		<input id="expire_date" type="text" value="" style = "width: 95%;" name = "expire_date" class="datepicker form-control m-b " placeholder = 'Select Expire Date' />
								    						 	</div>		
								    						</div>

								    						<div class="form-group">
								    						
								    						 <label class="col-sm-2 control-label">Travel Date</label>
								    						 	<div class="col-sm-6">
								    						 		<input id="visa_travel_date" type="text" value="" name = "visa_travel_date" class="datepicker form-control" placeholder = 'Select Travel Date' />
								    						 	</div>
								    							
								    						 <div class="col-sm-4">
                        										<div class="radio radio-success radio-inline">
                            									<input name="visa_travel_date_type" value="Tentative" id="tentative_date" class="form-control" type="radio">
                                    							<label for="inlineRadio1"> Tentative </label>
                               									 </div>

                               									 <div class="radio radio-success radio-inline">
                          										 <input name="visa_travel_date_type" value="Confirm" id="confirm_date" class="form-control" type="radio">
                                  								 <label for="inlineRadio1"> Confirm </label>
                                								</div>
                        									</div>
                        									
                        									</div> 
	   						

						    					</div>
							    					</div>
    												<!-- .hpanel hblue ends -->	

							    					<div class="hpanel hblue">
								    					<div class="panel-heading hbuilt">
											                <div class="panel-tools">
											                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
											                    <a class="closebox"><i class="fa fa-times"></i></a>
											                </div>Payment Details
											            </div>
								    					<div class="panel-body">

								    					<div class="form-group">

								    						 <label class="col-sm-2 control-label">Payment Mode</label>
								    						 	<div class="radio radio-success radio-inline">
                            									<input name="payment" value="online" id="online" class="form-control" type="radio">
                                    							<label for="inlineRadio1"> Online </label>
                               									 </div>

                               									 <div class="radio radio-success radio-inline">
                          										 <input name="payment" value="Stamping" id="stamping" class="form-control" type="radio">
                                  								 <label for="inlineRadio1"> Stamping </label>
                                								</div>		
								    						</div>



								    					</div>
							    					</div>
    												<!-- .hpanel hblue ends -->	

							    					<div class="hpanel hblue">
								    					<div class="panel-heading hbuilt">
											                <div class="panel-tools">
											                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
											                    <a class="closebox"><i class="fa fa-times"></i></a>
											                </div>Submission of Documents
											            </div>
								    					<div class="panel-body">

								    						<div class="form-group">

								    						 <label class="col-sm-2 control-label">Submission</label>
								    						 	<div class="radio radio-success radio-inline">
                            									<input name="submission" value="online" id="online" class="form-control" type="radio">
                                    							<label for="inlineRadio1"> Online </label>
                               									 </div>

                               									 <div class="radio radio-success radio-inline">
                          										 <input name="submission" value="Stamping" id="stamping" class="form-control" type="radio">
                                  								 <label for="inlineRadio1"> Stamping </label>
                                								</div>		
								    						</div>


								    					</div>
							    					</div>
    												<!-- .hpanel hblue ends -->	
						    					</div>

			    							</div>
			    						</div>
			    						<!-- #enquiry_details ends -->
			    					</div>
			    					<!-- #details ends -->
			    					<div id="restricted" class="hide">
			    						<p>
			    							Sorry! Seems that we do not provide Services for Japan as it appears in our restricted list.
			    						</p>
			    						<p>
			    							Is there any other country thatyou would feel to apply
			    							<select id="country1" name="country1" onchange="showDetails()">
				    							<option value="" default>Select</option>
				    							<option value="USA">USA</option>
				    							<option value="AUS">Austrelia</option>
				    							<option value="NEP">Nepal</option>
				    							<option value="JAP">Japan</option>
				    							<option value="UAE">UAE</option>
			    							</select> 
			    							or any other service / comment
			    							<select id="service" name="service">
				    							<option value="" default>List of Services</option>
			    							</select> 
			    						</p>
			    						<button id="saveRestrict" name="saveRestrict">Save & Close</button>
			    					</div>
			    					<!-- #restricted ends -->
		    					</div>
		    					<!-- .panel-body ends -->
    					</div>
    					<!-- .hpanel hblue ends -->	
    				</div>
    				<!-- #content ends -->
    			</div>
    			<!-- #visa ends -->	
    				<input type="hidden" id="counter" name="counter" value="<?php echo $i;?>">
    				<div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2">
                            <button class="btn btn-default" type="submit">Cancel</button>
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </div>
                    </div>  

 				</form>
 				<!-- from end -->
 				</div>
 				<!-- .panel-body ends -->
    		</div>
    		<!-- .hpanel ends -->		
    	</div>
    	<!-- #leftcontent ends-->		
    </div>
    <!-- .animate-panel ends -->

    			<!-- #rightcontent ends -->
    		<!--</div>
    		 #body ends -->
    	<!--</div>
    	 #container ends -->	 


    	 <div class="col-lg-4 animated-panel zoomIn" style="animation-delay: 0.4s;">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                CUSTOMER HISTORY
            </div>
            <div class="panel-body">
                <div class="table-responsive" >
                        <table cellpadding="1" cellspacing="1" class="table table-condensed">
                            <thead>
                            <tr>
                                <th class ="text-info font-bold">Last Login</th>
                                <td><?php echo date('d-m-Y H:i:s', $this->session->data['last_login']);?></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th class = "text-info font-bold">A/c Balance</th>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <th class = "text-info font-bold">Earnings</th>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <th class = "text-info font-bold">Date of Birth</th>
                                <td>25/07/1988</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>

                    
            </div>
            
        </div>
    </div>
    
    <div class="col-lg-4 animated-panel zoomIn" style="animation-delay: 0.4s;">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                TRAVEL HISTORY
            </div>
            <div class="panel-body">
                <div class="table-responsive" >
                        <table cellpadding="1" cellspacing="1" class="table table-condensed">
                            <thead>
                            <tr>
                                <th>INQUIRY</th>
                                <th>RATES</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>DUBAI</td>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <td>HONG KONG</td>
                                <td>1500</td>
                            </tr>
                            <tr>
                                <td>SINGAPORE</td>
                                <td>2500</td>
                            </tr>
                            
                            </tbody>
                        </table>
                    </div>        
            </div>
        </div>
    </div>
    
    <div class="hr-line-dashed"></div>  

    <div class="col-lg-4 animated-panel zoomIn" style="animation-delay: 0.4s;">
        <div class="hpanel hblue">
            <div class="panel-heading hbuilt">
                <div class="panel-tools">
                    <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                    <a class="closebox"><i class="fa fa-times"></i></a>
                </div>
                FOR FRONT DESK OFFICER ONLY
            </div>
            <div class="panel-body">
               
                    <div class="animated-panel zoomIn"><label>Department</label>
                        <?php 
                        $options = array(''=>'Select Department','small'=> 'Small Shirt','med'=> 'Medium Shirt','large'=> 'Large Shirt','xlarge' => 'Extra Large Shirt',);
                        echo form_dropdown('dept', $options, '','class ="form-control m-b" ');
                        ?>
                    </div> 

                    <div class="animated-panel zoomIn"><label>Status</label>
                        <?php 
                        $options = array(''=>'Select Status','small'=> 'Small Shirt','med'=> 'Medium Shirt','large'=> 'Large Shirt','xlarge' => 'Extra Large Shirt',);
                        echo form_dropdown('status', $options, '','class ="form-control m-b" ');
                        ?>
                    </div>  
                    
                    <div class="hr-line-dashed"></div>

                    <div class="animated-panel zoomIn"><label>Invoice Details</label>
                        <span class = "pull-right"><strong>8000</strong></span>
                        <?php 
                        //$options = array(''=>'Select Department','small'=> 'Small Shirt','med'=> 'Medium Shirt','large'=> 'Large Shirt','xlarge' => 'Extra Large Shirt',);
                        //echo form_dropdown('dept', $options, '','class ="form-control m-b" ');
                        ?>
                    </div> 

                    <div class="animated-panel zoomIn"><label>Insert Discount</label>
                        <input id="discount" type="text" value="" class="form-control" placeholder = "Insert Discount">
                    </div> 

                    <div class="animated-panel zoomIn"><label>Discount Reason</label>
                        <?php 
                        $options = array('name'=> 'disc_reason','id'=> 'disc_reason','class'=> 'form-control m-b','rows' => 3,'cols' => 3);
                        echo form_textarea($options);
                        ?>
                    </div> 
                      
                    
                                <button type="button" class="btn btn-block btn-outline btn-primary">GENERATE PROFORMA INVOICE</button>
                                <button type="button" class="btn btn-block btn-outline btn-primary2">ADD CHARGES</button>
                                <button type="button" class="btn btn-block btn-outline btn-warning">WALLET ADJUSTMENT</button>
                                <button type="button" class="btn btn-block btn-outline btn-info">DOWNLOAD FINAL INVOICE</button>

            </div>
        </div>
    </div>                  
</div>



<!-- Add User Pop-up -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="color-line"></div>
                            <div class="modal-header">
                                <h4 class="modal-title">Add User</h4>
                            </div>
                            <div class="modal-body">
                            <?php $this->load->view('add_user'); ?>
                            </div>
                        </div>
                    </div>
                </div>



<script type="text/javascript">
function showDetails()
{

	var val1 = $('#country').val();
	var val2 = $('#country1').val();
	
	if(val1 == 'JAP')
	{
		$('#restricted').removeClass('hide');
	}
	else
	{
		$('#restricted').addClass('hide');
	}

	if(val1 == 'USA')
	{
		$('#details').removeClass('hide');
	}
	else
	{
		$('#details').addClass('hide');
	}
}

function addCountry()
{
	var cloneCount = $('#counter').val();

	var newCount = parseInt(cloneCount)+1;
	 $('#content'+cloneCount)
          .clone()
          .attr('id', 'content'+newCount)
          .insertAfter($('[id^=content]:last'))



    $('#counter').val(newCount); 

    $( "#content"+newCount ).accordion({
      heightStyle: "content",
      collapsible: true
    });     
}
</script>
<script>
	function selectState(country_id){
  if(country_id!="-1"){
    loadData('state',country_id);
    $("#city_dropdown").html("<option value='-1'>Select city</option>");
  }else{
    $("#state_dropdown").html("<option value='-1'>Select state</option>");
    $("#city_dropdown").html("<option value='-1'>Select city</option>");
  }
}

function loadData(loadType,loadId){
  var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
  $("#"+loadType+"_loader").show();
  $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
  $.ajax({
    type: "POST",
    url: "loadData",
    data: dataString,
    cache: false,
    success: function(result){
      $("#"+loadType+"_loader").hide();
      $("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");
      $("#"+loadType+"_dropdown").append(result);
    }
 });
}





</script>

