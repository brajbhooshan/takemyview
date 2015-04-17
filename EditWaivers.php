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
							Manage Waivers
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
			
			<div class="dx-warning hidden">
				<div>
					<h2>How to Include Charts Library in Xenon Theme</h2>
					
					<p>The reason why you don't see charts in this page is because of license restrictions from DevExpress company. <a href="http://js.devexpress.com/DevExtremeWeb/?folder=EULAs" target="_blank">Click here</a> to read license agreement.</p>
					<p>We are not permitted to include the DevExtreme Web Charts JavaScript library in the default download file of Xenon theme, however you can include DevExpress Charts library manually and takes just few minutes:</p>
					
					<ol>
						<li>Download <strong>DevExtreme Web</strong> JavaScript library by clicking <a href="https://go.devexpress.com/DevExpressDownload_DevExtremeWebTrial.aspx" class="text-bold">here</a>. If the link doesn't work, then <a href="http://js.devexpress.com/Buy/" target="_parent">click this one</a> and choose DevExtreme Web package to download.</li>
						<li>Extract the downloaded archive. There you will find <strong>Lib/</strong> folder. <strong>Copy</strong> the folders inside.</li>
						<li><strong>Paste</strong> copied files to <strong>assets/js/devexpress-web-14.1/</strong></li>
						<li>You are all set!</li>
					</ol>
				</div>
			</div>

            <ul class="nav nav-tabs right-aligned"><!-- available classes "right-aligned" -->
                <li><a href="javascript:;" onclick="jQuery('#waiver-modal').modal('show');">
                    <span class="hidden-xs">Add Waiver</span>
                </a>
                </li>
            </ul>

            <div class="panel panel-default">

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label" for="waiver">Select a Waiver to edit</label>

                            <select name="test" class="selectboxit" id="waiver">
                                <optgroup label="Waivers">
                                    <option>Rider Waiver</option>
                                    <option>Passenger Waiver</option>
                                    <option>Guardian Waiver</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">

                            <textarea class="form-control ckeditor" rows="10">
                                &lt;center&gt;&lt;b&gt;Corporate Demo Program, Motorcycle Demonstration Ride&lt;br&gt;
                                Waiver &amp; Release of Liability Agreement&lt;br&gt;
                                For Persons Desiring to Ride a Harley-Davidson Motorcycle&lt;/b&gt;&lt;br&gt;&lt;br&gt;&lt;/center&gt;

                                &lt;b&gt;IMPORTANT:  THIS IS A WAIVER &amp; RELEASE OF LIABILITY AGREEMENT.  PLEASE READ THIS AGREEMENT CAREFULLY BEFORE CLICKING &quot;I AGREE&quot;.&lt;/b&gt;&lt;br&gt;&lt;br&gt;
                                I, [insert name from driver's license], have been given the opportunity to engage in a free demonstration ride (as operator or passenger) on one or more Harley-Davidson motorcycles or trikes (with each such vehicle being referred to herein as a &quot;Motorcycle&quot;).
                                I fully understand and acknowledge that operating or riding on a motorcycle or trike is an activity that has its own unique risks, and that serious injury or even death could result from operating or riding on a Motorcycle through no fault of my own. &lt;br&gt;&lt;br&gt;
                                I acknowledge that portions of the demonstration ride(s) will occur on public streets, open to traffic, and that because of such, I will be exposed to the risks to which motorcyclists on public streets are exposed.  Those risks include, but are not limited to, risks associated with inattentive drivers, drivers who fail to operate safely around motorcyclists, and drivers under the influence of alcohol, drugs or illegal substances.  I acknowledge that my demonstration ride(s) may occur with other operators, some of whom may not be experienced with operating or riding the motorcycle or trike they are riding as part of the demonstration ride, and that there are risks associated with such.  &lt;br&gt;&lt;br&gt;
                                With knowledge of the risks associated with operating or riding a Motorcycle and with each demonstration ride, I am voluntarily participating in the demonstration ride(s).  For and in consideration of the opportunity to engage in a free demonstration ride of one or more Motorcycles, and for other valuable consideration, the receipt and adequacy of which are hereby acknowledged, I hereby, on behalf of myself and my heirs, personal representatives, administrators, executors, successors and assigns (collectively, &quot;Heirs and Assigns&quot;), expressly agree to all of the following terms herein.  I EXPRESSLY AGREE TO ASSUME THE ENTIRE RISK OF ANY ACCIDENTS OR PERSONAL INJURY, INCLUDING PERMANENT DISABILITY, PARALYSIS AND DEATH, THAT I MIGHT SUFFER AS A RESULT OF MY OPERATING OR RIDING ON A MOTORCYCLE, OR OTHERWISE PARTICIPATING IN THE DEMONSTRATION RIDE(S).&lt;br&gt;&lt;br&gt;
                                Without limiting the foregoing, I ASSUME ALL RISKS ARISING FROM MY PARTICIPATION IN THE DEMONSTRATION RIDE(S), INCLUDING, BUT NOT LIMITED TO, ALL RISKS ARISING OUT OF OR RELATING TO THE FOLLOWING:  (i) the condition or safety of any roadways, premises or property on which the Motorcycle is operated; (ii) the use of, or failure to use, any safety devices or safeguards; (iii) the conditions, qualifications, instructions, rules or procedures under which any Motorcycle is used or any demonstration ride is conducted; (iv) the weather conditions during operation of any Motorcycle; (v) the design, manufacture or maintenance of any Motorcycle; and (vi) single and/or multi-vehicle accidents.&lt;br&gt;&lt;br&gt;
                                Furthermore, I hereby RELEASE AND FOREVER DISCHARGE Harley-Davidson, Inc. (&quot;H-D&quot;), each of its affiliated companies and subsidiaries (collectively &quot;Affiliates&quot;), Suddath Relocation Systems of Milwaukee, LLC d/b/a Barrett Moving &amp; Storage (&quot;Barrett&quot;), and each of H-D's and its Affiliates' and Barrett's officers, directors, employees, dealers, distributors, subsidiaries and agents (collectively, the &quot;Released Parties&quot;), from ANY AND ALL NEGLIGENCE AND BREACH OF WARRANTY CLAIMS, DEMANDS, RIGHTS AND CAUSES OF ACTION (collectively, &quot;Claims&quot;) OF ANY KIND WHATSOEVER that I or any of my Heirs and Assigns now have or later may have against any Released Party resulting from, connected with or arising out of my operation of or riding on any Motorcycles, or my participation in any of the demonstration ride(s), regardless of whether such Claims relate to the repair, operation or maintenance of any Motorcycle, or the conditions, rules, qualifications, instructions or procedures under which any Motorcycle is used, or any other cause or matter.&lt;br&gt;&lt;br&gt;
                                I acknowledge and understand that as to the Claims released above, this Agreement EXTENDS TO AND RELEASES AND DISCHARGES ANY AND ALL CLAIMS I or any of my Heirs and Assigns have or later may have against the Released Parties arising out of the demonstration ride(s) or my operation of or riding on any Motorcycle, including without limitation all such Claims resulting from the NEGLIGENCE of any Released Party, or resulting from any BREACH OF ANY EXPRESS OR IMPLIED WARRANTY by any Released Party, and regardless of whether such Claims now exist or hereafter arise, or are known or unknown, contingent or absolute, liquidated or unliquidated, or foreseen or unforeseen, or arise by operation of law or otherwise.  This Agreement does not, however, release:  (i) any claims for harm caused by a Released Party intentionally or recklessly; (ii) claims for workers' compensation benefits (if any) that I or my Heirs and Assigns may have; or (iii) claims that I or my Heirs and Assigns may have (if any) under or against any benefit plans sponsored by my employer, including claims under disability or life insurance plans, resulting from my operation of or riding on any Motorcycle.  I acknowledge that workers' compensation laws may or may not apply to my use of the Motorcycles, depending upon the circumstances.&lt;br&gt;&lt;br&gt;
                                I acknowledge and understand that by my clicking the &quot;I AGREE&quot; button below, I (on my own behalf and on behalf of my Heirs and Assigns) COVENANT AND AGREE NOT TO SUE any or all of the Released Parties for any cause of action released or waived hereby for any injury, death or damage to myself arising out of the demonstration ride(s) or my operation of or riding on any Motorcycle.&lt;br&gt;&lt;br&gt;
                                I confirm that this Agreement is intended to be as broad and inclusive as is permitted by law.  To the extent that the scope of this Agreement is unenforceable in any jurisdiction, said scope will, as to such jurisdiction only, be automatically limited to the extent necessary to make this Agreement enforceable in such jurisdiction, without invalidating any other portion of this Agreement.  I acknowledge I have the right and opportunity to bargain or negotiate the terms of this Agreement, and I hereby waive that right.  &lt;br&gt;&lt;br&gt;
                                By my clicking the &quot;I AGREE&quot; button below, I certify that I have read this Agreement and fully understand it, that I am not relying on any statements or representations of any of the Released Parties, that I have been given the opportunity and sufficient time to read and ask questions regarding this Agreement, and that I understand that by choosing voluntarily to click the &quot;I AGREE&quot; button below I am agreeing to give up important legal rights.  This Agreement sets forth all of the terms between me and H-D regarding the topics addressed herein.  This Agreement may only be modified or terminated with the written consent of me and H-D.
                                ELECTRONIC CONSENT.  This Agreement is an electronic contract.  I understand and agree that by my clicking the &quot;I AGREE&quot; button below, I am providing my electronic consent to this Agreement, and I am (a) confirming the accuracy of all of the statements, acknowledgements, and certifications I am making above, and (b) accepting and agreeing to abide by all of the above releases, assumptions of risk, and other provisions.  I acknowledge that my electronic consent to this Agreement shall be treated in all respects as having the same legal force and effect as if I had signed this Agreement with a handwritten signature.  My electronic consent to this Agreement confirms that I have read this entire Agreement and constitutes my agreement to all of the above provisions.  If I do not agree to this Agreement or these provisions, I understand that I may click the &quot;CANCEL&quot; button to end this transaction.&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt;
                                IMPORTANT:  THIS IS A WAIVER &amp; RELEASE OF LIABILITY AGREEMENT.  PLEASE READ THIS AGREEMENT CAREFULLY BEFORE CLICKING &quot;I AGREE&quot;.
                                I AGREE:  I, [insert name from driver's license], agree to and accept the Agreement set forth
                                above and agree to be bound by all of its releases, assumptions of risk, statements, acknowledgements, certifications and other provisions.&lt;/b&gt;
                            </textarea>

                        </div>
                    </div>

                </div>

            </div>
			
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


    <!-- Region Edit & Create Modal -->
    <div class="modal fade custom-width" id="waiver-modal">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Add Waiver</h4>
                </div>

                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="field-1" class="control-label">Waiver Name</label>

                                <input type="text" class="form-control" id="field-1" placeholder="">
                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">

                                <textarea class="form-control ckeditor" rows="10">

                                </textarea>

                            </div>
                        </div>

                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Create</button>
                </div>
            </div>
        </div>
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

</body>
</html>