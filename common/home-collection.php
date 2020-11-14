<div class="home-collection">
    <div class="site-w">
        <div class="home-collection-slide">
            <?php for ($i=1; $i < 8; $i++) { ?>
                <div class="home-collection-item">
                    <div class="home-collection-info">
                        <a class="home-collection-image" href="#">
                            <img src="/images/products/<?= $i?>.png" alt="">
                        </a>
                        <a class="home-collection-title" href="#">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </a>
                        <div class="home-collection-vendor">
                            Joy Ellis
                        </div>
                        <div class="home-collection-price">
                            <span class="new-price">140,000₫</span>
                            <span class="old-price"><s>150,000₫</s></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
