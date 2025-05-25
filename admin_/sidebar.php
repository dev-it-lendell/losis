<div id="wrapper" class="theme-green">
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <?php 
                    echo '<img src="../profilepictures_/'.$admid.'/'.$adm_userimage.'" / class="rounded-circle user-photo" alt="User Profile Picture">';
                ?>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="user-name" style="pointer-events: none;"><strong><?php echo $adm_name; ?></strong></a>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
            </ul>
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul id="main-menu" class="metismenu li_animation_delay">
                            <li onclick="saveadmdashboard();"><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-copy"></i><span>Monitor Endorsements</span></a>
                                <ul>
                                    <li onclick="saveadmmonitorbi();"><a href="monitor_bi_endo.php">Background Investigation</a></li>
                                    <li onclick="saveadmmonitordc();"><a href="monitor_dc_endo.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-history"></i><span>Monitoring Logs</span></a>
                                <ul>
                                    <li onclick="saveadmuserlogs();"><a href="user_logs.php">User Logs</a></li>
                                    <li onclick="saveadmactlogs();"><a href="activity_logs.php">Activity Logs</a></li>
                                    <li onclick="saveadmendologs();"><a href="endorsement_logs.php">Endorsement Logs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-user"></i><span>User Management</span></a>
                                <ul>
                                    <li onclick="saveadmnewuser();"><a href="new_user.php">New User</a></li>
                                    <li onclick="saveadmmanageusers();"><a href="manage_users.php">Manage Users</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-book"></i><span>DTR Management</span></a>
                                <ul>
                                    <li onclick="saveadmdtrpoc();"><a href="dtr_management_poc.php">Supervisors</a></li>
                                    <li onclick="saveadmdtrops();"><a href="dtr_management_ops.php">Operations</a></li>
                                    <li onclick="saveadmdtritsup();"><a href="dtr_management_itsup.php">IT Support</a></li>
                                    <li onclick="saveadmdtrperformance();"><a href="dtr_performance.php">DTR Performance</a></li>
                                </ul>
                            </li>
                            <li onclick="saveticketmngt();"><a href="ticket_management.php"><i class="fa fa-ticket"></i>Ticket Management</a></li>
                            <li onclick="saveadmtargetgoal();"><a href="target_goal.php"><i class="fa fa-signal"></i>Target Goal</a></li>
                            <li onclick="saveadmmonthperf();"><a href="monthly_performance.php"><i class="fa fa-star"></i>Monthly Performance</a></li>
                            <li onclick="saveadmmemberreq();"><a href="monitor_ops_request.php"><i class="fa fa-paperclip"></i>Member Requests</a></li>
                            <li onclick="saveadmteammngt();"><a href="team_management.php"><i class="fa fa-users"></i>Team Management</a></li>
                            <li onclick="saveadmsystemmngt();"><a href="system_management.php"><i class="fa fa-desktop"></i>System Management</a></li>
                            <li onclick="saveadmkpimonitoring();"><a href="kpi_monitoring.php"><i class="fa fa-bar-chart-o"></i>KPI Monitoring</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled li_animation_delay">
                        <div id="onlineadminusers"></div>
                    </ul>
                </div>
                <div class="tab-pane" id="setting">
                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable Dark Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-rtl">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable RTL Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-high-contrast">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable High Contrast Mode!</span>
                        </li>
                    </ul>
                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Allowed Notifications</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="list-unstyled question">
                        <li class="menu-heading">ACCOUNT</li>
                        <li><a href="javascript:void(0);">Update User Profile</a></li>
                        <li><a href="javascript:void(0);">Change Password?</a></li>
                        <li><a href="https://lendell.ph/assets/docs/Data%20Privacy%20Statement.pdf">Privacy &amp; Policy</a></li>
                    </ul>
                </div>
            </div>                        
        </div>
    </div>
</div>

<?php
    include 'script.php';
?>

<script src="../assets/bundles/mainscripts.bundle.js"></script>