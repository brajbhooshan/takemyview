<nav class="navbar user-info-navbar" role="navigation"><!-- User Info, Notifications and Menu Bar -->
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
					<!---	<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>  --->
					</li>
					
					
					
					
					<li>
						<h3 style="margin-top:26px;">
							
						</h3>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
						<!--	
						<form name="userinfo_search_form" method="get" action="">
					
                        <form name="userinfo_search_form" method="get" action="extra-search.html"> 
                        <input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						-->
					</li>
					
					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<?php
								
								echo ucfirst($_SESSION['username']);?>
								<i class="fa-angle-down"></i>
							</span>
						</a>
						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
						<!--	<li>
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
							</li>-->
							<li class="last">
								<a href="logout.php">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
					
					<li>
					<!---	<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>  -->
					</li>
					
				</ul>
				
			</nav>
			