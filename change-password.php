<?php include 'header.php'; ?>
 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="img/banner/shop-banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Change password</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                           <!-- <a href="./shop-grid.php">Shop</a> -->
                            <span>Change password</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <section class="profile-settings_page pt-70 pb-120">
        <div class="container-fiuld p-5 spad">
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
                    
                          <a href="profile.php" class="nav-link"><i class="fa fa-user"></i> My profile</a>
                      
                      <a href="change-password.php" class="nav-link active"><i class="fa fa-lock"></i> Change Password</a>
                      
                      
                      
                      
                      <a href="wishlist.php" class="nav-link"><i class="fa fa-heart"></i> My Wishlist</a>
                      
                   
                   
                      <a href="./index.php" class="nav-link"><i class="fa fa-sign-out"></i> Logout</a>
                      
                  </ul>
                </div>
              </div>
              <!-- /.col-lg-3-->
              <!-- *** CUSTOMER MENU END ***-->
            </div>
                <div class="col-lg-9">
                <div class="card account-card">
                    <div class="card-header" style="    background: #3f3d59;">
                    <h2 class="m-0 mt-2 mb-2" style="    color: white;">Change password</h2>
                    </div>
              <div class="card-body">
              
             
               
                <form id="change_password_data">
                  <div class="row">
                    <div class="col-md-12 mb-1">
                      <div class="form-group mb-0">
                        <label for="password_old">Old Password</label>
                        <input id="current_password" name="current_password" type="password" class="form-control form-control-lg" maxlength="32">
                      </div>
                       <span id="current_password_err"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-1">
                      <div class="form-group mb-0">
                        <label for="password_1">New Password</label>
                        <input name="new_password" id="new_password" type="password" class="form-control form-control-lg" maxlength="32">
                      </div>
                      <span id="new_password_err"></span>
                    </div>
                    <div class="col-md-6 mb-1">
                      <div class="form-group mb-0">
                        <label for="password_2">Confirm Password</label>
                        <input name="confirm_password" id="confirm_password" type="password" class="form-control form-control-lg" maxlength="32">
                      </div>
                      <span id="confirm_password_err"></span>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="col-md-12 text-center px-0">
                       <span id="success_msg"></span>
                    <button type="button" id="change_password" class="btn w-100 mt-3 rounded view_button_dasboard_page" style="padding:12px;"><i class="fa fa-save"></i> Save new password</button>
                  </div>
                </form>
               
              </div>
             </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>