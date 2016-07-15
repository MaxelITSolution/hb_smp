<?php

class FrontController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
//		if (!$this->session->userdata('language')) {
			$this->session->set_userdata(['language' => 'eng']);
//		}
    $this->data['language']      = $this->session->userdata('language');
		$this->data['lang_path']			= "";
		$this->data['static_content'] 	= $this->db->get('static_contents')->result();
		foreach ($this->data['static_content'] as $key => $static_content) {
			$temp = 'value_' . $this->session->userdata('language');
			$this->data['static_content'][$key]->value = $static_content->$temp;
		}
	}

	public function language($language = "")
	{
    if ($language == "") $language = $this->input->post('language');
		$this->session->set_userdata(['language' => $language]);
	}

  public function lang($lang = "eng",$module = "",$param = "") {
    $this->session->set_userdata(['language' => "eng"]);
    $language = ["ina","chn","kor","rus"];    
    if (in_array($lang,$language)) {
      $this->data['lang_path']      = $lang."/";
      $this->session->set_userdata(['language' => $lang]);
    }
    $this->data['language']      = $this->session->userdata('language');
    $this->data['static_content']   = $this->db->get('static_contents')->result();
    foreach ($this->data['static_content'] as $key => $static_content) {
      $temp = 'value_' . $this->session->userdata('language');
      $this->data['static_content'][$key]->value = $static_content->$temp;
    }
    if ($module == "") {
      $this->index();      
    } else {
      eval("\$this->".$module."(\$param);");      
    }
  }
}
