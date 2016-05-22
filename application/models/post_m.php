<?php

class Post_M extends CI_Model {

	function __construct()
    {
    	parent::__construct();
		$this->load->library('lionade');
    }

    public function getJson($input)
	{
		$table 	= 'posts as a';
		$select = 'a.*';
		
		$replace_field 	= [
			['old_name' => 'title', 'new_name' => 'a.title']
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