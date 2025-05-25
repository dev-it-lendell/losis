$(document).ready(function() {
    // Handle search input
    $('#biSearchInput').on('input', function() {
        const searchText = $(this).val().toLowerCase().trim();
        
        // Get the currently active tab's table
        const activeTabId = $('.tab-pane.active').attr('id');
        const activeTable = $(`#${activeTabId} table tbody`);
        
        // Search through each row in the active table
        activeTable.find('tr').each(function() {
            const row = $(this);
            
            // Skip the "no records found" row if it exists
            if (row.find('td[colspan]').length > 0) {
                return;
            }
            
            // Get text from each cell, excluding the action buttons
            let searchableText = '';
            row.find('td').each(function(index) {
                // Skip the last column (actions)
                if (index < row.find('td').length - 1) {
                    searchableText += $(this).text() + ' ';
                }
            });
            
            searchableText = searchableText.toLowerCase();
            
            // Show/hide row based on search
            if (searchText === '' || searchableText.includes(searchText)) {
                row.show();
            } else {
                row.hide();
            }
        });

        // Handle no results message
        const visibleRows = activeTable.find('tr:visible').length;
        activeTable.find('tr.no-results').remove();
        
        if (visibleRows === 0 && searchText !== '') {
            activeTable.append(`
                <tr class="no-results">
                    <td colspan="5" class="text-center">No matching records found</td>
                </tr>
            `);
        }
    });

    // Clear search when changing tabs
    $('.nav-link').on('click', function() {
        setTimeout(function() {
            $('#biSearchInput').val('').trigger('input');
        }, 100);
    });

    // Initialize tooltips after search
    $('[data-toggle="tooltip"]').tooltip();
});