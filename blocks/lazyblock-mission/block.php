<section class="mission">
    <div class="container">
        <div class="mission__boxes">
            <div class="mission__box">
                <div class="section-texts">
                    <h2 class="section-title">nasza misja</h2>
                    <h3 class="section-subtitle">我々の使命</h3>
                </div>
                <div class="mission__texts">
                <?php foreach( $attributes['texts-left'] as $texts ): ?>
                    <p class="mission__text"><?php echo $texts['text']; ?></p>
        
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="mission__box">
                <div class="section-texts">
                    <h2 class="section-title">nasza historia</h2>
                    <h3 class="section-subtitle">私たちの物語</h3>
                </div>
                <div class="mission__texts">
                    <?php foreach( $attributes['texts-right'] as $texts ): ?>
                    <p class="mission__text"><?php echo $texts['text']; ?></p>                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>