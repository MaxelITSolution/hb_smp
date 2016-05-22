<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends FrontController {
	
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
	    $this->data['title'] 		= 'Profile';
	    $this->data['subview'] 		= 'front/profile/main';
	    $this->data['pdf_download'] = $this->pdf_download();
    	$this->load->view('front/components/main_layout', $this->data);
	}

	public function pdf_download()
	{
		if ($this->data['language'] == "eng") {
			return site_url('uploads/SMP_Compro_F3.pdf');
		} else if ($this->data['language'] == "ina") {
			return site_url('uploads/SMP_Compro_F2_Ina.pdf');
		} else if ($this->data['language'] == "chn") {
			return site_url('uploads/SMP_Compro_CHN-08.pdf');
		} else if ($this->data['language'] == "kor") {
			return site_url('uploads/SMP_Compro_KOR-05.pdf');
		} else if ($this->data['language'] == "rus") {
			return site_url('uploads/SMP_Compro_RUS-06.pdf');
		}
	}

}
