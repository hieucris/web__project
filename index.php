<?php
// Include config file
require_once "login_config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Truyện Tranh online</title>
    <link rel = "icon" href = "./assets/img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/loading.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">   
</head>
<body>

    <!-- start loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- end loader -->

    <div class="app wow fadeIn">
        <!-- start header -->
        <div class="header__wrap">
            <div class="header">
                <div class="grid wide">
                    <div class="headerContent grid--row">
                        <div class="headerContent__left wow flash delay-2s">
                            <a href="#" class="logo__link"><img src="./assets/img/logo-web.png" alt="" class="logo"></a>
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
                                        <div class="search__filter">
                                            <ul class="list__storyBook--filter">
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/22/moi-quan-he-khong-hoan-hao.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Long Thần Bát Chủ</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Ngôn Tình</p>
                                                            <p class="storyBook--filter-chapter">135 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/196/chi-gai-nuoi-nam-sinh-trung-hoc.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Hiệp Giấy A4</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Cười</p>
                                                            <p class="storyBook--filter-chapter">35 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Ngôi Nhà Hoa Hồng</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Văn Học</p>
                                                            <p class="storyBook--filter-chapter">100 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Cuộc Đời Thị Nở</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Văn Học</p>
                                                            <p class="storyBook--filter-chapter">165 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/42/nhat-duoc-hoa-khoi-ve-lam-vo.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Trọn bộ truyện Doraemon</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Thiếu Nhi</p>
                                                            <p class="storyBook--filter-chapter">235 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <img src="http://st.imageinstant.net/data/comics/164/ma-thu-kiem-thanh-di-gioi-tung-hoanh.jpg" alt="" class="storyBook--filter-img">
                                                        <div class="storyBook--filter-right">
                                                            <div class="storyBook--filter-name">Ngịch Thiên Kiếm Thần</div>
                                                            <p class="storyBook--filter-content">Thể Loại : Truyện Trinh Thám</p>
                                                            <p class="storyBook--filter-chapter">195 chapter</p>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="headerContent__Right">
                            <div class="headerInfo">
                                <div class="headerIcon headerWishlist"><a href="favorite.html" class="icon iconWishlist" title="My Wishlist"><i class="iconHeader fas fa-heart"></i></a></div>
								<div class="far fa-grin-beam"><span><button><?php echo "Welcome ".$_SESSION['username']."!";  ?><button></span></div>            
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
        <!-- end header -->

        <!-- start slider -->
        <div class="slider">
            <div class="gallery">
                <div class="gallery-container">
                  <img class="gallery-item" src="./assets/img/1.jpg">
                  <img class="gallery-item" src="./assets/img/2.jpg">
                  <img class="gallery-item" src="./assets/img/3.jpg">
                  <img class="gallery-item" src="./assets/img/4.jpg">
                  <img class="gallery-item" src="./assets/img/5.jpg">
                </div>
                <div class="gallery-controls"></div>
              </div>
        </div>
        <!-- end slider -->

        <!-- start storyBook__favorite -->
        <div class="storyBook__favorite storyBook">
            <div class="grid wide">
                <div class="section__title">
                    <h4>Có Thể Bạn Muốn Đọc</h4>
                    <div class="click-slider">
                      <i class="fas fa-chevron-left prev-item"></i>
                      <i class="fas fa-chevron-right next-item"></i>
                    </div>
                </div>
                <div class="story__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Nghịch Thiên Kiếm Thần</a></h4>
                            <div class="decription">
                            <span class="chapter">150 chapter</span>
                            <span class="date">3 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href="storyBook.html"><img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="favorite.html" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Bát Chủ Võ Đạo</a></h4>
                            <div class="decription">
                            <span class="chapter">100 chapter</span>
                            <span class="date">1 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/127/toan-chuc-phap-su.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hưng Vệ Đạo</a></h4>
                            <div class="decription">
                            <span class="chapter">230 chapter</span>
                            <span class="date">2 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/151/rich-player-nguoi-choi-khac-kim.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Chinh Phục Thiên Thánh</a></h4>
                            <div class="decription">
                            <span class="chapter">90 chapter</span>
                            <span class="date">10 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/237/cuc-gach-xong-vao-di-gioi.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Phượng Ngạ Từ Vương</a></h4>
                            <div class="decription">
                            <span class="chapter">300 chapter</span>
                            <span class="date">1 tuần trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/229/chien-dinh.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Dũng Sĩ</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/186/su-tro-lai-cua-phap-su-vi-dai-sau-4000-n-7868.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hiệp Giấy A4</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/183/than-hon-vo-de.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Cuộc Phiêu Lưu Bí Ẩn</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end storyBook__favorite -->

        <!-- start storyBook__suggestion -->
        <div class="storyBook__suggestion storyBook">
            <div class="grid wide">
                <div class="section__title">
                    <h4>Gợi Ý Hôm Nay</h4>
                    <div class="click-slider">
                      <i class="fas fa-chevron-left prev-item__sugges prev-item"></i>
                      <i class="fas fa-chevron-right next-item__sugges next-item"></i>
                    </div>
                </div>
                <div class="sugges__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Nghịch Thiên Kiếm Thần</a></h4>
                            <div class="decription">
                            <span class="chapter">150 chapter</span>
                            <span class="date">3 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Bát Chủ</a></h4>
                            <div class="decription">
                            <span class="chapter">100 chapter</span>
                            <span class="date">1 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/127/toan-chuc-phap-su.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hưng Vệ Đạo</a></h4>
                            <div class="decription">
                            <span class="chapter">230 chapter</span>
                            <span class="date">2 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/151/rich-player-nguoi-choi-khac-kim.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Chinh Phục Thiên Thánh</a></h4>
                            <div class="decription">
                            <span class="chapter">90 chapter</span>
                            <span class="date">10 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/237/cuc-gach-xong-vao-di-gioi.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Phượng Ngạ Từ Vương</a></h4>
                            <div class="decription">
                            <span class="chapter">300 chapter</span>
                            <span class="date">1 tuần trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/148/tuyet-the-vo-than.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Truyện Thế Võ Tần</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/229/toi-chuyen-vang-tai-mat-the.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hoạnh Phi Thiên Hạ</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/16/ta-co-phong-rieng-thoi-tan-the.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Ta Có Phòng Riêng</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end storyBook__suggestion -->

        <!-- start storyBook__category -->
        <div class="storyBook__category storyBook">
            <div class="grid wide">
                <div class="section__title">
                    <h4>Thể Loại</h4>
                    <div class="click-slider">
                      <i class="fas fa-chevron-left prev-item__category prev-item"></i>
                      <i class="fas fa-chevron-right next-item__category next-item"></i>
                    </div>
                </div>
                <div class="category__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Ngôn Tình</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hài Hước</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/127/toan-chuc-phap-su.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Thiếu Nhi</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/151/rich-player-nguoi-choi-khac-kim.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Văn Học</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/237/cuc-gach-xong-vao-di-gioi.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Trinh Thám</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/229/chien-dinh.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Lịch Sử</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/205/drag-queen-white-queen.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Phương Tây</a></h4>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb story__thumb-category">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/53/vuong-gia-thien-ha.jpg" alt=""></a>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Việt Nam</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end storyBook__category -->

        <!-- start storyBook__top -->
        <div class="storyBook__top storyBook">
            <div class="grid wide">
                <div class="section__title">
                    <h4>Top Truyện Hay Nhất</h4>
                    <div class="click-slider">
                      <i class="fas fa-chevron-left prev-item prev-item__top"></i>
                      <i class="fas fa-chevron-right next-item next-item__top"></i>
                    </div>
                </div>
                <div class="top__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Nghịch Thiên Kiếm Thần</a></h4>
                            <div class="decription">
                            <span class="chapter">150 chapter</span>
                            <span class="date">3 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href="storyBook.html"><img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="favorite.html" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Bát Chủ</a></h4>
                            <div class="decription">
                            <span class="chapter">100 chapter</span>
                            <span class="date">1 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/127/toan-chuc-phap-su.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hưng Vệ Đạo</a></h4>
                            <div class="decription">
                            <span class="chapter">230 chapter</span>
                            <span class="date">2 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/151/rich-player-nguoi-choi-khac-kim.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Chinh Phục Thiên Thánh</a></h4>
                            <div class="decription">
                            <span class="chapter">90 chapter</span>
                            <span class="date">10 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/237/cuc-gach-xong-vao-di-gioi.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Phượng Ngạ Từ Vương</a></h4>
                            <div class="decription">
                            <span class="chapter">300 chapter</span>
                            <span class="date">1 tuần trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/229/chien-dinh.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Dũng Sĩ</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/186/su-tro-lai-cua-phap-su-vi-dai-sau-4000-n-7868.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hiệp Giấy A4</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/183/than-hon-vo-de.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Cuộc Phiêu Lưu Bí Ẩn</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end storyBook__top -->

        <!-- start storyBook__new -->
        <div class="storyBook__new storyBook">
            <div class="grid wide">
                <div class="section__title">
                    <h4>Truyện Mới Phát Hành</h4>
                    <div class="click-slider">
                      <i class="fas fa-chevron-left prev-item prev-item__new"></i>
                      <i class="fas fa-chevron-right next-item next-item__new"></i>
                    </div>
                </div>
                <div class="new__wrap">
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/213/tong-tai-tai-thuong.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Nghịch Thiên Kiếm Thần</a></h4>
                            <div class="decription">
                            <span class="chapter">150 chapter</span>
                            <span class="date">3 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href="storyBook.html"><img src="http://st.imageinstant.net/data/comics/78/toi-da-chuyen-sinh-thanh-slime.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="favorite.html" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Bát Chủ</a></h4>
                            <div class="decription">
                            <span class="chapter">100 chapter</span>
                            <span class="date">1 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/127/toan-chuc-phap-su.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hưng Vệ Đạo</a></h4>
                            <div class="decription">
                            <span class="chapter">230 chapter</span>
                            <span class="date">2 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/151/rich-player-nguoi-choi-khac-kim.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Chinh Phục Thiên Thánh</a></h4>
                            <div class="decription">
                            <span class="chapter">90 chapter</span>
                            <span class="date">10 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/237/cuc-gach-xong-vao-di-gioi.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Phượng Ngạ Từ Vương</a></h4>
                            <div class="decription">
                            <span class="chapter">300 chapter</span>
                            <span class="date">1 tuần trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/229/chien-dinh.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Long Thần Dũng Sĩ</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/186/su-tro-lai-cua-phap-su-vi-dai-sau-4000-n-7868.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Hiệp Giấy A4</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="http://st.imageinstant.net/data/comics/183/than-hon-vo-de.jpg" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.html">Cuộc Phiêu Lưu Bí Ẩn</a></h4>
                            <div class="decription">
                            <span class="chapter">200 chapter</span>
                            <span class="date">6 ngày trước</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end storyBook__new -->

        <!-- start footer -->
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
                                    <li><a href="https://www.facebook.com/" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://twitter.com/?lang=vi" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/" title="Youtube"><i class="fab fa-youtube"></i></a></li>
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
                                    <li><a href="#">Trang Chủ</a></li>
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
                                <ul class="footer-list footer--links">
                                    <li class="gg-store__link"><a href="https://play.google.com/store/apps;"><img src="./assets/img/android.png" alt=""></a></li>
                                    <li class="app-store__link"><a href="https://www.apple.com/app-store/"><img src="./assets/img/ios.png" alt=""></a></li>
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
        <!-- end footer -->
        
        <a class="on__top" href="#top"><i class="icon__ontop fa fa-angle-up"></i></a>
    </div>


    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/carousel.js"></script>      
</body>
</html>
