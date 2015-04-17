<?php //echo "<pre>"; print_r($_SESSION); die; ?>
<ul id="main-menu" class="main-menu">
    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active"     <li <?php //if(strpos($_SERVER['REQUEST_URI'],"ReportingDashboard.php")!=FALSE) echo "class='active'"; ?>>
        <a href="ReportingDashboard.php">
            <i class="linecons-cog"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
-->

    <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccountCreation.php")!=FALSE) echo "class='active'"; ?>>
        <a href="AccountCreation.php">
            <i class="linecons-location"></i>
            <span class="title">Account Creation</span>
        </a>
    </li>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccountRetrieval.php")!=FALSE) echo "class='active'"; ?>>
        <a href="AccountRetrieval.php">
            <i class="linecons-truck"></i>
            <span class="title">Account Retrieval</span>
        </a>
    </li>
    
   <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccountList.php")!=FALSE) echo "class='active'"; ?>>
        <a href="AccountList.php">
            <i class="linecons-globe"></i>
            <span class="title">Account List</span>
        </a>
    </li>
    <?PHP if($_SESSION['is_admin']==1){ ?>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"UserList.php")!=FALSE) echo "class='active'"; ?>>
        <a href="UserList.php">
            <i class="linecons-tag"></i>
            <span class="title">User List</span>
        </a>
    </li>
    <?PHP } ?>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccountDeactivation.php")!=FALSE) echo "class='active'"; ?>>
        <a href="AccountDeactivation.php">
            <i class="glyphicon glyphicon-bullhorn"></i>
            <span class="title">Account Deactivation</span>
        </a>
    </li>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"RefundACRetrieval.php")!=FALSE) echo "class='active'"; ?>>
        <a href="RefundACRetrieval.php">
            <i class="glyphicon glyphicon-flag"></i>
            <span class="title">Refund A/C  Retrieval</span>
        </a>
    </li>
    <li data-toggle="true">
        
                <a href="">
                    <i class="glyphicon glyphicon-stats"></i>
                    <span class="title">Account History</span>
                </a>
        <ul>
            <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccDeactivate.php")!=FALSE) echo "class='active'"; ?>>
                <a href="AccDeactivate.php">
                    <i class="glyphicon glyphicon-fire"></i>
                    <span class="title">Deactivate</span>
                </a>
            </li>
            <li <?php if(strpos($_SERVER['REQUEST_URI'],"AccRefund.php")!=FALSE) echo "class='active'"; ?>>
                <a href="AccRefund.php">
                    <i class="glyphicon glyphicon-star"></i>
                    <span class="title">Refund</span>
                </a>
            </li>
    
        </ul>
    </li>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"RefundPolicy.php")!=FALSE) echo "class='active'"; ?>>
        <a href="RefundPolicy.php">
            <i class="glyphicon glyphicon-star-empty"></i>
            <span class="title">Refund Policy</span>
        </a>
    </li>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"CancellationPolicy.php")!=FALSE) echo "class='active'"; ?>>
        <a href="CancellationPolicy.php">
            <i class="glyphicon glyphicon-remove"></i>
            <span class="title">Cancellation Policy</span>
        </a>
    </li>
    <li <?php if(strpos($_SERVER['REQUEST_URI'],"ChangePassword.php")!=FALSE) echo "class='active'"; ?>>
        <a href="ChangePassword.php">
            <i class="glyphicon glyphicon-lock"></i>
            <span class="title">Change Password</span>
        </a>
    </li>
</ul>
