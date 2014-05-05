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
	<meta name="viewport" content="width=device-width">
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

    <?php /*
	<div class="navbar navbar-inverse">
        <div class="navbar-inner" style="padding-left:35px;padding-right:35px">
            <ul class="nav">
                <li class="active"><a href="index.php">Welcome</a></li>
                <li class="active"><a href="index.php">SQL/MySQL</a></li>
            </ul>
            <ul class="nav" style="float:right">
                    <li><a href="">Login</a></li>
                    <li class="dropdown">
                        <a id="Setups-menu" class="dropdown-toggle" data-toggle="dropdown" href="" data_target="#">Hello Jeff <b class="caret"></b></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Account Info</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Change Password</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
                        </ul>
                    </li>
            </ul>
        </div> <!-- navbar-inner -->
    </div> <!-- navbar -->
    */ ?>
<!-- Fake header -->
<div style="border:1px solid blue">This is the header area with some text here</div>

<div id="body_wrap1">
<?php /*<div id="body_wrap2">*/?>