<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Auto</title>

    <?php wp_head(); ?>

</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__top">
        <?php the_custom_logo(); ?>
        <a class="phone" href="tel:<?php the_field('phone_number'); ?>"><?php the_field('Phone'); ?></a>
      </div>
      <div class="header__content">
        <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
          <?php the_field('title'); ?>
        </h1>
        <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
        <?php the_field('triger'); ?>
        </h2>
        <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
        <?php the_field('text'); ?>
        </p>
        <a class="button" href="#">EXPERT CONSULTATION</a>
        <div class="social header__social">
          <a class="social__link" href="<?php the_field('insta_link'); ?>">
            <svg class="test" width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('telegram_link'); ?>">
            <svg width="25" height="19">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#telegram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('whatsapp_link'); ?>">
            <svg width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#whatsapp"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('facebook_link'); ?>">
            <svg width="14" height="25">
              <use xlink:href="<?php bloginfo('template_url'); ?>/assets/images/icon/sprite.svg#facebook"></use>
            </svg>
          </a>
        </div>
        <img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php the_field('main_image'); ?>"
          alt="ford mustang">
      </div>
    </div>
  </header>
