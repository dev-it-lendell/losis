<div id="wrapper" class="theme-green">
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <?php
                    echo '<img src="../profilepictures_/'.$spvid.'/'.$spv_userimage.'" / class="rounded-circle user-photo" alt="User Profile Picture">';                ?>
                <div class="dropdown">
                    <span>Welcome,</span><br>
                    <a href="javascript:void(0);" class="user-name" style="pointer-events: none;"><strong><?php echo $spv_name; ?></strong></a>
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
                                <a href="" class="has-arrow"><i class="fa fa-file"></i><span>Endorsements</span></a>
                                <ul>
                                    <li onclick="saveendorsementbi();"><a href="endorsement_bi.php">Background Investigation</a></li>
                                    <li onclick="saveendorsementdc();"><a href="endorsement_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-desktop"></i><span>Monitor Endorsements</span></a>
                                <ul>
                                    <li onclick="savemonitorendobi();"><a href="monitor_endo_bi.php">Background Investigation</a></li>
                                    <li onclick="savemonitorendodc();"><a href="monitor_endo_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-spinner"></i><span>Rerun Endorsement</span></a>
                                <ul>
                                    <li onclick="savererunendobi();"><a href="rerun_endo_bi.php">Background Investigation</a></li>
                                    <li onclick="savererunendodc();"><a href="rerun_endo_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-list-alt"></i><span>Endorsement Logs</span></a>
                                <ul>
                                    <li onclick="saveendologbi();"><a href="endorsement_logs_bi.php">Background Investigation</a></li>
                                    <li onclick="saveendologdc();"><a href="endorsement_logs_dc.php">Database Check</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-book"></i><span>DTR Management</span></a>
                                <ul>
                                    <li onclick="saveuploaddtr();"><a href="upload_dtr.php">Upload DTR</a></li>
                                    <li onclick="savedtrpoc();"><a href="dtr_management_poc.php">Supervisors</a></li>
                                    <li onclick="savedtrops();"><a href="dtr_management_ops.php">Operations</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow"><i class="fa fa-cogs"></i><span>Operations</span></a>
                                <ul>
                                    <li onclick="savereqops();"><a href="requesting_ops.php">Requesting of Operations</a></li>
                                    <li onclick="saveapprops();"><a href="approval_ops.php">Approval of Operations</a></li>
                                    <li onclick="savemanageops();"><a href="manage_ops.php">Manage Operations</a></li>
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
                        <div id="onlinesupervisorusers"></div>
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
                        <div id="onlineclientusers"></div>
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
