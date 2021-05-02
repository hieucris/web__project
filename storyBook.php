<?php
    include("connect.php");
    $id =$_GET['id'];
    include('check.php');
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/trinhtham.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/storybook.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/carousel.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>Truyện Ngôn Tình</title>
</head>
<body>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v10.0" nonce="ABZ5MBrl"></script>
    <div class="app">
        <div class="header__wrap">
            <div class="header">
                <div class="grid wide">
                    <div class="headerContent grid--row">
                        <div class="headerContent__left wow flash">
                            <a href="/index.html" class="logo__link"><img src="/assets/img/logo-nettruyen.png" alt="" class="logo"></a>
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
                                <div class="headerIcon headerWishlist"><a href="./favorite.html" class="icon iconWishlist" title="My Wishlist"><i class="iconHeader fas fa-heart"></i></a></div>
                                <div class="headerIcon headerLogin"><a href="./login.html" class="icon iconUser" title="Login"><i class="iconHeader fas fa-sign-out-alt"></i></a></div>
                                <div class="headerIcon headerRegister"><a href="./register.html" class="icon iconRegister" title="Register"><i class="iconHeader fas fa-user-plus"></i></a></div>
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
                    <?php 
                        $id =$_GET['id'];
                        $sql ="SELECT * FROM stories where id=$id";
                        $result = $link ->query($sql);
                        while($row = $result->fetch_array()) {   
                    ?>
                    <li class="breadcrumb-item active"><a href=""><?php echo $row["name"]; ?></a></li>
                <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
        </div>

        <div class="main-content__wrap main-center">
            <div class="grid wide">
                <?php 
                    $id =$_GET['id'];
                    $sql ="SELECT *,categories.name as theloai,chapters.name as chuong,stories.description as des,stories.name as ten  FROM stories,chapters,categories where story_id=stories.id AND story_id=$id AND category_id= categories.id";
                    $result = $link ->query($sql);
                    $row = $result->fetch_array()
                    ?>
                <div class="item-detail">
                    <h1 class="detail-title"><?php echo $row['ten']; ?></h1>
                    <div class="time-update"> Cập nhật lần cuối: <?php echo $row['updated']; ?></div>
                </div>
                <div class="detail-info">
                    <div class="row">
                        <div class="c-4">
                            <img src="<?php echo $row['img']; ?>" alt="" class="detail__img">
                        </div>
                        <div class="c-8">
                            <ul class="list__info">
                                <li class="author">
                                    <p class="name"><i class="icon-list__info fas fa-user"></i>Tác Giả :</p>
                                    <p><?php echo $row['author']; ?></p>
                                </li>
                                <li class="status">
                                    <p class="name"><i class="icon-list__info fas fa-wifi"></i> Tình Trạng :</p>
                                    <p>Đang Phát Hành</p>
                                </li>
                                <li class="kind">
                                    <p class="name"><i class="icon-list__info fas fa-tags"></i>Thể Loại :</p>
                                    <p><?php echo $row['theloai'] ?></p>
                                </li>
                                <li class="view">
                                    <p class="name"><i class="icon-list__info fas fa-eye"></i>Lượt Xem :</p>
                                    <p> <?php echo $row['view']; ?></p>
                                </li>
                            </ul>
                            <div class="book__favorite">
                                <a href="./favorite.html" class="btn__follow"><i class="icon__love fas fa-heart"></i> Theo Dõi</a>
                                <p>Có 150.000 người đã theo dõi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="story__content">
                    <div class="row">
                        <div class="c-12">
                            <div class="content__title">Nội Dung</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="c-12">
                            <div class="story__summary">
                                <?php echo $row['des']; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="chapter">
                    <div class="row">
                        <div class="c-12">
                            <div class="chapter__title">Danh Sách Chương</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="c-12">
                            <ul class="list__chapter">
                                <li>
                                    <p>Số Chương</p>
                                    <p>Cập Nhật</p>
                                    <p>Lượt Xem</p>
                                </li>
                                <?php 
                    $id =$_GET['id'];
                    $sql ="SELECT ordering,story_id,chapters.id as id,view,chapters.created,categories.name as theloai,chapters.name as chuong  FROM stories,chapters,categories where story_id=stories.id AND story_id=$id AND category_id= categories.id";
                    $result = $link ->query($sql);
                    while($row = $result->fetch_array()) {
                    ?>

                                <li>
                                    <p><a href="chap.php?story_id=<?php echo$row['story_id']?>&id=<?php echo $row['ordering'] ?>" ><?php echo $row['chuong'];?></a></p>
                                    <p><?php echo $row['created']; ?></p>
                                    <p><?php echo $row['view']; ?></p>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <div class="story__commment">
            <div class="grid wide">
                <div class="row">
                    <div class="c-12">
                        <div class="fb-comments" data-href="http://www.nettruyen.com/truyen-tranh/toan-chuc-phap-su-17023" data-width="" data-numposts="5">
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
    </div>
    
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/isotope.pkgd.min.js"></script>
    <script src="/js/sparta.js"></script>
    <script src="/js/carousel.js"></script>  

</body>
</html>


 