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

	 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie8support.js"></script>
      <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <script type="text/javascript">
        var base_url = '<?php bloginfo('url'); ?>';
    </script>

    <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>
    <nav class="main-nav">
        <div class="container">
            <a class="main-nav__logo" href="<?php echo get_option('home'); ?>/">
                <img class="logo--small" src="<?php bloginfo('template_url'); ?>/img/insight-logo-white-mobile.png" alt="<?php bloginfo('name'); ?>" />
                <img class="logo--large" src="<?php bloginfo('template_url'); ?>/img/insight-logo-white.png" alt="<?php bloginfo('name'); ?>" />
            </a>
            <a class="main-nav__menu-button js-toggle-nav" href="JavaScript:void(0);"><img src="<?php bloginfo('template_url'); ?>/img/mobile-menu-button.png" /></a>

            <ul class="main-nav__list js-main-nav">
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php echo get_option('home'); ?>/">Home</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php echo get_option('home'); ?>/#about-us">About Us</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php echo get_option('home'); ?>/#contact-section">Contact Us</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php bloginfo('url'); ?>/our-team">Our Team</a></li>
                <li class="main-nav__list-item"><a class="main-nav__link" href="<?php bloginfo('url'); ?>/resources">Resources</a></li>
            </ul>
        </div>
    </nav>