<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">

        <?php
        require __DIR__ . '/vendor/autoload.php';

        use CowSay\Cow;

        $bessie = new Cow( 'Hello, this is an example theme!' );
        $output = $bessie->say();

        printf( '<pre class="cowsay">%s</pre>', esc_html( $output ) );
        ?>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
