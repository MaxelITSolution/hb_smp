<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends AppController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('file');
		$this->load->model('post_m');
		$this->load->library('helper');
		$this->load->library('form_validation');
	}

	public function index()
	{
	    $this->data['title']			= 'Post';
		$this->data['page_title'] 		= 'Halaman Post';
		$this->data['page_subtitle'] 	= 'Daftar Post';
    	$this->load->view('app/post/main', $this->data);
	}

	public function data()
	{
		header('Content-Type: application/json');
		echo json_encode($this->post_m->getJson($this->input->post()));
	}

	public function form()
	{
		$this->data['index'] 			= $this->input->post('index');
		$this->data['categories'] 		= $this->db->get('categories')->result();
		$this->data['page_subtitle'] 	= 'Form Post';
		$this->load->view('app/post/form', $this->data);
	}

	public function validate()
	{
		$rules = [
			'category_id' => [
				'field' => 'category_id', 
				'label' => 'Category ID', 
				'rules' => 'trim|required|xss_clean'
			],
			'title_eng' => [
				'field' => 'title_eng', 
				'label' => 'Title Eng', 
				'rules' => 'trim|required|xss_clean|is_unique[posts.title_eng]'
			],
			'title_ina' => [
				'field' => 'title_ina', 
				'label' => 'Title Ina', 
				'rules' => 'trim|required|xss_clean|is_unique[posts.title_ina]'
			],
			'title_chn' => [
				'field' => 'title_chn', 
				'label' => 'Title Chn', 
				'rules' => 'trim|required|xss_clean|is_unique[posts.title_chn]'
			],
			'title_kor' => [
				'field' => 'title_kor', 
				'label' => 'Title Kor', 
				'rules' => 'trim|required|xss_clean|is_unique[posts.title_kor]'
			],
			'title_rus' => [
				'field' => 'title_rus', 
				'label' => 'Title Rus', 
				'rules' => 'trim|required|xss_clean|is_unique[posts.title_rus]'
			],
			'content_eng' => [
				'field' => 'content_eng', 
				'label' => 'Content Eng', 
				'rules' => 'trim|required|xss_clean'
			],
			'content_ina' => [
				'field' => 'content_ina', 
				'label' => 'Content Ina', 
				'rules' => 'trim|required|xss_clean'
			],
			'content_chn' => [
				'field' => 'content_chn', 
				'label' => 'Content Chn', 
				'rules' => 'trim|required|xss_clean'
			],
			'content_kor' => [
				'field' => 'content_kor', 
				'label' => 'Content Kor', 
				'rules' => 'trim|required|xss_clean'
			],
			'content_rus' => [
				'field' => 'content_rus', 
				'label' => 'Content Rus', 
				'rules' => 'trim|required|xss_clean'
			]
		];

		if ($this->input->post('id')) {
			$rules['title_eng']['rules'] = 'trim|required|xss_clean';
			$rules['title_ina']['rules'] = 'trim|required|xss_clean';
			$rules['title_chn']['rules'] = 'trim|required|xss_clean';
			$rules['title_kor']['rules'] = 'trim|required|xss_clean';
			$rules['title_rus']['rules'] = 'trim|required|xss_clean';
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
		$data['category_id'] 	= $this->input->post('category_id');
		$data['slug'] 			= $this->helper->sluggable($this->input->post('title_eng'));
		$data['title_eng'] 		= $this->input->post('title_eng');
		$data['title_ina'] 		= $this->input->post('title_ina');
		$data['title_chn'] 		= $this->input->post('title_chn');
		$data['title_kor'] 		= $this->input->post('title_kor');
		$data['title_rus'] 		= $this->input->post('title_rus');
		$data['content_eng'] 	= $this->input->post('content_eng');
		$data['content_ina'] 	= $this->input->post('content_ina');
		$data['content_chn'] 	= $this->input->post('content_chn');
		$data['content_kor'] 	= $this->input->post('content_kor');
		$data['content_rus'] 	= $this->input->post('content_rus');
		$data['image_name'] 	= $this->input->post('image_name');
		$data['created_at'] 	= date('Y-m-d H:i:s');
		$this->db->insert('posts', $data); 

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

		$data['category_id'] 	= $this->input->post('category_id');
		$data['slug'] 			= $this->helper->sluggable($this->input->post('title_eng'));
		$data['title_eng'] 		= $this->input->post('title_eng');
		$data['title_ina'] 		= $this->input->post('title_ina');
		$data['title_chn'] 		= $this->input->post('title_chn');
		$data['title_kor'] 		= $this->input->post('title_kor');
		$data['title_rus'] 		= $this->input->post('title_rus');
		$data['content_eng'] 	= $this->input->post('content_eng');
		$data['content_ina'] 	= $this->input->post('content_ina');
		$data['content_chn'] 	= $this->input->post('content_chn');
		$data['content_kor'] 	= $this->input->post('content_kor');
		$data['content_rus'] 	= $this->input->post('content_rus');
		if ($this->input->post('image_name')) {
			$data['image_name'] = $this->input->post('image_name');
		}
		$data['updated_at'] 	= date('Y-m-d H:i:s');
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('posts', $data); 

		header('Content-Type: application/json');
    	echo json_encode('success');
	}

	public function delete()
	{
		$this->db->where('id', $this->input->post('id'));
		$file_path = realpath(APPPATH . '../uploads') . '/' . $this->db->get('posts')->row()->image_name;
		if (file_exists($file_path)) {
			unlink($file_path);
		}
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('posts');
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
