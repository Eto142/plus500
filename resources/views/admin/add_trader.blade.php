@include('admin.header')

<div class="main-panel">

			<div class="content bg-dark">
				<div class="page-inner">
     @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Add Trader</h1>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-dark">
                            <form action="{{url('add-expert')}}" method ="POST" enctype="multipart/form-data">
											{{ csrf_field()}}                                    
                                            <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Trader Name</h5>
                                 <input  class="form-control text-light bg-dark" placeholder="Enter trader name" type="text" name="trader_name" required>
                                        </div>
                                       <!-- <div class="form-group col-md-6">
                                            <h5 class="text-light">Trading Default Amount ($)</h5> 
                                            <input class="form-control text-light bg-dark" placeholder="Enter Plan price" type="text" name="price" required>   
                                            <small class="text-light">This is the maximum amount a user can pay to copy this trader</small>
                                       </div>-->	
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Trading Minimum amount ($)</h5> 			 
                                             <input placeholder="Enter Plan minimum price" class="form-control text-light bg-dark" type="text" name="trading_min_amount" required>  
                                             <small class="text-light">This is the minimum amount a user can pay to copy this trader</small> 
                                       </div>
                                     <div class="form-group col-md-6">
                                             <h5 class="text-light">Trading Maximum amount ($)</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter  maximum price" type="text" name="trading_max_amount" required> 
                                          
                                       </div>
                                       
                                     <!--  <div class="form-group col-md-6">
                                            <h5 class="text-light">Minimum return ($)</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter minimum return" type="text" name="minr" required>   
                                           <small class="text-light">This is the minimum return (ROI) for this plan</small>
                                       </div>-
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Maximum profit return ($)</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="Enter maximum return" type="text" name="maxr" required>  
                                           <small class="text-light">This is the Maximum return (ROI) for this plan</small> -->
                                       </div>
                                       
                                           <input class="form-control text-light bg-dark" placeholder="Enter Additional Gift Bonus" type="hidden" name="gift" value="0" required>  
                                         
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Interval</h5> 	
                                           <select class="form-control text-light bg-dark" name="top_up_interval">
                                               <option value="Monthly">Monthly</option>
                                               <option value="Weekly">Weekly</option>
                                               <option value="Daily">Daily</option>
                                               <option value="Hourly">Hourly</option>
                                               <option value="Every 30 Minutes">Every 30 Minutes</option>
                                           </select>  
                                           <small class="text-light">This specifies how often the system should add profit(ROI) to user account.</small>    
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Type</h5> 
                                           <select class="form-control text-light bg-dark" name="top_up_type">
                                               <option value="Percentage">Percentage</option>
                                               <option value="Fixed">Fixed</option>
                                           </select>  
                                           <small class="text-light">This specifies if the system should add profit in percentage(%) or a fixed amount.</small>   
                                       </div>

                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Amount (in % or $ as specified above)</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="top up amount" type="text" name="top_up_amount" required> 
                                           <small class="text-light">This is the amount the system will add to users account as profit, based on what you selected in topup type and topup interval above.</small>   
                                       </div>
                                       
                                        
                                            
                                        <!-- <div class="form-group col-md-6">
                                        <h5 class="text-light">Investment Duration</h5> 
                                           <input class="form-control text-light bg-dark" placeholder="eg 1 Days, 2 Weeks, 1 Months" type="text" name="expiration" required> 
                                                  <small class="text-light">This specifies how long the investment plan will run. Please strictly follow the guide on <a href="" data-toggle="modal" data-target="#durationModal">how to setup investment duration</a> else it may not work. </small> 
                                            
                                       </div>-->
                                       
                                        <div class="form-group col-md-6">
                                           <h5 class="text-light">Investment Duration</h5> 	
                                           <select class="form-control text-light bg-dark" name="investment_duration" required>
                                               <option value=""> Choose</option>
                                               <option value="2 Weeks">2 Weeks </option>
                                               <option value="1 Day">1 Daily </option>
                                               <option value="1 Week">1 Week </option>
                                                  <option value="1 Month">1 Month </option>
                                                   <option value="2 Months">2 Months </option>
                                                       <option value="1 Year">1 year </option>
                                                           <option value="3 Months">3 Months </option>
                                           </select>  
                                        <div class="form-group col-md-6">
                                             <h5 class="text-light">Trader years of exprience</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter years of exprience" type="text" name="trader_year_of_experience" required> 
                                          
                                       </div>
                                          <div class="form-group col-md-6">
                                             <h5 class="text-light">Coppiers ROI</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter Coppiers ROI" type="text" name="copier_roi" required> 
                                          
                                       </div>
                                           <div class="form-group col-md-6">
                                             <h5 class="text-light">Risk Index</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter risk" type="text" name="risk_index" required> 
                                          
                                       </div>
                                          <div class="form-group col-md-6">
                                             <h5 class="text-light">Performance</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter Trader Performance" type="text" name="performance" required> 
                                          
                                       </div>
                                        <div class="form-group col-md-6">
                                             <h5 class="text-light">Total copied traders</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter total copied traders" type="text" name="total_copied_trade" required> 
                                          
                                       </div> 
                                         <div class="form-group col-md-6">
                                             <h5 class="text-light">Active traders</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enteractive traders" type="text" name="active_traders" required> 
                                          
                                       </div>
                                         <div class="form-group col-md-6">
                                             <h5 class="text-light">Trader country</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter years of exprience" type="text" name="trader_country" required> 
                                          
                                       </div>
                                         <div class="form-group col-md-6">
                                             <h5 class="text-light">about trader</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="Enter years of exprience" type="text" name="about_trader" required> 
                                          
                                       </div>
                                         <div class="form-group col-md-6">
                                             <h5 class="text-light">picture</h5> 			 
                                             <input class="form-control text-light bg-dark" placeholder="upload image" type="file" name="image" required> 
                                          
                                       </div>
                                       
                                       <div class="form-group col-md-12">
                                      
                                           <input type="submit" class="btn btn-primary" value="Add Plan">   
                                       </div>
                                    </div>
                               </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
            
            <div id="durationModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-dark">
                            <h5 class="text-light">FIRSTLY, Always preceed the time frame with a digit, that is do not write the number in letters, <br> <br> SECONDLY, always add space after the number, <br> <br> LASTLY, the first letter of the timeframe should be in CAPS and always add 's' to the timeframe even if your duration is just a day, month or year.</h5>
                            <h2 class="text-light">Eg, 1 Days, 3 Weeks, 1 Hours, 48 Hours, 4 Months, 1 Years, 9 Months</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="topupModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body bg-dark">
                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function getduration(id, event){
                    event.preventDefault();
                    document.getElementById('duridden').value = id;
                }
            </script>			


@include('admin.footer')
				