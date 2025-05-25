<?php

    if (!empty($_GET['newaccnt'])) {
        switch($_GET['newaccnt']){
            case 'succ':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['success']('Account succesfully added.');
                    </script>
                <?php
            break;

            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Cannot create account.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Account error.');
                    </script>
                <?php
            break;
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>LOSIS | Sign Up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="images/lendell/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/chatapp.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/css/messagestyle.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">
    <!--<div id="wrapper" class="theme-green">-->
    <!--    <div class="page-loader-wrapper">-->
    <!--        <div class="loader">-->
    <!--            <div class="m-t-30"><img src="images/lendell/LOSIS with-words.png" width="150" height="48" alt="Iconic"></div>-->
    <!--            <p>Please wait...</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <div id="wrapper" class="theme-green">
    <div class="mx-auto" style="width:1000px"> 
        <div class="container-fluid py-5">
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
                                            <h4 class="media-heading">Sign Up Form</h4>
                                                Lendell Outsourcing Solutions Inc.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -50px;">
                            <form class="form" method="POST" enctype="multipart/form-data" action="functions/save_new_user.php">
                            
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileoneimg"></div>
                                            <div class="col-md-4" id="userprofiletwoimg">
                                                <input type="file" class="dropify" name="userprofileimg" id="userprofileimg">
                                            </div>
                                            <div class="col-md-4" id="userprofilethreeimg"></div>
                                        </div>
                                        <hr id="userprofilehrone">
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileoneaccnt">
                                                <div class="form-group">
                                                    <label>Email Address</label>
                                                    <input type="text" class="form-control" id="useremail" name="useremail">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofiletwoaccnt">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" id="userpass" name="userpass">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofilethreeaccnt">
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="text" class="form-control" id="userconfpass" name="userconfpass">
                                                </div>
                                            </div>
                                        </div>
                                        <hr id="userprofilehrtwo">
                                        <div class="row">
                                            <div class="col-md-3" id="userprofileonename">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" id="userfname" name="userfname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofiletwoname">
                                                <div class="form-group">
                                                    <label>Middle Name</label>
                                                    <input type="text" class="form-control" id="usermname" name="usermname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilethreename">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" id="userlname" name="userlname">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilefourname">
                                                <div class="form-group">
                                                    <label>Suffix</label>
                                                    <input type="text" class="form-control" id="usersuffix" name="usersuffix">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" id="userprofileonework">
                                                <div class="form-group">
                                                    <label>Company Name</label>
                                                    <input type="text" class="form-control" id="usercompany" name="usercompany">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofiletwowork">
                                                <div class="form-group">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" id="userposition" name="userposition">
                                                </div>
                                            </div>
                                            <div class="col-md-4" id="userprofilethreework">
                                                <div class="form-group">
                                                    <label>Company Site</label>
                                                    <input type="text" class="form-control" id="usersite" name="usersite">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3" id="userprofiletwoother">
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="userdateofbirth" name="userdateofbirth" data-date-format="yyyy-mm-dd">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilethreeother">
                                                <div class="form-group">
                                                    <label>Age</label>
                                                    <input type="text" class="form-control" id="userage" name="userage" style="background-color: #fff;">
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofilefourother">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-control form-control" id="usergender" name="usergender">
                                                        <option value="">-- Select --</option>
                                                        <option value ="1">Female</option>
                                                        <option value ="2">Male</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3" id="userprofileonecontact">
                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" class="form-control" id="usercontact" name="usercontact">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-12" id="userprofileaddress">
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

    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <script src="assets/vendor/toastr/toastr.js"></script>
    <script src="assets/vendor/dropify/js/dropify.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="js/pages/forms/dropify.js"></script>
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="assets/bundles/easypiechart.bundle.js"></script>
    <script src="js/pages/ui/dialogs.js"></script>
</body>
</html>