<!DOCTYPE html>
<html>
<head>
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>" />
<meta property="og:site_name" content="<?php bloginfo('name') ?>">
<meta property="og:title" content="<?php bloginfo('name') ?>">
<meta property="og:image" content="">

<?php wp_head(); ?> 

</head>

<body>

<section class="top-header">
    <header>
        <div class="logo">
            <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url' ); ?>/dist/images/logo-full.png"></a>
        </div>
    </header>
    <!--
    <nav class="pushy pushy-right">
    	<?php //wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>')); ?>
	</nav>
	-->

	<!-- Pushy Menu -->
<nav class="pushy pushy-right">
    <ul>
        <!-- Submenu -->
        <li class="pushy-submenu">
            <a href="#">Submenu</a>
            <ul>
                <li class="pushy-link"><a href="#">Item 1</a></li>
                <li class="pushy-link"><a href="#">Item 2</a></li>
                <li class="pushy-link"><a href="#">Item 3</a></li>
            </ul>
        </li>
        <li class="pushy-link"><a href="#">Item 1</a></li>
        <li class="pushy-link"><a href="#">Item 2</a></li>
    </ul>
</nav>
</section>

<div class="site-overlay"></div>

<div id="container">
    <div class="menu-btn"></div>
</div>