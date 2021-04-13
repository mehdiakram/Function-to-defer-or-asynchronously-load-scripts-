/* Function to defer or asynchronously load scripts */
function js_async_attr($tag){
$scripts_to_exclude = array('jquery.min.js', 'aos.js');

foreach($scripts_to_exclude as $exclude_script){
 if(true == strpos($tag, $exclude_script ) )
 return $tag; 
}

return str_replace(' src', ' defer="defer" src', $tag );
}
add_filter('script_loader_tag', 'js_async_attr', 10 );
