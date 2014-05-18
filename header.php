<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

    <?php if(is_home()):?>
    <meta name="description" content="Codenuggets features tips and tricks for the tech-savvies and software developers." />
    <?php endif;?>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	
    <!--
    <script src="<?=get_template_directory_uri();?>/bootstrap/js/bootstrap.min.js"></script>
	<link href="<?=get_template_directory_uri();?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Nav bar -->
    <div class="navbar">
        <div class="navwrap">
            <div class="navwrap2">
                <ul class="nav">
                <li><a href="<?php echo site_url()?>">Home</a></li>
                <li><a href="<?php echo get_category_link(get_cat_ID('SQL/MySQL')); ?>">MySQL</a></li>
                <li><a href="<?php echo get_category_link(get_cat_ID('PHP')); ?>">PHP</a></li>
                <li><a href="<?php echo get_category_link(get_cat_ID('Linux')); ?>">Ubuntu</a></li>
                <li><a href="">About</a></li>
                </ul><!-- nav -->
                <?php get_search_form()?>
            </div>
        </div><!-- .navwrap -->
    </div><!-- .navbar -->

<div id="body_wrap1">
<?php /*<div id="body_wrap2">*/?>