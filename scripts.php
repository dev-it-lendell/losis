<script>

    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // Get the buttons
    var accept = document.getElementById("accept");
    var cancelBtn = document.getElementById("cancelBtn");

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
    
    // When the user clicks on the accept button, close the modal and check the checkbox
    accept.onclick = function() {
        modal.style.display = "none";
        checkbox.checked = true;
    }
    
    // When the user clicks on the cancel button, close the modal and uncheck the checkbox
    cancelBtn.onclick = function() {
        modal.style.display = "none";
        checkbox.checked = false;
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    
    //Dropify file upload
    $(document).ready(function() {
    // Initialize Dropify
    $('.dropify').dropify();

    // Form submit handler
    $('#myForm').on('submit', function(event) {
        if ($('#e_signature').get(0).files.length === 0) {
            alert("Please upload your e-signature.");
            event.preventDefault();
            }
        });

    $('#myForm').on('submit', function(event) {
        if ($('#supp_docs').get(0).files.length === 0) {
            alert("Please upload your supporting documents.");
            event.preventDefault();
            }
        });
    });

    
    
    //Append - Employment History
   $('#addrowEmployment').click(function(){
        var length = $('.empcount').length;
        var i   = parseInt(length)+parseInt(1);
        var newrow = $('#nextEmployment').append('<div class="employment-entry"><br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control empcount" id="empno" name="empno[]" value="'+i+'" autocomplete= "off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-building text-dark"></i></span></div><input type="text" class="form-control" id="emp_company'+i+'" name="emp_company[]" autocomplete="off" placeholder="Employer"></div></div><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="emp_contact'+i+'" name="emp_contact[]" autocomplete="off" placeholder="Contact Number"></div></div><div class="col-md-4"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span></div><input type="text" class="form-control" id="emp_title'+i+'" name="emp_title[]" autocomplete="off" placeholder="Job Title"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span></div><input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="emp_sdate'+i+'" name="emp_sdate[]" autocomplete="off" placeholder="Start Date"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar text-dark"></i></span></div><input data-provide="datepicker" data-date-autoclose="true" class="form-control" id="emp_edate'+i+'" name="emp_edate[]" autocomplete="off" placeholder="End Date"></div></div></div></div></div><div class="row"><div class="col-md-12"><textarea class="form-control" rows="5" id="emp_addr'+i+'" name="emp_addr[]" style="resize: none;" autocomplete="off" maxlength="200" placeholder="Address"></textarea></div></div><br><button type="button" class="btn btn-outline-danger btnRemoveEmployment"><i class="fa fa-minus-circle"></i> Remove</button>');
         
        });
     
    // Removing event here
    $('body').on('click','.btnRemoveEmployment',function() {
        $(this).closest('.employment-entry').remove()
     
    });
  
    //Append - Character Reference
    $('#addrowCharReference').click(function(){
        var length = $('.charcount').length;
        var i   = parseInt(length)+parseInt(1);
        var newrow = $('#nextCharReference').append('<div class="character-entry"><br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control charcount" id="charno" name="charno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_fname'+i+'" name="char_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_mname'+i+'" name="char_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_lname[]'+i+'" name="char_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="char_suffix'+i+'" name="char_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="char_rel'+i+'" name="char_rel[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="char_contact'+i+'" name="char_contact[]" autocomplete="off" placeholder="Contact Number"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-building text-dark"></i></span></div><input type="text" class="form-control" id="char_company[]'+i+'" name="char_company[]" autocomplete="off" placeholder="Company Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-sitemap text-dark"></i></span></div><input type="text" class="form-control" id="char_title'+i+'" name="char_title[]" autocomplete="off" placeholder="Job Title"></div></div></div></div></div><br><button type="button" class="btn btn-sm  btn-outline-danger btnRemoveCharReference"><i class="fa fa-minus-circle"></i> Remove</button>');
         
        });
     
    // Removing event here
  	$('body').on('click','.btnRemoveCharReference',function() {
       $(this).closest('.character-entry').remove()
  	});

	//Append - Neighborhood Reference
   	$('#addrowNeighborReference').click(function(){
        var length = $('.nbcount').length;
        var i   = parseInt(length)+parseInt(1);
        var newrow = $('#nextNeighborReference').append('<div class="neighborhood-entry"><br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control nbcount" id="nbno" name="nbno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_fname'+i+'" name="nb_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_mname'+i+'" name="nb_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_lname[]'+i+'" name="nb_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="nb_suffix'+i+'" name="nb_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="nb_rel'+i+'" name="nb_rel[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="nb_contact'+i+'" name="nb_contact[]" autocomplete="off" placeholder="Contact Number"></div></div></div></div></div><br><button type="button" class="btn btn-sm btn-outline-danger btnRemoveNeighborReference"><i class="fa fa-minus-circle"></i> Remove</button>');
         
        });
     
    // Removing event here
    $('body').on('click','.btnRemoveNeighborReference',function() {
		$(this).closest('.neighborhood-entry').remove()
	});
  
  	//Append - Relative Reference
   	$('#addrowRelativeReference').click(function(){
        var length = $('.relcount').length;
        var i   = parseInt(length)+parseInt(1);
        var newrow = $('#nextRelativeReference').append('<div class="relative-entry"><br><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"></div><div class="col-md-6"><div class="form-group"><input type="text" class="form-control relcount" id="relno" name="relno[]" value="'+i+'" autocomplete="off" readonly style="background-color: #fff; border: none; text-align: right; font-weight: bold; pointer-events: none;"></div></div></div><hr style="margin-top: -10px;"></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_fname'+i+'" name="rel_fname[]" autocomplete="off" placeholder="First Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_mname'+i+'" name="rel_mname[]" autocomplete="off" placeholder="Middle Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_lname[]'+i+'" name="rel_lname[]" autocomplete="off" placeholder="Last Name"></div></div><div class="col-md-3"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user text-dark"></i></span></div><input type="text" class="form-control" id="rel_suffix'+i+'" name="rel_suffix[]" autocomplete="off" placeholder="Suffix"></div></div></div></div></div><div class="row"><div class="col-md-12"><div class="row"><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-heart text-dark"></i></span></div><input type="text" class="form-control" id="rel_relation'+i+'" name="rel_relation[]" autocomplete="off" placeholder="Relationship"></div></div><div class="col-md-6"><div class="input-group mb-3"><div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone text-dark"></i></span></div><input type="text" class="form-control" id="rel_contact'+i+'" name="rel_contact[]" autocomplete="off" placeholder="Contact Number"></div></div></div></div></div><br><button type="button" class="btn btn-sm btn-outline-danger btnRemoveRelativeReference"><i class="fa fa-minus-circle"></i> Remove</button>');
	});
     
    // Removing event here
  	$('body').on('click','.btnRemoveRelativeReference',function() {
        $(this).closest('.relative-entry').remove()
 	});
 	
 	
 	//Duplicate Address oncheck
 	$(document).ready(function() {
        $('#same_addr').on("change", function() {
            if (this.checked) {
                $('#app_permanentaddr').val ($('#app_presentaddr').val());
            }
            else {
                $('#app_permanentaddr').val ('');
            }
        });
    });
    
    function toggleSelectAll(source) {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = source.checked;
        });
        // Show modal if checked
        if (source.checked) {
            $('#confirmModal').modal('show');
        }
    }

    function selectAllApplications() {
        const checkboxes = document.querySelectorAll('input[name="applapproval[]"]');
        checkboxes.forEach(checkbox => {
            checkbox.checked = !checkbox.checked; // Toggle the checkbox
        });
        // Show modal if any checkbox is checked
        if (Array.from(checkboxes).some(checkbox => checkbox.checked)) {
            $('#confirmModal').modal('show');
        }
    }

    // Confirm the approval action
    document.getElementById('confirmApprove').addEventListener('click', function() {
        document.querySelector('form').submit();
    });
</script>