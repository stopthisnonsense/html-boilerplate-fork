<?php
/**
 * Default Header Template
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php // Place favicon.ico and apple-touch-icon.png in the root of the domain ?>

    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header" role="banner">
    <p class="logo logo--header"><a class="logo__link" href="<?php echo home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></p>

    <nav class="nav-wrap nav-wrap--main" role="navigation">
        <?php h5bs_primary_nav(); ?>
    </nav>

    <nav class="nav-wrap nav-wrap--mobile" role="navigation">
        <i id="nav-mobile-toggle" class="nav-mobile-toggle fa fa-bars"></i>
        <?php h5bs_mobile_nav(); ?>
    </nav>
</header>
