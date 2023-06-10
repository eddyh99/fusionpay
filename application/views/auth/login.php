<div class="login wrapper bg-secondary-fusion">
    <div class="row bg-white col-11 col-xxl-9 mx-auto">
        <div class="d-none col-lg-3 d-xl-block bg-contact-wrap">
            <div class="bg-contact">
                <div class="text-black h-100">
                    <div class="pt-4 d-flex flex-column h-100 justify-content-between align-items-start">
                        <div>
                            <a href="" class="ps-4 mb-5 w-25">
                                <img class="img-fluid w-50" src="<?= base_url()?>assets/img/logo.png" alt="logo">                
                            </a>
                            <div class="w-100 ps-2 pt-4">
                                <h4 class="title-side-login w-100 fw-normal f-poppins ps-4">
                                    Start your<br>
                                    <span class="ps-5 ms-3 title-side-login-small">
                                        jurney with us
                                    </span>
                                </h4>
                            </div>
                        </div>
                        <div class="px-4 pb-5">
                            <div id="image-carousel" class="splide" aria-label="Beautiful Images">
                                <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <img src="<?= base_url()?>assets/img/banner.webp" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="<?= base_url()?>assets/img/banner.webp" alt="">
                                            </li>
                                            <li class="splide__slide">
                                                <img src="<?= base_url()?>assets/img/banner.webp" alt="">
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-7 right-side">
            <div class="img-fluid">
                <form method="POST" action="<?= base_url()?>auth/auth_login">
                    <span>
                        <img class="d-block d-xl-none img-fluid w-50 pt-4" src="<?= base_url()?>assets/img/logo.png" alt="logo">   
                    </span>
                    <h1 class="fw-semibold f-poppins">Login</h1>
                    <h6 class="fw-semibold f-poppins">Create a new account? 
                        <a class="text-secondary-fusion" href="<?= base_url()?>auth/registration">Sign Up</a> 
                    </h6>
                    <div class="mt-5 w-100 w-xxl-75 mx-auto f-poppins d-flex flex-column justify-content-center align-items-center">
                        <label for="email" >EMAIL ADDRESS</label>
                        <input name="email" id="email" class="input-login mt-3 img-fluid" type="text"  required>
                    </div>
                    <div class="mt-5 f-poppins w-100 w-xxl-75 mx-auto f-poppins d-flex flex-column justify-content-center align-items-center">
                        <label class="label-email" for="password">PASSWORD </label>
                        <input name="password" id="password" class="input-login mt-3 img-fluid" type="password" required> <br>
                    </div>
                    <!-- <div class="mt-5 f-poppins w-100 w-xxl-75 mx-auto f-poppins d-flex flex-column justify-content-center align-items-center">
                        <label class="label-email" for="password">PASSWORD </label>
                        <input id="password" class="input-login mt-3 img-fluid" name="password" type="password" required> <br>
                    </div>
                    <div class="mt-5 f-poppins w-100 w-xxl-75 mx-auto f-poppins d-flex flex-column justify-content-center align-items-center">
                        <label class="label-email" for="password">PASSWORD </label>
                        <input id="password" class="input-login mt-3 img-fluid" name="password" type="password" required> <br>
                    </div> -->
                    <div class=" f-poppins w-100 w-xxl-75 mx-auto f-poppins d-flex flex-column justify-content-center align-items-end">
                        <span class="forgot-login" href="">
                            <a href="<?= base_url()?>auth/forgot_password">Forgot Password</a>
                        </span>
                    </div>
                    <div class="mt-5 f-poppins d-flex justify-content-center align-items-center">
                        <button class="btn btn-login f-poppins d-block mx-auto mx-lg-1">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

