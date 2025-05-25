<script type="text/javascript">
    $(function(){
        displaymonthlyactlogs();
        displayyearlyactlogs();
        displaymonthlyuserlogs();
        displayyearlyuserlogs();
        displaydevonlineusers();
    });

    // USER PROFILE //
    function displaymonthlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyactlogs',
            success: function(data){
                $('#officialdevmonthlyactlogs').text(data);
            }
        });
    }

    function displayyearlyactlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyactlogs',
            success: function(data){
                $('#officialdevyearlyactlogs').text(data);
            }
        });
    }

    function displaymonthlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaymonthlyuserlogs',
            success: function(data){
                $('#officialdevmonthlyuserlogs').text(data);
            }
        });
    }

    function displayyearlyuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displayyearlyuserlogs',
            success: function(data){
                $('#officialdevyearlyuserlogs').text(data);
            }
        });
    }

    function back_dev_user_profile() {
        window.location = 'user_profile.php';
    }    

    $(document).ready(function() {
        var text_max = 500;
        $('#address_feedback').html(text_max + ' characters remaining');

        $('#devaddress').keyup(function() {
            var text_length = $('#devaddress').val().length;
            var text_remaining = text_max - text_length;

            $('#address_feedback').html(text_remaining + ' characters remaining');
        });
    });

    // LOGOUT //
    function devlogout() {
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
                    data: 'form=devlogout',
                    success: function(data){
                        window.location.href = '../signin.php';
                    }
                });
            }
        });
    }

    // ACTIVITY LOGS //
    function savedevdashboard() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevdashboard',
            success: function(data){

            }
        });
    }

    function savedevuserprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevuserprofile',
            success: function(data){

            }
        });
    }

    function savedevusermessaging() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevusermessaging',
            success: function(data){

            }
        });
    }

    function savedevviewupdateprofile() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevviewupdateprofile',
            success: function(data){

            }
        });
    }

    function savedevviewactivitylogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevviewactivitylogs',
            success: function(data){

            }
        });
    } 

    function savedevviewuserlogs() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=savedevviewuserlogs',
            success: function(data){

            }
        });
    }    

    // ONLINE USERS //
    function displaydevonlineusers() {
        $.ajax({
            type: 'POST',
            url: 'class.php',
            data: 'form=displaydevonlineusers',
            success: function(data){
                $('#onlinedevusers').html(data);
            }
        });
    }
</script>