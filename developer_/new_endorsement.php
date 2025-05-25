<!DOCTYPE html>
<html>
    <head>
        <title>LOSIS | Developer</title>
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
            <div id="main-content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <h2>New Endorsement</h2>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active">New Endorsement</li>
                                </ul> 
                            </div> 
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="d-flex flex-row-reverse">
                                    <div class="page_action">
                                        <a class="btn btn-outline-success" href="download_template.php?file=csv_templates/NBItemplate.csv" style="float: right;"><i class="fa fa-download"></i> Download CSV</a>
                                    </div>
                                </div>
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
                                                    <p style="font-size: 30px;">
                                                        <i class="fa fa-info-circle text-success"></i>
                                                    </p>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Submission to Vendor</h4>
                                                        Please check the following endorsement(s) details before submission.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="body" style="margin-top: -50px;">
                                    <form class="form" method="POST" enctype="multipart/form-data" action="functions/save_endorsement.php" action="">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="file" class="dropify" name="file" id="customFile1" accept=".csv" multiple>
                                                            </div>
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
                                        <button type="submit" class="btn btn-outline-success" name="save"><i class="fa fa-check-circle-o"></i> Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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