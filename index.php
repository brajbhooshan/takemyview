<?php
session_start();
if(($_SESSION['username']))
{
header('Location: AccountList.php');
}
include_once("config.php");
if(isset($_POST['login']))
{
	//print_r($_POST);die("hi");
	$username=$_POST['username'];
	$password=MD5($_POST['passwd']);
	$sql="select * from usertb where username='$username' and password='$password' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	if(($username==$row['username']) and ($password==$row['password']))
	{
		// Set session variables
		$_SESSION["username"] = $username;
		$_SESSION["user_id"] = $row['id'];
		$_SESSION["is_admin"] = $row['is_admin'];
		$_SESSION["password"] = $password;
		header('Location: AccountList.php');
		
	}else{
		//echo "else";
	}
	
//	print_r($_SESSION);
//die("");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once("head.php"); ?>
</head>
<body class="page-body login-page">

	
	<div class="login-container">
	
		<div class="row">
		
			<div class="col-sm-6">
			
				<script type="text/javascript">
					jQuery(document).ready(function($)
					{
                        $.cookie('authorized','no');

						// Reveal Login form
						setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
						
						
						// Validation and Ajax action
						$("form#login").validate({
							rules: {
								username: {
									required: true
								},
								
								passwd: {
									required: true
								}
							},
							
							messages: {
								username: {
									required: 'Please enter your username.'
								},
								
								passwd: {
									required: 'Please enter your password.'
								}
							},
						
						});
						
					});
				</script>
				
				<!-- Errors container -->
				<div class="errors-container">
				
									
				</div>
				
				<!-- Add class "fade-in-effect" for login form effect -->
				<form method="post" role="form" id="login" class="login-form fade-in-effect">
					
					<div class="login-header">
							<img src="assets/images/logo@2x.png" alt="" width="80" />
						

					</div>
	
					
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" class="form-control input-dark" name="username" id="username" autocomplete="off" />
					</div>
					
					<div class="form-group">
						<label class="control-label" for="passwd">Password</label>
						<input type="password" class="form-control input-dark" name="passwd" id="passwd" autocomplete="off" />
					</div>
					<input type="hidden" name="action" value="login">
                	<input type="hidden" name="controller" value="loginauth">
					<div class="form-group">
					<i class="fa-lock"></i><input name="login" type="submit" value="Log In" class="btn btn-dark  btn-block text-left">				
					</div>
					
				</form>
				
			</div>
			
		</div>
		
	</div>
	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/jquery-validate/jquery.validate.min.js"></script>
	<script src="assets/js/toastr/toastr.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>
	<?php if(isset($_SESSION['msg']) && $_SESSION['msg']=="Error") { ?>
	<div id="toast-container" class="toast-top-full-width" aria-live="polite" role="alert">
		<div class="toast toast-error" style="">
			<button class="toast-close-button" role="button">×</button>
			<div class="toast-title">Invalid Login!</div>
			<div class="toast-message">You have entered wrong user credentials, please try again.</div>
		</div>
	</div>
	<?php } unset($_SESSION['msg']); ?>
</body>
</html>