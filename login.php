<?php include 'header.php'; ?> 

 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="img/categories/image.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <section class="sign_in_area pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center aligns-items-center">
            <div class="col-lg-4">
                    <div class="forgot_image mt-5" style="background-image: url(img/banner/signin.png);background-repeat: no-repeat;"></div>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-9">
                    <div class="sign_in_form">
                        <div class="sign_title">
                            <h5 class="title">Sign In Now</h5>
                        </div>
                        <form action="#">
                            <div class="sign_form_wrapper">
                                <div class="single_form">
                                    <input class="form-input" type="email" placeholder="Username">
                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                </div>
                                <div class="single_form">
                                    <input class="form-input" type="password" placeholder="Password">
                                    <i class="fa fa-key" aria-hidden="true"></i>
                                </div>
                                <div class="single_form d-sm-flex justify-content-between">
                                    <div class="sign_checkbox">
                                        <input type="checkbox" id="checkbox">
                                        <span class="pl-1">Keep me logged in</span>
                                    </div>
                                    <div class="sign_forgot">
                                        <a href="forgot-password.php">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="single_form">
                                    <button class="main-btn w-100">Sign In</button>
                                </div>
                            </div>
                            <div class="pt-2">Don’t have an account?<a href="signup.php"> Sign Up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?> 
    