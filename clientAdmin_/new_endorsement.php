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
                        <h2>New Endorsement</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">New Endorsement</li>
                        </ul> 
                    </div>  
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <a onclick="savedownloadendocsv();" class="btn btn-outline-success" href="download_template.php?file=csv_templates/new_endorsement_template_2023.csv" style="float: right;"><i class="fa fa-download"></i> Download CSV</a>
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
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-file-text-o text-dark"></i></span>
                                                            </div>
                                                            <select class="form-control" name="endo_type" id="endo_type" onchange="showendotype();">
                                                                <option value="endo">-- Endorsement Type --</option>
                                                                <option value ="0">Background Investigation</option>
                                                                <option value ="1">Database Check</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="batch_id" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-pencil-square-o text-dark"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" name="endo_desc" placeholder="Batch ID (Optional)" autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                    $Date = $now->format('Y-m-d');
                                                    $bicountdays = 2;
                                                    $holidays = array('2022-01-01', '2022-04-09', '2022-04-14', '2022-04-15', '2022-05-01', '2022-06-12', '2022-08-29', '2022-11-30', '2022-12-25', '2022-12-30','2022-02-01', '2022-02-25', '2022-04-16', '2022-08-21', '2022-11-01', '2022-12-08', '2022-11-02', '2022-12-24', '2022-12-31');

                                                    $d = new DateTime($Date);
                                                    $t = $d->getTimestamp();

                                                        // loop for X days
                                                        for($i=0; $i<$bicountdays; $i++){

                                                            // add 1 day to timestamp
                                                            $addDay = 86400;

                                                            // get what day it is next day
                                                            $nextDay = date('w', ($t+$addDay));
                                                            $newDate = date('Y-m-d', ($t+$addDay));

                                                            if (in_array($newDate, $holidays)) {
                                                                $i--;
                                                            }

                                                            // if it's Saturday or Sunday get $i-1
                                                            if($nextDay == 0 || $nextDay == 6) {
                                                                $i--;
                                                            }

                                                            // modify timestamp, add 1 day
                                                            $t = $t+$addDay;
                                                        }

                                                        $d->setTimestamp($t);

                                                        $currentdate =  $d->format( 'Y-m-d' );
                                                        $currentformatdate =  $d->format( 'F d, Y' );
                                                ?>
                                                <div class="row" id="dcturnarounddate" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-calendar-o text-dark"></i></span>
                                                            </div>
                                                            <input placeholder="Turn Around Date" class="form-control" type="text" name="format_tadate" style="background-color: #fff; cursor: pointer;" readonly value="<?php echo $currentformatdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
                                                            <input placeholder="Turn Around Date" class="form-control" type="text" name="dc_turn_around_date" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $currentdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date">                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php 
                                                    $Date = $now->format('Y-m-d');
                                                    $bicountdays = 2; // Supposed to be 10 for BI
                                                    $holidays = array('2023-01-01', '2023-04-06', '2023-04-07', '2023-04-10', '2023-05-01', '2023-06-12', '2023-08-28', '2023-11-27', '2023-12-25', '2023-12-30', '2023-02-25', '2023-04-08', '2023-08-21', '2023-11-01', '2023-12-08', '2023-12-31', '2023-01-02', '2023-11-02');

                                                    $d = new DateTime($Date);
                                                    $t = $d->getTimestamp();

                                                        // loop for X days
                                                        for($i=0; $i<$bicountdays; $i++){

                                                            // add 1 day to timestamp
                                                            $addDay = 86400;

                                                            // get what day it is next day
                                                            $nextDay = date('w', ($t+$addDay));
                                                            $newDate = date('Y-m-d', ($t+$addDay));

                                                            if (in_array($newDate, $holidays)) {
                                                                $i--;
                                                            }

                                                            // if it's Saturday or Sunday get $i-1
                                                            if($nextDay == 0 || $nextDay == 6) {
                                                                $i--;
                                                            }

                                                            // modify timestamp, add 1 day
                                                            $t = $t+$addDay;
                                                        }

                                                        $d->setTimestamp($t);

                                                        $currentdate =  $d->format( 'Y-m-d' );
                                                        $currentformatdate =  $d->format( 'F d, Y' );
                                                ?>
                                                <div class="row" id="biturnarounddate" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-calendar-o text-dark"></i></span>
                                                            </div>
                                                            <input placeholder="Turn Around Date" class="form-control" type="text" name="format_tadate" style="background-color: #fff; cursor: pointer;" readonly value="<?php echo $currentformatdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
                                                            <input placeholder="Turn Around Date" class="form-control" type="text" name="turn_around_date" style="background-color: #fff; cursor: pointer; display: none;" readonly value="<?php echo $currentdate; ?>" data-toggle="tooltip" data-placement="top" title="Turn Around Date"> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="endo_sites" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-building-o text-dark"></i></span>
                                                            </div>
                                                            <select class="form-control form-control" name="sites" id="sites" onchange="selectionsite();" required="true"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="sitesinfo"></div>
                                                
                                                <div class="row" id="endo_importance" style="display: none;">
                                                    <div class="col-md-12">
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fa fa-exclamation-triangle text-dark"></i></span>
                                                            </div>
                                                            <select class="form-control form-control" name="importance" id="importance" required="true">
                                                                <option value="endoimp">-- Select Importance --</option>
                                                                <option value ="1">High Importance</option>
                                                                <option value ="2">Low Importance</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                            <div class="col-lg-7">
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
                                <button type="submit" class="btn btn-outline-success" name="saveEndo"><i class="fa fa-check-circle-o"></i> Submit</button>
                                <button type="button" class="btn btn-outline-secondary" onclick="clearnewendo();"><i class="fa fa-eraser"></i> Clear</button>  
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