<?php 
include_once("config.php");
//test for view thats why... getting account detail
/*	$mysql2=mysql_query("select * from account");
	$count=mysql_num_rows($mysql2);
	$result=mysql_fetch_array($mysql2);
	echo "<pre>"; print_r($result);die("hello");
*/
session_start();
if(!(($_SESSION['username'])))
{
header('Location: index.php');
}
if(isset($_POST['submit']))
{ //die("submit button is press Here !");
	$mysql=mysql_query("update  account set first='$_POST[first]',last='$_POST[last]',mobile='$_POST[mobile]',alternate='$_POST[alternate]',email='$_POST[email]',raddress='$_POST[residential]',street='$_POST[street]', country='$_POST[country]',zip='$_POST[zip]',usertype='$_POST[usertype]',officename='$_POST[office]',servicetype='$_POST[servicetype]',product='$_POST[plan]',avi='$_POST[antivirus]',addcost='$_POST[addcost]',pccover='$_POST[pccov]',pcname='$_POST[pcname]',pcip='$_POST[pcip]',pdate='$_POST[purdate]',exdate='$_POST[expdate]',accstatus='$_POST[accstatus]',issdesc='$_POST[description]',remarks='$_POST[remark]',acc='$_POST[acc]',sex='$_POST[sex]' where user_id='$_POST[user_id]' ");
if(!$mysql)
	die("error".mysql_error());
else
		?><script>alert("Your account Is successfully Created");</script> <?php
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
<?php include_once("header.php");?>	
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
										<input class="form-control" id="field-2" name="first2" value="<?php if(isset($_POST['first2'])) echo $_POST['first2']; else echo ""; ?>" placeholder="Enter First Name" type="text">
                                 
									</div>
								</div>
								<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Last Name </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="field-2" name="last2" value="<?php if(isset($_POST['last2'])) echo $_POST['last2']; else echo ""; ?>" placeholder="Enter Last Name" type="text">
									</div>
								</div>
								<div class="form-group-separator"></div>

									<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">Purchase Date </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="pdate" data-mask="date" value="<?php if(isset($_POST['purdate2'])) echo $_POST['purdate2']; else echo ""; ?>" name="purdate2" type="text" placeholder="Enter Purchase Date">
									</div>
								</div>
								<div class="form-group-separator"></div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">Email Address </label>
									
									<div class="col-sm-4">
										<input class="form-control" id="field-5" value="<?php if(isset($_POST['email2'])) echo $_POST['email2']; else echo ""; ?>" name="email2" placeholder="Enter Email Address" type="text">
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
							//$result=mysql_fetch_array($mysql2);
							//print_r($result);die;	
							}
						}
						//select record if email is true
					else{	
							$mysql2=mysql_query("select * from account where email = '$email2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
							$count=mysql_num_rows($mysql2);
							//$result=mysql_fetch_array($mysql2);
						
						//print_r($result);die;	
						}
					}
					//select record if porches date is true		
				else{
						$mysql2=mysql_query("select * from account where pdate = '$purdate2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
						$count=mysql_num_rows($mysql2);
						//$result=mysql_fetch_array($mysql2);
						//print_r($result);die;	
					}
				}
				//select record if last name is true
			else{
					$mysql2=mysql_query("select * from account where last = '$last2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
					$count=mysql_num_rows($mysql2);
					//$result=mysql_fetch_array($mysql2);
					//print_r($result);die;	
				}
			}
			//select record if first name is true
			
		else{
				$mysql2=mysql_query("select * from account where first = '$first2' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
				$count=mysql_num_rows($mysql2);
				//$result=mysql_fetch_array($mysql2);
				//echo "<pre>";print_r($result);die("hi");
			}
		}
		//select record if account is true 
	else{
				$mysql2=mysql_query("select * from account where acc_no = '$acnumber' and user_id='".$_SESSION['user_id']."'" ) or die(mysql_error());
				$count=mysql_num_rows($mysql2);
				//$result=mysql_fetch_array($mysql2);
				//echo "<pre>";print_r($result);die("hi");		
		}
		
		if($count){
	
?>
<form role="form" class="form-horizontal acountform" id="" method="post">
			<div class="row">
			
					</div>	
                    
                    <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Account Retrieval</h3>

                    <div class="panel-options">
                      <!--=  <a href="#" data-toggle="panel">
                            <span class="collapse-icon">&ndash;</span>
                            <span class="expand-icon">+</span>
                        </a>-->
                    </div>
                </div>
                <div class="panel-body">                   

                    <table class="table table-bordered table-striped" id="userTable">
                        <thead>
                        <tr>
                            
                            <th>Account Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Plans</th>
                            <th>Total Cost</th>
			    <th>Edit</th>
			    
                        </tr>
                        </thead>

                        <tbody class="middle-align">
                        
                        <?php while($row=mysql_fetch_array($mysql2)){?>
                                           
                        <tr>
                            <td><?php echo $row['acc_no']?></td>
                            <td><?php echo $row['first']?></td>
                            <td><?php echo $row['last']?></td>
                            <td><?php echo $row['mobile']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['product']?></td>
                            <td><?php echo $row['totalcost']?></td>
			    <td><a href="AccountUpdation.php?acc_no=<?php echo $row['acc_no']?>" role="button"  class= "btn btn-success" >Edit</a></td>
			            </tr>
                        
                        <?php }?>

                        </tbody>
                    </table>

                </div>
            </div>					
</form>
<?php }

else{
	
	?> <script>alert("Please Enter Currect Value For Searching.. !");</script><?php
	
	}

 }?>
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