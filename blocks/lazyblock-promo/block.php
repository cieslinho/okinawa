
<div id="promo" class="promo">
    <button class="promo__close">
        <i class="bx bx-x"></i>
    </button>
    <div class="promo__texts">
    <?php foreach( $attributes['texts'] as $texts ): ?>
        <p class="promo__text">    <?php echo $texts['text']; ?></p>
        <?php endforeach; ?>
    </div>
    <a href="<?php echo esc_url( $attributes['link'] ); ?>" class="promo__link"><?php echo $attributes['link-text']; ?></a>
</div>
<div class="promo__overlay"></div>