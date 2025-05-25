<script type="text/javascript">
    $(function(){
        displayendogoal();
        displaybillinggoal();
        displayactualendo();
        displayactualbilling();
        admpendingendo();
        admpendingprevendo();
        admonprocendo();
        admonprocprevendo();
        admcompendo();
        admcompprevendo();
        admticket();
        admprevticket();
        displayadmholidays();
        displayadmmngt();
        displayadmteams();
        displayadmmonthlybiendo();
        displayadmyearlybiendo();
        adminbijan();
        adminbifeb();
        adminbimar();
        adminbiapr();
        adminbimay();
        adminbijune();
        adminbijuly();
        adminbiaug();
        adminbisept();
        adminbioct();
        adminbinov();
        adminbidec();
        displayadmmonthlydcendo();
        displayadmyearlydcendo();
        admindcjan();
        admindcfeb();
        admindcmar();
        admindcapr();
        admindcmay();
        admindcjune();
        admindcjuly();
        admindcaug();
        admindcsept();
        admindcoct();
        admindcnov();
        admindcdec();
        totalclients();
        totalsupervisors();
        totaloperations();
        totalsupport();
        totaladmin();
        totaldevelopers();
        viewteams();
        displayadmspvmonthlydtr();
        displayadmspvyearlydtr();
        displayadmopsmonthlydtr();
        displayadmopsyearlydtr();
        displayadmitsuppmonthlydtr();
        displayadmitsuppyearlydtr();
        displayadmperfmonthlydtr();
        displayadmperfyearlydtr();
        displayadmspvcurrentmonth();
        displayadmopscurrentmonth();
        displayadmitsuppcurrentmonth();
        dtrjan();
        dtrfeb();
        dtrmar();
        dtrapr();
        dtrmay();
        dtrjune();
        dtrjuly();
        dtraug();
        dtrsept();
        dtroct();
        dtrnov();
        dtrdec();
        totalcurrentmonthendo();
        totalcurrentmonthbilling();
        corinthiansendorsement_goal();
        corinthiansbilling_goal();
        corinthiansendorsement_actual();
        corinthiansbilling_actual();
        ecclesiastesendorsement_goal();
        ecclesiastesbilling_goal();
        ecclesiastesendorsement_actual();
        ecclesiastesbilling_actual();
        markendorsement_goal();
        markbilling_goal();
        markendorsement_actual();
        markbilling_actual();
        psalmsendorsement_goal();
        psalmsbilling_goal();
        psalmsendorsement_actual();
        psalmsbilling_actual();    
        displayteamlist();    
        displaymonthlyactlogs();
        displayyearlyactlogs();
        displaymonthlyuserlogs();
        displayyearlyuserlogs();
        displayadmonlineusers();
        showticketstatus();
        showcurmonthticket();
        showcuryearlyticket();
        showjanticket();
        showfebticket();
        showmarticket();
        showaprticket();
        showmayticket();
        showjuneticket();
        showjulyticket();
        showaugticket();
        showseptticket();
        showoctticket();
        shownovticket();
        showdecticket();
    });

    // DASHBOARD //
    function displayendogoal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayendogoal',
            success: function(data){
                $('#admendogoal').text(data);
            }
        });
    }

    function displaybillinggoal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaybillinggoal',
            success: function(data){
                $('#admbillgoal').text(data);
            }
        });
    }

    function displayactualendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayactualendo',
            success: function(data){
                $('#admactualendo').html(data);
            }
        });
    }

    function displayactualbilling() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayactualbilling',
            success: function(data){
                $('#admactualbill').html(data);
            }
        });
    }   

    function admpendingendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admpendingendo',
            success: function(data){
                $('#admintotalpending').text(data);
            }
        });
    }

    function admpendingprevendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admpendingprevendo',
            success: function(data){
                $('#adminprevtotalpending').text(data);
            }
        });
    }

    function admonprocendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admonprocendo',
            success: function(data){
                $('#admintotalonproc').text(data);
            }
        });
    }

    function admonprocprevendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admonprocprevendo',
            success: function(data){
                $('#adminprevtotalonproc').text(data);
            }
        });
    }

    function admcompendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admcompendo',
            success: function(data){
                $('#admintotalcomp').text(data);
            }
        });
    }

    function admcompprevendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admcompprevendo',
            success: function(data){
                $('#adminprevtotalcomp').text(data);
            }
        });
    }

    function admticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admticket',
            success: function(data){
                $('#admintotalticket').text(data);
            }
        });
    }

    function admprevticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admprevticket',
            success: function(data){
                $('#adminprevtotalticket').text(data);
            }
        });
    }    

    function displayadmholidays() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmholidays',
            success: function(data){
                $('#adminholidays').html(data);
            }
        });
    }

    function displayadmmngt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmmngt',
            success: function(data){
                $('#adminmngt').html(data);
            }
        });
    }

    function displayadmteams() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmteams',
            success: function(data){
                $('#adminteams').html(data);
            }
        });
    }

    function proceedadmbi() {
        window.location = 'monitor_bi_endo.php';
    }

    function proceedadmdc() {
        window.location = 'monitor_dc_endo.php';
    }

    function viewadmholidays() {
        $('#mdladmholidays').modal('show');
    }

    function viewadminmngt() {
        $('#mdladminmngt').modal('show');
    }

    function viewadminteams() {
        $('#mdladminteams').modal('show');
    }

    function back_dashboard_admin() {
        window.location = 'dashboard.php';
    }

    function clearadmexportbi() {
        $('#admbi_start_date').val("");
        $('#admbi_end_date').val("");
    } 

    function clearadmexportdc() {
        $('#admdc_start_date').val("");
        $('#admdc_end_date').val("");
    } 

    // MONITOR ENDORSEMENT //

    // BACKGROUND INVESTIGATION //
    function displayadmmonthlybiendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmmonthlybiendo',
            success: function(data){
                $('#monthlyadminbiendo').text(data);
            }
        });
    }

    function displayadmyearlybiendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmyearlybiendo',
            success: function(data){
                $('#yearlyadminbiendo').text(data);
            }
        });
    }

    function adminbijan() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbijan',
            success: function(data){
                $('#janadmbiendo').html(data);
            }
        });
    }

    function adminbifeb() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbifeb',
            success: function(data){
                $('#febadmbiendo').html(data);
            }
        });
    }

    function adminbimar() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbimar',
            success: function(data){
                $('#maradmbiendo').html(data);
            }
        });
    }

    function adminbiapr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbiapr',
            success: function(data){
                $('#apradmbiendo').html(data);
            }
        });
    }

    function adminbimay() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbimay',
            success: function(data){
                $('#mayadmbiendo').html(data);
            }
        });
    }

    function adminbijune() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbijune',
            success: function(data){
                $('#juneadmbiendo').html(data);
            }
        });
    }

    function adminbijuly() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbijuly',
            success: function(data){
                $('#julyadmbiendo').html(data);
            }
        });
    }

    function adminbiaug() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbiaug',
            success: function(data){
                $('#augadmbiendo').html(data);
            }
        });
    }

    function adminbisept() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbisept',
            success: function(data){
                $('#septadmbiendo').html(data);
            }
        });
    }

    function adminbioct() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbioct',
            success: function(data){
                $('#octadmbiendo').html(data);
            }
        });
    }

    function adminbinov() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbinov',
            success: function(data){
                $('#novadmbiendo').html(data);
            }
        });
    }

    function adminbidec() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=adminbidec',
            success: function(data){
                $('#decadmbiendo').html(data);
            }
        });
    }

    function back_adm_monitor_bi() {
        window.location = 'monitor_bi_endo.php';
    }

    // DATABASE CHECK //
    function displayadmmonthlydcendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmmonthlydcendo',
            success: function(data){
                $('#monthlyadmindcendo').text(data);
            }
        });
    }

    function displayadmyearlydcendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmyearlydcendo',
            success: function(data){
                $('#yearlyadmindcendo').text(data);
            }
        });
    }

    function admindcjan() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcjan',
            success: function(data){
                $('#janadmdcendo').html(data);
            }
        });
    }

    function admindcfeb() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcfeb',
            success: function(data){
                $('#febadmdcendo').html(data);
            }
        });
    }

    function admindcmar() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcmar',
            success: function(data){
                $('#maradmdcendo').html(data);
            }
        });
    }

    function admindcapr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcapr',
            success: function(data){
                $('#apradmdcendo').html(data);
            }
        });
    }

    function admindcmay() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcmay',
            success: function(data){
                $('#mayadmdcendo').html(data);
            }
        });
    }

    function admindcjune() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcjune',
            success: function(data){
                $('#juneadmdcendo').html(data);
            }
        });
    }

    function admindcjuly() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcjuly',
            success: function(data){
                $('#julyadmdcendo').html(data);
            }
        });
    }

    function admindcaug() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcaug',
            success: function(data){
                $('#augadmdcendo').html(data);
            }
        });
    }

    function admindcsept() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcsept',
            success: function(data){
                $('#septadmdcendo').html(data);
            }
        });
    }

    function admindcoct() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcoct',
            success: function(data){
                $('#octadmdcendo').html(data);
            }
        });
    }

    function admindcnov() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcnov',
            success: function(data){
                $('#novadmdcendo').html(data);
            }
        });
    }

    function admindcdec() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=admindcdec',
            success: function(data){
                $('#decadmdcendo').html(data);
            }
        });
    }

    function back_adm_monitor_dc() {
        window.location = 'monitor_dc_endo.php';
    }

    // USER MANAGEMENT //

    // NEW USER //
    $(document).ready(function() {
        var text_max = 500;
        $('#address_feedback').html(text_max + ' characters remaining');

        $('#useraddress').keyup(function() {
            var text_length = $('#useraddress').val().length;
            var text_remaining = text_max - text_length;

            $('#address_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function selectionusertype() {
        var usertype = $('#usertype').text();

        if ($('#usertype').val() == '0') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "block";
            document.getElementById("userprofileaddress").style.display = "block";     
        } else if ($('#usertype').val() == '1') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "block";
            document.getElementById("userprofiletwowork").style.display = "block";
            document.getElementById("userprofilethreework").style.display = "block";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "none";
            document.getElementById("userprofileaddress").style.display = "block"; 
        } else if ($('#usertype').val() == '2') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "block";
            document.getElementById("userprofileaddress").style.display = "block"; 
        } else if ($('#usertype').val() == '3') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "block";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "block";
            document.getElementById("userprofileaddress").style.display = "block"; 
        } else if ($('#usertype').val() == '4') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "block";
            document.getElementById("userprofileaddress").style.display = "block";  
        } else if ($('#usertype').val() == '5') {
            document.getElementById("userprofileoneimg").style.display = "block";       
            document.getElementById("userprofiletwoimg").style.display = "block";       
            document.getElementById("userprofilethreeimg").style.display = "block";       
            document.getElementById("userprofilehrone").style.display = "block";
            document.getElementById("userprofileoneaccnt").style.display = "block";
            document.getElementById("userprofiletwoaccnt").style.display = "block";
            document.getElementById("userprofilethreeaccnt").style.display = "block";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "block";       
            document.getElementById("userprofileonename").style.display = "block";
            document.getElementById("userprofiletwoname").style.display = "block";
            document.getElementById("userprofilethreename").style.display = "block";
            document.getElementById("userprofilefourname").style.display = "block";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "block";
            document.getElementById("userprofiletwoother").style.display = "block";
            document.getElementById("userprofilethreeother").style.display = "block";
            document.getElementById("userprofilefourother").style.display = "block";
            document.getElementById("userprofileonecontact").style.display = "block";
            document.getElementById("userprofiletwocontact").style.display = "block";
            document.getElementById("userprofileaddress").style.display = "block";  
        } else {
            document.getElementById("userprofileoneimg").style.display = "none";       
            document.getElementById("userprofiletwoimg").style.display = "none";       
            document.getElementById("userprofilethreeimg").style.display = "none";       
            document.getElementById("userprofilehrone").style.display = "none";
            document.getElementById("userprofileoneaccnt").style.display = "none";
            document.getElementById("userprofiletwoaccnt").style.display = "none";
            document.getElementById("userprofilethreeaccnt").style.display = "none";
            document.getElementById("userprofileopstype").style.display = "none";
            document.getElementById("userprofilehrtwo").style.display = "none";       
            document.getElementById("userprofileonename").style.display = "none";
            document.getElementById("userprofiletwoname").style.display = "none";
            document.getElementById("userprofilethreename").style.display = "none";
            document.getElementById("userprofilefourname").style.display = "none";
            document.getElementById("userprofileonework").style.display = "none";
            document.getElementById("userprofiletwowork").style.display = "none";
            document.getElementById("userprofilethreework").style.display = "none";
            document.getElementById("userprofileoneother").style.display = "none";
            document.getElementById("userprofiletwoother").style.display = "none";
            document.getElementById("userprofilethreeother").style.display = "none";
            document.getElementById("userprofilefourother").style.display = "none";
            document.getElementById("userprofileonecontact").style.display = "none";
            document.getElementById("userprofiletwocontact").style.display = "none";
            document.getElementById("userprofileaddress").style.display = "none"; 
        }
    }

    // MANAGE USERS //
    function viewreactivateaccount(selected_user_name, selected_user_id) {
        $('#mdlreactivateaccount').modal('show');

        var text_max = 200;
        $('#user_feedback').html(text_max + ' characters remaining');
        $('#userremarks').val("");
        $('#user_full_name').text(selected_user_name);
        $('#user_full_id').val(selected_user_id);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#user_feedback').html(text_max + ' characters remaining');

        $('#userremarks').keyup(function() {
            var text_length = $('#userremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#user_feedback').html(text_remaining + ' characters remaining');
        });
    });


    function clearreactivateremarks() {
        var userremarks = $('#userremarks').val();
        
        if ($('#userremarks').val() == "") {
            $('#mdlreactivateaccount').modal('hide');
        } else if ($('#userremarks').val()) {
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
                    $('#mdlreactivateaccount').modal('hide');
                }
            });
        }
    }

    function updateactiveaccount() {
        var user_full_id = $('#user_full_id').val();
        var userremarks = $('#userremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=updateactiveaccount' + '&user_full_id=' + user_full_id + '&userremarks=' + userremarks, 
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account reactivated",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlreactivateaccount').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant reactivate account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function viewblacklistaccount(selectedname, selecteduserid, selectedfname, selectedmname, selectedlname, selectedsuffix, selectedposition, selectedtype) {
        $('#mdlblacklistaccount').modal('show');

        var text_max = 200;
        $('#blacklist_feedback').html(text_max + ' characters remaining');
        $('#blacklistremarks').val("");
        $('#userfullname').text(selectedname);
        $('#useroffid').val(selecteduserid);
        $('#userfname').val(selectedfname);
        $('#usermname').val(selectedmname);
        $('#userlname').val(selectedlname);
        $('#usersuffix').val(selectedsuffix);
        $('#userposition').val(selectedposition);
        $('#usertype').val(selectedtype);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#blacklist_feedback').html(text_max + ' characters remaining');

        $('#blacklistremarks').keyup(function() {
            var text_length = $('#blacklistremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#blacklist_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearblacklistremarks() {
        var blacklistremarks = $('#blacklistremarks').val();
        
        if ($('#blacklistremarks').val() == "") {
            $('#mdlblacklistaccount').modal('hide');
        } else if ($('#blacklistremarks').val()) {
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
                    $('#mdlblacklistaccount').modal('hide');
                }
            });
        }
    }

    function saveblacklistaccount() {
        var useroffid = $('#useroffid').val();
        var userfname = $('#userfname').val();
        var usermname = $('#usermname').val();
        var userlname = $('#userlname').val();
        var usersuffix = $('#usersuffix').val();
        var userposition = $('#userposition').val();
        var usertype = $('#usertype').val();
        var blacklistremarks = $('#blacklistremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=saveblacklistaccount' + '&useroffid=' + useroffid + '&userfname=' + userfname + '&usermname=' + usermname + '&userlname=' + userlname + '&usersuffix=' + usersuffix + '&userposition=' + userposition + '&usertype=' + usertype + '&blacklistremarks=' + blacklistremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account blacklisted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlblacklistaccount').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant blacklist account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // CLIENT //
    function viewclientdelete(clientname, clientuserid, client_fname, client_mname, client_lname, client_suffix, client_position, client_type) {
        $('#mdlclientdelete').modal('show');

        var text_max = 200;
        $('#clientdelete_feedback').html(text_max + ' characters remaining');
        $('#clientdeleteremarks').val("");
        $('#clientfullname').text(clientname);
        $('#clientoffid').val(clientuserid);
        $('#clientfname').val(client_fname);
        $('#clientmname').val(client_mname);
        $('#clientlname').val(client_lname);
        $('#clientsuffix').val(client_suffix);
        $('#clientposition').val(client_position);
        $('#clienttype').val(client_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#clientdelete_feedback').html(text_max + ' characters remaining');

        $('#clientdeleteremarks').keyup(function() {
            var text_length = $('#clientdeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#clientdelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearclientdelete() {
        var clientdeleteremarks = $('#clientdeleteremarks').val();
        
        if ($('#clientdeleteremarks').val() == "") {
            $('#mdlclientdelete').modal('hide');
        } else if ($('#clientdeleteremarks').val()) {
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
                    $('#mdlclientdelete').modal('hide');
                }
            });
        }
    }

    function savedeletedclient() {
        var clientoffid = $('#clientoffid').val();
        var clientfname = $('#clientfname').val();
        var clientmname = $('#clientmname').val();
        var clientlname = $('#clientlname').val();
        var clientsuffix = $('#clientsuffix').val();
        var clientposition = $('#clientposition').val();
        var clienttype = $('#clienttype').val();
        var clientdeleteremarks = $('#clientdeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeletedclient' + '&clientoffid=' + clientoffid + '&clientfname=' + clientfname + '&clientmname=' + clientmname + '&clientlname=' + clientlname + '&clientsuffix=' + clientsuffix + '&clientposition=' + clientposition + '&clienttype=' + clienttype + '&clientdeleteremarks=' + clientdeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlclientdelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // SUPERVISOR //
    function viewsupervisordelete(supervisorname, supervisoruserid, supervisor_fname, supervisor_mname, supervisor_lname, supervisor_suffix, supervisor_position, supervisor_type) {
        $('#mdlsupervisordelete').modal('show');

        var text_max = 200;
        $('#supervisordelete_feedback').html(text_max + ' characters remaining');
        $('#supervisordeleteremarks').val("");
        $('#supervisorfullname').text(supervisorname);
        $('#supervisoroffid').val(supervisoruserid);
        $('#supervisorfname').val(supervisor_fname);
        $('#supervisormname').val(supervisor_mname);
        $('#supervisorlname').val(supervisor_lname);
        $('#supervisorsuffix').val(supervisor_suffix);
        $('#supervisorposition').val(supervisor_position);
        $('#supervisortype').val(supervisor_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#supervisordelete_feedback').html(text_max + ' characters remaining');

        $('#supervisordeleteremarks').keyup(function() {
            var text_length = $('#supervisordeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#supervisordelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearsupervisordelete() {
        var supervisordeleteremarks = $('#supervisordeleteremarks').val();
        
        if ($('#supervisordeleteremarks').val() == "") {
            $('#mdlsupervisordelete').modal('hide');
        } else if ($('#supervisordeleteremarks').val()) {
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
                    $('#mdlsupervisordelete').modal('hide');
                }
            });
        }
    }

    function savedeletedsupervisor() {
        var supervisoroffid = $('#supervisoroffid').val();
        var supervisorfname = $('#supervisorfname').val();
        var supervisormname = $('#supervisormname').val();
        var supervisorlname = $('#supervisorlname').val();
        var supervisorsuffix = $('#supervisorsuffix').val();
        var supervisorposition = $('#supervisorposition').val();
        var supervisortype = $('#supervisortype').val();
        var supervisordeleteremarks = $('#supervisordeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeletedsupervisor' + '&supervisoroffid=' + supervisoroffid + '&supervisorfname=' + supervisorfname + '&supervisormname=' + supervisormname + '&supervisorlname=' + supervisorlname + '&supervisorsuffix=' + supervisorsuffix + '&supervisorposition=' + supervisorposition + '&supervisortype=' + supervisortype + '&supervisordeleteremarks=' + supervisordeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlsupervisordelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // OPERATIONS //
    function viewoperationsdelete(operationsname, operationsuserid, operations_fname, operations_mname, operations_lname, operations_suffix, operations_position, operations_type) {
        $('#mdloperationsdelete').modal('show');

        var text_max = 200;
        $('#operationsdelete_feedback').html(text_max + ' characters remaining');
        $('#operationsdeleteremarks').val("");
        $('#operationsfullname').text(operationsname);
        $('#operationsoffid').val(operationsuserid);
        $('#operationsfname').val(operations_fname);
        $('#operationsmname').val(operations_mname);
        $('#operationslname').val(operations_lname);
        $('#operationssuffix').val(operations_suffix);
        $('#operationsposition').val(operations_position);
        $('#operationstype').val(operations_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#operationsdelete_feedback').html(text_max + ' characters remaining');

        $('#operationsdeleteremarks').keyup(function() {
            var text_length = $('#operationsdeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#operationsdelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearoperationsdelete() {
        var operationsdeleteremarks = $('#operationsdeleteremarks').val();
        
        if ($('#operationsdeleteremarks').val() == "") {
            $('#mdloperationsdelete').modal('hide');
        } else if ($('#operationsdeleteremarks').val()) {
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
                    $('#mdloperationsdelete').modal('hide');
                }
            });
        }
    }

    function savedeletedoperations() {
        var operationsoffid = $('#operationsoffid').val();
        var operationsfname = $('#operationsfname').val();
        var operationsmname = $('#operationsmname').val();
        var operationslname = $('#operationslname').val();
        var operationssuffix = $('#operationssuffix').val();
        var operationsposition = $('#operationsposition').val();
        var operationstype = $('#operationstype').val();
        var operationsdeleteremarks = $('#operationsdeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeletedoperations' + '&operationsoffid=' + operationsoffid + '&operationsfname=' + operationsfname + '&operationsmname=' + operationsmname + '&operationslname=' + operationslname + '&operationssuffix=' + operationssuffix + '&operationsposition=' + operationsposition + '&operationstype=' + operationstype + '&operationsdeleteremarks=' + operationsdeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdloperationsdelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // SUPPORT //
    function viewsupportdelete(supportname, supportuserid, support_fname, support_mname, support_lname, support_suffix, support_position, support_type) {
        $('#mdlsupportdelete').modal('show');

        var text_max = 200;
        $('#supportdelete_feedback').html(text_max + ' characters remaining');
        $('#supportdeleteremarks').val("");
        $('#supportfullname').text(supportname);
        $('#supportoffid').val(supportuserid);
        $('#supportfname').val(support_fname);
        $('#supportmname').val(support_mname);
        $('#supportlname').val(support_lname);
        $('#supportsuffix').val(support_suffix);
        $('#supportposition').val(support_position);
        $('#supporttype').val(support_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#supportdelete_feedback').html(text_max + ' characters remaining');

        $('#supportdeleteremarks').keyup(function() {
            var text_length = $('#supportdeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#supportdelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearsupportdelete() {
        var supportdeleteremarks = $('#supportdeleteremarks').val();
        
        if ($('#supportdeleteremarks').val() == "") {
            $('#mdlsupportdelete').modal('hide');
        } else if ($('#supportdeleteremarks').val()) {
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
                    $('#mdlsupportdelete').modal('hide');
                }
            });
        }
    }

    function savedeletedsupport() {
        var supportoffid = $('#supportoffid').val();
        var supportfname = $('#supportfname').val();
        var supportmname = $('#supportmname').val();
        var supportlname = $('#supportlname').val();
        var supportsuffix = $('#supportsuffix').val();
        var supportposition = $('#supportposition').val();
        var supporttype = $('#supporttype').val();
        var supportdeleteremarks = $('#supportdeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeletedsupport' + '&supportoffid=' + supportoffid + '&supportfname=' + supportfname + '&supportmname=' + supportmname + '&supportlname=' + supportlname + '&supportsuffix=' + supportsuffix + '&supportposition=' + supportposition + '&supporttype=' + supporttype + '&supportdeleteremarks=' + supportdeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlsupportdelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // ADMIN //
    function viewadmindelete(adminname, adminuserid, admin_fname, admin_mname, admin_lname, admin_suffix, admin_position, admin_type) {
        $('#mdladmindelete').modal('show');

        var text_max = 200;
        $('#admindelete_feedback').html(text_max + ' characters remaining');
        $('#admindeleteremarks').val("");
        $('#adminfullname').text(adminname);
        $('#adminoffid').val(adminuserid);
        $('#adminfname').val(admin_fname);
        $('#adminmname').val(admin_mname);
        $('#adminlname').val(admin_lname);
        $('#adminsuffix').val(admin_suffix);
        $('#adminposition').val(admin_position);
        $('#admintype').val(admin_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#admindelete_feedback').html(text_max + ' characters remaining');

        $('#admindeleteremarks').keyup(function() {
            var text_length = $('#admindeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#admindelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function clearadmindelete() {
        var admindeleteremarks = $('#admindeleteremarks').val();
        
        if ($('#admindeleteremarks').val() == "") {
            $('#mdladmindelete').modal('hide');
        } else if ($('#admindeleteremarks').val()) {
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
                    $('#mdladmindelete').modal('hide');
                }
            });
        }
    }

    function savedeletedadmin() {
        var adminoffid = $('#adminoffid').val();
        var adminfname = $('#adminfname').val();
        var adminmname = $('#adminmname').val();
        var adminlname = $('#adminlname').val();
        var adminsuffix = $('#adminsuffix').val();
        var adminposition = $('#adminposition').val();
        var admintype = $('#admintype').val();
        var admindeleteremarks = $('#admindeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeletedadmin' + '&adminoffid=' + adminoffid + '&adminfname=' + adminfname + '&adminmname=' + adminmname + '&adminlname=' + adminlname + '&adminsuffix=' + adminsuffix + '&adminposition=' + adminposition + '&admintype=' + admintype + '&admindeleteremarks=' + admindeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdladmindelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // DEVELOPER //
    function viewdeveloperdelete(developername, developeruserid, developer_fname, developer_mname, developer_lname, developer_suffix, developer_position, developer_type) {
        $('#mdldeveloperdelete').modal('show');

        var text_max = 200;
        $('#developerdelete_feedback').html(text_max + ' characters remaining');
        $('#developerdeleteremarks').val("");
        $('#developerfullname').text(developername);
        $('#developeroffid').val(developeruserid);
        $('#developerfname').val(developer_fname);
        $('#developermname').val(developer_mname);
        $('#developerlname').val(developer_lname);
        $('#developeradminsuffix').val(developer_suffix);
        $('#developerposition').val(developer_position);
        $('#developertype').val(developer_type);
    }

    $(document).ready(function() {
        var text_max = 200;
        $('#developerdelete_feedback').html(text_max + ' characters remaining');

        $('#developerdeleteremarks').keyup(function() {
            var text_length = $('#developerdeleteremarks').val().length;
            var text_remaining = text_max - text_length;

            $('#developerdelete_feedback').html(text_remaining + ' characters remaining');
        });
    });

    function cleardeveloperdelete() {
        var developerdeleteremarks = $('#developerdeleteremarks').val();
        
        if ($('#developerdeleteremarks').val() == "") {
            $('#mdldeveloperdelete').modal('hide');
        } else if ($('#developerdeleteremarks').val()) {
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
                    $('#mdldeveloperdelete').modal('hide');
                }
            });
        }
    }

    function savedeleteddeveloper() {
        var developeroffid = $('#developeroffid').val();
        var developerfname = $('#developerfname').val();
        var developermname = $('#developermname').val();
        var developerlname = $('#developerlname').val();
        var developersuffix = $('#developersuffix').val();
        var developerposition = $('#developerposition').val();
        var developertype = $('#developertype').val();
        var developerdeleteremarks = $('#developerdeleteremarks').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=savedeleteddeveloper' + '&developeroffid=' + developeroffid + '&developerfname=' + developerfname + '&developermname=' + developermname + '&developerlname=' + developerlname + '&developersuffix=' + developersuffix + '&developerposition=' + developerposition + '&developertype=' + developertype + '&developerdeleteremarks=' + developerdeleteremarks,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Account deleted",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdldeveloperdelete').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant delete account",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function totalclients() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalclients',
            success: function(data){
                $('#clientaccnt').text(data);
            }
        });
    } 

    function totalsupervisors() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalsupervisors',
            success: function(data){
                $('#supervisoraccnt').text(data);
            }
        });
    } 

    function totaloperations() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totaloperations',
            success: function(data){
                $('#operationsaccnt').text(data);
            }
        });
    } 

    function totalsupport() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalsupport',
            success: function(data){
                $('#supportaccnt').text(data);
            }
        });
    } 

    function totaladmin() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totaladmin',
            success: function(data){
                $('#adminaccnt').text(data);
            }
        });
    } 

    function totaldevelopers() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totaldevelopers',
            success: function(data){
                $('#developeraccnt').text(data);
            }
        });
    }

    // MEMBER REQUESTS //
    function viewmemberrequest(memreqopsname, memreqdatetimecreated, memreqcode, memreqreqteam, memreqaccount, memreqborroweddates, memreqreqremarks, memreqpoccreator, memreqpocapprv, memreqpocdisapprv, memreqdenyremarks, memreqdatetimeapproved, memreqdatetimedisapproved) {
        $('#mdlmemberrequest').modal('show');

        $('#memreq_opsname').text(memreqopsname);
        $('#memreq_datetimecreated').text(memreqdatetimecreated);
        $('#memreq_code').text(memreqcode);
        $('#memreq_reqteam').text(memreqreqteam);
        $('#memreq_account').text(memreqaccount);
        $('#memreq_borroweddates').text(memreqborroweddates);
        $('#memreq_reqremarks').text(memreqreqremarks);
        $('#memreq_poccreator').text(memreqpoccreator);
        $('#memreq_pocapprv').text(memreqpocapprv);
        $('#memreq_pocdisapprv').text(memreqpocdisapprv);
        $('#memreq_denyremarks').text(memreqdenyremarks);
        $('#memreq_datetimeapproved').text(memreqdatetimeapproved);
        $('#memreq_datetimedisapproved').text(memreqdatetimedisapproved);
    } 

    // TEAM MANAGEMENT //
    function viewteams() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=viewteams',
            success: function(data){
                $('#team_list').html(data);
            }
        });
    }

    function viewchangeteampoc(pocuser_fullname, pocuseridone, pocuseridtwo, pocuser_type) {
        $('#mdlchangeteam').modal('show');

        $('#fullname_user').text(pocuser_fullname);
        $('#userid_one').text(pocuseridone);
        $('#userid_two').text(pocuseridtwo);
        $('#usertype_').text(pocuser_type);
        document.getElementById("supervisorbtn").style.display = "block";       
        document.getElementById("operationsbtn").style.display = "none";       
        document.getElementById("supportbtn").style.display = "none"; 
    } 

    function viewchangeteamops(opsuser_fullname, opsuseridone, opsuseridtwo, opsuser_type, ops_type) {
        $('#mdlchangeteam').modal('show');

        $('#fullname_user').text(opsuser_fullname);
        $('#userid_one').text(opsuseridone);
        $('#userid_two').text(opsuseridtwo);
        $('#usertype_').text(opsuser_type);
        $('#opstype_').text(ops_type);
        document.getElementById("supervisorbtn").style.display = "none";       
        document.getElementById("operationsbtn").style.display = "block";       
        document.getElementById("supportbtn").style.display = "none"; 
    }     

    function viewchangeteamsupp(suppuser_fullname, suppuseridone, suppuseridtwo, suppuser_type) {
        $('#mdlchangeteam').modal('show');

        $('#fullname_user').text(suppuser_fullname);
        $('#userid_one').text(suppuseridone);
        $('#userid_two').text(suppuseridtwo);
        $('#usertype_').text(suppuser_type);
        document.getElementById("supervisorbtn").style.display = "none";       
        document.getElementById("operationsbtn").style.display = "none";       
        document.getElementById("supportbtn").style.display = "block"; 
    }

    function clearchangeteam() {
        $('#mdlchangeteam').modal('hide');
        viewteams();
    }

    function saveupdatedteampoc() {
        var userid_one = $('#userid_one').text();
        var userid_two = $('#userid_two').text();
        var usertype_ = $('#usertype_').text();
        var team_list = $('#team_list').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=saveupdatedteampoc' + '&userid_one=' + userid_one + '&userid_two=' + userid_two + '&usertype_=' + usertype_ + '&team_list=' + team_list,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Team updated",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlchangeteam').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant update team",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function saveupdatedteamops() {
        var userid_one = $('#userid_one').text();
        var userid_two = $('#userid_two').text();
        var usertype_ = $('#usertype_').text();
        var opstype_ = $('#opstype_').text();
        var team_list = $('#team_list').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=saveupdatedteamops' + '&userid_one=' + userid_one + '&userid_two=' + userid_two + '&usertype_=' + usertype_ + '&opstype_=' + opstype_ + '&team_list=' + team_list,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Team updated",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlchangeteam').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant update team",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    function saveupdatedteamsupp() {
        var userid_one = $('#userid_one').text();
        var userid_two = $('#userid_two').text();
        var usertype_ = $('#usertype_').text();
        var team_list = $('#team_list').val();

        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, save it!'
        }, function (isConfirm){
            if (isConfirm) {
                $.ajax({
                    type: 'POST',
                    url: 'class.php',
                    data: '&form=saveupdatedteamsupp' + '&userid_one=' + userid_one + '&userid_two=' + userid_two + '&usertype_=' + usertype_ + '&team_list=' + team_list,
                    success: function(data){
                        if (data == 1) {
                            swal({
                                title: 'Saved!',
                                text: "Team updated",
                                allowOutsideClick: false,
                                type: 'success'
                            })
                            $('#mdlchangeteam').modal('hide');
                            window.location.reload();
                        } else if (data == 2) {
                            swal({
                                title: 'Error!',
                                text: "Cant update team",
                                allowOutsideClick: false,
                                type: 'error'
                            })
                        }
                    }
                });
            }
        });
    }

    // DTR MANAGEMENT //
    function displayadmspvmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmspvmonthlydtr',
            success: function(data){
                $('#admpocmonthlydtr').text(data);
            }
        });
    }

    function displayadmspvyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmspvyearlydtr',
            success: function(data){
                $('#admpocyearlydtr').text(data);
            }
        });
    }

    function displayadmopsmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmopsmonthlydtr',
            success: function(data){
                $('#admopsmonthlydtr').text(data);
            }
        });
    }

    function displayadmopsyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmopsyearlydtr',
            success: function(data){
                $('#admopsyearlydtr').text(data);
            }
        });
    }

    function displayadmitsuppmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmitsuppmonthlydtr',
            success: function(data){
                $('#admitsuppmonthlydtr').text(data);
            }
        });
    }

    function displayadmitsuppyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmitsuppyearlydtr',
            success: function(data){
                $('#admitsuppyearlydtr').text(data);
            }
        });
    }

    function displayadmperfmonthlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmperfmonthlydtr',
            success: function(data){
                $('#admperfmonthlydtr').text(data);
            }
        });
    }

    function displayadmperfyearlydtr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmperfyearlydtr',
            success: function(data){
                $('#admperfyearlydtr').text(data);
            }
        });
    }

    function displayadmspvcurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmspvcurrentmonth',
            success: function(data){
                $('#totalcountpocdtr').text(data);
            }
        });
    }

    function displayadmopscurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmopscurrentmonth',
            success: function(data){
                $('#totalcountopsdtr').text(data);
            }
        });
    }

    function displayadmitsuppcurrentmonth() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmitsuppcurrentmonth',
            success: function(data){
                $('#totalcountitsuppdtr').text(data);
            }
        });
    }

    function dtrjan() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrjan',
            success: function(data){
                $('#janadmdtr').html(data);
            }
        });
    }

    function dtrfeb() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrfeb',
            success: function(data){
                $('#febadmdtr').html(data);
            }
        });
    }

    function dtrmar() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrmar',
            success: function(data){
                $('#maradmdtr').html(data);
            }
        });
    }

    function dtrapr() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrapr',
            success: function(data){
                $('#apradmdtr').html(data);
            }
        });
    }

    function dtrmay() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrmay',
            success: function(data){
                $('#mayadmdtr').html(data);
            }
        });
    }

    function dtrjune() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrjune',
            success: function(data){
                $('#juneadmdtr').html(data);
            }
        });
    }

    function dtrjuly() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrjuly',
            success: function(data){
                $('#julyadmdtr').html(data);
            }
        });
    }

    function dtraug() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtraug',
            success: function(data){
                $('#augadmdtr').html(data);
            }
        });
    }

    function dtrsept() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrsept',
            success: function(data){
                $('#septadmdtr').html(data);
            }
        });
    }

    function dtroct() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtroct',
            success: function(data){
                $('#octadmdtr').html(data);
            }
        });
    }

    function dtrnov() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrnov',
            success: function(data){
                $('#novadmdtr').html(data);
            }
        });
    }

    function dtrdec() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=dtrdec',
            success: function(data){
                $('#decadmdtr').html(data);
            }
        });
    } 

    // TARGET GOAL //
    function totalcurrentmonthendo() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalcurrentmonthendo',
            success: function(data){
                $('#admcurrentmonthendo').text(data);
            }
        });
    }

    function totalcurrentmonthbilling() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=totalcurrentmonthbilling',
            success: function(data){
                $('#admcurrentmonthbilling').text(data);
            }
        });
    }

    function corinthiansendorsement_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=corinthiansendorsement_goal',
            success: function(data){
                $('#corinthiansendogoal').text(data);
            }
        });
    }

    function corinthiansbilling_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=corinthiansbilling_goal',
            success: function(data){
                $('#corinthiansbillinggoal').text(data);
            }
        });
    }

    function corinthiansendorsement_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=corinthiansendorsement_actual',
            success: function(data){
                $('#corinthiansactualendo').html(data);
            }
        });
    }

    function corinthiansbilling_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=corinthiansbilling_actual',
            success: function(data){
                $('#corinthiansactualbilling').html(data);
            }
        });
    }

    function ecclesiastesendorsement_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=ecclesiastesendorsement_goal',
            success: function(data){
                $('#ecclesiastesendogoal').text(data);
            }
        });
    }

    function ecclesiastesbilling_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=ecclesiastesbilling_goal',
            success: function(data){
                $('#ecclesiastesbillinggoal').text(data);
            }
        });
    }

    function ecclesiastesendorsement_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=ecclesiastesendorsement_actual',
            success: function(data){
                $('#ecclesiastesactualendo').html(data);
            }
        });
    }

    function ecclesiastesbilling_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=ecclesiastesbilling_actual',
            success: function(data){
                $('#ecclesiastesactualbilling').html(data);
            }
        });
    }

    function markendorsement_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=markendorsement_goal',
            success: function(data){
                $('#markendogoal').text(data);
            }
        });
    }

    function markbilling_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=markbilling_goal',
            success: function(data){
                $('#markbillinggoal').text(data);
            }
        });
    }

    function markendorsement_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=markendorsement_actual',
            success: function(data){
                $('#markactualendo').html(data);
            }
        });
    }

    function markbilling_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=markbilling_actual',
            success: function(data){
                $('#markactualbilling').html(data);
            }
        });
    }

    function psalmsendorsement_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=psalmsendorsement_goal',
            success: function(data){
                $('#psalmsendogoal').text(data);
            }
        });
    }

    function psalmsbilling_goal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=psalmsbilling_goal',
            success: function(data){
                $('#psalmsbillinggoal').text(data);
            }
        });
    }

    function psalmsendorsement_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=psalmsendorsement_actual',
            success: function(data){
                $('#psalmsactualendo').html(data);
            }
        });
    }

    function psalmsbilling_actual() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=psalmsbilling_actual',
            success: function(data){
                $('#psalmsactualbilling').html(data);
            }
        });
    }

    function displayteamlist() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayteamlist',
            success: function(data){
                $('#teamlist_official').html(data);
            }
        });
    }

    function clearexportmonthlytarget() {
        $('#target_start_date').val("");
        $('#target_end_date').val("");
    } 

    function back_targetgoal_client() {
        window.location = 'target_goal.php';
    }

    function displayteamtarget() {
        var teamlist_official = $('#teamlist_official').val();

        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: '&form=displayteamtarget' + '&teamlist_official=' + teamlist_official,
            success: function(data) {
                $('#team_targetdata').html(data);
            }
        });
    }

    function psalmsjanuaryenable() {
        document.getElementById("psalsmjanenable").style.display = "none";
        document.getElementById("psalsmjandisable").style.display = "block";
        document.getElementById("psalmsjanendogoal").disabled = false;
        document.getElementById("psalmsjanendoactual").disabled = false;
        document.getElementById("psalmsjanbillinggoal").disabled = false;
        document.getElementById("psalmsjanbillingactual").disabled = false;
    }

    function psalmsjanuarydisable() {
        document.getElementById("psalsmjanenable").style.display = "block";
        document.getElementById("psalsmjandisable").style.display = "none";
        document.getElementById("psalmsjanendogoal").disabled = true;
        document.getElementById("psalmsjanendoactual").disabled = true;
        document.getElementById("psalmsjanbillinggoal").disabled = true;
        document.getElementById("psalmsjanbillingactual").disabled = true;
    }

    function psalmsfebruaryenable() {
        document.getElementById("psalsmfebenable").style.display = "none";
        document.getElementById("psalsmfebdisable").style.display = "block";
        document.getElementById("psalmsfebendogoal").disabled = false;
        document.getElementById("psalmsfebendoactual").disabled = false;
        document.getElementById("psalmsfebbillinggoal").disabled = false;
        document.getElementById("psalmsfebbillingactual").disabled = false;
    }

    function psalmsfebruarydisable() {
        document.getElementById("psalsmfebenable").style.display = "block";
        document.getElementById("psalsmfebdisable").style.display = "none";
        document.getElementById("psalmsfebendogoal").disabled = true;
        document.getElementById("psalmsfebendoactual").disabled = true;
        document.getElementById("psalmsfebbillinggoal").disabled = true;
        document.getElementById("psalmsfebbillingactual").disabled = true;
    }

    function psalmsmarchenable() {
        document.getElementById("psalmsmarenable").style.display = "none";
        document.getElementById("psalmsmardisable").style.display = "block";
        document.getElementById("psalmsmarendogoal").disabled = false;
        document.getElementById("psalmsmarendoactual").disabled = false;
        document.getElementById("psalmsmarbillinggoal").disabled = false;
        document.getElementById("psalmsmarbillingactual").disabled = false;
    }

    function psalmsmarchdisable() {
        document.getElementById("psalmsmarenable").style.display = "block";
        document.getElementById("psalmsmardisable").style.display = "none";
        document.getElementById("psalmsmarendogoal").disabled = true;
        document.getElementById("psalmsmarendoactual").disabled = true;
        document.getElementById("psalmsmarbillinggoal").disabled = true;
        document.getElementById("psalmsmarbillingactual").disabled = true;
    }

    function psalmsaprilenable() {
        document.getElementById("psalmsaprenable").style.display = "none";
        document.getElementById("psalmsaprdisable").style.display = "block";
        document.getElementById("psalmsaprendogoal").disabled = false;
        document.getElementById("psalmsaprendoactual").disabled = false;
        document.getElementById("psalmsaprbillinggoal").disabled = false;
        document.getElementById("psalmsaprbillingactual").disabled = false;
    }

    function psalmsaprildisable() {
        document.getElementById("psalmsaprenable").style.display = "block";
        document.getElementById("psalmsaprdisable").style.display = "none";
        document.getElementById("psalmsaprendogoal").disabled = true;
        document.getElementById("psalmsaprendoactual").disabled = true;
        document.getElementById("psalmsaprbillinggoal").disabled = true;
        document.getElementById("psalmsaprbillingactual").disabled = true;
    }

    function psalmsmay_enable() {
        document.getElementById("psalmsmayenable").style.display = "none";
        document.getElementById("psalmsmaydisable").style.display = "block";
        document.getElementById("psalmsmayendogoal").disabled = false;
        document.getElementById("psalmsmayendoactual").disabled = false;
        document.getElementById("psalmsmaybillinggoal").disabled = false;
        document.getElementById("psalmsmaybillingactual").disabled = false;
    }

    function psalmsmay_disable() {
        document.getElementById("psalmsmayenable").style.display = "block";
        document.getElementById("psalmsmaydisable").style.display = "none";
        document.getElementById("psalmsmayendogoal").disabled = true;
        document.getElementById("psalmsmayendoactual").disabled = true;
        document.getElementById("psalmsmaybillinggoal").disabled = true;
        document.getElementById("psalmsmaybillingactual").disabled = true;
    }


    function psalmsjune_enable() {
        document.getElementById("psalmsjuneenable").style.display = "none";
        document.getElementById("psalmsjunedisable").style.display = "block";
        document.getElementById("psalmsjuneendogoal").disabled = false;
        document.getElementById("psalmsjuneendoactual").disabled = false;
        document.getElementById("psalmsjunebillinggoal").disabled = false;
        document.getElementById("psalmsjunebillingactual").disabled = false;
    }

    function psalmsjune_disable() {
        document.getElementById("psalmsjuneenable").style.display = "block";
        document.getElementById("psalmsjunedisable").style.display = "none";
        document.getElementById("psalmsjuneendogoal").disabled = true;
        document.getElementById("psalmsjuneendoactual").disabled = true;
        document.getElementById("psalmsjunebillinggoal").disabled = true;
        document.getElementById("psalmsjunebillingactual").disabled = true;
    }

    function psalmsjuly_enable() {
        document.getElementById("psalmsjulyenable").style.display = "none";
        document.getElementById("psalmsjulydisable").style.display = "block";
        document.getElementById("psalmsjulyendogoal").disabled = false;
        document.getElementById("psalmsjulyendoactual").disabled = false;
        document.getElementById("psalmsjulybillinggoal").disabled = false;
        document.getElementById("psalmsjulybillingactual").disabled = false;
    }

    function psalmsjuly_disable() {
        document.getElementById("psalmsjulyenable").style.display = "block";
        document.getElementById("psalmsjulydisable").style.display = "none";
        document.getElementById("psalmsjulyendogoal").disabled = true;
        document.getElementById("psalmsjulyendoactual").disabled = true;
        document.getElementById("psalmsjulybillinggoal").disabled = true;
        document.getElementById("psalmsjulybillingactual").disabled = true;
    }

    function psalmsaugustenable() {
        document.getElementById("psalmsaugenable").style.display = "none";
        document.getElementById("psalmsaugdisable").style.display = "block";
        document.getElementById("psalmsaugendogoal").disabled = false;
        document.getElementById("psalmsaugendoactual").disabled = false;
        document.getElementById("psalmsaugbillinggoal").disabled = false;
        document.getElementById("psalmsaugbillingactual").disabled = false;
    }

    function psalmsaugustdisable() {
        document.getElementById("psalmsaugenable").style.display = "block";
        document.getElementById("psalmsaugdisable").style.display = "none";
        document.getElementById("psalmsaugendogoal").disabled = true;
        document.getElementById("psalmsaugendoactual").disabled = true;
        document.getElementById("psalmsaugbillinggoal").disabled = true;
        document.getElementById("psalmsaugbillingactual").disabled = true;
    }

    function psalmsseptemberenable() {
        document.getElementById("psalmsseptenable").style.display = "none";
        document.getElementById("psalmsseptdisable").style.display = "block";
        document.getElementById("psalmsseptendogoal").disabled = false;
        document.getElementById("psalmsseptendoactual").disabled = false;
        document.getElementById("psalmsseptbillinggoal").disabled = false;
        document.getElementById("psalmsseptbillingactual").disabled = false;
    }

    function psalmsseptemberdisable() {
        document.getElementById("psalmsseptenable").style.display = "block";
        document.getElementById("psalmsseptdisable").style.display = "none";
        document.getElementById("psalmsseptendogoal").disabled = true;
        document.getElementById("psalmsseptendoactual").disabled = true;
        document.getElementById("psalmsseptbillinggoal").disabled = true;
        document.getElementById("psalmsseptbillingactual").disabled = true;
    }

    function psalmsoctoberenable() {
        document.getElementById("psalmsoctenable").style.display = "none";
        document.getElementById("psalmsoctdisable").style.display = "block";
        document.getElementById("psalmsoctendogoal").disabled = false;
        document.getElementById("psalmsoctendoactual").disabled = false;
        document.getElementById("psalmsoctbillinggoal").disabled = false;
        document.getElementById("psalmsoctbillingactual").disabled = false;
    }

    function psalmsoctoberdisable() {
        document.getElementById("psalmsoctenable").style.display = "block";
        document.getElementById("psalmsoctdisable").style.display = "none";
        document.getElementById("psalmsoctendogoal").disabled = true;
        document.getElementById("psalmsoctendoactual").disabled = true;
        document.getElementById("psalmsoctbillinggoal").disabled = true;
        document.getElementById("psalmsoctbillingactual").disabled = true;
    }

    function psalmsnovemberenable() {
        document.getElementById("psalmsnovenable").style.display = "none";
        document.getElementById("psalmsnovdisable").style.display = "block";
        document.getElementById("psalmsnovendogoal").disabled = false;
        document.getElementById("psalmsnovendoactual").disabled = false;
        document.getElementById("psalmsnovbillinggoal").disabled = false;
        document.getElementById("psalmsnovbillingactual").disabled = false;
    }

    function psalmsnovemberdisable() {
        document.getElementById("psalmsnovenable").style.display = "block";
        document.getElementById("psalmsnovdisable").style.display = "none";
        document.getElementById("psalmsnovendogoal").disabled = true;
        document.getElementById("psalmsnovendoactual").disabled = true;
        document.getElementById("psalmsnovbillinggoal").disabled = true;
        document.getElementById("psalmsnovbillingactual").disabled = true;
    }

    function psalmsdecemberenable() {
        document.getElementById("psalmsdecenable").style.display = "none";
        document.getElementById("psalmsdecdisable").style.display = "block";
        document.getElementById("psalmsdecendogoal").disabled = false;
        document.getElementById("psalmsdecendoactual").disabled = false;
        document.getElementById("psalmsdecbillinggoal").disabled = false;
        document.getElementById("psalmsdecbillingactual").disabled = false;
    }

    function psalmsdecemberdisable() {
        document.getElementById("psalmsdecenable").style.display = "block";
        document.getElementById("psalmsdecdisable").style.display = "none";
        document.getElementById("psalmsdecendogoal").disabled = true;
        document.getElementById("psalmsdecendoactual").disabled = true;
        document.getElementById("psalmsdecbillinggoal").disabled = true;
        document.getElementById("psalmsdecbillingactual").disabled = true;
    }

    // USER PROFILE //
    function displaymonthlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyactlogs',
            success: function(data){
                $('#officialadminmonthlyactlogs').text(data);
            }
        });
    }

    function displayyearlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyactlogs',
            success: function(data){
                $('#officialadminyearlyactlogs').text(data);
            }
        });
    }

    function displaymonthlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyuserlogs',
            success: function(data){
                $('#officialadminmonthlyuserlogs').text(data);
            }
        });
    }

    function displayyearlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyuserlogs',
            success: function(data){
                $('#officialadminyearlyuserlogs').text(data);
            }
        });
    } 

    function back_adm_user_profile() {
        window.location = 'user_profile.php';
    }    

    $(document).ready(function() {
        var text_max = 500;
        $('#address_feedback').html(text_max + ' characters remaining');

        $('#admaddress').keyup(function() {
            var text_length = $('#admaddress').val().length;
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
                $('#admticketstatus').html(data);
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

    // TICKET MANAGEMENT //
    function showcurmonthticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showcurmonthticket',
            success: function(data){
                $('#totalcurrentmonthlyticket').text(data);
            }   
        });
    }

    function showcuryearlyticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showcuryearlyticket',
            success: function(data){
                $('#totalcurrentyearlyticket').text(data);
            }   
        });
    }

    function showjanticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showjanticket',
            success: function(data){
                $('#janticketstatus').html(data);
            }
        });
    }

    function showfebticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showfebticket',
            success: function(data){
                $('#febticketstatus').html(data);
            }
        });
    }

    function showmarticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showmarticket',
            success: function(data){
                $('#marticketstatus').html(data);
            }
        });
    }

    function showaprticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showaprticket',
            success: function(data){
                $('#aprticketstatus').html(data);
            }
        });
    }

    function showmayticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showmayticket',
            success: function(data){
                $('#mayticketstatus').html(data);
            }
        });
    }

    function showjuneticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showjuneticket',
            success: function(data){
                $('#juneticketstatus').html(data);
            }
        });
    }

    function showjulyticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showjulyticket',
            success: function(data){
                $('#julyticketstatus').html(data);
            }
        });
    }

    function showaugticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showaugticket',
            success: function(data){
                $('#augticketstatus').html(data);
            }
        });
    }

    function showseptticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showseptticket',
            success: function(data){
                $('#septticketstatus').html(data);
            }
        });
    }

    function showoctticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showoctticket',
            success: function(data){
                $('#octticketstatus').html(data);
            }
        });
    }

    function shownovticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=shownovticket',
            success: function(data){
                $('#novticketstatus').html(data);
            }
        });
    }

    function showdecticket() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=showdecticket',
            success: function(data){
                $('#decticketstatus').html(data);
            }
        });
    }

    // LOGOUT //
    function admlogout() {
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
                    data: 'form=admlogout',
                    success: function(data){
                        window.location.href = '../signin.php';
                    }
                });
            }
        });
    }

    // ACTIVITY LOGS //
    function saveadmdashboard() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdashboard',
            success: function(data){

            }
        });
    }

    function saveadmmonitorbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmmonitorbi',
            success: function(data){

            }
        });
    }

    function saveadmmonitordc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmmonitordc',
            success: function(data){

            }
        });
    }

    function saveadmuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmuserlogs',
            success: function(data){

            }
        });
    }

    function saveadmactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmactlogs',
            success: function(data){

            }
        });
    }

    function saveadmendologs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmendologs',
            success: function(data){

            }
        });
    }

    function saveadmnewuser() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmnewuser',
            success: function(data){

            }
        });
    }

    function saveadmmanageusers() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmmanageusers',
            success: function(data){

            }
        });
    }

    function saveadmmonthperf() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmmonthperf',
            success: function(data){

            }
        });
    }

    function saveadmtargetgoal() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmtargetgoal',
            success: function(data){

            }
        });
    }

    function saveadmmemberreq() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmmemberreq',
            success: function(data){

            }
        });
    }

    function saveadmteammngt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmteammngt',
            success: function(data){

            }
        });
    }

    function saveadmsystemmngt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmsystemmngt',
            success: function(data){

            }
        });
    }

    function saveadmkpimonitoring() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmkpimonitoring',
            success: function(data){

            }
        });
    }

    function saveadmuserprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmuserprofile',
            success: function(data){

            }
        });
    }

    function saveadmusermessaging() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmusermessaging',
            success: function(data){

            }
        });
    }

    function saveadmviewchangeteam() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewchangeteam',
            success: function(data){

            }
        });
    }

    function saveadmviewblacklistaccnt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewblacklistaccnt',
            success: function(data){

            }
        });
    }

    function saveadmviewdeleteaccnt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewdeleteaccnt',
            success: function(data){

            }
        });
    }

    function saveadmviewreactivateaccnt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewreactivateaccnt',
            success: function(data){

            }
        });
    }

    function saveadmviewholidays() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewholidays',
            success: function(data){

            }
        });
    }

    function saveadmviewtopmngt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewtopmngt',
            success: function(data){

            }
        });
    }

    function saveadmviewteams() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewteams',
            success: function(data){

            }
        });
    }

    function saveadmviewbi() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewbi',
            success: function(data){

            }
        });
    }

    function saveadmviewdc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewdc',
            success: function(data){

            }
        });
    }

    function saveadmviewendorsementlog() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewendorsementlog',
            success: function(data){

            }
        });
    }

    function saveadmviewmemberequest() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewmemberequest',
            success: function(data){

            }
        });
    }

    function saveadmviewupdateprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewupdateprofile',
            success: function(data){

            }
        });
    }

    function saveadmviewactivitylogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewactivitylogs',
            success: function(data){

            }
        });
    } 

    function saveadmviewuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewuserlogs',
            success: function(data){

            }
        });
    }    

    function saveadmdtrpoc() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdtrpoc',
            success: function(data){

            }
        });
    }

    function saveadmdtrops() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdtrops',
            success: function(data){

            }
        });
    }

    function saveadmdtritsup() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdtritsup',
            success: function(data){

            }
        });
    }

    function saveadmdtrperformance() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdtrperformance',
            success: function(data){

            }
        });
    }

    function saveadmviewexportmonthlytarget() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmviewexportmonthlytarget',
            success: function(data){

            }
        });
    }

    function saveadmvieweditmonthlytarget() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmvieweditmonthlytarget',
            success: function(data){

            }
        });
    }

    function saveadmdashboardexportdata() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmdashboardexportdata',
            success: function(data){

            }
        });
    } 

    function saveadmuserticketing() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveadmuserticketing',
            success: function(data){

            }
        });
    } 

    function saveticketmngt() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=saveticketmngt',
            success: function(data){

            }
        });
    }

    // ONLINE USERS //
    function displayadmonlineusers() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayadmonlineusers',
            success: function(data){
                $('#onlineadminusers').html(data);
            }
        });
    }
    
    $(document).ready(function () {
        // Trigger when first dropdown changes
        $('#usercompany').change(function () {
            var companyName = $(this).val();
            console.log("Selected company: " + companyName); // Log company name
        
            if (companyName) {
                $.ajax({
                    url: 'get_options.php',
                    type: 'POST',
                    data: { client_name: companyName },
                    success: function (response) {
                        console.log(response);  // Log the response
                        $('#usersite').html('<option value="">Select Site</option>');
                        $('#usersite').append(response);
                    }
                });
            } else {
                $('#usersite').html('<option value="">Select Site</option>');
            }
        });
    });
</script>