<script type="text/javascript">
	$(function(){
        showtotalticket();
        showpendingticket();
        showonprocessticket();
        showcompletedticket();
        showprevtotalticket();
        showprevpendingticket();
        showprevonprocessticket();
        showprevcompletedticket();
        showholidaylist();
        showitdeptlist();
        showtotalverifybi();
        showtotalverifystatus();
        showticketstatus();
        showtotalcurrentticket();
        totalcurrentticketstatus();
        showtotalverifydc();
        showtotalverifydcstatus();
	});

    // DASHBOARD //
    function showtotalticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalticket',
            success: function(data){
                $('#total_ticket').text(data);
            }           
        });
    }

    function showpendingticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showpendingticket',
            success: function(data){
                $('#pending_ticket').text(data);
            }           
        });
    }

    function showonprocessticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showonprocessticket',
            success: function(data){
                $('#onprocess_ticket').text(data);
            }           
        });
    }

    function showcompletedticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showcompletedticket',
            success: function(data){
                $('#completed_ticket').text(data);
            }           
        });
    }

    function showprevtotalticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevtotalticket',
            success: function(data){
                $('#prevtotal_ticket').text(data);
            }           
        });
    }

    function showprevpendingticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevpendingticket',
            success: function(data){
                $('#prevpending_ticket').text(data);
            }           
        });
    }

    function showprevonprocessticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevonprocessticket',
            success: function(data){
                $('#prevonprocess_ticket').text(data);
            }           
        });
    }

    function showprevcompletedticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showprevcompletedticket',
            success: function(data){
                $('#prevcompleted_ticket').text(data);
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

    function showitdeptlist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showitdeptlist',
            success: function(data){
                $('#itdept_list').html(data);
            }   
        });
    }

    // VERIFY ENDORSEMENT //

    // BACKGROUND INVESTIGATION //
    function showtotalverifybi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalverifybi',
            success: function(data){
                $('#bicurrentverfendo').text(data);
            }   
        });
    }

    function showtotalverifystatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalverifystatus',
            success: function(data){
                $('#verifybistatus').html(data);
            }   
        });
    }

    function back_verifyendo_bi() {
        window.location = 'verify_endo_bi.php';
    }

    $(document).ready(function() {
        $('#bi_cmap').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_cmap_biresults").style.display = "block";       
            } else {   
                document.getElementById("txt_cmap_biresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#bi_ofac').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_ofac_biresults").style.display = "block";       
            } else {   
                document.getElementById("txt_ofac_biresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#bi_oig').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_oig_biresults").style.display = "block";       
            } else {   
                document.getElementById("txt_oig_biresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#bi_gsa').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_gsa_biresults").style.display = "block";       
            } else {   
                document.getElementById("txt_gsa_biresults").style.display = "none";       
            }
        });
    });

    // DATABASE CHECK //
    function showtotalverifydc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalverifydc',
            success: function(data){
                $('#dccurrentverfendo').text(data);
            }   
        });
    }

    function showtotalverifydcstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalverifydcstatus',
            success: function(data){
                $('#verifydcstatus').html(data);
            }   
        });
    }

    function backtoverifydc() {
        window.location = 'verify_endo_dc.php';
    }

    $(document).ready(function() {
        $('#dc_cmap').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_cmap_dcresults").style.display = "block";       
            } else {   
                document.getElementById("txt_cmap_dcresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#dc_ofac').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_ofac_dcresults").style.display = "block";       
            } else {   
                document.getElementById("txt_ofac_dcresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#dc_oig').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_oig_dcresults").style.display = "block";       
            } else {   
                document.getElementById("txt_oig_dcresults").style.display = "none";       
            }
        });
    });

    $(document).ready(function() {
        $('#dc_gsa').click(function() {
            if ($(this).is(':checked')) {
                document.getElementById("txt_gsa_dcresults").style.display = "block";       
            } else {   
                document.getElementById("txt_gsa_dcresults").style.display = "none";       
            }
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

    // MANAGE TICKETS //
    function showtotalcurrentticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showtotalcurrentticket',
            success: function(data){
                $('#currenttotaltickets').text(data);
            }           
        });
    }

    function totalcurrentticketstatus() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalcurrentticketstatus',
            success: function(data){
                $('#currentticketstatus').html(data);
            }   
        });
    }

    function viewstartticket(ticket_id, ticket_datecreated, ticket_tasks, ticket_referenceno) {
        $('#mdlstartticket').modal('show');
        document.getElementById("startticket").style.display = "block"; 
        document.getElementById("extendticket").style.display = "none"; 
        document.getElementById("titlestarttick").style.display = "block"; 
        document.getElementById("titleextendtick").style.display = "none"; 
        document.getElementById("enddate_").style.display = "none"; 

       $('#ticketno').text(ticket_id);        
       $('#datecreated').text(ticket_datecreated);        
       $('#taskslist').text(ticket_tasks);        
       $('#referencecode').val(ticket_referenceno);        
    }

    function viewextendticket(ticket_id, ticket_datecreated, ticket_tasks, ticket_referenceno) {
        $('#mdlstartticket').modal('show');
        document.getElementById("startticket").style.display = "none"; 
        document.getElementById("extendticket").style.display = "block"; 
        document.getElementById("titlestarttick").style.display = "none"; 
        document.getElementById("titleextendtick").style.display = "block";
        document.getElementById("enddate_").style.display = "block";  

       $('#ticketno').text(ticket_id);        
       $('#datecreated').text(ticket_datecreated);        
       $('#taskslist').text(ticket_tasks);        
       $('#referencecode').val(ticket_referenceno);        
    } 

    function startticket() {
        var referencecode = $('#referencecode').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, start it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=startticket' + '&referencecode=' + referencecode,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Ticket started successfully",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlstartticket').modal('hide');
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

    function extendticket() {
        var referencecode = $('#referencecode').val();
        var end_date_extended = $('#end_date_extended').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, start it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=extendticket' + '&referencecode=' + referencecode + '&end_date_extended=' + end_date_extended,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Ticket extended successfully",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            window.location.reload(true);
                            $('#mdlstartticket').modal('hide');
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

    function saveverifyendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveverifyendobi',
            success: function(data){

            }
        });
    }

    function saveverifyendodc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveverifyendodc',
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

    function savesuppuploaddtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesuppuploaddtr',
            success: function(data){

            }
        });
    }

    function savespvmanagedtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savespvmanagedtr',
            success: function(data){

            }
        });
    }

    function savesuppmanagedtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesuppmanagedtr',
            success: function(data){

            }
        });
    }

    function savespvuploaddtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savespvuploaddtr',
            success: function(data){

            }
        });
    }

    function savesupp_managedtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savesupp_managedtr',
            success: function(data){

            }
        });
    }

    function savemanagetickets() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemanagetickets',
            success: function(data){

            }
        });
    }

    function savemonitortickets() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savemonitortickets',
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

    function savecheckendobi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savecheckendobi',
            success: function(data){

            }
        });
    }

    function saveviewcheckbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveviewcheckbi',
            success: function(data){

            }
        });
    }
       $(function() {
        const searchBox = document.getElementById('search_box');
        
        if (searchBox) {
            searchBox.addEventListener('keyup', function() {
                filterTable(); // Call filterTable directly on keyup
            });
        }
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
                const tbody = document.querySelector('.table tbody');
                tbody.innerHTML = response;
            },
            error: function(xhr, status, error) {
                console.error('Error fetching search results:', error);
            }
        });
    }
</script>