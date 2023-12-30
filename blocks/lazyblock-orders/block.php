<section class="orders">
    <div class="container">
        <div class="orders__box">
        <?php if ( isset( $attributes['img']['url'] ) ) : ?>
            <img src="<?php echo esc_url( $attributes['img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>" class="orders__box-img">
        <?php endif; ?>
            <div class="orders__content">
                <div class="orders__texts">
                    <h3 class="orders__title"><?php echo $attributes['title']; ?></h3>
                    <?php foreach( $attributes['texts'] as $texts ): ?>
                    <p class="orders__text"><?php echo $texts['text']; ?></p>
                    <?php endforeach; ?>
                </div>
                <div class="orders__btns">
                <?php foreach( $attributes['btns'] as $btns ): ?>
                    <a href="<?php echo $btns['link']; ?>" class="orders__btn"><?php echo $btns['text']; ?></a>
                <?php endforeach; ?>
                </div>
           
            </div>
        </div>
    </div>
</section>