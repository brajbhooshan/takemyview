<?php include("./class/Auth.php");
	include("./class/Event.php");
	include("./class/Country.php");
	include("./class/Dealer.php");
	include("./class/Waiver.php");
    include("./class/EmailTemplate.php");
    include("./class/Truck.php");
    include("./class/User.php");
    include("./class/SocialMedia.php");
	
    $Event = Event::getInstance();
	$events = $Event->fetch_all();
      //echo "<pre>"; print_r($events);die;  
    $User = User::getInstance();
	$users = $User->fetch_all();

	$Country = Country::getInstance();
	$countries = $Country->get_country_options();
        
	$Dealer = Dealer::getInstance();
	$dealers = $Dealer->get_dealer_options();

	$Waiver = Waiver::getInstance();
	$waivers = $Waiver->get_waiver_options();
     //echo "<pre>"; print_r($waivers);die;  
    $EmailTemplate = EmailTemplate::getInstance();
    $emailtemplates = $EmailTemplate->fetch_all();
    
    $Truck = Truck::getInstance();
    $trucks = $Truck->get_truck_options();

    $SocialMedia = SocialMedia::getInstance();
    $socialmedias = $SocialMedia->fetch_all();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once("head.php"); ?>	
	
	
</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="logo">
						<a href="ReportingDashboard.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="ReportingDashboard.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
								
				</header>



                
                <?php include_once("left_menu.php"); ?>	
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<nav class="navbar user-info-navbar" role="navigation"><!-- User Info, Notifications and Menu Bar -->
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<li>
						<h3 style="margin-top:26px;">
							Create New Event
						</h3>
					</li>
					
				</ul>


                <!-- Right links for user info navbar -->
                <ul class="user-info-menu right-links list-inline list-unstyled">

                    <li>
                        <a href="index.html">
                            <i class="fa-lock"></i>
                            Logout
                        </a>
                    </li>

                </ul>
				
				
			</nav>
			
			<?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){ ?>
			<div class="dx-warning">
				<div>
					<p><?php echo $_SESSION['msg'];?></p>
					
					
				</div>
			</div>
			<?php } 
			unset($_SESSION['msg']);
			?>

            <!-- Form wizard with validation starts here -->
            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    $(".multi-select").multiSelect({
                        afterInit: function()
                        {
                            // Add alternative scrollbar to list
                            this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
                        },
                        afterSelect: function()
                        {
                            // Update scrollbar size
                            this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
                        }
                    });

                    $(".selectboxit").selectBoxIt().on('open', function()
                    {
                        // Adding Custom Scrollbar
                        $(this).data('selectBoxSelectBoxIt').list.perfectScrollbar();
                    });

                    var eventData;
                    var waiverData;
                    var userData;
                    var socialMediaData;
                    var truckData;
                });

            </script>

           <!-- <form role="forl" id="rootwizard" class="form-wizard validate" novalidate>-->
<form id="EventForm" method="post" action="Action.php" class="form-wizard validate" novalidate>
            <ul class="tabs">
                <li class="active">
                    <a href="#fwv-1" data-toggle="tab">
                        Event Details
                        <span>1</span>
                    </a>
                </li>
               <!-- <li>
                    <a href="#fwv-2" data-toggle="tab">
                        Select Waiver
                        <span>2</span>
                    </a>
                </li> -->
                <li>
                    <a href="#fwv-3" data-toggle="tab">
                        Email Templates
                        <span>2</span>
                    </a>
                </li>
               
                <li>
                    <a href="#fwv-4" data-toggle="tab">
                        Users
                        <span>3</span>
                    </a>
                </li>
                <li>
                    <a href="#fwv-5" data-toggle="tab">
                        Social Media
                        <span>4</span>
                    </a>
                </li>
                <li>
                    <a href="#fwv-6" data-toggle="tab">
                        Truck Setup
                        <span>5</span>
                    </a>
                </li>
               
            </ul>

            <div class="progress-indicator">
                <span></span>
            </div>


<script>
	$( document ).ready(function() {	
		$("#createEventButton").click(function(){
			console.log($(this).text());
			//if($(this).text()=="Create"){ console.log("add");
				$( "#EventForm" ).submit();
			//}
					
		});	
	});
