<?php include("./class/Auth.php"); ?>
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
							Import Vehicles
						</h3>
					</li>
					
				</ul>


                <!-- Right links for user info navbar -->
                <ul class="user-info-menu right-links list-inline list-unstyled">

                    <li>
                        <a href="logout.php">
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
<form id="VehicleForm" method="post" action="UploadAction.php" class="form-wizard validate" novalidate>
            <ul class="tabs">
                <li class="active">
                    <a href="#fwv-1" data-toggle="tab">
                        Event Details
                        <span>1</span>
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

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="event_name">Upload file</label>
                            <input style="padding-top:3%;padding-bottom:6%;" class="form-control" type="file" name="EventName" id="event_name" data-validate="required" placeholder="Choose a name for this event" onchange="" />
                        </div>
                    </div>

<script type="text/javascript">
	jQuery(document).ready(function(){
       		$('#event_name').on('change', function() {
       		var file_data = $('#event_name').prop('files')[0];   
    		var form_data = new FormData();                  
    		form_data.append('file', file_data)
    		form_data.append('action', 'upload')
    		console.log(form_data); 
    		$.ajax({
                url: 'uploadVehicle.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                	$("#filename").val(php_script_response);
                    //alert(php_script_response); // display response from the PHP script, if any
                    jQuery('#modal-1').modal('show', {backdrop: 'fade'});
                }
    		 });
		}); 
       });
     </script>      		
               </div>

               <!-- Tabs Pager -->

       <!--      <ul class="pager wizard">
                <li class="previous">
                    <a href="#" onclick=""><i class="entypo-left-open"></i> Uplaod</a>
                </li>

                <li class="next">
                    <a href="#">Next <i class="entypo-right-open"></i></a>
                </li>
                <li class="" id="EndSubmitForm" style="display:none;">
                    <a style="float:right;" href="#">Finish <i class="entypo-right-open"></i></a>
                </li>
            </ul> -->

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

	<!-- Modal 1 (Basic)-->
	<div class="modal fade" id="modal-1">
		<div class="modal-dialog">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Import Vehicles</h4>
				</div>
				<input type="hidden" name="filename" id="filename" value="" />
				<div class="modal-body">
					ARE YOU SURE YOU WANT TO CLEAR ALL VEHICLES AND UPLOAD THIS LIST?
					<div style="text-align:center;display:none;" id="ajaxLoad">
						<img src="assets/images/ajax-loader.gif">
					</div>
				</div>

				
				<div class="modal-footer">
					<button type="button" class="btn btn-white" data-dismiss="modal" onclick="return DeletUploadedFile();">NO</button>
					<button type="button" class="btn btn-info" id="AjaxReadXls" onclick="javascript:;">YES</button>
				</div>
			</div>
		</div>
	</div>
	<form method="post" action="Action.php" id="ReadExl">
				<input type="hidden" name="action" value="add">
                <input type="hidden" name="controller" value="importvehicles">
                <input type="hidden" id="EventEditID" name="EventID" value="">
	</form>
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
<script>
function DeletUploadedFile()
{
	$.ajax({
                url: 'uploadVehicle.php', // point to server-side PHP script 
                dataType: 'JSON',  // what to expect back from the PHP script, if anything
                data:{ action:'delete',fileName:$("#filename").val()},                     
                type: 'post',
                success: function(php_script_response){
                    //alert(php_script_response); // display response from the PHP script, if any
                    window.location.reload(true);
                   return php_script_response;
                }
    		 });
	return false;
}

function readExcelSheet(){
	//$("#ReadExl").submit();
	//$("#ajaxLoad").parent().text('');
	$("#ajaxLoad").show();
	$.ajax({
                url: 'uploadVehicle.php', // point to server-side PHP script 
                dataType: 'JSON',  // what to expect back from the PHP script, if anything
                data:{ action:'read',fileName:$("#filename").val()},                     
                type: 'post',
                async: false,
               // beforeSend: function(){
               // },          
               // success: function(response){
                	//console.log("complete");
                	//window.location.reload(true);
                   //return php_script_response;
                    //alert(php_script_response); // display response from the PHP script, if any
                   //return php_script_response;
                //}
	 }).done(function() {
			console.log("done");
	});
}
</script>


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
        	$("#AjaxReadXls").click(function(){
        		$("#ajaxLoad").show();
        		$.ajax({
    				url: 'uploadVehicle.php',
    				dataType: 'JSON',
    			 	data:{ action:'read',fileName:$("#filename").val()},
    			 	type: 'post',
            		async: true,
        		}).done(function() {
					console.log("done");
				}) .fail(function() {
					console.log( "error" );
				})
				.always(function() {
					window.location.reload(true);
				});
        	});
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