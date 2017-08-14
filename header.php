<?php
$menu = wp_get_nav_menu_object('navigation');
$items = wp_get_nav_menu_items($menu->term_id);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grant Whiting's Website</title>
    <meta name="description" content="Grant Whiting's web developmeint portfolio">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel=icon type="img/ico" href=/favicon.ico>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body id="top">
    <header>
        <div class="banner">
            <div class="banner__inner">
                <nav class="main-nav">
                    <div class="main-nav__inner">
                        <a class="nav-link logo-link" href="#top"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Grant's Logo" /></a>
                        <ul>
                            <?php foreach ($items as $item): ?>
                            <li><a class="nav-link" href="<?php echo $item->url ?>"><?php echo $item->title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </nav>
                <div class="banner__inner--text">
                    <h1>Grant Whiting<br/><span>Front-end Web Developer</span></h1>
                    <p>Based out of San Luis Obispo, CA. Specializing in custom web development.</p>
                </div>
            </div>
        </div>
    </header>
    <div class="site-content">