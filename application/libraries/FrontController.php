<?php

class FrontController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('language')) {
			$this->session->set_userdata(['language' => 'eng']);
		}
		$this->data['language']			= $this->session->userdata('language');
		$this->data['static_content'] 	= $this->db->get('static_contents')->result();
		foreach ($this->data['static_content'] as $key => $static_content) {
			$temp = 'value_' . $this->session->userdata('language');
			$this->data['static_content'][$key]->value = $static_content->$temp;
		}
	}

	public function language()
	{
		$language = $this->input->post('language');
		$this->session->set_userdata(['language' => $language]);
	}

}
