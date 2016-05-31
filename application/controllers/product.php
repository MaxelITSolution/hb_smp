<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends FrontController {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('FrontAssets');
	}

	public function index()
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme', 'fancybox']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app', 'fancybox']);
	    $this->data['title'] 		= 'Product';
	    $this->data['subview'] 		= 'front/product/main';
    	$this->data['detail'] 		= $this->db->select('p.*')
	    									   ->from('products as p')
	    									   ->where('p.id', $this->input->get('detail'))
	    									   ->get()
	    									   ->row();
      
      
      $page = 1;
      if ($this->input->get("page") != "") {
        $page = $this->input->get("page");
      }
      $perpage = 8;
      $start = ($page-1) * $perpage;
    	$this->data['products'] 	= $this->db->select('p.*')
	    									   ->from('products as p')
	    									   ->limit($perpage,$start)
	    									   ->get()
	    									   ->result();
      $rows = $this->db->count_all('products');
      $this->data['page_count'] = $rows / $perpage + ($rows % $perpage > 0 ? 1 : 0);
      $this->data['current_page'] = $page;
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
