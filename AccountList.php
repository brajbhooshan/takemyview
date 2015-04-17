<?php
include_once("config.php");
session_start();
if(!($_SESSION['username']))
{
header('Location: index.php');
}
//echo '<pre>';print_r($_SESSION);die;

	//for admin
	if($_SESSION['is_admin']==1)
	{
	$sql="select * from account";
	}
	//for user
	else{
	$sql="select * from account where user_id='".$_SESSION["user_id"]."'";
	}
$result=mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>ROS Research</title>
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
						<!---<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
                        <a href="#" data-toggle="" data-animate="">
							<i class="linecons-cog"></i>
						</a>---->
					</div>
					
								
				</header>
					
					<?php include_once("left_menu.php"); ?>	
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<?php include_once("header.php"); ?>	
			
			<div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Account</h3>
				       <div class="panel-options">
                        <a href="excel_test.php?a=<?php echo 'a'; ?>" align="center" role="button"  class= "btn btn-success">Excel</a>
                   			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="csv_test.php?CSV=<?php echo 'a'; ?>"  role="button"  class= "btn btn-success">CSV</a>
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
			    <th>Delete</th>
			
                        </tr>
                        </thead>

                        <tbody class="middle-align">
                        
                        <?php while($row=mysql_fetch_array($result)){?>
                                           
                        <tr>
                            <td><?php echo $row['acc_no']?></td>
                            <td><?php echo $row['first']?></td>
                            <td><?php echo $row['last']?></td>
                            <td><?php echo $row['mobile']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['product']?></td>
                            <td><?php echo $row['totalcost']?></td>
			    <td><a href="AccountUpdation.php?acc_no=<?php echo $row['acc_no']?>" role="button"  class= "btn btn-success" >Edit</a></td>
			    <td><a href="#" role="button" data-toggle="modal" class= "btn btn-danger remove" data-toggle="modal" values ='<?php echo $row['acc_no']?>' id="<?php echo $row['acc_no']?>" >Delete</a></td>
                        </tr>
                        
                        <?php }?>
		                        </tbody>
                        
                    </table>

                </div>
            </div>
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
<script>
//account parmanently remove functionality
jQuery(document).ready(function()
    {
	var remove_id;
	$(".remove").click(function(e)
	{
		if (confirm("Are you sure you want to Delete")) {
			remove_id=this.id;
			// alert(remove_id);
			 var info = 'remove=' + remove_id;
			 $.ajax({
			     type: "POST",
			     url: "ajaxcalling.php",
			     data: info,
			     success: function(data)
				 {
				     $("#"+remove_id+"").parent().parent().remove();
				 }
			});
		}
	});
});
	
	
</script>
