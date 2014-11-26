<?php
// Add home widgets to every page
function include_home_widgets(){
	get_sidebar('home');
}
add_action('responsive_wrapper_end', 'include_home_widgets');

?>