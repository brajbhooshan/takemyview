<?php 
include_once("config.php");
session_start();
if(!(($_SESSION['username'])))
{
header('Location: index.php');
}
if(isset($_POST['submit']))
{
	//echo "<pre>";print_r($_REQUEST);die("heer");
	//$acc_no=rand(11111,99999);
	//$mysql=mysql_query("insert into account(first,last,mobile,alternate,email,address,raddress,street, country,zip,dob,age,usertype,officename,servicetype,product,avi,addcost,pccover,pcname,pcip,pdate,exdate,accstatus,issdesc,remarks,acc,sex) values('$_POST[first]','$_POST[last]','$_POST[mobile]','$_POST[alternate]','$_POST[email]','$_POST[address]','$_POST[residential]','$_POST[street]','$_POST[country]','$_POST[zip]','$_POST[dob]','$_POST[age]','$_POST[usertype]','$_POST[office]','$_POST[servicetype]','$_POST[plan]','$_POST[antivirus]','$_POST[addcost]','$_POST[pccov]','$_POST[pcname]','$_POST[pcip]','$_POST[purdate]','$_POST[expdate]','$_POST[accstatus]','$_POST[description]','$_POST[remark]','$_POST[acc]','$_POST[sex]')");
	
	$mysql=mysql_query("
		insert into account set 
		first='".$_REQUEST['FirstName']."',
		last='".$_REQUEST['LastName']."',
		mobile='".$_REQUEST['MobileNumber']."',
		alternate='".$_REQUEST['AlternateNumber']."',
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
		product='".$_REQUEST['plan']."',
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
		remarks='".$_REQUEST['remarks']."',
		user_id='".$_SESSION['user_id']."'
	") or die(mysql_error());
	
if(!$mysql)
	die("error".mysql_error());
else
		?><script>alert("Your account Is successfully Created"); window.location.assign("http://takemyviews.com/CRM/AccountList.php"); </script> <?php
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script type="text/javascript">
	 $(document).ready(function() {
		$(".total_calc").change(function(){
    		var plan=parseFloat($("#plan").val());
    		if(($("#antivirus").val())==1)
	    		var anti=69.99;
	    	else
	    		var anti=0;
    		 add_cost=parseFloat($("#addcost").val());
    		//add_cost=0;
    		var total=plan+anti+add_cost;
    		$("#totalcost_display").text(total);
    		$("#totalcost").val(total);
		});
	});
	</script>
    
    
    
    
    <!-----  this is code for jquery calender  - --->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#pdate" ).datepicker();
$( "#exdate" ).datepicker();
$("#dob").datetimepicker();
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
							<a href="#">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="#">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="#" class="btn btn-primary">Edit Profile</a>
								<a href="#" class="btn btn-success">Upgrade</a>
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
						<a href="#" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a href="#" class="logo-collapsed">
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
			<!---<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>---->
                        <!---<a href="#" data-toggle="" data-animate="">
							<i class="linecons-cog"></i>
						</a> --->
    
    					</div>
					
								
				</header>
					
					<?php include_once("left_menu.php"); ?>	
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<?php include_once("header.php"); ?>	

		<form name="customer_reg" method="post" action="">	
			<div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">First Name *</label>

                                <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="" required>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Last Name *</label>

                                <input type="text" class="form-control" id="LastName" name="LastName" placeholder="" required>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Mobile Number *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="MobileNumber" placeholder="" required>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Alternate Number</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="AlternateNumber" placeholder="" >
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Email Address *</label>

                                <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                            </div>

                        </div>
                        </div>
                        <div class="row">
                		<div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Residential Address (House No) *</label>

                                <input type="text" class="form-control" id="raddress" name="raddress" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Street Name *</label>

                                <input type="text" class="form-control" id="street" name="street" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Country *</label>

                                <input type="text" class="form-control" id="country" name="country" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Zip Code</label>

                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" >
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">DOB</label>

                                <input type="text" class="form-control" id="dob" name="dob" placeholder="" >
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Age</label>

                                <input type="text" class="form-control" id="age" name="age" placeholder="" >
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Sex</label>

                                <div class="radio" >
									<label >
										<input name="sex" <?php if(isset($_POST['sex']) && $_POST['sex']==1) echo "checked='checked'"; else echo ""; ?> placeholder="Enter Sex" type="radio" value="1">
											Male
									</label>

									<label>
										<input <?php if(isset($_POST['sex']) && $_POST['sex']==2) echo "checked='checked'"; else echo ""; ?> name="sex" placeholder="Enter Sex" type="radio" value="2">
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
                                <select class="form-control" id="field-13" name="usertype" required>
									<option value="">Select </option>
									<?php $usersql=mysql_query("select * from usertype");
									while($user=mysql_fetch_array($usersql)){?>
										<option value="<?php echo $user['id']?>" <?php if(isset($_POST['usertype']) && $_POST['usertype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['usertype']?></option>
									<?php }?>
                               </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Office Name</label>
                                <input type="text" class="form-control" id="officename" name="officename" placeholder="" >
                            </div>
                        </div>                  
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Service Type *</label>
                                <select class="form-control" name="servicetype" required>
									<option value="0">Select </option>
									<?php $usersql=mysql_query("select * from servicetype");
										while($user=mysql_fetch_array($usersql)){?>
										<option value="<?php echo $user['id']?>" <?php if(isset($_POST['servicetype']) && $_POST['servicetype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['servicetype']?></option>
									<?php }?>
								</select>
                            </div>
                        </div>                                        
                    </div>

                    <div class="row">
                		<div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Product/Plan *</label>
                                <select class="form-control total_calc" name="plan" id="plan" required >
									<option value="0">Select </option>
										<?php $usersql=mysql_query("select * from plan");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['price']?>" <?php if(isset($_POST['plan']) && $_POST['plan']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['plan']?></option>
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
											<option value="<?php echo $user['id']?>" <?php if(isset($_POST['antivirus']) && $_POST['antivirus']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['antivirus']?></option>
										<?php }?>
								</select>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Additional Cost</label>
                                <input type="text" class="form-control total_calc" id="addcost" name="addcost" placeholder="" value="0" >
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Total Cost</label>
                                <span id="totalcost_display" class="form-control"></span>
                                <input type="text" class="form-control" id="totalcost" name="totalcost" style="display:none" placeholder="" >
                            </div>

                        </div>
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Covered *</label>
                                <input type="text" class="form-control" id="pccover" name="pccover" placeholder="" required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Name</label>
                                <input type="text" class="form-control" id="pcname" name="pcname" placeholder="" >
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC IP</label>
                                <input type="text" class="form-control" id="pcip" name="pcip" placeholder="" >
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Purchase Date *</label>
                                <input type="text" class="form-control" id="pdate" name="pdate" placeholder=""  required>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Expiration Date</label>
                                <input type="text" class="form-control" id="exdate" name="exdate" placeholder="" >
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Account Status</label>
                                <select class="form-control" name="accstatus">
									<option>Select </option>
										<?php $usersql=mysql_query("select * from accstatus");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($_POST['accstatus']) && $_POST['accstatus']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['accstatus']?></option>
										<?php }?>
								</select>
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Acc</label>
                                <input type="text" class="form-control" id="acc" name="acc" placeholder="" >
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Issue Description *</label>
                                <textarea class="form-control" rows="5" id="issdesc" name="issdesc" required></textarea>
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Remarks</label>
                                <textarea class="form-control" rows="5" id="remarks" name="remarks" ></textarea>
                            </div>

                        </div>                                             
                    </div>
	
					<div class="row">
						<div class="col-sm-12">	
							<input type="submit" name="submit" id="submit" class="btn btn-secondary" value="Submit">	
							<a href="AccountCreation.php" class="btn btn-secondary"> Reset <i class="fa-angle-right"></i></a>				
						</div>
					</div>
			</form>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
	 		<?php include_once("footer.php"); ?>	

		</div>
			<!-- conversation template -->
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
