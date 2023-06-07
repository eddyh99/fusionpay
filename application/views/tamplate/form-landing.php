<section id="immediate-access" class="wrapper mt-5 pt-5">
    <div class="container">
        <h1 class="text-center text-immediate f-jakarta">Immediate Access</h1>
        <p class="text-center text-immediate f-jakarta">Menage your money and your crypto from our Online banking 24 hours a day 7 days a week</p>
        <div id="bg-form-immediate" class="row">
            <div class="col-12 col-lg-6">
                <h2 class="f-jakarta p-2 fw-bold">Book Your  Free Consultation</h2>
                <div class="p-0 pt-5 p-lg-5">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url()?>assets/img/img-2.webp" alt="form img">
                </div>
                <span class="p-5 d-flex align-items-center">
                    <div>
                        <svg width="26" height="24" viewBox="0 0 26 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.95455 0.625V2.59624L0.75 6.63565V23.375H25.5682V6.63565L19.3636 2.59624V0.625H6.95455ZM9.02273 2.69318H17.2955V10.6428L13.1591 13.3249L9.02273 10.6428V2.69318ZM10.0568 4.76136V6.82955H16.2614V4.76136H10.0568ZM6.95455 5.0522V9.28551L3.6907 7.18501L6.95455 5.0522ZM19.3636 5.0522L22.6275 7.18501L19.3636 9.28551V5.0522ZM10.0568 7.86364V9.93182H16.2614V7.86364H10.0568ZM2.81818 9.09162L13.1591 15.7809L23.5 9.09162V21.3068H2.81818V9.09162Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="ms-4 text-form-info">
                        <span>EMAIL</span><br>
                        <span>info@CAIMAN</span>
                    </div>
                </span>
            </div>
            <div class="col-12 col-lg-6 mt-5">
                <form action="<?=base_url()?>link/contact_notif" method="POST ">
                    <div class="mb-4 radio-getouch">
                        <span>
                            Select at least one * 
                        </span>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <label for="bank" class="in-radio-getouch d-flex justify-content-between" >
                                <input 
                                    id="bank" 
                                    name="bank" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Bank</span>
                            </label>
                            <label for="crypto" class="in-radio-getouch d-flex justify-content-between">
                                <input 
                                    id="crypto" 
                                    name="crypto" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Crypto</span>
                            </label>
                            <label for="financial" class="in-radio-getouch d-flex justify-content-between">
                                <input 
                                    id="financial" 
                                    name="financial" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Financial</span>
                            </label>
                            <label for="branch" class="in-radio-getouch d-flex justify-content-between">
                                <input 
                                    id="branch" 
                                    name="branch" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Branch</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Name *" type="text">
                    </div>

                    <div class="mb-4">
                        <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Email *" type="text">
                    </div>

                    <div class="mb-4 ">
                        <div class="d-flex justify-content-end align-items-center mt-3 me-5">
                            <label for="whatsapp" class="in-radio-getouch d-flex justify-content-between" >
                                <input 
                                    id="whatsapp" 
                                    name="whatsapp" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Whatsapp</span>
                            </label>
                            <label for="telegram" class="in-radio-getouch d-flex justify-content-between ms-4">
                                <input 
                                    id="telegram" 
                                    name="telegram" 
                                    type="checkbox"
                                    class="d-block mx-auto d-lg-block mx-lg-0" 
                                    placeholder="Name *" 
                                >
                                <span class="ps-2">Telegram</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4 b-telp d-flex justify-content-between">
                        <span>Where would you prefer us to contact you? * </span>
                        <div class="in-telp">
                            <input name="telp" id="telephone" autocomplate="false" class="nohp-select input-nohp" type="tel" required>
                        </div>
                    </div>

                    <div class="mb-4 d-flex justify-content-between date-getouch">
                        <input class="in-getouch" type="text" name="birthdate" autocomplete="off" placeholder="Select Date *" />
                        <input class="in-getouch" type="text" name="timeavail" placeholder="Time Available *" />
                    </div>

                    <div class="mb-4">
                        <input class="in-getouch d-block mx-auto d-lg-inline mx-lg-0" placeholder="Description *" type="text">
                    </div>

                    <button class="btn-in-getouch fw-bold f-montserrat mb-5 mb-lg-0 d-block mx-auto mx-lg-0">SEND</button>
                </form>
            </div>
        </div>
    </div>
</section>