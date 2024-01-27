<section class="about">
    <div class="container">
        <div class="about__box">
        <?php if ( isset( $attributes['img']['url'] ) ) : ?>
            <img class="about__img" src="<?php echo esc_url( $attributes['img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>">
            <?php endif; ?>


            <div class="about__content">
                <div class="about__texts">
                    <h3 class="about__title"><?php echo $attributes['title']; ?></h3>
                    <?php foreach( $attributes['texts'] as $texts ): ?>
                    <p class="about__text"><?php echo $texts['text']; ?></p>
                    <?php endforeach; ?>


                </div>
            </div>
        </div>
    </div>
</section>