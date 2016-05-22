<?php

class Slideshow_M extends CI_Model {

	function __construct()
    {
    	parent::__construct();
		$this->load->library('lionade');
    }

    public function getJson($input)
	{
		$table 	= 'slideshows as a';
		$select = 'a.*';
		
		$replace_field 	= [
			['old_name' => 'caption', 'new_name' => 'a.caption']
		];

		$param = [
			'input' 		=> $input,
			'select' 		=> $select,
			'table' 		=> $table,
			'replace_field' => $replace_field
		];

		$data = $this->lionade->lionade_query($param, function($data) {
			return $data;
		});

		return $data;
	}

}