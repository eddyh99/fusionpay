<!-- START NAVBAR -->
<nav class="navbar navbar-expand-xl bg-white shadow-lg  fixed-top">
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand w-75 w-md-50 w-lg-30 w-xl-25" href="<?= base_url()?>">
            <img src="<?= base_url()?>assets/img/logo.png" class="w-80 img-fluid" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav d-flex align-items-center justify-content-end">
                <li class="nav-item dropdown">
                    <a class="nav-link <?php if($this->uri->segment(2) == 'link_bank'){echo 'aktif fw-bold';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Bank
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankaccount') ?>">Encrypted Bank Account</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankdebitcards') ?>">Debit Cards</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_bank?bank=<?= base64_encode('bankfiat') ?>">FIAT Currencies Exchange</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?php if($this->uri->segment(2) == 'link_crypto'){echo 'aktif fw-bold';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Crypto
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptononcustodial')?>">Non Custodial Wallet</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('tradeofplatform') ?>">Trade-Off Platform</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_crypto?crypto=<?= base64_encode('cryptofiat') ?>">Buy & Sell Crypto Using FIAT</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?php if($this->uri->segment(2) == 'link_financial'){echo 'aktif fw-bold';}?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Financial
                        <i class="fa-solid fa-angle-down ms-2"></i>
                    </a>
                    <ul class="dropdown-menu position-absolute">
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_financial?financial=<?= base64_encode('financialoffshore') ?>">Incorporation of Offshore Companies</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_financial?financial=<?= base64_encode('financiallegal') ?>">Financial Legal solutions</a></li>
                        <li><a class="dropdown-item" href="<?= base_url()?>link/link_financial?financial=<?= base64_encode('financialfunds') ?>">Funds Relocation Service</a></li>
                    </ul>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" aria-current="page" href="#">
                        Download
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link <?php if($this->uri->segment(2) == 'work_with_us'){echo 'aktif fw-bold';}?>" href="<?= base_url()?>link/work_with_us">
                        Work with us
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url()?>auth/booking?booking=<?= base64_encode('agreement')?>">
                        <button class="btn btn-primary-cayman my-3 my-lg-0">
                            Online Banking
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
