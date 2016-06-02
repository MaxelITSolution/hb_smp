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
			'name_eng' => [
				'field' => 'name_eng', 
				'label' => 'Name Eng', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name_eng]'
			],
			'name_ina' => [
				'field' => 'name_ina', 
				'label' => 'Name Ina', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name_ina]'
			],
			'name_chn' => [
				'field' => 'name_chn', 
				'label' => 'Name Chn', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name_chn]'
			],
			'name_kor' => [
				'field' => 'name_kor', 
				'label' => 'Name Kor', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name_kor]'
			],
			'name_rus' => [
				'field' => 'name_rus', 
				'label' => 'Name Rus', 
				'rules' => 'trim|required|xss_clean|is_unique[products.name_rus]'
			],
			'description_eng' => [
				'field' => 'description_eng', 
				'label' => 'Description Eng', 
				'rules' => 'trim|required|xss_clean'
			],
			'description_ina' => [
				'field' => 'description_ina', 
				'label' => 'Description Ina', 
				'rules' => 'trim|required|xss_clean'
			],
			'description_chn' => [
				'field' => 'description_chn', 
				'label' => 'Description Chn', 
				'rules' => 'trim|required|xss_clean'
			],
			'description_kor' => [
				'field' => 'description_kor', 
				'label' => 'Description Kor', 
				'rules' => 'trim|required|xss_clean'
			],
			'description_rus' => [
				'field' => 'description_rus', 
				'label' => 'Description Rus', 
				'rules' => 'trim|required|xss_clean'
			],
		];

		if ($this->input->post('id')) {
			$rules['name_eng']['rules'] = 'trim|required|xss_clean';
			$rules['name_ina']['rules'] = 'trim|required|xss_clean';
			$rules['name_chn']['rules'] = 'trim|required|xss_clean';
			$rules['name_kor']['rules'] = 'trim|required|xss_clean';
			$rules['name_rus']['rules'] = 'trim|required|xss_clean';
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
		$data['name_eng'] 			= $this->input->post('name_eng');
		$data['name_ina'] 			= $this->input->post('name_ina');
		$data['name_chn'] 			= $this->input->post('name_chn');
		$data['name_kor'] 			= $this->input->post('name_kor');
		$data['name_rus'] 			= $this->input->post('name_rus');
		$data['slug'] 				= $this->helper->sluggable($this->input->post('name_eng'));
		$data['description_eng'] 	= $this->input->post('description_eng');
		$data['description_ina'] 	= $this->input->post('description_ina');
		$data['description_chn'] 	= $this->input->post('description_chn');
		$data['description_kor'] 	= $this->input->post('description_kor');
		$data['description_rus'] 	= $this->input->post('description_rus');
		$data['image_name'] 		= $this->input->post('image_name');
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

		$data['name_eng'] 			= $this->input->post('name_eng');
		$data['name_ina'] 			= $this->input->post('name_ina');
		$data['name_chn'] 			= $this->input->post('name_chn');
		$data['name_kor'] 			= $this->input->post('name_kor');
		$data['name_rus'] 			= $this->input->post('name_rus');
		$data['slug'] 				= $this->helper->sluggable($this->input->post('name_eng'));
		$data['description_eng'] 	= $this->input->post('description_eng');
		$data['description_ina'] 	= $this->input->post('description_ina');
		$data['description_chn'] 	= $this->input->post('description_chn');
		$data['description_kor'] 	= $this->input->post('description_kor');
		$data['description_rus'] 	= $this->input->post('description_rus');
		if ($this->input->post('image_name')) {
			$data['image_name'] = $this->input->post('image_name');
		}
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
