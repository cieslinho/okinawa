<section class="contact">
    <div class="container">
        <div class="contact__box">
        <?php if ( isset( $attributes['img']['url'] ) ) : ?>
            <img src="<?php echo esc_url( $attributes['img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>" class="contact__img">
        <?php endif; ?>
            <div class="contact__content">
                <div class="contact__texts">
                    <h3 class="contact__title"><?php echo $attributes['title']; ?></h3>
                 
                    <?php foreach( $attributes['texts'] as $texts ): ?>
                    <p class="contact__text"><?php echo $texts['text']; ?></p>
                 
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="contact__form">
        [contact-form-7 id="66a49f2" title="Formularz Kontaktowy"]
        </div>
    </div>
</section>