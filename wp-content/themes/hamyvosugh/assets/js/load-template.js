jQuery(document).ready(function($) {
    $('.loadTemplateButton').on('click', function() {
        var templateId = $(this).data('template-id');

        $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'load_dynamic_template',
                template_id: templateId
            },
            success: function(response) {
                $('#seibuTemplateContainer').html(response);
            },
            error: function() {
                alert('Failed to load the template. Please try again.');
            }
        });
    });
});