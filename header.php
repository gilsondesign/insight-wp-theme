<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	
   

    <link rel="icon" href="favicon.ico">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    
    <script src="<?php bloginfo('template_url'); ?>/modernizr-2.7.1.js"></script>

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie8support.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

	
    
</head>

<body <?php body_class('loading'); ?>>
    <nav class="main-nav">
        <div class="container">
            <a class="main-nav__logo" href="<?php echo get_option('home'); ?>/">
                <img src="<?php bloginfo('template_url'); ?>/img/insight-logo-white.png" alt="<?php bloginfo('name'); ?>" />
            </a>

            <a class="main-nav__menu-button" href="JavaScript:void(0);"><img src="<?php bloginfo('template_url'); ?>/img/mobile-menu-button.png" /></a>

            <ul class="main-nav__list">
                <li class="main-nav__list-item"><a class="main-nav__link main-nav__link--current-page" href="<?php echo get_option('home'); ?>/">Home</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php echo get_option('home'); ?>/#about-us">About Us</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php bloginfo('url'); ?>/resources">Resources</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php bloginfo('url'); ?>/our-team">Our Team</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="#contact-section">Contact Us</a></li>
            </ul>
        </div>
    </nav>