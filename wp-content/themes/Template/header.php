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

<header class="header">
    <div class="header__info">
        <?php if (is_front_page()): ?>
            <h1 class="header__info__title">Logo</h1>
        <?php else: ?>
            <p class="header__info__title">Logo</p>
        <?php endif ?>
    </div>
    <nav class="nav">
        <p class="nav__menu d-sp-only">
            <button class="nav__menu__button">
                <span class="nav__menu__button__line"></span>
                <span class="nav__menu__button__line"></span>
                <span class="nav__menu__button__line"></span>
            </button>
        </p>
        <ul class="nav__ul">
            <li class="nav__ul__li">
                <a href="<?php echo home_url('') ?>" class="nav__ul__li__a">Home</a>
            </li>
            <li class="nav__ul__li">
                <a href="<?php echo home_url('/blog/') ?>" class="nav__ul__li__a">Blog</a>
            </li>
            <li class="nav__ul__li">
                <a href="<?php echo home_url('/about/') ?>" class="nav__ul__li__a">About</a>
            </li>
            <li class="nav__ul__li">
                <a href="<?php echo home_url('/contact/') ?>" class="nav__ul__li__a is-contact">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<body>