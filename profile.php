<?php include 'header.php'; ?>
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="img/banner/shop-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Profile</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                           <!-- <a href="./shop-grid.php">Shop</a> -->
                            <span>profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="profile-settings_page pt-70 pb-120">
        <div class="container spad">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar_profile mt-50">
                        <div class="profile_user">
                            <div class="user_author d-flex align-items-center">
                                <div class="author">
                                    <img src="img/team/150-2.jpg" alt="" class="author-img">
                                </div>
                                <div class="user_content media-body">
                                    <h6 class="author_name">User</h6>
                                    <small>Administrator</small>
                                </div>
                            </div>
                            <div class="user_list">
                                <ul>
                                    <li><a href="dashboard.html"><i class="fal fa-tachometer-alt-average"></i> Dashboard</a></li>
                                    <li><a class="active" href="profile-settings.html"><i class="fal fa-cog"></i> Profile Settings</a></li>
                                    <li><a href="my-ads.html"><i class="fal fa-layer-group"></i> My Ads</a></li>
                                    <li><a href="offermessages.html"><i class="fal fa-envelope"></i> Offers/Messages</a></li>
                                    <li><a href="payments.html"><i class="fal fa-wallet"></i> Payments</a></li>
                                    <li><a href="favourite-ads.html"><i class="fal fa-heart"></i> My Favourites</a></li>
                                    <li><a href="privacy-setting.html"><i class="fal fa-star"></i> Privacy Settings</a></li>
                                    <li><a href="#"><i class="fal fa-sign-out"></i> Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="post_form sign_in_form mt-50">
                        <div class="post_title">
                            <h5 class="title">Profile Settings</h5>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                               
                                    <div class="single_form">
                                        <input type="text" placeholder="First Name">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                              
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" placeholder="Last Name">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="email" placeholder="E-mail Address">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" placeholder="Phone Number">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="password" placeholder="New Password">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="password" placeholder="Confirm Password">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="checkbox" name="checkbox" id="checkbox">
                                        <!-- <label for="checkbox"></label> -->
                                        <span>Subscribe me to Newsletter</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <button class="main-btn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>