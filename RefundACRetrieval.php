<?php 
include_once("config.php");
session_start();
if(!(($_SESSION['username'])))
{
header('Location: index.php');
}
if(isset($_POST['save']))
{	
	
	//UPDATE MyGuests SET lastname='Doe' WHERE id=2
	
	 $mysql_update=mysql_query("UPDATE account SET refund_flag='yes' WHERE acc_no='".$_POST['acc']."' ");
	 if($mysql_update){
	 
		 $query="INSERT INTO `refund` (`first`, `last`, `user_id`, `mobile`, `alternate`, `email`, `residential`, `street`, `country`, `zip`, `dob`, `age`, `sex`, `usertype`, `office`, `servicetype`, `plan`, `antivirus`, `addcost`, `total`, `pccov`, `pcip`, `expdate`, `accstatus`, `acc`, `description`, `remark`, `canceldate`, `reason`, `refund`, `refundstatus`, `refdate`) VALUES ('".$_POST['first']."', '".$_POST['last']."', '".$_POST['user_id']."', '".$_POST['mobile']."', '".$_POST['alternate']."', '".$_POST['email']."', '".$_POST['residential']."', '".$_POST['street']."', '".$_POST['country']."', '".$_POST['zip']."', '".$_POST['dob']."', '".$_POST['age']."', '".$_POST['sex']."', '".$_POST['usertype']."', '".$_POST['office']."', '".$_POST['servicetype']."', '".$_POST['plan']."', '".$_POST['antivirus']."', '".$_POST['addcost']."', '".$_POST['total']."', '".$_POST['pccov']."', '".$_POST['pcip']."', '".$_POST['expdate']."', '".$_POST['accstatus']."', '".$_POST['acc']."', '".$_POST['description']."', '".$_POST['remark']."', '".$_POST['canceldate']."', '".$_POST['reason']."', '".$_POST['refund']."', '".$_POST['refundstatus']."', '".$_POST['refdate']."')";
	 	$mysql=mysql_query($query);
	// echo "<pre>"; print_r($query);
	 //die(" Refund AC Retrieval  functionality Here  !");
			if(!$mysql){
				die("error".mysql_error());	
			}
			else{
				?><script>alert("Your account Is successfully ");</script> <?php
			}
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
$( "#refdate" ).datepicker();
$("#canceldate").datepicker();
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
						<!--<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
                        <a href="#" data-toggle="" data-animate="">
							<i class="linecons-cog"></i>
						</a> -->
					</div>
					
								
				</header>
					
					<?php include_once("left_menu.php"); ?>	
						
			</div>
			
		</div>
		
		<div class="main-content">
					
		<?php include_once("header.php"); ?>	

			
				
			
			
			<form role="form" class="form-horizontal acountform" id="" method="post">
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">Customer Account Number </label>
									
									<div class="col-sm-4">
										<input class="form-control"  value="" name="acnumber" placeholder="Enter Account Number" type="text">
									</div>
									</div>
									<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">First Name </label>
									
									<div class="col-sm-4">
										<input list="fist2" name="first2" placeholder="Enter First Name">
                                  <?php $firstname=mysql_query("select * from account"); while($result_firstname=mysql_fetch_array($firstname)){  ?>
                                        <datalist id="fist2">
    										<option value="<? echo $result_firstname['first']; ?>">
    											</datalist>
                                        
                                      <?php   } ?>
									</div>
								</div>
								<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Last Name </label>
									
									<div class="col-sm-4">
										<input class="form-control"  name="last2" value="" placeholder="Enter Last Name" type="text">
									</div>
								</div>
								<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Purchase Date </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="pdate" data-mask="pdate" value="" name="purdate2" type="text" placeholder="Enter Purchase Date">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Email Address </label>
									
									<div class="col-sm-4">
										<input class="form-control"  value="" name="email2" placeholder="Email Address" type="text">
									</div>
									
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">Mobile Number </label>
									
									<div class="col-sm-4">
										<input class="form-control"  name="mobile2" value="" placeholder="Enter Mobile Number" type="text">
									</div>
										<div class="form-group-separator"></div>
									<div class="form-group-separator"></div>
									<div class="form-group-separator"></div>
									<div class="form-group"><div class="col-sm-2">
										
									</div>
								<div class="col-sm-2">
										<input class="form-control btn btn-secondary" value="Search" name="search" type="submit">
									</div>
								
										<label class="col-sm-8 control-label" for="field-3"> </label>
									
								</div>
							
								</div>
								
								</form>
			
			
			
										</form>
<?php if(isset($_POST['search'])){ 
					$acnumber =$_POST['acnumber'];
					$first2   =$_POST['first2'];
					$last2    =$_POST['last2'];
					$purdate2 =$_POST['purdate2'];
					$email2   =$_POST['email2'];
					$mobile2  =$_POST['mobile2'];
					
		if($acnumber=="")
		{
			
			if($first2=="")
			{
				
				
				if($last2=="")
				{
					
					if($purdate2=="")
					{
						if($email2=="")
						{
							if($mobile2=="")
							{
							?><script>
							alert("Please Enter Search Value !");
							</script><?php
							exit();
							}
							//select record mobile2 is true 
						else{	
							$mysql2=mysql_query("select * from account where mobile = '$mobile2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
							$count=mysql_num_rows($mysql2);
							$result=mysql_fetch_array($mysql2);
							//print_r($result);die;	
							}
						}
						//select record if email is true
					else{	
							$mysql2=mysql_query("select * from account where email = '$email2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
							$count=mysql_num_rows($mysql2);
							$result=mysql_fetch_array($mysql2);
						
						//print_r($result);die;	
						}
					}
					//select record if porches date is true		
				else{
						$mysql2=mysql_query("select * from account where pdate = '$purdate2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
						$count=mysql_num_rows($mysql2);
						$result=mysql_fetch_array($mysql2);
						//print_r($result);die;	
					}
				}
				//select record if last name is true
			else{
					$mysql2=mysql_query("select * from account where last = '$last2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
					$count=mysql_num_rows($mysql2);
					$result=mysql_fetch_array($mysql2);
					//print_r($result);die;	
				}
			}
			//select record if first name is true
			
		else{
				$mysql2=mysql_query("select * from account where first = '$first2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
				$count=mysql_num_rows($mysql2);
				$result=mysql_fetch_array($mysql2);
				//echo "<pre>";print_r($result);die("hi");
			}
		}
		//select record if account is true 
	else{
				$mysql2=mysql_query("select * from account where acc_no = '$acnumber' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
				$count=mysql_num_rows($mysql2);
				$result=mysql_fetch_array($mysql2);
				//echo "<pre>";print_r($result);die("hi");		
		}
		if($result){
			if($result['refund_flag']!='yes'){
	
?>	
	<form role="form" class="form-horizontal acountform" id="" method="post">
			<div class="row">
			<div class="col-md-6 ">
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">
											<span aria-hidden="true">×</span>
											<span class="sr-only">Close</span>
										</button>
										
									Account Updation Form
									</div>
								</div>
					<div class="col-md-6"></div>
</div>						
			<div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">First Name *</label>

                                <input type="text" class="form-control" id="FirstName" value="<?php if(isset($result['first'])) echo $result['first']; else echo ""; ?>" name="first" placeholder="">
 <input type="hidden" class="form-control" id="user_id" value="<?php if(isset($result['user_id'])) echo $result['user_id']; else echo ""; ?>" name="user_id" placeholder="">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Last Name *</label>

                                <input type="text" class="form-control" id="LastName" name="last" value="<?php if(isset($result['last'])) echo $result['last']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Mobile Number *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="mobile" value="<?php if(isset($result['mobile'])) echo $result['mobile']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Alternate Number</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="alternate" value="<?php if(isset($result['alternate'])) echo $result['alternate']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Email Address *</label>

                                <input type="text" class="form-control" id="MobileNumber" value="<?php if(isset($result['email'])) echo $result['email']; else echo ""; ?>" name="email" placeholder="">
                            </div>

                        </div>
                        </div>
                        <div class="row">
                		<div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Residential Address (House No) *</label>

                                <input type="text" class="form-control" id="MobileNumber" name="residential" value="<?php if(isset($result['raddress'])) echo $result['raddress']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Street Name *</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="street" value="<?php if(isset($result['street'])) echo $result['street']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Country *</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="country" value="<?php if(isset($result['country'])) echo $result['country']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Zip Code</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="zip" value="<?php if(isset($result['zip'])) echo $result['zip']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">DOB</label>

                                <input type="text" class="form-control" id="MobileNumber" data-mask="date" name="dob"  value="<?php if(isset($result['dob'])) echo $result['dob']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Age</label>

                                <input type="text" class="form-control" id="AlternateNumber" name="age" placeholder=" Enter Age" value="<?php if(isset($result['age'])) echo $result['age']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="nickname" class="control-label">Sex</label>

                               <div class="radio">
											<label >
												<input name="sex" <?php if(isset($result['sex']) && $result['sex']==1) echo "checked='checked'"; else echo ""; ?> placeholder="Enter Sex" type="radio" value="1">
												Male
											</label>
										</div>
										<div class="radio">
											<label>
												<input <?php if(isset($result['sex']) && $result['sex']==2) echo "checked='checked'"; else echo ""; ?> name="sex" placeholder="Enter Sex" type="radio" value="2">
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
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($result['usertype']) && $result['usertype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['usertype']?></option>
											<?php }?>
										</select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Office Name</label>
                                <input type="text" class="form-control" id="AlternateNumber"  value="<?php if(isset($result['officename'])) echo $result['officename']; else echo ""; ?>" name="office" placeholder="Office Name">
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
											<option value="<?php echo $user['id']?>" <?php if(isset($result['servicetype']) && $result['servicetype']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['servicetype']?></option>
											<?php }?>
										</select>
                            </div>
                        </div>                                        
                    </div>

                    <div class="row">
                		<div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Product/Plan *</label>
                                <select class="form-control" name="plan">
											<option value="">Select </option>
											<?php $usersql=mysql_query("select * from plan");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($result['product']) && $result['product']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['plan']?></option>
											<?php }?>
										</select>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Antivirus Installation</label>
                               <select class="form-control" name="antivirus">
											<option value="">Select </option>
											<?php $usersql=mysql_query("select * from antivirus");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($result['avi']) && $result['avi']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['antivirus']?></option>
											<?php }?>
										</select>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Additional Cost</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="addcost" value="<?php if(isset($result['addcost'])) echo $result['addcost']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Total Cost</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="total" value="<?php if(isset($result['totalcost'])) echo $result['totalcost']; else echo ""; ?>"placeholder="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Covered *</label>
                                <input type="text" class="form-control" id="MobileNumber" value="<?php if(isset($result['pccover'])) echo $result['pccover']; else echo ""; ?>" name="pccov" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC Name</label>
                                <input type="text" class="form-control" id="AlternateNumber"value="<?php if(isset($result['pcname'])) echo $result['pcname']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">PC IP</label>
                                <input type="text" class="form-control" id="AlternateNumber" name="pcip" value="<?php if(isset($result['pcip'])) echo $result['pcip']; else echo ""; ?>" placeholder="">
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Purchase Date *</label>
                                <input type="text" class="form-control" id="pdate" value="<?php if(isset($result['pdate'])) echo $result['pdate']; else echo ""; ?>" placeholder="Purchase Date">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Expiration Date</label>
                                <input type="text" class="form-control" id="exdate" value="<?php if(isset($result['exdate'])) echo $result['exdate']; else echo ""; ?>" data-mask="date" name="expdate" placeholder="Expiration Date">
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Account Status</label>
                                <select class="form-control" name="accstatus">
											<option>Select </option>
											<?php $usersql=mysql_query("select * from accstatus");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($result['accstatus']) && $result['accstatus']==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['accstatus']?></option>
											<?php }?>
										</select>
                            </div>
                        </div>                       
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Acc</label>
                                <input type="text" class="form-control" id="MobileNumber" name="acc" value="<?php if(isset($result['acc_no'])) echo $result['acc_no']; else echo ""; ?>" placeholder="">
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Issue Description *</label>
                                <textarea class="form-control" rows="5" id="RestrictComment" name="description"><?php if(isset($result['issdesc'])) echo $result['issdesc']; else echo ""; ?></textarea>
                            </div>

                        </div>                                             
                    </div>
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Remarks</label>
                                <textarea class="form-control" rows="5" id="RestrictComment" name="remark"><?php if(isset($result['remarks'])) echo $result['remarks']; else echo ""; ?></textarea>
                            </div>

                        </div>                                             
                    </div>
                     <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Cancellation Date</label>
                                <input type="text" class="form-control" id="canceldate" name="canceldate" value="" placeholder="Cancellation Date">
                            </div>

                        </div>                                             
                    </div>	
                    <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Reason of Cancellation</label>
                                <textarea class="form-control" rows="5" id="RestrictComment" name="reason" placeholder="Enter Reason of Cancellation"1></textarea>
                            </div>

                        </div>                                             
                    </div>	
                       <div class="row">
                		<div class="col-md-12">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Refund</label>
                        		<select name="refund">
                                <option>select refund</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                </select>        
                              </div>
						 </div>                                             
                    </div>	
                    
                       <div class="row">
                		<div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Refund Status</label>
                        		<select name="refundstatus">
                                <option>select status</option>
                                <option value="1">Refund Processed</option>
                                <option value="2">In Progress</option>
                                <option value="3">Not Entitled</option>
                                </select>        
                              </div>
						 </div>          
                         <div class="col-md-6">
                            <div class="form-group">
                                <label for="nickname" class="control-label">Refund Date</label>
                        		<input type="text" class="control-label" id="refdate" name="refdate"placeholder="Refund Date" />
                              </div>
						 </div>                                             
                    </div>	
			<div class="row">
				<div class="col-sm-12">		
<input type="submit" name="save"  class="btn btn-secondary" value="Save" />	
<input type="reset" name="reset" onClick="" class="btn btn-secondary" value="Reset" />			
								
				</div>
			</div>
</form>
<?php } else{ ?> <script> alert(" This account number is already exist ! Please enter Another  "); </script> <?php } }else{?> <script> alert(" Please enter Currect Value for Searching  "); </script> <?php }}?>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<?php include("footer.php"); ?>
		</div>
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
