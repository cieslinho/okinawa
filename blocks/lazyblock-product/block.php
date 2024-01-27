<section class="product">
    <div class="container">
        <div class="product__boxes">
            <div class="product__left">
                <div class="product__swiper">
                    <div class="swiper-wrapper product__swiper-wrapper">
                    <?php foreach( $attributes['gallery'] as $gallery ): ?>
                        <div class="swiper-slide product__box">
                        <?php if ( isset( $gallery['image']['url'] ) ) : ?>
                            <img class="product__img" src="<?php echo esc_url( $gallery['image']['url'] ); ?>" alt="<?php echo esc_attr( $gallery['image']['alt'] ); ?>">
                        <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next product__next"></div>
                    <div class="swiper-button-prev product__prev"></div>
                </div>
                <div thumbsSlider="" class="product__swiper-thumbs">
                    <div class="swiper-wrapper">
                    <?php foreach( $attributes['gallery'] as $gallery ): ?>
                        <div class="swiper-slide product__box-thumb">
                        <?php if ( isset( $gallery['image']['url'] ) ) : ?>
                            <img class="product__img-thumb" src="<?php echo esc_url( $gallery['image']['url'] ); ?>" alt="<?php echo esc_attr( $gallery['image']['alt'] ); ?>">
                            <?php endif; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="product__right">
                <div class="product__info">
                    <h2 class="product__title"><?php echo $attributes['product-name']; ?></h2>
                    <h4 class="product__subtitle"><?php echo $attributes['product-subtitle']; ?></h4>
                    <p class="product__description">
                        <?php echo $attributes['description']; ?>
                    </p>
                </div>
                <div class="product__details">
                    <span class="product__span">Cena:</span>
                    <p class="product__prices">
                    <?php echo $attributes['price']; ?> zł
                    </p>
                </div>
                <div class="product__tabs">
                    <button id="ingridients" class="product__tab">Składniki</button>
                    <a href="<?php echo $attributes['allergens']; ?>" class="product__tab">Alergeny</a>
                </div>
                <div class="product__ingridients">
                <?php echo $attributes['ingridients']; ?>
             


                </div>
                <div class="product__options">
                    <a href="tel:+48516997590" class="product__btn">Zamów telefonicznie</a>
                    <a href="https://www.pyszne.pl/menu/okinawa-sushi-bar-japan-restaurant/" class="product__btn">Pyszne.pl</a>
                </div>

            </div>
        </div>
    </div>
</section>