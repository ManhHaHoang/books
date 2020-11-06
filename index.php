<?php include 'layout/head.php'?>
<title>Nhà sách Nam Trung Yên</title>
<link rel="stylesheet" href="/assets/css/slide.css?v=<?=$ver?>">
<link rel="stylesheet" href="/assets/css/home.css?v=<?=$ver?>">
</head>

<body>
    <?php include 'layout/header.php'?>
    <?php include 'layout/banner.php'?>
    <main id="js-home" class="content background-gray">
        <section class="counters">
            <div class="site-w counters-box">
                <div class="counters-item">
                    <img src="/images/graduated.svg" alt="">
                    <div class="counter-content">
                        <div class="counter" data-target="4000">0</div>
                        <span>Thành viên</span>
                    </div>
                </div>
                <div class="counters-item">
                    <img src="/images/subscribe.svg" alt="">
                    <div class="counter-content">
                        <div class="counter" data-target="10000">0</div>
                        <span>Lượt theo dõi</span>
                    </div>
                </div>
                <div class="counters-item">
                    <img src="/images/library.svg" alt="">
                    <div class="counter-content">
                        <div class="counter" data-target="30000">0</div>
                        <span>Bài giảng</span>
                    </div>
                </div>
                <div class="counters-item">
                    <img src="/images/discourse.svg" alt="">
                    <div class="counter-content">
                        <div class="counter" data-target="500">0</div>
                        <span>Khóa học</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-category">
            <div class="site-w flex-box">
                <div class="home-category-title">
                    Trung học phổ thông
                </div>
                <div class="home-banner">
                    <a class="home-banner-link" href="#">
                        <img src="/images/banner/522x324-4.png" alt="">
                    </a>
                </div>
                <?php for ($i=1; $i < 11; $i++) { ?>
                <div class="home-category-item">
                    <div class="home-category-content">
                        <a class="home-category-image" href="#">
                            <img src="/images/class/<?= $i ?>.png" alt="">
                        </a>
                        <div class="course-info">
                            <a class="course-name" href="#">
                                Vật lí 10
                            </a>
                            <p class="course-teachers">
                                Giáo viên: <a href="#" target="_blank">Thầy Nguyễn Thành Nam</a> </p>
                            <div class="course-scorms">
                                <div class="course-fee">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 20 20"
                                            style="overflow:visible;enable-background:new 0 0 20 20;" xml:space="preserve">

                                            <path d="M10,0C4.48,0,0,4.48,0,10s4.48,10,10,10s10-4.48,10-10S15.52,0,10,0z M8,14.5v-9l6,4.5L8,14.5z" fill="#ef6c6c"></path>
                                        </svg>
                                    <span style="padding-left: 10px;">48</span> Bài giảng
                                </div>
                                <div class="course-fee">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 20 20"
                                            style="overflow:visible;enable-background:new 0 0 20 20;" xml:space="preserve">
                                            <path
                                                d="M10,0C4.48,0,0,4.48,0,10s4.48,10,10,10s10-4.48,10-10S15.52,0,10,0z M11,17H9v-2h2V17z M13.07,9.25l-0.9,0.92 C11.45,10.9,11,11.5,11,13H9v-0.5c0-1.1,0.45-2.1,1.17-2.83l1.24-1.26C11.78,8.05,12,7.55,12,7c0-1.1-0.9-2-2-2S8,5.9,8,7H6 c0-2.21,1.79-4,4-4s4,1.79,4,4C14,7.88,13.64,8.68,13.07,9.25z"
                                                fill="#28b1ff"></path>
                                        </svg>
                                    <span style="padding-left: 10px;">1000</span> Câu hỏi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </section>
        <section class="home-testimonial">
            <div class="home-category-title">
                Lắng nghe và chia sẻ
            </div>
            <div class="site-w testimonial-wrapper">
                <div class="testimonial-slider">
                    <?php for ($i=1; $i < 7; $i++) { ?>
                        <div class="testimonial-item">
                            <div class="testimonial-box">
                                <img class="testimonial-image" src="/images/testimonial/<?= $i?>.jpg" alt="">
                                <div class="testimonial-content">
                                    <div class="testimonial-row testimonial-heading">
                                        <div class="testimonial-col">
                                            <span>Tên học sinh:</span>
                                            <span>Đỗ Hồng Ngọc</span>
                                        </div>
                                        <div class="testimonial-col">
                                            <span>Tài khoản:</span>
                                            <span>ngocdo11</span>
                                        </div>
                                        <div class="testimonial-col">
                                            <span>Email</span>
                                            <span>ngocdo11@gmail.com</span>
                                        </div>
                                        <div class="testimonial-col">
                                            <span>Thành tích:</span>
                                            <span>29 điểm khối A</span>
                                        </div>
                                    </div>
                                    <div class="testimonial-row testimonial-txt">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <section class="news-events">
            <div class="home-category-title">
                Tin tức và sự kiện
            </div>
            <div class="site-w news-wrapper">
                <div class="news-slider">
                    <?php for ($i=0; $i < 8; $i++) { ?>
                        <div class="news-item">
                            <div class="news-box">
                                <a class="news-image" href="/">
                                    <img src="/images/news/1.jpg" alt="">
                                </a>
                                <div class="news-box-info">
                                    <a class="news-heading" href="#">
                                        12 ngành có tỷ lệ việc làm cao nhất ở Anh
                                    </a>
                                    <div class="news-description">
                                        Trong bảng xếp hạng, 10/12 ngành liên quan đến lĩnh vực y tế, chăm sóc sức khỏe, trong đó cao nhất là nha sĩ 97%, còn lại hầu hết trên 90%.
                                    </div>
                                    <div class="news-time">
                                        27/09/2020 đăng bởi <a href="#">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>
    </main>
    <?php include 'layout/footer.php'?>
    <script src="/assets/js/slide.js"></script>

    <script type="text/javascript">
        $('.banner-slide').slick({
            dots: 1,
            slidesToShow: 1,
            autoplay: 1,
            autoplaySpeed: 5000,
            responsive: [
                {
                    height: 150
                }
            ]


        });
        $('.testimonial-slider').slick({
            dots: 1,
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay: !1,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
        $('.news-slider').slick({
            dots: 1,
            slidesToShow: 4,
            slidesToScroll: 4,
            autoplay: !1,
            autoplaySpeed: 5000,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });

        $(document).on('click', '.item[data-url]', function() {
            var dataValue = $(this).attr('data-url');
            $(this).addClass('active').siblings().removeClass('active')
            $(dataValue + '.item').addClass('active').siblings().removeClass('active')
        });
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the slower

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;

                // Lower inc to slow and higher to slow
                const inc = target / speed;

                // console.log(inc);
                // console.log(count);

                // Check if target is reached
                if (count < target) {
                    // Add inc to count and output in counter
                    counter.innerText = count + inc;
                    // Call function every ms
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            };

            updateCount();
        });
    </script>
</body>

</html>
