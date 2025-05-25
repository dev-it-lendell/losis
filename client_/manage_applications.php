<?php
    include 'checking.php';
    include 'header.php';
    include 'sidebar.php';

    // Handle application feedback
    if (!empty($_GET['appl'])) {
        switch ($_GET['appl']) {
            case 'err':
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Application disapproved.');
                    </script>
                <?php
            break;

            default:
                ?>
                    <script type="text/javascript">
                        toastr.options.timeOut = "false";
                        toastr.options.closeButton = true;
                        toastr.options.positionClass = 'toast-bottom-right';
                        toastr['danger']('Application uploading error.');
                    </script>
                <?php
            break;
        }
    }
?>

<div id="wrapper" class="theme-green">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Manage Applications</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item">Applications</li>
                            <li class="breadcrumb-item active">Manage Applications</li>
                        </ul>   
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card planned_task">
                        <div class="col-md-12 mt-3">
                            <div class="header">
                                <div class="card" style="height: 85px; margin-top: -10px;">
                                    <div class="card-body">
                                        <div class="media mleft">
                                            <div class="media-left">
                                                <p style="font-size: 36px; margin-top: -7px;">
                                                    <i class="fa fa-files-o text-dark"></i>
                                                </p>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">Total Current Month Applications</h4>
                                                <p style="font-size: 15px;"><?php echo $now->format('F Y'); ?></p>
                                                <p style="font-size: 25px; text-align: right; margin-top: -55px; font-weight: bold;" id="currenttotalappl"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="currentapplstatus"></div>
                                    <div class="table-responsive">
                                        <form method='POST' action='' id="applicationForm">
                                            <input type="hidden" id="selectedApplications" name="selectedApplications" value="">
                                            <button type="button" class="btn btn-outline-primary" style="margin-bottom: 20px; width: 115px;" id="selectAllBtn" onclick="selectAllApplications();"><i class="fa fa-check-square-o"></i>&nbsp;Select All</button>
                                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th style="width: 1%;">
                                                                <label class="fancy-checkbox">
                                                                    <input class="checkbox-tick" type="checkbox" id="chkallapprbi" onclick="toggleSelectAll(this)">
                                                                    <span></span>
                                                                </label>
                                                            </th>
                                                            <th>DATE</th>
                                                            <th>APPLICANT NAME</th>
                                                            <th>EMAIL ADDRESS</th>
                                                            <th>CONTACT NO</th>
                                                            <th style="text-align: center;">ACTIONS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $sql = "SELECT a.id, a.application_code, a.application_status, a.team_id, 
                                                                a.application_datetime, a.client_id, b.application_code, 
                                                                CONCAT(b.fname_, ' ', b.mname_, ' ', b.lname_, ' ', b.suffix_) AS applicantname, 
                                                                b.email_addr, b.mobile_no 
                                                                FROM application_list AS a 
                                                                LEFT JOIN application_personal_info AS b 
                                                                ON a.application_code = b.application_code 
                                                                WHERE a.client_id = '$clnt_siteid' 
                                                                ORDER BY a.application_datetime DESC, a.application_status ASC";
                                                            // $sql = "SELECT a.id, a.application_code, a.application_status, a.team_id, a.application_datetime, a.client_id, b.application_code, CONCAT(b.fname_, ' ',  b.mname_,  ' ', b.lname_, ' ', b.suffix_) AS applicantname, b.email_addr, b.mobile_no FROM application_list AS a LEFT JOIN application_personal_info AS b ON a.application_code = b.application_code WHERE a.client_id  =  '$clnt_siteid' ORDER BY a.application_status ASC";
                                                            $result = $conn->query($sql);
                                                            if ($result->num_rows > 0) {
                                                                while ($row = $result->fetch_assoc()) {
                                                                    $application_datetime = $row['application_datetime'];
                                                                    $newDateApplication = date("F j, Y", strtotime($application_datetime));
                                                                    $applicantID = "APL".' - '.$row['id'];
                                                                        
                                                                    if ($row['application_status'] == '1') {
                                                                        $applicationStatus = "APPROVED";
                                                                    } 
                                                                    elseif ($row['application_status'] == '2') {
                                                                         $applicationStatus = "DISAPPROVED";
                                                                    }
                                                                    else{
                                                                        $applicationStatus = "PENDING";
                                                                    }
                                                                    ?>
                                                                        <tr>
                                                                            <td>
                                                                                <label class="fancy-checkbox">
                                                                                    <input class="checkbox-tick" type="checkbox" id="applapproval[]" name="applapproval[]" value='<?= $row['application_code'] ?>'>
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>

                                                                            <td><?php echo $newDateApplication; ?></td>
                                                                            <td style="font-weight: bold;"><?php echo $row['applicantname']; ?></td>
                                                                            <td><?php echo $row['email_addr']; ?></td>
                                                                            <td><?php echo $row['mobile_no']; ?></td>
                                                                            <td style="text-align: center;">
                                                                            <?php
                                                                                    if ($row['application_status'] == '0') {
                                                                                        ?>
                                                                                        <a onclick="saveapprovalappl();" href="approval_application.php?appCode=<?php echo $row['application_code'] ?>" class="btn btn-sm btn-outline-success" data-toggle="tooltip" data-placement="top" title="Approval of Application"><i class="fa fa-check-square-o"></i></a>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Application" onclick="displayapplication('<?php echo $applicantID; ?>', '<?php echo $newDateApplication; ?>', '<?php echo $row['application_code']; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $row['email_addr']; ?>', '<?php echo $row['mobile_no']; ?>', '<?php echo $applicationStatus; ?>');"><i class="fa fa-file-text-o"></i></button>                        
                                                                                        <?php
                                                                                    } else {
                                                                                        ?>
                                                                                        <button type="button" class="btn btn-sm btn-outline-dark" data-toggle="tooltip" data-placement="top" title="View Application" onclick="displayapplication('<?php echo $applicantID; ?>', '<?php echo $newDateApplication; ?>', '<?php echo $row['application_code']; ?>', '<?php echo $row['applicantname']; ?>', '<?php echo $row['email_addr']; ?>', '<?php echo $row['mobile_no']; ?>', '<?php echo $applicationStatus; ?>');"><i class="fa fa-file-text-o"></i></button> 
                                                                                        <?php
                                                                                    }
                                                                                ?>
                                        
                                                                            </td>
                                                                        </tr>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-dialog {
        max-width: 900px;
    }

    .form-control {
        height: calc(2.25rem + 2px);
    }
</style>

<!-- Modal -->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <!-- Modal Header with Centered Title -->
            <div class="modal-header">
                <h5 class="modal-title text-center w-100" id="confirmModalLabel">Approval of Applications (Batch)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="d-flex justify-content-center my-3">
                <div class="profile-image">
                    <img src="../images/icons/application.png" class="rounded-circle" alt="" style="height: 90px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                </div>
            </div>
            <!-- Modal Body with Application Details and Batch Endorsement Information Section -->
            <div class="modal-body">
                <p class="text-center">Please check the information for the batch before approving.</p>
                <hr>
                <!-- Application Details Section -->
                <div id="applicationList" style="display: none;" class="mb-4">
                 <!--<div id="applicationList" class="mb-4">-->
                </div>
                <hr>
                <!-- Centralized Batch Endorsement Information Form -->
                <form id="batchApproveBI">
                    <div class="endorsement-item mb-3">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="endorsementType">Endorsement Type</label>
                                <input type="text" id="endorsementType" class="form-control endorsementType" name="endorsementType" value="Background Investigation" readonly required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="endorsementDate">Date</label>
                                <input type="date" class="form-control endorsementDate" name="endorsementDate" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="importance">Importance</label>
                                <select id="importance" class="form-control importance" name="importance" required>
                                    <option value="">-- Importance --</option>
                                    <option value="1">High Importance</option>
                                    <option value="2">Low Importance</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="batchId">Batch ID</label>
                                <input type="text" class="form-control batchId" name="batchId" placeholder="Batch ID (Optional)" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select id="status" class="form-control status" name="status" required>
                                    <option value="">-- Status --</option>
                                    <option value="1">Approved</option>
                                    <option value="2">Disapproved</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="biId">BI ID</label>
                                <input type="text" class="form-control biId" name="biId" placeholder="BI ID (Optional)" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="account">Account</label>
                                <input type="text" class="form-control account" name="account" placeholder="Account" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="site">Select Site</label>
                               <select class="form-control form-control" id="user_id" name="user_id" required="true">
                                    <?php
                                        $sql = "SELECT `client_id`, `site_` FROM `client_list` WHERE `acronym_` = '$clnt_acronym' ";
                                        ?> <option> -- Select Site -- </option>; <?php
                                        $res = $conn->query($sql);
                                        while ($row = mysqli_fetch_array($res)) { ?>
                                                <option value ="<?php echo $row['client_id'];?>"><?php echo $row['site_'];?> </option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="package">Package</label>
                            <textarea class="form-control package" name="package" rows="3" placeholder="Package" required></textarea>
                            <small class="text-muted">200 characters remaining</small>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Modal Footer with Approval and Cancel Buttons -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="confirmBatchApprove">Approve Batch</button>
            </div>
        </div>
    </div>
</div>

<?php
    include 'modals.php';
    include 'script.php';
?>

<script>
    function toggleSelectAll(source) {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = source.checked;
        });
        updateSelectedApplications();
    }

    function updateSelectedApplications() {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]:checked');
        const selectedApplications = Array.from(checkboxes).map(checkbox => checkbox.value);
        
        document.getElementById('selectedApplications').value = JSON.stringify(selectedApplications);

        console.log('Selected Applications:', selectedApplications);

        if (selectedApplications.length > 0) {
            $('#confirmModal').modal('show');
            fetchApplicationDetails(selectedApplications);
        } else {
            $('#confirmModal').modal('hide');
        }
    }

    function fetchApplicationDetails(selectedApplications) {
    fetch('get_application_details.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ applications: selectedApplications })
    })
    .then(response => response.text())
    .then(data => {
        try {
            const jsonData = JSON.parse(data);
            if (jsonData.error) {
                document.getElementById('applicationList').innerHTML = `<p class="text-danger">${jsonData.error}</p>`;
            }
        } catch (e) {
            // If it's not JSON, it's the HTML content
            const applicationList = document.getElementById('applicationList');
            applicationList.innerHTML = data;
            
            // Add hidden inputs for each application detail
            const applications = applicationList.querySelectorAll('.application-details');
            const form = document.getElementById('batchApproveBI');
            
            applications.forEach((app, index) => {
                const appCode = app.querySelector('p:nth-child(1)').textContent.split(':')[1].trim();
                const appName = app.querySelector('p:nth-child(2)').textContent.split(':')[1].trim();
                const appDob = app.querySelector('p:nth-child(3)').textContent.split(':')[1].trim();
                const appDate = app.querySelector('p:nth-child(4)').textContent.split(':')[1].trim();
                const appClientId = app.querySelector('p:nth-child(5)').textContent.split(':')[1].trim();
                const appEndoType = app.querySelector('p:nth-child(6)').textContent.split(':')[1].trim();
                const appStatus = app.querySelector('p:nth-child(7)').textContent.split(':')[1].trim();

                const hiddenInputs = `
                    <input type="hidden" name="application_code[]" value="${appCode}">
                    <input type="hidden" name="applicant_name[]" value="${appName}">
                    <input type="hidden" name="birth_date[]" value="${appDob}">
                    <input type="hidden" name="application_date[]" value="${appDate}">
                    <input type="hidden" name="client_id[]" value="${appClientId}">
                    <input type="hidden" name="endo_type[]" value="${appEndoType}">
                    <input type="hidden" name="application_status[]" value="${appStatus}">
                `;

                form.insertAdjacentHTML('afterbegin', hiddenInputs);
            });

            // Update the batch size in the modal title
            document.getElementById('confirmModalLabel').textContent = `Approval of Applications (Batch of ${applications.length})`;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById('applicationList').innerHTML = '<p class="text-danger">Error fetching application details.</p>';
    });
}

    document.addEventListener('DOMContentLoaded', function() {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', updateSelectedApplications);
        });
    });

    function selectAllApplications() {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]');
        const allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
        
        checkboxes.forEach(checkbox => {
            checkbox.checked = !allChecked;
        });
        
        updateSelectedApplications();
    }

    document.getElementById('applicationForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            document.querySelector('.modal-body').innerHTML = data;
            $('#confirmModal').modal('show');
        })
        .catch(error => console.error('Error:', error));
    });

    document.getElementById('confirmBatchApprove').addEventListener('click', function() {
    const form = document.getElementById('batchApproveBI');
    
    // Check if all required fields are filled
    if (form.checkValidity()) {
        const formData = new FormData(form);
        formData.append('approveBatchApplications', '1');

        // Hide the modal before making the fetch request
        $('#confirmModal').modal('hide');

        fetch('/LOSIS/client_/functions/save_appl_endorsement.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success > 0) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: data.message,
                    confirmButtonColor: '#30D685',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed && data.reload) {
                        window.location.reload();
                    }
                });
            } else {
                let errorMessage = data.message;
                if (data.errorDetails && data.errorDetails.length > 0) {
                    errorMessage += "\n\nError details:\n" + data.errorDetails.join("\n");
                }
                
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: errorMessage,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'An error occurred while processing the batch approval.',
                confirmButtonColor: '#d33',
                confirmButtonText: 'OK'
            });
        });
    } else {
        // If form is not valid, show an error message
        Swal.fire({
            icon: 'error',
            title: 'Incomplete Form',
            text: 'Please fill out all required fields before approving.',
            confirmButtonColor: '#d33',
            confirmButtonText: 'OK'
        });
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>