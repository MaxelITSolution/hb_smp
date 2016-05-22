<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expertise extends FrontController {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('FrontAssets');
	}

	public function index()
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Our Expertise';
	    $this->data['subview'] 		= 'front/expertise/main';
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
