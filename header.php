<?php
/**
 * @package Okinawa
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Poppins:wght@400;800&display=swap"
        rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script> -->


    <?php wp_head(); ?>

<body <?php body_class();?>>
<main class="main">
    <nav class="nav">
        <div class="nav__overlay "></div>
        <div class="container">
            <div class="nav__navbar">
                <a href="/" class="nav__logo">
                    <img class="nav__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-horizontal-black.png"
                        alt="Okinawa Sushi Restauracja Opole">

                </a>
                <button class="nav__btn">
                    <p class="nav__btn-text">menu</p>
                    <div class="nav__btn-box">
                        <div class="nav__btn-bars"></div>
                    </div>
                </button>
            </div>
            <div class="nav__list">
                <a href="/" class="nav__list-logo">
                    <img class="nav__list-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-horizontal-black.png"
                        alt="Okinawa Sushi Restauracja Opole">

                </a>
                <?php wp_nav_menu(
                            array(
                                'theme_location' => 'okinawa_top_menu',
                                'menu_class' => 'nav__menu',
                                'container' => 'false',
                                'menu_id' =>  'menu',
                                'add_li_class'  => 'nav__menu-item',
                                'add_a_class' => 'nav__menu-link'
                            )
                        );
                    ?>
                <div class="nav__bottom">

                    <div class="nav__bottom-texts">
                        <p class="nav__bottom-text">#socialMedia</p>
                    </div>
                    <div class="nav__socials">
                        <a href="https://www.facebook.com/okinawa.opole" class="nav__social">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://www.instagram.com/sushi_okinawa_opole/" class="nav__social">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://www.google.com/maps/place/Okinawa+Sushi+Restauracja+Opole/@50.6734327,17.9563459,21z/data=!4m6!3m5!1s0x47105320e72299a9:0xc5404027ecb4d1a6!8m2!3d50.6734936!4d17.9564534!16s%2Fg%2F11q386wb24?entry=tts" class="nav__social">
                            <i class='bx bxl-google'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>