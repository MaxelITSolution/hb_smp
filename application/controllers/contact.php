<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends FrontController {
	
	public function __construct()
	{
		parent::__construct();
        $this->load->library('FrontAssets');
        $this->load->library('email');
	}

	public function index()
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Contact';
	    $this->data['subview'] 		= 'front/contact/main';
    	$this->load->view('front/components/main_layout', $this->data);
	}

	public function send()
	{
		$assets = new FrontAssets;
		$this->data['css_assets'] 	= $assets->load('css', ['bootstrap', 'vegas', 'style', 'font-awesome', 'owl-carousel', 'owl-theme']);
		$this->data['js_assets'] 	= $assets->load('js', ['jquery', 'bootstrap', 'vegas', 'app']);
	    $this->data['title'] 		= 'Send Contact';
	    $this->data['subview'] 		= 'front/contact/success';

	    $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.mailgun.org";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "postmaster@sandbox3ccca1fae7074b2db48a33955068dd24.mailgun.org";
        $config['smtp_pass'] = "07a971c5504e786f1de15f3682a98cb3";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $this->email->initialize($config);
        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $list = array('dev.muhammadrizki@gmail.com', 'taufan.erlangga@gmail.com', 'marketing@sarimas.com');
        $this->email->to($list);
        $this->email->subject('Contact Sari Mas Permai');
        $this->email->message('Contact message.');
        $this->email->send();
        
    	$this->load->view('front/components/main_layout', $this->data);
	}

}
