<?php 
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/book.css">
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
    <title>Truyện Văn Học</title>
    <link rel = "icon" href = "/assets/img/logo.png" type = "image/x-icon">
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
                            <a href="index.php" class="logo__link"><img src="./assets/img/logo-web.png" alt="" class="logo"></a>
                        </div>
                        <div class="headerContent__center">
                            <div class="headerContent__bottom">
                                <div class="headerSearch">
                                    <form action="search.php" class="formSearch" method="POST">
                                        <input type="text" class="search--control" placeholder="I am looking for..." id="comic" name=comic>
                                        <button type="submit" class="btnSearch" name="submit">
                                            <span class="btnSearch-text">Search</span>
                                            <i class="fas fa-search"></i>
                                        </button>
                                        <div class="search__filter" id="comic-list"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="headerContent__Right">
                            <div class="headerInfo">
                                <div class="headerIcon headerWishlist"><a href="favorite.html" class="icon iconWishlist" title="My Wishlist"><i class="iconHeader fas fa-heart"></i></a></div>
                                <div class="headerIcon headerLogin"><a href="login.html" class="icon iconUser" title="Login"><i class="iconHeader fas fa-sign-out-alt"></i></a></div>
                                <div class="headerIcon headerRegister"><a href="register.html" class="icon iconRegister" title="Register"><i class="iconHeader fas fa-user-plus"></i></a></div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__nav">
                <div class="grid">
                    <ul class="navbar__list">
                        <?php
                            $sql = "SELECT * FROM categories";
                            $result = $link ->query($sql);
                            while($row = $result->fetch_array()) {
                        ?>
                        <li class="navbar__item">
                            <a href="the-loai.php?id=<?php echo $row['id']; ?>">
                                <div class="menuURL">
                                    <i class=""></i><span><?php echo $row["name"] ?></span>
                                </div>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="breadcrumb-area">
            <div class="grid wide">
              <div class="row">
                <div class="c-12">
                  <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.php">Home /</a></li>
                    <li class="breadcrumb-item active"><a href="">Truyện Nhật Bản</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>

        <div class="main-content__wrap">
            <div class="grid wide">
                <div class="row">
                    <div class="c-12">
                        <ul class="storyBook__nation">
                            <li><a class="active" data-class="all" href="">Tất Cả</a></li>
                            <li><a href="truyen-viet-nam.php">Việt Nam</a></li>
                            <li><a href="truyen-nhat-ban.php">Nhật Bản </a></li>
                            <li><a href="truyen-trung-quoc.php">Trung Quốc</a></li>
                            <li><a href="truyen-han-quoc.php">Hàn Quốc</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="c-12">
                        <div class="story-nation__wrap">
                            <?php                       
                                $sql_tongtruyen = "SELECT *,stories.updated as ngay, COUNT(story_id) as tong FROM `chapters`,`stories` where country='Nhật Bản' and chapters.story_id = stories.id GROUP BY chapters.story_id";
                                $result = $link ->query($sql_tongtruyen);
                                while($row = $result->fetch_array()) {
                            ?>
                            <div class="slider__story all vietnam">
                                <div class="story__thumb">
                            <a href=""><img src="<?php echo $row["img"] ?>" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.php?id=<?php echo $row["story_id"]?>"><?php echo $row["name"] ?></a></h4>
                            <div class="decription">
                            <span class="chapter"><?php echo $row["tong"]; ?> Chap</span>
                            <span class="date"><?php getDateTime($row['ngay']);?></span>
                            </div>
                        </div>
                            </div>
                            <?php } ?> 
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
                                    <li><a href="index.php">Trang Chủ</a></li>
                                    <li><a href="truyen-viet-nam.php">Việt Nam</a></li>
                                    <li><a href="truyen-nhat-ban.php">Nhật Bản </a></li>
                                    <li><a href="truyen-trung-quoc.php">Trung Quốc</a></li>
                                    <li><a href="truyen-han-quoc.php">Hàn Quốc</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="c-2">
                            <div class="widget-footer">
                                <div class="title-widget">
                                    <h6>THỂ LOẠI</h6>
                                </div>
                                <ul class="footer-list">
                                <?php 
                                    $id =$_GET['id'];
                                    $sql ="SELECT * FROM categories";
                                    $result = $link ->query($sql);
                                    while($row = $result->fetch_array()) {  
                                ?>
                                <ul class="footer-list">
                                    <li><a href="the-loai.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                                </ul>
                                <?php } ?>
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

        <a class="on__top" href="#top"><i class="icon__ontop fa fa-angle-up"></i></a>
    </div>
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/carousel.js"></script>  

</body>
</html>
<?php 
    function getDateTime($date){
        $now = date('Y-m-d h:i:s');
        $hieu = abs(strtotime($now) - strtotime($date));
        $nam = floor($hieu / (365*60*60*24));  
        $thang = floor(($hieu - $nam * 365*60*60*24) / (30*60*60*24));  
        $ngay = floor(($hieu - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));  
        $gio = floor(($hieu - $nam * 365*60*60*24 - $thang*(30*60*60*24) -$ngay*(60*60*24))/ (60*60)); 
        $phut = floor(($hieu - $nam * 365*60*60*24 - $thang*(30*60*60*24) -$ngay*(60*60*24)-$gio*(60*60))/ 60);
        if($nam!=0){
            echo $nam. " năm trước";           
        }
        else{
            if($thang !=0){
                echo $thang. " tháng trước";            
            }
            else{
                if($ngay !=0){
                    echo $ngay. " ngày trước";                 
                }
                else {
                    if ($gio !=0){
                        echo $gio. " giờ trước";                
                    }
                    else{
                        echo $phut. " phút trước";
                    }
                }
            }
        } 
    }
?>