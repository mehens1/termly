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
                        <h2>Sign Up</h2>
                    </div>
                
                    <form action="#" method="post" class="php-email-form">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="firstName" placeholder="First Name" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="middleName" placeholder="Middle Name (Optional)"/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="lastName" placeholder="Last Name" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="tel" class="form-control" name="phoneNumber" placeholder="Phone Number" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="emailAddress" placeholder="Email Address" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="organization" placeholder="Organization (Optional)" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required/>
                        </div>
                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required/>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-default">Sign Up Now</button>
                        </div>

                        <hr>

                        <div class="text-center">Already a have an account? <a href="/"><button type="button" class="btn btn-danger">Login <i class="fa-solid fa-user"></i></button></a></div>
                    </form>
                </div>
            </div>

      </div>
    </div>
</section>
<!-- End Hero Section -->
