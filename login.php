<?php
// Include config file
require_once "config.php";
$_SESSION['username']= 'Guest';
session_start();

// Define variables and initialize with empty values
$username = $password ="";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    }
	 if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } else{
		$password = mysqli_real_escape_string($conn,$_POST['password']);
    }
	
	    if(empty($username_err) && empty($password_err)){
		
        $sql = "SELECT id from users where username='".$username."' and password= '$password' ";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
            echo $row['username'];
        $count = $row['id'];

        if($count > 0){
            $_SESSION['username'] = $username;
           header('Location: index.php');
        }else{
            header('Location: index.php');
       
		}     
        
    }
    // Close connection
    mysqli_close($conn);
}
?>
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
    <link rel="stylesheet" href="./assets/css/loading.css">
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&display=swap&subset=vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <title>????ng nh???p </title>
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
                </div>
            </div>
        </div>

        <div class="header__nav">
            <div class="grid">
                <ul class="navbar__list">
                    <li class="navbar__item">
                        <a href="trinhtham.html">
                            <div class="menuURL">
                                <i class="fas fa-rocket"></i><span>Trinh Th??m</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="ngontinh.html">
                            <div class="menuURL">
                                <i class="fas fa-grin-hearts"></i><span>Ng??n T??nh</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="lichsu.html">
                            <div class="menuURL">
                                <i class="fas fa-book"></i><span>L???ch S???</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="vanhoc.html">
                            <div class="menuURL">
                                <i class="fas fa-book-open"></i><span>V??n H???c</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="thieunhi.html">
                            <div class="menuURL">
                                <i class="fas fa-child"></i><span>Thi???u Nhi</span>
                            </div>
                        </a>
                    </li>
                    <li class="navbar__item">
                        <a href="haihuoc.html">
                            <div class="menuURL">
                                <i class="far fa-grin-beam"></i><span>H??i H?????c</span>
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
                    <div class="form-container sign-up-container">
                    </div>
                    <div class="form-container sign-in-container">
                    <form class="login-register" method="POST" action="login.php">
                        <h1>????ng Nh???p</h1>
                        <div class="social-container">
                            <a href="#" class="social"><i class="fab fa-facebook"></i></a>
                            <a href="#" class="social"><i class="fab fa-google-plus"></i></a>
                            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <span class="form__login--note">Ho???c s??? d???ng t??i kho???n c???a b???n</span>
                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : '';?>">
                            <input id="username" name="username" type="text" placeholder="Nh???p Username" class="form-control">
                            <span class="form-message"><?php echo $username_err; ?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                            <input id="password" name="password" type="password" placeholder="Nh???p m???t kh???u" class="form-control">
                            <span class="form-message"><?php echo $password_err; ?></span>
                        </div>
                        <a class="form__forgetPass" href="#">Qu??n M???t Kh???u?</a>
                        <div class="form-group <?php echo (!empty($login_error)) ? 'has-error' : ''; ?>">
                            <button class="form-submit" value="Login">????ng Nh???p</button>
				            <span class="help-block"><?php echo $login_error; ?></span>
                        </div>
                    </form>
                    </div>
                    <div class="overlay-container">
                    <div class="overlay">
                        <div class="overlay-panel overlay-right">
                        <h1>Xin Ch??o</h1>
                        <p class="form__note">N???u b???n ch??a c?? t??i kho???n vui l??ng ????ng k?? t???i ????y</p>
                        <a href="register.php"><button class="ghost form-submit" id="signUp">????ng K??</button></a>

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
                                <h6>LI??N H???</h6>
                            </div>
                            <div class="footer-addres">
                                <p>?????a Ch???: 17A-C???ng H??a-T??n B??nh-Tp H??? Ch?? Minh</p>
                                <p>S??T: <a href="">0987654321</a></p>
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
                                <h6>TH??NG TIN</h6>
                            </div>
                            <ul class="footer-list">
                                <li><a href="index.html">Trang Ch???</a></li>
                                    <li><a href="trinhtham.html">Trinh Th??m</a></li>
                                    <li><a href="ngontinh.html">Ng??n T??nh </a></li>
                                    <li><a href="lichsu.html">L???ch S???</a></li>
                                    <li><a href="vanhoc.html">V??n H???c</a></li>
                                    <li><a href="thieunhi.html">Thi???u Nhi</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-2">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>TH??? LO???I</h6>
                            </div>
                            <ul class="footer-list">
                                <li><a href="">Truy???n Tranh</a></li>
                                <li><a href="">Truy???n Teen</a></li>
                                <li><a href="">Truy???n M???i </a></li>
                                <li><a href="">Ph????ng T??y</a></li>
                                <li><a href="">Vi???t Nam</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="c-4">
                        <div class="widget-footer">
                            <div class="title-widget">
                                <h6>T???I ???NG D???NG</h6>
                                <p>???ng D???ng Truy???n Tranh nay ???? c?? tr??n ???ng d???ng Google Play & App Store</p>
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
                            <p>Copyright ?? <a href="">HVKTMM</a> 2021. All Right Reserved.</p>
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
    <script src="./js/slick.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/login_register.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/carousel.js"></script>

    <a class="on__top" href="#top"><i class="icon__ontop fa fa-angle-up"></i></a>
    </div>
</body>
</html>
