<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package whiteboard
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content">
            <?php esc_html_e('Skip to content', 'whiteboard'); ?>
        </a>

        <header id="masthead" class="site-header">
          <nav id="site-navigation" class="navbar site-nav navbar-expand-md navbar-light bg-light main-navigation"
                role="navigation">
				<div class="container">
					<div class="site-branding">
						<?php
      the_custom_logo();
      if (is_front_page() && is_home()): ?>
						<h1 class="site-title">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php bloginfo('name'); ?>
							</a>
						</h1>

						<?php else: ?>
						<p class="site-title mb-0">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php bloginfo('name'); ?>
							</a>
						</p>
						<?php endif;
      $whiteboard_description = get_bloginfo('description', 'display');
      if ($whiteboard_description || is_customize_preview()): ?>
						<p class="site-description sr-only">
							<?php echo $whiteboard_description;
      	/* WPCS: xss ok. */
      	?>
						</p>
						<?php endif;
      ?>
					</div><!-- .site-branding -->
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon" aria-hidden="true"></span>
                    </button>



                    <?php wp_nav_menu(array(
                    	'theme_location' => 'menu-1',
                    	'depth' => 3,
                    	'container' => 'div',
                    	'container_id' => 'navbarSupportedContent',
                    	'container_class' => 'collapse navbar-collapse',
                    	'menu_id' => 'primary-menu',
                    	'menu_class' => 'nav navbar-nav ml-auto',
                    	'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    	'walker' => new WP_Bootstrap_Navwalker()
                    )); ?>

                </div>
            </nav>
        </header><!-- #masthead -->

        <div id="content" class="site-content">
			<div class="container">
				<div class="row">
