<?php
include_once("config.php");
session_start();
//check session 
if(!(($_SESSION['username'])))
{
header('Location: index.php');
}
	//$sql="select * from usertb where username='".$_SESSION['username']."' and is_admin='".$_SESSION['is_admin']."' ";
	$sql="select * from usertb where username='".$_SESSION['username']."' and id='".$_SESSION['user_id']."' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	//echo md5($row['password']);die;
	//print_r($row);  die("hiuiii");
	

if(isset($_POST['Update'])){
	
	
	if($_POST['username']==$row['username'] and md5($_POST['password'])==$row['password']){
		
					if($_POST['npassword']==$_POST['cpassword']){ 
			
								$mysql=mysql_query("UPDATE usertb SET  password='".md5($_POST['npassword'])."' where username='".$_POST['username']."' ") or die(mysql_error());
								?><script> alert("Password Successfully updated");
									 window.location.replace("http://takemyviews.com/CRM/ChangePassword.php");
								</script> <?php
						}
					else{
								?><script> alert("Confirm wrong pass ");
		 							window.location.replace("http://takemyviews.com/CRM/ChangePassword.php");
								</script> <?php
						}
	}
else{	
			?><script> alert("Please Enter Currect Username And Password");
			 window.location.replace("http://takemyviews.com/CRM/ChangePassword.php");
			</script> <?php
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>ROS Research</title>

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
    
      <!-----  this is code for jquery calender  - --->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#pdate" ).datepicker();
$( "#exdate" ).datepicker();
});
</script>
    
	<!------------------->
	
	
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
							<a href="">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="" class="btn btn-primary">Edit Profile</a>
								<a href="" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							
						</h4>
						
						<ul class="list-unstyled">
							<li>
								
							</li>
							<li>
													</li>
							<li>
								
							</li>
							<li>
								
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							
						</h4>
						
						<ul class="list-unstyled">
							<li>
								
							</li>
							<li>
								
							</li>
							<li>
								
							</li>
							<li>
								
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
						<a href="" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="" class="logo-collapsed">
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
					<!---	<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a> -->
					</div>
				</header>
					<?php include_once("left_menu.php"); ?>	
			</div>
		</div>
		<div class="main-content">
	<?php include_once("header.php"); ?>	
			<form name="frm" method="post">
            <div class="container">
			<div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">User Name *</label>
                             <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" value="" required>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Current Password *</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Current Password" value=""required>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">New Password *</label>
                                <input type="password" class="form-control" id="npassword" name="npassword" placeholder="Enter New Password" value=""required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Confirm Password *</label>
                                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter Confirm Password" value="" required>
                            </div>
                        </div>
                    </div>
			<div class="row">
				<div class="col-sm-12">					
					<input name="Update" value="Update" type="submit" class="btn btn-secondary">
						
					
					<a href="" class="btn btn-secondary"> Reset <i class="fa-angle-right"></i></a>				
				</div>
			</div>
            </div>
</form>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<?php include("footer.php"); ?>
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
				
			
	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/multiselect/css/multi-select.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/moment.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/datepicker/bootstrap-datepicker.js"></script>
	<script src="assets/js/timepicker/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/colorpicker/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="assets/js/tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="assets/js/typeahead.bundle.js"></script>
	<script src="assets/js/handlebars.min.js"></script>
	<script src="assets/js/multiselect/js/jquery.multi-select.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>