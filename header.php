<!DOCTYPE php>
<php lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classified</title>
    <!-- <link rel="icon" href="img/favicon.ico"  type="image/x-icon" /> -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <!-- <a href="#"><img src="img/logo.png" alt=""></a> -->
            <h4 onclick="window.location.href='index.php'">Classified</h4>
        </div>
        <!-- <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div> -->
        <div class="humberger__menu__widget">
            <!-- <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
                
            </div> -->
            <div class="header__top__right__auth">
                <!-- <a href="login.php"><i class="fa fa-user"></i> Login</a> -->
                <div class="col-sm-6">
                <div class="hero__categories">
                        <div class="hero__categories__all">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                            <span>Location</span>
                        </div>
                        <ul style="display:none;">
                            <li><input type="text" class="form-control" placeholder="Search"></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Ahmedabad</a></li>
                            <li><a href="#">Bangalore</a></li>
                            <li><a href="#">Chandigarh</a></li>
                            <li><a href="#">Chennai</a></li>
                          
                        </ul>

                        
                    </div>

                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" class="hero__search__form1">
                                <div class="hero__search__categories">
                                    Categories<i class="fa fa-angle-down" aria-hidden="true"></i>

                                    <!-- <span class="arrow_carrot-down"></span> -->
                                </div>
                                <ul style="display:none;">
                            <!-- <li><input type="text" class="form-control" placeholder="Search"></li> -->
                            <li><a href="#">India</a></li>
                            <li><a href="#">Ahmedabad</a></li>
                            <li><a href="#">Bangalore</a></li>
                            <li><a href="#">Chandigarh</a></li>
                            <li><a href="#">Chennai</a></li>
                          
                        </ul>

                                <input type="text" placeholder="Search">
                                <button type="submit" class="site-btn"><i class="fa fa-search" aria-hidden="true"></i>                                </button>
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
            <li class=""><a href="./index.php">Home</a></li>
                            <!-- <li class=""><a href="./about-us.php">About Us</a></li> -->
                            <li><a href="./shop-grid.php">Ads</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="./category.php">Categories</a></li>
                          <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <!-- <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div> -->
        <div class="humberger__menu__contact">
            <!-- <ul>
                <li><i class="fa fa-envelope"></i> info@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul> -->
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <!-- <div class="header__top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> info@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="login.php"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="container-fluid header__top1">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <!-- <a href="./index.php"><img src="img/logo.png" alt=""></a> -->
                         <h4 onclick="window.location.href='index.php'">Classified</h4>
                    </div>
                </div>
                <div class="col-lg-2 mt-3  responsive-menu-header-mobail">
                <div class="hero__categories">
                        <div class="hero__categories__all">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                            <span>Location</span>
                        </div>
                        <ul style="display:none;">
                            <li><input type="text" class="form-control" placeholder="Search"></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Ahmedabad</a></li>
                            <li><a href="#">Bangalore</a></li>
                            <li><a href="#">Chandigarh</a></li>
                            <li><a href="#">Chennai</a></li>
                          
                        </ul>

                        
                    </div>
                    
                </div>
                <div class="col-lg-5 mt-3 responsive-menu-header">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#" class="hero__search__form1">
                                <div class="hero__search__categories">
                                    Categories<i class="fa fa-angle-down" aria-hidden="true"></i>

                                    <!-- <span class="arrow_carrot-down"></span> -->
                                </div>
                                <ul style="display:none;">
                          
                            <li><a href="#">India</a></li>
                            <li><a href="#">Ahmedabad</a></li>
                            <li><a href="#">Bangalore</a></li>
                            <li><a href="#">Chandigarh</a></li>
                            <li><a href="#">Chennai</a></li>
                          
                        </ul>

                                <input type="text" placeholder="Search">
                                <button type="submit" class="site-btn"><i class="fa fa-search" aria-hidden="true"></i>                                </button>
                            </form>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-3">
                    <nav class="header__menu float-lg-right">
                        <ul>
                            <li class=""><a href="./index.php">Home</a></li>
                            <!-- <li class=""><a href="./about-us.php">About Us</a></li> -->
                            <li><a href="./shop-grid.php">Ads</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="./category.php">Categories</a></li>
                          <li><a href="login.php">Login</a></li>
                             <!--  <li><a href="./faqs.php">Faqs</a></li>-->
                            <li><a href="./Profile.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li>
                                <!-- <a href="./Profile.php"><i class="fa fa-bell" aria-hidden="true"></i>

                            </a> -->
                            <div class="sinlge-bar">
                                    <a href="javascript:void(0);" class="single-icon" id="bellIcon">
                        <i class="fa fa-bell" aria-hidden="true"></i>
                                                <span class="total-count badge">
                            3                        </span>
                                            </a>

                    <div class="notification-dropdown notificationDropdown" id="notificationDropdown" style="border-radius: 15px; box-shadow: rgba(0, 0, 0, 0.5) 0px 4px 8px; background-color: white;">
                        <div class="p-2">
                            <div class="shopping-item">
                                <div class="d-flex dropdown-cart-header justify-content-between mb-1">
                                    <a href="https://pharmaxy.org/allnotification" class="notification-title p-1" style="font-size: 15px;"><i class="fa fa-bell" aria-hidden="true"></i> All Notifications</a>
                                    <span class="bg-danger notificationDropdown px-2 text-white h-100" id="closeNotificationDropdown" style="display: none;">
                                        <i class="fa fa-times" aria-hidden="true"></i> <!-- Close Icon -->
                                    </span>
                                </div>
                            </div>

                                                            <ul class="shopping-list">
                                                                            <li class="p-md-1" style="border: 1px solid; border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-1 mt-4">
                                                    <div>
                                                    <i class="fa fa-bell m-2" aria-hidden="true" style=" color: #3f3d59; font-size: 20px; "></i>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                            <a href="javascript:void(0);" class="notification-linkkk" data-order-id="MTM2">
                                                <p style="font-size: 14px;font-weight: bold;margin-bottom: -5px;" class="mt-0">Reminder</p>
                                                <span style="font-size: 12px;">sdsfsdfsdfsfs<br></span>
                                                <p style="font-size: 14px;font-weight: bold; margin-bottom: -5px;" class="mt-0">Order Number</p>
                                                <span style="font-size: 12px;">#9517-00117</span>
                                            </a>
                                            </div>
                                            </div>
                                        </li>
                                                                            <li class="p-md-1" style="border: 1px solid; border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-1 mt-4">
                                                    <div>
                                                    <i class="fa fa-bell m-2" aria-hidden="true" style=" color: #3f3d59; font-size: 20px; "></i>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                            <a href="javascript:void(0);" class="notification-linkkk" data-order-id="MTM1">
                                                <p style="font-size: 14px;font-weight: bold;margin-bottom: -5px;" class="mt-0">Reminder</p>
                                                <span style="font-size: 12px;">Testing Riminder<br></span>
                                                <p style="font-size: 14px;font-weight: bold; margin-bottom: -5px;" class="mt-0">Order Number</p>
                                                <span style="font-size: 12px;">#9517-00116</span>
                                            </a>
                                            </div>
                                            </div>
                                        </li>
                                                                            <li class="p-md-1" style="border: 1px solid; border-radius: 10px;">
                                            <div class="row">
                                                <div class="col-1 mt-4">
                                                    <div>
                                                    <i class="fa fa-bell m-2" aria-hidden="true" style=" color: #3f3d59; font-size: 20px; "></i>
                                                    </div>
                                                </div>
                                                <div class="mx-4">
                                            <a href="javascript:void(0);" class="notification-linkkk" data-order-id="MTM0">
                                                <p style="font-size: 14px;font-weight: bold;margin-bottom: -5px;" class="mt-0">Reminder</p>
                                                <span style="font-size: 12px;">Demo Reminder<br></span>
                                                <p style="font-size: 14px;font-weight: bold; margin-bottom: -5px;" class="mt-0">Order Number</p>
                                                <span style="font-size: 12px;">#9517-00115</span>
                                            </a>
                                            </div>
                                            </div>
                                        </li>
                                                                    </ul>
                                                    </div>
                    </div>
                            </div>
                            
                        </li> 
                        </ul>
                    </nav>
                </div>
       </div>
</div>
              
            
                
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
      <!-- Hero Section Begin -->
    <!-- <section class="hero hero-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Location</span>
                        </div>
                        <ul>
                            <li><input type="text" class="form-control" placeholder="Search"></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Ahmedabad</a></li>
                            <li><a href="#">Bangalore</a></li>
                            <li><a href="#">Chandigarh</a></li>
                            <li><a href="#">Chennai</a></li>
                          
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                
                                <input type="text" placeholder="Search ..">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                        <div class="header__top__right__auth">
                <a href="login.php"><i class="fa fa-user"></i>Login/Register    </a>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Hero Section End -->