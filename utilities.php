<?
// Unregister Sidebars
function unregister_sidebars($sidebars){
  $GLOBALS['_unregister_sidebars'] = arrayize($sidebars);
}

function unregistered_sidebars_callback(){
  foreach($GLOBALS['_unregister_sidebars'] as $sidebar){
    unregister_sidebar($sidebar);
  }

  unset($GLOBALS['_unregister_sidebars']);
}
add_action('widgets_init', 'unregistered_sidebars_callback', 11);

// Utility to allow functions to take a single string, array, or comma-separated values as a string
function arrayize($input){
  if(!is_array($input)){
    return split(',', $input);
  } else{
    return $input;
  }
}

// Remove rel attribute from the category list (fixes HTML5 validation)
function remove_category_list_rel($output){
  return str_replace(' rel="category"', '', $output);
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');

