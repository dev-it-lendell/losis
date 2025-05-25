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
		showmemberlist();
		showsupervisorlist();
        showsitelist();
        showbitotalendo();
        showbistatus();
        showdctotalendo();
        showdcstatus();
        showbicurrentmonth();
        showbicurrentyear();
        showbijanstatus();
        showbifebstatus();
        showbimarstatus();
        showbiaprstatus();
        showbimaystatus();
        showbijunestatus();
        showbijulystatus();
        showbiaugstatus();
        showbiseptstatus();
        showbioctstatus();
        showbinovstatus();
        showbidecstatus();
        showdccurrentmonth();
        showdccurrentyear();
        showdcjanstatus();
        showdcfebstatus();
        showdcmarstatus();
        showdcaprstatus();
        showdcmaystatus();
        showdcjunestatus();
        showdcjulystatus();
        showdcaugstatus();
        showdcseptstatus();
        showdcoctstatus();
        showdcnovstatus();
        showdcdecstatus();
        showcurrentotalappl();
        showapplstatus();
        showactlogscurrentmonth();
        showactlogscurrentyear();
        showuserlogscurrentmonth();
        showuserlogscurrentyear();
	});

    // VIEW APPLICATION FORM //
    function displayapplication(id, application_datetime, application_code, applicantname, email_addr, mobile_no, application_status) {
        $('#mdlapplications').modal('show');

        $('#application_id').text(id);
        $('#application_date').text(application_datetime);
        $('#application_code').text(application_code);
        $('#application_applname').text(applicantname);
        $('#application_eaddress').text(email_addr);
        $('#application_mobileno').text(mobile_no);
        $('#application_status').text(application_status);

    }
    
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

	function showmemberlist() {
		$.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showmemberlist',
            success: function(data){
                $('#teammember_list').html(data);
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

    function back_dashboard() {
        window.location = 'dashboard.php';
    }

    // NEW ENDORSEMENT //
    function showendotype() {
        var endo_type = $('#endo_type').text();

        if ($('#endo_type').val() == '0') {
            document.getElementById("batch_id").style.display = "block";       
            document.getElementById("dcturnarounddate").style.display = "none";       
            document.getElementById("biturnarounddate").style.display = "block";       
            document.getElementById("endo_importance").style.display = "block";       
            document.getElementById("endo_sites").style.display = "block";       
        } else if ($('#endo_type').val() == '1') {
            document.getElementById("batch_id").style.display = "block";       
            document.getElementById("dcturnarounddate").style.display = "block";       
            document.getElementById("biturnarounddate").style.display = "none";       
            document.getElementById("endo_importance").style.display = "block";  
            document.getElementById("endo_sites").style.display = "block";       
        } else {
            document.getElementById("batch_id").style.display = "none";       
            document.getElementById("dcturnarounddate").style.display = "none";       
            document.getElementById("biturnarounddate").style.display = "none";       
            document.getElementById("endo_importance").style.display = "none";  
            document.getElementById("endo_sites").style.display = "none";       
        }
    }

    function clearnewendo() {
        document.getElementById("batch_id").style.display = "none";       
        document.getElementById("dcturnarounddate").style.display = "none";       
        document.getElementById("biturnarounddate").style.display = "none";       
        document.getElementById("endo_importance").style.display = "none"; 
        document.getElementById("endo_sites").style.display = "none"; 
        $('#batch_id').val("");
        $('#endo_importance').val('endoimp');
        $('#endo_type').val('endo');
    }

    function showsitelist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showsitelist',
            success: function(data){
                $('#sites').html(data);
            }
        });
    }  

    function selectionsite() {
        var sites = $('#sites').val();

        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: '&form=selectionsite' + '&sites=' + sites,
            success: function(data){
                if (data == "") {
                    $('#sitesinfo').html("");
                } else {
                    $('#sitesinfo').html(data);   
                }
            }
        });
    }

    // MANAGE ENDORSEMENTS //
    function showbitotalendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbitotalendo',
            success: function(data){
                $('#bicurrenttotalendo').text(data);
            }           
        });
    }

    function showbistatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbistatus',
            success: function(data){
                $('#currentbistatus').html(data);
            }           
        });
    }

    function showdctotalendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdctotalendo',
            success: function(data){
                $('#dccurrenttotalendo').text(data);
            }           
        });
    }

    function showdcstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcstatus',
            success: function(data){
                $('#currentdcstatus').html(data);
            }           
        });
    }

    function back_manage_endo_bi() {
        window.location = 'manage_bi_endo.php';
    }

    // UPLOAD DOCUMENTS //
    $(document).ready(function() {
        var text_max = 200;
        $('#educationdocs_feedback').html(text_max + ' characters remaining');

        $('#educdocremarks').keyup(function() {
            var text_length = $('#educdocremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#educationdocs_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#employmentdocs_feedback').html(text_max + ' characters remaining');

        $('#empdocremarks').keyup(function() {
            var text_length = $('#empdocremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#employmentdocs_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#otherdocs_feedback').html(text_max + ' characters remaining');

        $('#othdocremarks').keyup(function() {
            var text_length = $('#othdocremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#otherdocs_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function cleardocumentsform() {
        var text_max = 200;
        $('#educationdocs_feedback').html(text_max + ' characters remaining');
        $('#educdocremarks').val("");
        $('#educationdocs').val('educstatus');        
        $('#employmentdocs_feedback').html(text_max + ' characters remaining');
        $('#empdocremarks').val("");
        $('#employmentdocs').val('empstatus');        
        $('#otherdocs_feedback').html(text_max + ' characters remaining');
        $('#othdocremarks').val("");
        $('#otherdocs').val('othstatus');        
    }

    // UPGRADE PACKAGE //
    function showupgradepkgbi(selectedpackage, selectedendocode, selectedpoc) {
        $('#mdlupgradepkg').modal('show');

        var text_max = 200;
        $('#pkg_feedback').html(text_max + ' characters remaining');
        $('#packagedesc_').text(selectedpackage);
        $('#endocode_').val(selectedendocode);
        $('#pocid').val(selectedpoc);
        $('#updatedpkg').val("");
        document.getElementById("pkgbi").style.display = "block";       
        document.getElementById("pkgdc").style.display = "none"; 
    }

    function showupgradepkgdc(selectedpackage, selectedendocode, selectedpoc) {
        $('#mdlupgradepkg').modal('show');

        var text_max = 200;
        $('#pkg_feedback').html(text_max + ' characters remaining');
        $('#packagedesc_').text(selectedpackage);
        $('#endocode_').val(selectedendocode);
        $('#pocid').val(selectedpoc);
        $('#updatedpkg').val("");
        document.getElementById("pkgdc").style.display = "block"; 
        document.getElementById("pkgbi").style.display = "none";       
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#pkg_feedback').html(text_max + ' characters remaining');

        $('#updatedpkg').keyup(function() {
            var text_length = $('#updatedpkg').val().length;
            var text_remaining = text_max - text_length;

            $('#pkg_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearpkg() {
        var updatedpkg = $('#updatedpkg').val();
        
        if ($('#updatedpkg').val() == "") {
            $('#mdlupgradepkg').modal('hide');
        } else if ($('#updatedpkg').val()) {
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
                    $('#mdlupgradepkg').modal('hide');
                }
            });
        }
    }

    function savererunbi() {
        var endocode_ = $('#endocode_').val();
        var packagedesc_ = $('#packagedesc_').text();
        var updatedpkg = $('#updatedpkg').val();
        var pocid = $('#pocid').val();

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
                    data: '&form=savererunbi' + '&endocode_=' + endocode_ + '&packagedesc_=' + packagedesc_ + '&updatedpkg=' + updatedpkg + '&pocid=' + pocid,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Rerun package success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlupgradepkg').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant update package",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function savererundc() {
        var endocode_ = $('#endocode_').val();
        var packagedesc_ = $('#packagedesc_').text();
        var updatedpkg = $('#updatedpkg').val();
        var pocid = $('#pocid').val();

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
                    data: '&form=savererundc' + '&endocode_=' + endocode_ + '&packagedesc_=' + packagedesc_ + '&updatedpkg=' + updatedpkg + '&pocid=' + pocid,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Rerun package success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlupgradepkg').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant update package",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // RETURN ENDORSEMENT //
    function showpocreturnendobi(bipoc_applicant, bipoc_supervisor, bipoc_endocode, bipoc_poccode) {
        $('#mdlpocreturnendo').modal('show');

        var text_max = 200;
        $('#retnedo_feedback').html(text_max + ' characters remaining');
        $('#returnendopoc').val("");
        $('#pocapplicant').text(bipoc_applicant);
        $('#pocsupervisor').text(bipoc_supervisor);
        $('#pocendocode').val(bipoc_endocode);
        $('#poccode').val(bipoc_poccode);
        document.getElementById("returnbi").style.display = "block"; 
        document.getElementById("returndc").style.display = "none";   
    }

    function showpocreturnendodc(bipoc_applicant, bipoc_supervisor, bipoc_endocode, bipoc_poccode) {
        $('#mdlpocreturnendo').modal('show');

        var text_max = 200;
        $('#retnedo_feedback').html(text_max + ' characters remaining');
        $('#returnendopoc').val("");
        $('#pocapplicant').text(bipoc_applicant);
        $('#pocsupervisor').text(bipoc_supervisor);
        $('#pocendocode').val(bipoc_endocode);
        $('#poccode').val(bipoc_poccode);
        document.getElementById("returndc").style.display = "block";   
        document.getElementById("returnbi").style.display = "none"; 
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#retnedo_feedback').html(text_max + ' characters remaining');

        $('#returnendopoc').keyup(function() {
            var text_length = $('#returnendopoc').val().length;
            var text_remaining = text_max - text_length;

            $('#retnedo_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearpocreturnendo() {
        var returnendopoc = $('#returnendopoc').val();
        
        if ($('#returnendopoc').val() == "") {
            $('#mdlpocreturnendo').modal('hide');
        } else if ($('#returnendopoc').val()) {
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
                    $('#mdlpocreturnendo').modal('hide');
                }
            });
        }
    }

    function savereturnpocbi() {
        var pocendocode = $('#pocendocode').val();
        var poccode = $('#poccode').val();
        var returnendopoc = $('#returnendopoc').val();

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
                    data: '&form=savereturnpocbi' + '&pocendocode=' + pocendocode + '&poccode=' + poccode + '&returnendopoc=' + returnendopoc,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Return of endorsement success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlpocreturnendo').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error',
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

    function savereturnpocdc() {
        var pocendocode = $('#pocendocode').val();
        var poccode = $('#poccode').val();
        var returnendopoc = $('#returnendopoc').val();

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
                    data: '&form=savereturnpocdc' + '&pocendocode=' + pocendocode + '&poccode=' + poccode + '&returnendopoc=' + returnendopoc,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Return of endorsement success",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlpocreturnendo').modal('hide');
                        } else if (data == 2) {
                            swal({
                                title: 'Error',
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

    // VIEW ENDORSEMENT //
    function showviewendobi(endorsementname, endorsementdate, endorsementcode, endorsementdesc, endorsementtadate, endorsementrequestor, endorsementcompany, endorsementpkgdesc) {
        $('#mdlviewendo').modal('show');

        $('#endorsement_name').text(endorsementname);
        $('#endorsement_date').text(endorsementdate);
        $('#endorsement_code').text(endorsementcode);
        $('#endorsement_desc').text(endorsementdesc);
        $('#endorsement_tadate').text(endorsementtadate);
        $('#endorsement_requestor').text(endorsementrequestor);
        $('#endorsement_company').text(endorsementcompany);
        $('#endorsement_pkgdesc').text(endorsementpkgdesc);
        document.getElementById("bititle").style.display = "block";   
        document.getElementById("dctitle").style.display = "none"; 
    }

    function showviewendodc(endorsementname, endorsementdate, endorsementcode, endorsementdesc, endorsementtadate, endorsementrequestor, endorsementcompany, endorsementpkgdesc) {
        $('#mdlviewendo').modal('show');

        $('#endorsement_name').text(endorsementname);
        $('#endorsement_date').text(endorsementdate);
        $('#endorsement_code').text(endorsementcode);
        $('#endorsement_desc').text(endorsementdesc);
        $('#endorsement_tadate').text(endorsementtadate);
        $('#endorsement_requestor').text(endorsementrequestor);
        $('#endorsement_company').text(endorsementcompany);
        $('#endorsement_pkgdesc').text(endorsementpkgdesc);
        document.getElementById("dctitle").style.display = "block"; 
        document.getElementById("bititle").style.display = "none";   
    }

    // MONITOR ENDORSEMENTS //

    // BACKGROUND INVESTIGATION //
    function showbicurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbicurrentmonth',
            success: function(data){
                $('#monitorbicurrentmonth').text(data);
            }           
        });
    }

    function showbicurrentyear() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbicurrentyear',
            success: function(data){
                $('#monitorbicurrentyear').text(data);
            }           
        });
    }

    function showbijanstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbijanstatus',
            success: function(data){
                $('#janbiendostatus').html(data);
            }           
        });
    }

    function showbifebstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbifebstatus',
            success: function(data){
                $('#febbiendostatus').html(data);
            }           
        });
    }

    function showbimarstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbimarstatus',
            success: function(data){
                $('#marbiendostatus').html(data);
            }           
        });
    }

    function showbiaprstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbiaprstatus',
            success: function(data){
                $('#aprbiendostatus').html(data);
            }           
        });
    }

    function showbimaystatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbimaystatus',
            success: function(data){
                $('#maybiendostatus').html(data);
            }           
        });
    }

    function showbijunestatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbijunestatus',
            success: function(data){
                $('#junebiendostatus').html(data);
            }           
        });
    }

    function showbijulystatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbijulystatus',
            success: function(data){
                $('#julybiendostatus').html(data);
            }           
        });
    }

    function showbiaugstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbiaugstatus',
            success: function(data){
                $('#augbiendostatus').html(data);
            }           
        });
    }

    function showbiseptstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbiseptstatus',
            success: function(data){
                $('#septbiendostatus').html(data);
            }           
        });
    }

    function showbioctstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbioctstatus',
            success: function(data){
                $('#octbiendostatus').html(data);
            }           
        });
    }

    function showbinovstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbinovstatus',
            success: function(data){
                $('#novbiendostatus').html(data);
            }           
        });
    }

    function showbidecstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showbidecstatus',
            success: function(data){
                $('#decbiendostatus').html(data);
            }           
        });
    }

    function back_monitor_endo_bi() {
        window.location = 'monitor_bi_endo.php';
    }

    // DATABASE CHECK //
    function showdccurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdccurrentmonth',
            success: function(data){
                $('#monitordccurrentmonth').text(data);
            }           
        });
    }

    function showdccurrentyear() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdccurrentyear',
            success: function(data){
                $('#monitordccurrentyear').text(data);
            }           
        });
    }

    function showdcjanstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcjanstatus',
            success: function(data){
                $('#jandcendostatus').html(data);
            }           
        });
    }

    function showdcfebstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcfebstatus',
            success: function(data){
                $('#febdcendostatus').html(data);
            }           
        });
    }

    function showdcmarstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcmarstatus',
            success: function(data){
                $('#mardcendostatus').html(data);
            }           
        });
    }

    function showdcaprstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcaprstatus',
            success: function(data){
                $('#aprdcendostatus').html(data);
            }           
        });
    }

    function showdcmaystatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcmaystatus',
            success: function(data){
                $('#maydcendostatus').html(data);
            }           
        });
    }

    function showdcjunestatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcjunestatus',
            success: function(data){
                $('#junedcendostatus').html(data);
            }           
        });
    }

    function showdcjulystatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcjulystatus',
            success: function(data){
                $('#julydcendostatus').html(data);
            }           
        });
    }

    function showdcaugstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcaugstatus',
            success: function(data){
                $('#augdcendostatus').html(data);
            }           
        });
    }

    function showdcseptstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcseptstatus',
            success: function(data){
                $('#septdcendostatus').html(data);
            }           
        });
    }

    function showdcoctstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcoctstatus',
            success: function(data){
                $('#octdcendostatus').html(data);
            }           
        });
    }

    function showdcnovstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcnovstatus',
            success: function(data){
                $('#novdcendostatus').html(data);
            }           
        });
    }

    function showdcdecstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdcdecstatus',
            success: function(data){
                $('#decdcendostatus').html(data);
            }           
        });
    }

    function back_monitor_endo_dc() {
        window.location = 'monitor_dc_endo.php';
    }

    // APPLICATIONS //

    // NEW APPLICATION //
    $(document).ready(function() {
        var text_max = 200;
        $('#package_feedback').html(text_max + ' characters remaining');

        $('#app_package').keyup(function() {
            var text_length = $('#app_package').val().length;
            var text_remaining = text_max - text_length;

            $('#package_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#presentaddr_feedback').html(text_max + ' characters remaining');

        $('#app_presentaddr').keyup(function() {
            var text_length = $('#app_presentaddr').val().length;
            var text_remaining = text_max - text_length;

            $('#presentaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#permanentaddr_feedback').html(text_max + ' characters remaining');

        $('#app_permanentaddr').keyup(function() {
            var text_length = $('#app_permanentaddr').val().length;
            var text_remaining = text_max - text_length;

            $('#permanentaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#collegeaddr_feedback').html(text_max + ' characters remaining');

        $('#appr_college_addr').keyup(function() {
            var text_length = $('#appr_college_addr').val().length;
            var text_remaining = text_max - text_length;

            $('#collegeaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#hsaddr_feedback').html(text_max + ' characters remaining');

        $('#appr_hs_addr').keyup(function() {
            var text_length = $('#appr_hs_addr').val().length;
            var text_remaining = text_max - text_length;

            $('#hsaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#elemaddr_feedback').html(text_max + ' characters remaining');

        $('#appr_elem_addr').keyup(function() {
            var text_length = $('#appr_elem_addr').val().length;
            var text_remaining = text_max - text_length;

            $('#elemaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#vocaddr_feedback').html(text_max + ' characters remaining');

        $('#appr_voc_addr').keyup(function() {
            var text_length = $('#appr_voc_addr').val().length;
            var text_remaining = text_max - text_length;

            $('#vocaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    $(document).ready(function() {
        var text_max = 200;
        $('#othaddr_feedback').html(text_max + ' characters remaining');

        $('#appr_oth_addr').keyup(function() {
            var text_length = $('#appr_oth_addr').val().length;
            var text_remaining = text_max - text_length;

            $('#othaddr_feedback').html(text_remaining + ' characters remaining');
        });
    });

    // MANAGE APPLICATIONS //
    function showcurrentotalappl() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showcurrentotalappl',
            success: function(data){
                $('#currenttotalappl').text(data);
            }           
        });
    }

    function showapplstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showapplstatus',
            success: function(data){
                $('#currentapplstatus').html(data);
            }           
        });
    }    

    function back_manageappl() {
        window.location = 'manage_applications.php';
    }

    function showapplendo() {
        var app_endotype = $('#app_endotype').text();

        if ($('#app_endotype').val() == '0') {
            document.getElementById("endo_imp").style.display = "block";       
            document.getElementById("endobi_approval").style.display = "block";       
            document.getElementById("endodc_approval").style.display = "none";       
            document.getElementById("endo_bIid").style.display = "block";       
            document.getElementById("endo_account").style.display = "block";       
            document.getElementById("bitadate").style.display = "block";       
            document.getElementById("dctadate").style.display = "none";       
            document.getElementById("endo_batchid").style.display = "block";       
            document.getElementById("endo_package").style.display = "block";       
            document.getElementById("endo_bIid").style.display = "block";   
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";                   
            document.getElementById("endo_siteslist").style.display = "block";                   
        } else if ($('#app_endotype').val() == '1') {
            document.getElementById("endo_imp").style.display = "block";   
            document.getElementById("endobi_approval").style.display = "none";       
            document.getElementById("endodc_approval").style.display = "block";             
            document.getElementById("endo_account").style.display = "block";       
            document.getElementById("bitadate").style.display = "none";       
            document.getElementById("dctadate").style.display = "block";       
            document.getElementById("endo_batchid").style.display = "block";       
            document.getElementById("endo_package").style.display = "block";  
            document.getElementById("endo_bIid").style.display = "block";    
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";
            document.getElementById("endo_siteslist").style.display = "block";                        
        } else {
            document.getElementById("endo_imp").style.display = "none";    
            document.getElementById("endobi_approval").style.display = "none";       
            document.getElementById("endodc_approval").style.display = "none";      
            document.getElementById("endo_account").style.display = "none";       
            document.getElementById("bitadate").style.display = "none";       
            document.getElementById("dctadate").style.display = "none";       
            document.getElementById("endo_batchid").style.display = "none";       
            document.getElementById("endo_package").style.display = "none";
            document.getElementById("endo_bIid").style.display = "none";   
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";  
            document.getElementById("endo_siteslist").style.display = "none";                      
        }
    }

    function showbiapplendo() {
        var appbi_approval = $('#appbi_approval').text();

        if ($('#appbi_approval').val() == '1') {
            document.getElementById("biapproval").style.display = "block";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";              
        } else if ($('#appbi_approval').val() == '2') {
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "block";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none"; 
        } else {
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";   
        }
    }

    function showdcapplendo() {
        var appdc_approval = $('#appdc_approval').text();

        if ($('#appdc_approval').val() == '1') {
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "block";       
            document.getElementById("dcdisapproval").style.display = "none";              
        } else if ($('#appdc_approval').val() == '2') {
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "block";     
        } else {
            document.getElementById("biapproval").style.display = "none";       
            document.getElementById("bidisapproval").style.display = "none";       
            document.getElementById("dcapproval").style.display = "none";       
            document.getElementById("dcdisapproval").style.display = "none";   
        }
    }

    // USER PROFILE //
    function back_user_profile() {
        window.location = 'user_profile.php';
    }

    function showactlogscurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showactlogscurrentmonth',
            success: function(data){
                $('#activitylogscurrentmonth').text(data);
            }           
        });
    }

    function showactlogscurrentyear() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showactlogscurrentyear',
            success: function(data){
                $('#activitylogscurrentyear').text(data);
            }           
        });
    }

    function showuserlogscurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showuserlogscurrentmonth',
            success: function(data){
                $('#userlogscurrentmonth').text(data);
            }           
        });
    }

    function showuserlogscurrentyear() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showuserlogscurrentyear',
            success: function(data){
                $('#userlogscurrentyear').text(data);
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

    function savenewendorsement() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savenewendorsement',
            success: function(data){

            }
        });
    }

    function savemanageendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanageendobi',
            success: function(data){

            }
        });
    }

    function savemanageendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanageendodc',
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

    function savenewapplication() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savenewapplication',
            success: function(data){

            }
        });
    }

    function savemanageappl() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanageappl',
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

    function savedownloadendocsv() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedownloadendocsv',
            success: function(data){

            }
        });
    }

    function saveupgradepkgbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveupgradepkgbi',
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

    function saveuploaddocs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveuploaddocs',
            success: function(data){

            }
        });
    }

    function saveviewdocs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewdocs',
            success: function(data){

            }
        });
    } 

    function savereturnendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnendobi',
            success: function(data){

            }
        });
    } 

    function savedownloadrepbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedownloadrepbi',
            success: function(data){

            }
        });
    }   

    function saveupgradepkgdc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveupgradepkgdc',
            success: function(data){

            }
        });
    }

    function saveviewendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewendodc',
            success: function(data){

            }
        });
    }

    function savereturnendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savereturnendodc',
            success: function(data){

            }
        });
    }

    function savedownloadrepdc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedownloadrepdc',
            success: function(data){

            }
        });
    }

    function savemonitorbiendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorbiendo',
            success: function(data){

            }
        });
    }

    function savemonitordcendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitordcendo',
            success: function(data){

            }
        });
    }

    function saveapprovalappl() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveapprovalappl',
            success: function(data){

            }
        });
    }

    function saveviewappl() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewappl',
            success: function(data){

            }
        });
    }

    function saveviewupdateprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewupdateprofile',
            success: function(data){

            }
        });
    }

    function saveviewuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewuserlogs',
            success: function(data){

            }
        });
    } 

    function saveviewactivitylogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewactivitylogs',
            success: function(data){

            }
        });
    }

    function saveviewingactivitylog() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewingactivitylog',
            success: function(data){

            }
        });
    }

    function saveviewinguserlog() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewinguserlog',
            success: function(data){

            }
        });
    }

    function savemonitorbiviewendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitorbiviewendo',
            success: function(data){

            }
        });
    }

    function savemonitordcviewendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitordcviewendo',
            success: function(data){

            }
        });
    }   
    
        document.addEventListener('DOMContentLoaded', function() {
        const searchBox = document.getElementById('search_box');
        
        searchBox.addEventListener('keyup', function() {
            filterTable(); // Call filterTable directly on keyup
        });
    });

   function filterTable() {
        // Get the value of the search box
        const query = document.getElementById("search_box").value.toLowerCase();
        
        // Make AJAX call to server to get filtered results
        $.ajax({
            type: "POST",
            url: "search_endo.php", // Create this PHP file to handle the search
            data: { 
                search_query: query 
            },
            success: function(response) {
                // Assuming response is HTML of table rows
                const tbodies = document.querySelectorAll('.tab-pane .table tbody'); // Select all tbody elements in all tab panes
                tbodies.forEach(tbody => {
                    tbody.innerHTML = response; // Update each tbody with the response
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching search results:', error);
            }
        });
    }
      document.addEventListener('DOMContentLoaded', function() {
            const searchBox = document.getElementById('search_box');
            
            searchBox.addEventListener('keyup', function() {
                const query = searchBox.value.toLowerCase();
                
                // Make AJAX call to server to get filtered results
                $.ajax({
                    type: "POST",
                    url: "search_invoices.php", // Create this PHP file to handle the search
                    data: { 
                        search_query: query 
                    },
                    success: function(response) {
                        // Assuming response is HTML of table rows
                        const tbody = document.querySelector('.table tbody');
                        tbody.innerHTML = response;
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching search results:', error);
                    }
                });
            });
        });
    
</script>