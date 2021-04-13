/ *Make JavaScript Asynchronous in Wordpress */
add_filter( 'script_loader_tag', function ( $tag, $handle ) {    
    if( is_admin() ) {
        return $tag;
    }
    return str_replace( ' src', ' async src', $tag );
}, 10, 2 );
