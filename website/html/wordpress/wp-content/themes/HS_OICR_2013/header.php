<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>">
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
?>
</title>
<link href="<?php bloginfo('template_directory'); ?>/960_24_col.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/reset.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/text.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link href="<?php bloginfo('template_directory'); ?>/buttons.css" rel="stylesheet" type="text/css">
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script('comment-reply'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container_24">
<!--header-->
<div class="header">
 
 <div class="grid_24"><!--Reactome logo-->
 <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/ReactomeLogo.png" alt="Reactome: A Curated Pathway Database"></a>
 </div><!--end grid 24 Reactome logo-->
 
 <div class="clear"></div><!--clear the row with logo-->
 
  <div class="navwrapper"> 
 <div class="grid_24">
 <!--nav-->
 <div class="nav">
	<?php wp_nav_menu( array('menu' => 'Main' )); ?> 
 </div><!--close nav-->
  <div class="search_bar">
      <form method="get" action="/cgi-bin/search2">
        <input type="hidden" name="OPERATOR" value="ALL" />
        <input type="search" class="search" name="QUERY" placeholder="e.g. O95631, NTN1, signaling by EGFR, glucose"/> 
        <input type="submit" class="submit" value="Search"/>
       </form>
     </div><!--close search-->
     
 </div><!--close grid 24-->
 <div class="clear"></div><!--clear nav row-->
 </div><!--close navwrapper-->
</div><!--close header-->

<div class="clear"></div><!--clear header-->

<!--content-->
<div class="wrapper">