<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends FrontController {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('FrontAssets');
	}

	public function category($category)
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Post';
	    $this->data['subview'] 		= 'front/post/main';
	    $this->data['category'] 	= $category;
	    $this->data['posts'] 		= $this->db->select('p.*, c.category_name')
	    									   ->from('posts as p')
	    									   ->join('categories as c', 'c.id = p.category_id')
	    									   ->where('category_id', $category)
	    									   ->limit(4)
	    									   ->get()
	    									   ->result();
    	$this->load->view('front/components/main_layout', $this->data);
	}

	public function detail($slug)
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Post';
	    $this->data['subview'] 		= 'front/post/detail';
	    $this->data['post'] 		= $this->db->select('p.*, c.category_name')
	    									   ->from('posts as p')
	    									   ->join('categories as c', 'c.id = p.category_id')
	    									   ->where('p.slug', $slug)
	    									   ->get()
	    									   ->row();
	    $this->data['category'] 	= $this->data['post']->category_id;
    	$this->load->view('front/components/main_layout', $this->data);
	}

	public function search($key)
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Search';
	    $this->data['subview'] 		= 'front/post/search';
	    $this->data['posts'] 		= $this->db->select('p.*, c.category_name')
	    									   ->from('posts as p')
	    									   ->join('categories as c', 'c.id = p.category_id')
	    									   ->like('p.title_' . $this->data['language'], $key)
	    									   ->limit(4)
	    									   ->get()
	    									   ->result();
	    $this->data['key']			= $key;
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