</script>

            <div class="tab-content no-margin">

            <!-- Tabs Content -->
            <div class="tab-pane with-bg active" id="fwv-1">
            	
            	<input type="hidden" name="action" value="add">
                <input type="hidden" name="controller" value="event">
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label" for="event_name">Event Name</label>
                            <input class="form-control" name="EventName" id="event_name" data-validate="required" placeholder="Choose a name for this event" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Country</label>

                            <script type="text/javascript">
                                jQuery(document).ready(function($)
                                {
                                    $("#EventCountry").select2({
                                        placeholder: 'Select country...',
                                        allowClear: true,
                                        minimumResultsForSearch: -1, // Hide the search bar
                                        formatResult: function(state)
                                        {
                                            return '<div style="background:url(http://www.geonames.org/flags/x/' + state.id + '.gif) no-repeat center center;background-size:100%;display:inline-block;position:relative;width:20px;height:15px;margin-right: 10px;top:2px;"></div>'
                                            + state.text;
                                        }
                                    }).on('select2-open', function()
                                    {
                                        // Adding Custom Scrollbar
                                        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                                    });
                                });
                            </script>

                            <select class="form-control" id="EventCountry" name="EventCountry">
                                    <option></option>
                                    <?php foreach($countries->Country as $country){?>
                                        <option value="<?php echo $country->CountryID;?>"><?php echo $country->CountryName;?></option>
                                    <?php }?>
                                </select>

                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="street">Street</label>
                            <input class="form-control" name="EventAddressStreet" id="street" data-validate="required" placeholder="Enter the Event's street address" />
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="address_line_2">Address Line 2</label>
                            <input class="form-control" name="EventAddressStreet2" id="address_line_2" placeholder="(Optional) Secondary Address" />
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="control-label" for="city">City</label>
                            <input class="form-control" name="EventAddressCity" id="city" data-validate="required" placeholder="Event city" />
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="state">State</label>

                            <select name="EventAddressState" class="selectboxit" id="state">
                                <optgroup label="United States">
                                        <option value="Alabama">Alabama</option>
                                        <option value="Alaska">Alaska</option>
                                        <option value="Arizona">Arizona</option>
                                        <option value="Arkansas">Arkansas</option>
                                        <option value="California">California</option>
                                        <option value="Colorado">Colorado</option>
                                        <option value="Connecticut">Connecticut</option>
                                        <option value="Delaware">Delaware</option>
                                        <option value="Florida">Florida</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Hawaii">Hawaii</option>
                                        <option value="Idaho">Idaho</option>
                                        <option value="Illinois">Illinois</option>
                                        <option value="Indiana">Indiana</option>
                                        <option value="Iowa">Iowa</option>
                                        <option value="Kansas">Kansas</option>
                                        <option value="Kentucky[C]">Kentucky[C]</option>
                                        <option value="Louisiana">Louisiana</option>
                                        <option value="Maine">Maine</option>
                                        <option value="Maryland">Maryland</option>
                                        <option value="Massachusetts[D]">Massachusetts[D]</option>
                                        <option value="Michigan">Michigan</option>
                                        <option value="Minnesota">Minnesota</option>
                                        <option value="Mississippi">Mississippi</option>
                                        <option value="Missouri">Missouri</option>
                                        <option value="Montana">Montana</option>
                                        <option value="Nebraska">Nebraska</option>
                                        <option value="Nevada">Nevada</option>
                                        <option value="New Hampshire">New Hampshire</option>
                                        <option value="New Jersey">New Jersey</option>
                                        <option value="New Mexico">New Mexico</option>
                                        <option value="New York">New York</option>
                                        <option value="North Carolina">North Carolina</option>
                                        <option value="North Dakota">North Dakota</option>
                                        <option value="Ohio">Ohio</option>
                                        <option value="Oklahoma">Oklahoma</option>
                                        <option value="Oregon">Oregon</option>
                                        <option value="Pennsylvania[E]">Pennsylvania[E]</option>
                                        <option value="Rhode Island[F]">Rhode Island[F]</option>
                                        <option value="South Carolina">South Carolina</option>
                                        <option value="South Dakota">South Dakota</option>
                                        <option value="Tennessee">Tennessee</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Utah">Utah</option>
                                        <option value="Vermont">Vermont</option>
                                        <option value="Virginia[G]">Virginia[G]</option>
                                        <option value="Washington">Washington</option>
                                        <option value="West Virginia">West Virginia</option>
                                        <option value="Wisconsin">Wisconsin</option>
                                        <option value="Wyoming">Wyoming</option>
                                    </optgroup>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label" for="zip">Zip</label>
                            <input class="form-control"  name="EventAddressZip" id="zip" data-mask="*****" data-validate="required" placeholder="Zip Code" />
                        </div>
                    </div>

                </div>
                <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="street1" class="control-label">Event Phone</label>

                                <input type="text" class="form-control" id="EventPhoneEdit" name="EventPhone" placeholder="">
                            </div>

                        </div>
                         <div class="col-md-6">

                            <div class="form-group">
                                <label for="street1" class="control-label">Event Manager</label>

                                <input type="text" class="form-control" id="EventManagerEdit" name="EventManager" placeholder="">
                            </div>

                        </div>
                    </div>
                    <script type="text/javascript">
                    jQuery(document).ready(function($){
	                    $("#EventJumpStart").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#EventJumpStartWaiverDiv").show();
	                    		$("#EventJumpStartWaiverUnderAgeDiv").show();
	                    	}
	                    	else {
	                    		$("#EventJumpStartWaiverDiv").hide();
	                    		$("#EventJumpStartWaiverUnderAgeDiv").hide();
	                    	}
	                    });

	                    $("#EventLeadGen").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#EventLeadGenWaiverDiv").show();
	                    	}
	                    	else {
	                    		$("#EventLeadGenWaiverDiv").hide();
	                    	}
	                    });

	                    $("#EventDemo").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#EventDemoWaiverDiv").show();
	                    		$("#EventDemoPassengerWaiver").show();
	                    	}
	                    	else {
	                    		$("#EventDemoWaiverDiv").hide();
	                    		$("#EventDemoPassengerWaiver").hide();
	                    	}
	                    });

	                    $("#EventTrike").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#TrikeWaiverDiv").show();
	                    		$("#TrikePassengerWaiverDiv").show();
	                    	}
	                    	else {
	                    		$("#TrikeWaiverDiv").hide();
	                    		$("#TrikePassengerWaiverDiv").hide();
	                    	}
	                    });
	                     $("#EventLiveWireJumpStart").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#EventLiveWireJumpStartDiv").show();
	                    		$("#EventLiveWireJumpStartUnderAgeDiv").show();	                    		
	                    	}
	                    	else {
	                    		$("#EventLiveWireJumpStartDiv").hide();
	                    		$("#EventLiveWireJumpStartUnderAgeDiv").hide()
	                    	}
	                    });

	                    $("#EventLivewireLeadGen").click(function(){
	                    	if($(this).prop( "checked")){
	                    		$("#EventLiveWireLeadGenWaiverDiv").show();
	                    	}
	                    	else {
	                    		$("#EventLiveWireLeadGenWaiverDiv").hide();
	                    	}
	                    });
	                });
                    </script>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">    
                            	<label>                       
                                <input type="checkbox" id="EventJumpStart" name="EventJumpStart" placeholder=""> Event Jump Start</label>  
                            </div>
                        </div>
                     	<div class="col-md-4" id="EventJumpStartWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Event Jump Start Waiver</label>
                            <select name="EventJumpStartWaiver" class="selectboxit" id="EventJumpStartWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                        <div class="col-md-4" id="EventJumpStartWaiverUnderAgeDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Event Jump Start Waiver Under Age</label>
                            <select name="EventJumpStartWaiverUnderAge" class="selectboxit" id="EventJumpStartWaiverUnderAge">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">    
                            	<label>                       
                                <input type="checkbox" id="EventLiveWireJumpStart" name="EventLiveWireJumpStart" placeholder="">  LiveWire JumpStart</label>  
                            </div>
                        </div>
                     	<div class="col-md-4" id="EventLiveWireJumpStartDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver"> Waiver</label>
                            <select name="EventLiveWireJumpStartWaiver" class="selectboxit" id="EventLiveWireJumpStartWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                        <div class="col-md-4" id="EventLiveWireJumpStartUnderAgeDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Underage Waiver</label>
                            <select name="EventLiveWireJumpStartUnderAgeWaiver" class="selectboxit" id="EventLiveWireJumpStartUnderAgeWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">
                            	<label>                                 
                                <input type="checkbox" id="EventLivewireLeadGen" name="EventLivewireLeadGen" placeholder="">Event Livewire Lead Gen</label> 
                            </div>
                        </div>
                        <div class="col-md-8" id="EventLiveWireLeadGenWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Lead Gen Waiver</label>
                            <select name="EventLiveWireLeadGenWaiver" class="selectboxit" id="EventLiveWireLeadGenWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">
                            	<label>                                 
                                <input type="checkbox" id="EventLeadGen" name="EventLeadGen" placeholder=""> Event Lead Gen</label> 
                            </div>
                        </div>
                        <div class="col-md-8" id="EventLeadGenWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Event Lead Gen Waiver</label>
                            <select name="EventLeadGenWaiver" class="selectboxit" id="EventLeadGenWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label> 
                                <input type="checkbox" id="EventDemo" name="EventDemo" placeholder=""> Event Demo Registration</label> 
                            </div>
                        </div>
                        <div class="col-md-4" id="EventDemoWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Event Demo Waiver</label>
                            <select name="EventDemoWaiver" class="selectboxit" id="EventDemoWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4" id="EventDemoPassengerWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Passenger Waiver</label>
                            <select name="EventDemoPassengerWaiver" class="selectboxit" id="EventDemoPassengerWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label> 
                                <input type="checkbox" id="EventPRSurvey" name="EventPRSurvey" placeholder=""> Post-Ride Survey</label> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="checkbox">
                                <label> 
                                <input type="checkbox" id="EventTrike" name="EventTrike" placeholder=""> Trike Registration</label> 
                            </div>
                        </div>
                        <div class="col-md-4" id="TrikeWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Trike Waiver</label>
                            <select name="TrikeWaiver" class="selectboxit" id="TrikeWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                     <div class="col-md-4" id="TrikePassengerWaiverDiv" style="display:none;">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Trike Passenger Waiver</label>
                            <select name="TrikePassengerWaiver" class="selectboxit" id="TrikePassengerWaiver">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>
                    </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Dealers</label>


                            <script type="text/javascript">
                                jQuery(document).ready(function($)
                                {
                                    $("#DealerIDEdit").select2({
                                        placeholder: 'Choose the dealer or dealers that are involved in this event.',
                                        allowClear: true
                                    }).on('select2-open', function()
                                    {
                                        // Adding Custom Scrollbar
                                        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                                    });

                                });
                            </script>

                             <select name="DealerID[]" class="form-control" id="DealerIDEdit" multiple>
                                    <option></option>
                                    <optgroup label="Dealers">                                    	 
                                        <?php 
		                            	if(isset($dealers->Success) && $dealers->Success==1){
		                                	foreach ($dealers->Dealers as $key => $dealer) {
		                                		echo '<option value="'.$dealer->DealerID.'">'.$dealer->DealerName.'</option>';
		                                	}
		                                }
		                            	?>
                                    </optgroup>
                                </select>
                            </select>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label class="control-label" for="event_website">Event Website</label>

                            <input type="text" class="form-control" name="EventWebsite" id="event_website" data-validate="required, url" data-message-required="Event Website URL is invalid" placeholder="URL to a website for this Event." />
                        </div>

                    </div>
                </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label class="control-label" for="event_start">Event Start Date</label>

                        <div class="input-group">
                            <input type="text" name="EventStartDate" id="event_start" class="form-control datepicker" data-format="D, dd MM yyyy">

                            <div class="input-group-addon">
                                <a href="#"><i class="linecons-calendar"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">

                    <div class="form-group">
                        <label class="control-label" for="event_end">Event End Date</label>

                        <div class="input-group">
                            <input type="text" name="EventEndDate" id="event_end" class="form-control datepicker" data-format="D, dd MM yyyy">

                            <div class="input-group-addon">
                                <a href="#"><i class="linecons-calendar"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            </div>

            <div class="tab-pane with-bg" id="fwv-2">

                <strong>Add Waiver</strong>
                <br />
                <br />

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Waiver</label>
                            <select name="LegalID" class="selectboxit" id="LegalIDEdit">
                                    <optgroup label="Waivers">                                      
                                        <?php foreach($waivers->Waivers as $waiver){?>
                                            <option value="<?php echo $waiver->WaiverID;?>"><?php echo $waiver->WaiverName;?></option>
                                        <?php }?>
                                    </optgroup>
                            </select>
                        </div>
                    </div>

                </div>               

            </div>

            <div class="tab-pane with-bg" id="fwv-3">

                <strong>Add Email Template</strong>
                <br />
                <br />

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Event Welcome Email Template</label>

                           <select name="EventWelcomeEmail" class="selectboxit" id="EventWelcomeEmailEdit">
                                    <optgroup label="Email Templates">
                                        <?php foreach($emailtemplates->EmailTemplates as $emailtemplate){?>
                                            <option value="<?php echo $emailtemplate->TemplateID;?>"><?php echo $emailtemplate->EmailTemplateSubj;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Event Scheduled Email Template</label>

                           <select name="EventScheduledEmail" class="selectboxit" id="EventScheduledEmailEdit">
                                    <optgroup label="Email Templates">
                                        <?php foreach($emailtemplates->EmailTemplates as $emailtemplate){?>
                                            <option value="<?php echo $emailtemplate->TemplateID;?>"><?php echo $emailtemplate->EmailTemplateSubj;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Event Thanks Email Template</label>

                            <select name="EventTyEmail" class="selectboxit" id="EventTyEmailEdit">
                                    <optgroup label="Email Templates">
                                        <?php foreach($emailtemplates->EmailTemplates as $emailtemplate){?>
                                            <option value="<?php echo $emailtemplate->TemplateID;?>"><?php echo $emailtemplate->EmailTemplateSubj;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="email">Event Pr Email Template</label>

                            <select name="EventPrEmail" class="selectboxit" id="EventPrEmailEdit">
                                    <optgroup label="Email Templates">
                                        <?php foreach($emailtemplates->EmailTemplates as $emailtemplate){?>
                                            <option value="<?php echo $emailtemplate->TemplateID;?>"><?php echo $emailtemplate->EmailTemplateSubj;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>
                        </div>
                    </div>

                </div>

            </div>

           

            <div class="tab-pane with-bg" id="fwv-4">

                <strong>Add Users</strong>
                <br />
                <br />


                <div class="row">

                    <div class="form-group">

                        <div class="col-sm-12">

                            <script type="text/javascript">
                                jQuery(document).ready(function($)
                                {
                                    $("#UserIDEdit").multiSelect({
                                        afterInit: function()
                                        {
                                            // Add alternative scrollbar to list
                                            this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
                                        },
                                        afterSelect: function()
                                        {
                                            // Update scrollbar size
                                            this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
                                        }
                                    });
                                });
                            </script>
                            <select name="UserID[]" class="form-control" id="UserIDEdit" multiple>
                                  
                                    <optgroup label="Please select the users">
                                       <?php foreach($users->Users as $user){?>
                                            <option value="<?php echo $user->UserID;?>"><?php echo $user->UserFullName;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>

                        </div>
                    </div>

                </div>

            </div>

            <div class="tab-pane with-bg" id="fwv-5">

                <strong>Social Media Selection</strong>
                <br />
                <br />

                <div class="row">

                    <div class="col-md-2">
                        <label class="control-label" for="social_media">Name</label>
                    </div>

                    <div class="col-md-9">
                        <div class="form-group">
                            <select name="EventSocial" class="selectboxit" id="EventSocialEdit">
                                    <optgroup label="Saved Social Media Settings">
                                      
                                        <?php 
                                    	if(isset($socialmedias->Success) && $socialmedias->Success==1){
	                                        foreach ($socialmedias->SocialMedias as $skey => $socialmedia) {
	                                        	echo '<option value="'.$socialmedia->SocialID.'">'.$socialmedia->SocialName.'</option>';
	                                        } }?>
                                    </optgroup>
                                </select>
                        </div>
                    </div>

                    

                </div>

                

            </div>

            <div class="tab-pane with-bg" id="fwv-6">

                <strong>Truck Association</strong>
                <br />
                <br />

                <div class="col-sm-12 center-block">

                    <script type="text/javascript">
                        jQuery(document).ready(function($)
                        {
                            $("#TruckIDEdit").multiSelect({
                                afterInit: function()
                                {
                                    // Add alternative scrollbar to list
                                    this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar();
                                },
                                afterSelect: function()
                                {
                                    // Update scrollbar size
                                    this.$selectableContainer.add(this.$selectionContainer).find('.ms-list').perfectScrollbar('update');
                                }
                            });
                        });
                    </script>
                    <select name="TruckID[]" class="form-control" id="TruckIDEdit" multiple>
                                   
                                    <optgroup label="Please Select Truck">
                                        <?php foreach($trucks->Trucks as $truck){?>
                                            <option value="<?php echo $truck->TruckID;?>"><?php echo $truck->TruckName;?></option>
                                        <?php }?>
                                    </optgroup>
                                </select>

                </div>

                 <div class="row">

                    <div class="col-md-12 text-center">                       
                            &nbsp;                       
                    </div>

                </div>

            </div>      


            <!-- Tabs Pager -->

            <ul class="pager wizard">
                <li class="previous">
                    <a href="#"><i class="entypo-left-open"></i> Previous</a>
                </li>

                <li class="next">
                    <a href="#">Next <i class="entypo-right-open"></i></a>
                </li>
                <li class="" id="EndSubmitForm" style="display:none;">
                    <a style="float:right;" href="#">Finish <i class="entypo-right-open"></i></a>
                </li>
            </ul>

            </div>

            </form>

			
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014 
						<strong>NCompassTrac</strong>
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<div id="chat" class="fixed"><!-- start: Chat Section -->
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a  href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		<!-- end: Chat Section -->
		</div>
		
	</div>
	
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>



    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="assets/js/select2/select2.css">
    <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="assets/js/multiselect/css/multi-select.css">
    <link rel="stylesheet" href="assets/js/wysihtml5/src/bootstrap-wysihtml5.css">
    <link rel="stylesheet" href="assets/js/uikit/vendor/codemirror/codemirror.css">
    <link rel="stylesheet" href="assets/js/uikit/uikit.css">
    <link rel="stylesheet" href="assets/js/uikit/css/addons/uikit.almost-flat.addons.min.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
    <script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>

	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>
    <script src="assets/js/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
    <script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>
    <script src="assets/js/select2/select2.min.js"></script>
    <script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
    <script src="assets/js/multiselect/js/jquery.multi-select.js"></script>
    <script src="assets/js/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/datepicker/bootstrap-datepicker.js"></script>
    <script src="assets/js/inputmask/jquery.inputmask.bundle.js"></script>
    <script src="assets/js/formwizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/js/ckeditor/ckeditor.js"></script>
    <script src="assets/js/ckeditor/adapters/jquery.js"></script>
    <!--<script src="assets/js/rwd-table/js/rwd-table.min.js"></script> -->


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>
	 <script type="text/javascript">	 	
        jQuery(document).ready(function($){
        	$("#EndSubmitForm").click(function(){
        		$( "#EventForm" ).submit();
        	});
        	$("li.next").click(function(){        			
				if($("div.tab-content").find(".active").attr("id")=="fwv-5"){	        				
					$("#EndSubmitForm").prev().hide();	        				
					$("#EndSubmitForm").show();	        				
				}  			     			
        	});
    		$(".previous").click(function(){
    			if($.trim($("li.next").text())=="Finish"){     				
    				$("#EndSubmitForm").prev().show();
    				$("#EndSubmitForm").hide();
    			}
    		});
        });
    </script>
</body>
</html>