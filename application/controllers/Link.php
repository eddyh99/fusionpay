<?php
/*----------------------------------------------------------
    Modul Name  : Modul Link 
    Desc        : Modul ini di gunakan untuk menampilkan Link yang terhubung
                  dengan landingpage maupun page lain  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Link extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// SEMENTARA MASIH PUNYA LINK KE BANK
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/link_bank',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
			'bank'			=> base64_decode(@$_GET['bank']),
		);
		
		$this->load->view('tamplate/wrapper', $data);
	}

	public function link_bank()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/link_bank',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
			'bank'			=> base64_decode(@$_GET['bank']),
		);
		
		$this->load->view('tamplate/wrapper', $data);
	}


	
	public function link_crypto()
	{
		// print_r($this->uri->segment(2));
		// die;
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/link_crypto',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
			'crypto'		=> base64_decode(@$_GET['crypto']),
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function link_financial()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/link_financial',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
			'financial'		=> base64_decode(@$_GET['financial']),
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function work_with_us()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/work_with_us',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function price_list()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/price_list',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function our_mission()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/our_mission',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function about_us()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/landingpage/about_us',
            'navbar'    	=> 'tamplate/navbar-landing',
			'footerlanding'	=> 'tamplate/footer-landing',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function privacy_police()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/privacy_police',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function contact_notif()
	{
		$data	= array(
            'title'		 	=> NAMETITLE . ' - Financial Group',
            'content'	 	=> 'auth/contact_notif',
			'extra'		 	=> 'auth/js/js_index',
		);

		$this->load->view('tamplate/wrapper', $data);
	}



}
