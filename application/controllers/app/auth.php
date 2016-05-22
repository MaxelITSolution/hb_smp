<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('AppAssets');
	}

	public function index()
	{
		$assets = new AppAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'animate', 'font-awesome', 'animsition', 'main', 'custom', 'sweetalert', 'datepicker', 'treegrid', 'redactor', 'semeru-uploader']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'jrespond', 'jquery-sparkline', 'jquery-slimscroll', 'jquery-animsition', 'screenfull', 'main', 'datagrid', 'semeru-form', 'semeru-disabler', 'semeru-enabler', 'semeru-validate', 'sweetalert', 'momentjs', 'datepicker', 'treegrid', 'redactor', 'semeru-uploader']);
		$this->data['title'] 		= 'Signin';
    	$this->load->view('app/signin/main', $this->data);
	}

	public function signin()
	{
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
	
		$rules = [
			'email' => [
				'field' => 'email', 
				'label' => 'Email', 
				'rules' => 'trim|required|xss_clean'
			],
			'password' => [
				'field' => 'password', 
				'label' => 'Password', 
				'rules' => 'trim|required|xss_clean'
			]
		];

	    $this->form_validation->set_rules($rules);
	    if ($this->form_validation->run()) {
			$user = $this->user_m->signin($email, md5($password));
	    	if (!empty($user)) {
				$this->session->set_userdata($user[0]);
			   	header('Content-Type: application/json');
	    		echo json_encode(['status' => 'Login Success']);
			} else {
			   	header('Content-Type: application/json');
	    		echo json_encode(['password' => 'Password salah!']);
			}
	    } else {
			header('Content-Type: application/json');
	    	echo json_encode($this->form_validation->error_array());
	    }
	}

	public function signout()
	{
		$this->session->sess_destroy();
		redirect('app/auth');
	}
}
