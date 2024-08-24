<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="site-header" class="site-header" role="banner">
        <div class="header-inner">
            <!-- Site Logo -->
            <?php the_custom_logo(); ?>

            <!-- Site Title -->
            <div class="site-branding">
                <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </div><!-- .site-branding -->

            <!-- Navigation Menu (if needed) -->
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </nav><!-- #site-navigation -->
            <?php endif; ?>
        </div><!-- .header-inner -->
    </header><!-- #site-header -->