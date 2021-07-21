<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newsmag
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="wp">
<head>
	<base href="/">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<div id="content" class="site-content">
<?php
$img = get_custom_header();
$img = $img->url;
$additional = '';
if ( ! empty( $img ) ) : ?>
        <?php $additional = 'style="background-image:url(' . esc_url( $img ) . '"'; ?>
<?php endif; ?>
<div class="newsmag-custom-header" id="redwordpress-homelink" <?php echo $additional; ?>>
                <div class="container">
                        <div class="row">
                                <div class="col-xs-12">
                                        <h1 class="page-title"><?php echo esc_html( get_option( 'blogname' ) ); ?></h1>
                                </div>
                        </div>
                </div>
        </div>
<div class="container">
                <div class="row">
<div ng-view=""></div>
