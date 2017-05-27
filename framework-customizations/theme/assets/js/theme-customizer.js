( function( $ ) {
    wp.customize( 'fw_options[OPTION_ID]', function( value ) {
        value.bind( function( newval ) {
            /**
             * An array of collected html inputs
             * [{'name':'input[name]','value':'input value'}]
             * or
             * [{'name':'input[name]','value':'input value'},{'name':'input[name]','value':'input value'},...]
             */
            newval = JSON.parse(newval);

            $( 'h1' ).text( newval[0].value );
        } );
    } );
} )( jQuery )