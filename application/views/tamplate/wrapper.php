<?php

//Menggabungkan semua bagian halaman
require_once('header.php');

if (isset($content)){

	// For Navbar Landing Page
	if(isset($navbar)){
		$this->load->view($navbar);
	}

	$this->load->view($content);

	// For Foot Landing Page
	if(isset($footerlanding)){
		$this->load->view($footerlanding);
	}
}

require_once('footer.php');
