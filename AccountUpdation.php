<?php
include_once("config.php");
session_start();
//check session 
if(!(($_SESSION['username'])))
{
header('Location: index.php');
}
if(isset($_REQUEST['acc_no']))
{
	//echo $_REQUEST['id'];
	$sql="select * from account where acc_no='".$_REQUEST['acc_no']."'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
//	echo '<pre>';print_r($row);die;

}
if(isset($_POST['Update']))
{
	//echo '<pre>';print_r($_POST);die;
	$mysql=mysql_query("
		UPDATE account SET  
		first='".$_REQUEST['first']."',
		last='".$_REQUEST['last']."',
		mobile='".$_REQUEST['mobile']."',
		alternate='".$_REQUEST['alternate']."',
		email='".$_REQUEST['email']."',
		raddress='".$_REQUEST['raddress']."',
		street='".$_REQUEST['street']."',
		country='".$_REQUEST['country']."',
		zip='".$_REQUEST['zip']."',
		dob='".$_REQUEST['dob']."',
		age='".$_REQUEST['age']."',
		sex='".$_REQUEST['sex']."',
		usertype='".$_REQUEST['usertype']."',
		officename='".$_REQUEST['officename']."',
		servicetype='".$_REQUEST['servicetype']."',
		product='".$_REQUEST['product']."',
		avi='".$_REQUEST['antivirus']."',
		addcost='".$_REQUEST['addcost']."',
		totalcost='".$_REQUEST['totalcost']."',
		pccover='".$_REQUEST['pccover']."',
		pcname='".$_REQUEST['pcname']."',
		pcip='".$_REQUEST['pcip']."',
		pdate='".$_REQUEST['pdate']."',
		exdate='".$_REQUEST['exdate']."',
		accstatus='".$_REQUEST['accstatus']."',
		acc='".$_REQUEST['acc']."',
		issdesc='".$_REQUEST['issdesc']."',
		remarks='".$_REQUEST['remarks']."'
		where acc_no='".$_REQUEST['acc_no']."'
	") or die(mysql_error());
	?>
	<script>
		 window.location.replace("http://takemyviews.com/CRM/AccountList.php");
	</script>
	<?
	//header('Location: http://www.example.com/');
	//header( 'Location: AccountList.php' ) ;
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

			
			<!--<div class="page-title">
				
				<div class="title-env">
					<h1 class="title">Customer Form</h1>
					<!--<p class="description">Custom form elements using Bootstrap and jQuery plugins</p>
				</div>
				
					<!--<div class="breadcrumb-env">
					
								<ol class="breadcrumb bc-1" >
									<li>
							<a href="ReportingDashboard.html"><i class="fa-home"></i>Home</a>
						</li>
								<li>
						
										<a href="forms-native.html">Forms</a>
								</li>
							<li class="active">
						
										<strong>Advanced Plugins</strong>
								</li>
								</ol>
								
				</div>
					
			</div>-->
			
			
			
			
			<form name="frm" method="post">
			<div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">First Name *</label>

                                <input type="text" class="form-control" id="FirstName" name="first" placeholder="" value="<?php echo $row['first']?>">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Last Name *</label>

                                <input type="text" class="form-control" id="LastName" name="last" placeholder="" value="<?php echo $row['last']?>">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Mobile Number *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="mobile" placeholder="" value="<?php echo $row['mobile']?>">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Alternate Number</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="alternate" placeholder="" value="<?php echo $row['alternate']?>">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Email Address *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="email" placeholder="" value="<?php echo $row['email']?>">
                            </div>

                        </div>
                        </div>
                        <div class="row">
                		<div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Residential Address (House No) *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="raddress" placeholder="" value="<?php echo $row['raddress']?>">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Street Name *</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="street" placeholder="" value="<?php echo $row['street']?>">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Country *</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="country" placeholder="" value="<?php echo $row['country']?>">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Zip Code</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="zip" placeholder="" value="<?php echo $row['zip']?>">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">DOB</label>

                                <input type="text" class="form-control" id="dob" name="dob" placeholder="" value="<?php echo $row['dob']?>">
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Age</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="age" placeholder="" value="<?php echo $row['age']?>">
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
				
				
                                <label for="nickname" class="control-label">Sex</label>
				
				<div class="radio">
					<label >
						<input name="sex" <?php if($row['sex']==1) echo "checked='checked'"; else echo ""; ?> placeholder="Enter Sex" type="radio" value="1">
							Male
					</label>
	
					<label>
						<input <?php if($row['sex']==2) echo "checked='checked'"; else echo ""; ?> name="sex" placeholder="Enter Sex" type="radio" value="2">
							Female
					</label>
	
				</div>
                                
                            </div>

                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">User Type *</label>
                                <select class="form-control" id="field-13" name="usertype">
					<option value="">Select </option>
					<?php $usersql=mysql_query("select * from usertype");
					while($user=mysql_fetch_array($usersql)){
						?>
						<option value="<?php echo $user['id']?>" <?php if($row['usertype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['usertype']?></option>
					<?php }?>
				</select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Office Name</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="officename" placeholder="" value="<?php echo $row['officename']?>">
                            </div>
                        </div>                  
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Service Type *</label>
                                <select class="form-control" name="servicetype">
					<option value="">Select </option>
						<?php $usersql=mysql_query("select * from servicetype");
						while($user=mysql_fetch_array($usersql)){?>
						<option value="<?php echo $user['id']?>" <?php if($row['servicetype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['servicetype']?></option>
						<?php }?>
				</select>
                            </div>
                        </div>                                        
                    </div>

                    <div class="row">
                		<div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Product/Plan *</label>
                                <select class="form-control total_calc" name="product" id="plan">
					<option value="0">Select </option>
						<?php $usersql=mysql_query("select * from plan");
							while($user=mysql_fetch_array($usersql)){
								//echo '<pre>';print_r($user);die("here");
								?>
							
							<option value="<?php echo $user['price']?>" <?php if($row['product']==$user['price']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['plan']?></option>
						<?php }?>
				</select>
			    </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Antivirus Installation</label>
                                <select class="form-control total_calc" name="antivirus" id="antivirus">
					<option value="0">Select </option>
						<?php $usersql=mysql_query("select * from antivirus");
							while($user=mysql_fetch_array($usersql)){?>
							<option value="<?php echo $user['id']?>" <?php if($row['avi']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['antivirus']?></option>
						<?php }?>
				</select>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Additional Cost</label>
                                <input type="text" class="form-control" id="addcost" name="addcost" placeholder="" value="<?php echo $row['addcost']?>">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Total Cost</label>
                                <span id="totalcost_display" class="form-control"></span>
                                <input type="text" class="form-control" id="totalcost" name="totalcost" style="display:none" placeholder="" value="<?php echo $row['totalcost']?>">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Covered *</label>
                                <input type="text" class="form-control" id="MobileNumber" name="pccover" placeholder="" value="<?php echo $row['pccover']?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Name</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="pcname" placeholder="" value="<?php echo $row['pcname']?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC IP</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="pcip" placeholder="" value="<?php echo $row['pcip']?>">
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Purchase Date *</label>
                                <input type="text" class="form-control" id="pdate" name="pdate" placeholder="" value="<?php echo $row['pdate']?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Expiration Date</label>
                                <input type="text" class="form-control" id="exdate" name="exdate" placeholder="" value="<?php echo $row['exdate']?>">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Account Status</label>
				<select class="form-control" name="accstatus">
					<option>Select </option>
					<?php $usersql=mysql_query("select * from accstatus");
						while($user=mysql_fetch_array($usersql)){?>
						<option value="<?php echo $user['id']?>" <?php if($row['accstatus']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['accstatus']?></option>
					<?php }?>
				</select>
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Acc</label>
                                <input type="text" class="form-control" id="MobileNumber" name="acc" placeholder="" value="<?php echo $row['acc']?>">
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Issue Description *</label>
                                <textarea class="form-control" rows="5" id="RestrictComment" name="issdesc" value=""> <?php echo $row['issdesc']?></textarea>
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Remarks</label>
                                <textarea class="form-control" rows="5" id="RestrictComment" name="remarks" value=""><?php echo $row['remarks']?></textarea>
                            </div>

                        </div>                                             
                    </div>
			
			
			
			
			
			
			<div class="row">
				<div class="col-sm-12">					
					<input name="Update" value="Update" type="submit" class="btn btn-secondary">
						
					
					<a href="" class="btn btn-secondary"> Reset <i class="fa-angle-right"></i></a>				
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
	<script type="text/javascript">
	 $(document).ready(function() {
		$(".total_calc").change(function(){
    		var plan=parseFloat($("#plan").val());
		if(($("#antivirus").val())==1)
	    		var anti=69.99;
	    	else
	    		var anti=0;
    		 add_cost=parseFloat($("#addcost").val());
    		//alert(add_cost);
		//add_cost=0;
    		var total=plan+anti+add_cost;
    		$("#totalcost_display").text(total);
    		$("#totalcost").val(total);
		});
	});
	</script>
</script>
