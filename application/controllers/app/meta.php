<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Meta extends AppController {

	public function index()
	{
    if ($this->input->post('web_title')) {
      $this->db->query('UPDATE static_contents SET value_chn = "'.$this->input->post('web_title').'" WHERE page="web_title"');
    }
    if ($this->input->post('web_meta')) {
      $this->db->query('UPDATE static_contents SET value_chn = "'.$this->input->post('web_meta').'" WHERE page="web_title"');
    }
    


		$this->data['menus'] 			= $this->db->get('menus')->result();
		$this->data['groups'] 			= $this->db->get('groups')->result();
		$this->data['title']			= 'Meta';
		$this->data['page_title'] 		= 'Halaman Pengaturan Meta';
		$this->data['page_subtitle'] 	= 'Daftar pengaturan Meta';

    
    $temp = $this->db->query('SELECT value_eng FROM static_contents WHERE page="web_title"')->result_array();
    $this->data['web_title']       = $temp[0]['value_eng'];
    $temp = $this->db->query('SELECT value_eng FROM static_contents WHERE page="web_meta"')->result_array();
    $this->data['web_meta']       = $temp[0]['value_eng'];
    
    
    
    $this->load->view('app/meta/main', $this->data);
	}

	public function action()
	{
    $data['value_eng'] = $this->input->post('web_title');
    $this->db->where('page', "web_title");
    $this->db->update('static_contents', $data);
    
    $data['value_eng'] = $this->input->post('web_meta');
    $this->db->where('page', "web_meta");
    $this->db->update('static_contents', $data);
    
    return 1;
	}
}