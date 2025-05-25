<!DOCTYPE html>
<html>

<head>
    <title>LOSIS | Supervisor</title>
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
    <link rel="stylesheet" href="../assets/css/notification.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet"
        type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/quasar@2.18.1/dist/quasar.prod.css" rel="stylesheet" type="text/css">


</head>

<body data-theme="light" class="font-nunito ">

    <div id="wrapper" class="theme-green">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="m-t-30"><img src="../images/lendell/LOSIS with-words.png" width="150" height="48"
                        alt="Iconic">
                </div>
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
                                    <span id="notification-count" class="notification-badge"
                                        style="display: none;">0</span>
                                </a>
                                <ul class="dropdown-menu notifications dropdown-notif">
                                    <li class="header">Notifications</li>
                                    <ul id="supervisornotif">
                                        <!-- Notifications will be inserted here -->
                                    </ul>
                                    <li class="footer mark-all-read-li" style="display: none;">
                                        <a href="javascript:void(0);" class="mark-all-read">
                                            <i class="fa fa-check-double"></i> Mark all as read
                                        </a>
                                    </li>
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
                <li onclick="saveuserprofile();"><a href="user_profile.php" data-toggle="tooltip" data-placement="top"
                        title="My Profile"><i class="fa fa-user"></i></a></li>
                <li onclick="saveusermessaging();"><a href="user_messaging.php" data-toggle="tooltip"
                        data-placement="top" title="My Messaging"><i class="fa fa-comments"></i></a></li>
                <li style="display: none;"><a href="messaging.php" data-toggle="tooltip" data-placement="top"
                        title="Messaging"><i class="fa fa-comments"></i></a></li>
            </ul>
        </div>
    </div>



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
    <script src="../js/pages/notification.js"></script>

    <script>
        // Select buttons and target elements (you may need to adjust these according to your HTML structure)
        const offcanvasButton = document.querySelector('.btn-toggle-offcanvas');
        const fullwidthButton = document.querySelector('.btn-toggle-fullwidth');

        // Assuming you have an element with a class 'offcanvas-menu' to be toggled
        const offcanvasMenu = document.querySelector('.offcanvas-menu');
        const fullwidthElement = document.querySelector('body'); // Or the element you want to make full width

        // Toggle the offcanvas menu visibility
        offcanvasButton.addEventListener('click', () => {
            offcanvasMenu.classList.toggle('offcanvas-active');
        });

        // Toggle the full-width mode
        fullwidthButton.addEventListener('click', () => {
            fullwidthElement.classList.toggle('fullwidth-active');
        });
    </script>
</body>

</html>

<?php
include 'script.php';
?>