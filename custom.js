// jQuery document ready
jQuery( document ).ready( function() {
    jQuery( "#submit" ).click(function( e ) {

        e.preventDefault();

        if( e.isDefaultPrevented() ) {
            console.log("Button is prevented");
        }

        var button = jQuery(this),
            custom_uploader = wp.media({
                title: 'Insert Image',
                library: {
                    type: 'image'
                },
                button: {
                    text: 'Use this image'
                }
            })
        .open();
            
    });
});

