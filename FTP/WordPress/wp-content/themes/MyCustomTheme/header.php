<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>

<div class="container" style="width: 80%; margin-left: auto; margin-right: auto">

<header class="site-header" style="margin-right: auto; margin-left: auto">
	<h1 class="page-title"><a href="<?php echo home_url()?>"><?php bloginfo('name'); ?></a></h1>
	<h5 class="page-description"><?php bloginfo('description'); ?></h5>
    <nav class="navigation-menu">
        <?php $args = ['theme_location' => 'primary'];?>
        <?php wp_nav_menu($args) ?>
    </nav>
</header>


