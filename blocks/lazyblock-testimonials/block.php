<section class="testimonials section-decoration">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/okinawa-sushi-opole-decoration-castle-2.webp"
        alt="" class="section-img section-img-right">
    <div class="container">
        <div class="section-texts">
            <h2 class="section-title">opinie</h2>
            <h3 class="section-subtitle">お客様の意見</h3>
        </div>
        <div class="swiper testimonials__swiper">
            <div class="swiper-wrapper testimonials__swiper-wrapper">
            <?php foreach( $attributes['slide'] as $slide ): ?>

                <div class="testimonials__box  swiper-slide">
                    <div class="testimonials__content">
                        <i class='bx bxs-quote-right testimonials__icon'></i>
                        <img src="<?php echo esc_url( $slide['avatar']['url'] ); ?>" alt="<?php echo esc_attr( $slide['avatar']['alt'] ); ?>" class="testimonials__img">
                        <div class="testimonials__texts">
                            <p class="testimonials__text"><?php echo $slide['text']; ?></p>
                      
                        </div>
                        <p class="testimonials__author"><?php echo $slide['author']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>


            </div>
            <div class="testimonials__total">
                <p class="current-slide testimonials__total-current"></p>
                <span class="testimonials__total-span">/</span>
                <p class="total-slides testimonials__total-all"></p>
 

            </div>

        </div>

    </div>
</section>