<section id="bestseller" class="suggested">
    <div class="container">
        <div class="section-texts">
            <h2 class="section-title">bestseller</h2>
            <h3 class="section-subtitle">ベストセラー</h3>
        </div>



        <div class="suggested__boxes suggested__swiper swiper">
            <div class="suggested__swiper-wrapper swiper-wrapper">
            <?php foreach( $attributes['sushi-slide'] as $slide ): ?>

                <div class="suggested__sushi swiper-slide">
                    <div class="suggested__sushi-top">
                        <img src="<?php echo esc_url( $slide['img']['url'] ); ?>" alt="<?php echo esc_attr( $slide['img']['alt'] ); ?>" class="suggested__sushi-img">
                    </div>
                    <div class="suggested__sushi-middle">
                        <p class="suggested__sushi-name">    <?php echo $slide['title']; ?></p>
                        <p class="suggested__sushi-ingridients">    <?php echo $slide['ingridients']; ?></p>
                    </div>
                    <div class="suggested__sushi-bottom">
                        <p class="suggested__sushi-price">
                        <?php echo $slide['price']; ?>                </p>
                        <div class="suggested__sushi-btns">
                            <a href="    <?php echo $slide['mobile']; ?>" class="suggested__sushi-btn">telefon</a>
                            <a href="    <?php echo $slide['link']; ?>"                                class="suggested__sushi-btn">pyszne.pl</a>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>


            </div>

            <div class="suggested__pagination swiper-pagination"></div>
        </div>
        <a href="/menu" class="suggested__btn">sprawdź pozostałe rolki</a>





    </div>
</section>