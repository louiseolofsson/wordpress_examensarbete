jQuery(function( $ ) {

    var frame;

    $( document ).on( 'click', '.upload-media-button', function( event ) {

        event.preventDefault();
        //Find the siblings, don't want to select all others
        var self = $( this ),
            imageContainer = self.siblings( '.image-container'), //där vi har bilden
            mediaInput = self.siblings( '.media-input' ); //input den ska in i

        frame = wp.media({
            title: 'Insert Media',
            button: {
                text: 'Use picture'
            },
            library: {
                type: 'image'
            },
            multiple: false
        });

        frame.on( 'select', function() {
            // Attachment object
            var attachment = frame.state().get( 'selection' ).first().toJSON();

            // Make preview if attachment type is image
            if ( attachment.type === 'image' ){
                imageContainer.html( '<img src="' + attachment.url + '" style=" max-width: 100%; margin: 5px 0; display: block; ">' );
            }

            mediaInput.val( attachment.url );

            mediaInput.change();
        });

        frame.open();

    });
});
