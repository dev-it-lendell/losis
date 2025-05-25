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
        showtotalbiapprv();
        showtotalbiassign();
        showtotalbireturned();
        showtotalbireview();
        showtotalbimodify();
        offbipoccurrentendo();
        offbipocyearlyendo();
        spvbijan();
        spvbifeb();
        spvbimar();
        spvbiapr();
        spvbimay();
        spvbijune();
        spvbijuly();
        spvbiaug();
        spvbisept();
        spvbioct();
        spvbinov();
        spvbidec();
        offdcpoccurrentendo();
        offdcpocyearlyendo();
        spvdcjan();
        spvdcfeb();
        spvdcmar();
        spvdcapr();
        spvdcmay();
        spvdcjune();
        spvdcjuly();
        spvdcaug();
        spvdcsept();
        spvdcoct();
        spvdcnov();
        spvdcdec();
        showticketstatus();   
        showtotaldcapprv();
        showtotaldcassign();
        showtotaldcreturned();
        showtotaldcreview();
        showtotaldcmodify();     
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

    // BACKGROUND INVESTIGATION //
    function displaybiendorsements(endo_applname, endo_date, endo_code, endo_desc, endo_tadate, endo_requestor, endo_company, endo_package) {
        $('#mdlendorsements').modal('show');

        $('#endorsement_applname').text(endo_applname);
        $('#endorsement_date').text(endo_date);
        $('#endorsement_code').text(endo_code);
        $('#endorsement_desc').text(endo_desc);
        $('#endorsement_tadate').text(endo_tadate);
        $('#endorsement_requestor').text(endo_requestor);
        $('#endorsement_company').text(endo_company);
        $('#endorsement_pkgdesc').text(endo_package);
    }

    function displaybiassignendorsements(endo_support, endo_supervisor, endo_tele, endo_analyst, endo_applname, endo_date, endo_code, endo_desc, endo_tadate, endo_requestor, endo_company, endo_package) {
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

    function displayreturnbi(returnbiappname, returnbiendodate, returnbiendocode, returnbiremarks, returnbipoc, returnbitele, returnbidatetime, returnbicompany) {
        $('#mdlreturnendodetails').modal('show');
        document.getElementById("verifiertitle").style.display = "block";
        document.getElementById("returnendo_tele").style.display = "block";
        document.getElementById("analysttitle").style.display = "none";
        document.getElementById("returnendo_analyst").style.display = "none";
        document.getElementById("returnendo_client").style.display = "none";
        document.getElementById("clienttitle").style.display = "none";

        $('#returnendo_name').text(returnbiappname);
        $('#returnendo_date').text(returnbiendodate);
        $('#returnendo_code').text(returnbiendocode);
        $('#returnendo_remarks').text(returnbiremarks);
        $('#returnendo_poc').text(returnbipoc);
        $('#returnendo_tele').text(returnbitele);
        $('#returnendo_datetime').text(returnbidatetime);
        $('#returnendo_company').text(returnbicompany);
    }    

    function displayreturnhistorybi(rethistbiendo_code, rethistbiendo_remarks, rethistbiendo_poc, rethistbiendo_tele, rethistbiendo_retdatetime, rethistbiendo_clrdatetime, rethistbiendo_company) {
        $('#mdlreturnhistory').modal('show');
        document.getElementById("telehisttitle").style.display = "block";
        document.getElementById("returnhistendo_tele").style.display = "block";
        document.getElementById("analysthisttitle").style.display = "none";
        document.getElementById("returnhistendo_analyst").style.display = "none";
        document.getElementById("clienthisttitle").style.display = "none";
        document.getElementById("returnhistendo_client").style.display = "none";

        $('#returnhistendo_code').text(rethistbiendo_code);
        $('#returnhistendo_remarks').text(rethistbiendo_remarks);
        $('#returnhistendo_poc').text(rethistbiendo_poc);
        $('#returnhistendo_tele').text(rethistbiendo_tele);
        $('#returnhistendo_retdatetime').text(rethistbiendo_retdatetime);
        $('#returnhistendo_clrdatetime').text(rethistbiendo_clrdatetime);
        $('#returnhistendo_company').text(rethistbiendo_company);
    }

    function displayreturnendobi(biendo_applname, biendo_daname, biendo_endocode, biendo_poccode, biendo_dacode, biendo_clientcode) {
        $('#mdlreturnendorsement').modal('show');
        document.getElementById("returnendobi").style.display = "block";
        document.getElementById("returnendo_dc").style.display = "none";

        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');
        $('#returnremarks').val("");
        $('#applicantname').text(biendo_applname);
        $('#analystname').text(biendo_daname);
        $('#endorsementcode').val(biendo_endocode);
        $('#supervisorcode').val(biendo_poccode);
        $('#analystcode').val(biendo_dacode);
        $('#clientcode').val(biendo_clientcode);
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

    function returnedendobi() {
        var analystcode = $('#analystcode').val();
        var endorsementcode = $('#endorsementcode').val();
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
                    data: '&form=returnedendobi' + '&analystcode=' + analystcode + '&endorsementcode=' + endorsementcode + '&clientcode=' + clientcode + '&returnremarks=' + returnremarks,
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

    function displaymodifybi(modifybiappname, modifybiendodate, modifybiendocode, modifybiremarks, modifybipoc, modifybiclient, modifybidatetime, modifybicompany) {
        $('#mdlreturnendodetails').modal('show');
        document.getElementById("verifiertitle").style.display = "none";
        document.getElementById("returnendo_tele").style.display = "none";
        document.getElementById("analysttitle").style.display = "none";
        document.getElementById("returnendo_analyst").style.display = "none";
        document.getElementById("returnendo_client").style.display = "block";
        document.getElementById("clienttitle").style.display = "block";

        $('#returnendo_name').text(modifybiappname);
        $('#returnendo_date').text(modifybiendodate);
        $('#returnendo_code').text(modifybiendocode);
        $('#returnendo_remarks').text(modifybiremarks);
        $('#returnendo_poc').text(modifybipoc);
        $('#returnendo_client').text(modifybiclient);
        $('#returnendo_datetime').text(modifybidatetime);
        $('#returnendo_company').text(modifybicompany);
    } 

    function displaymodifyhistorybi(modhistbiendo_code, modhistbiendo_remarks, modhistbiendo_poc, modhistbiendo_client, modhistbiendo_retdatetime, modhistbiendo_clrdatetime, modhistbiendo_company) {
        $('#mdlreturnhistory').modal('show');
        document.getElementById("telehisttitle").style.display = "none";
        document.getElementById("returnhistendo_tele").style.display = "none";
        document.getElementById("analysthisttitle").style.display = "none";
        document.getElementById("returnhistendo_analyst").style.display = "none";
        document.getElementById("clienthisttitle").style.display = "block";
        document.getElementById("returnhistendo_client").style.display = "block";

        $('#returnhistendo_code').text(modhistbiendo_code);
        $('#returnhistendo_remarks').text(modhistbiendo_remarks);
        $('#returnhistendo_poc').text(modhistbiendo_poc);
        $('#returnhistendo_client').text(modhistbiendo_client);
        $('#returnhistendo_retdatetime').text(modhistbiendo_retdatetime);
        $('#returnhistendo_clrdatetime').text(modhistbiendo_clrdatetime);
        $('#returnhistendo_company').text(modhistbiendo_company);
    }

    function back_endorsements_bi() {
        window.location = 'endorsement_bi.php';
    }

    function showtotalbiapprv() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbiapprv',
            success: function(data){
                $('#bicountapproval').text(data);
            }   
        });
    } 

    function showtotalbiassign() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbiassign',
            success: function(data){
                $('#bicountassigning').text(data);
            }   
        });
    } 

    function showtotalbireturned() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbireturned',
            success: function(data){
                $('#bicountreturned').text(data);
            }   
        });
    } 

    function showtotalbireview() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbireview',
            success: function(data){
                $('#bicountreview').text(data);
            }   
        });
    } 

    function showtotalbimodify() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalbimodify',
            success: function(data){
                $('#bicountmodify').text(data);
            }   
        });
    } 

    // DATABASE CHECK //
    function showtotaldcapprv() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcapprv',
            success: function(data){
                $('#dccountapproval').text(data);
            }   
        });
    } 

    function showtotaldcassign() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcassign',
            success: function(data){
                $('#dccountassigning').text(data);
            }   
        });
    } 

    function showtotaldcreturned() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcreturned',
            success: function(data){
                $('#dccountreturned').text(data);
            }   
        });
    } 

    function showtotaldcreview() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcreview',
            success: function(data){
                $('#dccountreview').text(data);
            }   
        });
    } 

    function showtotaldcmodify() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotaldcmodify',
            success: function(data){
                $('#dccountmodify').text(data);
            }   
        });
    } 

    function displaydcassignendorsements(endo_support, endo_supervisor, endo_analyst, endo_applname, endo_date, endo_code, endo_desc, endo_tadate, endo_requestor, endo_company, endo_package) {
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


    function displayreturnendodc(biendo_applname, biendo_daname, biendo_endocode, biendo_poccode, biendo_dacode, biendo_clientcode) {
        $('#mdlreturnendorsement').modal('show');
        document.getElementById("returnendobi").style.display = "none";
        document.getElementById("returnendo_dc").style.display = "block";

        var text_max = 200;
        $('#return_feedback').html(text_max + ' characters remaining');
        $('#returnremarks').val("");
        $('#applicantname').text(biendo_applname);
        $('#analystname').text(biendo_daname);
        $('#endorsementcode').val(biendo_endocode);
        $('#supervisorcode').val(biendo_poccode);
        $('#analystcode').val(biendo_dacode);
        $('#clientcode').val(biendo_clientcode);
    }

    function returnedendodc() {
        var analystcode = $('#analystcode').val();
        var endorsementcode = $('#endorsementcode').val();
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
                    data: '&form=returnedendodc' + '&analystcode=' + analystcode + '&endorsementcode=' + endorsementcode + '&clientcode=' + clientcode + '&returnremarks=' + returnremarks,
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

    // MONITOR ENDORSEMENT //

    // BACKGROUND INVESTIGATION //
    function offbipoccurrentendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offbipoccurrentendo',
            success: function(data){
                $('#officialbipocmonthlyendo').text(data);
            }
        });
    }

    function offbipocyearlyendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offbipocyearlyendo',
            success: function(data){
                $('#officialbipocyearlyendo').text(data);
            }
        });
    }

    function spvbijan() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbijan',
            success: function(data){
                $('#janspvbiendo').html(data);
            }
        });
    }

    function spvbifeb() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbifeb',
            success: function(data){
                $('#febspvbiendo').html(data);
            }
        });
    }

    function spvbimar() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbimar',
            success: function(data){
                $('#marspvbiendo').html(data);
            }
        });
    }

    function spvbiapr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbiapr',
            success: function(data){
                $('#aprspvbiendo').html(data);
            }
        });
    }

    function spvbimay() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbimay',
            success: function(data){
                $('#mayspvbiendo').html(data);
            }
        });
    }

    function spvbijune() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbijune',
            success: function(data){
                $('#junespvbiendo').html(data);
            }
        });
    }

    function spvbijuly() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbijuly',
            success: function(data){
                $('#julyspvbiendo').html(data);
            }
        });
    }

    function spvbiaug() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbiaug',
            success: function(data){
                $('#augspvbiendo').html(data);
            }
        });
    }

    function spvbisept() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbisept',
            success: function(data){
                $('#septspvbiendo').html(data);
            }
        });
    }

    function spvbioct() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbioct',
            success: function(data){
                $('#octspvbiendo').html(data);
            }
        });
    }

    function spvbinov() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbinov',
            success: function(data){
                $('#novspvbiendo').html(data);
            }
        });
    }

    function spvbidec() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvbidec',
            success: function(data){
                $('#decspvbiendo').html(data);
            }
        });
    }

    function back_spv_monitor_bi() {
        window.location = 'monitor_endo_bi.php';
    }

    // DATABASE CHECK //
    function offdcpoccurrentendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offdcpoccurrentendo',
            success: function(data){
                $('#officialdcpocmonthlyendo').text(data);
            }
        });
    }

    function offdcpocyearlyendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offdcpocyearlyendo',
            success: function(data){
                $('#officialdcpocyearlyendo').text(data);
            }
        });
    }

    function spvdcjan() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcjan',
            success: function(data){
                $('#janspvdcendo').html(data);
            }
        });
    }

    function spvdcfeb() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcfeb',
            success: function(data){
                $('#febspvdcendo').html(data);
            }
        });
    }

    function spvdcmar() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcmar',
            success: function(data){
                $('#marspvdcendo').html(data);
            }
        });
    }

    function spvdcapr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcapr',
            success: function(data){
                $('#aprspvdcendo').html(data);
            }
        });
    }

    function spvdcmay() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcmay',
            success: function(data){
                $('#mayspvdcendo').html(data);
            }
        });
    }

    function spvdcjune() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcjune',
            success: function(data){
                $('#junespvdcendo').html(data);
            }
        });
    }

    function spvdcjuly() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcjuly',
            success: function(data){
                $('#julyspvdcendo').html(data);
            }
        });
    }

    function spvdcaug() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcaug',
            success: function(data){
                $('#augspvdcendo').html(data);
            }
        });
    }

    function spvdcsept() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcsept',
            success: function(data){
                $('#septspvdcendo').html(data);
            }
        });
    }

    function spvdcoct() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcoct',
            success: function(data){
                $('#octspvdcendo').html(data);
            }
        });
    }

    function spvdcnov() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcnov',
            success: function(data){
                $('#novspvdcendo').html(data);
            }
        });
    }

    function spvdcdec() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=spvdcdec',
            success: function(data){
                $('#decspvdcendo').html(data);
            }
        });
    }

    function back_spv_monitor_dc() {
        window.location = 'monitor_endo_dc.php';
    }

    // RERUN ENDORSEMENT //

    // BACKGROUND INVESTIGATION //
    function back_spv_rerun_bi() {
        window.location = 'rerun_endo_bi.php';
    }

    // DATABASE CHECK //
    function back_spv_rerun_dc() {
        window.location = 'rerun_endo_dc.php';
    }

    // ENDORSEMENTS LOGS //

    // BACKGROUND INVESTIGATION //
    function offbipoccurrentendologs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offbipoccurrentendologs',
            success: function(data){
                $('#officialbipocmonthlyendologs').text(data);
            }
        });
    }

    function offbipocyearlyendologs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offbipocyearlyendologs',
            success: function(data){
                $('#officialbipocyearlyendologs').text(data);
            }
        });
    }

    // DATABASE CHECK //
    function offdcpoccurrentendologs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offdcpoccurrentendologs',
            success: function(data){
                $('#officialdcpocmonthlyendologs').text(data);
            }
        });
    }

    function offdcpocyearlyendologs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=offdcpocyearlyendologs',
            success: function(data){
                $('#officialdcpocyearlyendologs').text(data);
            }
        });
    }


    // OPERATIONS //

    // REQUEST OPERATIONS //
    function back_spv_requestops() {
        window.location = 'requesting_ops.php';
    }

    function displayrequestops() {
        $('#mdlrequestops').modal('show');

        var text_max = 200;
        $('#opsremarks_feedback').html(text_max + ' characters remaining');
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#opsremarks_feedback').html(text_max + ' characters remaining');

        $('#req_remarks').keyup(function() {
            var text_length = $('#req_remarks').val().length;
            var text_remaining = text_max - text_length;

            $('#opsremarks_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function displayopsteams() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayopsteams',
            success: function(data){
                $('#req_teams').html(data);
            }
        });
    }

    function displayopmembers() {
        var req_teams = $('#req_teams').val();

        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: '&form=displayopmembers' + '&req_teams=' + req_teams,
            success: function(data){
                $('#req_ops').html(data);
            }
        });
    }

    function displayopsclients() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayopsclients',
            success: function(data){
                $('#req_clients').html(data);
            }
        });
    }

    function savecreatedrequest() {
        var req_teams = $('#req_teams').val();
        var req_ops = $('#req_ops').val();
        var req_clients = $('#req_clients').val();
        var req_borrowdatefrom = $('#req_borrowdatefrom').val();
        var req_borrowdateto = $('#req_borrowdateto').val();
        var req_remarks = $('#req_remarks').val();

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
                    data: '&form=savecreatedrequest' + '&req_teams=' + req_teams + '&req_ops=' + req_ops + '&req_clients=' + req_clients + '&req_borrowdatefrom=' + req_borrowdatefrom + '&req_borrowdateto=' + req_borrowdateto + '&req_remarks=' + req_remarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Request successfully added",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlrequestops').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error',
                                text: "Cant create request",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function clearrequestops() {
        var req_teams = $('#req_teams').val();
        var req_ops = $('#req_ops').val();
        var req_clients = $('#req_clients').val();
        var req_borrowdatefrom = $('#req_borrowdatefrom').val();
        var req_borrowdateto = $('#req_borrowdateto').val();
        var req_remarks = $('#req_remarks').val();
        
        if ($('#req_teams').val() == "" || $('#req_ops').val() == "" || $('#req_clients').val() == "" || $('#req_borrowdatefrom').val() == "" || $('#req_borrowdateto').val() == "") {
            displayopsteams();
            displayopmembers();
            displayopsclients();
            $('#req_borrowdatefrom').val("");
            $('#req_borrowdateto').val("");
            $('#req_remarks').val("");
            $('#mdlrequestops').modal('hide');
        } else if ($('#req_borrowdatefrom').val() || $('#req_borrowdateto').val()) {
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
                    displayopsteams();
                    displayopmembers();
                    displayopsclients();
                    $('#req_borrowdatefrom').val("");
                    $('#req_borrowdateto').val("");
                    $('#req_remarks').val("");
                    $('#mdlrequestops').modal('hide');
                }
            });
        }
    }

    // APPROVAL OF OPERATIONS //
    function back_spv_apprvops() {
        window.location = 'approval_ops.php';
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#opsdenyremarks_feedback').html(text_max + ' characters remaining');

        $('#req_denyremarks').keyup(function() {
            var text_length = $('#req_denyremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#opsdenyremarks_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function enabledisablerequest(){    
        var requeststatus = $('#requeststatus').val();

        if ($('#requeststatus').val() == '0') {
            document.getElementById("req_denyremarks").disabled = true;
        } else if ($('#requeststatus').val() == '1') {
            document.getElementById("req_denyremarks").disabled = true;      
        } else if ($('#requeststatus').val() == '2') {
            document.getElementById("req_denyremarks").disabled = false;
        } else {
            document.getElementById("req_denyremarks").disabled = false;
        }
    }

    // MANAGE OPERATIONS //
    function displayopsmembers() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayopsmembers',
            success: function(data){
                $('#opslist').html(data);
            }
        });
    }

    function displayselectedmember() {
        var opslist = $('#opslist').val();

        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: '&opslist=' + opslist + '&form=displayselectedmember',
            success: function(data){
                if (data == "") {
                    $('#opsinfo').html("");
                    document.getElementById("viewopsperf").disabled = true;
                    document.getElementById("removeops").disabled = true;
                } else {
                    $('#opsinfo').html(data);
                    document.getElementById("viewopsperf").disabled = false;
                    document.getElementById("removeops").disabled = false;   
                }
            }
        });
    }

    function removemember() {
        displayopsmembers();
        $('#opsinfo').html("");
        $('#opsdetails').html("");
        document.getElementById("viewopsperf").disabled = true;
        document.getElementById("removeops").disabled = true;
    }

    function displaymemberdetails() {
        var opslist = $('#opslist').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            allowOutsideClick: false,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, display it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=displaymemberdetails' + '&opslist=' + opslist,
                    success: function(data){
                        if (data == "") {
                            $('#opsdetails').html("");
                        } else { 
                            $('#opsdetails').html(data);
                        }
                    }
                });
            }
        });
    }

    // DTR MANAGEMENT //
    function displaypocspvmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaypocspvmonthlydtr',
            success: function(data){
                $('#supspvmonthlydtr').text(data);
            }
        });
    }

    function displaypocspvyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaypocspvyearlydtr',
            success: function(data){
                $('#supspvyearlydtr').text(data);
            }
        });
    }

    function displaypocopsmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaypocopsmonthlydtr',
            success: function(data){
                $('#supopsmonthlydtr').text(data);
            }
        });
    }

    function displaypocopsyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaypocopsyearlydtr',
            success: function(data){
                $('#supopsyearlydtr').text(data);
            }
        });
    }

    // LOGOUT //
    function spvlogout() {
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
                    data: 'form=spvlogout',
                    success: function(data){
                        window.location.href = '../signin.php';
                    }
                });
            }
        });
    }

    // USER PROFILE //
    function displaymonthlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyactlogs',
            success: function(data){
                $('#officialpocmonthlyactlogs').text(data);
            }
        });
    }

    function displayyearlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyactlogs',
            success: function(data){
                $('#officialpocyearlyactlogs').text(data);
            }
        });
    }

    function displaymonthlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyuserlogs',
            success: function(data){
                $('#officialpocmonthlyuserlogs').text(data);
            }
        });
    }

    function displayyearlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyuserlogs',
            success: function(data){
                $('#officialpocyearlyuserlogs').text(data);
            }
        });
    } 

    function back_poc_user_profile() {
        window.location = 'user_profile.php';
    }    

    $(document).ready(function() {
        var text_max = 500;
        $('#address_feedback').html(text_max + ' characters remaining');

        $('#pocaddress').keyup(function() {
            var text_length = $('#pocaddress').val().length;
            var text_remaining = text_max - text_length;

            $('#address_feedback').html(text_remaining + ' characters remaining');
        });
    });

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

    function saveendorsementbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendorsementbi',
            success: function(data){

            }
        });
    }

    function saveendorsementdc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendorsementdc',
            success: function(data){

            }
        });
    }

    function savemonitorendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorendobi',
            success: function(data){

            }
        });
    }

    function savemonitorendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorendodc',
            success: function(data){

            }
        });
    }

    function savererunendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savererunendobi',
            success: function(data){

            }
        });
    }

    function savererunendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savererunendodc',
            success: function(data){

            }
        });
    }

    function saveendologbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendologbi',
            success: function(data){

            }
        });
    }

    function saveendologdc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveendologdc',
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

    function savedtrpoc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedtrpoc',
            success: function(data){

            }
        });
    }

    function savedtrops() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedtrops',
            success: function(data){

            }
        });
    }

    function savereqops() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereqops',
            success: function(data){

            }
        });
    }

    function saveapprops() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveapprops',
            success: function(data){

            }
        });
    }

    function savemanageops() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanageops',
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

    function saveviewendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewendobi',
            success: function(data){

            }
        });
    }

    function savesupportingdocsbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesupportingdocsbi',
            success: function(data){

            }
        });
    }

    function savereturnedbihistendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnedbihistendo',
            success: function(data){

            }
        });
    }

    function saveviewreturnedbiendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnedbihistendo',
            success: function(data){

            }
        });
    }

    function saveviewmodifybiendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewmodifybiendo',
            success: function(data){

            }
        });
    }

    function savemodifybihistendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemodifybihistendo',
            success: function(data){

            }
        });
    }
</script>