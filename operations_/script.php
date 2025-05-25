<script type="text/javascript">
	$(function(){
        showtotalendo();        
        showpendingendo();
        showonprocessendo();
        showcompletedendo();
        showprevtotalendo();
        showprevpendingendo();
        showprevonprocessendo();
        showprevcompletedendo();    
        showholidaylist();
        showsupervisorlist();
        showoperationslist();       
        showtotalbiteleassign();
        showtotalbitelereturned();
        showtotalbidaassign();
        showtotalbidareturned();
        showticketstatus();
        showtotaldcdaassign();
        showtotaldcdareturned();
	});

    // DASHBOARD //
    function showtotalendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalendo',
            success: function(data){
                $('#total_endo').text(data);
            }           
        });
    }

    function showpendingendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showpendingendo',
            success: function(data){
                $('#pending_endo').text(data);
            }           
        });
    }

    function showonprocessendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showonprocessendo',
            success: function(data){
                $('#onprocess_endo').text(data);
            }           
        });
    }

    function showcompletedendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showcompletedendo',
            success: function(data){
                $('#completed_endo').text(data);
            }           
        });
    }

    function showprevtotalendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevtotalendo',
            success: function(data){
                $('#prevtotal_endo').text(data);
            }           
        });
    }

    function showprevpendingendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevpendingendo',
            success: function(data){
                $('#prevpending_endo').text(data);
            }           
        });
    }

    function showprevonprocessendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevonprocessendo',
            success: function(data){
                $('#prevonprocess_endo').text(data);
            }           
        });
    }

    function showprevcompletedendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevcompletedendo',
            success: function(data){
                $('#prevcompleted_endo').text(data);
            }           
        });
    }

    function showholidaylist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showholidaylist',
            success: function(data){
                $('#holiday_list').html(data);
            }   
        });
    }

    function showsupervisorlist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showsupervisorlist',
            success: function(data){
                $('#supervisor_list').html(data);
            }   
        });
    }

    function showoperationslist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showoperationslist',
            success: function(data){
                $('#operations_list').html(data);
            }   
        });
    }

    // ENDORSEMENTS //

    // VERIFIER'S SIDE //

    // BACKGROUND INVESTIGATION //
    function showtotalbiteleassign() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbiteleassign',
            success: function(data){
                $('#bicountdistributetele').text(data);
            }   
        });
    } 

    function showtotalbitelereturned() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbitelereturned',
            success: function(data){
                $('#bicountreturnedtele').text(data);
            }   
        });
    } 

    function back_endorsements_bi_tele() {
        window.location = 'endorsements_bi_tele.php';
    }

    $("#chkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    }); 

    function displaybiteleendorsement(endo_support, endo_supervisor, endo_tele, endo_analyst, endo_applname, endo_date, endo_code, endo_desc, endo_tadate, endo_requestor, endo_company, endo_package) {
        $('#mdlendorsements').modal('show');
        document.getElementById("biprocess").style.display = "block";
        document.getElementById("dcprocess").style.display = "none";

        $('#assignsupport').text(endo_support);
        $('#assignsupervisor').text(endo_supervisor);
        $('#assignedtele').text(endo_tele);
        $('#assignedanalyst').text(endo_analyst);
        $('#endorsement_applname').text(endo_applname);
        $('#endorsement_date').text(endo_date);
        $('#endorsement_code').text(endo_code);
        $('#endorsement_desc').text(endo_desc);
        $('#endorsement_tadate').text(endo_tadate);
        $('#endorsement_requestor').text(endo_requestor);
        $('#endorsement_company').text(endo_company);
        $('#endorsement_pkgdesc').text(endo_package);
    } 

    function displayreturnedbitele(bitele_applname, bitele_pocname, bitele_endocode, bitele_poccode, bitele_clientcode) {
        $('#mdlreturnendorsement').modal('show');
        document.getElementById("btnreturnedbitele").style.display = "block";
        document.getElementById("btnreturnedbida").style.display = "none";
        document.getElementById("btnreturneddcda").style.display = "none";
        document.getElementById("returnsupervisor").style.display = "block";
        document.getElementById("returnverifier").style.display = "none";

        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');
        $('#returnremarks').val("");
        $('#applicantname').text(bitele_applname);
        $('#supervisorname').text(bitele_pocname);
        $('#endorsementcode').val(bitele_endocode);
        $('#supervisorcode').val(bitele_poccode);
        $('#clientcode').val(bitele_clientcode);
    }

    function displaybidaendorsement(endo_support, endo_supervisor, endo_analyst, endo_applname, endo_date, endo_code, endo_desc, endo_tadate, endo_requestor, endo_company, endo_package) {
        $('#mdlendorsements').modal('show');
        document.getElementById("biprocess").style.display = "none";
        document.getElementById("dcprocess").style.display = "block";

        $('#assignsupportdc').text(endo_support);
        $('#assignsupervisordc').text(endo_supervisor);
        $('#assignedanalystdc').text(endo_analyst);
        $('#endorsement_applname').text(endo_applname);
        $('#endorsement_date').text(endo_date);
        $('#endorsement_code').text(endo_code);
        $('#endorsement_desc').text(endo_desc);
        $('#endorsement_tadate').text(endo_tadate);
        $('#endorsement_requestor').text(endo_requestor);
        $('#endorsement_company').text(endo_company);
        $('#endorsement_pkgdesc').text(endo_package);
    } 

    function displayreturneddcda(bitele_applname, bitele_pocname, bitele_endocode, bitele_poccode, bitele_clientcode) {
        $('#mdlreturnendorsement').modal('show');
        document.getElementById("btnreturnedbitele").style.display = "none";
        document.getElementById("btnreturnedbida").style.display = "none";
        document.getElementById("btnreturneddcda").style.display = "block";
        document.getElementById("returnsupervisor").style.display = "block";
        document.getElementById("returnverifier").style.display = "none";

        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');
        $('#returnremarks').val("");
        $('#applicantname').text(bitele_applname);
        $('#supervisorname').text(bitele_pocname);
        $('#endorsementcode').val(bitele_endocode);
        $('#supervisorcode').val(bitele_poccode);
        $('#clientcode').val(bitele_clientcode);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');

        $('#returnremarks').keyup(function() {
            var text_length = $('#returnremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#return_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearreturnendo() {
        var returnremarks = $('#returnremarks').val();
        
        if ($('#returnremarks').val() == "") {
            $('#mdlreturnendorsement').modal('hide');
        } else if ($('#returnremarks').val()) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, close it!'
            }, function (isConfirm){
                if (isConfirm) {
                    $('#mdlreturnendorsement').modal('hide');
                }
            });
        }
    } 

    function returnedendobitele() {
        var endorsementcode = $('#endorsementcode').val();
        var supervisorcode = $('#supervisorcode').val();
        var clientcode = $('#clientcode').val();
        var returnremarks = $('#returnremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=returnedendobitele' + '&endorsementcode=' + endorsementcode + '&supervisorcode=' + supervisorcode + '&clientcode=' + clientcode + '&returnremarks=' + returnremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Return endorsement success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlreturnendorsement').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant return endorsement",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function displayreturnbitele(returnbiteleappname, returnbiteleendodate, returnbiteleendocode, returnbiteleremarks, returnbipoc, returnbitele, returnbida, returnbiteledatetime, returnbitelecompany) {
        $('#mdlreturnendodetails').modal('show');
        document.getElementById("poctitle").style.display = "none";
        document.getElementById("returnendo_poc").style.display = "none";
        document.getElementById("verifiertitle").style.display = "block";
        document.getElementById("returnendo_tele").style.display = "block";
        document.getElementById("analysttitle").style.display = "block";
        document.getElementById("returnendo_analyst").style.display = "block";
        document.getElementById("pochr").style.display = "none";
        document.getElementById("telehr").style.display = "block";
        document.getElementById("dahr").style.display = "block";

        $('#returnendo_name').text(returnbiteleappname);
        $('#returnendo_date').text(returnbiteleendodate);
        $('#returnendo_code').text(returnbiteleendocode);
        $('#returnendo_remarks').text(returnbiteleremarks);
        $('#returnendo_tele').text(returnbitele);
        $('#returnendo_analyst').text(returnbida);
        $('#returnendo_datetime').text(returnbiteledatetime);
        $('#returnendo_company').text(returnbitelecompany);
    } 

    function displayreturnhistorybitele(returnhistendobitele_code, returnhistendobitele_remarks, returnhistendobitele_tele, returnhistendobitele_analyst, returnhistendobitele_retdatetime, returnhistendobitele_clrdatetime, returnhistendobitele_company) {
        $('#mdlreturnhistory').modal('show');
        document.getElementById("pochisttitle").style.display = "none";
        document.getElementById("returnhistendo_poc").style.display = "none";
        document.getElementById("pochisthr").style.display = "none";
        document.getElementById("telehisttitle").style.display = "block";
        document.getElementById("returnhistendo_tele").style.display = "block";
        document.getElementById("telehisthr").style.display = "block";
        document.getElementById("analysthisttitle").style.display = "block";
        document.getElementById("returnhistendo_analyst").style.display = "block";
        document.getElementById("dahisthr").style.display = "block";

        $('#returnhistendo_code').text(returnhistendobitele_code);
        $('#returnhistendo_remarks').text(returnhistendobitele_remarks);
        $('#returnhistendo_tele').text(returnhistendobitele_tele);
        $('#returnhistendo_analyst').text(returnhistendobitele_analyst);
        $('#returnhistendo_retdatetime').text(returnhistendobitele_retdatetime);
        $('#returnhistendo_clrdatetime').text(returnhistendobitele_clrdatetime);
        $('#returnhistendo_company').text(returnhistendobitele_company);
    }     

    // ANALYST'S SIDE //

    // BACKGROUND INVESTIGATION //
    function showtotalbidaassign() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbidaassign',
            success: function(data){
                $('#bicountdistributeda').text(data);
            }   
        });
    } 

    function showtotalbidareturned() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbidareturned',
            success: function(data){
                $('#bicountreturnedda').text(data);
            }   
        });
    }

    function back_endorsements_bi_da() {
        window.location = 'endorsements_bi_da.php';
    }     

    function displayreturnedbida(bida_applname, bida_telename, bida_endocode, bida_poccode, bida_telecode, bida_clientcode) {
        $('#mdlreturnendorsement').modal('show');
        document.getElementById("btnreturnedbitele").style.display = "none";
        document.getElementById("btnreturnedbida").style.display = "block";
        document.getElementById("btnreturneddcda").style.display = "none";
        document.getElementById("returnsupervisor").style.display = "none";
        document.getElementById("returnverifier").style.display = "block";

        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');
        $('#returnremarks').val("");
        $('#applicantname').text(bida_applname);
        $('#verifiername').text(bida_telename);
        $('#endorsementcode').val(bida_endocode);
        $('#supervisorcode').val(bida_poccode);
        $('#verifiercode').val(bida_telecode);
        $('#clientcode').val(bida_clientcode);
    }

    function returnedendobida() {
        var endorsementcode = $('#endorsementcode').val();
        var supervisorcode = $('#supervisorcode').val();
        var verifiercode = $('#verifiercode').val();
        var clientcode = $('#clientcode').val();
        var returnremarks = $('#returnremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=returnedendobida' + '&endorsementcode=' + endorsementcode + '&supervisorcode=' + supervisorcode + '&verifiercode=' + verifiercode + '&clientcode=' + clientcode + '&returnremarks=' + returnremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Return endorsement success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlreturnendorsement').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant return endorsement",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function displayreturnbida(returnbidaappname, returnbidaendodate, returnbidaendocode, returnbidaremarks, returnbidapoc, returnbida, returnbidadatetime, returnbidacompany) {
        $('#mdlreturnendodetails').modal('show');
        document.getElementById("poctitle").style.display = "block";
        document.getElementById("returnendo_poc").style.display = "block";
        document.getElementById("verifiertitle").style.display = "none";
        document.getElementById("returnendo_tele").style.display = "none";
        document.getElementById("analysttitle").style.display = "block";
        document.getElementById("returnendo_analyst").style.display = "block";
        document.getElementById("pochr").style.display = "block";
        document.getElementById("telehr").style.display = "none";
        document.getElementById("dahr").style.display = "block";

        $('#returnendo_name').text(returnbidaappname);
        $('#returnendo_date').text(returnbidaendodate);
        $('#returnendo_code').text(returnbidaendocode);
        $('#returnendo_remarks').text(returnbidaremarks);
        $('#returnendo_poc').text(returnbidapoc);
        $('#returnendo_analyst').text(returnbida);
        $('#returnendo_datetime').text(returnbidadatetime);
        $('#returnendo_company').text(returnbidacompany);
    }  

    function displayreturnhistorybida(returnhistendobida_code, returnhistendobida_remarks, returnhistendobida_poc, returnhistendobida_analyst, returnhistendobida_retdatetime, returnhistendobida_clrdatetime, returnhistendobida_company) {
        $('#mdlreturnhistory').modal('show');
        document.getElementById("pochisttitle").style.display = "block";
        document.getElementById("returnhistendo_poc").style.display = "block";
        document.getElementById("pochisthr").style.display = "block";
        document.getElementById("telehisttitle").style.display = "none";
        document.getElementById("returnhistendo_tele").style.display = "none";
        document.getElementById("telehisthr").style.display = "none";
        document.getElementById("analysthisttitle").style.display = "block";
        document.getElementById("returnhistendo_analyst").style.display = "block";
        document.getElementById("dahisthr").style.display = "block";

        $('#returnhistendo_code').text(returnhistendobida_code);
        $('#returnhistendo_remarks').text(returnhistendobida_remarks);
        $('#returnhistendo_poc').text(returnhistendobida_poc);
        $('#returnhistendo_analyst').text(returnhistendobida_analyst);
        $('#returnhistendo_retdatetime').text(returnhistendobida_retdatetime);
        $('#returnhistendo_clrdatetime').text(returnhistendobida_clrdatetime);
        $('#returnhistendo_company').text(returnhistendobida_company);
    } 

    // DATABASE CHECK //
    function showtotaldcdaassign() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcdaassign',
            success: function(data){
                $('#bicountdistributeda').text(data);
            }   
        });
    } 

    function showtotaldcdareturned() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcdareturned',
            success: function(data){
                $('#bicountreturnedda').text(data);
            }   
        });
    }

    function back_endorsements_dc_da() {
        window.location = 'endorsements_dc_da.php';
    } 

    function returnedendodcda() {
        var endorsementcode = $('#endorsementcode').val();
        var supervisorcode = $('#supervisorcode').val();
        var verifiercode = $('#verifiercode').val();
        var clientcode = $('#clientcode').val();
        var returnremarks = $('#returnremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=returnedendodcda' + '&endorsementcode=' + endorsementcode + '&supervisorcode=' + supervisorcode + '&verifiercode=' + verifiercode + '&clientcode=' + clientcode + '&returnremarks=' + returnremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Return endorsement success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlreturnendorsement').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant return endorsement",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // TICKETING //
    function viewaddticket() {
        var text_max = 500;
        $('#tickettype_feedback').html(text_max + ' characters remaining');
        $('#mdladdticket').modal('show');
    }

    function clearticket() {
        $('#mdladdticket').modal('hide');
        $('#start_date').val("");
        $('#end_date').val("");
        $('#tick_tasks').val("");
    }

    $(document).ready(function() {
        var text_max = 500;
        $('#tickettype_feedback').html(text_max + ' characters remaining');

        $('#tick_tasks').keyup(function() {
            var text_length = $('#tick_tasks').val().length;
            var text_remaining = text_max - text_length;

            $('#tickettype_feedback').html(text_remaining + ' characters remaining');
        });
    });    

    function showticketstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showticketstatus',
            success: function(data){
                $('#ticketstatus').html(data);
            }   
        });
    }

    function saveticket() {
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();
        var tick_type = $('#tick_type').val();
        var tick_tasks = $('#tick_tasks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, create it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=saveticket' + '&start_date=' + start_date + '&end_date=' + end_date + '&tick_type=' + tick_type + '&tick_tasks=' + tick_tasks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Ticket added successfully",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdladdticket').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant add ticket",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    } 

    function EnableDisableTextBox(){    
        var verification_code = $('#verification_code').val();

        if ($('#verification_code').val() == 'selectcode') {
            document.getElementById("endo_remarks").disabled = false;
        } else if ($('#verification_code').val() == '0') {
            document.getElementById("endo_remarks").disabled = true;
        } else if ($('#verification_code').val() == '1') {
            document.getElementById("endo_remarks").disabled = false;      
        } else if ($('#verification_code').val() == '2') {
            document.getElementById("endo_remarks").disabled = true;
        } else {
            document.getElementById("endo_remarks").disabled = false;
        }
    }

    // LOGOUT //
    function userlogout() {
        swal({
            title: 'Log Out',
            text: "You will be returned to the login page",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'logout.php',
                    data: 'form=userlogout',
                    success: function(data){
                        window.location.href = '../signin.php';
                    }
                });
            }
        });
    }

    // ACTIVITY LOGS //
    function savedashboard() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedashboard',
            success: function(data){

            }
        });
    }

    function saveendorsementbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendorsementbitele',
            success: function(data){

            }
        });
    }

    function savemonitorbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorbitele',
            success: function(data){

            }
        });
    }

    function saveuploaddtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveuploaddtr',
            success: function(data){

            }
        });
    }

    function savemanagedtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanagedtr',
            success: function(data){

            }
        });
    }

    function saveendorsementbianalyst() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendorsementbianalyst',
            success: function(data){

            }
        });
    }

    function saveendorsementdcanalyst() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendorsementdcanalyst',
            success: function(data){

            }
        });
    }  

    function savemonitorbianalyst() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorbianalyst',
            success: function(data){

            }
        });
    }

    function savemonitordcanalyst() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitordcanalyst',
            success: function(data){

            }
        });
    }

    function saveuserprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveuserprofile',
            success: function(data){

            }
        });
    }

    function saveusermessaging() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveusermessaging',
            success: function(data){

            }
        });
    }

    function saveuserticketing() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveuserticketing',
            success: function(data){

            }
        });
    }

    function saveaddreportbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveaddreportbitele',
            success: function(data){

            }
        });
    }

    function savesuppdocsbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesuppdocsbitele',
            success: function(data){

            }
        });
    }

    function saveviewendobitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewendobitele',
            success: function(data){

            }
        });
    }

    function savereturnendobitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnendobitele',
            success: function(data){

            }
        });
    }

    function saveviewreportformbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewreportformbitele',
            success: function(data){

            }
        });
    }

    function saveviewreportbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewreportbitele',
            success: function(data){

            }
        });
    }

    function savegeneraterepbitele() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savegeneraterepbitele',
            success: function(data){

            }
        });
    }

    function saveviewreturnedbiteleendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewreturnedbiteleendo',
            success: function(data){

            }
        });
    }

    function saveeditreportbida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveeditreportbida',
            success: function(data){

            }
        });
    }

    function savesuppdocsbida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesuppdocsbida',
            success: function(data){

            }
        });
    }

    function savegeneraterepbida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savegeneraterepbida',
            success: function(data){

            }
        });
    }

    function saveviewendobida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewendobida',
            success: function(data){

            }
        });
    }

    function savereturnendobida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnendobida',
            success: function(data){

            }
        });
    }

    function savereturnendobida() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnendobida',
            success: function(data){

            }
        });
    }

    function savereturnedbitelehistendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnedbitelehistendo',
            success: function(data){

            }
        });
    }

    function saveviewreturnedbidaendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewreturnedbidaendo',
            success: function(data){

            }
        });
    }

    function savereturnedbidahistendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnedbidahistendo',
            success: function(data){

            }
        });
    }

</script>