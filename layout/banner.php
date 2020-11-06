<div class="site-banner">
    <div class="site-w banner-wrapper">
        <?php include 'layout/category-list-menu.php'; ?>
        <div class="list-banner">
            <div class="banner-slide">
                <?php for ($i=1; $i < 6; $i++) { ?>
                    <a class="banner-item" href="#">
                        <img src="/images/banner/<?= $i?>.png" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
