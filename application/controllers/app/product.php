<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends AppController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->library('helper');
		$this->load->model('product_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
	    $this->data['title']			= 'Product';
		$this->data['page_title'] 		= 'Halaman Product';
		$this->data['page_subtitle'] 	= 'Daftar Product';
    	$this->load->view('app/product/main', $this->data);
	}

	public function data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->product_m->getJson($this->input->post()));
	}

	public function form()
	{
		$this->data['index'] 			= $this->input->post('index');
		$this->data['page_subtitle'] 	= 'Form Product';
		$this->load->view('app/product/form', $this->data);
	}

	public function validate()
	{
		$rules = [
			'name' => [
				'field' => 'name', 
				'label' => 'Name', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name]'
			],
			'description' => [
				'field' => 'description', 
				'label' => 'Description', 
				'rules' => 'trim|required|xss_clean'
			]
		];

		if ($this->input->post('id')) {
			$rules['name']['rules'] = 'trim|required|xss_clean';
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
		$data['slug'] 			= $this->helper->sluggable($this->input->post('name'));
		$data['description'] 	= $this->input->post('description');
		$data['image_name'] 	= $this->input->post('image_name');
		$this->db->insert('products', $data); 

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

		$data['name'] 			= $this->input->post('name');
		$data['slug'] 			= $this->helper->sluggable($this->input->post('name'));
		$data['description'] 	= $this->input->post('description');
		$data['image_name'] 	= $this->input->post('image_name');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('products', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function delete()
	{
		$this->db->where('id', $this->input->post('id'));
		$file_path = realpath(APPPATH . '../uploads') . '/' . $this->db->get('products')->row()->image_name;
		if (file_exists($file_path)) {
			unlink($file_path);
		}
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('products');
	}

	public function upload()
	{
		$config['upload_path'] 		= realpath(APPPATH . '../uploads');
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['max_size']			= '1000';
		$this->load->library('upload', $config);
		$this->upload->do_upload('images');

		header('Content-Type: application/json');
		echo json_encode(['status' => 'success', 'images' => $this->upload->data()['file_name']]);
	}
}
