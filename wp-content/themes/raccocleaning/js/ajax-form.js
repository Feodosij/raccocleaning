jQuery(document).ready(function($) {
    $('#form_promo').submit(function() {
        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: formData + '&action=process_form',
            success: function(response) {
                console.log('Ajax success:', response);
              
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('Ajax error:', textStatus, errorThrown);
            },
            complete: function(jqXHR, textStatus) {
                console.log('Ajax complete:', textStatus);
            }
        });

        return false;
    });
});
