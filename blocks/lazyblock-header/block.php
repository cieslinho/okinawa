<header class="header section-decoration">
<?php if ( isset( $attributes['left-decoration']['url'] ) ) : ?>
    <img src="<?php echo esc_url( $attributes['left-decoration']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['left-decoration']['alt'] ); ?>" class="section-img section-img-left">
    <?php endif; ?>
    <?php if ( isset( $attributes['right-decoration']['url'] ) ) : ?>
    <img src="<?php echo esc_url( $attributes['right-decoration']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['right-decoration']['alt'] ); ?> "class="section-img section-img-right">
    <?php endif; ?>
    <div class="container">
        <div class="header__box">
            <div class="header__left">
                <div class="header__info">
                    <div class="header__texts">
                        <div class="header__titles">
                            <h1 class="header__title"><?php echo $attributes['title']; ?></h1>
                            <h2 class="header__subtitle"><?php echo $attributes['subtitle']; ?></h2>
                        </div>
                        <div class="header__descriptions">
                        <?php foreach( $attributes['texts'] as $texts ): ?>
                        <p class="header__description"><?php echo $texts['text']; ?></p>
                                    <?php endforeach; ?>
                        <a href="<?php echo $attributes['link']; ?>" class="header__description header__link"><?php echo $attributes['link-text']; ?></a>
                    </div>
                    </div>
                    
                    
                 
                </div>
            </div>
            
      </div>
    </div>
</header>