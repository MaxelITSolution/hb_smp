<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Privilege extends AppController {

	public function index()
	{
		$this->data['menus'] 			= $this->db->get('menus')->result();
		$this->data['groups'] 			= $this->db->get('groups')->result();
		$this->data['title']			= 'Privilege';
		$this->data['page_title'] 		= 'Halaman Privilege';
		$this->data['page_subtitle'] 	= 'Daftar Privilege';
    	$this->load->view('app/privilege/main', $this->data);
	}

	public function load()
	{
		$privilege = $this->db->where('group_id', $this->input->post('group_id'))->get('privileges')->result();
		header('Content-Type: application/json');
		echo json_encode($privilege);
	}

	public function action()
	{
		$privilege = $this->db->where('group_id', $this->input->post('group_id'))->delete('privileges');
		foreach ($this->input->post('arr_id') as $id) {
			$data['group_id'] 	= $this->input->post('group_id');
			$data['menu_id'] 	= $id;
			$this->db->insert('privileges', $data);
		}
	}
}