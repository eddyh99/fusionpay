<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?= base_url() ?>assets/vendor/intl-tel-input-master/build/js/intlTelInput.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>


<?php
if (isset($extra)) {
    $this->load->view($extra);
}
?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JVEK6294YT"></script>

</body>

</html>