<?php include_once("config.php");
session_start();
if(!(($_SESSION['username']))){
header('Location: index.php');
}

//Account Deactivate Functionality over here
if(isset($_POST['Update']))
{ 
 		//echo "<pre>"; print_r($_POST);die();
		$user_id=$_POST['user_id'];
		$deactivate=$_POST['deactivate'];
		$deadate=$_POST['deadate'];
		$accstatus=$_POST['accstatus'];
		$description=$_POST['description'];
		$Refund=$_POST['Refund'];
		$acc_no=$_POST['acc_no'];
		
		//check iff radio button DEACTIVATE is YES or CHECKED by USER
		if($deactivate=='yes'){
					
					//"UPDATE account SET deactivate='$deactivate' WHERE user_id='$user_id'"
					$mysql_update=mysql_query("UPDATE account SET deactivate='$deactivate' WHERE acc_no='$acc_no' ");
					if($mysql_update){
					
					$mysql=mysql_query("INSERT INTO `deactivate` (`user_id`, `deactivate`, `deadate`, `accstatus`, `description`, `Refund`, `acc_no`) VALUES ( '$user_id', '$deactivate', '$deadate', '$accstatus', '$description', '$Refund', '$acc_no')");
					
					if(!$mysql){
						die("error".mysql_error());
					}
				else{
						?><script>alert("Your account Is successfully Deactivate"); </script> <?php
					}
			}
	
		}
		else{
			
				?> <script>alert(" Please checked DEACTIVATE button .... ");</script><?php
			
			}
}
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ROS Research</title>
	<?php include_once("head.php"); ?>	
    
    
      <!-----  this is code for jquery calender  - --->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
$(function() {
$( "#pdate" ).datepicker();
$( "#exdate" ).datepicker();
$( "#deadate" ).datepicker();
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
							<span></span>
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
						</a>-->
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
										<input class="form-control" id="field-1" value="<?php if(isset($_POST['acnumber'])) echo $_POST['acnumber']; else echo ""; ?>" name="acnumber" placeholder="Enter Account Number" type="text">
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
									<label class="col-sm-2 control-label" for="field-2">First Name </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="field-2" name="last2" value="<?php if(isset($_POST['last2'])) echo $_POST['last2']; else echo ""; ?>" placeholder="Enter Last Name" type="text">
									</div>
								</div>
								<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Purchase Date </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="pdate" data-mask="pdate" value="<?php if(isset($_POST['purdate2'])) echo $_POST['purdate2']; else echo ""; ?>" name="purdate2" type="text" placeholder="Enter Purchase Date">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Email Address </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="field-5" value="<?php if(isset($_POST['email2'])) echo $_POST['email2']; else echo ""; ?>" name="email2" placeholder="Email Address" type="text">
									</div>
									
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">Mobile Number </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="field-3" name="mobile2" value="<?php if(isset($_POST['mobile2'])) echo $_POST['mobile2']; else echo ""; ?>" placeholder="Enter Mobile Number" type="text">
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
			
			if($result['deactivate']!='yes'){
				?>
<form role="form" class="form-horizontal acountform" id="deactivatefrm" method="post">
			<div class="container">
						<div class="row">
                        	<div class="col-md-4">
							    <div class="form-group">
                                		<div class="radio">
											<label>
												<input name="deactivate" placeholder="Deactivate" type="radio" value="yes">
												Deactivate
                                                </label>
                                                <input type="hidden" class="form-control" id="user_id" value="<?php if(isset($result['user_id'])) echo $result['user_id']; else echo ""; ?>" name="user_id" placeholder="">
                                                <input class="form-control" id="field-1" value="<?php if(isset($result['acc_no'])) echo $result['acc_no']; else echo ""; ?>" name="acc_no" placeholder="Enter Account Number" type="hidden">
										</div>
								</div>
	                        </div>
                        </div>
        	      		<div class="row">
        					<div class="col-md-4">
                            	<div class="form-group">
                                	<label for="nickname" class="control-label">Deactivation Date</label>
                                	<input type="text" class="form-control" id="deadate" value="" data-mask="date" name="deadate" placeholder="Deactivation Date">
                            	</div>
                        	</div>
                        	<div class="col-md-4">
                            	<div class="form-group">
                                	<label for="nickname" class="control-label">Account Status</label>
                                	<select class="form-control" name="accstatus" >
											<option>Select </option>
											<?php $usersql=mysql_query("select * from accstatus");
											while($user=mysql_fetch_array($usersql)){?>
											<option value="<?php echo $user['id']?>" <?php if(isset($result['accstatus']) && 3==$user['id']) echo "selected='selected'"; else echo ""; ?>><?php echo $user['accstatus']?></option>
											<?php }?>
									</select>
                            	</div>
                        	</div>                       
                    	</div>
                    	<div class="row">
                			<div class="col-md-12">
                            	<div class="form-group">
                                	<label for="nickname" class="control-label">Reason of Deactivation *</label>
                                	<textarea class="form-control" rows="5" id="description" name="description"><?php if(isset($result['issdesc'])) echo $result['issdesc']; else echo ""; ?></textarea>
                            	</div>
                        	</div>                                             
                    	</div>
                         <div class="row">
                         	 <div class="col-md-4">
								   <div class="form-group">
                                		<label>Refund : </label>
                                        <select name="Refund" value="Refund">
                                        <option>Select Refund </option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                        </select>
										</div>
						            </div>
				        		</div>
                       <div class="row">
							<div class="col-sm-12">	
                            <div class="form-group">	
								<input type="submit" name="Update"  class="btn btn-secondary" value="Update" />	
								<input type="reset" name="reset"  class="btn btn-secondary" value="Reset" onclick="getElementById('deactivatefrm').innerHTML=''; " />			
							</div>
                            </div>
						</div>
                  </div>
</form>
<?php } else{ ?> <script> alert(" This account number is deactivated .  "); </script> <?php } }else{?> <script> alert(" Please enter Currect Value for Searching   "); </script> <?php }} ?>
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
