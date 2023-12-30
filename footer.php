<?php
/**
 * @package Okinawa
 */
?>
                    </main>
<footer class="footer">
    <div class="container">
        <div class="footer__boxes">
            <div class="footer__box">
                <a href="/" class="footer__box-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-vertical-black.png" alt=""
                        class="footer__logo">
                </a>

            </div>
            <div class="footer__box">
                <p class="footer__box-title">adres</p>
                <div class="footer__box-texts">
                    <p class="footer__box-text">
                        Okinawa Sushi Bar & Japan Restaurant w Opolu
                    </p>
                    <a href="https://maps.app.goo.gl/Aoa88Qrpd5uFVhc9A" class="footer__box-text footer__box-link">
                        Pawilon SKAUT - osiedle Armi Krajowej (ZWM), ul. Sosnkowskiego 6/8,
                        45-273 Opole
                    </a>

                </div>

            </div>
            <div class="footer__box">
                <p class="footer__box-title">kontakt</p>
                <div class="footer__box-texts">
                    <a href="tel:+48516997590" class="footer__box-link">tel. +48 516 997 590</a>
                    <a href="mailto:kontakt@okinawa.pl" class="footer__box-link">kontakt@okinawa.pl</a>
                </div>


            </div>
            <div class="footer__box">
                <p class="footer__box-title">godziny otwarcia</p>
                <div class="footer__box-texts">
                    <p class="footer__box-text">PN - ND 14:00 do 22:00 </p>
                </div>

            </div>
            <div class="footer__box">
                <p class="footer__box-title">na skróty</p>
                <div class="footer__box-texts">
                    <?php wp_nav_menu(
                            array(
                                'theme_location' => 'okinawa_footer_menu',
                                'menu_class' => 'footer__menu',
                                'container' => 'false',
                                'menu_id' =>  'menu',
                                'add_a_class'  => 'footer__menu-link'
                            )
                        );
                    ?>
                </div>

            </div>
        </div>
        <div class="footer__bottom">
            <p class="footer__bottom-text">Copyright © Okinawa Sushi Bar & Japan Restaurant Opole All rights reserved
            </p>

            <p class="footer__bottom-text">Realizacja: <a href="mailto:contact@cieslaszymon.pl"
                    class="footer__bottom-link">Cieśla Szymon</a></p>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>

</html>