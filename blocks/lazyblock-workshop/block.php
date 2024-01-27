<section class="workshop">
    <div class="container">
        <div class="workshop__banner">
            <?php if ( isset( $attributes['img']['url'] ) ) : ?>
            <img src="<?php echo esc_url( $attributes['img']['url'] ); ?>"
                alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>" class="workshop__img">
            <?php endif; ?>

            <div class="workshop__content">
                <div class="workshop__texts">
                    <h3 class="workshop__title">
                        <?php echo $attributes['title']; ?>
                    </h3>
                    <?php foreach( $attributes['texts'] as $texts ): ?>
                    <p class="workshop__text">
                        <?php echo $texts['text']; ?>
                    </p>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
        <div class="workshop__boxes">
            <?php foreach( $attributes['workshop'] as $workshop ): ?>
            <div class="workshop__box">
                <img src="<?php echo esc_url( $workshop['img']['url'] ); ?>"
                    alt="<?php echo esc_attr( $workshop['img']['alt'] ); ?>" class="workshop__hero">
                <div class="workshop__infos">
                    <div class="workshop__titles">
                        <h4 class="workshop__name">Nazwa szkolenia: <span class="workshop__span">
                                <?php echo $workshop['workshop-title']; ?>
                            </span>
                        </h4>
                    </div>
                    <div class="workshop__event">

                        <h4 class="workshop__speaker">Prowadzący: <span class="workshop__span">
                                <?php echo $workshop['workshop-author']; ?>
                            </span></h4>
                        <img src="<?php echo esc_url( $workshop['avatar']['url'] ); ?>" alt="<?php echo esc_attr( $workshop['avatar']['alt'] ); ?>" class="workshop__avatar">
                    </div>

                    <div class="workshop__descriptions">
                        <p class="workshop__description">
                            <?php echo $workshop['description']; ?>
                        </p>
                    </div>
                </div>


                <div class="workshop__btns">
                    <a href="mailto:kontakt@okinawa.pl" class="workshop__btn">zapytaj o szczegóły</a>
                    <a href="tel:+48516997590" class="workshop__btn">zadzwoń</a>
                </div>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>