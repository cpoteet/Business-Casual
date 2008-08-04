<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
    
remove_filter('the_excerpt', 'wpautop');   
remove_filter('the_excerpt', 'wptexturize');

function wp_trim_excerpt_wo() {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$excerpt_length = 55;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			$text = implode(' ', $words);
		}
	}
	return $text;
}
    
function the_contentstripped($more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
	$content = get_the_content($more_link_text, $stripteaser, $more_file);
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]&gt;', $content);
  echo strip_tags($content);
}
    
function the_stripped_content() {
   $excerpt = wp_trim_excerpt_wo();
   echo strip_tags($excerpt);
   echo " <a href='";
   the_permalink();
   echo "'>(read more...)</a>";
  }
  
?>
