<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Maison et chambres d'hôtes">
    <meta name="author" content="Floryne TOURRET">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title><?php echo get_bloginfo('name'); ?></title>


    <?php wp_head(); ?>
</head>

<body>

    <?php
    $logo = get_theme_mod('hyggelodge_logo');
    $logo_white = get_theme_mod('hyggelodge_logo_white');
    ?>
    <div class="medium-menu transparent top-bar">
        <div class="top-bar-left">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img class="logo" src="<?php echo $logo_white; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>
        </div>
        <div class="top-bar-right ">
            <ul class="menu menu-hover-lines transparent">
                <li><a href="#" class="nav-link">Nos prestations</a></li>
                <li><a href="#" class="nav-button">Réserver</a></li>
            </ul>

        </div>

    </div>