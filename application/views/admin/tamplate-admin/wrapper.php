<?php
// if (isset($this->session->userdata['logged_status'])) {
    //Menggabungkan semua bagian halaman
    require_once('header-admin.php');

    if (isset($content)) {
        $this->load->view($content);
    }
    //if (isset($this->session->userdata['logged_status'])) {
    require_once('footer-admin.php');
    //}
// } 
