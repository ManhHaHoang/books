<?php include 'layout/head.php' ?>
<title>Nhà sách Nam Trung Yên</title>
<link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/home.css?v=<?=$ver?>">
</head>

<body>
    <?php include 'layout/header.php' ?>
    <?php include 'layout/banner.php' ?>
    <?php include 'common/events.php' ?>
    <?php include 'common/home-event.php' ?>
    <?php include 'common/home-collection.php' ?>
    <main id="js-home" class="content">
        <div class="site-w">
            <?php include 'common/home-sidebar.php' ?>
            <div class="home-content">
                <?php include 'common/home-content.php' ?>
            </div>
        </div>
    </main>
    <div class="site-w">
        <?php include 'common/partner.php' ?>
    </div>
    <?php include 'layout/footer.php' ?>
    <script src="/assets/js/slide.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.home-collection-slide').slick({
            dots: !1,
            slidesToShow: 6,
            autoplay: !1,
            autoplaySpeed: 5000
        });

        $('.site-banner').slick({
            dots: !1,
            slidesToShow: 1,
            autoplay: !1,
            autoplaySpeed: 5000,
            asNavFor: '.site-nav'
        });

        $('.site-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: true,
            asNavFor: '.site-banner',
            focusOnSelect: true,
            arrows: !1
        });

        $('.event-banner').slick({
            dots: 1,
            slidesToShow: 3,
            autoplay: !3,
            autoplaySpeed: 5000,
        });
    });

    </script>
</body>

</html>
