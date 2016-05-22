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
    	$this->data['products'] 	= $this->db->select('p.*')
	    									   ->from('products as p')
	    									   ->limit(8)
	    									   ->get()
	    									   ->result();
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
