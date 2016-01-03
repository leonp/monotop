<!doctype html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<header class="site-header">

			<ul class="hide">

				<li><a href="#content">Skip to content</a></li>
				<li><a href="#nav">Skip to navigation</a></li>

			</ul>

			<p class="topbar"><a href="<?php get_site_url(); ?>"><img src="http://0.gravatar.com/avatar/f61286e14191d9a0b75c6937056c28f7?s=192&d=mm&r=g" class="logo rounded" alt="Leon Paternoster" title="Go to the home page"></a></p>

		</header>

		<main id="content">
