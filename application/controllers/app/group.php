<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Group extends AppController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('group_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
	    $this->data['title']			= 'Hak Akses';
		$this->data['page_title'] 		= 'Halaman Kelompok Hak Akses';
		$this->data['page_subtitle'] 	= 'Daftar Kelompok Hak Akses';
    	$this->load->view('app/group/main', $this->data);
	}

	public function data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->group_m->getJson($this->input->post()));
	}

	public function form()
	{
		$this->data['index'] 			= $this->input->post('index');
		$this->data['page_subtitle'] 	= 'Form Kelompok Hak Akses';
		$this->load->view('app/group/form', $this->data);
	}

	public function validate()
	{
		$rules = [
			'group_name' => [
				'field' => 'group_name', 
				'label' => 'Group Name', 
				'rules' => 'trim|required|xss_clean|is_unique[groups.group_name]'
			]
		];

		if ($this->input->post('id')) {
			$rules['group_name']['rules'] = 'trim|required|xss_clean';
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
		$data['group_name'] = $this->input->post('group_name');
		$this->db->insert('groups', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function update()
	{
		$data['group_name'] = $this->input->post('group_name');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('groups', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function delete()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('groups');
	}
}
