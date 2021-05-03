<?php 
    include("connect.php");
    require_once "login_config.php";
    $user= $_SESSION['username'] ;
    setcookie("name", $user, time() + 600, "/","");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đọc Truyện Tranh online</title>
    <link rel = "icon" href = "./assets/img/logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style1.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/slick.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="/assets/css/loading.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

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
                                    <form action="backend/search.php" class="formSearch" method="POST">
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
                                <?php if(!isset($_SESSION['username'])){ ?>
                                <div class="headerIcon headerWishlist"><a href="" class="icon iconWishlist" title="My Wishlist"><i class="iconHeader fas fa-heart"></i></a></div>

                                
                                <div class="headerIcon headerLogin"><a href="./login.php" class="icon iconUser" title="Login"><i class="iconHeader fas fa-sign-out-alt"></i></a></div>  
                                <div class="headerIcon headerRegister"><a href="./register.php" class="icon iconRegister" title="Register"><i class="iconHeader fas fa-user-plus"></i></a></div>
                            <?php } else { ?>
                                    <div class="form__welcome"><span class="welcome"><?php echo "Welcome ".$_SESSION['username']."!";  ?></span></div>
                                    <div class="headerIcon headerLogin"><a href="./logout.php" class="icon iconUser" title="Logout"><i class="iconHeader fas fa-sign-out-alt"></i></a></div>
                                    <div class="headerIcon headerRegister" id=mes  onclick="show()"><a href="" class="icon iconRegister" title="Edit Password"><i class="iconHeader fas fa-user-plus"></i></a></div>
                                </div>  
                            <?php } ?>
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
                    <?php                       
                        $sql_tongtruyen = "SELECT *,stories.updated as ngay, COUNT(story_id) as tong FROM `chapters`,`stories` where chapters.story_id = stories.id GROUP BY chapters.story_id";
                        $result = $link ->query($sql_tongtruyen);
                        while($row = $result->fetch_array()) { 
                    ?>
                    <div class="slider__story wow fadeInUp">
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
                            <span class="date"><?php getDateTime($row['ngay']); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- end storyBook__favorite -->

        <!-- start storyBook__suggestion -->
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
                    <?php                       
                        $sql_tongtruyen = "SELECT *,stories.updated as ngay,COUNT(story_id) as tong,stories.name as ten  FROM `stories`,`chapters`where chapters.story_id = stories.id GROUP BY chapters.story_id order by view desc";
                        $result = $link ->query($sql_tongtruyen);
                        while($row = $result->fetch_array()) {
                    ?>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="<?php echo $row['img']; ?>" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.php?id=<?php echo $row["story_id"]?>"><?php echo $row['ten']; ?></a></h4>
                            <div class="decription">
                            <span class="chapter"><?php echo $row['tong']; ?> Chap</span>
                            <span class="date"><?php getDateTime($row['ngay']); ?></span>
                            </div>
                        </div>
                    </div>   
                    <?php } ?>         
                </div>
            </div>
        </div>

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
                    <?php                      
                        $sql_tongtruyen = "SELECT *,stories.updated as ngay, COUNT(story_id) as tong FROM `chapters`,`stories` where chapters.story_id = stories.id GROUP BY chapters.story_id order by chapters.created";
                        $result = $link ->query($sql_tongtruyen);
                        $timestamp = time();
                        while($row = $result->fetch_array()) {
                        ?>
                    <div class="slider__story wow fadeInUp">
                        <div class="story__thumb">
                            <a href=""><img src="<?php echo $row["img"] ?>" alt=""></a>
                            <div class="action-links">
                                <a href="" class="heart-btn"><i class="fas fa-heart"></i></a>
                            </div>
                            <div class="sub__background"></div>
                        </div>
                        <div class="story__caption">
                            <h4 class="story__name"><a href="storyBook.php?id=<?php echo $row["story_id"]?>"><?php echo $row["name"] ?> </a></h4>
                            <div class="decription">
                            <span class="chapter"><?php echo $row["tong"] ?> Chap</span>
                            <span class="date"><?php getDateTime($row['ngay']);?></span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
                                    <li class="gg-store__link"><a href=""><img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/brand/img-googleplay.jpg" alt=""></a></li>
                                    <li class="app-store__link"><a href=""><img src="https://demo.hasthemes.com/ruiz-preview/ruiz/assets/images/brand/img-appstore.jpg" alt=""></a></li>
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
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/carousel.js"></script>      
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
<script type="text/javascript">
    function show(){
        alert("Tính năng đang phát triển. Nếu muốn có thể liên hệ quản trị viên");
    }

</script>