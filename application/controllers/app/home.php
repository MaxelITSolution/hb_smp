<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends AppController {

	public function index()
	{
		if ($this->session->userdata('name')) {
			$this->data['title']	= 'Dashboard';
			$this->data['subview'] 	= 'app/home/main';
	    	$this->load->view('app/components/main_layout', $this->data);
		} else {
			redirect('app/auth');
		}
	}

	public function ajax()
	{
		$this->data['title']	= 'Dashboard';
		$this->load->view('app/home/main', $this->data);
	}
}