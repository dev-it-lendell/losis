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
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <a href="export_dashboard.php" class="btn btn-outline-success" style="float: right;"><i class="fa fa-download"></i>&nbsp;Export Data</a>
                    </div>                    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-copy"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="total_endo"></h4>
                                            <small class="text-muted">Total Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-copy"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevtotal_endo"></h4>
                                            <small class="text-muted">Total Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2300">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="pending_endo"></h4>
                                            <small class="text-muted">Pending Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevpending_endo"></h4>
                                            <small class="text-muted">Pending Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-spinner"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="onprocess_endo"></h4>
                                            <small class="text-muted">On-Process Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-spinner"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevonprocess_endo"></h4>
                                            <small class="text-muted">On-Process Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card top_widget">
                        <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2300">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-check-circle-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase"><?php echo $now->format('F Y'); ?></div>
                                            <h4 class="number mb-0" id="completed_endo"></h4>
                                            <small class="text-muted">Completed Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="body">
                                        <div class="icon"><i class="fa fa-check-circle-o"></i></div>
                                        <div class="content">
                                            <div class="text mb-2 text-uppercase">
                                               <?php
                                                    $new_date = date('F Y', strtotime('-1 month'));
                                                    echo $new_date;
                                                ?>
                                            </div>
                                            <h4 class="number mb-0" id="prevcompleted_endo"></h4>
                                            <small class="text-muted">Completed Endorsements</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Holidays <br><p style="font-weight: bold; font-size: 11px;">Year <?php echo $now->format('Y'); ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="holiday_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Assigned Supervisors <br><p style="font-weight: bold; font-size: 11px;">Team <?php echo $ops_teamname; ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="supervisor_list"></div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="card">
                        <div class="header">
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Assigned Operations <br><p style="font-weight: bold; font-size: 11px;">Team <?php echo $ops_teamname; ?></p></h6>
                                </div>
                            </div>
                        </div>
                        <div class="body" style="margin-top: -35px;">
                            <ul class="list-unstyled feeds_widget">
                                <div id="operations_list"></div>
                            </ul>
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