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
                        <h2>Update Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">User Profile</li>
                            <li class="breadcrumb-item active">Update Profile</li>
                        </ul> 
                    </div>                   
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-danger" style="float: right; margin-right: 25px; margin-top: 15px;" onclick="back_adm_user_profile(); saveadmuserprofile();"><i class="fa fa-arrow-left"></i> Back</button>
                            </div>
                        </div>
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
                                            <h4 class="media-heading">Update User's Profile</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -50px;">
                            <form class="form" method="POST" enctype="multipart/form-data" action="functions/save_updated_profile.php">
                            	<div class="row">
                            		<div class="col-md-12">
                            			<div class="row">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <input type="file" class="dropify" name="customFile1" id="customFile1">
                                            </div>
                                            <div class="col-md-4"></div>
                            			</div>
                                        <hr>
                                        <div class="row">
                                        	<div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" id="admemail" name="admemail" value="<?php echo $adm_useremail; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-4">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="text" class="form-control" id="admpass" name="admpass" value="<?php echo $adm_userpass; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="text" class="form-control" id="admconfpass" name="admconfpass">
                                                </div>
                                        	</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="admfname" name="admfname" value="<?php echo $adm_fname; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" id="admmname" name="admmname" value="<?php echo $adm_mname; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" id="admlname" name="admlname" value="<?php echo $adm_lname; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Suffix</label>
                                                    <input type="text" class="form-control" id="admsuffix" name="admsuffix" value="<?php echo $adm_suffix; ?>">
                                                </div>
                                        	</div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Contact No.</label>
                                                    <input type="text" class="form-control" id="admcontact" name="admcontact" value="<?php echo $adm_contact; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="admdateofbirth" name="admdateofbirth" data-date-format="yyyy-mm-dd" value="<?php echo $adm_dateofbirth; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="text" class="form-control" id="admage" name="admage" style="background-color: #fff;" readonly value="<?php echo $adm_age; ?>">
                                                </div>
                                        	</div>
                                        	<div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control form-control" id="admgender" name="admgender">
                                                        <option value="">-- Select --</option>
                                                        <option value ="1">Female</option>
                                                        <option value ="2">Male</option>
                                                    </select>
                                                </div>
                                        	</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" rows="5" maxlength="500" id="admaddress" name="admaddress" style="resize: none;" autocomplete="off"><?php echo $adm_fulladdress; ?></textarea>
                                                    <div id="address_feedback"></div>
                                                </div>
                                            </div>
                                        </div>
		                                <button type="submit" class="btn btn-outline-primary" name="updateuser"><i class="fa fa-check-circle-o"></i> Update</button>
                            		</div>
                            	</div>
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