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
			'title' => [
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'trim|required|xss_clean|is_unique[posts.title]'
			],
			'content' => [
				'field' => 'content',
				'label' => 'Content',
				'rules' => 'trim|required|xss_clean'
			]
		];

		if ($this->input->post('id')) {
			$rules['title']['rules'] = 'trim|required|xss_clean';
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
		$data['slug'] 			= $this->helper->sluggable($this->input->post('title'));
		$data['title'] 			= $this->input->post('title');
		$data['content'] 		= $this->input->post('content');
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
		$data['slug'] 			= $this->helper->sluggable($this->input->post('title'));
		$data['title'] 			= $this->input->post('title');
		$data['content'] 		= $this->input->post('content');
		$data['image_name'] 	= $this->input->post('image_name');
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
