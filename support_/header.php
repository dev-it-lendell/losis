<!DOCTYPE html>
<html>
<head>
    <title>LOSIS | Support</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="../images/lendell/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/chatapp.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="../assets/css/messagestyle.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-green">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="../images/lendell/LOSIS with-words.png" width="150" height="48" alt="Iconic"></div>
                <p>Please wait...</p>
            </div>
        </div>
        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                    <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                </div>
                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="fa fa-bell"></i>
                                    <span class="notification-dot count-notif"></span>
                                </a>
                                <ul class="dropdown-menu notifications dropdown-notif">
                                    <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                                </ul>
                            </li>
                            <li onclick="userlogout();">
                                <a href="#" class="icon-menu"><i class="fa fa-power-off"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="right_icon_bar">
            <ul>
                <li onclick="saveuserprofile();"><a href="user_profile.php" data-toggle="tooltip" data-placement="top" title="My Profile"><i class="fa fa-user"></i></a></li>
                <li onclick="saveusermessaging();"><a href="user_messaging.php" data-toggle="tooltip" data-placement="top" title="My Messaging"><i class="fa fa-comments"></i></a></li>
                <li onclick="saveuserticketing(); viewaddticket();"><a href="#" data-toggle="tooltip" data-placement="top" title="My Ticketing"><i class="fa fa-ticket"></i></a></li>
                <li style="display: none;"><a href="messaging.php" data-toggle="tooltip" data-placement="top" title="Messaging"><i class="fa fa-comments"></i></a></li>
            </ul>
        </div>
    </div>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/bundles/libscripts.bundle.js"></script>
    <script src="../assets/bundles/vendorscripts.bundle.js"></script>
    <script src="../assets/vendor/toastr/toastr.js"></script>
    <script src="../assets/vendor/dropify/js/dropify.min.js"></script>
    <script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/bundles/mainscripts.bundle.js"></script>
    <script src="../js/pages/forms/dropify.js"></script>
    <script src="../assets/bundles/datatablescripts.bundle.js"></script>
    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script>
    <script src="../js/pages/tables/jquery-datatable.js"></script>
    <script src="../assets/bundles/easypiechart.bundle.js"></script>
    <script src="../js/pages/ui/dialogs.js"></script>
</body>
</html>

<?php
    include 'script.php';
?>