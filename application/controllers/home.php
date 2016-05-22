<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends FrontController {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('post_m');
        $this->load->library('FrontAssets');
	}

	public function index()
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme', 'fancybox']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app', 'jcarousel', 'fancybox', 'owl-carousel']);
	    $this->data['title'] 		= 'Home';
	    $this->data['posts'] 		= $this->db->select('p.*, c.category_name')
	    									   ->from('posts as p')
	    									   ->join('categories as c', 'c.id = p.category_id')
	    									   ->limit(4)
	    									   ->get()
	    									   ->result();
		$this->data['products'] 	= $this->db->select('p.*')
	    									   ->from('products as p')
	    									   ->limit(6)
	    									   ->get()
	    									   ->result();
	    $this->data['subview'] 		= 'front/home/main';
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
