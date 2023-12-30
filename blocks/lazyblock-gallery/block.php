<section class="gallery">
    <div class="container">
        <div class="section-texts">
            <h2 class="section-title">galeria</h2>
            <h3 class="section-subtitle">ギャラリー</h3>
        </div>
        <div class="gallery__swiper swiper">
            <div class="gallery__swiper-wrapper swiper-wrapper">
            <?php foreach( $attributes['slide'] as $slide ): ?>

                <div class="gallery__slide swiper-slide">
                    <img src="<?php echo esc_url( $slide['img']['url'] ); ?>" alt="<?php echo esc_attr( $slide['img']['alt'] ); ?>" class="gallery__slide-img">
                </div>
              

                <?php endforeach; ?>





            </div>
            <div class="gallery__pagination swiper-pagination"></div>
            <div class="gallery__next swiper-button-next"></div>
            <div class="gallery__prev swiper-button-prev"></div>
        </div>
    </div>

</section>