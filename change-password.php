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
            <div class="col-lg-3 col-12">
              <!--
              *** CUSTOMER MENU ***
              _________________________________________________________
              -->
               <div class="card sidebar-menu">
                <div class="card-header customer_heading">
                  <h4 class="card-title">Customer Section</h4>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    
                          <a href="profile.php" class="nav-link"><i class="fa fa-user"></i> My Account</a>
                      
                      <a href="change-password.php" class="nav-link active"><i class="fa fa-lock"></i> Change Password</a>
                      
                       <a href="https://pharmaxy.org/orders" class="nav-link"><i class="fa fa-list"></i> My Orders
                       
                    </a>
                      
                      
                      <a href="wishlist.php" class="nav-link"><i class="fa fa-heart"></i> My Wishlist</a>
                      
                   
                   
                      <a href="https://pharmaxy.org/logout" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
                      
                  </ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
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
                                    <label for="fname">First name</label>
                                    <input type="text" id="fname" name="fname">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                              
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                    <label for="fname">Last name</label>
                                    <input type="text" id="fname" name="fname">
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="single_form">
                                    <label for="address">Address 1</label>
                                        <input type="text" id="address1" name="address1">
                                        <textarea rows="1" cols="50" placeholder="Enter Your Adderss..."></textarea>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                </div>                                
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input type="text" placeholder="Phone Number">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_form">
                                        <input type="text" placeholder="City">
                                        <i class="fa fa-key" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_form">
                                        <input type="text" placeholder="State">
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