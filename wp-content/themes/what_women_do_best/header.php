<?php if (wp_loaded() === true) { ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<!--[if lte IE 6]>
<link href="<?php bloginfo('template_url'); ?>/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lte IE 7]>
<link href="<?php bloginfo('template_url'); ?>/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--[if lt IE 7]>
<?php wp_enqueue_script('IE7.js', get_bloginfo('template_directory') .'/js/IE7.js', false, '1.1.1'); ?>
 <![endif]-->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.2.6.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/spy.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tabber.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scroll.js"></script>

<script type="text/javascript" > jQuery.noConflict();</script>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php  wp_head(); ?>
</head><?php } ?>
<body>
<div id="page">

<div id="header">

<div id="description">
<a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"/></a></div>

<div class="rss">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" alt="rss" /></a></div>

<div class="rss">
<a href="http://twitter.com/<?php $twit = get_option('wwdb_twit'); echo $twit; ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter.png" alt="twitter" /></a>
</div>

<div class="rss">
<a href="http://feedburner.google.com/fb/a/mailverify?uri=<?php $feedburner_feed = get_option('wwdb_feedburner_feed'); echo $feedburner_feed; ?>/LaCg&amp;loc=en_US" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/feedburner.png" alt="email updates" /></a></div>

</div>

<div id="gallery">
<?php include (TEMPLATEPATH . '/gallery.php'); ?>
</div>

<?php include (TEMPLATEPATH . '/menu.php'); ?>

<hr />
