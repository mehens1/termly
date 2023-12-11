@extends('app.layout')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            
            <div class="col-lg-8 order-1 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">At termly all institutional and Individual financial goals are achieved within the targeted time.<br>Join Us</h2>
            </div>

            <div class="col-lg-4 order-2 order-lg-2 text-center text-lg-start">
                <!-- <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300"> -->
                <div class="head-signup-section">
                    <div class="section-headr">
                        <h2>Sign In</h2>
                    </div>
                
                    <form action="#" method="post" class="php-email-form">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="username" placeholder="Email or Phone Number" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-default">Login</button>
                        </div>
                        
                        
                        <div class="text-right">
                            <a href="/forgot-password">Forgot Password?</a>
                        </div>

                        <hr>

                        <div class="text-center">Dont have an account? <a href="/sign-up"><button type="button" class="btn btn-danger">Signup <i class="fa-solid fa-user"></i></button></a></div>
                    </form>
                </div>
            </div>

      </div>
    </div>
</section>
<!-- End Hero Section -->
