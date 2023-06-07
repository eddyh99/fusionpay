<div class="login wrapper bg-secondary-fusion">
    <div class="row bg-white m-5">
        <div class="col-6 col-xxl-5 d-none d-xl-block bg-contact-wrap position-relative">
            <div class="bg-contact">
                <div class="h-100 w-100 text-black">
                    <div class="pt-4 h-100 d-flex flex-column justify-content-between align-items-start">
                        <div>
                            <a href="" class="ps-4 mb-5 pb-5 w-25">
                                <img class="img-fluid w-50" src="<?= base_url()?>assets/img/logo.png" alt="logo">                
                            </a>
                            <div class="w-100 ps-4 pt-5">
                                <h1 class="title-side-login w-100 fw-normal f-poppins ps-4">
                                    Start your <br>
                                    <span class="ps-5 ms-4 title-side-login-small">
                                        jurney with us
                                    </span>
                                </h1>
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
        <div class="col-12 col-xl-6 col-xxl-7 my-5 pt-3 px-5">
            <div class="img-fluid">
                <form>
                    <h1 class="fw-semibold f-poppins">Sign Up</h1>
                    <h5 class="fw-semibold f-poppins">Create a new account? 
                        <a class="text-secondary-fusion" href="<?= base_url()?>">Login</a> 
                    </h5>
                    <div class="mt-5 w-100 mx-auto f-poppins d-flex flex-column justify-content-center align-items-start">
                        <label for="email" >EMAIL ADDRESS</label>
                        <input id="email" class="input-login mt-3 img-fluid text-start" type="text"  required>
                    </div>
                    <div class="mt-4 f-poppins w-100 mx-auto f-poppins d-flex flex-column justify-content-center align-items-start">
                        <label class="label-email" for="password">PASSWORD </label>
                        <input id="password" class="input-login mt-3 img-fluid text-start" name="password" type="password" required> <br>
                    </div>
                    <div class="mt-4 f-poppins w-100 mx-auto f-poppins d-flex flex-column justify-content-center align-items-start">
                        <label class="label-email" for="password2">CONFIRM PASSWORD </label>
                        <input id="password2" class="input-login mt-3 img-fluid text-start" name="password2" type="password" required> <br>
                    </div>
                    <div class="mt-4 f-poppins w-100 mx-auto f-poppins d-flex flex-column justify-content-center align-items-start">
                        <label class="label-email" for="pin">CREATE TRANSACTION PIN</label>
                        <input id="pin" class="input-login mt-3 img-fluid text-start" name="pin" type="text" required> <br>
                    </div>
                    <div class="mt-4 f-poppins w-100 mx-auto f-poppins d-flex flex-column justify-content-center align-items-start">
                        <label class="label-email" for="referral">REFERRAL CODE</label>
                        <input id="referral" class="input-login mt-3 img-fluid text-start" name="referral" type="text" required> <br>
                    </div>
                    <div class="my-5 f-poppins d-flex justify-content-center align-items-center">
                        <button class="btn btn-login f-poppins d-block mx-auto mx-lg-1">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
