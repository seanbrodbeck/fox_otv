<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package otv
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.typekit.net/meb1qzx.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'otv' ); ?></a>
	<div id="tu-header">
		<a href="https://www.fox.temple.edu/research/" target="_blank" title="Temple University, Fox School of Business Website">
			<img class="header-tu-logo" src="/ontheverge/wp-content/themes/otv/dist/images/tu-logo.svg" alt="Temple University, Fox School of Business"/>
		</a>
	</div>
	<header id="masthead" class="site-header">
		<div class="menu">
			<div class="open-menu desktop-only">
				<img class="top-nav" src="/ontheverge/wp-content/themes/otv/dist/images/open-menu.svg" width="10" height="auto" alt="Open Menu" />
			</div>
			<div class="menu-items">
				<div class="menu-wrap">
					<div class="menu-top">

						<a class="desktop-only" href="/"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-home.svg" width="9" height="auto" alt="Home"/></a>
						<span class="desktop-only stories-open-menu"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-stories.svg" width="9" height="auto" alt="Stories"/></span>

						<div class="mobile-nav mobile-only">
							<a href="/"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-home-mobile.svg" height="9" width="auto" alt="Home" style="width:auto;height:9px;"/></a>
							<span class="stories-open-menu-mobile"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-stories-mobile.svg" height="9" width="auto" alt="Stories" style="width:auto;height:9px;"/></span>
							<div class="open-menu-mobile"><img class="top-nav" src="/ontheverge/wp-content/themes/otv/dist/images/mobile-open-nav.svg" alt="Open Menu" style="width:auto;height:9px;" /></div>
							<div class="close-menu-mobile" style="display:none;"><img class="top-nav" src="/ontheverge/wp-content/themes/otv/dist/images/mobile-close-nav.svg" alt="Open Menu" style="width:auto;height:9px;" /></div>
						</div>

					</div>
					<div class="menu-bottom desktop-only">
						<span class="in-love-with-big-data">01</span>
						<span class="whats-a-hashtag-worth">02</span>
						<span class="personalizing-education">03</span>
						<span class="can-uber-buy-you-a-benz">04</span>
						<span class="calculating-new-ideas">05</span>
					</div>
				</div>
			</div>
			<div class="overlay">
				<div class="desktop-only close-menu"><img src="/ontheverge/wp-content/themes/otv/dist/images/close.svg" width="10" height="auto" alt="Close Menu"/></div>
			 	<ul class="menu-items-text">
			 		<li class="story-list-link"><a href="/in-love-with-big-data"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-icon-data.svg" alt="In Love With Big Data"><span class="nav-title">In Love With Big Data</span><span class="mobile-only nav-number">01</span></a></li>
					<li class="story-list-link"><a href="/whats-a-hashtag-worth"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-icon-hashtag.svg" alt="What’s a Hashtag Worth?"><span class="nav-title">What’s a Hashtag Worth?</span><span class="mobile-only nav-number">02</span></a></li>
					<li class="story-list-link"><a href="/personalizing-education"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-icon-education.svg" alt="Personalizing Education"><span class="nav-title">Personalizing Education</span><span class="mobile-only nav-number">03</span></a></li>
					<li class="story-list-link"><a href="/can-uber-buy-you-a-benz"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-icon-uber.svg" alt="Can Uber Buy You a Benz?"><span class="nav-title">Can Uber Buy You a Benz?</span><span class="mobile-only nav-number">04</span></a></li>
					<li class="story-list-link"><a href="/calculating-new-ideas"><img src="/ontheverge/wp-content/themes/otv/dist/images/nav-icon-ideas.svg" alt="Calculating New Ideas"><span class="nav-title">Calculating New Ideas</span><span class="mobile-only nav-number last">05</span></a></li>
			 	</ul>
		</div>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'otv' ); ?></button> -->
			<?php
			//wp_nav_menu( array(
				//'theme_location' => 'menu-1',
				//'menu_id'        => 'primary-menu',
			//) );
			?>
		</nav><!-- #site-navigation -->
		<div class="desktop-only keep-scrolling"><img src="/ontheverge/wp-content/themes/otv/dist/images/scroll-down-text.svg" width="8" height="auto" alt="Scroll Down"/></div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
