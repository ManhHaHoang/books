<div class="main-banner">
    <div class="site-banner">
        <?php for ($i=1; $i < 6; $i++) { ?>
            <a class="banner-item" href="#">
                <img src="/images/banner/<?= $i?>.jpg" alt="">
            </a>
        <?php } ?>
    </div>
    <div class="site-nav">
        <?php for ($e=1; $e < 6; $e++) { ?>
            <div class="site-nav-item">
                <div class="site-nav-content">
                    Lorem ipsum <b><?= $e ?></b> dolor sit amet
                </div>
            </div>
        <?php } ?>
    </div>
</div>
