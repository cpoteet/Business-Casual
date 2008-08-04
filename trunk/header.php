<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >

<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?><?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?><?php wp_title(); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="header">

<div id="search">
<form id="searchform" action="<?php bloginfo('url'); ?>" method="get">
<input id="s" type="text" size="20" name="s" />
<input type="image" value="Search" id="button_search" src="<?php bloginfo('template_directory'); ?>/images/search.gif" alt="Search" />
</form>
</div>

<h1><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
<?php  
 $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  
 if(strpos($user_agent, 'MSIE') !== false) { ?>
  <ul class="ie"><?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?></ul>
 <?php } else {  ?>
  <ul><?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?></ul>
<?php } ?> 	

</div>

<div id="main">