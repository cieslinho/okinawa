<section class="section menu">
    <div class="container">
        <div class="menu__boxes">
            <div class="menu__tabs">
                <button id="zestawy" class="menu__tab active">Zestawy</button>
                <button id="futomaki" class="menu__tab">Futomaki</button>
                <button id="hosomaki" class="menu__tab">Hosomaki</button>
                <button id="uramaki" class="menu__tab">Uramaki</button>
                <button id="nigiri" class="menu__tab">Nigiri</button>
                <button id="fusion" class="menu__tab">Fusion</button>
                <button id="dania" class="menu__tab">Dania</button>
                <button id="zupy" class="menu__tab">Zupy</button>
                <button id="tempura" class="menu__tab">Tempura Roll (5 kawałków)</button>
                <button id="desery" class="menu__tab">Desery</button>
                <button id="przystawki" class="menu__tab">Przystawki</button>
                <button id="dodatki" class="menu__tab">Dodatki</button>
            </div>
            <div class="menu__content">
            <?php foreach( $attributes['menu-top'] as $menu ): ?>

                <h2 id="<?php echo $menu['id']; ?>" class="menu__title "><?php echo $menu['title']; ?></h2>
                <p id="<?php echo $menu['id']; ?>" class="menu__description "><?php echo $menu['description']; ?></p>
            
                <?php endforeach; ?>
                <div class="menu__items">
                <?php foreach( $attributes['product'] as $product ): ?>
                    <a href="<?php echo $product['link']; ?>" id="<?php echo $product['id']; ?>" class="menu__item ">
                        <div class="menu__item-content">
                            <div class="menu__item-top">
                                <img src="<?php echo esc_url( $product['img']['url'] ); ?>" alt="<?php echo esc_attr( $product['img']['alt'] ); ?>" class="menu__item-img">
                                <h4 class="menu__item-name"><?php echo $product['name']; ?></h4>
                                <p class="menu__item-description"><?php echo $product['description']; ?></p>
                            </div>
                            <div class="menu__item-middle">
                                <p class="menu__item-ingridients">
                                <?php echo $product['ingridients']; ?>
                                </p>
                            </div>
                            <div class="menu__item-bottom">
                                <p class="menu__item-price"><?php echo $product['price']; ?></p>
                            </div>

                        </div>

                    </a>
                    <?php endforeach; ?>

                </div>
                <div class="menu__accessories" id="dodatki">
                    <?php echo $attributes['accessories']; ?>
                </div>
            </div>
        </div>
    </div>
</section>