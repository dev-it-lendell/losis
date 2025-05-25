<div id="wrapper" class="theme-green">
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <?php 
                    echo '<img src="../profilepictures_/'.$supid.'/'.$sup_userimage.'" / class="rounded-circle user-photo" alt="User Profile Picture">';
                ?>
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="user-name" style="pointer-events: none;"><strong><?php echo $sup_name; ?></strong></a>
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
                            <li onclick="savedashboard();"><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-clipboard"></i><span>Verify Endorsements</span></a>
                                <ul>
                                    <li onclick="saveverifyendobi();"><a href="verify_endo_bi.php">Background Investigation</a></li>
                                    <li onclick="saveverifyendodc();"><a href="verify_endo_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-check-circle"></i><span>Monitor Endorsements</span></a>
                                <ul>
                                    <li onclick="savemonitorendobi();"><a href="monitor_endo_bi.php">Background Investigation</a></li>
                                    <li onclick="savemonitorendodc();"><a href="monitor_endo_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <?php
                                if ($supid == '﻿LOSIS-000042' || $supid == 'LOSIS-000044') {
                                    ?>
                                    <li>
                                        <a href="" class="has-arrow"><i class="fa fa-book"></i><span>DTR Management</span></a>
                                        <ul>
                                            <li onclick="savesuppuploaddtr();"><a href="spv_upload_dtr.php">Upload DTR</a></li>
                                            <li onclick="savespvmanagedtr();"><a href="spv_dtr_management.php">IT Supervisors</a></li>
                                            <li onclick="savesuppmanagedtr();"><a href="supp_dtr_management.php">IT Support</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                } else {
                                    ?>
                                    <li>
                                        <a href="" class="has-arrow"><i class="fa fa-book"></i><span>DTR Management</span></a>
                                        <ul>
                                            <li onclick="savespvuploaddtr();"><a href="supp_upload_dtr.php">Upload DTR</a></li>
                                            <li onclick="savesupp_managedtr();"><a href="supp_manage_dtr.php">Manage DTR</a></li>
                                        </ul>
                                    </li>
                                    <?php
                                }
                            ?>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-ticket"></i><span>Ticketing</span></a>
                                <ul>
                                    <li onclick="savemanagetickets();"><a href="tickets_manage.php">Manage Tickets</a></li>
                                    <li onclick="savemonitortickets();"><a href="tickets_monitor.php">Monitor Tickets</a></li>
                                </ul>
                            </li>
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
                        <div id="onlinesupportusers"></div>
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