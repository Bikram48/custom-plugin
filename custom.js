// jQuery document ready
jQuery( document ).ready( function() {
    //console.log("Hello"+jQuery('#menu-icon-upload').data('id'));
    jQuery( ".menu-upload" ).click( function( e ) {
      
        e.preventDefault();

        if( e.isDefaultPrevented() ) {
            console.log( "Button is prevented" );
        }
        //console.log(jQuery('#submit').data('id'));

        var button = jQuery( this ),
            item_id = jQuery( this ).data( 'id' ),

            custom_uploader = wp.media( {
                title: 'Insert Image',
                library: {
                    type: 'image'
                },
                button: {
                    text: 'Use this image'
                },
                multiple: false
            } ).on( 'select', function() {
                var attachment = custom_uploader.state().get( 'selection' ).first().toJSON();
                jQuery( "#menu-icon-upload-" + item_id ).val( attachment.url );
            } ).open();
            
            //console.log(item_id);         
    });

});

