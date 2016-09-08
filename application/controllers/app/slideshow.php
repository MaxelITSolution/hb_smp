<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slideshow extends AppController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->model('slideshow_m');
		$this->load->library('helper');
		$this->load->library('form_validation');
	}

	public function index()
	{
	    $this->data['title']			= 'Slideshow';
		$this->data['page_title'] 		= 'Halaman Slideshow';
		$this->data['page_subtitle'] 	= 'Daftar Slideshow';
    	$this->load->view('app/slideshow/main', $this->data);
	}

	public function data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->slideshow_m->getJson($this->input->post()));
	}

	public function form()
	{
		$this->data['index'] 			= $this->input->post('index');
		$this->data['page_subtitle'] 	= 'Form Slideshow';
		$this->load->view('app/slideshow/form', $this->data);
	}

	public function validate()
	{
		$rules = [
			'caption' => [
				'field' => 'caption', 
				'label' => 'Caption', 
				'rules' => 'trim|required|xss_clean'
			]
		];

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
		$data['caption'] 	= $this->input->post('caption');
		$data['image_name'] = $this->input->post('image_name');
		$this->db->insert('slideshows', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function update()
	{
		$images = json_decode($this->input->post('deleted_files'));
		if (!empty($images)) {
			$file_path = realpath(APPPATH . '../uploads') . '/' . $images[0];
			if (file_exists($file_path)) {
				unlink($file_path);
			}
		}

		$data['caption'] 	= $this->input->post('caption');
		$data['image_name'] = $this->input->post('image_name');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('slideshows', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function delete()
	{
		$this->db->where('id', $this->input->post('id'));
		$file_path = realpath(APPPATH . '../uploads') . '/' . $this->db->get('slideshows')->row()->image_name;
		if (file_exists($file_path)) {
			unlink($file_path);
		}
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('slideshows');
	}

	public function upload()
	{
		$config['upload_path'] 		= realpath(APPPATH . '../uploads');
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']			= '100000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('images');

		header('Content-Type: application/json');
		echo json_encode(['status' => 'success', 'images' => $this->upload->data()['file_name']]);
	}
}
