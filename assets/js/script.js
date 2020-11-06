$(document).ready(function() {


    $('.header-icon').click(function() {
        $('body').toggleClass('open-menu');
    });


    if (screen.width < 960) {
        $('.course-list').click(function() {
            $('body').toggleClass('open-category');
            if ($('.open-category').is(':visible')) {
                $('body').removeClass('open-menu');
            } else if ($('.open-menu').is(':visible')) {
                $('body').removeClass('open-category');
            }
            $('.list-category-wrapper').append('<div class="list-category-dummy"></div>');
        });

        // $(document).on('click', '.list-category-dummy', function() {
        //     // $('body').toggleClass('open-category');
        // });​
        //
        // ​$(document).on('click', '.item', function() {
        //
        // });​

        $(document).on('click', '.list-category-dummy', function() {
            $('body').toggleClass('open-category');
        });

        $('.category-menu-link').click(function(e) {
            e.preventDefault;
            $(this).next().slideToggle();
        });
    }
    else {
    }

    $('.login-button').click(function() {
        $('body').toggleClass('show-login');
        $('#user-signin').attr('checked', true);
    });

    $('.register-button').click(function() {
        $('body').toggleClass('show-login');
        $('#user-signup').attr('checked', true);
    });

    $('.close-popup').click(function() {
        $('body').removeClass('show-login');
        $('#user-signin, #user-signup').attr('checked', false);
    });

    if ($('.smenu').is(':visible')) {
        $('.scroll-item').click(function() {
            var scrollValue = $(this).attr('data-scroll');
            $(this).addClass('active').siblings().removeClass('active');
            $('html, body').animate({scrollTop: $(scrollValue).offset().top - 50}, 500);
        });
    }
    if ($('.comment-box').is(':visible')) {
        $('.customer-button').click(function() {
            $(this).toggleClass('danger');
            $('.comment-form').slideToggle();
            if ($('.customer-button').hasClass('danger')) {
                $(this).text('Hủy đánh giá');
            } else {
                $(this).text('Đánh giá và nhận xét');
            }
        });
    }

    //


});
