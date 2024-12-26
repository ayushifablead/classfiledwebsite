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
        <div class="container-fiuld p-5 spad">
            <div class="row">
            <div class="col-lg-3 col-12">
             
               <div class="card sidebar-menu">
                <div class="card-header customer_heading">
                  <h4 class="card-title">Customer Section</h4>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    
                          <a href="profile.php" class="nav-link active"><i class="fa fa-user"></i> My profile</a>
                      
                      <a href="change-password.php" class="nav-link"><i class="fa fa-lock"></i> Change Password</a>
                      
                      
                      
                      
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
                    <h2 class="mb-2" style="    color: white;">Personal Profile</h2>
                    </div>
              <div class="card-body">
                
               
             
                <form id="account_form_data">
                     <input type="hidden" name="id" id="id" value="109">
                       
                     <input type="hidden" id="base_url" value="https://pharmaxy.org/my_account">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input id="firstname" name="firstname" type="text" class="form-control" maxlength="15" value="fablead">
                         <span id="firstname_err"></span>
                         </div>
                    
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input id="lastname" name="lastname" type="text" class="form-control" maxlength="15" value="test">
                
                       <span id="lastname_err"></span>
                             </div>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                     <div class="col-md-6 mb-2 mt-2 pb-2">
                        <label for="defaultFormControlInput" class="form-label">Address 1</label>
                        <textarea type="text" class="form-control" id="address1" name="address1" maxlength="110" aria-describedby="defaultFormControlHelp">1234 Elm Street, Apt 5B, Springfield, IL 62704, India</textarea>
                        <span id="cus_address1_err"></span>
                    </div>
                    <div class="col-md-6 mb-2 mt-2 pb-2">
                        <label for="defaultFormControlInput" class="form-label">Address 2</label>
                        <textarea type="text" class="form-control" id="address2" name="address2" maxlength="110" aria-describedby="defaultFormControlHelp">NA</textarea>
                        <span id="cus_address2_err"></span>
                    </div>
                  </div>
                  <!-- /.row-->
                  <div class="row">
                      <div class="col-md-6 col-lg-3">
                         <div class="form-group">
                          <label for="inputcountry">Country</label>
                 <input type="text" id="country" name="country" maxlength="40" class="form-control" value="India">

                        <span id="country_err"></span>
                        </div>
                    </div>
                    
                      <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                          <label for="inputState">State</label>
                          <input type="text" id="state" name="state" maxlength="40" class="form-control" value="Gujarat">

                        <span id="state_err"></span>
                            </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" maxlength="40" class="form-control" value="Surat">
                      <span id="city_err"></span>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="form-group">
                        <label for="zip">ZIP</label>
                        <input id="zip" name="zip" type="number" class="form-control" maxlength="10" value="394510">
                      
                      <span id="zip_err"></span>
                      </div>
                    </div>
                  
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone">Telephone</label>
                        <input id="phone" name="phone" type="number" class="form-control" maxlength="12" value="8768768687">
                     
                      <span id="phone_err"></span>
                       </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" class="form-control" value="fablead.sneh@gmail.com">
                   
                      <span id="email_err"></span>
                         </div>
                    </div>
                    <div class="col-md-12 text-center">
                          
                      <button type="button" id="account_form" class="btn w-100 rounded mt-3 view_button_dasboard_page" style="padding:12px;"><i class="fa fa-save"></i> Save changes</button>
                     
                    </div>
                      <span id="msg2"></span>
                  </div>
                </form>
              </div>
             </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>