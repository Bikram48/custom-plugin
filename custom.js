// jQuery document ready
jQuery( document ).ready( function() {
    jQuery( "#submit" ).click(function( e ) {

        e.preventDefault();

        if( e.isDefaultPrevented() ) {
            console.log("Button is prevented");
        }

        wp.media().open();
            
    });
});

