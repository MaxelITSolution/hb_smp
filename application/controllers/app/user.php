<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends AppController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
	    $this->data['title']			= 'User';
		$this->data['page_title'] 		= 'Halaman User';
		$this->data['page_subtitle'] 	= 'Daftar User';
    	$this->load->view('app/user/main', $this->data);
	}

	public function data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->user_m->getJson($this->input->post()));
	}

	public function form()
	{
		$this->data['index'] 			= $this->input->post('index');
		$this->data['groups'] 			= $this->db->get('groups')->result();
		$this->data['page_subtitle'] 	= 'Form User';
		$this->load->view('app/user/form', $this->data);
	}

	public function validate()
	{
		$rules = [
			'group_id' => [
				'field' => 'group_id', 
				'label' => 'Group ID', 
				'rules' => 'trim|required|xss_clean'
			],
			'name' => [
				'field' => 'name', 
				'label' => 'Name', 
				'rules' => 'trim|required|xss_clean'
			],
			'password' => [
				'field' => 'password', 
				'label' => 'Password', 
				'rules' => 'trim|required|xss_clean'
			],
			'phone_number' => [
				'field' => 'phone_number', 
				'label' => 'Phone Number', 
				'rules' => 'trim|required|xss_clean'
			],
			'email' => [
				'field' => 'email', 
				'label' => 'Email', 
				'rules' => 'trim|required|xss_clean|valid_email|is_unique[users.email]'
			],
			'password' => [
				'field' => 'password', 
				'label' => 'Password', 
				'rules' => 'trim|required|xss_clean'
			],
			'gender' => [
				'field' => 'gender', 
				'label' => 'Gender', 
				'rules' => 'trim|required|xss_clean'
			],
			'birthday' => [
				'field' => 'birthday', 
				'label' => 'Birthday', 
				'rules' => 'trim|required|xss_clean'
			],
			'address' => [
				'field' => 'address', 
				'label' => 'Address', 
				'rules' => 'trim|required|xss_clean'
			]
		];

		if ($this->input->post('id')) {
			$rules['email']['rules'] = 'trim|required|xss_clean';
		}

	    $this->form_validation->set_rules($rules);
	    $messages = $this->form_validation->run() ? 'success' : $this->form_validation->error_array();

		header('Content-Type: application/json');
	    echo json_encode($messages);
	}

	public function action()
	{
		if (!$this->input->post('id')) {
			$this->create();
		} else {
			$this->update();
		}
	}

	public function create()
	{
		$data['name'] 			= $this->input->post('name');
		$data['password'] 		= $this->input->post('password');
		$data['phone_number'] 	= $this->input->post('phone_number');
		$data['email'] 			= $this->input->post('email');
		$data['password'] 		= md5($this->input->post('password'));
		$data['gender'] 		= $this->input->post('gender');
		$data['group_id'] 		= $this->input->post('group_id');
		$data['birthday'] 		= date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('birthday'))));
		$data['address'] 		= $this->input->post('address');
		$this->db->insert('users', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function update()
	{
		$data['name'] 			= $this->input->post('name');
		$data['password'] 		= $this->input->post('password');
		$data['phone_number'] 	= $this->input->post('phone_number');
		$data['email'] 			= $this->input->post('email');
		$data['password'] 		= md5($this->input->post('password'));
		$data['gender'] 		= $this->input->post('gender');
		$data['group_id'] 		= $this->input->post('group_id');
		$data['birthday'] 		= date('Y-m-d', strtotime(str_replace('/', '-', $this->input->post('birthday'))));
		$data['address'] 		= $this->input->post('address');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('users', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function delete()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('users');
	}
}
