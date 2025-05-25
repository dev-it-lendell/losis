<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h2>New User</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">User Management</li>
                            <li class="breadcrumb-item active">New User</li>
                        </ul> 
                    </div>                   
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="header">
                            <div class="card" style="height: 85px;">
                                <div class="card-body">
                                    <div class="media mleft">
                                        <div class="media-left">
                                            <p style="font-size: 36px; margin-top: -7px;">
                                                <i class="fa fa-info-circle text-success"></i>
                                            </p>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Create New User</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -50px;">
                            <form class="form" method="POST" enctype="multipart/form-data" action="functions/save_new_user.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-user text-dark"></i></span>
                                                    </div>
                                                    <select class="form-control form-control" id="usertype" name="usertype" onchange="selectionusertype();">
                                                        <?php
                                                            $sql = "SELECT * FROM tbl_usertype ORDER BY portal ASC";
                                                            ?> <option> -- Select -- </option>; <?php
                                                            $res = $conn->query($sql);
                                                            while ($row = mysqli_fetch_array($res)) {
                                                                ?>
                                                                    <option value ="<?php echo $row['portal_type'];?>"><?php echo $row['portal'];?> </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileoneimg" style="display: none;"></div>
                                            <div class="col-md-4" id="userprofiletwoimg" style="display: none;">
                                                <input type="file" class="dropify" name="userprofileimg" id="userprofileimg" required>
                                            </div>
                                            <div class="col-md-4" id="userprofilethreeimg" style="display: none;"></div>
                                        </div>
                                        <hr id="userprofilehrone" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-3" id="userprofileoneaccnt" style="display: none;">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" id="useremail" name="useremail">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofiletwoaccnt" style="display: none;">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" id="userpass" name="userpass">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilethreeaccnt" style="display: none;">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="text" class="form-control" id="userconfpass" name="userconfpass">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofileopstype" style="display: none;">
                                                <div class="form-group">
                                                    <label>Operations Type</label>
                                                    <select class="form-control form-control" id="useropstype" name="useropstype">
                                                        <option value="0">-- Select --</option>
                                                        <option value ="1">Verifier</option>
                                                        <option value ="2">Analyst</option>
                                                        <option value ="3">Field</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <hr id="userprofilehrtwo" style="display: none;">
                                        <div class="row">
                                            <div class="col-md-3" id="userprofileonename" style="display: none;">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="userfname" name="userfname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofiletwoname" style="display: none;">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" id="usermname" name="usermname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilethreename" style="display: none;">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" id="userlname" name="userlname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilefourname" style="display: none;">
                                                <div class="form-group">
                                                    <label>Suffix</label>
                                                    <input type="text" class="form-control" id="usersuffix" name="usersuffix">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileonework" style="display: none;">
                                                <div class="form-group">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" id="userposition" name="userposition">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofiletwowork" style="display: none;">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <select class="form-control form-control" id="usercompany" name="usercompany">
                                                        <option value="">Select Company</option>
                                                        <?php
                                                            $sql = "SELECT DISTINCT `client_name` FROM `client_list`";
                                                            $result = $conn->query($sql);
                                                    
                                                            // Loop through the categories and create options
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    echo '<option value="' . $row['client_name'] . '">' . $row['client_name'] . '</option>';
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofilethreework" style="display: none;">
                                                <div class="form-group">
                                                    <label>Company Site</label>
                                                    <select class="form-control form-control" id="usersite" name="usersite">
                                                        <option value="">Select Site</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3" id="userprofileoneother" style="display: none;">
                                                <div class="form-group">
                                                    <label>Assigned Team</label>
                                                    <select class="form-control form-control" id="userteam" name="userteam">
                                                        <?php
                                                            $sql = "SELECT * FROM team_list ORDER BY team_name ASC";
                                                            ?> <option> -- Select -- </option>; <?php
                                                            $res = $conn->query($sql);
                                                            while ($row = mysqli_fetch_array($res)) {
                                                                ?>
                                                                    <option value ="<?php echo $row['team_no'];?>"><?php echo $row['team_name'];?> </option>
                                                                <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofiletwoother" style="display: none;">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="userdateofbirth" name="userdateofbirth" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilethreeother" style="display: none;">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="text" class="form-control" id="userage" name="userage" style="background-color: #fff;">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilefourother" style="display: none;">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control form-control" id="usergender" name="usergender">
                                                        <option value="">-- Select --</option>
                                                        <option value ="1">Female</option>
                                                        <option value ="2">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileonecontact" style="display: none;">
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" id="usercontact" name="usercontact">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofiletwocontact" style="display: none;">
                                                <div class="form-group">
                                                    <label>Position</label>
                                                    <input type="text" class="form-control" id="userpositionname" name="userpositionname">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" id="userprofileaddress" style="display: none;">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" rows="5" maxlength="500" id="useraddress" name="useraddress" style="resize: none;" autocomplete="off"></textarea>
                                                    <div id="address_feedback"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix mt-4">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox"> 
                                        <span>By filling up, you agree with the storage and handling of your data and you have read our <a target="_blank" href="https://lendell.ph/assets/docs/Data%20Privacy%20Statement.pdf" style="color: #000; text-decoration: underline; font-weight: bold;">Data Privacy Compliance Policy Statement.</a></span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-outline-primary" name="newuser"><i class="fa fa-check-circle-o"></i> Save</button>
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-eraser"></i> Clear</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>