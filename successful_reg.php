<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="/assets/css/loading.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>Đăng nhập </title>
    <link rel = "icon" href = "./assets/img/logo.png" type = "image/x-icon">
</head>
<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    
    <div class="app">
    <div class="header__wrap">
        <div class="header">
            <div class="grid wide">
                <div class="headerContent grid--row">
                    <div class="headerContent__left wow flash delay-2s">
                        <a href="index.html" class="logo__link"><img src="./assets/img/logo-web.png" alt="" class="logo"></a>
                    </div>
                    <div class="headerContent__center">
                        <div class="headerContent__bottom">
                            <div class="headerSearch">
                                <form action="" class="formSearch">
                                    <input type="text" class="search--control" placeholder="I am looking for...">
                                    <button type="submit" class="btnSearch">
                                        <span class="btnSearch-text">Search</span>
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="headerContent__Right">
                        <div class="headerInfo">
                            <div class="headerIcon headerWishlist"><a href="favorite.html" class="icon iconWishlist" title="My Wishlist"><i class="iconHeader fas fa-heart"></i></a></div>
                            <div class="headerIcon headerLogin"><a href="#" class="icon btnLogin--active" title="Login"><i class="iconHeader fas fa-sign-out-alt"></i></a></div>
                            <div class="headerIcon headerRegister"><a href="register.html" class="icon iconRegister" title="Register"><i class="iconHeader fas fa-user-plus"></i></a></div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        <div class="header__nav">
            <div class="grid">
                <ul class="navbar__list">
                    <li class="navbar__item">
                        <a href="trinhtham.html">
                            <div class="menuURL">
                                <i class="fas fa-rocket"></i><span>Trinh Thám</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="ngontinh.html">
                            <div class="menuURL">
                                <i class="fas fa-grin-hearts"></i><span>Ngôn Tình</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="lichsu.html">
                            <div class="menuURL">
                                <i class="fas fa-book"></i><span>Lịch Sử</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="vanhoc.html">
                            <div class="menuURL">
                                <i class="fas fa-book-open"></i><span>Văn Học</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="thieunhi.html">
                            <div class="menuURL">
                                <i class="fas fa-child"></i><span>Thiếu Nhi</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="haihuoc.html">
                            <div class="menuURL">
                                <i class="far fa-grin-beam"></i><span>Hài Hước</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="form">
        <div class="grid wide">
            <div class="row">
                <div class="container" id="container">
                    <div class="form-container sign-in-container">
                    <form class="login-register" method="POST" id="form-1" action="login.php">
                        <h1>Đăng Nhập</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span class="form__login--note">Hoặc sử dụng tài khoản của bạn</span>
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : '';?>">
                            <input id="username" name="username" type="text" placeholder="Nhập Username" class="form-control">
                            <span class="form-message"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                            <span class="form-message"><?php echo $password_err; ?></span>
                        </div>
                        <a class="form__forgetPass" href="#">Quên Mật Khẩu?</a>
                        <div class="form-group <?php echo (!empty($login_error)) ? 'has-error' : ''; ?>">
                            <button class="form-submit" value="Login">Đăng Nhập</button>
				            <span class="help-block"><?php echo $login_error; ?></span>
                        </div>
                    </form>
                    </div>
                    <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right">
                        <h1>Đăng ký thành công!!!!</h1>
                        <p class="form__note">Mời bạn đăng nhập</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <footer>
        <div class="footer-top">
            <div class="grid wide">
                <div class="row">
                    <div class="c-4">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>LIÊN HỆ</h6>
                            </div>
                            <div class="footer-addres">
                                <p>Địa Chỉ: 17A-Cộng Hòa-Tân Bình-Tp Hồ Chí Minh</p>
                                <p>SĐT: <a href="">0987654321</a></p>
                                <p>Fax: <a href="">(012) 800 888 789</a></p>
                                <p>Email: <a href="">hvktmm@actvn.edu.vn</a></p>
                            </div>
                            <ul class="social-icons">
                                <li><a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="" title="Rss"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-2">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>THÔNG TIN</h6>
                            </div>
                            <ul class="footer-list">
                                <li><a href="index.html">Trang Chủ</a></li>
                                    <li><a href="trinhtham.html">Trinh Thám</a></li>
                                    <li><a href="ngontinh.html">Ngôn Tình </a></li>
                                    <li><a href="lichsu.html">Lịch Sử</a></li>
                                    <li><a href="vanhoc.html">Văn Học</a></li>
                                    <li><a href="thieunhi.html">Thiếu Nhi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-2">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>THỂ LOẠI</h6>
                            </div>
                            <ul class="footer-list">
                                <li><a href="">Truyện Tranh</a></li>
                                <li><a href="">Truyện Teen</a></li>
                                <li><a href="">Truyện Mới </a></li>
                                <li><a href="">Phương Tây</a></li>
                                <li><a href="">Việt Nam</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-4">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>TẢI ỨNG DỤNG</h6>
                                <p>Ứng Dụng Truyện Tranh nay đã có trên ứng dụng Google Play & App Store</p>
                            </div>
                            <ul class="footer-list">
                                <li class="gg-store__link"><a href="https://play.google.com/store/apps;"><img src="/assets/img/android.png" alt=""></a></li>
                                <li class="app-store__link"><a href="https://www.apple.com/app-store/"><img src="/assets/img/ios.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="grid wide">
                <div class="row">
                    <div class="c-12">
                        <div class="copy-text">
                            <p>Copyright © <a href="">HVKTMM</a> 2021. All Right Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	 <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/login_register.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/carousel.js"></script>

    <a class="on__top" href="#top"><i class="icon__ontop fa fa-angle-up"></i></a>
    </div>
</body>
</html>
