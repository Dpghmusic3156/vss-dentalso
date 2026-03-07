jQuery(document).ready(function($) {
    var frame;

    $('#upload_category_image_button').on('click', function(event) {
        event.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'Select or Upload Image',
            button: {
                text: 'Use this image'
            },
            multiple: false
        });

        frame.on('select', function() {
            var attachment = frame.state().get('selection').first().toJSON();
            $('#category_image').val(attachment.id);
            $('#category_image_preview').html('<img src="' + attachment.sizes.thumbnail.url + '" alt="" style="max-width: 150px;" />');
        });

        frame.open();
    });
});
