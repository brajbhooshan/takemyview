<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Xenon - Dashboard 2</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
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
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
					
								
				</header>
						
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="opened active">
						<a href="ReportingDashboard.html">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
						<ul>
							<li>
								<a href="ReportingDashboard.html">
									<span class="title">Dashboard 1</span>
								</a>
							</li>
							<li class="active">
								<a href="dashboard-2.html">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
							<li>
								<a href="dashboard-4.html">
									<span class="title">Dashboard 4</span>
								</a>
							</li>
							<li>
								<a href="skin-generator.html">
									<span class="title">Skin Generator</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">Layouts</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">Layout Variants &amp; API</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">Collapsed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-static-sidebar.html">
									<span class="title">Static Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu.html">
									<span class="title">Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-plus-sidebar.html">
									<span class="title">Horizontal &amp; Sidebar Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-click-to-open-subs.html">
									<span class="title">Horizontal Open On Click</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-min.html">
									<span class="title">Horizontal Menu Minimal</span>
								</a>
							</li>
							<li>
								<a href="layout-right-sidebar.html">
									<span class="title">Right Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-chat-open.html">
									<span class="title">Chat Open</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
									<span class="title">Both Menus &amp; Collapsed</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed.html">
									<span class="title">Boxed Layout</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed-horizontal-menu.html">
									<span class="title">Boxed &amp; Horizontal Menu</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">UI Elements</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">Panels</span>
								</a>
							</li>
							<li>
								<a href="ui-buttons.html">
									<span class="title">Buttons</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">Tabs &amp; Accordions</span>
								</a>
							</li>
							<li>
								<a href="ui-modals.html">
									<span class="title">Modals</span>
								</a>
							</li>
							<li>
								<a href="ui-breadcrumbs.html">
									<span class="title">Breadcrumbs</span>
								</a>
							</li>
							<li>
								<a href="ui-blockquotes.html">
									<span class="title">Blockquotes</span>
								</a>
							</li>
							<li>
								<a href="ui-progressbars.html">
									<span class="title">Progress Bars</span>
								</a>
							</li>
							<li>
								<a href="ui-navbars.html">
									<span class="title">Navbars</span>
								</a>
							</li>
							<li>
								<a href="ui-alerts.html">
									<span class="title">Alerts</span>
								</a>
							</li>
							<li>
								<a href="ui-pagination.html">
									<span class="title">Pagination</span>
								</a>
							</li>
							<li>
								<a href="ui-typography.html">
									<span class="title">Typography</span>
								</a>
							</li>
							<li>
								<a href="ui-other-elements.html">
									<span class="title">Other Elements</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-widgets.html">
							<i class="linecons-star"></i>
							<span class="title">Widgets</span>
						</a>
					</li>
					<li>
						<a href="mailbox-main.html">
							<i class="linecons-mail"></i>
							<span class="title">Mailbox</span>
							<span class="label label-success pull-right">5</span>
						</a>
						<ul>
							<li>
								<a href="mailbox-main.html">
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">Tables</span>
						</a>
						<ul>
							<li>
								<a href="tables-basic.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li>
								<a href="tables-responsive.html">
									<span class="title">Responsive Table</span>
								</a>
							</li>
							<li>
								<a href="tables-datatables.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="forms-native.html">
							<i class="linecons-params"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li>
								<a href="forms-native.html">
									<span class="title">Native Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Form Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-input-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-editors.html">
									<span class="title">Editors</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-gallery.html">
							<i class="linecons-beaker"></i>
							<span class="title">Extra</span>
							<span class="label label-purple pull-right hidden-collapsed">New Items</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons-fontawesome.html">
									<span class="title">Icons</span>
									<span class="label label-warning pull-right">4</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons-fontawesome.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-linecons.html">
											<span class="title">Linecons</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-elusive.html">
											<span class="title">Elusive</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-meteocons.html">
											<span class="title">Meteocons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-maps-google.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-maps-google.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-advanced.html">
											<span class="title">Advanced Map</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-vector.html">
											<span class="title">Vector Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login-light.html">
									<span class="title">Login Light</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-center.html">
									<span class="title">Timeline Centerd</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li>
								<a href="blank-sidebar.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li>
								<a href="extra-not-found.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="extra-loader.html">
									<span class="title">Loading Progress</span>
								</a>
							</li>
							<li>
								<a href="extra-page-loading-ol.html">
									<span class="title">Page Loading Overlay</span>
								</a>
							</li>
							<li>
								<a href="extra-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable-lists.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollable.html">
									<span class="title">Scrollable</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
						
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
					
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
							
						<ul class="dropdown-menu messages">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
								
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
									<!-- Repeated -->
									
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
								</ul>
								
							</li>
							
							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
							
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form name="userinfo_search_form" method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								Arlind Nushi
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
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
			<script type="text/javascript">
				jQuery(document).ready(function($)
				{
					if( ! $.isFunction($.fn.dxChart))
						$(".dx-warning").removeClass('hidden');
				});
			</script>
			
			<script type="text/javascript">
				
					jQuery(document).ready(function($)
					{	
							
					if( ! $.isFunction($.fn.dxChart))
						return;
						
					var gaugesPalette = ['#8dc63f', '#40bbea', '#ffba00', '#cc3f44'];
					
						
					// Data Sources for all charts
					var reqs_per_second_data = [
						{ time: new Date("October 14, 2014 04:00:00"), reqs: 69 },
						{ time: new Date("October 14, 2014 05:00:00"), reqs: 95 },
						{ time: new Date("October 14, 2014 06:00:00"), reqs: 35 },
						{ time: new Date("October 14, 2014 07:00:00"), reqs: 49 },
						{ time: new Date("October 14, 2014 08:00:00"), reqs: 48 },
						{ time: new Date("October 14, 2014 09:00:00"), reqs: 20 },
						{ time: new Date("October 14, 2014 10:00:00"), reqs: 35 },
						{ time: new Date("October 14, 2014 11:00:00"), reqs: 129 },
						{ time: new Date("October 14, 2014 12:00:00"), reqs: 36 },
						{ time: new Date("October 14, 2014 13:00:00"), reqs: 40 },
						{ time: new Date("October 14, 2014 14:00:00"), reqs: 51 },
						{ time: new Date("October 14, 2014 15:00:00"), reqs: 53 },
						{ time: new Date("October 14, 2014 16:00:00"), reqs: 150 },
						{ time: new Date("October 14, 2014 17:00:00"), reqs: 190 },
						{ time: new Date("October 14, 2014 18:00:00"), reqs: 54 },
						{ time: new Date("October 14, 2014 19:00:00"), reqs: 195 },
						{ time: new Date("October 14, 2014 20:00:00"), reqs: 12 },
						{ time: new Date("October 14, 2014 21:00:00"), reqs: 151 },
						{ time: new Date("October 14, 2014 22:00:00"), reqs: 134 },
						{ time: new Date("October 14, 2014 23:00:00"), reqs: 63 },
						{ time: new Date("October 15, 2014 00:00:00"), reqs: 168 },
						{ time: new Date("October 15, 2014 01:00:00"), reqs: 190 },
						{ time: new Date("October 15, 2014 02:00:00"), reqs: 172 },
						{ time: new Date("October 15, 2014 03:00:00"), reqs: 133 },
					];
					
					var cpu_usage_data = [
						{ time: new Date("October 14, 2014 04:00:00"), usage: 85 },
						{ time: new Date("October 14, 2014 05:00:00"), usage: 24 },
						{ time: new Date("October 14, 2014 06:00:00"), usage: 20 },
						{ time: new Date("October 14, 2014 07:00:00"), usage: 65 },
						{ time: new Date("October 14, 2014 08:00:00"), usage: 24 },
						{ time: new Date("October 14, 2014 09:00:00"), usage: 91 },
						{ time: new Date("October 14, 2014 10:00:00"), usage: 24 },
						{ time: new Date("October 14, 2014 11:00:00"), usage: 53 },
						{ time: new Date("October 14, 2014 12:00:00"), usage: 43 },
						{ time: new Date("October 14, 2014 13:00:00"), usage: 46 },
						{ time: new Date("October 14, 2014 14:00:00"), usage: 17 },
						{ time: new Date("October 14, 2014 15:00:00"), usage: 90 },
						{ time: new Date("October 14, 2014 16:00:00"), usage: 92 },
						{ time: new Date("October 14, 2014 17:00:00"), usage: 74 },
						{ time: new Date("October 14, 2014 18:00:00"), usage: 58 },
						{ time: new Date("October 14, 2014 19:00:00"), usage: 93 },
						{ time: new Date("October 14, 2014 20:00:00"), usage: 43 },
						{ time: new Date("October 14, 2014 21:00:00"), usage: 76 },
						{ time: new Date("October 14, 2014 22:00:00"), usage: 6 },
						{ time: new Date("October 14, 2014 23:00:00"), usage: 32 },
						{ time: new Date("October 15, 2014 00:00:00"), usage: 88 },
						{ time: new Date("October 15, 2014 01:00:00"), usage: 76 },
						{ time: new Date("October 15, 2014 02:00:00"), usage: 40 },
						{ time: new Date("October 15, 2014 03:00:00"), usage: 34 },
					];
					
					var memory_usage_data = [
						{ time: new Date("October 14, 2014 04:00:00"), used: 836 },
						{ time: new Date("October 14, 2014 05:00:00"), used: 513 },
						{ time: new Date("October 14, 2014 06:00:00"), used: 433 },
						{ time: new Date("October 14, 2014 07:00:00"), used: 498 },
						{ time: new Date("October 14, 2014 08:00:00"), used: 167 },
						{ time: new Date("October 14, 2014 09:00:00"), used: 468 },
						{ time: new Date("October 14, 2014 10:00:00"), used: 830 },
						{ time: new Date("October 14, 2014 11:00:00"), used: 541 },
						{ time: new Date("October 14, 2014 12:00:00"), used: 385 },
						{ time: new Date("October 14, 2014 13:00:00"), used: 231 },
						{ time: new Date("October 14, 2014 14:00:00"), used: 675 },
						{ time: new Date("October 14, 2014 15:00:00"), used: 494 },
						{ time: new Date("October 14, 2014 16:00:00"), used: 608 },
						{ time: new Date("October 14, 2014 17:00:00"), used: 222 },
						{ time: new Date("October 14, 2014 18:00:00"), used: 321 },
						{ time: new Date("October 14, 2014 19:00:00"), used: 964 },
						{ time: new Date("October 14, 2014 20:00:00"), used: 854 },
						{ time: new Date("October 14, 2014 21:00:00"), used: 50 },
						{ time: new Date("October 14, 2014 22:00:00"), used: 847 },
						{ time: new Date("October 14, 2014 23:00:00"), used: 384 },
						{ time: new Date("October 15, 2014 00:00:00"), used: 530 },
						{ time: new Date("October 15, 2014 01:00:00"), used: 469 },
						{ time: new Date("October 15, 2014 02:00:00"), used: 165 },
						{ time: new Date("October 15, 2014 03:00:00"), used: 152 },
					];
						
					// Requests per second gauge
					$('#reqs-per-second').dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 200,
							majorTick: {
								tickInterval: 50
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{
									startValue: 0,
									endValue: 50,
									color: gaugesPalette[0]
								}, {
									startValue: 50,
									endValue: 100,
									color: gaugesPalette[1]
								}, {
									startValue: 100,
									endValue: 150,
									color: gaugesPalette[2]
								}, {
									startValue: 150,
									endValue: 200,
									color: gaugesPalette[3]
								}
							],
						},
						value: 160,
						valueIndicator: {
							offset: 10,
							color: '#2c2e2f',
							spindleSize: 12
						}
					});
					
					// Requests per second chart
					$("#reqs-per-second-chart").dxChart({
						dataSource: reqs_per_second_data,
						commonPaneSettings: {
							border: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						commonSeriesSettings: {
							type: "area",
							argumentField: "time",
							border: {
								color: '#68b828',
								width: 1,
								visible: true
							}
						},
						series: [
							{ valueField: "reqs", name: "Reqs per Second", color: '#68b828', opacity: .5 },
						],
						commonAxisSettings: {
							label: {
								visible: true
							},
							grid: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						argumentAxis: {
							valueMarginsEnabled: false,
							label: {
								customizeText: function (arg) {
									return date('h:i A', arg.value);
								}
							},
						},
						legend: {
							visible: false
						}
					});
					
						
					// CPU Usage
					$('#cpu-usage').dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 100,
							majorTick: {
								tickInterval: 25
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{
									startValue: 0,
									endValue: 25,
									color: gaugesPalette[0]
								}, {
									startValue: 25,
									endValue: 50,
									color: gaugesPalette[1]
								}, {
									startValue: 50,
									endValue: 75,
									color: gaugesPalette[2]
								}, {
									startValue: 75,
									endValue: 100,
									color: gaugesPalette[3]
								}
							],
						},
						value: 99,
						valueIndicator: {
							offset: 10,
							color: '#2c2e2f',
							spindleSize: 12
						}
					});
					
					// CPU Usage chart
					$("#cpu-usage-chart").dxChart({
						dataSource: cpu_usage_data,
						commonPaneSettings: {
							border: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						commonSeriesSettings: {
							type: "area",
							argumentField: "time",
							border: {
								color: '#7c38bc',
								width: 1,
								visible: true
							}
						},
						series: [
							{ valueField: "usage", name: "Capacity used", color: '#7c38bc', opacity: .5 },
						],
						commonAxisSettings: {
							label: {
								visible: true
							},
							grid: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						argumentAxis: {
							valueMarginsEnabled: false,
							label: {
								customizeText: function (arg) {
									return date('h:i A', arg.value);
								}
							},
						},
						legend: {
							visible: false
						}
					});
					
					
						
					// Memory Usage
					$('#memory-usage').dxCircularGauge({
						scale: {
							startValue: 0,
							endValue: 1000,
							majorTick: {
								tickInterval: 250
							}
						},
						rangeContainer: {
							palette: 'pastel',
							width: 3,
							ranges: [
								{
									startValue: 0,
									endValue: 250,
									color: '#40bbea'
								}, {
									startValue: 250,
									endValue: 500,
									color: '#40bbea'
								}, {
									startValue: 500,
									endValue: 750,
									color: '#40bbea'
								}, {
									startValue: 750,
									endValue: 1000,
									color: '#40bbea'
								}
							],
						},
						value: 170,
						valueIndicator: {
							offset: 10,
							color: '#2c2e2f',
							spindleSize: 12
						}
					});
					
					// Memory Usage chart
					$("#memory-usage-chart").dxChart({
						dataSource: memory_usage_data,
						commonPaneSettings: {
							border: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						commonSeriesSettings: {
							type: "area",
							argumentField: "time",
							border: {
								color: '#40bbea',
								width: 1,
								visible: true
							}
						},
						series: [
							{ valueField: "used", name: "Megabytes occupied", color: '#40bbea', opacity: .5 },
						],
						commonAxisSettings: {
							label: {
								visible: true
							},
							grid: {
								visible: true,
								color: '#f5f5f5'
							}
						},
						argumentAxis: {
							valueMarginsEnabled: false,
							label: {
								customizeText: function (arg) {
									return date('h:i A', arg.value);
								}
							},
						},
						legend: {
							visible: false
						}
					});
					
					
					// Combine charts for filtering, grouped by time
					var all_data_sources = [];
					
					$.map(reqs_per_second_data, function(arg, i)
					{
						all_data_sources.push({
							time: 					arg.time,
							requestsPerMinute: 		reqs_per_second_data[i].reqs,
							cpuUsage: 				cpu_usage_data[i].usage,
							memoryUsed: 			memory_usage_data[i].used
						});
					});
					
					
					// Range Filter
					$("#range-chart").dxRangeSelector({
						dataSource: all_data_sources,
						size: {
							height: 140
						},
						chart: {
							series: [
								{ argumentField: "time", valueField: "requestsPerMinute", color: '#68b828', opacity: .65 },
								{ argumentField: "time", valueField: "cpuUsage", color: '#7c38bc', opacity: .65 },
								{ argumentField: "time", valueField: "memoryUsed", color: '#40bbea', opacity: .65 }
							]
						},
						selectedRange: {
							startValue: all_data_sources[4].time,
							endValue: all_data_sources[14].time
						},
						selectedRangeChanged: function(e)
						{
							var filter = {
								reqsPerMinuteData: [],
								cpuUsageData: [],
								memoryUsageData: []
							};
							
							$.map(all_data_sources, function(arg, i)
							{
								if(date("U", e.startValue) <= date("U", arg.time) && date("U", e.endValue) >= date("U", arg.time))
								{
									filter.reqsPerMinuteData.push({
										time: arg.time,
										reqs: arg.requestsPerMinute
									});
									
									filter.cpuUsageData.push({
										time: arg.time,
										usage: arg.cpuUsage
									});
									
									filter.memoryUsageData.push({
										time: arg.time,
										used: arg.memoryUsed
									});
								}
							});
							
							$('#reqs-per-second-chart').dxChart('instance').option('dataSource', filter.reqsPerMinuteData);
							$('#cpu-usage-chart').dxChart('instance').option('dataSource', filter.cpuUsageData);
							$('#memory-usage-chart').dxChart('instance').option('dataSource', filter.memoryUsageData);
						}
					});
					
					
					
					// Resize charts
					$(window).on('xenon.resize', function()
					{
						$("#range-chart").data("dxRangeSelector").render();
						
						$("#reqs-per-second-chart").data("dxChart").render();
						$("#cpu-usage-chart").data("dxChart").render();
						$("#memory-usage-chart").data("dxChart").render();
						
						$("#reqs-per-second").data("dxCircularGauge").render();
						$("#cpu-usage").data("dxCircularGauge").render();
						$("#memory-usage").data("dxCircularGauge").render();
					});
				});
			</script>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<!--Realtime result filtering by range-->
				</div>
				<div class="panel-body">
					
					<div class="row">
						<div class="col-sm-12">
							<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<!--Requests per second-->
				</div>
				<div class="panel-body">
					
					<div class="row">
						<div class="col-sm-12">
							<div id="container3" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

						</div>
						
					</div>
					
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<!--CPU usage in %-->
				</div>
				<div class="panel-body">
					
					<div class="row">
						<div class="col-sm-12">
							<div id="3dcontainer" ></div>
							<!--<div id="sliders">
	<table>
		<tr><td>Alpha Angle</td><td><input id="R0" type="range" min="0" max="45" value="15"/> <span id="R0-value" class="value"></span></td></tr>
	    <tr><td>Beta Angle</td><td><input id="R1" type="range" min="0" max="45" value="15"/> <span id="R1-value" class="value"></span></td></tr>
	</table>
</div> -->
						</div>						
					</div>
					
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<!--Memory Consumption, Mb-->
				</div>
				<div class="panel-body">
					
					<div class="row">
						<div class="col-sm-12">
							<div id="container1" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
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
						<strong>Xenon</strong> 
						theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a>
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
	



	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/xenon-widgets.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/knockout-3.1.0.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/globalize.min.js"></script>
	<script src="assets/js/devexpress-web-14.1/js/dx.chartjs.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-3d.js"></script>

<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Current Brand'
        },
        legend: {
            enabled: true,
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            labelFormatter: function() {
                return this.name + ' ' + this.y + '%';
            }
        }, 
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                },
                colors: ['#0000FF','#FF0000','#008000', '#A52A2A', '#ff0000', '#800080', '#FF00FF','#00FFFF'],
                showInLegend: true
            }
        },
         credits: {
      		enabled: false
	  	},
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['Yamaha', 61],
                ['Honda', 5],
                /*{
                    name: 'Kawasaki',
                    y: 4,
                    sliced: true,
                    selected: true
                },*/
                ['Kawasaki',4],
                ['KTM',1],
                ['Suzuki', 0],
                ['Victory',1],
                ['No Bike',20],
                ['Other',4]
            ]
        }]
    });

	$('#container1').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Intent To Purchased'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                },
                colors: ['#00FFFF', '#008000', '#ff0000', '#FFFF00', '#FF00FF'],
                showInLegend: true
            }
        },
        legend: {
            enabled: true,
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            labelFormatter: function() {
                return this.name + ' ' + this.y + '%';
            }
        }, 
         credits: {
      		enabled: false
	  	},
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
                ['0-3 Months', 1],
                ['3-6 Months', 4],
                /*{
                    name: 'Kawasaki',
                    y: 4,
                    sliced: true,
                    selected: true
                },*/
                ['6-12 Months', 6],
                ['1 Years', 55],
                ['None', 30],
            ]
        }]
    });

	// Set up the chart
    var chart = new Highcharts.Chart({
        chart: {
            renderTo: '3dcontainer',
            type: 'column',
            margin: 75,
            options3d: {
                enabled: true,
                alpha: 15,
                beta: 15,
                depth: 50,
                viewDistance: 25
            }
        },
        title: {
            text: 'Age Breakdown'
        },
        xAxis: {                   
            categories: ['21-30 Yrs', '31-40 Yrs', '41-50 Yrs', '51-60 Years', '61+'],
            labels: {
                rotation: -45,
                align: 'right',
                formatter: function () {
                    return '<span style="font-size: 18px;">' + this.value + '</span>';
                }
            }
        },
        subtitle: {
            text: ''
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },

        plotOptions: {
            column: {
                depth: 25
            }
        },
         credits: {
      		enabled: false
	  	},
        series: [{
        	showInLegend: false,
            data: [0,13,24,34,25]
        }]
    });

    function showValues() {
        $('#R0-value').html(chart.options.chart.options3d.alpha);
        $('#R1-value').html(chart.options.chart.options3d.beta);
    }

    // Activate the sliders
    $('#R0').on('change', function () {
        chart.options.chart.options3d.alpha = this.value;
        showValues();
        chart.redraw(false);
    });
    $('#R1').on('change', function () {
        chart.options.chart.options3d.beta = this.value;
        showValues();
        chart.redraw(false);
    });

    showValues();

    $('#container3').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Bikes Ridden'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Bolt',
                'Bolt R-Spec',
                'EJR',
                'EJR E',
                'EZ09',
                'EZ07',
                'EZ6R',
                'R1',
                'R6',
                'Raider',
                'Stratoliner Dlx',
                'Stryker',
                'Vmax',
                'Vstar 950T',
                'Vstar 13000',
                'Tenere',
                'Tenere E',
              ]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            },
             
        },
        credits: {
      		enabled: false
	  	},
        series: [{ 
        	showInLegend: false,
            name: '',
            data: [
            	{y: 5, color: '#BFBFBF'},
            	{y: 14, color: '#BFBFBF'},
            	{y: 16, color: '#0000FF'},
            	{y: 14, color: '#0000FF'},
            	{y: 10, color: '#0000FF'},
            	{y: 11, color: '#0000FF'},
            	{y: 1, color: '#0000FF'},
            	{y: 5, color: '#0000FF'},
            	{y: 2, color: '#0000FF'},
            	{y: 27, color: '#BFBFBF'},
            	{y: 19, color: '#BFBFBF'},
            	{y: 17, color: '#BFBFBF'},
            	{y: 20, color: '#BFBFBF'},
            	{y: 7, color: '#BFBFBF'},
            	{y: 17, color: '#BFBFBF'},
            	{y: 10, color: '#0000FF'},
            	{y:9, color: '#0000FF'},
            	]

        }]
    });
});

</script>
</body>
</html>