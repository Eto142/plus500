@include('admin.header')

<div class="main-panel">
			<div class="content bg-dark">
				<div class="page-inner">
                @if(session('message'))
<div class="alert alert-success mb-2">{{session('message')}}</div>
@endif
					<div class="mt-2 mb-4">
						<h1 class="title1 text-light">Update Trader</h1>
					</div>
					<div>
    </div>                    <div>
    </div>					<div class="mb-5 row">
						<div class="col-lg-12 ">
                            <div class="p-3 card bg-dark">
                            <form action="{{url('update-trader/'.$trader->id)}}" method ="POST" enctype="multipart/form-data">
											{{ csrf_field()}}     
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h5 class="text-light">Trader Name</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->trader_name}}" placeholder="Enter Plan name" type="text" name="trader_name" required>
                                        </div>
                                     <!--   <div class="form-group col-md-6">
                                            <h5 class="text-light">Plan price($)</h5> 
                                            <input class="form-control text-light bg-dark" value="100" placeholder="Enter Plan price" type="text" name="price" required>   
                                            <small class="text-light">This is the maximum amount a user can pay to invest in this plan</small>
                                       </div>	-->
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Trading Minimum amount ($)</h5> 			 
                                             <input placeholder="Enter Plan minimum price" value="{{$trader->trading_min_amount}}" class="form-control text-light bg-dark" type="text" name="trading_min_amount" required>  
                                         
                                       </div>
                                       <div class="form-group col-md-6">
                                             <h5 class="text-light">Trading Maximum amount ($)</h5> 			 
                                             <input class="form-control text-light bg-dark" value="{{$trader->trading_max_amount}}"  type="text" name="trading_max_amount" required> 
                                           
                                       </div>
                                       <div class="form-group col-md-6">
                                            <h5 class="text-light">Active traders</h5> 
                                           <input class="form-control text-light bg-dark" value="{{$trader->active_traders}}"  type="text" name="active_traders" required>   
                                          
                                       </div>
                                      <div class="form-group col-md-6">
                                            <h5 class="text-light">Total coppied traders</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->total_copied_trade}}"  type="text" name="total_copied_trade" required>
                                        </div>
                                      <div class="form-group col-md-6">
                                            <h5 class="text-light">Years of exprience</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->trader_year_of_experience}}"  type="text" name="trader_year_of_experience" required>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <h5 class="text-light">performance</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->performance}}"  type="text" name="performance" required>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <h5 class="text-light">Coppiers ROI</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->copier_roi}}"  type="text" name="copier_roi" required>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <h5 class="text-light">Risk Index</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->risk_index}}"  type="text" name="risk_index" required>
                                        </div>
                                          <div class="form-group col-md-6">
                                            <h5 class="text-light">country</h5>
                                            <input  class="form-control text-light bg-dark" value="{{$trader->trader_country}}"  type="text" name="trader_country" required>
                                        </div>
                                         <div class="form-group col-md-6">
                                            <h5 class="text-light">About</h5>
                                          <!--  <input  class="form-control text-light bg-dark" value="I use Technical and Fundamental analysis ,i open trades manually,using limit orders ,i believe having good money management is a key for long term success. My style of trading is all about money management" type="text" name="about" required>
                                       -->
                                       
                                       
                                       <textarea   rows="4" cols="40" class="form-control text-light bg-dark" value="{{$trader->about_trader}}" name="about_trader" required>
I use Technical and Fundamental analysis ,i open trades manually,using limit orders ,i believe having good money management is a key for long term success. My style of trading is all about money management
</textarea>
                                       
                                        </div>
                                        
                                        
                                        
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Interval</h5> 	
                                           <select class="form-control text-light bg-dark" name="top_up_interval">
                                            <option>{{$trader->top_up_interval}}</option>
                                               <option>Monthly</option>
                                               <option>Weekly</option>
                                               <option>Daily</option>
                                               <option>Hourly</option>
                                               <option>Every 30 Minutes</option>
                                           </select>  
                                           <small class="text-light">This specifies how often the system should add profit(ROI) to user account.</small>    
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Type</h5> 
                                           <select class="form-control text-light bg-dark" name="top_up_type">
                                            <option>{{$trader->top_up_type}}</option>
                                               <option>Percentage</option>
                                               <option>Fixed</option>
                                           </select>  
                                           <small class="text-light">This specifies if the system should add profit in percentage(%) or a fixed amount.</small>   
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Top up Amount (in % or $ as specified above)</h5> 
                                           <input class="form-control text-light bg-dark" value="{{$trader->top_up_amount}}" placeholder="top up amount" type="text" name="top_up_amount" required> 
                                           <small class="text-light">This is the amount the system will add to users account as profit, based on what you selected in topup type and topup interval above. </small>   
                                       </div>
                                       <div class="form-group col-md-6">
                                           <h5 class="text-light">Investment Duration</h5> 
                                           <input class="form-control text-light bg-dark"value="{{$trader->investment_duration}}" placeholder="eg 1 Days, 2 Weeks, 1 Months" type="text" name="investment_duration" required> 
                                           <small class="text-light">This specifies how long the coppid trader will run. Please strictly follow the guide on <a href="" data-toggle="modal" data-target="#durationModal">how to setup investment duration</a> else it may not work. </small> 
                                              
                                       </div>
                                       <div class="form-group col-md-12">
                                       
                                   
                                           <input type="submit" class="btn btn-primary" value="Update Plan">   
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

@include('admin.footer')
				