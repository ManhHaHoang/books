<section class="subscribe-wrapper">
    <div class="subscribe-box site-w">
        <div class="subscribe-heading">
            Đăng ký nhận bản tin khuyến mãi từ NTY Book
        </div>
        <form class="subscribe-from" action="/" method="post">
            <input type="text" class="form-control" name="e" placeholder="Vui lòng nhập email của bạn">
            <button type="submit" class="button" name="button">
                Đăng ký
            </button>
        </form>
    </div>
</section>
<footer>
    <section class="top-footer">
        <div class="site-w flex-box">
            <div class="box-logo-ft position-relative">
                <a class="site-logo" href="/">
                    <img src="/images/logo.png" alt="T-Simple">
                </a>
            </div>
            <div class="box-footer">
                <h3 class="title-ft">Hỗ trợ khách hàng</h3>
                <ul class="content-ft">
                    <li>
                        <a href="/">Các câu hỏi thường gặp</a>
                    </li>
                    <li>
                        <a href="/">Gửi yêu cầu hỗ trợ</a>
                    </li>
                    <li>
                        <a href="/">Hướng dẫn đặt hàng</a>
                    </li>
                    <li>
                        <a href="/">Phương thức vận chuyển</a>
                    </li>
                    <li>
                        <a href="/">Chính sách đổi trả</a>
                    </li>
                    <li>
                        <a href="/">Hướng dẫn mua trả góp</a>
                    </li>
                </ul>
            </div>
            <div class="box-footer">
                <h3 class="title-ft">Về Suplo Book</h3>
                <ul class="content-ft">
                    <li>
                        <a href="/">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="/">Tuyển Dụng</a>
                    </li>
                    <li>
                        <a href="/">Chính sách bảo mật</a>
                    </li>
                    <li>
                        <a href="/">Chính sách giải quyết khiếu nại</a>
                    </li>
                    <li>
                        <a href="/">Điều khoản sử dụng</a>
                    </li>
                    <li>
                        <a href="/">Hội Sách Online</a>
                    </li>
                </ul>
            </div>
            <div class="box-footer">
                <div class="title-ft">
                    Khách hàng/Đối tác
                </div>
                <ul class="content-ft">
                    <li>
                        <a target="_blank" href="https://hocmai.vn/public/contact.php">Liên hệ</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://hocmai.vn/ho-tro/gop-y.html">Góp ý về dịch vụ</a>
                    </li>
                    <li>
                        <a target="_blank" href="https://hocmai.vn/ho-tro/">Giải đáp thắc mắc</a>
                    </li>
                </ul>
                <h3 class="title-ft">
                    Kết nối mạng xã hội
                </h3>
                <a href="https://www.facebook.com/SuploTeam/" target="_blank" class="fb-icon"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://twitter.com/" target="_blank" class="tw-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://plus.google.com/" target="_blank" class="gg-icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/" target="_blank" class="yt-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/" target="_blank" class="ins-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
</footer>
<div id="account-login" class="login-popup-wrapper">
    <input class="login-input" type="radio" id="user-signin" name="loginForm" checked>
    <input class="login-input" type="radio" id="user-signup" name="loginForm">
    <input class="login-input" type="radio" id="user-forget" name="loginForm">
    <div class="login-content">
        <div class="user-label">
            <label for="user-signin">Đăng nhập</label>
            <label for="user-signup">Đăng ký</label>
            <label for="user-forget">Lấy lại mật khẩu</label>
        </div>
        <form class="form-visible" id="Login" role="form" method="post" action="">
            <div class="social-login">
                <p class="tip">Đăng nhập bằng</p>
                <a href="https://facebook.com/manhha.design" class="button primary"><span>Tài khoản </span>Facebook</a>
                <a href="https://youtube.com/c/manhhahoang" class="button secondary"><span>Tài khoản </span> Google</a>
            </div>

            <div class="user-heading">
                hoặc đăng nhập bằng tài khoản iCare.com
            </div>

            <div class="login-box">
                <div class="form-group">
                    <label class="control-label email">Email <span class="require-field">*</span></label>
                    <input name="email" type="email" class="form-control" autocomplete="off" placeholder="Email">
                    <div class="error-message error-email"></div>
                </div>

                <div class="form-group">
                    <label class="control-label password">Mật khẩu <span class="require-field">*</span></label>
                    <input type="password" name="password" class="form-control" autocomplete="off"
                    placeholder="Mật khẩu">
                    <div class="error-message error-password"></div>
                </div>
            </div>
            <div class="login-box user-footer">
                <button type="submit" class="button primary">
                    Đăng nhập
                </button>
                <label for="user-forget"><span>Quên mật khẩu</span></label>
            </div>
        </form>
        <form class="form-visible" id="Registration" role="form" method="post" action="" novalidate>
            <div class="error-message error-register"></div>
            <div class="login-box">
                <div class="form-group">
                    <label class="control-label">Họ và tên <span class="require-field">*</span></label>
                    <div class="fullname">

                        <input type="text" name="fullname" class="form-control" placeholder="Họ tên" required="">
                    </div>
                    <div class="error-message error-fullname"></div>
                </div>
                <div class="form-group">
                    <label class="control-label">Giới tính</label>
                    <select class="form-control" name="gender">
                        <option value="male">Nam</option>
                        <option value="female">Nữ</option>
                    </select>
                    <div class="error-message error-fullname"></div>
                </div>
            </div>
            <div class="login-box">
                <div class="form-group">
                    <label class="control-label">Mật khẩu <span class="require-field">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required="">
                    <div class="error-message error-password"></div>
                </div>
                <div class="form-group">
                    <label class="control-label">Nhập lại mật khẩu <span class="require-field">*</span></label>
                    <input type="password" name="password_confirm" class="form-control" placeholder="Nhập lại mật khẩu"
                    required="">
                    <div class="error-message error-confirm-password"></div>
                </div>
            </div>
            <div class="login-box">
                <div class="form-group">
                    <label class="control-label">Điện thoại <span class="require-field">*</span></label>
                    <input type="text" name="phone" class="form-control" placeholder="Điện thoại di động" required="">
                    <div class="error-message error-phone"></div>
                </div>
                <div class="form-group">
                    <label class="control-label">Email <span class="require-field">*</span></label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                    <div class="error-message error-email"></div>
                </div>
            </div>
            <div class="login-box user-footer">
                <button type="submit" class="button primary">
                    Đăng ký
                </button>
                <label for="user-signin" class="signin-link">
                    <span>Đăng nhập</span>
                </label>
            </div>
        </form>
        <form class="form-visible" id="ForgotPassword" role="form" method="post" action="">
            <div class="form-group">
                <label class="control-label email" style="display: block"><b>Nhập số điện thoại của bạn hoặc email khôi
                    phục</b> <span class="require-field">*</span></label>
                    <input name="email" type="email" class="form-control" autocomplete="off">
                    <div class="error-message error-email"></div>
                </div>
                <div class="login-box user-footer" style="padding-left: 0">
                    <button type="submit" class="button success">
                        Gửi Yêu Cầu
                    </button>
                    <label for="user-signin" style="margin-left: 10px;"><span>Đăng nhập</span></label>
                </div>
            </form>
            <span class="close-tab close-popup">
                &times;
            </span>
        </div>
        <div class="login-popup-entry" onclick="closeLogin()"></div>
    </div>
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/script.js"></script>
