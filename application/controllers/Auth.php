<?php
/*----------------------------------------------------------
    Modul Name  : Modul Auth
    Desc        : Modul ini di gunakan untuk menampilkan landing page, Error 404
				  User Signup, Login, Reset Pass,  
    Sub fungsi  : 
        - page404    	: berfungsi Menampilkan Error 404
        
------------------------------------------------------------*/ 
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		if (isset($this->session->userdata['logged_status'])) {
			redirect("admin/dashboard");
		}

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Login',
            'content'	 	=> 'auth/login',
			'extra'		    => 'auth/js/js_index'
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function auth_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', $this->message->error_msg(validation_errors()));
			redirect("/");
			return;
		}

		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));

		
		$result= array(
			"email"		=> $email,
			"password"	=> $password
		);
		// print_r($result);
		// die;

		if (!empty($result)) {
			$session_data = array(
				'email'     	=> $result->email,
				'password'      => $result->password,
				'is_login'  	=> true
			);
			$this->session->set_userdata('logged_status', $session_data);
			redirect('admin/dashboard');
		} else {
			$this->session->set_flashdata('error', "username atau password salah, mohon periksa ulang");
			redirect("/");
			return;
		}


		$data	= array(
            'title'		 	=> NAMETITLE . ' - Login',
            'content'	 	=> 'auth/login',
			'extra'		    => 'auth/js/js_index'
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function page404()
	{
		$this->output->set_status_header('404');

		$data	= array(
            'title'		 => NAMETITLE . ' - 404 Page Not Found',
            'content'	 => 'auth/404',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function registration()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Registration',
            'content'	 	=> 'auth/registrasi',
			'extra'		    => 'auth/js/js_index'
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function registration_notif()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Registration Success',
            'content'	 	=> 'auth/registrasi_notif',
			'extra'		    => 'auth/js/js_index'
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function forgot_password()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Forgot Password',
            'content'	 	=> 'auth/forgot_pass',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function forgot_notif()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Forgot Password',
            'content'	 	=> 'auth/forgot_pass_notif',
		);

		$this->load->view('tamplate/wrapper', $data);
	}


	public function change_password()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Change Password',
            'content'	 	=> 'auth/change_pass',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function change_notif()
	{

		$data	= array(
            'title'		 	=> NAMETITLE . ' - Change Password',
            'content'	 	=> 'auth/change_pass_notif',
		);

		$this->load->view('tamplate/wrapper', $data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}

}
