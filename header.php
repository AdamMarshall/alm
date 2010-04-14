<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

	<title><?php bloginfo('name'); ?><?php wp_title('&#45;'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
	<meta http-equiv="Content-Script-Type" content="text/javascript" /> 
	<meta name="language" content="en" /> 
	<meta name="content-language" content="en" /> 
	<meta name="keywords" content="Annalisa Hats Milliner Millinery Maria" />
	<meta name="description" content="Annalisa Maria - Designer London Millinery" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php //comments_popup_script(); // off by default ?>
	<?php wp_head(); ?>
	
  </head>
<body>

<div id="mainWrapper">
	
		<div id="title">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>	

		
		