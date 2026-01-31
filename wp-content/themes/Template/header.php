<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>

<header class="l-header <?php if (!is_front_page()): ?>is-sub<?php endif ?>">
    <div class="l-header__info">
        <?php if (is_front_page()): ?>
            <h1 class="l-header__info__title">
                <a href="<?php echo home_url('/') ?>">Logo</a>
            </h1>
        <?php else: ?>
            <p class="l-header__info__title">
                <a href="<?php echo home_url('/') ?>">Logo</a>
            </p>
        <?php endif ?>
    </div>
    <nav class="l-nav">
        <p class="l-nav__menu u-display-below-pc-only">
            <button class="l-nav__menu__button <?php if (!is_front_page()): ?>is-scrolled<?php endif ?>">
                <span class="l-nav__menu__button__line"></span>
                <span class="l-nav__menu__button__line"></span>
                <span class="l-nav__menu__button__line"></span>
            </button>
        </p>
        <ul class="l-nav__ul">
            <li class="l-nav__ul__li">
                <a href="<?php echo home_url('') ?>" class="l-nav__ul__li__a">Home</a>
            </li>
            <li class="l-nav__ul__li">
                <a href="<?php echo home_url('/blog/') ?>" class="l-nav__ul__li__a">Blog</a>
            </li>
            <li class="l-nav__ul__li">
                <a href="<?php echo home_url('/service/') ?>" class="l-nav__ul__li__a">Service</a>
            </li>
            <li class="l-nav__ul__li">
                <a href="<?php echo home_url('/works/') ?>" class="l-nav__ul__li__a">Works</a>
            </li>
            <li class="l-nav__ul__li">
                <a href="<?php echo home_url('/contact/') ?>" class="l-nav__ul__li__a <?php if (is_front_page()): ?>is-contact<?php else : ?>is-contact is-scrolled<?php endif ?>">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<body>